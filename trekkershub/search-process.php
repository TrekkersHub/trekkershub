<?php 
	require_once("header.php");
	require_once("treks.php");
	$region = $_GET['region'];
	$treksArray  = getTreksForRegion($region);

	$numberOfTreks = count($treksArray);
	$regionOverview = $treksArray[0]->trekRegionDesc;
?>


			<!-- main banner -->
			<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
				<div class="banner-text">
					<div class="center-text">
						<div class="container">
							<h1>Adventures in <?php echo $region?></h1>
							<strong class="subtitle"><?php echo  $regionOverview?></strong>
							<!-- breadcrumb -->
							<nav class="breadcrumbs">
								<ul>
									<li><a href="http://localhost:9000/trekkershub/home-search.php">HOME</a></li>

									<li><span><?php echo $region?></span></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- main container -->
			<main id="main">
				<!-- content block -->
				<div class="content-block content-sub">
					<div class="container">
						<div class="filter-option">
							<strong class="result-info"><?php echo $numberOfTreks; ?> TREKS FOUND FOR THIS REGION</strong>
							<div class="layout-holder">
								<div class="layout-action">
									<a href="#" class="link link-list active"><span class="icon-list"></span></a>
									<a href="#" class="link link-grid"><span class="icon-grid"></span></a>
								</div>
								<div class="select-holder">
									<a href="#" class="btn btn-primary btn-filter"><i class="fa fa-sliders"></i> Filter</a>
									<div class="filter-slide">
										<div class="select-col">
											<select class="filter-select">
												<option value="Holiday Type">Holiday Type</option>
												<option value="Holiday Type">Beach Holidays</option>
												<option value="Holiday Type">Weekend Trips</option>
												<option value="Holiday Type">Summer and Sun</option>
												<option value="Holiday Type">Water Sports</option>
												<option value="Holiday Type">Scuba Diving</option>
											</select>
										</div>
										<div class="select-col">
											<select class="filter-select">
												<option value="Difficulty">Difficulty</option>
												<option value="Difficulty">Fairly Easy</option>
												<option value="Difficulty">Moderate</option>
												<option value="Difficulty">Challenging</option>
												<option value="Difficulty">Difficult</option>
												<option value="Difficulty">Very Difficult</option>
											</select>
										</div>
										<div class="select-col">
											<select class="filter-select">
												<option value="Price Range">Price Range</option>
												<option value="Price Range">$1 - $499</option>
												<option value="Price Range">$500 - $999</option>
												<option value="Price Range">$1000 - $1499</option>
												<option value="Price Range">$1500 - $2999</option>
												<option value="Price Range">$3000+</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- list view -->
						<div class="content-holder list-view">
							<?php 

								foreach ($treksArray as $key => $value) {
									# code...
								
									echo "<form action=\"trek-details.php\" method=\"POST\"><article class=\"article\">
									<input type=\"hidden\" name=\"trekCode\" value=\"$value->trekCode\">
								<div class=\"thumbnail\">
									<div class=\"img-wrap\">
										<img src=\"img/treks/".$value->trekCode.".jpg\" height=\"240\" width=\"350\" alt=\"image description\">
									</div>
									<div class=\"description\">
										<div class=\"col-left\">
											<header class=\"heading\">
												<h3><a href=\"#\"> ". $value->trekName ."</a></h3>
												<div class=\"info-day\"> ". $value->trekDuration." Days</div>
											</header>
											<p>".substr($value->desc,0, 500) ."... </p>
											<div class=\"reviews-holder\">
												<div class=\"star-rating\">".
													getRatings($value->trekPopularity)
												."</div>
												<div class=\"info-rate\">Based on Number of People Opt for this trek</div>
											</div>
											<footer class=\"info-footer\">
												<ul class=\"ico-list\">
													<li class=\"pop-opener\">
														<span class=\"icon-beach\"></span>
														<div class=\"popup\">
															Beach
														</div>
													</li>
													<li class=\"pop-opener\">
														<span class=\"icon-boat\"></span>
														<div class=\"popup\">
															Boat
														</div>
													</li>
													<li class=\"pop-opener\">
														<span class=\"icon-food-wine\"></span>
														<div class=\"popup\">
															Food Wine
														</div>
													</li>
													<li class=\"pop-opener\">
														<span class=\"icon-water\"></span>
														<div class=\"popup\">
															Water
														</div>
													</li>
												</ul>
												<ul class=\"ico-action\">
													<li>
														<a href=\"#\"><span class=\"icon-share\"></span></a>
													</li>
													<li>
														<a href=\"#\"><span class=\"icon-favs\"></span></a>
													</li>
												</ul>
											</footer>
										</div>
										<aside class=\"info-aside\">
											<span class=\"price\">from <span>Rs ".$value->trekStartPrice. " /Pax</span></span>
											<div class=\"activity-level\">
												<div class=\"ico\">
													". getDifficultyIcon($value->trekType)."
												</div>
												<span class=\"text\">".$value->trekDifficulty . "</span>
											</div>
											<input type=\"submit\" class=\"btn btn-default\" value=\"Explore\"/>
										</aside>
									</div>
								</div>
							</article></form>";
								}
								function getRatings($trekPopularity){
									$count = 5;
									$expression = "";
									for($x=0; $x<$trekPopularity; $x++){
										$count--;
										$expression .= "<span><span class=\"icon-star\"></span></span>";
									}
									while ($count > 0){
										$expression .= "<span class=\"disable\"><span class=\"icon-star\"></span></span>";
										$count--;
									}
									return $expression;
								}
								function getDifficultyIcon($difficultyLevel){
									if($difficultyLevel == 1){
										return "<span class=\"icon-level1\"></span>";
									}elseif ($difficultyLevel == 2){
										return "<span class=\"icon-level2\"></span>";
									}elseif ($difficultyLevel == 3){
										return "<span class=\"icon-level3\"></span>";
									}else{
										return "<span class=\"icon-level4\"></span>";
									}
								}
							?>
							
						</div>
						<!-- pagination wrap
						<nav class="pagination-wrap">
							<div class="btn-prev">
								<a href="#" aria-label="Previous">
									<span class="icon-angle-right"></span>
								</a>
							</div>
							<ul class="pagination">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="active"><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>...</li>
								<li><a href="#">7</a></li>
							</ul>
							<div class="btn-next">
								<a href="#" aria-label="Previous">
									<span class="icon-angle-right"></span>
								</a>
							</div>
						</nav>
					</div>
				</div> -->
				<!-- recent block
				<aside class="recent-block recent-list recent-wide-thumbnail">
					<div class="container">
						<h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
						<div class="row">
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-31.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-32.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-33.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-34.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
						</div>
					</div>
				</aside>-->
			</main>
		</div>
		<!-- main footer -->
		<?php
			require_once("footer.php");
		?>