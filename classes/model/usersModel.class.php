<?php

class usersModel extends dbConnection
{
  // protected $user_id;
  // protected $email;
  // protected $password;
  // protected $user_role;

  protected function getUser($user_id)
  {
    $query = "SELECT * from user where user_id = ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$user_id]);
    return $stmt;
  }

  protected function setUser($email, $password, $user_role)
  {
    $query = "SELECT COUNT(*) FROM user WHERE email = ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$email]);
    $count = $stmt->fetchColumn();
    if($count == 0)
    {
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO user (email,password,user_role) values (?, ?, ?)";
      $stmt = $this->connect()->prepare($query);
      $stmt->execute([$email, $passwordHash, $user_role]);
      $_SESSION['user_id'] = $this->getUserId($email);
      $_SESSION['user_role'] = $user_role;
      header("Location: " . $user_role . "Homepage");
    }
    else{
      echo "Email already in use";
    }
  }

  protected function getUserId($email)
  {
    $query = "SELECT user_id from user where email = ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$email]);
    $obj = $stmt->fetch();
    return $obj['user_id'];
  }

  protected function signInCheck($email, $password)
  {
      $query = "SELECT * FROM user WHERE email = ?";
      $stmt = $this->connect()->prepare($query);
      $stmt->execute([$email]);
      $user = $stmt->fetch();
  
      if ($user) {
          $isPasswordCorrect = false;
  
          if ($user['user_role'] == "member") {
              $isPasswordCorrect = password_verify($password, $user['password']);
          } else {
              $isPasswordCorrect = ($password === $user['password']);
          }
  
          if ($isPasswordCorrect) {
              $_SESSION['user_id'] = $user['user_id'];
              $_SESSION['user_role'] = $user['user_role'];
  
              if ($user['user_role'] == "member") {
                  $query = "SELECT member_id FROM member WHERE user_id = ?";
                  $stmt = $this->connect()->prepare($query);
                  $stmt->execute([$_SESSION['user_id']]);
                  $memberObj = $stmt->fetch();
                  $_SESSION['member_id'] = $memberObj['member_id'];
              } elseif ($user['user_role'] == "personalTrainer") {
                  $query = "SELECT personal_trainer_id FROM personal_trainer WHERE user_id = ?";
                  $stmt = $this->connect()->prepare($query);
                  $stmt->execute([$_SESSION['user_id']]);
                  $personalTrainerObj = $stmt->fetch();
                  $_SESSION['personal_trainer_id'] = $personalTrainerObj['personal_trainer_id'];
              }
  
              header("Location: " . $user['user_role'] . "Homepage");
          } else {
              echo "Wrong password";
          }
      } else {
          echo "User not found";
      }
  }
}  
?>
<!-- https://www.php.net/manual/en/function.password-hash.php -->
<!-- https://www.php.net/manual/en/function.password-verify.php -->
<!-- References I used to help me implement password_hash and password_verify -->

