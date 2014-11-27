<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta property="og:image" content="http://mbehn.com/zginstitute/assets/images/facebookOG.jpg"/>
   <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
   <link rel='shortcut icon' href='favicon.jpg' />
   <link rel='icon' href='http://www.zerogravityinstitute.com/favicon.jpg' />
   <!-- <link rel="stylesheet" type="text/css" href="../slider.css"> -->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700italic,900italic' rel='stylesheet' type='text/css'>
   <title itemprop="name">Zero Gravity Institute &reg;</title>
</head>
<body>
   <div id="page-wrapper">
   <div id="container">
   <?php include '../includes/header.php' ?>
   <div id="main-content">
      <div id="slider-header">
         <h1>Slider Practice</h1>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner">
            <div class="item active">
               <img src="../assets/images/slider-images/slide-1.jpeg" alt="image 1">
               <div class="carousel-caption">
                  <h4>Image 1</h4>
               </div>
            </div>
            <div class="item">
               <img src="../assets/images/slider-images/slide-2.jpeg" alt="image 2">
               <div class="carousel-caption">
                  <h4>Image 2</h4>
               </div>
            </div>
            <div class="item">
               <img src="../assets/images/slider-images/slide-3.jpeg" alt="image 3">
               <div class="carousel-caption">
                  <h4>Image 3</h4>
               </div>
            </div>
            <div class="item">
               <img src="../assets/images/slider-images/slide-2.jpeg" alt="image 4">
               <div class="carousel-caption">
                  <h4>Image 4</h4>
               </div>
            </div>
         </div>
         <!-- Controls -->
         <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         </a>
      </div>
   </div>
   <div id="footer">
   </div>
   <script type="text/javascript">
      var mapsPopout = function() {
      	document.getElementById("maps-popout").style.opacity="1";
      }
      
      var popoutHide = function(){
      	document.getElementById("maps-popout").style.opacity="0";
      }
      $('#gallery a').addClass('active-page');
      $('#gallery a').css('color','white');
      
   </script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
</body>
</html>