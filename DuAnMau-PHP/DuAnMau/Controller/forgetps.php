<?php
$act = "forgetps";
if (isset($_GET['act'])) {
  $act = $_GET['act'];
}
switch ($act) {
  case 'forgetps':
    include "./View/forgetpassword.php";
    break;
  case 'forgetps_action':
    if (isset($_POST['submit_email'])) {
      $email = $_POST['email'];
      $_SESSION['email'] = array();
      $usr = new user();
      $checkmail = $usr->getEmail($email);
      if ($checkmail != false) {
        $code = random_int(1000, 10000);
        $item = array(
          'code' => $code,
          'email' => $email,

        );
        $_SESSION['email'][] = $item;
        $mail = new PHPMailer;
        $mail->IsSMTP();                //Sets Mailer to send message using SMTP
        $mail->Host = 'smtp.gmail.com';    //Sets the SMTP hosts of your Email hosting, this for Godaddy
        $mail->Port = 587;                //Sets the default SMTP server port
        $mail->SMTPAuth = true;              //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = '959nguyenthanhvu@gmail.com';          //Sets SMTP username
        $mail->Password = 'yxalbnuxhcwipygd'; //Phplytest20@php					//Sets SMTP password
        $mail->SMTPSecure = 'tls';              //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = '959nguyenthanhvu@gmail.com';          //Sets the From email address for the message
        $mail->FromName = 'Vu';        //Sets the From name of the message
        $mail->AddAddress($email, "User");    //Adds a "To" address
        //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
        $mail->WordWrap = 50;              //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);              //Sets message type to HTML				
        $mail->Subject = "Reset password";        //Sets the Subject of the message
        $mail->Body = "Cấp mã code" . $code;          //An HTML or plain text message body

        if ($mail->Send())                //Send an Email. Return true on success or false on error
        {
          echo '<script> alert("Gửi mail thành công");</script>';
          include "./View/resetpw.php";
        } else {
          echo '<script> alert("Gửi mail thất bại");</script>';
          include "./View/forgetpassword.php";
        }
      } else {
        echo '<script> alert("Mail không tồn tại");</script>';
        include "./View/forgetpassword.php";
      }
    }
    break;
  case 'resetps':
    if (isset($_POST['submit_password'])) {
      $codeold = $_POST['password'];
      echo $codeold;
      $flag = false;
      foreach ($_SESSION['email'] as $key => $item) {
        if ($item['code'] == $codeold) {
          echo '<script> alert("tesss");</script>';
          $cdau = '#GHRT^6';
          $csau = '!67FGT';
          $codenew = md5($cdau.$codeold.$csau);
          $emailold = $item['email'];
          $usr = new user();
          $usr->updateCode($emailold, $codenew);
          $flag = true;
          include "./View/login.php";
        }
      }
      if ($flag == false) {
        echo '<script>alert("code không tồn tại");</script>';
        include "./View/resetpw.php";
      }
    }
}
?>
