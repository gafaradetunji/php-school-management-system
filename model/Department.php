<?php 
class Department {

private $id;
private $name;
private $schoolId;
private $createdAt;
private $updatedAt;

public function __construct($id, $name, $schoolId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->name = $name;
  $this->schoolId = $schoolId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the School object (implementation omitted)
public function getSchool() {
  // ... logic to retrieve the associated School object based on $schoolId
}

// Function to get Teachers, Courses (implementation omitted)
public function getTeachers() {
  // ... logic to retrieve Teacher objects associated with this Department (through department_teacher table)
}

public function getCourses() {
  // ... logic to retrieve Course objects associated with this Department
}
}
