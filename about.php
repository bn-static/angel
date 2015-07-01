<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angel Skin Care</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=195310000651099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <nav id="navbar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-btn">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/index.php"><img src="assets/img/logo.png"></a>
      </div>

      <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-btn">
        <ul id="nav" class="nav navbar-nav">
          <li><a href="/index.php">Home <span class="sr-only">(current)</span></a></li>
          <li class="dropdown"><a href="/treatments.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Treatments</a>
          <ul class="dropdown-menu dropdown-menu-left">
            <li><a href="/treatments.php">Cosmetic Treatments</a></li>
            <li><a href="/skin-treatments.php">Skin Treatments</a></li>
            <li><a href="/vaginal.php">Vaginal Treatment</a></li>
          </ul></li>
          <li><a href="/about.php">About Us</a></li>
          <li><a href="/contact.php">Contact Us</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="content">
  <h1 class="page-title lato text-center">About Us</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <p>Angel Skin &amp; Aesthetic Clinic သည် မော်လမြိုင် မြို့တွင်ဖွင့်လှစ်ထားသော မျက်နှာနှင့် အရည်ပြားဆိုင်ရာရောဂါများကို ခေတ်မီစက်ကြီးများဖြင့် ကုသပေးနေသော ဆေးခန်းဖြစ်ပါသည်။</p>
          <p>၂၀၁၅ ခုနှစ် ဇွန်လတွင် စတင်ဖွင့်လှစ်ခဲ့ပြီး ၊ နိုင်ငံတကာအသိအမှတ်ပြု အရေပြားအထူးကု ဆရာဝန်ကြီးကိုယ်တိုင် ကုသပေးနေပါသည်။</p>
        </div>
      </div>
    </div>
  </div>
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <h4 class="footer-title lato">About Us</h4>
          <p class="footer-text">Angel Skin & Aesthetic Clinic သည် မော်လမြိုင် မြို့တွင်ဖွင့်လှစ်ထားသော မျက်နှာနှင့် အရည်ပြားဆိုင်ရာရောဂါများကို ခေတ်မီစက်ကြီးများဖြင့် ကုသပေးနေသော ဆေးခန်းဖြစ်ပါသည်။</p>
          <a href="about.php">Learn More <i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
        <div class="col-sm-5">
          <div class="fb-page" data-href="https://www.facebook.com/angelclinic" data-width="457" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          Developed by 
            <a href="http://biznet.com.mm" target="_blank"><img src="assets/img/biznet-logo.png"></a>
          </div>
          <div class="col-sm-6 text-right">
            <small class="copyright-text">copyright &copy; 2015 Angel Face</small>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/site.js"></script>
    <script type="text/javascript">
        $(function() {
            new WOW().init();
            $( '#main-slider' ).sliderPro({
              width: '100%',
              height: '478',
              arrows: false,
              buttons: false,
              autoplay: false,
              autoScaleLayers: false,
              imageScaleMode: 'contain',
              breakpoints: {
                500: {
                  thumbnailWidth: 120,
                  thumbnailHeight: 50
                }
              }
            });

            $("#contact-form").submit(function() {

                var url = "https://fwdform.herokuapp.com/user/0fb70578-0aef-4735-83a8-a1e89b0f0aac"; // the script where you handle the form input.

                $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#contact-form").serialize(), // serializes the form's elements.
                   success: function(data)
                   {
                       $('#contact-form').prepend('<div class="alert alert-info">Message Sent</div>')
                    },
                    error: function()
                    {
                      $('#contact-form').prepend('<div class="alert alert-danger">Message Not Sent</div>')
                    }
             });

                return false; // avoid to execute the actual submit of the form.
            });
        });
    </script>
  </body>
</html>