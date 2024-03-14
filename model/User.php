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

// INSERT INTO "user" (
//   id,
//   first_name,
//   last_name,
//   email,
//   password,
//   role_id
// ) 
// VALUES (
//   '550e8400-e29b-41d4-a716-446655440000',
//   'John',
//   'Doe',
//   'johnDoe@gmail.com',
//   '12345',
//   '550e8400-e29b-41d4-a716-446655440222'
// );