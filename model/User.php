<?php 
class User {

private $id;
private $firstName;
private $lastName;
private $email;
private $password;
private $roleId;
private $createdAt;
private $updatedAt;

public function __construct($id, $firstName, $lastName, $email, $password, $roleId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->firstName = $firstName;
  $this->lastName = $lastName;
  $this->email = $email;
  $this->password = $password;
  $this->roleId = $roleId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the Role object (implementation omitted)
public function getRole() {
  // ... logic to retrieve Role object based on $roleId
}
}
