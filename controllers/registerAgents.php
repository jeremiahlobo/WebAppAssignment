<?php
 include ('../core/Agent.php');
 include '../core/functions.php';
 session_start();

// $userlogin = new Users($app['config']['database'],'user123', 'email@email.com');

$email = $_POST['agentemail'];
$clean = [];

if (isset($_POST['add-agent']) && (filter_var($email, FILTER_VALIDATE_EMAIL)))
{
  if ( ctype_alnum($_POST['agentfirstname']) && ctype_alnum($_POST['agentlastname']))
  {
    $clean['agentfirstname'] = htmlentities($_POST['agentfirstname'], ENT_QUOTES, 'UTF-8');
    $clean['agentemail'] = htmlentities($_POST['agentemail'], ENT_QUOTES, 'UTF-8');
    $clean['agentlastname'] = htmlentities($_POST['agentlastname'], ENT_QUOTES, 'UTF-8');
    $clean['middleintial'] = htmlentities($_POST['middleintial'], ENT_QUOTES, 'UTF-8');
    $clean['busphone'] = htmlentities($_POST['busphone'], ENT_QUOTES, 'UTF-8');
    $clean['typeagent'] = htmlentities($_POST['typeagent'], ENT_QUOTES, 'UTF-8');
    $clean['agencyId'] = htmlentities($_POST['agencyId'], ENT_QUOTES, 'UTF-8');

    $agentregister = new Agent($app['config']['database'], $clean['agentfirstname'],
                              $clean['middleintial'], $clean['agentlastname'],
                              $clean['busphone'], $clean['agentemail'],
                              $clean['typeagent'], $clean['agencyId'] );

    if ($agentregister->addAgent($clean)){
        $_SESSION["success"]= 'You have succesfully been added to the DB';
        header("Location: ../user-dashboard.php");
    }else{
      $_SESSION['error'] = 'something went wrong';
    }
  }
}else{
  echo 'not working';
}
