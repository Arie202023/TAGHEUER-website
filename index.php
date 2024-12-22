<?php include 'include/connect.php'; ?>
<?php include 'include/header.php'; ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="products.php">Products</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="fashion.php">Fashion</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="testimonial.php">Testimonials</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-2">
                        <div class="navlogo">
                           <a class="navbar-brand" href="#">
                              <img src="images/icon_logo.png" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> TAG-HEUER </span> <br>Trends 2024</h1>
                     <p>Tag Heuer introduces its crimson red Carrera</p>
                     <a class="read_more" href="products.php">Shop now</a>
                  </div>   
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <!--<div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/shoes.png" alt="#"/></i>
                     <span>Shoes</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/underwear.png" alt="#"/></i>
                     <span>underwear</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/pent.png" alt="#"/></i>
                     <span>Pante & socks</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/t_shart.png" alt="#"/></i>
                     <span>T-shirt & tankstop</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/jakit.png" alt="#"/></i>
                     <span>cardigans & jumpers</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/helbet.png" alt="#"/></i>
                     <span>Top & hat</span>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
      <!-- end six_box section -->
      <!-- project section -->  
      <section class="container-fluid">

      <div class="container">
         <div class="row">
       
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

            
          
    <div class="owl-carousel owl-theme mt-5">
    <?php
         $sel_stmt = "SELECT * FROM tbl_product";
         $stmt = $conn->query($sel_stmt);
         $stmt->execute();
         $result = $stmt->fetchAll();

         $out = "";
         foreach ($result as $rows) {
            $out .= " <div class='owl-item'>
            <div class='card'>
                <div class='img-card'>
                    <img src='images/{$rows[4]}'
                        alt=''>
                </div>
                <div class='testimonial mt-4 mb-2'>
                {$rows[1]}
                </div>
            </div>
        </div>";
         }
         echo $out;
         ?>
    </div>
            
         </div>
      </div>
   </section>

      <div id="project" class="project">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
            <div id="project" class="project">
         <div class="container">
         
          
            <div class="row">
            <div class="product_main">

               <section style="background-color:dark ;">
                  <div class="container py-5">
                     <div class="row">
         
         <?php
            
                  $sel_stmt = "SELECT * FROM tbl_product LIMIT 3";
                  $stmt =$conn->prepare($sel_stmt);
                  $stmt->execute();

                  $result = $stmt->fetchAll();

                  $out = "";
                  foreach ($result as $rows){
                     $out.="<div class='col-md-12 col-lg-4 mb-lg-0'>
                     <div class= 'card' style='display: flex; flex-direction: column; height: 100%;'>
                     <div class = 'image-container' style='height: 200px; overflow: hidden;'>
                     <img  src='images/{$rows[4]}' style width: 100%; height:100% object-fit: contain; alt=''/>
                           </div>
                           <div class='card-body'>
                              <h3>{$rows[1]}</h3>
                              <h3>{$rows[2]}</h3>
                              <h3>₱ ". number_format($rows[3],2)."</h3>
                              <button class = 'read_more mb-3' id='expandBtn'>Buy Now</a>
                           
                              </div>
                           </div>
                           </div>";
                  }
                  echo $out;
               ?>
               </div>
               <a class="read_more" href="products.php">See More</a>
            </div>
         </div>
         </div>
      </div>
      </div>
      <!-- end project section -->
      <!-- fashion section -->
      <div class="fashion">
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
         <!--<img src="images/fashion.jpg" alt="#"/>-->
         <video controls autoplay>
        <source src="images/TAGCarreraChronograph.mp4" 
                type="video/mp4" />
         <source src="images/TAGCarreraChronograph.oog" 
                type="video/oog" />
    </video>
    </div>
      </div>
      <!-- end fashion section -->
      <!-- news section -->
      <div class="about">
         <div class="container">
         <?php
                  $sel_stmt = "SELECT * FROM tbl_about WHERE about_id IN (1,2)";
                  $stmt =$conn->query($sel_stmt);
                  $stmt->execute();
                  
                  $result = $stmt->fetchAll();
                  
                  $row = "0";
                  $testimonial = "";
                  foreach ($result as $rows){
                     $row ++;
                     if ($row % 2 == 1){
                     $testimonial.="<div class='row'>
                     <div class='col-md-12 margin_top40'>
                        <div class='row d_flex'>
                           <div class='col-md-5'>
                              <div class='news_img'>
                                 <figure><img src=images/{$rows[3]}></figure>
                              </div>
                           </div>
                           <div class='col-md-7'>
                              <div class='news_text'>
                                 <h3>{$rows[1]}</span> 
                                 <p>{$rows[2]}</p>
                              </div>
                           </div>
                        </div>
                     </div>";}
                     else{
                        $testimonial.=" <div class='row'>
                        <div class='col-md-12 margin_top40'>
                           <div class='row d_flex'>                        
                              <div class='col-md-7'>
                                 <div class='news_text'>
                                    <h3>{$rows[1]}</span> 
                                    <p>{$rows[2]}</p>
                                 </div>
                              </div>
                              <div class='col-md-5'>
                                 <div class='news_img'>
                                    <figure><img src=images/{$rows[3]}></figure>
                                 </div>
                              </div>
                           </div>
                        </div>";
                     }
                  }
                  echo $testimonial;
               ?>
               </class>
               </div>
               </div>
               <br></br>
      <!-- end news section -->
      <!-- newslatter section -->
      <!--<div  class="newslatter">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <h3 class="neslatter">Subscribe To The Newsletter</h3>
               </div>
               <div class="col-md-7">
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <button class="sumbit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>-->
      <!-- end newslatter section -->
      <!-- three_box section -->
      <!--<div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_mony.png"></i>
                     <span>Money Back</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_gift.png"></i>
                     <span>Special Gift</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_car.png"></i>
                     <span>Free Shipping</span>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
      <!-- end three_box section -->

      <!--  footer -->
      
      <?php include 'include/footer.php'; ?>
      
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
   <script>
      $(document).ready(function () {
         var slider = $(".owl-carousel");
         slider.owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1,
            stagePadding: 20,
            center: true,
            nav: false,
            margin: 50,
            dots: true,
            loop: true,
            responsive: {
               0: { items: 1 },
               480: { items: 2 },
               575: { items: 2 },
               768: { items: 2 },
               991: { items: 3 },
               1200: { items: 4 }
            }
         });
      });
   </script>
   </body>
</html>

