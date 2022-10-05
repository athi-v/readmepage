<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');
  .mail {
    font-family:'Lato', sans-serif;
    font-size: 20px;
  /* Center vertically and horizontally */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
    display:flex;justify-content:center;align-items:center;
      
  }
    a { text-decoration:none;}
</style>

<?php 
if(isset($_POST['submit'])){
    $to = "athenkosivinqi25@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['name'];
    $subject = "New Email";
    $subject2 = "Copy of your email submission";
    $message = $fname . " " . $from . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $fname . "\n\n" . $_POST['Message'];

    $headers.="MIME-Version: 1.0\n";
    $headers.="Content-type: text/html; charset=iso 8859-1";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

            mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    echo "<div class='mail'>  Mail Sent. Thank you " . $fname .", we will contact you shortly.<br/> <a href='index.html'> Return Home</a>
    </div>";
   
    }
?>