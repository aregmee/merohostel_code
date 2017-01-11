<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Find hostels in Kathmandu online | Merohostel.com</title>

		<link rel="icon" href="img/favicon.ico">
		<meta content='noodp,noydir' name='robots'/>
		<meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
		<meta content='Merohostel.com' name='author'/>
		<meta content="Merohostel.com helps you browse hostels inside Kathmandu valley online. Read reviews from fellow hostellers, view the detailed information & choose a hostel today." name="description" >
		<meta content='hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel,  merohostel.com' name='keywords'/>

		<!-- Main Styslesheet -->
		<link rel="stylesheet" href="css/main.css" />
		<!-- Bootstrap CSS -->
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<!-- Font-Awesome Icons -->
		<link href="font_awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Semantic CSS -->
		<link href="semantic/dist/semantic.min.css" type="text/css" rel="stylesheet"/>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.address.js"></script>
		<!-- Semantic JS -->
		<script src="semantic/dist/semantic.min.js" type="text/javascript" ></script>

		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>

		<!-- Used with Tab History !-->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.min.js"></script>
		<script src="semantic/dist/semantic.js"></script>
		<!-- Google Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->
		
		<style>
			@media screen and (max-width : 480px){
	#mainTitle h1 {
    	font-size: 20px;
	}
	#mDrpDown{
		font-size: 14px;
		right: 0px;
		min-width: 0px;
	}
}
		</style>

        <?php include 'analyticstracking.php'; ?>

        <script type="text/javascript" charset="utf-8" src="js/typeahead.jquery.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/handlebars.js"></script>
        <script type="text/javascript">
			var locations = [];
			var search = function() {
				var gender = $('#genderSelect').val();
				var dataString = 'gender=' + gender;
				$.ajax({
					type : "POST",
					url : "search.php",
					data : dataString,
					cache : false,
					success : function(html) {
						html = html.split("\"");
						locations.length = 0;
						for (var i = 1; i < html.length; i += 2) {

							locations.push(html[i]);
						}
					}
				});
			};

			$(document).ready(function() {

				var substringMatcher = function(strs) {
					return function findMatches(q, cb) {
						var matches,
						    substringRegex;

						// an array that will be populated with substring matches
						matches = [];

						// regex used to determine if a string contains the substring `q`
						substrRegex = new RegExp(q, 'i');

						// iterate through the pool of strings and for any string that
						// contains the substring `q`, add it to the `matches` array
						$.each(strs, function(i, str) {
							if (substrRegex.test(str)) {
								matches.push(str);
							}
						});

						cb(matches);
					};
				};
				$('#locations .typeahead').typeahead({
					hint : true,
					highlight : true,
					minLength : 1
				}, {
					name : 'locations',
					source : substringMatcher(locations)
				});
			});
        </script>
	</head>

	<body>
		<div id="lnWrapper">
			<div id="lnHeader">
				<div id="mainCover" class="img-responsive">

					<div class="container">
						<div class="row" style="height: 90vh;">
							<div id="mainHeader">
								<div id="mainLogo">
									<a href="/"> <img alt="merohostel-logo" title"Merohostel" src="img/mero-hostel-logo.png" /> </a>
								</div>
								<!-- mainLogo -->
								<div id="mainMenu">
									<ul>
										<li>
											<a href="hostels-in-kathmandu.php">All Hostels</a>
										</li>
										<li>
											<a style="font-size: 14px" id="addHostelBtn" href="addHostel.php">Add Your Hostel</a>
										</li>
										<!-- <li>
											<div class="column" style="
											color: rgb(247, 247, 247);
											font-weight: bold;
											">
												<i class="circular orange inverted mobile icon"></i>9813953967
											</div>
										</li> -->
									</ul>
								</div>
								<!-- mainMenu -->
							</div>
							<!-- mainHeader -->

							<div id="mainTitle">
								<h1 u>Room to Greatest
								<br>
								Hostels in Kathmandu</h1>
								
								<div id="getRecomd">
								<a  href="get-our-recommendation.php">	<input id="rcmdBtn" type="button" value="Get Our Recommendation"/></a>
								</div>
							</div>
							
							
							
							<div id="mainSearch">
                                <form method = "get" action="hostels-in-kathmandu.php" autocomplete="off" onsubmit="return validateForm()">

                                    <div id="mDrpDown" class="ui selection dropdown" ">
                                        <input type="hidden" name="gender" id = "genderSelect" onchange="search();">
                                        <i class="dropdown icon"></i>
                                        <div class="default text">
                                            Gender
                                        </div>
                                        <div class="menu">
                                            <div class="item" data-value="boys" data-text="Boys" value="boys">
                                                <i class="male icon"></i>
                                                Boys
                                            </div>
                                            <div class="item" data-value="girls" data-text="Girls" value="girls">
                                                <i class="female icon"></i>
                                                Girls
                                            </div>
                                        </div>
                                    </div>

                                    <div id="locations" style="display: inline-block;  line-height: 45px">
                                        <input class="ui input typeahead " style="width: 300px;font-size: 16px; padding: 11px; padding-left: 20px;border: 1px solid #ddd; border-radius: 5px;" type="text" placeholder="Location" onfocus="search();" name="location">
                                    </div>
                                    <!-- location -->
                                    <button class="ui orange submit button" style="
									font-size: 16px;
									margin-left: 10px;
									">
                                        <i class="search icon"></i>Search
                                    </button>
                                </form>
							</div>

						</div><!--row -->
					</div><!--container -->
				</div><!-- mainCover -->
			</div>

			<div id="content">
				<div id="mainSection">
					<div class="container">

						<?php
						include "feedback.php";
 ?>

						<div class="row">
							<h2 class="subTitle"><span style="color: rgb(255, 114, 65);">Featured</span> Areas</h2>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostels-in-kathmandu.php?location=Putalisadak">Putalisadak</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE address LIKE '%Putalisadak%' ORDER BY address";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
										?></span>
									<a href="hostels-in-kathmandu.php?location=Putalisadak"> <img alt="Putalisadak" title="Putalisadak" src="https://lh3.googleusercontent.com/-uky5eAstr6I/VYZJpH8qIlI/AAAAAAAAAEk/YfDTGhNW9hQ/s288/putalisadak-orbit%252520institute.png" width="100%"  class="effect2"> </a>
									<p>
										If you are a student taking MBBS entrance courses in VIBRANT or NAME, this might be the best
										place for you to search for hostels.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostels-in-kathmandu.php?location=Buddhanagar">Buddhanagar</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE address LIKE '%Buddhanagar%' ORDER BY address";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
										?></span>
									<a href="hostels-in-kathmandu.php?location=Buddhanagar"> <img alt="Buddhanagar" title="Buddhanagar" src="https://lh3.googleusercontent.com/-hDSk0odeaXY/VYZJleJX1vI/AAAAAAAAAEQ/M11rsX9QCUs/s940/alpha%252520beta-buddhanagar.jpg" width="100%"  class="effect2"> </a>
									<p>
										If you are a student taking Engineering entrance courses in PEA or SEA, this might be the best
										place for you to search for hostels.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostels-in-kathmandu.php?location=Baneshwor">Baneshwor</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE address LIKE '%Baneshwor%' ORDER BY address";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
										?></span>
									<a href="hostels-in-kathmandu.php?location=Baneshwor"> <img alt="Baneshwor" title="Baneshwor" src="https://lh3.googleusercontent.com/-qwzCu8dVhFw/VYZJlh1pBhI/AAAAAAAAAEU/pTT_dYRs6vA/s288/baneshwor-hotelnepal.jpg" width="100%"  class="effect2"> </a>
									<p>
										Crowded streets, engaged people and heavy population reside in New Baneshwor. One of the most
										happening places in Kathmandu.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostels-in-kathmandu.php?location=Shantinagar">Shantinagar</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE address LIKE '%Shantinagar%' ORDER BY address";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
										?></span>
									<a href="hostels-in-kathmandu.php?location=Shantinagar"> <img alt="Shantinagar" title="Shantinagar" src="https://lh3.googleusercontent.com/-jnm5Z7pV4gM/VYZJoODNKOI/AAAAAAAAAEc/yfUQW2Nqh68/s288/shantinagar-futsal.jpg" width="100%"  class="effect2"> </a>
									<p>
										Shantinagar has become a hub for hostels in Kathmandu.
									</p>
								</div>
							</div>
						</div><!--row -->
					</div><!--container -->
				</div><!-- mainSection -->
				<div id="featuredHostel">
					<div class="container">
						<div class="row">
							<h2 class="subTitle">Why <span style="color: rgb(255, 114, 65);"> Merohostel </span>?</h2>
							<div class="col-sm-3">
								<div class="whyUsSection">
									<h3><i class="red large home icon"></i> We Know Hostels!</h3>
									<p>
										Our team knows about the hostels in kathmandu more than anyone. We are deeply connected in hostel business.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="whyUsSection">
									<h3><i class="red exchange  sign icon"></i> We Connect You!</h3>
									<p>
										Through Merohostel.com, we connect you to 237 hostels in Kathmandu. Choose the best hostel for you today!
									</p>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="whyUsSection">
									<h3><i class="red checkmark sign icon"></i> 100% Accurate Information!</h3>
									<p>
										All of the information in this website is authorized by Hostel Association of Nepal.
									</p>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="whyUsSection">
									<h3><i class="red users icon"></i> Group Bookings!</h3>
									<p>
										If you are in a group of 5 or more, we will find the best hostel for you, with certain deduction in the admission fees.
									</p>
								</div>
							</div>
						</div><!--row -->
					</div><!--container -->
				</div><!-- featuredHostel -->

			</div>
			<!-- content -->

			<?php
			include "footer.php";
			?>
			<!-- footer -->
		</div>

		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>