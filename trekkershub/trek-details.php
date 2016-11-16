<?php
/**
 * Created by PhpStorm.
 * User: Vikram
 * Date: 18/09/2016
 * Time: 4:12 PM
 */
require_once("header.php");
require_once("./dbUtils/db-connector.php");

$selectedTrekCode = $_POST['trekCode'];//'RPKNDTRK';//$_POST["trekCode"];
echo $_POST["trekCode"];


class TreksDetails {
    public $id;
    public $trekCode;
    public $trekName;
    public $desc;
    public $shortDesc;
    public $trekDifficulty;
    public $trekStartPrice;
    public $trekDuration;
    public $trekBestSeason;
    public $trekPopularity;
    public $trekType;
    public $trekAltitude;
    public $trekDistance;
    public $trekSeasonEsay;
    public $trekSeasonModerate;
    public $trekSeasonDifficult;
    public $trekEssentials;
    public $inclusions;
    public $exclusions;
    public $day1;
    public $day2;
    public $day3;
    public $day4;
    public $day5;
    public $day6;
    public $day7;
    public $day8;
    public $day9;
    public $day10;
    public $day11;
    public $day12;
    public $day13;
    public $day14;
    public $day15;


}


$query = "select t.*, ti.*,td.* from t_treks t, t_trek_itinerary ti,t_trek_details td where t.trek_code ='".$selectedTrekCode
    ."' and t.trek_code=ti.trek_code and t.id=td.trek_id";

$conn = getDBConnection();

$result = $conn-> query($query);
$trek = new TreksDetails();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $trek->id = $row["id"];
        $trek->trekCode = $row["trek_code"];
        $trek->trekName = $row["trek_name"];
        $trek->trekType = $row["trek_type"];
        $trek->desc = $row["trek_desc"];
        $trek->shortDesc = $row["trek_short_desc"];
        $trek->trekDifficulty = $row["trek_difficulty"];
        $trek->trekStartPrice = $row["trek_start_price"];
        $trek->trekDuration = $row["trek_duration"];
        $trek->trekPopularity = $row["trek_popularity"];
        $trek->trekAltitude = $row["trek_altitude"];
        $trek->trekSeasonEsay = $row["trek_season_easy"];
        $trek->trekSeasonModerate = $row["trek_season_moderate"];
        $trek->trekSeasonDifficult = $row["trek_season_difficult"];
        $trek->inclusions = $row["inclusions"];
        $trek->exclusions = $row["exclusions"];
        $trek->day1 = $row["day_1"];
        $trek->day2 = $row["day_2"];
        $trek->day3 = $row["day_3"];
        $trek->day4 = $row["day_4"];
        $trek->day5 = $row["day_5"];
        $trek->day6 = $row["day_6"];
        $trek->day7 = $row["day_7"];
        $trek->day8 = $row["day_8"];
        $trek->day9 = $row["day_9"];
        $trek->day10 = $row["day_10"];
        $trek->day11 = $row["day_11"];
        $trek->day12 = $row["day_12"];
        $trek->day13 = $row["day_13"];
        $trek->day14 = $row["day_14"];
        $trek->day15 = $row["day_15"];
        $trek->trekEssentials = $row["trek_essentials"];

        #echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
    }
} else {
    echo "0 results";
}

$itinerary = array();

array_push($itinerary, $trek->day1);
array_push($itinerary, $trek->day2);
array_push($itinerary, $trek->day3);
array_push($itinerary, $trek->day4);
array_push($itinerary, $trek->day5);
array_push($itinerary, $trek->day6);
array_push($itinerary, $trek->day7);
array_push($itinerary, $trek->day8);
array_push($itinerary, $trek->day9);
array_push($itinerary, $trek->day10);
array_push($itinerary, $trek->day11);
array_push($itinerary, $trek->day12);
array_push($itinerary, $trek->day13);
array_push($itinerary, $trek->day14);
array_push($itinerary, $trek->day15);


// echo var_dump($itinerary);
$conn->close();

//return $treksArray;

?>

        <!-- main container -->
        <main id="main">
            <!-- main tour information -->
            <section class="container-fluid trip-info">
                <div class="same-height two-columns row">
                    <div class="height col-md-6">
                        <!-- top image slideshow -->
                        <div id="tour-slide">
                            <div class="slide">
                                <div class="bg-stretch">
                                    <img src="img/generic/img-17.jpg" alt="image descriprion" height="1104" width="966">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="bg-stretch">
                                    <img src="img/generic/img-07.jpg" alt="image descriprion" height="1104" width="966">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height col-md-6 text-col">
                        <div class="holder">
                            <h1 class="small-size"><?php echo $trek->trekName?></h1>
                            <div class="price">
                                from <strong>INR <?php echo $trek->trekStartPrice?></strong>
                            </div>
                            <div class="description">
                                <p><?php echo $trek->shortDesc?></p>
                            </div>
                            <ul class="reviews-info">
                                <li>
                                    <div class="info-left">
                                        <strong class="title">Reviews</strong>
                                        <span class="value">75 Reviews</span>
                                    </div>
                                    <div class="info-right">
                                        <div class="star-rating">
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span class="disable"><span class="icon-star"></span></span>
                                        </div>
                                        <span class="value">5/5</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-left">
                                        <strong class="title">Vacation Style</strong>
                                        <span class="value">Adult Group</span>
                                    </div>
                                    <div class="info-right">
                                        <ul class="ico-list">
                                            <li>
                                                <span class="icon icon-hiking"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-mount"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-camping"></span>
                                            </li>
                                        </ul>
                                        <span class="value">Camping Trek</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-left">
                                        <strong class="title">Activity Level</strong>
                                        <span class="value"><?php echo $trek->trekDifficulty?></span>
                                    </div>
                                    <div class="info-right">
                                        <ul class="ico-list">
                                            <li>
                                                <span class="icon icon-level3"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-level5"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-level7"></span>
                                            </li>
                                        </ul>
                                        <span class="value">9/10</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-left">
                                        <strong class="title">Group Size</strong>
                                        <span class="value">Medium Grougs</span>
                                    </div>
                                    <div class="info-right">
                                        <ul class="ico-list">
                                            <li>
                                                <span class="icon icon-group-small"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-group-medium"></span>
                                            </li>
                                            <li>
                                                <span class="icon icon-group-large"></span>
                                            </li>
                                        </ul>
                                        <span class="value">6/10</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn-holder">
                                <a href="#" class="btn btn-lg btn-info">BOOK NOW</a>
                            </div>
                            <ul class="social-networks social-share">
                                <li>
                                    <a href="#" class="facebook">
											<span class="ico">
												<span class="icon-facebook"></span>
											</span>
                                        <span class="text">Share</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
											<span class="ico">
												<span class="icon-twitter"></span>
											</span>
                                        <span class="text">Tweet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
											<span class="ico">
												<span class="icon-google-plus"></span>
											</span>
                                        <span class="text">+1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pin">
											<span class="ico">
												<span class="icon-pin"></span>
											</span>
                                        <span class="text">Pin it</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tab-container">
                <nav class="nav-wrap" id="sticky-tab">
                    <div class="container">
                        <!-- nav tabs -->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Overview</a></li>
                            <li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Itinerary</a></li>
                            <li role="presentation"><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Lodging</a></li>
                            <li role="presentation"><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Faq &amp; Review</a></li>
                            <li role="presentation"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Gallery</a></li>
                            <li role="presentation"><a href="#tab06" aria-controls="tab06" role="tab" data-toggle="tab">Dates &amp; Price</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- tab panes -->
                <div class="container tab-content trip-detail">
                    <!-- overview tab content -->
                    <div role="tabpanel" class="tab-pane active" id="tab01">
                        <div class="row">
                            <div class="col-md-6">
                                <strong class="header-box">All about <?php echo $trek->trekName?></strong>
                                <div class="detail">
                                    <p><?php echo $trek->desc ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <strong class="header-box">The tour package inclusions and exclusions at a glance</strong>
                                <div class="text-box">
                                    <div class="holder">
                                        <strong class="title">Whats included in this tour</strong>
                                        <span class="sub-title">Items that are covered in the cost of tour price.</span>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                        <ul class="content-list tick-list">
                                            <li>All breakfasts, lunches and dinners &amp; dining</li>
                                            <li>All accommodation including tea houses en route</li>
                                            <li>All transportation including taxis and coaches</li>
                                            <li>Flights from Heathrow if booked inc. of flight</li>
                                            <li>Tour and trekking guide for entire journey</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-box not-included">
                                    <div class="holder">
                                        <strong class="title">Whats not included in this tour</strong>
                                        <span class="sub-title">Items that are covered in the cost of tour price.</span>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                        <ul class="content-list cross-list">
                                            <li>Travel insurance and other emergencies</li>
                                            <li>Visa fees and entry clearing fees</li>
                                            <li>Single room accommodations</li>
                                            <li>Liquors, beeers and bootled beverages</li>
                                            <li>Photography ccessories like cameras etc.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- itinerary tab content -->
                    <div role="tabpanel" class="tab-pane" id="tab02">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="detail-accordion">
                                    <?php for($i=1; $i<=$trek->trekDuration;$i++){
                                        echo "<li>
                                        <a href=\"#\">
                                            <strong class=\"title\">Day ". $i . "</strong>
                                            <span>". substr($itinerary[$i-1],0, 10). "...</span>
                                        </a>
                                        <div class=\"slide\">
                                            <div class=\"slide-holder\">
                                                <p>". $itinerary[$i-1] . "</p>
                                            </div>
                                        </div>
                                    </li>";

                                    }?>

                                </ol>
                            </div>
                            <div class="col-md-6">
                                <article class="img-article article-light">
                                    <div class="img-wrap">
                                        <img src="img/trek-details/<?php echo $trek->trekCode?>/1.jpg" height="319" width="570" alt="image description">
                                    </div>
                                    <div class="text-block">

                                        <p><?php echo $trek->trekName ?> at a glance.</p>
                                    </div>
                                </article>
                                <article class="img-article article-light">
                                    <div class="img-wrap">
                                        <img src="img/trek-details/<?php echo $trek->trekCode?>/2.jpg" height="319" width="570" alt="image description">
                                    </div>
                                    <div class="text-block">
                                        <p><?php echo $trek->trekName ?> at a glance.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- accomodation tab content -->
                    <div role="tabpanel" class="tab-pane" id="tab03">
                        <div class="row">
                            <div class="col-md-6">
                                <strong class="header-box">Hotels, Tea Houses and Lodges</strong>
                                <div class="detail">
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                    <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                    <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
                                    <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                    <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                    <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                    <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                    <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                    <p>Suspendisse gin orci enim.</p>
                                </div>
                            </div>
                            <div class="col-md-6 accomodation-block">
                                <strong class="header-box">The tour package inclusions and exclusions at a glance</strong>
                                <div class="text-box">
                                    <div class="holder">
                                        <strong class="title">Shared Rooms included in teh Price</strong>
                                        <span class="sub-title">Items that are covered in the cost of tour price.</span>
                                        <div class="img-holder">
                                            <img src="img/generic/img-10.jpg" height="467" width="700" alt="image description">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box not-included">
                                    <div class="holder">
                                        <strong class="title">Individual Rooms not included in the Price</strong>
                                        <span class="sub-title">Items that are covered in the cost of tour price.</span>
                                        <div class="img-holder">
                                            <img src="img/generic/img-11.jpg" height="467" width="700" alt="image description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- faq and review tab content -->
                    <div role="tabpanel" class="tab-pane" id="tab04">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="question-select">
                                    <select id="tabSelect" class="question">
                                        <option value="#innerTab1">What kind of footwear is suitable?</option>
                                        <option value="#innerTab2">What kind of bag is suitable?</option>
                                        <option value="#innerTab3">What kind of clothes are suitable?</option>
                                    </select>
                                    <ul class="nav nav-tabs" id="questionTab">
                                        <li class="active"><a href="#innerTab1" data-toggle="tab">What kind of footwear wearing is suitable?</a></li>
                                        <li><a href="#innerTab2" data-toggle="tab">What kind of bag is suitable?</a></li>
                                        <li><a href="#innerTab3" data-toggle="tab">What kind of clothes wearing is suitable?</a></li>
                                    </ul>
                                </div>
                                <div class="tab-wrapper">
                                    <div role="tabpanel" class="tab-pane active" id="innerTab1">
                                        <div class="detail">
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                            <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
                                            <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                            <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                            <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                            <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                            <p>Suspendisse gin orci enim.</p>
                                            <ul class="img-list">
                                                <li>
                                                    <img src="img/generic/img-12.jpg" height="52" width="101" alt="image description">
                                                </li>
                                                <li>
                                                    <img src="img/generic/img-13.jpg" height="97" width="114" alt="image description">
                                                </li>
                                                <li>
                                                    <img src="img/generic/img-14.jpg" height="104" width="124" alt="image description">
                                                </li>
                                            </ul>
                                            <div class="reviews-slot v-middle">
                                                <div class="thumb">
                                                    <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
                                                </div>
                                                <div class="text">
                                                    <strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="innerTab2">
                                        <div class="detail">
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                            <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
                                            <div class="reviews-slot v-middle">
                                                <div class="thumb">
                                                    <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
                                                </div>
                                                <div class="text">
                                                    <strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="innerTab3">
                                        <div class="detail">
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                                            <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
                                            <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                            <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                            <p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                            <p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
                                            <p>Suspendisse gin orci enim.</p>
                                            <ul class="img-list">
                                                <li>
                                                    <img src="img/generic/img-12.jpg" height="52" width="101" alt="image description">
                                                </li>
                                                <li>
                                                    <img src="img/generic/img-13.jpg" height="97" width="114" alt="image description">
                                                </li>
                                                <li>
                                                    <img src="img/generic/img-14.jpg" height="104" width="124" alt="image description">
                                                </li>
                                            </ul>
                                            <div class="reviews-slot v-middle">
                                                <div class="thumb">
                                                    <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
                                                </div>
                                                <div class="text">
                                                    <strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="header-box">
                                    <a href="#" class="link-right">Writing A Review</a>
                                    <span class="rate-left">
											<strong class="title">Overall Rating</strong>
											<span class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</span>
											<span class="value">4.7/5</span>
										</span>
                                </div>
                                <div class="comments reviews-body">
                                    <div class="comment-holder">
                                        <div class="comment-slot">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description"></a>
                                            </div>
                                            <div class="text">
                                                <header class="comment-head">
                                                    <div class="left">
                                                        <strong class="name">
                                                            <a href="#">Cleona Torez - Spain</a>
                                                        </strong>
                                                        <div class="meta">Reviewed on 14/1/2016</div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="star-rating">
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span class="disable"><span class="icon-star"></span></span>
                                                        </div>
                                                        <span class="value">4.7/5</span>
                                                    </div>
                                                </header>
                                                <div class="des">
                                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                                    <div class="link-holder">
                                                        <a href="#">Read Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-slot">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-06.jpg" height="50" width="50" alt="image description"></a>
                                            </div>
                                            <div class="text">
                                                <header class="comment-head">
                                                    <div class="left">
                                                        <strong class="name">
                                                            <a href="#">Cleona Torez - Spain</a>
                                                        </strong>
                                                        <div class="meta">Reviewed on 14/1/2016</div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="star-rating">
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span class="disable"><span class="icon-star"></span></span>
                                                        </div>
                                                        <span class="value">4.7/5</span>
                                                    </div>
                                                </header>
                                                <div class="des">
                                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                                    <div class="link-holder">
                                                        <a href="#">Read Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-slot">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-07.jpg" height="50" width="50" alt="image description"></a>
                                            </div>
                                            <div class="text">
                                                <header class="comment-head">
                                                    <div class="left">
                                                        <strong class="name">
                                                            <a href="#">Cleona Torez - Spain</a>
                                                        </strong>
                                                        <div class="meta">Reviewed on 14/1/2016</div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="star-rating">
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span><span class="icon-star"></span></span>
                                                            <span class="disable"><span class="icon-star"></span></span>
                                                        </div>
                                                        <span class="value">4.7/5</span>
                                                    </div>
                                                </header>
                                                <div class="des">
                                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                                    <div class="link-holder">
                                                        <a href="#">Read Full Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-more text-center">
                                        <a href="#">Show More Reviews - 75 Reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery tab content -->
                    <div role="tabpanel" class="tab-pane" id="tab05">
                        <ul class="row gallery-list has-center">
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-11-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-11.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-12-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-12.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-13-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-13.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-14-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-14.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-15-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-15.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-16-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-16.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-17-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-17.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                            <li class="col-sm-6">
                                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-18-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-18.jpg" height="240" width="370" alt="image description">
										</span>
                                    <span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- dates and prices tab content -->
                    <div role="tabpanel" class="tab-pane" id="tab06">
                        <div class="table-container">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <strong class="date-text">Departure Dates</strong>
                                            <span class="sub-text">Confirmed Dates</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Trip Status</strong>
                                            <span class="sub-text">Trip Status</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Including Flights</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Excluding Flights</span>
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,170</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,679</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$1,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,470</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$4,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,879</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,679</div></div></td>
                                        <td><div class="cell"><div class="middle">$1,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$4,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$5,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,270</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="load-more text-center text-uppercase">
                                <a href="#">MORE DATES &amp; PRICES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- recent block -->
            <aside class="recent-block recent-gray recent-wide-thumbnail">
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
            </aside>
        </main>
    </div>
    <!-- main footer -->
    <footer id="footer">
        <div class="container">
            <!-- newsletter form -->
            <form action="php/subscribe.html" id="signup" method="post" class="newsletter-form">
                <fieldset>
                    <div class="input-holder">
                        <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email" id="subscriber_email">
                        <input type="submit" value="GO">
                    </div>
                    <span class="info" id="subscribe_message">To receive news, updates and tour packages via email.</span>
                </fieldset>
            </form>
            <!-- footer links -->
            <div class="row footer-holder">
                <nav class="col-sm-4 col-lg-2 footer-nav active">
                    <h3>About Entrada</h3>
                    <ul class="slide">
                        <li><a href="#">The Company</a></li>
                        <li><a href="#">Our Values</a></li>
                        <li><a href="#">Responsiblity</a></li>
                        <li><a href="#">Our Mission</a></li>
                        <li><a href="#">Opportunity</a></li>
                        <li><a href="#">Safety Concerns</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>Destinations</h3>
                    <ul class="slide">
                        <li><a href="#">Nepal</a></li>
                        <li><a href="#">Thailand</a></li>
                        <li><a href="#">Vietnam</a></li>
                        <li><a href="#">Fiji Island</a></li>
                        <li><a href="#">United States</a></li>
                        <li><a href="#">Australia</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>themes</h3>
                    <ul class="slide">
                        <li><a href="#">Hiking and Camping</a></li>
                        <li><a href="#">Trekking Tours</a></li>
                        <li><a href="#">Jungle Safaris</a></li>
                        <li><a href="#">Bungee Jumping</a></li>
                        <li><a href="#">Wildlife &amp; Polar</a></li>
                        <li><a href="#">Peak Climbing</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>reservation</h3>
                    <ul class="slide">
                        <li><a href="#">Booking Conditions</a></li>
                        <li><a href="#">My Bookings</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Includes &amp; Excludes</a></li>
                        <li><a href="#">Your Responsibilities</a></li>
                        <li><a href="#">Order a Brochure</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav">
                    <h3>ask Entrada</h3>
                    <ul class="slide">
                        <li><a href="#">Why Entrada?</a></li>
                        <li><a href="#">Ask an Expert</a></li>
                        <li><a href="#">Safety Updates</a></li>
                        <li><a href="#">We Help When...</a></li>
                        <li><a href="#">Personal Matters</a></li>
                    </ul>
                </nav>
                <nav class="col-sm-4 col-lg-2 footer-nav last">
                    <h3>contact Entrada</h3>
                    <ul class="slide address-block">
                        <li class="wrap-text"><span class="icon-tel"></span> <a href="tel:02072077878">(020) 72077878</a></li>
                        <li class="wrap-text"><span class="icon-fax"></span> <a href="tel:02088828282">(020) 88828282</a></li>
                        <li class="wrap-text"><span class="icon-email"></span> <a href="mailto:info@entrada.com">info@entrada.com</a></li>
                        <li><span class="icon-home"></span> <address>707 London Road Isleworth, Middx TW7 7QD</address></li>
                    </ul>
                </nav>
            </div>
            <!-- social wrap -->
            <ul class="social-wrap">
                <li class="facebook"><a href="#">
                        <span class="icon-facebook"></span>
                        <strong class="txt">Like Us</strong>
                    </a></li>
                <li class="twitter"><a href="#">
                        <span class="icon-twitter"></span>
                        <strong class="txt">Follow On</strong>
                    </a></li>
                <li class="google-plus"><a href="#">
                        <span class="icon-google-plus"></span>
                        <strong class="txt">+1 On Google</strong>
                    </a></li>
                <li class="vimeo"><a href="#">
                        <span class="icon-vimeo"></span>
                        <strong class="txt">Share At</strong>
                    </a></li>
                <li class="pin"><a href="#">
                        <span class="icon-pin"></span>
                        <strong class="txt">Pin It</strong>
                    </a></li>
                <li class="dribble"><a href="#">
                        <span class="icon-dribble"></span>
                        <strong class="txt">Dribbble</strong>
                    </a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- copyright -->
                        <strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An Adventure Theme - by  <a href="#">Waituk</a></strong>
                    </div>
                    <div class="col-lg-6">
                        <ul class="payment-option">
                            <li>
                                <img src="img/footer/visa.png" alt="visa">
                            </li>
                            <li>
                                <img src="img/footer/mastercard.png" height="20" width="33" alt="master card">
                            </li>
                            <li>
                                <img src="img/footer/paypal.png" height="20" width="72" alt="paypal">
                            </li>
                            <li>
                                <img src="img/footer/maestro.png" height="20" width="33" alt="maestro">
                            </li>
                            <li>
                                <img src="img/footer/bank-transfer.png" height="20" width="55" alt="bank transfer">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- scroll to top -->
<div class="scroll-holder text-center">
    <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
</div>
<!-- jquery library -->
<script src="vendors/jquery/jquery-2.1.4.min.js"></script>
<!-- external scripts -->
<script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
<script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
<script src="vendors/match-height/jquery.matchHeight.js"></script>
<script src="vendors/wow/wow.min.js"></script>
<script src="vendors/stellar/jquery.stellar.min.js"></script>
<script src="vendors/validate/jquery.validate.js"></script>
<script src="vendors/waypoint/waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="vendors/fancybox/jquery.fancybox.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/jcf/js/jcf.js"></script>
<script src="vendors/jcf/js/jcf.select.js"></script>
<script src="vendors/retina/retina.min.js"></script>
<script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
<script src="vendors/sticky-kit/sticky-kit.js"></script>
<!-- mailchimp newsletter subscriber -->
<script src="js/mailchimp.js"></script>
<!-- custom script -->
<script src="js/sticky-kit-init.js"></script>
<script src="js/jquery.main.js"></script>
</body>
</html>