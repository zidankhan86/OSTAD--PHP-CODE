<?php

function doLargerTask(){


    echo "Step A\n";
    echo "Step B\n";
    echo "Step C\n";
    echo "Step D\n";
    echo "Step E\n";
    echo "Step G\n";
    echo "Step F\n";
    

}

doLargerTask();//This is very bad practice 
//it is working with lot of function at a time so it very tough to handle 
echo PHP_EOL;
function task(){
    echo "task A";
}
function taskB(){
    echo "task B";
}
function taskC(){
    echo "task C";
}
function taskD(){
    echo "task D";
}
function taskF(){
    echo "task F";
}
function taskG(){
    echo "task G";
}
taskG();
