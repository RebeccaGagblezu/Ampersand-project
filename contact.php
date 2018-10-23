<?php 

if(isset($_POST["name"] )&& isset($_POST["email"] )&& isset($_POST["phone"] )&& isset($_POST["country"]) && isset($_POST["company"]){

   var_dump($name = $_POST['name']);
    $email = $_POST['email'];
    var_dump($phone = $_POST['phone']) ;
    var_dump($country = $_POST['country']) ;
    $company = $_POST['company'];
    $website = $_POST['website'];
    $project = $_POST['project'];

    $email_from ='Ampersand';

    $email_subject = "New Contact Form Submission";

    $email_body = "Name : $name.\n".
                  "Email : $email.\n".
                  "Phone : $phone.\n".
                  "Country : $country.\n".
                  "Company : $company.\n".
                  "Website : $website.\n".
                  "Project description : $project.\n";

$to = "rebeccagagblezu@gmail.com";

$headers = "From: $email_from \r\n";

$headers.="Reply-To: $vistor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
}

?>