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
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->

		<!-- Google Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
		
	
		
		
		
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

				<div id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<div style="background: #fff;" class="container">

					<div class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2 id="deHosTtl">Contact</h2>
							<div class="row" style="
							padding: 10px 0px;

							">
							
								<div id="contact">
									<a id="foxyform_embed_link_676734" href="http://www.foxyform.com/"></a>
								</div><!-- contact -->
								
								
							</div><!--row1-->

						</div><!-- main column -->

						<div class="col-md-4">
							<div style="margin-top: 10px;" class="row">
								<h3 id="review"><a name="review" id="review"></a>Share it!</h3>
								<!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox"></div>
							</div><!-- internal row -->
							<!--                        <h2>Advertisement</h2>-->
						</div><!-- sidebar -->

					</div><!-- content -->
				</div><!-- container -->
			</div>
			<!-- content -->

			<?php
	include "footer.php";
?>

		</div><!-- footer -->



<script>
	var x = document.getElementsByTagName("h2");
	
	x.onclick = displayDate;
	
	function displayDate() {
    alert("Hello");
}
	
</script>

		<script type="text/javascript">
			( function(d, t) {
					var g = d.createElement(t),
					    s = d.getElementsByTagName(t)[0];
					g.src = "http://www.foxyform.com/js.php?id=676734&sec_hash=1883a72fa79&width=350px";
					s.parentNode.insertBefore(g, s);
				}(document, "script"));
		</script>

		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>