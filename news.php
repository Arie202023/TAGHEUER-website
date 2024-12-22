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
                     <h2>Costumer Feedback</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news section -->
      <!--<div class="news">
         <div class="container">
         <button type="button" class="btn btn-primary" data-toggle="modal" id="newRecord">
                          New Testimonial
                        </button>
                        <br/><br/>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Account Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="acctID" id="idVal" type="text"/>
                                        </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="Fname" id="FnameVal" type="text" placeholder="Enter your full name"/>
                                        <label for="fullname">Full Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="eadd" id="EaddVal" type="email" placeholder="name@example.com"/>
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="pass" id="passVal" type="password" placeholder="Enter your Feedback" />
                                        <label for="inputFeedback">Feedback</label>
                                    </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btnSaveAcct">Save Record</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                        <div class="about">
         <div class="container">
               <?php
                  $sel_stmt = "SELECT * FROM tbl_news";
                  $stmt =$conn->query($sel_stmt);
                  $stmt->execute();
                  
                  $result = $stmt->fetchAll();

                  $testimonial = "";
                  foreach ($result as $rows){
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
                                 <div class='date_like'>
                                    <span>Like </span><span class='pad_le'>Comment</span>
                                 </div>
                                 <p>{$rows[2]}</p>
                              </div>
                           </div>
                        </div>
                     </div>";
                  }
                  echo $testimonial;
               ?>
            <!--<div class="row">
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img1.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span> 
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img2.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span> 
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img3.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span> 
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
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

