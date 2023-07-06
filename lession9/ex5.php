<?php
class Student {
    private $studentID;
    private $firstName;
    private $lastName;

    public function __construct($studentID, $firstName, $lastName) {
        $this->studentID = $studentID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

class StudentList {
    private $students;

    public function __construct() {
        $this->students = [];
    }

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function displayStudents() {
        foreach ($this->students as $student) {
            echo "Student ID: " . $student->getStudentID() . "\n";
            echo "Full Name: " . $student->getFullName() . "\n\n";
        }
    }
}

$studentList = new StudentList();

$student1 = new Student(1, "Giang", "Nguyen");
$student2 = new Student(2, "Anh", "Nguyen");

$studentList->addStudent($student1);
$studentList->addStudent($student2);

$studentList->displayStudents();

?>