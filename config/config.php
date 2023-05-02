<?php
/*
  define('APPURL',"https://sathitech.com/");
  define('ASSETS',"https://sathitech.com/assets/");
  define('STORAGE',"https://sathitech.com/storage/");
  define('MODEL',"https://sathitech.com/model/");
  define('CONTROLLER',"https://sathitech.com/controller/");
  define('VIEW',"https://sathitech.com/view/");
  define('ADMIN',"https://sathitech.com/admin/");
  define('SELLER',"https://sathitech.com/seller/");
  define('ADMINASSETS','https://sathitech.com/assets/admin/');
  define('OFFERIMAGES','https://sathitech.com/storage/offerImage');
  define('PRODUCTS','https://sathitech.com/storage/products');
  define('LIBRARY','https://sathitech.com/lib/');
  define('DB_HOST','localhost');
  define('DB_NAME','prebuy');
  define('DB_PASSWORD','');
  define('DB_USER','root');
  */
  
  session_start();
  if(isset($_SESSION['data'])){
    $LoginUser = $_SESSION['data'];
    $role = $LoginUser['role'];
    $admin_id = $LoginUser['admin_id'];
   } else{ $LoginUser="";$role=""; } 
  date_default_timezone_set('Asia/Calcutta');
  $datetime = Date('Y-m-d h:i:s');
  if(!defined('APPURL')){
  define('APPURL',"http://localhost/pre/");
  define('ASSETS',"http://localhost/pre/assets/");
  define('STORAGE',"http://localhost/pre/storage/");
  define('MODEL',"http://localhost/pre/model/");
  define('CONTROLLER',"http://localhost/pre/controller/");
  define('VIEW',"http://localhost/pre/view/");
  define('ADMIN',"http://localhost/pre/admin/");
  define('SELLER',"http://localhost/pre/seller/");
  define('ADMINASSETS','http://localhost/pre/assets/admin/');
  define('OFFERIMAGES','http://localhost/pre/storage/offerImage');
  define('PRODUCTS','http://localhost/pre/storage/products');
  define('LIBRARY','http://localhost/pre/lib/');
  define('ERROR_404','http://localhost/pre/');
  define('DB_HOST','localhost');
  define('DB_NAME','prebuy');
  define('DB_PASSWORD','');
  define('DB_USER','root');
  define('MAIL','ashish.simption@gmail.com');
  define('MAIL_PASSS','ashish@98065');
  }
  
  
    
?>