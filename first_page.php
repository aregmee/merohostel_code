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

        <script type="text/javascript">
            function hideDiv() {
                $( "#result" ).hide();
                $('.prompt').removeAttr('value');
            }
            function showDiv(){
                $( "#result" ).show();
            }
            $(function(){
                $(".prompt").keyup(function()
                {
                    var searchid = $(this).val();
                    var gender=$( "#genderSelect" ).val();
                    var dataString = 'search='+ searchid+'&gender='+gender;
                    if(searchid!='') {
                        $.ajax({
                            type: "POST",
                            url: "search.php",
                            data: dataString,
                            cache: false,
                            success: function (html) {
                                $("#result").html(html).show();
                            }
                        });
                    }
                    return false;
                });

                jQuery("#result").live("click",function(e){
                    var $clicked = $(e.target);
                    var $name = $clicked.find('.name').html();
                    var decoded = $("<div/>").html($name).text();
                    $('#searchid').val(decoded);
                });
                jQuery(document).live("click", function(e) {
                    var $clicked = $(e.target);
                    if (! $clicked.hasClass("prompt")){
                        jQuery("#result").fadeOut();
                    }
                });
                $('#searchid').click(function(){
                    jQuery("#result").fadeIn();
                });
            });
            $(function(){
                $("#genderSelect").change(function()
                {
                    var searchid = $(this).val();
                    var gender=$( "#genderSelect" ).val();
                    var dataString = 'search='+ searchid+'&gender='+gender;
                    if(searchid!='') {
                        $.ajax({
                            type: "POST",
                            url: "search.php",
                            data: dataString,
                            cache: false,
                            success: function (html) {
                                $("#result").html(html).show();
                            }
                        });
                    }
                    return false;
                });

                jQuery("#result").live("click",function(e){
                    var $clicked = $(e.target);
                    var $name = $clicked.find('.name').html();
                    var decoded = $("<div/>").html($name).text();
                    $('#searchid').val(decoded);
                });
                jQuery(document).live("click", function(e) {
                    var $clicked = $(e.target);
                    if (! $clicked.hasClass("prompt")){
                        jQuery("#result").fadeOut();
                    }
                });
                $('#searchid').click(function(){
                    jQuery("#result").fadeIn();
                });
            });


        </script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div id="lnWrapper">
			<div id="lnHeader">
				<div id="mainCover" class="img-responsive">

					<div class="container">
						<div class="row" style="height: 90vh;">
							<div id="mainHeader">
								<div id="mainLogo">
									<a href="first_page.php"> <img src="img/mero-hostel-logo.png" /> </a>
								</div>
								<!-- mainLogo -->
								<div id="mainMenu">
									<ul>
										<li>
											<a href="#">All Hostel</a>
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
                                <form method = "get" action="second_page.php">

								<div class="ui selection dropdown" style="
								font-size: 16px;
								position: relative;
								top: 1px;
								right: 5px;
								">
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

								<div class="ui corner labeled input">
									<div class="ui local search">
										<div class="ui left icon input">
											<i class="world icon"></i>
											<input  style="border-radius: 4px; font-size: 16px;" type="text" id="searchid" placeholder="Enter Location" class="prompt"  name="location">
                                            <div id="result">
                                            </div>
										</div>
									</div>
								</div><!-- location -->

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

				<div id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<div id="mainSection">
					<div class="container">
						<div class="row">
							<h2 class="subTitle">Featured Hostels</h2>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="#">Barcelona</a></h2>
									<span><i class="fa fa-map-marker"></i> 97 Hostels</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="#">Barcelona</a></h2>
									<span><i class="fa fa-map-marker"></i> 97 Hostels</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="#">Barcelona</a></h2>
									<span><i class="fa fa-map-marker"></i> 97 Hostels</span>
									<a href="#"> <img src="img/barcelona.jpg" width="100%" alt="Barcelona Hostels" class="effect2"> </a>
									<p>
										Find pretty places to stay in Barcelona close to Las Ramblas, La Sagrada Familia and more.
									</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="subSection">
									<h2><a href="#">Barcelona</a></h2>
									<span><i class="fa fa-map-marker"></i> 97 Hostels</span>
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
							<h2 class="subTitle">Why Hostelworld?</h2>
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

			<div id="footer">

				<div id="mainFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<ul>
									<li>
										Company
									</li>
									<li>
										Agreement
									</li>
									<li>
										Privacy
									</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul>
									<li>
										<i class="fa fa-facebook-square"></i>
										Facebook
									</li>
									<li>
										<i class="fa fa-twitter-square"></i>
										Twitter
									</li>
									<li>
										<i class="fa fa-google-plus-square"></i>
										Google Plus
									</li>
								</ul>
							</div>
							<div class="col-sm-5">
								<ul>
									<li>
										Hosting Partner subisu
									</li>
									<li>
										Copyright © 2015, Sodhpuch Pvt. Ltd.
									</li>
								</ul>
							</div>

						</div><!--row -->
					</div><!--container -->
				</div><!-- mainFooter -->

			</div><!-- footer -->
		</div>

		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>

	</body>
</html>