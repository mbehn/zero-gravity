<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" itemscope itemtype="http://schema.org/LocalBusiness">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta property="og:image" content="http://mbehn.com/zginstitute/assets/images/facebookOG.jpg"/>
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <link rel='shortcut icon' href='favicon.jpg' />
      <link rel='icon' href='http://www.zerogravityinstitute.com/favicon.jpg' />
      <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700italic,900italic' rel='stylesheet' type='text/css'>
      <title itemprop="name">Zero Gravity Institute &reg;</title>
      <style type="text/css">
         #page-title {
         opacity: 1;
         top:50px;
         letter-spacing: 5px;
         }
         #address-container {
         right:50px;
         opacity: 1;
         }
      </style>
   </head>
   <body>
      <div id="page-wrapper">
      <div id="container">
      <?php include '../includes/header.php' ?>
      <div id="main-content">
         <h1 id="contact-header">Book an Appointment Today!</h1>
         <form id="appointment-form" action="MAILTO:matthew.behn@gmail.com" method="post" enctype="text/plain">
            <div id="first-name">
               <label>First Name</label>
               <input type="text" maxlength="20">
            </div>
            <div id="last-name" maxlength="20">
               <label>Last Name</label>
               <input type="text">
            </div>
            <div id="email">
               <label>Email Address</label>
               <input type="email">
            </div>
            <div id="telephone">
               <label>Telephone</label>
               <input type="tel" id="telephone-number">
            </div>
            <div id="day">
               <label>Preferred Date</label>
               <input type="date">
            </div>
            <div id="reset-form">
               <input type="reset" value="Reset">
            </div>
            <div id="submit-form">
               <input type="submit" value="Send">
            </div>
         </form>
      </div>
      <div id="footer">
      </div>
      <!-- don't need to have title float on every page -->
      <!-- <script type="text/javascript" src="script.js"></script> -->
      <script type="text/javascript">
         var mapsPopout = function() {
         	document.getElementById("maps-popout").style.opacity="1";
         }
         
         var popoutHide = function(){
         	document.getElementById("maps-popout").style.opacity="0";
         }         
         $('#contact a').addClass('active-page');
      </script>
      <script type="text/javascript">
         var mapsPopout = function() {
         document.getElementById("maps-popout").style.opacity="1";
         }
         var popoutHide = function(){
         document.getElementById("maps-popout").style.opacity="0";
         }
         $('#contact a').addClass('active-page');
         $('#contact a').css('color','white');

         
         var formatNumber = function() {
            var telNumber = document.getElementById('telephone-number').value;
            console.log(telNumber);
            if (telNumber.length == 3) {
               telNumber = "(" + telNumber + ")";
            }
         }

         $("#telephone-number").keyup(formatNumber);
            //console.log(telNumber);
            //console.log(telNumber.length);

      </script>
      <link rel="stylesheet" type="text/css" href="../style.css">
      <style type="text/css">
         #page-title {
         opacity: 1;
         top:50px;
         letter-spacing: 5px;
         transition:none;
         }
         #address-container {
         right:50px;
         opacity: 1;
         transition:none;
         }
      </style>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
   </body>
</html>