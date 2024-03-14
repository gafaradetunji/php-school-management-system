<?php 
require_once baseUrl('database/Database.php');

class Role {

private $id;
protected $db;
private $name;
private $createdAt;
private $updatedAt;

public function __construct($id, $name, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->name = $name;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

protected function connectdb() {
 $config = require baseUrl('config/credential.php');
  $this->db = new Database($config);
}

public function getRoleId() {
  $role = $this->db->query("SELECT * FROM role")->fetchAll();
  var_dump($role);
}
}

// INSERT INTO "role" (
//   id,
//   role_name
// ) 
// VALUES (
//   '550e8400-e29b-41d4-a716-446655440222',
//   'Admin'
// );