<div id="herofoods-newsletter" style="background-image:url(images/newsletter-banner-2.jpg); background-repeat:no-repeat; background-size:100%;background-repeat: no-repeat; background-attachment: fixed;">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center herofoods-heading">
          <h1 class="regular-title uppercase">first hand news</h1>
          <p>Subscribe To Our Newsletter So You Don't Miss Updates</p>
      </div>
      <div class="col-md-9 col-md-offset-1">
				<form class="subscribe-form" method="post" action="submit_subscribeform.php" onsubmit="return checkform(this)">
          <div class="row form-group">
            <div class="subscribe-name">
              <!-- <label for="fname">First Name</label> -->
              <input type="text" name="name" class="form-control" placeholder="NAME" required value="" oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')">
            </div>
            <div class="subscribe-name">
              <!-- <label for="email">Email</label> -->
              <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS" required value="" oninvalid="this.setCustomValidity('Please enter your email address')" oninput="setCustomValidity('')">
            </div>
            <div class="subscribe-submit">
              <input type="submit" value="SUBSCRIBE" class="form-control subscribe-btn">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
