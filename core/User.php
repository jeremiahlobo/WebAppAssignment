<?php
require 'bootstrap.php';

class Users
{
    protected $userDBconn;
    protected $uid;
    private $username;
    private $useremail;
    private $email;

    public function __construct($config, $username, $useremail)
    {
    	$this->userDBconn = Connection::make($config);
    }

    public function setUserID($uid)
    {
        return $this->userid = $uid;
    }

    public function getUserID()
    {
        return $this->userid;
    }
    public function setUserName($uid)
    {
        return $this->userid = $uid;
    }

    public function getUserName()
    {
        return $this->userid;
    }
    public function setUserEmail($uid)
    {
        return $this->userid = $uid;
    }

    public function getUserEmail()
    {
        return $this->userid;
    }

    public function register($clean)
    {
       try
       {
           $newPass = password_hash($clean['password'], PASSWORD_DEFAULT);

           $stmt = $this->userDBconn->prepare('INSERT INTO users(name,email,password)
                                                       VALUES(:username,:useremail,:userpass)');
           $stmt->bindparam(':username', $clean['username']);
           $stmt->bindparam(':useremail', $clean['email']);
           $stmt->bindparam(':userpass', $newPass);
           $stmt->execute();
           return true;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }

    public function verifylogin($clean)
    {
    	try
       {
       	  $stmt = $this->userDBconn->prepare('SELECT * FROM users WHERE name = :username');
          $stmt->bindparam(':username', $clean['username']);
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
             if(password_verify($clean['password'], $userRow['password']))
             {
              $this->setUserID($userRow['id']);
              return true;
             }
              return false;
          }
       }
       catch(PDOException $e)
       {
          echo $e->getMessage();
       }
    }


    public static function loggedin()
    {
      session_start();
      return $_SESSION['TR_session'] = 'loggedin';
    }

    public static function logout()
    {
      session_destroy();
      unset($_SESSION['TR_session']);
      unset($_SESSION['username']);
      return true;
    }
}
