<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc/head.php') ?>
    <style>
    .steak-time{
      color: #434343;
      line-height: 26px;
      font-size: 13px;
      letter-spacing: 0.5px;
      margin: 0 auto;
    }
      .steak-time tr th{
        border: 1px solid #000;
        padding:5px 13px;
        text-align: center;
      }
      .steak-time tr td{
        border: 1px solid #000;
        padding:5px 13px;
        text-align: center;
      }
    </style>
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
            <div class="bg-steakcut"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel-cuts">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <h5 class="name">
                        - Steaks Cut -
                      </h5>
                      <p class="head-about">
                        A rich, full of flavour - wagyu steak cut from the various section. The amount of marbling in wagyu is an indicator of flavour richness.
                      </p>
                      <a href="https://www.hifresh.co.nz/product-category/all/meat/nz-wagyu/" target="_blank">
                        <div class="" style="display:inline-block; padding: 8px 15px; background-color: #c1a788; color:#242426; margin: 10px 0; font-size: 13px;">
                          Shop Now
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
        <section class="grey-bg" id="cooking">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>Cooking Instructions</span>
                </h3>
              </div>
              <div class="col-md-12 content-right text-center">
                <div class="row">
                  <p class="text-grey">
                    <i>The following are guidelines only. Some appliances may vary.</i><br>
                    Once thawed, remove the Wagyu from its packaging just prior to cooking. Pat dry and cook.
                    <br><br>
                    <img src="images/cooking-hotpot.png" class="cooking-icon">
                    <img src="images/cooking-hotplate.png" class="cooking-icon">
                    <br>
                    <table class="steak-time">
                      <tr>
                        <th>Thicknesss</th>
                        <th>Rare</th>
                        <th>Medium Rare</th>
                        <th>Medium</th>
                        <th>Medium Well</th>
                        <th>Well Done</th>
                      </tr>
                      <tr>
                        <th>Temperature</th>
                        <th>120°F - 128°F<br>44°C - 53°C</th>
                        <th>129°F - 134°F<br>54°C - 57°C</th>
                        <th>135°F - 144°F<br>57°C - 62°C</th>
                        <th>145°F - 152°F<br>63°C - 67°C</th>
                        <th>154°F - 160°F<br>68°C - 71°C</th>
                      </tr>
                      <tr>
                        <td>1.5cm</td>
                        <td>2 minutes</td>
                        <td>2-3 minutes</td>
                        <td>3-4 minutes</td>
                        <td>4-5 minutes</td>
                        <td>5-6 minutes</td>
                      </tr>
                      <tr>
                        <td>2.0cm</td>
                        <td>2-3 minutes</td>
                        <td>3-4 minutes</td>
                        <td>4-5 minutes</td>
                        <td>5-6 minutes</td>
                        <td>6-7 minutes</td>
                      </tr>
                      <tr>
                        <td>2.5cm</td>
                        <td>3-4 minutes</td>
                        <td>4-5 minutes</td>
                        <td>5-6 minutes</td>
                        <td>6-7 minutes</td>
                        <td>7-8 minutes</td>
                      </tr>
                      <tr>
                        <td>4.0cm</td>
                        <td>5-6 minutes</td>
                        <td>6-7 minutes</td>
                        <td>8-9 minutes</td>
                        <td>10-11 minutes</td>
                        <td>11-12 minutes</td>
                      </tr>
                    </table>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.Cuts END-->

        <!--SERVICES-->
        <section class="white-bg" id="thawing">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="title-small-center">
                  <span>Thawing Instructions</span>
                </h3>
              </div>
              <div class="col-md-12 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <p class="head-sm">
                          Method 1
                        </p>
                        <p class="text-grey">
                          Thaw frozen Wagyu in its packaging overnight in the refrigerator.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <p class="head-sm">
                          Method 2
                        </p>
                        <p class="text-grey">
                          For faster thawing, keep Wagyu in its packaging, and submerge in a bowl of cold water for 1-2 hours.
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.SERVICES END-->

        <!--FOOTER-->
        <?php include('inc/footer.php') ?>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>


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
