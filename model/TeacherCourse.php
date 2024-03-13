<?php 
class TeacherCourse {

private $id;
private $teacherId;
private $courseId;
private $createdAt;
private $updatedAt;

public function __construct($id, $teacherId, $courseId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->teacherId = $teacherId;
  $this->courseId = $courseId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the Teacher object (implementation omitted)
public function getTeacher() {
  // ... logic to retrieve the associated Teacher object based on $teacherId
}

// Function to get the Course object (implementation omitted)
public function getCourse() {
  // ... logic to retrieve the associated Course object based on $courseId
}
}
