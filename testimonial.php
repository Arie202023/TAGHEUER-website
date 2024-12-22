<?php include 'include/header.php'; ?>
<?php include 'include/connect.php'; ?>
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
                                 <li class="nav-item ">
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
                                 <li class="nav-item active">
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
<!-- end header inner -->
      <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonials</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
         <div class="about">
         <div class="container">
         <?php
                  $sel_stmt = "SELECT * FROM tbl_news";
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
      <!-- end news section -->
      <!--  footer -->
      <footer>
      <?php include 'include/footer.php'; ?>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

