<?php 
class Teacher {

private $id;
private $phoneNumber;
private $dateOfBirth;
private $gender;
private $licenseNumber;
private $licenseCertificate; // Consider storing certificate path or base64-encoded data
private $streetAddress;
private $city;
private $state;
private $postalCode;
private $country;
private $userId;
private $schoolId;
private $createdAt;
private $updatedAt;

public function __construct($id, $phoneNumber, $dateOfBirth, $gender, $licenseNumber, $licenseCertificate, $streetAddress, $city, $state, $postalCode, $country, $userId, $schoolId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->phoneNumber = $phoneNumber;
  $this->dateOfBirth = $dateOfBirth;
  $this->gender = $gender;
  $this->licenseNumber = $licenseNumber;
  $this->licenseCertificate = $licenseCertificate;
  $this->streetAddress = $streetAddress;
  $this->city = $city;
  $this->state = $state;
  $this->postalCode = $postalCode;
  $this->country = $country;
  $this->userId = $userId;
  $this->schoolId = $schoolId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the User object (implementation omitted)
public function getUser() {
  // ... logic to retrieve the associated User object based on $userId
}

// Function to get the School object (implementation omitted)
public function getSchool() {
  // ... logic to retrieve the associated School object based on $schoolId
}

// Function to get Departments, Courses (implementation omitted)
public function getDepartments() {
  // ... logic to retrieve Department objects associated with this Teacher (through department_teacher table)
}

public function getCourses() {
  // ... logic to retrieve Course objects associated with this Teacher (through teacher_course table)
}
}
