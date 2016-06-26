				
	<footer>
	
		<section class="contact-info-area text-center bg-black white p20">
			<div class="container">
			
				<div class="info-box col-sm-4">
					<i class="fa fa-envelope"></i>
					<p>info@7xproduction.com</p>
				</div>
			
				<div class="info-box col-sm-4">
					<i class="fa fa-home"></i>
					<p>info@7xproduction.com</p>
				</div>
			
				<div class="info-box col-sm-4">
					<i class="fa fa-phone"></i>
					<p>info@7xproduction.com</p>
				</div>
			
			</div>
		</section>
	
		<section class="ftr  bg-gray " id="footer">
			<div class="container">
				<div class="ftr__box col-sm-4 ftr__fom">
					
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" placeholder="Name" />
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control"  placeholder="Name" />
					</div>
				
					<div class="form-group col-sm-12">
						<input type="text" class="form-control"  placeholder="Email" />
					</div>
					<div class="form-group col-sm-12">
						<textarea class="form-control"  placeholder="Message"></textarea>
					</div>
				
					<div class="form-group col-sm-12">
						<div class="col-sm-3 p0"><button type="submit" class="btn form-control0">SEND</button></div>
						<div class="col-sm-9 p0">
						Contact Us, we will give you the answer you expect immediately.</div>
					</div>					
				
				</div>
				<div class="ftr__box col-sm-4">
					<div class="about">
						<h4>ABOUT US</h4>
						<p>Lorem ipsum dolor sit amet, consect- etur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali qua. Ut enim ad minim veniam, quis no strud exercitation ullamco. Ut enim ad minim.</p>
					</div>
					
					<div class="social-area clrlist ">
						<h4>FOLLOW US</h4>
						<div class="">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
							</ul>
					</div>
				
					</div>
				
				</div>
				<div class="ftr__box ftr__links col-sm-4 clrlist listview bg-cntr bg-rgt" style="background-image:url('images/grantlogo.png')">
					<h4>QUICK LINKS</h4>
					<ul>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Refund Policy</a></li>
						<li><a href="#">Disclaimer</a></li>
					</ul>
				</div>
		
			</div>
	
			<div class="cr col-sm-12">
				<div class="container">
					<div class="col-sm-6 pul-lft">Copyright ©7xproduction 2016. All rights reserved.</div>
					
					<div class="col-sm-6 pul-rgt clrlist text-right p0">
						<ul>
							<li><a href="#">Service Agreement</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms and Conditions</a></li>
						</ul>
					</div>
					
				</div>
			</div>
	
		</section>
	

	</footer>
	<a href="" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
	
	
	

</main>
    
	<!--Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
	<!--./Bootstrap-->
	
	<!--Major Scripts-->
	<script src="js/viewportchecker.js"></script>
    <script src="js/kodeized.js"></script>
	    <script src="js/preloader.js"></script>
	<!--./Major Scripts-->

	<!--Swiper Slider-->
	<script src="js/swiper.jquery.min.js"></script>
		<script>
			var sliders = [];
			$('.swiper-container').each(function(index, element){
				$(this).addClass('s'+index);

				$('.s'+index).swiper();    
		
					var slider = new Swiper('.s'+index, { /* Options here */
								pagination: '.swiper-pagination',
								slidesPerView: '3',
								centeredSlides: false,
								paginationClickable: true,
								nextButton: '.swiper-button-next'+index,
								prevButton: '.swiper-button-prev'+index,
								spaceBetween: 15,
								autoplay: 2500,
								autoplayDisableOnInteraction: false,
								breakpoints: {
								1024: {
									slidesPerView: 3,
									spaceBetween: 40
								},
								768: {
									slidesPerView: 3,
									spaceBetween: 30
								},
								640: {
									slidesPerView: 1,
									spaceBetween: 20
								},
								320: {
									slidesPerView: 1,
									spaceBetween: 10
								}
							}
					});
					sliders.push(slider);
				});
		</script>
	<!--./Swiper Slider -->
	

	
	
		</body>
</html>