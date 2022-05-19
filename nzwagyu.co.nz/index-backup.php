<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc/head.php') ?>
    <style>
      .contact-form{
      	margin: 30px auto;
      	width: 70%;
      }
      .contact-form p{
      	text-align: center;
      }
      .contact-form p a{
      	color:#000;
      	text-decoration: underline;
      }
      .contact-field{
      	margin:10px auto;
      }
      .contact-field input, .contact-field textarea{
      	font-size: 15px;
      	padding: 10px 15px;
      	border: 1px solid #A7A8AC;
      	width: 100%;
      }
      .contact-form-btn{
      	background-color: #F99E99;
      	color: #fff;
      	padding: 10px 15px;
      	width: 100%;
      	border: none;
      	font-size: 15px;
      }
    </style>
  </head>
  <body>
    <!--PRELOADER-->
    <?php include('inc/preloader.php') ?>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.php"><img alt="logo" class="logo-nav" src="images/logo-gold.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About</span>
            </a>
            <a data-scroll="" href="#grades">
              <span>Grades</span>
            </a>
            <a data-scroll="" href="#product">
              <span>Our Product</span>
            </a>
            <a data-scroll="" href="#cuts">
              <span>The Cuts</span>
            </a>
            <a href="partnership.php">
              <span>Partnership</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->

    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>GRAIN FED<br>GOODNESS</h1>
                    <!--<br>
                    <span class="typed"></span>-->
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel-cuts">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        It comes from hand-selected Wagyu cattle with good genetics, raised for 18 months on nutritionally rich pastures before enjoying a high quality GMO-free grain diet of ancient Japanese recipe at our purposely built feedlot for 420 days. Nutrient-rich Canterbury grains plus high quality mineral-rich water direct from the Southern Alps  make NZ Wagyu such a magnificent product. NZ Wagyu is extremely tender with very distinguish nutty and elegant aroma and taste.
                      </p>

                      <h5 class="name">
                        - NZ Wagyu -
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--ICONS-->
        <section class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3 text-center wagyu-icon">
                <img src="images/icon-1.png">
                <p>Premium Quality</p>
              </div>
              <div class="col-md-3 text-center wagyu-icon">
                <img src="images/icon-2.png">
                <p>New Zealand Made</p>
              </div>
              <div class="col-md-3 text-center wagyu-icon">
                <img src="images/icon-3.png">
                <p>Grain-Fed Wagyu</p>
              </div>
              <div class="col-md-3 text-center wagyu-icon">
                <img src="images/icon-4.png">
                <p>100% Natural</p>
              </div>
            </div>
          </div>
        </section>
        <!--/.ICONS END-->

        <!--GRADES-->
        <section class="grey-bg" id="grades">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>Meat Grades</span>
                </h3>
                <p class="content-detail">
                  Our wagyu beef cuts utilise the majority of the animal, including a range of whole and portioned cuts. All of our cuts are carefully tailored to your needs with wet and dry aging periods to optimise eating quality.
                </p>
              </div>
              <div class="col-md-12 content-right text-center">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4 grade-box">
                        <img src="images/grade-gold.png">
                        <div class="grade-desc border-gold">
                          <p class="head-sm">
                            Cuts of BMS 7-9
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 col-sm-4 grade-box">
                        <img src="images/grade-silver.png">
                        <div class="grade-desc border-silver">
                          <p class="head-sm">
                            Cuts of BMS 4-6
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 col-sm-4 grade-box">
                        <img src="images/grade-red.png">
                        <div class="grade-desc border-red">
                          <p class="head-sm">
                            Cuts of BMS 1-3
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.GRADES END-->

        <!--PRODUCTS-->
        <section class="white-bg mar-tm-10" id="product">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Our Products</span>
                </h3>
                <p class="content-detail">
                  Combination of respected Japanese Wagyu mastery, nutrient-rich Canterbury grains, and high-quality mineral-rich water, direct from the Southern Alps, that make ours such a magnificent product.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                  <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="thin-sliced.php"><img alt="image" src="images/product-thinslice.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">Thin Sliced</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="thick-sliced.php"><img alt="image" src="images/product-thickslice.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">Thick Sliced</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="diced-cut.php"><img alt="image" src="images/product-diced.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">Diced Cut</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="steaks-cut.php"><img alt="image" src="images/product-steak.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Steaks Cut</p>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="readytoeat.php"><img alt="image" src="images/product-readytoeat.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">Ready To Eat</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="giftbox.php"><img alt="image" src="images/giftbox.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Gift Box</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.PRODUCTS END-->

        <!--CUTS-->
        <section class="grey-bg" id="cuts">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>The Cuts</span>
                </h3>
                <p class="content-detail">
                  Our wagyu beef cuts utilise the majority of the animal, including a range of whole and portioned cuts. All of our cuts are carefully tailored to your needs with wet and dry aging periods to optimise eating quality.
                </p>
              </div>
              <div class="col-md-12 content-right">
                <div class="row">
                  <div class="owl-carousel3 owl-theme">

                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Bolar Blade
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Prepared by removing the Oyster Blade, which sits alongside the Blade. This cut has a high concentration of connective tissue and is best slow roasted.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Chuck
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Coming from the shoulder, this cut consists of very large muscles with a high concentration of connective tissues.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Eye Fillet
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Also known as the Tenderloin, the Eye Fillet spans across either side of the hind quarter backbone. As it’s not used as a working muscle, this results in an extremely tender cut.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Oyster Blade
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Also known as Flat Iron Steak, this uniform, flat cut is derived from the shoulder and renowned for its naturally high marbling and rich flavour.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Rib Eye
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Resides on either side of the backbone towards the front of the animal. This cut offers a full flavour, succulent, consistent cut.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Rump
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                This cut is derived from the hindquarter, just above the leg, which produces full-flavoured cuts.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="wrap-card">
                          <div class="card">
                            <p class="job">
                              Sirloin
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Also known as the Striploin, this cut is derived from the Short Loin. It is a highly tender cut, full of flavour and intermuscular marbling.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <img src="images/wagyu-cut.png">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.CUTS END-->

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                  Have a question? Our team would love to help!<br>
                  Auckland, New Zealand<br>
                  Phone: (64) 0800 66 11 99<br>
                  Email: sales@herointernational.co.nz
                </p>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->

        <!--FOOTER-->
        <?php include('inc/footer.php') ?>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>


    <script>

    </script>

    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
