<?php
   $dbhost = 'localhost';
   #$dbuser = 'irsciitd16';
   #$dbpass = 'irsc2016';
   #$db='internships_irsc';
   $dbuser = 'root';
   $dbpass = '';
   $db='news_portal';
   $error="";
   $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   $sql="SELECT * FROM news_data ORDER BY id DESC LIMIT 1";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   $total_news=$row['id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>IRSC</title>
<meta charset="utf-8">	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="../gallery/fevicon1.ico">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<![if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script> -->
<![endif]-->
<style>
    /* Centered text */
      .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      /* navigation bar sticked*/
      .sticky-main-nav {
        position: -webkit-sticky;
        top:0;
        position: sticky;
        z-index: 999;
          }
        /* navigation bar sticked*/
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}


      
    </style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <div class="box_wrapper">
    <header id="header">
      <!-- <div class="header_top">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li><a href="index.html">Home</a></li>  
                <li><a href="#footer">Contact Us</a></li>   
              </ul>
            </div>
          </div>
        </nav>
        <div class="header_search">
          <button id="searchIcon"><i class="fa fa-search"></i></button>
          <div id="shide">
            <div id="search-hide">
              <form action="#">
                <input type="text" size="40" placeholder="Search here ...">
              </form>
              <button class="remove"><span><i class="fa fa-times"></i></span></button>
            </div>
          </div>
        </div>
      </div> -->



      <div class="container-fluid">
            <!-- Image and text -->

                  <div class="container mb-4">
                    <div class="row">
                    <img src="./images/l1.png" class="d-inline-block align-top mb-2" alt="logo">  
                        <!-- <a class="navbar-brand" href="#">
                          <img src="./images/11.png" class="d-inline-block align-top mb-2" alt="logo">  
                        </a>
                        <div class="">
                        <span class="text-danger" style="font-size:35px">IRSC</span>
                        <span style="font-size:30px">News</span>
                        <br>
                        <span class="label label-danger" style="font-size:10px">News Related to Road Safety</span> -->
                      </div>
                      </div>

                      
                  </div>  
            </div> 
    </header>
    <?php 
      $sql="SELECT heading,news_link FROM news_data";
      $result=mysqli_query($con,$sql);
    ?>  
    <!-- <div class="latest_newsarea"> <span>Latest News</span>
      <ul id="ticker01" class="news_sticker"> -->
        <?php
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $link=$row['news_link'];
                $heading=$row['heading'];
                $heading=mb_convert_encoding($heading, "UTF-8");
                $heading=str_replace("?"," ",$heading);
          ?>  
        <!-- <li><a href="<?php echo $link;?>"><?php echo $heading?></a></li> -->
        <?php
            }
        ?>
      <!-- </ul>
    </div> -->
    <!-- <div class="thumbnail_slider_area">
      <div class="owl-carousel"> -->
  <div class="container">
    <div class="row">
    
      <?php
            $final=$total_news/11;
            $i=1;
            while($i<=$final){
                $i++;
                $id=($i-2)*1;
                $id1=$id+1;
                $id2=$id+2;
                $sql="SELECT * FROM news_data WHERE id='$id'";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $img_src=$row['img_src'];
                    $link=$row['news_link'];
                    $heading=$row['heading'];
                    $heading=mb_convert_encoding($heading, "UTF-8");
                    $heading=str_replace("?"," ",$heading);
                    $date=date(" d M")."(".$row['news_channel'].")";
                ?>
        <div class="col-8  ">

        
                  <!-- <img src="<?php echo $img_src;?>" alt="" style="width:100%;height:396px;">
                  <div class="sing_commentbox slider_comntbox">
                    <p><i class="fa fa-calendar"></i><?php echo $date?></p>
                  </div>
                  <a class="slider_tittle" href="<?php echo $link?>"><?php echo $heading;?></a>
                  <p class="mt-4"></p> -->

                  <div style="position:relative;">
                  <img src="<?php echo $img_src;?>" alt="" style="width:100%;height:396px;">
                  <div style="position:absolute;bottom:0;width:100%;">
                  <div style="border:2px solid red;height:50px;padding:4px;background-color:rgba(255,0,0,0.5)">
                  <a class="slider_tittle text-white text-center" href="<?php echo $link?>"><?php echo $heading;?></a>
                  </div>
                  </div>
                 
                  </div>
                   
                  <div class="sing_commentbox slider_comntbox">
                    <p><i class="fa fa-calendar"></i><?php echo $date?></p>
                  </div>
                  
                  <p class="mt-4"></p>

            <div class="row">
                        <div class="col-6 p-0 px-4">
                          <!-- <h3 class="font-weight-bold">Timeline</h3> -->
                         <?php
                        $final=$total_news/10;
                        $i=1;
                        $j=1;
                        while($i<=$final){
                            ?>
                            <ul class="catg_nav p-0"><?php
                            $i++;
                            $id=($i-2)*10;
                            $id1=$id+5;
                            $id2=$id+6;
                            $sql="SELECT * FROM news_data WHERE id='$id1' OR id='$id2'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $j++;
                                $img_src=$row['img_src'];
                                $link=$row['news_link'];
                                $heading=$row['heading'];
                                $heading=mb_convert_encoding($heading, "UTF-8");
                                $heading=str_replace("?"," ",$heading);
                                $date=date(" d M")."(".$row['news_channel'].")";
                                $content=$row['content'];
                            ?>
                       <!--paste here-->
                      
                       <div class="catgimg_container"> <a class="catg1_img" href="#">
                              <img src="<?php echo $img_src?>" alt="" style="width:100%;height:150px;"> </a>
                          </div>
                          <div>
                          <a class="catg_title" href="<?php echo $link;?>"><?php echo $heading;?></a>
                          <div class="sing_commentbox">
                              <p><i class="fa fa-calendar"></i><?php echo $date;?><br /><p5>
                              <p><?php echo $content;?></p>
                            </div>
                          </div>
                       
                      <?php
                         }
                       ?></ul><?php        
                       }?>
                          <!-- <h5>Qatar's foreign minister accuses Saudi Arabia of sparking humanitarian crisis</h5><p> DW interview, Qatar's foreign minister has slammed Saudi Arabia for "destabilizing the region." The minister said Riyadh is using what it calls security concerns as a "smoke screen" to harm Qatar's economy.</p> -->
                        </div>
                        <div class="col-6 p-0 px-3">
                        <?php
                        $final=$total_news/10;
                        $i=1;
                        $j=1;
                        while($i<=$final){
                            ?>
                            <ul class="catg_nav"><?php
                            $i++;
                            $id=($i-2)*10;
                            $id1=$id+5;
                            $id2=$id+6;
                            $sql="SELECT * FROM news_data WHERE id='$id1' OR id='$id2'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $j++;
                                $img_src=$row['img_src'];
                                $link=$row['news_link'];
                                $heading=$row['heading'];
                                $heading=mb_convert_encoding($heading, "UTF-8");
                                $heading=str_replace("?"," ",$heading);
                                $date=date(" d M")."(".$row['news_channel'].")";
                                $content=$row['content'];
                            ?>
                        
                          <div class="catgimg_container"> <a class="catg1_img" href="#">
                              <img src="<?php echo $img_src?>" alt="" style="width:100%;height:150px;"> </a>
                          </div>
                          <a class="catg_title" href="<?php echo $link;?>"><?php echo $heading;?></a>
                          <div class="sing_commentbox">
                              <p><i class="fa fa-calendar"></i><?php echo $date;?><br /></p>
                              <p><?php echo $content;?></p>
                          </div>
                      
                      <?php
                         }
                       ?></ul><?php        
                       }?>
                          <!-- <h3 class="font-weight-bold">Other Details</h3> -->
                          <!-- <img src="./images/ac2.png" class="img-fluid">
                          <h5>Qatar's foreign minister accuses Saudi Arabia of sparking humanitarian crisis</h5><p> DW interview, Qatar's foreign minister has slammed Saudi Arabia for "destabilizing the region." The minister said Riyadh is using what it calls security concerns as a "smoke screen" to harm Qatar's economy.</p> -->
                        </div>
                      </div>
                      <div class="row ">
                        <div class="col-12 p-0 px-4">
                          <!-- <h3 class="font-weight-bold">Timeline</h3> -->
                          <!-- <a href="#" class="btn  text-center mx-4 mb-4">LOAD MORE</a> -->
                          <p class="text-center">

                              <!-- <a class="btn btn-outline-dark" href="#" role="button">LOAD MORE</a> -->
                              <a href="#" class="btn btn-dark text-center mx-4">Load More</a>

                          </p>
                          <!-- <h3 class="font-weight-bold">Other Details</h3> -->
                          <!-- <img src="./images/ac2.png" class="img-fluid">
                          <h5>Qatar's foreign minister accuses Saudi Arabia of sparking humanitarian crisis</h5><p> DW interview, Qatar's foreign minister has slammed Saudi Arabia for "destabilizing the region." The minister said Riyadh is using what it calls security concerns as a "smoke screen" to harm Qatar's economy.</p> -->
                        </div>
                      </div>
                
                

                </div>
            
                <!-- div 4 start from here-->
              
        <div class="col-4">
                <img src="./images/ac2.png" style="width:100%;" alt="">
              <div class="container">
                        
                    <div class="row">
                    
                          <div class="col-4 mt-4" id="blog1" style="height:750px;overflow:hidden;">
                             <h5 class="mt-2 mx-0">INSIDE IRSC</h5>
                                <!--<img src="./images/x2.png"alt="" class="mt-4">
                              <img src="./images/x2.png" alt="">
                              <img src="./images/x2.png" alt="">
                              <img src="./images/x2.png" alt="">
                              <p class="text-center mt-4">
                              <a href="#" class="btn  text-center mx-4">Read More News </a>
                              
                            </p> -->
                            <?php
                        $final=$total_news/10;
                        $i=$final;
                        while($i>=0){
                            $i--;
                            $id=($i)*10;
                            $id1=$id+1;
                            $id2=$id+5;
                            $sql="SELECT * FROM news_data WHERE id>='$id1' AND id<='$id2'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $img_src=$row['img_src'];
                                $link=$row['news_link'];
                                $heading=$row['heading'];
                                $heading=mb_convert_encoding($heading, "UTF-8");
                                $heading=str_replace("?"," ",$heading);
                                $date=date("d M")."(".$row['news_channel'].")";
                            ?>
                    <!-- <li> -->
                      <div class="media">
                         <a href="#" class="media-left"> <img alt="" src="<?php echo $img_src;?>" style="height:70px;width:100px;"> </a>
                        <div class="media-body"> 
                          <a href="<?php echo $link;?>" class="catg_title">
                          <?php echo $heading;?>
                        </a>
                      </div>
                      </div>
                   <!-- </li> -->
                  <?php }
                    } ?>
                                         
                      </div>
                  </div> 

<!-- Button 1 outside the row and col -->
              <div class="row">
                <div class="col-4 mt-4">
                    
                    <p class="text-center mt-4">
                    <!-- <a href="#" class="btn btn text-center mx-4">Read More News </a> -->
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button" onclick="click1()">Read More News </a> -->
                    <button class="btn btn-block btn-primary" onclick="click1()">Read More News</button>                    
                  </p>
                               
            </div>
        </div>  

                 
              <div class="row">
                <div class="col-4 mt-4"> 
                <div class="card-deck">
                <div class="card bg-warning">
                  <div class="card-body text-center text-white">
                    <h1 class="card-text">iSAFE</h1>
                    <h2 class="card-text">Assist Adds</h2>
                    <h1 class="card-text">iSAFE</h1>
                    <h2 class="card-text">Assist Adds</h2>
                  </div>
                </div>
                </div>
                </div>
              </div>

          
             <!-- <div class="container-fluid">
               <div class="row">
                 <div class="col-4">

                 </div>
               </div>
                          
              </div>        -->
           
            <div class="row">
                <div class="col-4 mt-4" id="blog2" style="height:1000px;overflow:hidden;">
                    <h5 class="mt-2">PREVIOUS STORIES</h5> 
                    <?php
                        $final=$total_news/14;
                        $i=$final;
                        while($i>=0){
                            $i--;
                            $id=($i)*10;
                            $id1=$id+1;
                            $id2=$id+5;
                            $sql="SELECT * FROM news_data WHERE id>='$id1' AND id<='$id2'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $img_src=$row['img_src'];
                                $link=$row['news_link'];
                                $heading=$row['heading'];
                                $heading=mb_convert_encoding($heading, "UTF-8");
                                $heading=str_replace("?"," ",$heading);
                                $date=date("d M")."(".$row['news_channel'].")";
                            ?>
                    <!-- <li> -->
                      <div class="media">
                         <a href="#" class="media-left"> <img alt="" src="<?php echo $img_src;?>" style="height:70px;width:100px;"> </a>
                        <div class="media-body"> 
                          <a href="<?php echo $link;?>" class="catg_title">
                          <?php echo $heading;?>
                        </a>
                      </div>
                      </div>
                   <!-- </li> -->
                  <?php }
                    } ?>
                    </div>
        </div>  
        <div class="row">
                <div class="col-4">
                    
                    <p class="text-center">
                    <!-- <a href="#" class="btn btn text-center mx-4">Read More News </a> -->
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button" onclick="click1()">Read More News </a> -->
                    <button class="btn btn-block btn-primary" onclick="click2()">Read More News</button>                    
                  </p>
                               
            </div>
        </div>  
                    <!-- <img src="./images/x2.png" alt="" class="mt-4">
                    <img src="./images/x2.png" alt="" >
                    <img src="./images/x2.png" alt="">
                    <img src="./images/x2.png" alt=""> -->
                <!-- <p class="text-center mt-4"> -->
                    <!-- <a href="#" class="btn btn text-center mx-4">Read More News </a> -->
                    <!-- <a class="btn btn-block btn-primary" onclick="click2()" href="#" role="button">Read More News </a> -->
                <!-- <button class="btn btn-block btn-primary" onclick="click2()">Read More News</button> -->
                    
                  <!-- </p> -->
                               
            
        <!-- <div class="row">
                <div class="col-4 mt-4">
                    <h5 class="mt-2">PREVIOUS STORIES</h5> 
                    <img src="./images/x2.png"alt="" class="mt-4">
                    <img src="./images/x2.png" alt="">
                    <img src="./images/x2.png" alt="">
                    <img src="./images/x2.png" alt="">
                    <p class="text-center mt-4">
                    <a href="#" class="btn  text-center mx-4">Read More News </a>
                    
                  </p>
                               
            </div>
        </div>   -->
      </div>
          </div>  

            <?php }
            }
          ?>
      </div>
    </div>  
          </div></div>
    </section>


  <div class="container-fluid bg-light" style="border:2px solid #cecece;">
    <div class="row">
    <footer id="footer">
      <div class="footer_top">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Contact-Info</h2>
            <div class="subscribe_area">
              <p>India's largest youth-led movement across more than five hundred colleges.</p>
                <h3>Address</h3>
                <p>201, Building No. 252a, Shahpur Jat, Nearby Govindum Sweets, New Delhi, 110049.</p>
                <h3>Contact-Us</h3>
                <p><b>Email:</b> info@road-safety.co.in</p>
                <p><b>For collaboration:</b> 7703849413, 8849620981</p>
                <p><b>For Media inquiries:</b> 8789091933</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">

          <div class="row">
            <div class="col-md-12">
                  <div class="single_footer_top wow fadeInLeft">
                <h2>Resources</h2>
                <div class="catg3_snav ppost_nav">
                  
                    <div class="media"> <!-- <a class="media-left" href="www.missionroadsafety.com"> <img src="images/portal.png" alt=""> </a> -->
                        <div class="media-body"> <a class="catg_title" href="www.missionroadsafety.com"> A portal for road accidents data <p style="color: red;">www.missionroadsafety.com</p></a></div>
                    </div>
                
          </div>
              </div>
            </div>

            <div class="col-md-12">
                <div class="single_footer_top wow fadeInRight">
            <h2>Important Links</h2>
            <div class="footer_labels mx-4">
              <li><a href="http://www.road-safety.co.in/isafe">iSAFE</a></li>
              <li><a href="http://ambivan.in/">Ambivan</a></li>
              <li><a href="#">Safekart</a></li>
              <li><a href="https://www.road-safety.co.in/marathon/">Marathon</a></li>
              <li><a href="https://www.road-safety.co.in/conference/">Conferences</a></li>
              <li><a href="https://road-safety.co.in/important.php">Important Resources</a></li>
              <li><a href="https://www.road-safety.co.in/portal/studentportal/">Login</a></li>
          </div>
          </div>
            </div>
            
        </div>
          </div>
          <!-- <div class="single_footer_top wow fadeInLeft">
            <h2>Resources</h2>
            <ul class="catg3_snav ppost_nav">
              <li>
                <div class="media"> <a class="media-left" href="www.missionroadsafety.com"> <img src="images/portal.png" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="www.missionroadsafety.com"> A portal for road accidents data <p style="color: red;">www.missionroadsafety.com</p></a></div>
                </div>
             </li>
            </ul>
          </div>
        </div> -->
        <!-- <div class="col-lg-3 col-md-3 col-sm-6"> -->
          <!-- <div class="single_footer_top wow fadeInRight">
            <h2>Important Links</h2>
            <ul class="footer_labels">
              <li><a href="http://www.road-safety.co.in/isafe">iSAFE</a></li>
              <li><a href="http://ambivan.in/">Ambivan</a></li>
              <li><a href="#">Safekart</a></li>
              <li><a href="https://www.road-safety.co.in/marathon/">Marathon</a></li>
              <li><a href="https://www.road-safety.co.in/conference/">Conferences</a></li>
              <li><a href="https://road-safety.co.in/important.php">Important Resources</a></li>
              <li><a href="https://www.road-safety.co.in/portal/studentportal/">Login</a></li>
            </ul>
          </div> -->
        <!-- </div> -->
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2>Contact Form</h2>
            <form action="#" class="contact_form">
              <label>Name</label>
              <input class="form-control" type="text">
              <label>Email*</label>
              <input class="form-control" type="email">
              <label>Message*</label>
              <textarea class="form-control" cols="30" rows="10"></textarea>
              <input class="send_btn" type="submit" value="Send">
            </form>
          </div>
        </div>
        </div>
        <div class="footer_bottom">
          <div class="footer_bottom_left">
            <p>Copyright &copy;2018 IRSC</p>
          </div>
          
        </div>
      </footer>
      </div>
    </div>
      
              </div>
            </div>
            <!-- My Script -->
            <script>
              function click1(){
                document.getElementById('blog1').style.overflow = "scroll";
              }
            </script>
            <script>
              function click2(){
                document.getElementById('blog2').style.overflow = "scroll";
              }
            </script>
            <!-- My Script end -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/wow.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.li-scroller.1.0.js"></script>
            <script src="assets/js/custom.js"></script>
            </body>
            </html>