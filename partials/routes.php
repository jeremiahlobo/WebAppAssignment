<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/WebAppAssignment/register.php":
			$CURRENT_PAGE = "Register";
			$PAGE_TITLE = "Register Now!";
			break;
		case "/WebAppAssignment/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Us";
			break;
    case "/WebAppAssignment/javascript.php":
			$CURRENT_PAGE = "JavaScript";
			$PAGE_TITLE = "JavaScript";
			break;
    case "/WebAppAssignment/PHP.php":
			$CURRENT_PAGE = "PHP";
			$PAGE_TITLE = "More PHP";
			break;
		case "/WebAppAssignment/login.php":
				$CURRENT_PAGE = "login";
				$PAGE_TITLE = "Login";
				break;
		case "/WebAppAssignment/user-dasboard.php":
					$CURRENT_PAGE = "dashboard";
					$PAGE_TITLE = "dashboard";
					break;
		case "/WebAppAssignment/agent-dashboard.php":
				$CURRENT_PAGE = "dashboard";
				$PAGE_TITLE = "dashboard";
				break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to Travel Experts!";
	}
?>

<!-- credits:https://medium.com/@stevesohcot/sample-basic-php-template-for-file-structure-with-example-code-47ff6d610191  -->
