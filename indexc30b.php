<?php 
  include "include/login_process.php";
include("include/nav.php");
    
?>



    <main class="main-page">
      <div class="container">
        
           





                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="mainform"  class="form-user form-login">
         
          <div class="form-user__title"><h2>Login into account</h2></div>
          <label class="form-user__label">
          <?php echo"$email_err";?>
            <span class="label-title">Email</span>
            <!-- /.label-title -->
            <input type="text" class="form-user__input" name="email"   autofocus required>
          </label>
          <label class="form-user__label">
          <?php echo"$password_err";?>
            <span class="label-title">Password</span>
            <!-- /.label-title -->
            <input type="password" class="form-user__input" name="password" required>
          </label>
                                     
          <div class="form-user__btn">
            <button type="submit" class="btn btn-orange"><span>Sign in</span></button>
          </div>
          <!-- /.form-user__btn -->
        </form>
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
  

  <script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php echo"$yes";?>


</body>


<!-- Mirrored from <?php echo"$site_name3";?>/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 01:58:51 GMT -->
</html>