<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc/head.php') ?>
  </head>
  <body>
    <!--PRELOADER-->
    <?php include('inc/preloader.php') ?>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <?php include('inc/header.php') ?>
    <!--/.HEADER END-->

    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-partnership"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel-cuts">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <h5 class="name">
                        - Partnership -
                      </h5>
                      <p class="head-about">
                        - Producing high quality grain fed Wagyu beef/Black Angus at a lower cost in New Zealand<br>
                        - All process is managed by farming and business professionals in New Zealand
                        </ul>
                      </p>
                      <a data-scroll="" href="#contact">
                        <div class="" style="display:inline-block; padding: 8px 15px; background-color: #c1a788; color:#242426; margin: 10px 0; font-size: 13px;">
                          Contact Us
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--Cuts-->
        <section class="grey-bg" id="cuts">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>Producing high quality grain fed Wagyu beef/Black Angus at a lower cost in New Zealand</span>
                </h3>
              </div>
              <div class="col-md-12 content-right">
                <img src="images/partnership-1.jpg">
                <br><br>
                <p class="text-grey">The margin that middlemen take will be shared with producer and end retailer/wholesaler. This means more money in production to produce good quality meat and farmers can concentrate on raising quality up not having to worry about financial crisis. You have better quality meat produced for less cost and everyone wins.</p>
                <h3 class="title-small-center">
                  <span>All process is managed by farming and business professionals in NZ</span>
                  <img src="images/partnership-2.jpg">
                </h3>
              </div>
            </div>
          </div>
        </section>
        <!--/.Cuts END-->

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
      $(function(){
        $('.menu-list a').click(function(){
          $(this).parent().addClass('active').siblings().removeClass('active')
        })
      })
    </script>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
