<?php
// Define an abstract class with an abstract function
abstract class Shape {
  abstract public function getArea();
  public function human(){
    
  }
}

// Define a subclass that extends the abstract class
class Rectangle extends Shape {
  private $length;
  private $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
  }

  // Implement the abstract function from the parent class
  public function getArea() {
    return $this->length * $this->width;
  }
}

// Define another subclass that extends the abstract class
class Circle extends Shape {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  // Implement the abstract function from the parent class
  public function getArea() {
    return pi() * pow($this->radius, 2);
  }
}

// Create new instances of the subclasses and call their functions
$rectangle = new Rectangle(5, 10);
echo "The area of the rectangle is " . $rectangle->getArea() . "\n"; 

$circle = new Circle(3);
echo "The area of the circle is " . $circle->getArea() . "\n"; 

