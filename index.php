<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <link rel="icon" href="images/loka1.jpeg" type="image/x-icon">
   <title>GPK@OneTouch</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!--Navbar css-->
   <link rel="stylesheet" href="css/navbar.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="search.css">

   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body>
   <!--Login Modal-->
   <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header text-center">
               <h5 class="modal-title w-100" id="exampleModalLabel">Login</h5>
               <button type="button" class="btn-close" aria-label="Close" data-dismiss="modal"></button>

            </div>
            <div class="modal-body">
               <form name="Login" id="Login" action="login.php" method="post">
                  <div class="mb-3">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Email
                        address</label>
                     <input type="email" onkeyup="isEmpty()" name="Email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Password</label>
                     <input type="password" onkeyup="isEmpty()" name="Pass" class="form-control" id="InputPassword1" required>

                  </div>
                  <div class="">
                     <a href="forget.php">Forgot Password?</a></br>
                  </div>
                  <hr>
                  <div class="text-center">
                     <button type="submit" name="submit" id="btnSave" class="btn btn-danger " disabled>Submit</button>

               </form>
            </div>
         </div>

      </div>
   </div>
   </div>
   <!--End Login Modal-->
   <!--Register Modal-->

   <div class="modal fade" id="RegiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header text-center">
               <h5 class="modal-title w-100" id="exampleModalLabel">Register</h5>
               <button type="button" class="btn-close" aria-label="Close" data-dismiss="modal"></button>

            </div>
            <div class="modal-body">
               <form name="Register" id="RegiModal" action="register.php" method="post">
                  <div class="mb-3">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Name</label>
                     <input type="text" name="NameReg" class="form-control" id="InputName" aria-describedby="" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Email
                        address</label>
                     <input type="email" name="EmailReg" class="form-control" id="InputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                     <label for="Phone" class="form-label">Phone Number</label>
                     <input type="number" name="Phone_no" class="form-control" id="InputNumber" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Create
                        Password</label>
                     <input type="password" name="Password" class="form-control" id="InputPass" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword2" class="form-label">Confirm
                        Password</label>
                     <input type="password" name="ConfirmPassword" class="form-control" id="InputPass1" required>
                  </div>
                  <hr>
                  <div class="text-center">
                     <button type="button" class="btn btn-outline-dark">Clear</button>
                     <button type="submit" name="submitReg" id="btnSave1" class="btn btn-success" data-toggle="modal">Register</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!--Ends Register Modal-->

   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/load.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html" class="titlenav"><img class="responsives" src="images/loka1.jpeg" alt="#" height="100px" width="70px"> GPK@OneTouch</a>

                           <style>
                              .titlenav {
                                 font-size: 30px;
                                 font-weight: bold;
                                 margin-left: 10px;
                                 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                                 color: rgb(255, 69, 0);

                              }
                           </style>
                        </div>


                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">


                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index.html">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.html">About</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="contact.html">Contact Us</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="" data-toggle="modal" data-target="#LoginModal">Login</a>
                           </li>

                           <!--This is for modal view --data-toggle="modal" 
                           data-target="#RegiModal">-->

                           <li class="nav-item">
                              <a class="nav-link" href="" data-toggle="modal" data-target="#RegiModal">Register</a>
                           </li>

                           <!--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginModal"  aria-pressed="false" autocomplete="off">
                                Login
                                    </button> -->

                           <!-- Button trigger modal -->
                           <!--
                           <div class="d-flex gap-1">
                              <li class="nav-item">
                                 <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#LoginModal">
                                    Login
                                 </button>-->

                           <!-- Modal -->



                           <!--SignUp Modal-->
                           <!--<div class="d-flex gap-1">
 <li class="nav-item">
 <button type="button" class="btn btn-primary">
 SignUp
</button>-->

                           <!--Register Modal-->
                           <!-- <div class="d-flex gap-1">
                              <li class="nav-item">
                                 </button><button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#RegiModal">
                                    Register
                                 </button>-->



                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   </form>
   <!-- end header inner -->
   <!-- end header -->

   <style>
      .carousel-item {
         height: 570px;
      }

      #submitbutton {
         color: white;
      }

      #regibutton {
         color: white;
      }
   </style>


   <div id="carouselExampleControls" class="carousel slide-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/first1.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="images/IT.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="images/aa.jpeg" class="d-block w-100" alt="...">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>

   <style>
      .faq {
         margin-top: 30px;
         margin-bottom: 10px;
      }

      #qbox {
         background-color: salmon;
         border-radius: 40px;
         height: 100px;
         font-size: large;
      }

      #faqbox {
         width: 1300px;
         display: grid;
         grid-gap: 10px;

      }
   </style>

   <div class="container-fluid" id="faqbox">

      <h2 class="faq">Here are some frequently asked questions about GPK!</h2>

      <div class="container-fluid" id="sbox">
         <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
               <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Search anything..."> <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
            </div>
         </div>
      </div>
      <?php
      for ($i = 1; $i <= 5; $i++) {
      ?>
         <div class="container-fluid">
            <div class="row border" id="qbox">
               <div class="span9">Question :
                  <?php
                  include "db_conn.php";

                  // for(int i=1;i<5;i++)
                  $sql = "select Question from Qna where id=$i";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                     echo "{$row['Question']}";
                  }


                  ?>

                  <div>Answer :
                     <?php

                     // for(int i=0;i<5;i++)
                     $sql1 = "select Answer from Qna where id=$i";
                     $result1 = mysqli_query($conn, $sql1);
                     while ($row = mysqli_fetch_array($result1)) {
                        echo "{$row['Answer']}";
                     }

                     ?>
                  </div>
                  <div>
                     Answered By : <?php
                                    $sql3 = "select AnsweredBy from Qna where id=$i";
                                    $result3 = mysqli_query($conn, $sql3);
                                    while ($row = mysqli_fetch_array($result3)) {
                                       echo "{$row['AnsweredBy']}";
                                    } ?>
                  </div>
               </div>
            </div>
         </div>

      <?php } ?>
   </div>

   <!-- about -->
   <!-- <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   <!-- end about -->
   <!-- our_room -->
   <!-- 
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room5.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room6.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
   <!-- end our_room -->
   <!-- gallery -->
   <!--
      <div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>gallery</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery2.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery3.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery4.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery5.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery6.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery7.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery8.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   <!-- end gallery -->
   <!-- blog -->
   <!--<div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Blog</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog3.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
   <!-- end blog -->

   <!--  contact -->
   <!-- <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   -->
   <!-- end contact -->
   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class=" col-md-4">
                  <h3>Contact US</h3>
                  <ul class="conta">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i>Government Polytechnic, Kolhapur (An
                        Autonomous Institute of Government of Maharashtra)
                        University Road, Vidyanagar, Kolhapur – 416004 (Maharashtra) India.</li>
                     <li><i class="fa fa-mobile" aria-hidden="true"></i> 0231 – 2521038</li>
                     <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> gpkolhapur@yahoo.com</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <h3>Menu Link</h3>
                  <ul class="link_menu">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="about.html"> about</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <h3>News letter</h3>
                  <form class="bottom_form">
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="sub_btn">subscribe</button>
                  </form>
                  <ul class="social_icon">
                     <li><a href="https://www.facebook.com/GovernmentPolyKolhapur/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.youtube.com/channel/UC5PBrIosSgHqwhCJNPfTvIA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.instagram.com/govtpolytechnickolhapur/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">

                     <p>
                        © 2022 All Rights Reserved.
                     </p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/coded.js"></script>

</body>

</html>