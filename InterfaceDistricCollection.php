<?php
class District  {

private $districts;

public function __construct()
{
   $this->districts = array(); 
}

function addDistrict($districtErJonnoVariable){
    array_push($this->districts,$districtErJonnoVariable);
}
function getDistricts(){
    return $this->districts;

}



}
$EktaObjectNilam = new District;
$EktaObjectNilam->addDistrict("Barishal");
$EktaObjectNilam->addDistrict("Dhaka");
$EktaObjectNilam->addDistrict('Khulna');

$EktaTemporaryVariableNilam = $EktaObjectNilam->getDistricts();
//print_r($EktaTemporaryVariableNilam);

foreach($EktaTemporaryVariableNilam as $district){

    echo $district."\n";
}

//Interface Apply kori nai