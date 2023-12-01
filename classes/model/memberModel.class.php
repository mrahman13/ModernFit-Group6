<?php

class memberModel extends dbConnection
{
  // protected $member_id;
  // protected $first_name;
  // protected $last_name;
  // protected $profile_picture;
  // protected $date_joined;
  // protected $pin;

  protected function getMember($user_id)
  {
    $query = "SELECT * from member where user_id = ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$user_id]);
    return $stmt;
  }
  protected function makePin()
  {
    // need to make a new pin, and then check with all pins saved, if there arn't any can add, otherwise need to make another
    $pin = rand(100000,999999);
    $query = "SELECT COUNT(*) from member WHERE pin = ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$pin]);
    $count = $stmt->fetchColumn();
    while($count != 0)
    { 
      $pin = rand(100000,999999);
      $query = "SELECT pin from member WHERE pin = ?";
      $stmt = $this->connect()->prepare($query);
      $stmt->execute([$pin]);
      $count = $stmt->fetchColumn();
    }
    return $pin;
  }
  protected function setMember($first_name, $last_name, $profile_picture, $date_joined, $user_id)
  {
    $pin = $this->makePin();
    $query = "INSERT INTO member (first_name,last_name,profile_picture,date_joined,pin,user_id) values (?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$first_name, $last_name, $profile_picture, $date_joined, $pin, $user_id]);
  }
}
