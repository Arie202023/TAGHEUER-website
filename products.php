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
                                 <li class="nav-item active">
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
      <!-- end header inner -->
      <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- project section -->
      <div id="project" class="project">
         <!--<div class="container"-->

         <div id="project" class="project">
         <div class="container">
         
          
            <div class="row">
            <div class="product_main">

               <section style="background-color:white;">
                  <div class="container py-5">
                     <div class="row">
         
         <?php
            
                  $sel_stmt = "SELECT * FROM tbl_product LIMIT 10";
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
            </div>
         </div>

      <!-- end project section -->
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

