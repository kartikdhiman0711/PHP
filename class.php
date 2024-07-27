<?php

class Student {
    // Properties
    public $name;
    public $age;
    public $grade;

    // Method to set student information
    public function setInfo($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Method to display student information
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

// Create an instance of the Student class
$student1 = new Student();

// Set student information using the setInfo method
$student1->setInfo("John Doe", 18, "A");

// Display student information
$student1->displayInfo();
?>