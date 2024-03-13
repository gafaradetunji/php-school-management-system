<?php 
class Event {

private $id;
private $name;
private $description;
private $eventDate;
private $createdAt;
private $updatedAt;

public function __construct($id, $name, $description, $eventDate, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->name = $name;
  $this->description = $description;
  $this->eventDate = $eventDate;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}
}
