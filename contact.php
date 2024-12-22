<?php include 'include/header.php'; ?>
<?php include ("include/connect.php");?>
<?php
    if(isset($_GET['id'])){

        $data = array($_GET['id']);

        $sqlAcct = "SELECT * FROM tbl_news WHERE news_id = ?";
        $stmt = $conn->prepare($sqlAcct);
        $stmt->execute($data);

        $result = $stmt->fetchAll();
        
        foreach($result as $rows){
            $id = $rows[0];
            $name = $rows[1];
            $desc = $rows[2];
        }

    }else{
        $id = "";
        $name = "";
        $desc = "";
    }
?>
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
                                 <li class="nav-item">
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
                                 <li class="nav-item active">
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
      <!-- banner -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="con_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form"  method="POST">
                        <div class="row">
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Name" type="text" name="name" required>
                           </div>
                           
                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Message" type="text"  name="desc"required>
                           </div>
                           <div class="col-md-12" style="text-align:right">
                              <button class="send_btn" id="send">Send</button>
                           </div>
                        </div>
                        </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="js/sweetalert.js"></script>  
      <script src="js/alert.js"></script>
   </body>
</html>

