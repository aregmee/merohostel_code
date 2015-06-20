<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Main - Mero Hostel</title>

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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(function() {
				$(".search").keyup(function() {
					var searchid = $(this).val();
					var gender = $("#genderSelect").val();
					var dataString = 'search=' + searchid + '&gender=' + gender;
					if (searchid != '') {
						$.ajax({
							type : "POST",
							url : "search.php",
							data : dataString,
							cache : false,
							success : function(html) {
								$("#result").html(html).show();
							}
						});
					}
					return false;
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
									<a href="index.php"> <img src="img/mero-hostel-logo.png" /> </a>
								</div>
								<!-- mainLogo -->
								<div id="mainMenu">
									<ul>
										<li>
											<a href="hostelList.php">All Hostels</a>
										</li>
										<li>
											<div class="column" style="
											color: rgb(247, 247, 247);
											font-weight: bold;
											">
												<i class="circular orange inverted mobile icon"></i>9813953967
											</div>
										</li>
									</ul>
								</div>
								<!-- mainMenu -->
							</div>
							<!-- mainHeader -->

							<div id="mainTitle">
								<h1>Room to Greatest
								<br>
								Hostels in Kathmandu</h1>
							</div>

							<div id="mainSearch">
								<form method = "get" action="hostelList.php" autocomplete="off">

									<div class="ui selection dropdown" style="
									font-size: 16px;
									position: relative;
									right: 5px;
									">
										<input type="hidden" name="gender" id = "genderSelect">
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
									<div class="ui search dropdown selection" style="font-size: 16px;">
										<select id="result" name="location">
											<option value="">Location</option>
										</select><i class="dropdown icon"></i>
										<input class="search" tabindex="0">
										<div class="default text">
											Location
										</div><div class="menu" tabindex="-1"></div>
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

				
				<?php
	include "feedback.php";
	?>

				<div id="mainSection">
					<div class="container">
						<div class="row">
							<h2 class="subTitle"><span style="color: rgb(255, 114, 65);">Featured</span> Hostels</h2>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostelList.php?location=Putalisadak">Putalisadak</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE location LIKE '%Putalisadak%' ORDER BY location";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
								?>
									</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostelList.php?location=Buddhanagar">Buddhanagar</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE location LIKE '%Buddhanagar%' ORDER BY location";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
								?>
									</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostelList.php?location=Baneshwor">Baneshwor</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE location LIKE '%Baneshwor%' ORDER BY location";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
								?>
									</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="hostelList.php?location=Shantinagar">Shantinagar</a></h2>
									<span><i class="fa fa-map-marker"></i> <?php
									include 'DBConnection.php';
									$sql = "SELECT COUNT(id) as no_of_hostels, id FROM hostel WHERE location LIKE '%Shantinagar%' ORDER BY location";
									$result = $conn -> query($sql);

									while ($row = $result -> fetch_assoc()) {

										echo $row["no_of_hostels"] . " hostels";
									}
								?>
									</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
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
								<div class="subSection">
									<h3><i class="fa fa-heart"></i> We Know Hostels!</h3>
									<p>
										Our people live and breathe hostelling! We know the thousands of hostels worldwide like no one else can.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h3><i class="fa fa-heart"></i> We Know Hostels!</h3>
									<p>
										Our people live and breathe hostelling! We know the thousands of hostels worldwide like no one else can.
									</p>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="subSection">
									<h3><i class="fa fa-heart"></i> We Know Hostels!</h3>
									<p>
										Our people live and breathe hostelling! We know the thousands of hostels worldwide like no one else can.
									</p>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="subSection">
									<h3><i class="fa fa-heart"></i> We Know Hostels!</h3>
									<p>
										Our people live and breathe hostelling! We know the thousands of hostels worldwide like no one else can.
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
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>

	</body>
</html>