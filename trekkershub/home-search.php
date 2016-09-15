<?php
	require_once("header.php")
	?>
				<!-- search form -->
				
				<form class="search-form" action="search-process.php">
					<fieldset>
						<a href="#" class="search-opener hidden-md hidden-lg">
							<span class="icon-search"></span>
						</a>
						<div class="search-wrap">
							<a href="#" class="search-opener close">
								<span class="icon-cross"></span>
							</a>
							<div class="trip-form trip-form-v2 trip-search-main">
								<div class="trip-form-wrap">
									<div class="holder">
										<label>Departing</label>
										<div class='select-holder'>
											<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
												<input class="form-control" type="text" readonly />
												<span class="input-group-addon"><i class="icon-drop"></i></span>
											</div>
										</div>
									</div>
									<div class="holder">
										<label>Returning</label>
										<div class='select-holder'>
											<div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
												<input class="form-control" type="text" readonly />
												<span class="input-group-addon"><i class="icon-drop"></i></span>
											</div>
										</div>
									</div>
									<div class="holder">
										<label for="select-region">Select Region</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 region" name="region" id="select-region">
												<option value="select">Africa</option>
												<option value="select">Arctic</option>
												<option value="select">Asia</option>
												<option value="select">Europe</option>
												<option value="select">Oceanaia</option>
												<option value="select">Polar</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<label for="select-activity">Select Activity</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 acitvity" name="activity" id="select-activity">
												<option value="Holiday Type">Holiday Type</option>
												<option value="Holiday Type">Beach Holidays</option>
												<option value="Holiday Type">Weekend Trips</option>
												<option value="Holiday Type">Summer and Sun</option>
												<option value="Holiday Type">Water Sports</option>
												<option value="Holiday Type">Scuba Diving</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<label for="price-range">Price Range</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 price" name="activity" id="price-range">
												<option value="Price Range">Price Range</option>
												<option value="Price Range">$1 - $499</option>
												<option value="Price Range">$500 - $999</option>
												<option value="Price Range">$1000 - $1499</option>
												<option value="Price Range">$1500 - $2999</option>
												<option value="Price Range">$3000+</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<button class="btn btn-trip btn-trip-v2" type="submit">Find Tours</button>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</header>
			<!-- main banner -->
			<div class="banner banner-home">
				<!-- revolution slider starts -->
				<div id="rev_slider_70_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="web-product-light-hero66" style="margin:0px auto;background-color:#474d4b;padding:0px;margin-top:0px;margin-bottom:0px;">
					<div id="rev_slider_70_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>
							<li data-index="rs-81" data-transition="slideoverup" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="The Menu" data-description="">
								<!-- main image for revolution slider -->
								<img alt="image description" src="img/trekkers.jpg" height="1280" width="1920"  data-lazyload="img/trekkers.jpg" data-bgposition="right center" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>

								<div class="tp-caption tp-resizeme" id="slide-897-layer-7" 
									data-x="['left','left','center','center']" 
									data-hoffset="['20','40','0','0']" 
									data-y="['middle','middle','top','top']" 
									data-voffset="['-160','-158','100','50']" 
									data-width="none" 
									data-height="none" 
									data-whitespace="nowrap" 
									data-transform_idle="o:1;" 
									data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:300;s:300;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 100px;text-align:center;">
									<span class="icon-hiking-camping"></span>
								</div>

								<div class="tp-caption banner-heading-sub tp-resizeme  toblur rs-parallaxlevel-10" id="slide-81-layer-1" 
									data-x="['left','left','center','center']" 
									data-hoffset="['20','40','0','0']" 
									data-y="['top','top','top','top']" 
									data-voffset="['230',180','220','140']" 
									data-fontsize="['60','60','0','0']"
									data-lineheight="['60','60','40','40']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-start="700" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-visibility=”[‘on’,’on’,’off’,’off’]” 
									style="z-index: 5; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px;">FIND
								</div>

								<div class="tp-caption RotatingWords-TitleWhite  tp-resizeme  tounblur rs-parallaxlevel-10" id="slide-333-layer-11"
									data-x="['left','left','center','center']" 
									data-hoffset="['170','190','0','0']" 
									data-y="['top','top','top','top']" 
									data-voffset="['230',180','180','150']"
									data-fontsize="['60','60','40','40']"
									data-lineheight="['60','60','40','40']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power4.easeOut;" 
									data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;" 
									data-start="1500" 
									data-splitin="chars" 
									data-splitout="chars" 
									data-responsive_offset="on" 
									data-elementdelay="0.1" 
									data-endelementdelay="0.03" 
									data-end="4000" 
									style="z-index: 7; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px;">WORLD TOURS 
								</div>

								<div class="tp-caption RotatingWords-TitleWhite   tp-resizeme  tounblur rs-parallaxlevel-10" id="slide-333-layer-13" 
									data-x="['left','left','center','center']" 
									data-hoffset="['170','190','0','0']" 
									data-y="['top','top','top','top']" 
									data-voffset="['230',180','180','150']"  
									data-fontsize="['60','60','40','40']"
									data-lineheight="['60','60','40','40']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power3.easeOut;" 
									data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;" 
									data-start="4510" 
									data-splitin="chars" 
									data-splitout="chars" 
									data-responsive_offset="on" 
									data-elementdelay="0.1" 
									data-endelementdelay="0.03" 
									data-end="7010" 
									style="z-index: 8; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px;">JUNGLE SAFARIS 
								</div>

								<div class="tp-caption RotatingWords-TitleWhite   tp-resizeme  tounblur rs-parallaxlevel-10" id="slide-333-layer-14" 
									data-x="['left','left','center','center']" 
									data-hoffset="['170','190','0','0']" 
									data-y="['top','top','top','top']" 
									data-voffset="['230',180','180','150']" 
									data-fontsize="['60','60','40','40']"
									data-lineheight="['60','60','40','40']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power3.easeOut;" 
									data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;" 
									data-start="7490" 
									data-splitin="chars" 
									data-splitout="chars" 
									data-responsive_offset="on" 
									data-elementdelay="0.1" 
									data-endelementdelay="0.03" 
									data-end="9990" 
									style="z-index: 9; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px;">SUMMER FUN 
								</div>

								<div class="tp-caption RotatingWords-TitleWhite   tp-resizeme  tounblur rs-parallaxlevel-10" id="slide-333-layer-15" 
									data-x="['left','left','center','center']" 
									data-hoffset="['170','190','0','0']" 
									data-y="['top','top','top','top']" 
									data-voffset="['230',180','180','150']"
									data-fontsize="['60','60','40','40']"
									data-lineheight="['60','60','40','40']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power3.easeOut;" 
									data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;" 
									data-start="10490" 
									data-splitin="chars" 
									data-splitout="chars" 
									data-responsive_offset="on" 
									data-elementdelay="0.1" 
									data-endelementdelay="0.03" 
									style="z-index: 10; white-space: nowrap; font-size: 60px; font-weight: 900; line-height: 60px;">ADVENTURES 
								</div>
							</li>						
						</ul>
					</div>
				</div>
				<div class="banner-text">
					<div class="center-text">
						<form class="trip-form" action="search-process.php" method="post">
							<fieldset>
								<div class="holder">
									<label for="adventure">Select Your Adventure</label>
									<div class="select-holder">
										<input type="text" name="treks" id ="treks" class="form-control">
										<!--<div id = "trekHolder"></div>-->
									</div>
								</div>
								<div class="holder">
									<label for="destination">Select Your Destination</label>
									<div class="select-holder">
										<select class="trip" id="destination" name ="destination">
											<option>Europe - Spain</option>
											<option>Europe - Greece</option>
											<option>Africa - Kenya</option>
											<option>Africa - Angola</option>
											<option>Asia - Vietnam</option>
											<option>Mid East - Dubai</option>
										</select>
									</div>
								</div>
								<div class="holder">
									<label for="date">Select Your Dates</label>
									<div class='select-holder'>
											<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
												<input class="form-control" type="text" readonly />
												<span class="input-group-addon"><i class="icon-drop"></i></span>
											</div>
										</div>
								</div>
								<div class="holder">
									<input class="btn btn-trip" type="submit" value="go wild">
								</div>
							</fieldset>
						</form> 
					</div>
				</div>
			</div>
			<!-- main container -->
			<main id="main">
				<section class="content-block bg-white">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">THE ADVENTURE</h2>
							<span class="main-subtitle">Mastering the art of perfect adventure for 10+ years in the wild.</span>
							<div class="seperator"></div>
						</header>
						<div class="adventure-holder gallery-home-holder">
							<div class="row">
								<div class="col-md-6 img-block">
									<!-- gallery list -->
									<ul class="gallery-list gallery-with-icon">
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/himalayan.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-bird"></span>
												<span class="info">aerial</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/himalayanScene.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-peak"></span>
												<span class="info">land</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/himalayanValley.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-water"></span>
												<span class="info">water</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/Himalayas2.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-asia"></span>
												<span class="info">asia</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/himalayas.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-arctic"></span>
												<span class="info">arctic</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/img-06.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-africa"></span>
												<span class="info">africa</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/img-07.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-plant"></span>
												<span class="info">nature</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/img-08.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-wildlife"></span>
												<span class="info">wildness</span>
											</a>
										</li>
										<li>
											<a href="#" class="thumbnail">
												<img src="img/gallery/img-09.jpg" height="165" width="170" alt="image description">
												<span class="hover icon-diamond"></span>
												<span class="info">all</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 text-block">
									<div class="centered">
										<h2 class="intro-heading">Living a Life of Adventure</h2>
										<p class="intro">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
										<a href="#" class="btn btn-info-sub btn-md btn-shadow radius">Dig More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- special block -->
				<aside class="special-block">
					<div class="container">
						<p class="special-text">Get special discount on select treks, this week. <strong>Call <a href="tel:157757525">+1 5775 7525</a></strong></p>
					</div>
				</aside>
				<!-- article list holder -->
				<div class="content-block content-spacing">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">POPULAR TOURS</h2>
							<span class="main-subtitle">We have a unique way of meeting your adventurous expectations!</span>
							<div class="seperator"></div>
						</header>
						<div class="content-holder">
							<div class="row db-3-col">
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/hampta.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">Discover Hampta Pass</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>Rs7000</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Jungle safari for families</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/vof.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">Exploring Valley Of Flower</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>Rs2749</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Nature wildlife photography</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/lehlad.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">Himalayan Beauty</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>$2749</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Polar arctic expeditions</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/img-04.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">Peak Climbing</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>$2749</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Marine diving excursions</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/img-05.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">Treasure Hunting</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>$2749</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Go wild at national parks</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s3">
									<div class="img-wrap">
										<a href="#">
											<img src="img/listing/img-06.jpg" height="215" width="370" alt="image description">
										</a>
										<div class="img-caption text-uppercase">A night with sky</div>
										<div class="hover-article">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<div class="icons">
												<a href="#"><span class="icon-heart"></span></a>
												<a href="#"><span class="icon-reply"></span></a>
											</div>
											<div class="info-footer">
												<span class="price">from <span>$2749</span></span>
												<a href="#" class="link-more">Explore</a>
											</div>
										</div>
									</div>
									<h3><a href="#">Educational trips in wild</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
								</article>
							</div>
						</div>
					</div>
				</div>
				<!-- couter block -->
				<aside class="count-block">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-6 col-md-3 block-1">
								<div class="holder">
									<span class="icon icon-step"></span>
									<span class="info"><span class="counter">8702</span></span>
									<span class="txt">WILDLIFE SPECIES</span>
								</div>
							</div>
							<div class="col-xs-6 col-md-3 block-2">
								<div class="holder">
									<span class="icon icon-fish-jumping"></span>
									<span class="info"><span class="counter">378</span></span>
									<span class="txt">ARCTIC EXPERIENCES</span>
								</div>
							</div>
							<div class="col-xs-6 col-md-3 block-3">
								<div class="holder">
									<span class="icon icon-tree"></span>
									<span class="info"><span class="counter">377</span></span>
									<span class="txt">NATIONAL PARKS</span>
								</div>
							</div>
							<div class="col-xs-6 col-md-3 block-4">
								<div class="holder">
									<span class="icon icon-duration"></span>
									<span class="info"><span class="counter">8973</span></span>
									<span class="txt">DAYS IN THE WILD</span>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<!-- featured adventure content -->
				<div class="featured-content adventure-holder">
					<div class="container-fluid">
						<div class="row same-height">
							<div class="col-md-6 image height wow slideInLeft">
								<div class="bg-stretch">
									<img src="img/img-01.jpg" height="627" width="960" alt="image description">
								</div>
							</div>
							<div class="col-md-6 text-block height wow slideInRight">
								<div class="centered">
									<h2 class="intro-heading">Botswana &amp; Angola - The Tribe</h2>
									<p class="intro">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, Duis sed odio sit amet nibh vulputate cursus a it amet mauris.</p>
									<a href="#" class="btn btn-primary btn-lg">explore</a>
								</div>
							</div>
						</div>
						<div class="row same-height">
							<div class="col-md-6 image height wow slideInRight">
								<div class="bg-stretch">
									<img src="img/img-02.jpg" height="627" width="960" alt="image description">
								</div>
							</div>
							<div class="col-md-6 text-block height wow slideInLeft">
								<div class="centered">
									<h2 class="intro-heading">Maritime Adventure - The Arctic</h2>
									<p class="intro">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, Duis sed odio sit amet nibh vulputate cursus a it amet mauris.</p>
									<a href="#" class="btn btn-primary btn-lg">explore</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- browse block -->
				<div class="browse-block">
					<div class="browse-destination column">
						<a href="#"><span>BROWSE BY DESTINATION</span></a>
					</div>
					<div class="browse-adventures column">
						<a href="#"><span>BROWSE BY ADVENTURES</span></a>
					</div>
				</div>
				<!-- article list with boxed style -->
				<section class="content-block article-boxed">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">TOP ADVENTURES</h2>
							<span class="main-subtitle">Our collection of the most popular adventures in 2016.</span>
							<div class="seperator"></div>
						</header>
						<div class="content-holder content-boxed">
							<div class="row db-3-col">
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-07.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Evening with Panda in China</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-08.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Sleeping with Sea Lion in Arctic</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-09.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Following Zebras to Water hole</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-10.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Discovering Wild Trails in Africa</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-11.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Angola Safari for Family &amp; Children</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
								<article class="col-sm-6 col-md-4 article has-hover-s1">
									<div class="thumbnail">
										<div class="img-wrap">
											<img src="img/listing/img-12.jpg" height="228" width="350" alt="image description">
										</div>
										<h3 class="small-space"><a href="tour-detail.html">Royal Safari in Bangaladesh</a></h3>
										<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
										<aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>12 Countries
											</span>
											<span class="activity">
												<span class="icon-acitivities"> </span>79 Activities
											</span>
										</aside>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<a href="tour-detail.html" class="btn btn-default">explore</a>
										<footer>
											<ul class="social-networks">
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
											<span class="price">from <span>$2749</span></span>
										</footer>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>
				<!-- content block with guide info -->
				<section class="content-block guide-sub guide-add bg-white">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">MEET THE GUIDES</h2>
							<span class="main-subtitle">Our highly trained and efficient guides at your service</span>
							<div class="seperator"></div>
						</header>
						<div class="content-holder">
							<div class="row">
								<div class="col-sm-6 col-md-4 img-article">
									<div class="holder">
										<div class="img-wrap">
											<img src="img/listing/img-13.jpg" height="436" width="370" alt="image description">
											<ul class="social-networks">
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
										</div>
										<div class="caption">
											<h3 class="small-space">Jason Statham</h3>
											<span class="designation">TREKKING GUIDE</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4 img-article">
									<div class="holder">
										<div class="img-wrap">
											<img src="img/listing/img-14.jpg" height="436" width="370" alt="image description">
											<ul class="social-networks">
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
										</div>
										<div class="caption">
											<h3 class="small-space">Cleona Tropez</h3>
											<span class="designation">TREKKING GUIDE</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4 img-article">
									<div class="holder">
										<div class="img-wrap">
											<img src="img/listing/img-15.jpg" height="436" width="370" alt="image description">
											<ul class="social-networks">
												<li><a href="#"><span class="icon-facebook"></span></a></li>
												<li><a href="#"><span class="icon-twitter"></span></a></li>
												<li><a href="#"><span class="icon-google-plus"></span></a></li>
												<li><a href="#"><span class="icon-linkedin"></span></a></li>
											</ul>
										</div>
										<div class="caption">
											<h3 class="small-space">Martin Blake</h3>
											<span class="designation">TREKKING GUIDE</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- testimonial block -->
				<div class="testimonial-holder parallax" data-stellar-background-ratio="0.25" id="testimonial-home-page">
					<div class="container">
						<div id="testimonial-home-slide">
							<div class="slide">
								<blockquote class="testimonial-quote">
									<div class="img">
										<img src="img/thumbs/img-01.jpg" height="112" width="112" alt="image description">
									</div>
									<div class="text">
										<cite>STEVE JORGAN - NORWAY</cite>
										<q>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.”</q>
									</div>
								</blockquote>
							</div>
							<div class="slide">
								<blockquote class="testimonial-quote">
									<div class="img">
										<img src="img/thumbs/img-02.jpg" height="112" width="112" alt="image description">
									</div>
									<div class="text">
										<cite>DARREN SPRATT - AUSTRALIA</cite>
										<q>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.”</q>
									</div>
								</blockquote>
							</div>
							<div class="slide">
								<blockquote class="testimonial-quote">
									<div class="img">
										<img src="img/thumbs/img-03.jpg" height="112" width="112" alt="image description">
									</div>
									<div class="text">
										<cite>RIYA YAHIDA - SPAIN</cite>
										<q>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.”</q>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<!-- partner list -->
				<article class="partner-block">
					<div class="container">
						<header class="content-heading">
							<h2 class="main-heading">Partner</h2>
							<span class="main-subtitle">People who always support and endorse our good work</span>
							<div class="seperator"></div>
						</header>
						<div class="partner-list" id="partner-slide">
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-travelagancy.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-around-world.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-tourist.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-tourist-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-adventure.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-adventure-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-around-world.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-travelagancy.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-adventure.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-adventure-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-around-world.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description">
								</a>
							</div>
							<div class="partner">
								<a href="#">
									<img width="130" src="img/logos/logo-travelagancy.svg" alt="image description">
									<img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description">
								</a>
							</div>
						</div>
					</div>
				</article>
			</main>
		</div>
		
		<?php
			require_once("footer.php")
		?>
		