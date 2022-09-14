	<?php include "head.php" ?>  
<?php 

	if (!isset($_SESSION)) session_start(); 
	if(!$_POST) exit;
	
/* 	
	include dirname(__FILE__).'/settings/settings.php';
	include dirname(__FILE__).'/functions/emailValidation.php';
	*/	
	
	/* Current Date Year
	------------------------------- */		
	$currYear = date("Y");		
	
/*	---------------------------------------------------------------------------
	: Register all form field variables here
	--------------------------------------------------------------------------- */
	$sendername = strip_tags(trim($_POST["sendername"]));	
	$emailaddress = strip_tags(trim($_POST["emailaddress"]));
	$telephone = strip_tags(trim($_POST["telephone"]));
	$sendersubject = strip_tags(trim($_POST["sendersubject"]));
	$sendermessage = strip_tags(trim($_POST["sendermessage"]));
//    $captcha = strip_tags(trim($_POST["captcha"]));
$to = "manoj.ndispl@gmail.com"; //"nesaplings@gmail.com";
$subject = "Enquiry received from website - ".$sendersubject;
$msg = "Enquiry Details\r\n".
"Name : ". $sendername ."\r\n" .
"Email: ". $emailaddress ."\r\n" .
"Phone: ". $telephone. "\r\n" .
"Subject: ". $sendersubject. "\r\n" .
"Message:". "\r\n" .$sendermessage;
$displaymsg="Dear ". $sendername .",<br/>" ."Thanks for writing to us, we will get back to you soon.<br/>Regards,<br/> Team WorldTvv.com.";
$headers = "From: no-reply@WorldTvv.com" . "\r\n" ."CC: 11manoj70521@gmail.com";
mail($to,$subject,$msg,$headers);
?>
 <div class="clearfix"></div>  
 <section class="sec-bpadding-2" style="margin-top:5% !important;">
    <div class="container">
      <div class="row">
        <div class="text-box padding-4 section-cyan" style="background-color:#fd602c !important;border-radius: 8px;">
          <span>
           <h5 class="dosis text-white" style="text-align:left;">
		   <?php
		   echo $displaymsg;
		   ?>
		   </h5>
            </span>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
   <?php include "foot.php" ?>