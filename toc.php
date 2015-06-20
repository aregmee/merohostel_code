<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Term and Codidtions</title>

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
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->

		<!-- Google Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div id="header">
			<div id="fixedSearch">
				<div class="container">
					<div class="row">

						<div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
							<a href="index.php"> <img src="img/mero-hostel-logo.png"/> </a>
						</div>
						<!-- logo -->

						<div class="ui selection dropdown">
							<input type="hidden" id="genderSelect" name="gender">
							<i class="dropdown icon"></i>
							<div class="default text">
								Gender
							</div>
							<div class="menu" onchange="hideDiv()">
								<div class="item" data-value="boys" data-text="Male" value="boys">
									<i class="male icon"></i>
									Male
								</div>
								<div class="item" data-value="girls" data-text="Female" value="girls">
									<i class="female icon"></i>
									Female
								</div>
							</div>
						</div>
						<!-- gender -->

						<div class="ui corner labeled input" style="margin-left: 3px;">
							<div class="ui local search">
								<div class="ui left icon input">
									<i class="world icon"></i>
									<input  style="border-radius: 4px;" type="text" id="searchid" placeholder="Enter Location" class="prompt">
								</div>
							</div>
						</div>
						<!-- location -->

						<div class="ui submit button" style="
						background-color: white;
						color: rgb(239, 103, 47);
						margin-left: 8px;
						" >
							<i class="search icon"></i> Search
						</div>

					</div><!--row -->
				</div><!--container -->

			</div><!-- fixedSearch -->
		</div><!-- header-->

		<div id="wrapper">

			<div id="content">

				<?php
	include "feedback.php";
	?>

				<div style="background: #fff;" class="container">

					<div id="frameContent" class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2 id="deHosTtl">Terms and Conditions</h2>
							<div class="row" style="padding: 10px 0px;">
								<p style="font-size: 15px;word-spacing: 3px;">
									The objective of Merohostel.com is to provide a web based platform for easy browsing of hostels inside the Kathmandu valley. Through Merohostel, advertisers can advertise their business and the users can benefit from the information provided.
									</br>
									</br>
									Website refers to www.merohostel.com.
									</br>
									</br>
									Advertiser: Advertiser is a person, who is either an owner or representative of a hostel in Nepal, which is listed on Merohostel.com.
									</br>
									</br>
									User: User is a general public who views Merohostel.com to gain the information of hostels that are listed on the website. This person is not registered with Merohostel.com.
									</br>
									</br>
									Content administrator is a member of Merohostel, who justifies the information of hostel, uploaded to the website, and makes it public only after getting the consent from the hostel owner.
								</p>
								<h3> Terms of Contract: </h3>

								<ol id="tocBullets">
									<li>
										The name-list of registered hostels inside the Kathmandu valley is provided to us by the Hostel Association of Nepal. The list includes only Hostel name, Owner’s name, Address, and Contact number. Other information that is listed on the website are collected by either contacting the hostel on phone or visiting them door-to-door.
									</li>
									<li>
										All registrations and advertisements have to be approved by Merohostel before being published on the website.
									</li>
									<li>
										The advertiser is allowed to add a hostel on the website. Once the hostel registration is received by the content administrator, s/he will contact the hostel owner and verify the business before posting it on the website.
									</li>
									<li>
										All the hostels listed on Merohostel.com may or may not be registered to the Hostel Association of Nepal. This decision is at hostel owner’s discretion.
									</li>
									<li>
										All registrations and advertisements have to be approved by Merohostel before being published on the website.
									</li>
									<li>
										‘Verified hostel’ tag on any hostel detail page means that the Merohostel team have contacted the hostel and received the consent to upload the information on the website.
									</li>
									<li>
										All the hostels on the website are currently registered for free and the services might change at our own discretion.
									</li>
									<li>
										All the images of hostels included in the website arse taken by Merohostel team itself.
									</li>
									<li>
										The credit of the cover image of the website belongs to Helminadia Ranford.
									</li>
									<li>
										The information provided on the website can be used by the user in any way s/he wants and be shared to anyone s/he wishes to.
									</li>
									<li>
										Within the registration, the advertiser agrees to accept communications through Call/Email/SMS from Merohostel.
									</li>

								</ol>
							</div>
							<!-- internal row 1 -->

						</div><!-- main column -->

						<div class="col-md-4">
							<div style="margin-top: 10px;" class="row">
								<div style="padding: 10px;">
									<h3 id="review"><a name="review" id="review"></a>Share it!</h3>
									<!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox"></div>
								</div>
							</div><!-- internal row -->
						</div><!-- sidebar -->
						
					</div><!-- content -->
				</div><!-- container -->
			</div>
			<!-- content -->

			<?php
			include "footer.php";
			?>

		</div>
		</div><!-- wrapper -->

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fbb182a18547812" async="async"></script>
		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>