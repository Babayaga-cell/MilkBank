<?php 

    include 'Header.MainPage.php';

?>



<body>



<!--=====Main Page=====-->



  <!-- ======= Hero Section ======= -->

  <section id="hero">

    <div class="hero-container">

      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">



        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>



        <div class="carousel-inner" role="listbox">



          <!-- Slide 1 -->

          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-3.jpg');">

            <div class="carousel-container">

              <div class="carousel-content container">

                <h2 class="animated fadeInDown">Welcome to MilkBank PH<span></span></h2>

                <p class="animated fadeInUp">Donate or Reserve breastmilk Now!</p>

                <?php 

                if(isset($_SESSION['userID'])){

                    echo '<a href="#donatemilk" class="btn-get-started animated fadeInUp scrollto">Donate Milk Now!</a> 

                    <a href="#reservemilk" class="btn-get-started animated fadeInUp scrollto">Reserve Milk Now!</a>';

                }

                else {

                echo '<a href="SignUp.php" class="btn-get-started animated fadeInUp scrollto">Sign Up Now!</a>
 			<a href="Login.php" class="btn-get-started animated fadeInUp scrollto">Login Now!</a>';

                }

                ?>

              </div>

            </div>

          </div>



          <!-- Slide 2 -->

          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpg');">

            <div class="carousel-container">

              <div class="carousel-content container">

                <h2 class="animated fadeInDown">About Us</h2>

                <p class="animated fadeInUp">Learn more About BreastMilk</p>

                <a href="LearnMoreAboutBreastMilk.php" class="btn-get-started animated fadeInUp scrollto">Read More</a>

              </div>

            </div>

          </div>



          <!-- Slide 3 -->

          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-4.jpg');">

            <div class="carousel-container">

              <div class="carousel-content container">

                <h2 class="animated fadeInDown">Contact Us</h2>

                <p class="animated fadeInUp">Feedback!!!</p>

                <a href="ContactUs.php" class="btn-get-started animated fadeInUp scrollto">Read More</a>

              </div>

            </div>

          </div>



        </div>



        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">

          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>

          <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">

          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>

          <span class="sr-only">Next</span>

        </a>



      </div>

    </div>

  </section><!-- End Hero -->





  <?php

  

  if(isset($_SESSION['userID'])){

    echo' <main id="main">



    <!-- ======= The MilkBank Section ======= -->

  <br>

  <section id="about" class="contact">

    <center>

    <h2>The <strong>MILK BANK</strong></h2>

    <p>The <strong>MILK BANK</strong> is a website that you can donate and receive breast milk fast, safe, and secure 

    <br> for mommies and babies future.  <a href="SignUp.php">Sign Up</a> now and donate or reserve breast milk now!</p>

    </center>

  </section>

  <!-- End of MilkBank Section -->



  <!-- ======= Partners Section ======= -->

    <section id="partners" class="contact">

      <div class="container">

        <center>

        <div class="contact">

          <h2>Our <strong>Partners</strong></h2>

        </center>

        <div class="row">

        <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                <center>

                    <img src="assets/img/portfolio/DOH.png" height="80%" width="80%" />

                    <br></br>

                    </center>

						<header>

							<h3><strong>Department of Health (DOH)</strong></h3>

						</header>

							<p> &nbsp&nbsp The Department of Health is the executive department of the Government of the Philippines responsible for ensuring access to basic public health services by all Filipinos through the provision of quality health care and the regulation of all health services and products.</p>

				</section>

            </div>

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                    <br>

                    <center>

					<img src="assets/img/portfolio/HumanMilkBankAssociationPh.jpg" alt="" height = "80%" width = "80%" />

          </center>  

          <header>

							<h3><strong>Human MilkBank Association of the Philippines, Inc.</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp The Human Milk Bank Association of the Philippines mobilizes the healing power of donor milk by accrediting nonprofit milk banks in the Philippines and setting international guidelines for pasteurized donor human milk.</p>

				</section>

            </div>



		      <div class="row">

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                <center>

					<img src="assets/img/portfolio/PhilippineChildrensMedicalCenter.png" alt ="" height ="80%" width = "80%"  />

					<br></br> </center>

                        <header>

							<h3><strong>Philippine Childrens Medical Center</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp&nbsp The Philippine Childrens Medical Center is a government-run childrens hospital in Quezon City, Metro Manila, Philippines. The hospital as a government-owned and controlled corporation is attached to the Department of Health. It was a brainchild of Dr. Fe del Mundo, a Harvard-trained Filipina doctor.</p>

				</section>

            </div>

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                 <center>

					<img src="assets/img/portfolio/PhilippineGeneralHospital.png" alt=""  height = "80%" width="80%"/>

          <br></br>

          </center>

                        <header>

							<h3><strong>University of the Philippines - Manila (Philippine General Hospital)</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp&nbsp The Philippine General Hospital is a tertiary state-owned hospital administered and operated by the University of the Philippines Manila. It is designated as the National University Hospital, and the largest government facility and referral center.</p>

				</section>

              </div>

            </div>     

        </div>

    </section>





    <center>

    <div class="text-center"><button><a href="Partners.php">Read More</a></button></div>

  </center>

  <!-- End of Partners Section -->



  <!-- ======= Read More Section ======= -->

    <section class="wrapper style1 container special">			

    <div class="row">

      <div class="col-4 col-12-narrower">



        <section>

          <header>

            <center><h5>What is <strong>BreastMilk</strong>?</h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breast milk is a liquid source of food made by a mothers breasts for her children. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>What <strong>BreastMilk</strong> can do?</h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breast milk provides a child with complete nutrition, as well as protection against infections, diseases, and illnesses.</p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>Benefits of <strong>BreastFeeding</strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breastfeeding benefits mothers and children in a variety of ways, and many of the health benefits continue long after breastfeeding has ended.</p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>		



      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>The Stages of <strong>BreastMilk</strong></strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Colostrum: Colostrum is the first breast milk. It is present at the end of pregnancy and during the first few days after the birth of your baby. It is usually thick, yellow and sticky, but it can also be thin and white or orange in color. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>

      

      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>The Stages of <strong>BreastMilk</strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Transitional Breast Milk: Transitional breast milk is a combination of colostrum and mature milk. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      

      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>The Stages of <strong>BreastMilk</strong></h5></center>

          </header>

          <p>&nbsp Mature Breast Milk: Your milk will change over to mature breast milk by the time your baby is about two weeks old. Mature breast milk is a combination of foremilk and hindmilk. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>

    </div>

  </section>

  <!-- End of Read More Section -->



  





    <!-- ======= Donate Milk Section ======= -->

    <section id="donatemilk" class="contact">

      <div class="container">



        <div class="section-title">

          <h2>Donate Milk</h2>

        </div>



        <div class="row">



          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

           <!-- Put here the Details about Donating Milk-->

          <center>

            <p>Here are the details about Donating breastmilk: </p>





          </center>





           <!-- Until Here-->

            

              

              <div class="text-center"><button><a href="DonateMilk.php">Donate Breast Milk Now!</a></button></div>

            

           



              </div>

          </div>



        </div>



      </div>

    </section><!-- End of Donate Milk Section -->

    

    <!-- ======= Reserve Milk Section ======= -->

    <section id="reservemilk" class="contact">

      <div class="container">



        <div class="section-title">

          <h2>Reserve Milk</h2>

        </div>



        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

             <!-- Put here the Details about Reserve Milk-->

          

            <center><p>Here are the details about Donating breastmilk: </p></center>





          





           <!-- Until Here-->

              <div class="text-center"><button><a href="ReserveMilk.php">Reserve Breast Milk Now!</a></button></div>

          </div>



        </div>



      </div>

    </section>

        <!-- End of Reserve Milk Section --> 





        

        

        <!-- ======= Contact Us Section ======= -->

        <section id="contactus" class="contact">

          <div class="container">

      

            <div class="section-title">

              <h2>Contact Us</h2>

            </div>

      

            <div class="row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

                 <!-- Put here the Details about Reserve Milk-->

              

                <center><p>Contact Us here! </p></center>

      

      

              

      

      

               <!-- Until Here-->

                  <div class="text-center"><button><a href="ContactUs.php">Contact Us</a></button></div>

              </div>

      

            </div>

      

          </div>

        </section>

            <!-- End of Contact Us Section --> ';

}

else{

  echo'

  <!-- ======= The MilkBank Section ======= -->

  <br>

  <section id="about" class="contact">

    <center>

    <h2>The <strong>MILK BANK</strong></h2>

    <p>The <strong>MILK BANK</strong> is a website that you can donate and receive breast milk fast, safe, and secure 

    <br> for mommies and babies future.  <a href="SignUp.php">Sign Up</a> now and donate or reserve breast milk now!</p>

    </center>

  </section>

  <!-- End of MilkBank Section -->



  <!-- ======= Partners Section ======= -->

    <section id="partners" class="contact">

      <div class="container">

        <center>

        <div class="contact">

          <h2>Our <strong>Partners</strong></h2>

        </center>

        <div class="row">

        <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                <center>

                    <img src="assets/img/portfolio/DOH.png" height="90%" width="90%" />

                    <br></br>

                    </center>

						<header>

							<h3><strong>Department of Health (DOH)</strong></h3>

						</header>

							<p> &nbsp&nbsp&nbsp&nbsp The Department of Health is the executive department of the Government of the Philippines responsible for ensuring access to basic public health services by all Filipinos through the provision of quality health care and the regulation of all health services and products.</p>

				</section>

            </div>

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                    <br>

                    <center>

					<img src="assets/img/portfolio/HumanMilkBankAssociationPh.jpg" alt="" height = "90%" width = "90%" />

          </center>  

          <header>

							<h3><strong>Human MilkBank Association of the Philippines, Inc.</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp&nbsp The Human Milk Bank Association of the Philippines mobilizes the healing power of donor milk by accrediting nonprofit milk banks in the Philippines and setting international guidelines for pasteurized donor human milk.</p>

				</section>

            </div>



		      <div class="row">

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                <center>

					<img src="assets/img/portfolio/PhilippineChildrensMedicalCenter.png" alt ="" height ="90%" width = "90%"  />

					<br></br> </center>

                        <header>

							<h3><strong>Philippine Childrens Medical Center</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp&nbsp The Philippine Childrens Medical Center is a government-run childrens hospital in Quezon City, Metro Manila, Philippines. The hospital as a government-owned and controlled corporation is attached to the Department of Health. It was a brainchild of Dr. Fe del Mundo, a Harvard-trained Filipina doctor.</p>

				</section>

            </div>

            <div class="col-6 col-12-narrower" data-aos="fade-up" data-aos-delay="300">

                <section>

                 <center>

					<img src="assets/img/portfolio/PhilippineGeneralHospital.png" alt=""  height = "90%" width="90%"/>

          <br></br>

          </center>

                        <header>

							<h3><strong>University of the Philippines - Manila (Philippine General Hospital)</strong></h3>

						</header>

							<p>&nbsp&nbsp&nbsp&nbsp The Philippine General Hospital is a tertiary state-owned hospital administered and operated by the University of the Philippines Manila. It is designated as the National University Hospital, and the largest government facility and referral center.</p>

				</section>

              </div>

            </div>     

        </div>

    </section>





    <center>

    <div class="text-center"><button><a href="Partners.php">Read More</a></button></div>

  </center>

  <!-- End of Partners Section -->



  <!-- ======= Read More Section ======= -->

    <section class="wrapper style1 container special">			

    <div class="row">

      <div class="col-4 col-12-narrower">



        <section>

          <header>

            <center><h5>What is <strong>BreastMilk</strong>?</h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breast milk is a liquid source of food made by a mothers breasts for her children. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>What <strong>BreastMilk</strong> can do?</h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breast milk provides a child with complete nutrition, as well as protection against infections, diseases, and illnesses.</p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>Benefits of <strong>BreastFeeding</strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Breastfeeding benefits mothers and children in a variety of ways, and many of the health benefits continue long after breastfeeding has ended.</p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>		



      <div class="col-4 col-12-narrower">

        <section>

          <header>

           <center> <h5>The Stages of <strong>BreastMilk</strong></strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Colostrum: Colostrum is the first breast milk. It is present at the end of pregnancy and during the first few days after the birth of your baby. It is usually thick, yellow and sticky, but it can also be thin and white or orange in color. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>

      

      <div class="col-4 col-12-narrower">

        <section>

          <header>

            <center><h5>The Stages of <strong>BreastMilk</strong></h5></center>

          </header>

          <p>&nbsp&nbsp&nbsp Transitional Breast Milk: Transitional breast milk is a combination of colostrum and mature milk. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>



      

      <div class="col-4 col-12-narrower">

        <section>

          <header>

           <center> <h5>The Stages of <strong>BreastMilk</strong></h5></center>

          </header>

          <p>&nbsp Mature Breast Milk: Your milk will change over to mature breast milk by the time your baby is about two weeks old. Mature breast milk is a combination of foremilk and hindmilk. </p>

          <div class="text-center"><button><a href="LearnMoreAboutBreastMilk.php">Read More</a></button></div>

        </section>

      </div>

    </div>

  </section>

  <!-- End of Read More Section -->



  <!-- ======= Contact Us Section ======= -->

  <section id="contactus" class="contact">

    <div class="container">



      <div class="section-title">

        <h2>Contact Us</h2>

      </div>



      <div class="row">

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

           <!-- Put here the Details about Reserve Milk-->

          <center><p>Contact Us here! </p></center>

         <!-- Until Here-->

            <div class="text-center"><button><a href="ContactUs.php">Contact Us</a></button></div>

        </div>



      </div>



    </div>

  </section>

      <!-- End of Contact Us Section --> ';

}





  

?>

    





  </main><!-- End #main -->

<!-- Footer-->

  <?php

    include 'Footer.php';

  ?>



<!--End - of Footer -->







</body>



</html>