

<?php include("include/nav.php");?>
<?php
    $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments";
    $run_total_invest = mysqli_query($connect,$get_total_invest);
    $total_invest = mysqli_fetch_assoc($run_total_invest);
    $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraws";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_total_users = "SELECT * FROM users";
  $run_total_users = mysqli_query($connect,$get_total_users);
  $total_users = mysqli_num_rows($run_total_users) + 1500;
  $final1 = $total_invest['value_sum'] + 12000;
  $final2 = $total_withdraw['value_sum'] + 20000;
  $date1 = new DateTime('08/15/2019');
$date2 = new DateTime(date("m/d/Y"));
$diff = $date1->diff($date2);

  
    ?>
		<main class="main-page">
			<div class="container">
				<section class="section-page section-separate wow fadeInLeftBig" data-wow-delay="0.4s">
					<div class="row">
						<div class="col-xs-12 col-md-6 abl">
							<div class="section-about-inner__text">
								<div class="section-title"><h2>About company</h2></div>
								<p><?php echo"$site_name3";?> offers a unique opportunity for everyone who wants to make money on investing in the progressive currency Bitcoin. Our main activity is the mining of the cryptocurrency, through the use of special computers – miners and algorithms used to solve complex equations. Increasing our capital in Bitcoins, we also carry out one more activity - the trade in cryptocurrency on the exchange.</p>
								<p>Acting in two directions at once, we receive a stable profit, we guarantee the success of the project and the regularity of payments. We work around the clock, concluding the most successful transactions, trading on the exchange in order to get maximum benefits.</p>
								<a href="indexe47e.php?a=about" class="btn btn-orange wow fadeInUp" data-wow-delay="1.4s"><span>Learn more</span></a>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 abr">
							<div class="section-title"><h2>Company Documents</h2></div>
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<a href="assets/certificate.pdf" class="certificateLink" target="__blank"><img src="assets/img/certificate.png" alt=""></a>
								</div>
								<div class="col-xs-12 col-sm-8">
									<p>Adress: <?php echo"$location123";?></p>
									
								</div>
							</div>
						</div>
					</div>
					<!-- /.section-about-inner -->
				</section>
				<section class="section-page section-separate clearfix wow fadeInRightBig" data-wow-delay="0.6s">
					<div class="block-graph">
						<div class="section-title"><h2>Statistics</h2></div>
												<ul class="graph-descr-list">
															<li class="graph-descr-item orange--square">
									<span>Invested</span>
									<p>$<?php echo"$final1";?></p>
								</li>
																						<li class="graph-descr-item white--square">
									<span>Withdrawal</span>
									<p>$<?php echo"$final2";?></p>
								</li>
																						<li class="graph-descr-item">
									<span>Started</span>
									<p>Aug 14, 2019</p>
								</li>
																						<li class="graph-descr-item">
									<span>Running days</span>
									<p><?php print_r($diff->days);?></p>
								</li>
																						<li class="graph-descr-item">
									<span>Total accounts</span>
									<p><?php echo"$total_users";?></p>
								</li>
													</ul>
				        
					</div>
					<!-- /.section-graph -->
					<div class="block-invest">
						<div class="section-title"><h2>How to Invest</h2></div>
						<ul class="invest-list">
							<li class="invest-item wow fadeInDown" data-wow-delay="0.8s">
								<div class="invest-item__number">1</div>
								<div class="invest-item__title">Register.</div>
								<div class="invest-item__text">To become a member of the project, you need to register. Click on the appropriate button on the page and follow the instructions.
								</div>
							</li>
							<li class="invest-item wow fadeInDown" data-wow-delay="1.1s">
								<div class="invest-item__number">2</div>
								<div class="invest-item__title">Select the service plan.</div>
								<div class="invest-item__text">It is very simple to make a deposit – make a deposit by selecting a service plan in your personal account or on the appropriate page.
								</div>
							</li>
							<li class="invest-item wow fadeInDown" data-wow-delay="1.4s">
								<div class="invest-item__number">3</div>
								<div class="invest-item__title">Get a profit.</div>
								<div class="invest-item__text">Percentage on the deposit will be accrued after 24 hours - this means that you can withdraw your profits almost immediately.
								</div>
							</li>
						</ul>
						<!-- /.invest-list -->
					</div>
					<!-- /.section-invest -->

				</section>

				<section class="section-page section-separate">
					<div class="section-title"><h2>Plans</h2></div>
					<div class="section-text">
						<p>To participate in the investment project, you must make a deposit by selecting one of the proposed service plans. Since we are working with Bitcoin, your investment should also be in the cryptocurrency. To accurately calculate your profits, use a special calculator.</p>
					</div>
					<div class="section-inner-plans clearfix">

					<div class="plans-list">
                            <?php
                              include("include/config.php");
                               $get_plan = "select * from plans";
                     $run_plan = mysqli_query($connect,$get_plan);
                     while($row_plan = mysqli_fetch_array($run_plan)){
                         $name = $row_plan['name'];
                         $lower = $row_plan['lower_amount'];
                         $upper = $row_plan['upper_amount'];
                         $percentage = $row_plan['percentage'];
                         $day = $row_plan['day'];

                         echo"
                         <div class='plans-item active wow fadeInLeft' data-wow-delay='1s'>
<div class='plans-item__title'>$name</div>
<div class='plans-item__percent'>%$percentage</div>
<div class='plans-item__descr'>After $day day(s)</div>
<ul class='plan-description-list'>
    <li class='plan-description-item' >
        <div class='plan-description-item__title'>Min/Max amount: </div>
        <div class='plan-description-item__value'>$ $lower - $ $upper.</div>
    </li>
    <li class='plan-description-item'>
        <div class='plan-description-item__title'>Deposit: </div>
        <div class='plan-description-item__value'>included in payments</div>
    </li>
    
</ul>
                                    <a href='indexcca3.php?a=signup' class='plans-item__link'>Signup</a>
                            </div>
                         ";
                     }

                            ?>
						
						</div>

						
					</div>

				</section>

				<section class="section-page section-separate">
					<div class="section-title"><h2>Advantages of Our Company</h2></div>
					<div class="section-text">
						<p>In a wide variety of investment companies, it is difficult to make the final choice, but only we offer the best conditions.</p>
					</div>
					<div class="advantages-list monitor--img">
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="advantages-item__icon adv1--icon"></div>
							<div class="advantages-item__title">Daily Charges</div>
							<div class="advantages-item__text">Your deposit works for you exactly as much as you wish, and accruals are made every day.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.4s">
							<div class="advantages-item__icon adv2--icon"></div>
							<div class="advantages-item__title">Stable income</div>
							<div class="advantages-item__text">We work around the clock - this means that your money is constantly in circulation and your profit grows every hour.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.6s">
							<div class="advantages-item__icon adv3--icon"></div>
							<div class="advantages-item__title">Instant payments</div>
							<div class="advantages-item__text">Getting your profit is very simple - you make out an application in your personal account and in a moment receive money for your wallet.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.8s">
							<div class="advantages-item__icon adv4--icon"></div>
							<div class="advantages-item__title">Professional team</div>
							<div class="advantages-item__text">We have many years of experience working on stock exchanges and in the sphere of cryptocurrency mining – you can completely entrust your investments to us.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="1s">
							<div class="advantages-item__icon adv5--icon"></div>
							<div class="advantages-item__title">Comfort and protection</div>
							<div class="advantages-item__text">Your charges are displayed in your personal cabinet, you can access it from any device, and all your accounts are securely encrypted.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="1.2s">
							<div class="advantages-item__icon adv6--icon"></div>
							<div class="advantages-item__title">24/7 Support</div>
							<div class="advantages-item__text">Our managers are always ready to answer the questions you are interested in - contact us in any convenient way and you will receive the necessary information. </div>
						</div>
					</div>
					<!-- /.advantages-list -->

				</section>

				<section class="section-page section-separate">
					<div class="section-title"><h2>Referral System</h2></div>
					<div class="section-text">
						<p>Getting a bonus from the company is always nice. Especially when it takes a minimum of effort. Just tell everyone about your success in our company and give your individual link to register a new investor. Once your referral makes a deposit, you earn a profit of <?php echo"$amount_settings";?>% of the amount. </p>
					</div>
					<div class="referrals-list clearfix">
						<div class="referral-item referral-item2 wow bounceInLeft">
							<div class="referral-item__percent">Level 1-5<span>%</span></div>
							<div class="referral-item-inner">
<!-- 								<div class="referral-item__title">В течении суток</div> -->
								<div class="referral-item__text">Your profit from referrals, which you invite by yourself.</div>
							</div>
						</div>
						<div class="referral-item referral-item2 wow bounceInRight">
							<div class="referral-item__percent">Level 2-1<span>%</span></div>
							<div class="referral-item-inner">
<!-- 								<div class="referral-item__title">В течении суток</div> -->
								<div class="referral-item__text">The profit that will be accrued from sub-referrals – your second-tier partners.</div>
							</div>
						</div>
					</div>
					<!-- /.referrals-list -->
				</section>

				<section class="section-page section-separate">
					<div class="row">
						<div class="section-title"><h2>Statistics</h2></div>
						<div class="section-text">
					 <div class="col-xs-12 col-sm-6">
									<div class="lastStatItem">
										<h3>Last Deposits</h3>
										<table class="statsTable">
											<thead>
												<tr>
													<th>Username</th>
													<th>Payment system</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
											
											<?php
                                $get_deposit = "select * from investment_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                  $firstname1 = $row_deposit['first_name'];
                            
                            

                                    $amount2 = $row_deposit['amount_invest'];

                              
                     
                                    echo"
                                    <tr>
                                 
                           
									<td>$firstname1</td>
									<td><img src='images/1000.gif'></td>
									<td>$$amount2</td>
                                </tr>
                                    ";
                                }
                                ?>
																																			<tr>
												
												
																																				 
																							</tbody>
										</table>
									</div>
								</div>
								
								
								
								
								<div class="col-xs-12 col-sm-6">
									<div class="lastStatItem">
										<h3>Last Withdrawals</h3>
										<table class="statsTable">
											<thead>
												<tr>
													<th>Username</th>
													<th>Payment system</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
																								
											<?php
                                $get_deposit = "select * from withdraw_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                    $firstname = $row_deposit['first_name'];
                            
                                  

                                    $amount3 = $row_deposit['amount'];
                                   
                                    echo"
                                    <tr>
                               
                               
								<td>$firstname</td>
								<td><img src='images/1000.gif'></td>
								<td>$$amount3</td>
                        
                                </tr>
                                    ";
                                }
                                ?>											
																
																																				 
																							</tbody>
										</table>
									</div>
								</div>
								
								
								
								
								
								
								
								
																				</div>
					</div>
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


<!-- Mirrored from <?php echo"$site_name3";?>/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 01:44:34 GMT -->
</html>