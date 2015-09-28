<?php
include 'include/header.php';
?>
<main class="page-width">
<h2>Contact</h2>
<section>
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <h4>Want to get in touch? Drop me a line!</h4>
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['senderName']; 
    $email=$_REQUEST['senderEmail']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("julie@julie-edwards.com", $subject, $message, $from); 
        echo "<h3>Thank you!</h3><h4>Your message was sent.</h4>"; 
        } 
    }   
?> 


<form  action="contact.php" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    <p><label for="senderName">Name:&#42;</p></label>
    <input id="senderName" name="senderName" type="text" required>
    <p><label for="senderEmail">Email:&#42;</p> 
    <input id="senderEmail" name="senderEmail" type="email" required></label>
    <p><label for="message">Message:&#42;</p> 
    <textarea id="message" name="message" rows="7" cols="30" required></textarea></label>
    <input type="submit" class="button" value="Send"/> 
</form> 

</section>
</main>
<?php
include 'include/footer.php';
?>