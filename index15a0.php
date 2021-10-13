

<?php include("include/nav.php");?>


    <main class="main-page">
      <div class="container">
        <section class="section-page section-separate">
		
		
          <div class="section-title"><h2>Support</h2></div>
          <div class="section-text">
          </div>
          <div class="contact-section-top clearfix">
            <ul class="support-list">
              <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
              <a href="" class="support-item__link phone--icon">
                <span class="support-item__title">Phone</span>
                <span class="support-item__value"><?php echo"$phone123";?></span>
              </a>
            </li>
            <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
              <a href="" class="support-item__link email--icon">
                <span class="support-item__title">Email</span>
                <span class="support-item__value"><?php echo"$email_admin1";?></span>
              </a>
            </li>
            </ul>
            <div class="map wow fadeInRight" data-wow-delay="0.6s">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.419521879213!2d-0.08650810145267253!3d51.52386476089281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761caf108258d5%3A0xe98bf33422b1e012!2zMzcgVGFiZXJuYWNsZSBTdCwgTG9uZG9uIEVDMkEsINCS0LXQu9C40LrQvtCx0YDQuNGC0LDQvdC40Y8!5e0!3m2!1sru!2s!4v1512301375736" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.contact-section-top -->
          <div class="contact-section-bottom">
            <div class="section-title"><h2>Send message</h2></div>
            <div class="section-text">
            </div> 
           



            <form method=post name=mainform onsubmit="return checkform()" class="form-contacts">
              <input type=hidden name=a value=support>
              <input type=hidden name=action value=send>

              <fieldset class="form-contacts__fieldset clearfix">
                                               <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.2s">
                  <input type="text" class="form-contacts__input" name="name" placeholder="Your name" value="" autofocus / >
                </label>
                                                <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.4s">
                  <input type="email" class="form-contacts__input" name="email" placeholder="Your email" value="">
                </label>
                                                </fieldset>
              <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.6s">
                <textarea name="message" class="form-contacts__textarea" placeholder="Message"></textarea>
              </label>
              <div class="form-contacts__btn wow fadeInUp" data-wow-delay="1s">
                <button type="submit" class="btn btn-orange"><span>Send</span></button>
              </div>
              <!-- /.form-contacts__btn -->
            </form>                      </div>
          <!-- /.contact-section-bottom -->
        </section>
      </div>
      <!-- /.container -->
    </main>

    <?php include("include/foot.php");?>
  </div>
 

  <!-- /.wrapper -->





  <script src="assets/libs/html5shiv/es5-shim.min.html"></script>
  <script src="assets/libs/html5shiv/html5shiv.min.html"></script>
  <script src="assets/libs/html5shiv/html5shiv-printshiv.min.html"></script>
  <script src="assets/libs/respond/respond.min.html"></script>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/libs/ResponsiveTables/ng_responsive_tables.js"></script>
  <script src="assets/libs/clipboard.js/clipboard.min.js"></script>
  <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="assets/libs/bootstrap-sweetalert/sweetalert.min.js"></script>
  <script src="assets/libs/wow/dist/wow.min.js"></script>
  <script src="assets/libs/matchheight/jquery.matchHeight-min.js"></script>
  <script src="assets/libs/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
  <script src="assets/parallax.min.js"></script>
  <script src="assets/libs/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/js/common.js"></script>
  <script src="assets/js/calc.js"></script>
  

    


</body>


<!-- Mirrored from <?php echo"$site_name3";?>/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 01:58:53 GMT -->
</html>