<?php
/* Project eShop
Ver 1.95 (9-21-18)
====
Joe Leon
Nate Lee

===
STUFF
=== */
//ini_set("display_errors", "1");
//error_reporting(E_ALL);

require_once 'AutoLoader.php';
class RegHandler

{
    public $user;
    public $error;

    public function __construct()
    {

       // $this->user=new UserHandler();
       //$this->error=new ErrorHandler();
        //$this->card=new CardHandler();
    }

    public function registerUser()
    {
        // Variables to be uploaded to user table.
        $first = $_POST["First"];
        $last = $_POST["Last"];
        $email = $_POST["Email"];
        $password = $_POST["password"];
        //===
        // Variables to be uploaded to c_card table.
        $cardno = $_POST["CardNO"];
        $cardfirst = $_POST["CardFirst"];
        $cardlast = $_POST["CardLast"];
        $MMYY = $_POST["MMYY"];
        $csc = $_POST["CSC"];

        // $message is a array of the different variables to be uploaded to the user table, and $message2 is the same, except its filled with variables to be
        //uploaded to the c_card table. If this if statement is too loaded, it may be split up later.
        if ($message = ($this->user->createUser($first, $last, $email, $password)) && $message2 = ($this->card->createCard($cardno, $cardfirst, $cardlast, $MMYY, $csc))) {
            $this->user->saveUserID($message);

            //If both $messages are uploaded correctly, then the user is guided to the login page.
            include('../pages/userProfile.html');
            include('../pages/login.html');
        } else {
            //If there is an error, RegisterFailed will be displayed instead.
            $message = $this->error->error("username");
            //include maybe
            require_once('../RegisterFailed.php');
        }
    } /*
    public function registerCard()
    {
        $cardno = $_POST["CardNO"];
        $cardfirst = $_POST["CardFirst"];
        $cardlast = $_POST["CardLast"];
        $MMYY = $_POST["MMYY"];
        $csc = $_POST["CSC"];
        if ($message2 = ($this->card->($cardno, $cardfirst, $cardlast, $MMYY, $csc))){
            $this->card->createCard($message2);

        }
    }
 */
}
?>