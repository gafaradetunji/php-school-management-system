<?php
class Course {

private $id;
private $name;
private $createdAt;
private $updatedAt;

public function __construct($id, $name, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->name = $name;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get Course Materials, Departments (implementation omitted)
public function getCourseMaterials() {
  // ... logic to retrieve CourseMaterial objects associated with this Course
}

public function getDepartments() {
  // ... logic to retrieve Department objects associated with this Course (through department_course table)
}
}
