<?php

namespace Application\Controller\User;

use Application;
use Application\Module\User;
use Application\Module\Database;


class Index {

    use \Application\Base;
    use \Application\Controller;

    public function Index() {
        if(Application::getStaticModule("User")->isLoggedIn()) {
            $View = "MyAccount";
        }
        return $this->Login();
    }

    public function Login() {
        if ($this->Module("Session")->isUserLoggedIn()) {
            return $this->MyAccount();
        }
        $Message = null;
        $Error = null;

        $Request = $this->Request();
        $User = $this->getModel("User");

        if (empty($Request['Arguments']['Email'])) {
            $Error = "No email given.";
        } else {
            $User->setEmail($Request['Arguments']['Email']);
            if (empty($Request['Arguments']['Password'])) {
                $Error = "No password given.";
            } else {
                $User->setPassword($Request['Arguments']['Password']);
            }
        }

        if($Error) {
            $Message = $Error;
            $View = $this->View("User/Login.phtml", array("User" => $User, "Message" => $Message));
        }

        else {
            $Database = $this->Module("Database");
            $Query = $Database->createQuery();
            $Query->setAction("Select");
            $Query->setFields("*");
            $Query->setTable("User");
            $Query->setArguments(array("Email" => $User->getEmail(), "Password" => $User->getPassword()));

            $Connection = $Database->Connect();

            $Query = "SELECT * FROM `User` WHERE `Email` = '{$User->getEmail()}' AND `Password` = '{$User->getPassword()}'";
            $Resource = mysqli_query($Connection, $Query);
            $Result = mysqli_fetch_array($Resource, MYSQLI_ASSOC);
            if ($Result) {
                $_SESSION['User'] = true;
                $View = User::getStaticView("MyAccount.phtml", array("User" => $User, "Message" => $Message));

            } else {
                $Message = "Invalid username and/or password.";
                $View = User::getStaticView("Login.phtml", array("User" => $User, "Message" => $Message));
            }
        }

        return $View;
    }

    public function Account() {
        if (!$this->Module("Session")->isUserLoggedIn()) {
            $Controller = $this->Module("Controller");
            $Controller->setPath("/User/Index/Login");
            return $Controller->Execute();
        } else {
            $View = User::getStaticView("MyAccount.phtml");
        }
        return $View;
    }

    public Function Logout() {
        unset($_SESSION['User']);
        session_destroy();
        $View = $this->getModule("Controller")->setPath("CMS/Index/Home")->Execute();
        // $View = $this->getModule("Contoller")->Execute();

        return $View;
    }

    public function Register() {
        $User = $this->getModel("User");
        $Request = $this->Request();

        $Message = null;

        if (!empty($Request['Arguments']['Email'])) {
            $User->setEmail($Request['Arguments']['Email']);
        } else {
            $Error = "No email given.";
        }
        if (!empty($Request['Arguments']['Password'])) {
            $User->setPassword($Request['Arguments']['Password']);
        } else {
            $Error = "No password given.";
        }

        if (isset($Error)) {
            return $this->View("User/Register.phtml", array("Message" => $Error));
        }
        // $Database = $this->getModule("Database");
        $Database = Database::getInstance();
        $Query = $Database->createQuery();
        $Query->setAction("INSERT");
        $Query->setFields("*");
        $Query->setTable("User");
        $Arguments[] = array("Column" => "Email", "Value" => $User->getEmail());
        $Arguments[] = array("Column" => "Password", "Value" => $User->getPassword());
        $Query->setArguments($Arguments);
        $Result = $Database->Execute($Query);

        if ($Result) {
            $Message = "User created.";
        } else {
            $Message = "Could not create user;";
        }

        $View = $this->View("User/Register.phtml", array("Result" => $Result, "Message" => $Message));

        return $View;
    }

    protected function Info() {
        $User = $this->getModel("User");
        $View = $this->getView("User.phtml", array("User" => $User));

        return $View;
    }
}

?>