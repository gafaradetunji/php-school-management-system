<?php 
class CourseMaterial {

private $id;
private $courseResource;  // Consider a more specific data type
private $courseId;
private $createdAt;
private $updatedAt;

public function __construct($id, $courseResource, $courseId, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->courseResource = $courseResource;
  $this->courseId = $courseId;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the Course object (implementation omitted)
public function getCourse() {
  // ... logic to retrieve the associated Course object based on $courseId
}

public function getCourseResourceType() {
  // You can define a method to determine the type of resource based on the data
  $resourceType = "";
  if (is_string($this->courseResource)) {
    $resourceType = "text"; // Example for text content
  } elseif (is_resource($this->courseResource)) {
    $resourceType = "file"; // Example for uploaded file resource
  }
  // ... add logic to identify other resource types (e.g., image, video)
  return $resourceType;
}
}
