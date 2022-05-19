<!DOCTYPE html>
<html lang="en">

<head>
  <title>NZ Wagyu | Grain Fed Goodness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <meta name="facebook-domain-verification" content="szsthm88bfbzxmmsymhfiurhbuxaee" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R864C732BL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-R864C732BL');
  </script>
  <style>
    body{
      height:100vh;
      font-family: 'Poppins', sans-serif;
    }
    .coming-soon{
      background-image: url('coming-soon.jpg');
      background-position: 85% center;
      background-size: auto;
      background-repeat: no-repeat;
      height: 100vh;
    }
    .nz-wagyu-logo{
      width:400px;
      height:auto;
    }
    .coming-soon-left{
      width: 50%;
      margin: auto;
      color: #fff;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 25%;
      transform: translate(-50%, -50%);
    }
    .stay-tuned{
      letter-spacing:10px;
      font-weight:700;
    }
    .launch{
      letter-spacing: 6px;
      font-size: 40px;
    }
    .subscribe{

    }
    .contact-info{
      font-size:14px;
    }
    .contact-info p{
      letter-spacing: 3px;
      display: inline-block;
      margin: 0 15px;
    }
    @media only screen and (max-width: 600px) {
      .nz-wagyu-logo{
        width:75%;
      }
      .coming-soon{
        background-position: 85% 80%;
        background-size: 100%;
        height: 100%;
      }
      .coming-soon-left{
        width: 95%;
        margin: 0 auto;
        left: auto;
        top: 30%;
        transform: translate(0%, -50%);
      }
      .contact-info p{
        display: inline-block;
        width:100%;
      }
    }
  </style>
</head>

<body style="background-color:#000;">
  <div class="coming-soon">
    <div class="coming-soon-left">
      <img src="logo.png" class="nz-wagyu-logo">
      <p class="stay-tuned">STAY TUNED</p>
      <h1 class="launch">We will launch soon</h1>
      <!--<p class="subscribe">Subscribe to get notification as soon as we launch!</p>-->
      <!--<form id="contact-form">
        <input type="hidden" name="action" value="send_contact">
        <section class="contact-form">
          <div class="form-group">
            <div class="contact-field">
              <input name="email" type="email" placeholder="Email Address"
                data-validation="required email"
                            data-validation-error-msg-email="Invalid email, please try again.">
            </div>
          </div>
          <button type="submit" form="contact-form" class="contact-form-btn">Submit</button>
        </section>
      </form>-->
      <div class="contact-info">
        <p>Phone: 0800 66 11 99</p>
        <p>Email: <a href="mailto:sales@herointernational.co.nz" style="color:#fff;text-decoration:underline;">sales@herointernational.co.nz</a></p>
      </div>
    </div>
  </div>
</body>
<script>
$.validate({
    modules: 'security',
    form: "#contact-form",
    scrollToTopOnError: false
});

$(document).ready(function() {
    $("#contact-form").submit(function(e) {
        e.preventDefault();
        $.post("action.php", $(this).serialize(), function(result) {
            var obj = JSON.parse(result);
            console.log(obj);
            Swal.fire({
                icon: obj.type,
                title: obj.title,
                text: obj.msg
            });
        });
    });
});
</script>

</html>
