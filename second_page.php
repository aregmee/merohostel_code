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
        <?php

        $gender = $_GET["gender"];
        $location = $_GET["location"];
        include 'DBConnection.php';
        if($gender == "" || $gender == null)
            $sql = "SELECT * FROM hostel WHERE location LIKE '%$location%' ORDER BY location";
        else
            $sql="SELECT * FROM hostel WHERE location LIKE '%$location%' and gender = '$gender' ORDER BY location";
        $result =$conn->query($sql);
        ?>
			<div id="header">
				<div id="fixedSearch">
                    <form method = "get" action="second_page.php">
					<div class="container">
						<div class="row">

							<div style="float: left;padding: 14px 14px;margin-top: -15px;background-color: #C14800;margin-bottom: -15px;">
								<a href="first_page.php"> <img src="img/mero-hostel-logo.png"/> </a>
							</div>
							<!-- logo -->

                            <?php include 'nav_search.php'?>

						</div><!--row -->
					</div><!--container -->
                    </form>
				</div><!-- fixedSearch -->
			</div><!-- header-->

		<div id="wrapper">

			<div id="content">

				<div id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<div style="background: #fff;" class="container">

					<div class="row" style="padding-top: 20px; padding-bottom: 20px;">
						
					<a href="http://www.google.com" class="tsc_awb_large tsc_flat">Visit Google</a>

						<div class="col-md-12">
							<h2>{Male} Hostel nearby {Naxal}</h2>
                            <?php while($row = $result->fetch_assoc()) { ?>
							<div class="hostelThumb">
								<div class="ui card">
									<div class="image">
										<div class="ui dimmer">
											<div class="content">
												<div class="center">
													<div class="ui inverted button">
														Add Friend
													</div>
												</div>
											</div>
										</div>
										<img src="img/hostel.jpg">
									</div>

									<div class="content">
										<div class="header">
											<?php echo $row["name"]; ?>
										</div>

										<div class="description">
											Hans Brinker Budget Hotel is near Leidseplein, the Vondelpark, the Rijksmuseum and the Van Gogh Museum.
										</div>
									</div>
									<div class="extra content">
										<a class="right floated created"><i class="circular inverted orange  user icon"></i><?php echo $row["gender"]; ?></a>
										<a class="friends"><i class="circular inverted orange  point icon"></i><?php echo $row["location"]; ?></a>
									</div>

									<a  style="text-decoration: none;"  href="third_page.php?id=<?php echo $row["id"]; ?>">
									<div style="display: block;	border-radius: 0; margin: 0;" class="ui orange button">
										View Details
									</div> </a>

								</div>
							</div><!-- hostelThumb -->
                            <?php } ?>
							<!--<div id="pager">
								<ul class="pagination">
									<li>
										<a href="#">«</a>
									</li>
									<li>
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li>
										<a href="#">»</a>
									</li>
								</ul>
							</div>--><!-- pager -->

						</div><!-- main column -->

					
					</div><!--row -->
				</div><!--container -->

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