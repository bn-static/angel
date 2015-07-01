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