<?php 
class GradesAssessment {

private $id;
private $gradeCalculation;
private $studentId;
private $courseId;
private $createdAt;
private $updatedAt;

public function __construct($id, $gradeCalculation, $studentId, $courseId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->gradeCalculation = $gradeCalculation;
  $this->studentId = $studentId;
  $this->courseId = $courseId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the Student object (implementation omitted)
public function getStudent() {
  // ... logic to retrieve the associated Student object based on $studentId
}

// Function to get the Course object (implementation omitted)
public function getCourse() {
  // ... logic to retrieve the associated Course object based on $courseId
}
}
