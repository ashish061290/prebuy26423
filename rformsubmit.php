<?php if(isset($_POST['rsubmit'])){ 
$name = $_POST['username'];
$email = $_POST['email'];
   $rowcount = $seller->SelectRows('users','useremail',$email);
    if($rowcount>0){
      ?>
      <div class="alert">
 <!--<span class="closebtn">&times;</span> --> 
<strong>Failed!</strong> You Are Already Registared Please Try Another Email.
</div>
<script>
    document.getElementById('register-form').reset();        
</script>
    <?php $Base->redirect(APPURL."users.php"); }
    else {
      $user = $seller->SelectOrderBy('users','ORDER BY user_id DESC');
      $user_id = $user['user_id']+1;
      $userlogin = "USER-".$user_id;
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];
      $token = md5("USER-".$user_id.$mobile);
       $date =  date("Y-m-d H:i:s");
        $otp = rand(1000,9999);
        $data = array("username"=>$name,"loginuser"=>$userlogin,"useremail"=>$email,"usermobile"=>$mobile,"userpwd"=>md5($password),"otp"=>$otp,"token"=>$token,"created_at"=>$date,"user_status"=>0);
        $lastid = $seller->InsertOseller($data,"users");
      //otp
      // Account details
      /* $apiKey = urlencode('06+/Il7R8To-pClpb66JOCskU0YguiLpdXJtnbHkj7');
      $numbers = "'.$mobile.'";
      // Message details
      $otp = rand(1000,9999);
      $sender = urlencode('PREBUY');
      $message = rawurlencode("Please Use This OTP $otp");
      // Prepare data for POST request
      $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
      // Send the POST request with cURL
      $ch = curl_init('https://api.textlocal.in/send/');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);

      // Process your response here
      //echo $response;
      //actin in after otp
      //update otp column in users table
      $updateuser = "UPDATE `users` SET `otp`='$otp' WHERE `user_id`='$lastid'";
      $qryrun = mysqli_query($conn,$updateuser); */
     if($lastid){
 $to = $email;
$subject = "Registration on Sathitech";
$message = "<center><h3>Acknowledgement of Customer Registration</h3></center>
<p>
Dear $name, <br>
Your Customer Registration was successfully submitted.<br/>
Active Your Account Please Click This Link <a href='https://sathitech.com/verify.php?id=$lastid&username=$name'>Verify Link</a><br>
<b>Thank you<b><br>
<b>Prebuy Team<b>
<p style='color:red'>Please don not reply to this email, This is system generated mail</p>
<img src='https://sathitech.com/images/prebuy_logo.png' style='width:100px;'>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";                                               // More headers
$headers .= 'From: <ashish.tech1010@gmail.com>' . "\r\n";
$headers .= 'Cc: ashish.and.surbhi@gmail.com,ashish.sathi@gmail.com' . "\r\n";
$mkc = mail($to,$subject,$message,$headers);
              if($mkc){ ?>
<div class="alert success">
<!--<span class="closebtn">&times;</span> --> 
<strong>Success!</strong> Registration Success.
</div>
<script>
           document.getElementById('register-form').reset();        
</script>
<?php 
echo "1"."#".$lastid;
    } 
} } } ?>