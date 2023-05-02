<?php  ob_start();  
      include('config/config.php');
      include('lib/BaseModal.php');
      include('modal/AdminModal.php');
        if(isset($_SESSION['userid'])){
          // $Base->redirect(APPURL.'availed-offer.php');
           $Base->redirect(APPURL.'account.php');
          }
     if(isset($_POST['username'])){
    $username=  $_POST['username'];
    $password = $_POST['password'];
    $numrow = $login->UserLogin('numrow',$username,$password);
    if($numrow>0){
    $fetchdata = $login->UserLogin('row',$username,$password);
    $username2 = $fetchdata['username'];
    $password2 = $fetchdata['userpwd'];
    $_SESSION['userid'] = $fetchdata['user_id'];
    if(isset($_SESSION['dealid'])){
       $Base->redirect(APPURL.'deal-availed.php?userid='.$_SESSION['userid']); }
       // $Base->redirect(APPURL.'deal.php?dealid='.$_SESSION['dealid']); }
        else{ $Base->redirect(APPURL.'account.php'); }
   } else{
   echo"<script>alert('Invalid Username Or Password')</script>";
   $Base->redirect(APPURL.'users.php');
  }  
 }
?>