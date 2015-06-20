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

				<div style="cursor: pointer;" data-toggle="modal" data-target="#myModal" id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<div style="background: #fff;" class="container">

					<div id="frameContent" class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2 id="deHosTtl">Test</h2>
							<div class="row" style="padding: 10px 0px;">

								<!-- Modal -->
								<div id="feedbackModal"  style="display: block;z-index: 99999;  position: absolute;">
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
									aria-labelledby="myModalLabel" aria-hidden="true" >
										<div class="modal-dialog modal-lg" >
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close btn-lg"
													data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title" id="myModalLabel"> Send us your feedback </h4>
												</div>
												<div class="modal-body">

													<form class="ui form">
														<div class="field">
															<label>How do you rate this site overall?</label>
															<div class="ui huge star rating"  data-rating="3" data-max-rating="5"></div>
														</div>
														<div class="inline fields">
															<label for="fruit">Would you recommend this site to a friend?</label>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="recommend" checked="">
																	<label>Sure</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="recommend" >
																	<label>Likely</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="recommend">
																	<label>May be</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="recommend">
																	<label>Not</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="recommend">
																	<label>Forget it</label>
																</div>
															</div>
														</div>
													<div class="inline fields">
															<label for="fruit">What type of user are you?</label>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="uare" checked="">
																	<label>Students</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="uare">
																	<label>Affiliate</label>
																</div>
															</div>
															<div class="field">
																<div class="ui radio checkbox">
																	<input type="radio" name="uare">
																	<label>Hostel</label>
																</div>
															</div>
														</div>
														<div class="field">
															<label>Any other comments</label>
															<div class="ui corner labeled input">
																<textarea name="comments" id = "comments" maxlength="1000" cols="25" rows="6"required="true"></textarea>
																<div class="ui corner label">
																	<i class="asterisk icon"></i>
																</div>
															</div>
														</div>

													</form><!-- feedback form -->

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
														Close
													</button>
													<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->
								</div>

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