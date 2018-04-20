<?php

/*$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "<li>Name is required</<li>";
} else {
    $name = $_POST["name"];
}


if (empty($_POST["email"])) {
    $errorMSG .= "<li>Email is required</li>";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG .= "<li>Invalid email format</li>";
}else {
    $email = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $errorMSG .= "<li>Phone is required</li>";
}else{
    $phone = $_POST['phone'];
}

if (empty($_POST["msg_subject"])) {
    $errorMSG .= "<li>Subject is required</li>";
} else {
    $msg_subject = $_POST["msg_subject"];
}


if (empty($_POST["description"])) {
    $errorMSG .= "<li>Message is required</li>";
} else {
    $description = $_POST["message"];
}

if (empty($_POST["file"]['name'])) {
    $errorMSG .= "<li>Dodaj CV</li>";
} else {
    $file = $_POST["file"];
}
*/

include ("../classes/Form.php");
include ("../classes/ContactForm.php");

$form = new ContactForm();
$form->ifEmptyField($form->getContactFields());
$form->validateEmail();
$error = $form->getErrorMSG();

if(empty($error)){
    $msg = "Name: ".$_POST['name'].", Email: ".$_POST['email'].", Phone: ".$_POST['phone'].", Subject: ".$_POST['subject'].", Description:".$_POST['description'];
    echo json_encode(['code'=>200, 'msg'=>$msg]);
    exit;
}

echo json_encode(['code'=>404, 'msg'=>$error]);
