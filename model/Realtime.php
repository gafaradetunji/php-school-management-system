<?php 
class RealTimeMessage {

private $id;
private $senderId;
private $recipientId;
private $messageText;
private $messageTime;
private $createdAt;
private $updatedAt;

public function __construct($id, $senderId, $recipientId, $messageText, $messageTime, $createdAt, $updatedAt) {
  $this->id = $id;
  $this->senderId = $senderId;
  $this->recipientId = $recipientId;
  $this->messageText = $messageText;
  $this->messageTime = $messageTime;
  $this->createdAt = $createdAt;
  $this->updatedAt = $updatedAt;
}

// Function to get the Sender User object (implementation omitted)
public function getSender() {
  // ... logic to retrieve the associated User object based on $senderId
}

// Function to get the Recipient User object (implementation omitted)
public function getRecipient() {
  // ... logic to retrieve the associated User object based on $recipientId
}
}
