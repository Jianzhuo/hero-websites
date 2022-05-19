<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="We offer a complete solution for distributing quality food products." />
        <meta name="author" content="Cyndi.L" />
        <title>Hero Foods - Coming Soon</title>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-P68JWK8WBM"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-P68JWK8WBM');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171053654-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-171053654-2');
        </script>

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
          form{
            width: 100%;
            margin: 0 auto;
          }
          .form-group{
            width: 100%;
            border: 1px solid #fff;
            padding: 2px;
            box-sizing: border-box;
            margin: 5px auto;
            background-color: transparent;
            font-size: 14px;
            border-radius: 5px;
            color: #fff;
          }
          .form-control{
            width:100%;
          }
          input.form-control, textarea.form-control, select.form-control{
            -webkit-appearance: none;
            border: 0;
            background-color: transparent;
            color:#fff;
            border-radius: 0;
          }
          select{
            border: 0 !important;
            background-size: 12px;
            background-position: calc(100% - 10px) center;
            background-repeat: no-repeat;
          }
          .contact_submit{
            background-color: transparent;
            border: 1px solid #fff;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            text-transform: uppercase;
            margin: 10px 0;
            letter-spacing: 2px;
          }
          @media only screen and (max-width: 600px) {
            form{
              width:70%;
            }
          }
        </style>
    </head>
    <body>
        <!-- Background Video-->
        <!--<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>-->
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Our Website is Coming Soon</h1>
                    <p class="mb-5">We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!</p>
                    <form method="post" action="submit_contact.php" onsubmit="return checkform(this)">
                      <div class="form-group enquiry-group"><input name="name" type="text" class="form-control" required placeholder="* Name" value="" oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group enquiry-group"><input name="company" type="text" class="form-control" placeholder="Company Name" oninvalid="this.setCustomValidity('Please enter your company name')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group enquiry-group"><input name="email" type="email" class="form-control" required placeholder="* Email" oninvalid="this.setCustomValidity('Please enter your email address')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group enquiry-group"><input name="phone" type="tel" minlength="6" class="form-control" required placeholder="* Contact Number" oninvalid="this.setCustomValidity('Please enter your contact number')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group enquiry-group">
                          <select class="form-control" name="dropdown" class="form-control contact_input" placeholder="Select One" required oninvalid="this.setCustomValidity('Please choose your enquiry type')" oninput="setCustomValidity('')">
                            <option value="" disabled selected>Choose Enquiry Type</option>
                            <option value="Customer Feedback">Customer Feedback</option>
                            <option value="Wholesaler / Distributor">Wholesaler / Distributor</option>
                            <option value="Others / General Enquiries">Others / General Enquiries</option>
                          </select>
                      </div>
                      <div class="form-group enquiry-group"><textarea name="enquiry" type="text" class="form-control" required placeholder="* Message" style="resize:vertical; min-height:150px;" oninvalid="this.setCustomValidity('Please enter your message')" oninput="setCustomValidity('')"></textarea>
                      </div>
                      <div class="form-submit">
                          <input class="contact_submit" type="submit" id="submit" name="submit" value="Submit">
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
