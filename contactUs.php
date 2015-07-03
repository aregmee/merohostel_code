<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Contact Merohostel.com | Search hostels in Kathmandu online</title>

		<link rel="icon" href="img/favicon.ico">
		<meta content='noodp,noydir' name='robots'/>
		<meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
		<meta content='Merohostel.com' name='author'/>
		<meta content="Help, support, and advice from Merohostel’s Customer Service team. To find out how we can help you, submit your question via the contact form." name="description" >
		<meta content='contact merohsotel.com, contact merohostel, contact hostel nepal, nepal contact hostel, hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel,  merohostel.com' name='keywords'/>

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

		<script type="text/javascript">
			$(document).ready(function() {

			});

			function mailIt() {

				if (/^[a-zA-Z]*$/.test($("#first_name").val().trim()) == false) {//validating first name
                    sweetAlert("Oops...", "First Name should only contain alphabets!", "error");
					$("#first_name").focus()
					return false
				}
				if (/^[a-zA-Z]*$/.test($("#last_name").val().trim()) == false) {//validating last name
                    sweetAlert("Oops...", "Last Name should only contain alphabets!", "error");
					$("#last_name").focus();
					return false
				}
				var email = $("#email").val().trim();
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if (!email.match(mailformat))//validating email
				{
                    sweetAlert("Oops...", "You have entered an invalid email address!", "error");
					$("#email").focus();
					return false;
				}
				var phoneNo = $("#telephone").val().trim();
				if (/^[0-9]*$/.test($("#telephone").val()) == false) {

                    sweetAlert("Oops...", "Telephone should only contain numbers!", "error");
					$("#telephone").focus();
					return false
				}
				var first_name = document.getElementById("first_name").value;
				var last_name = document.getElementById("last_name").value;
				var email = document.getElementById("email").value;
				var telephone = document.getElementById("telephone").value;
				var comments = document.getElementById("comment").value;

				var http = new XMLHttpRequest();
				var url = "send_form_email.php";
				var params = "first_name=" + first_name + "&last_name=" + last_name + "&email=" + email + "&telephone=" + telephone + "&comments=" + comments;
				http.open("POST", url, true);

				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.setRequestHeader("Content-length", params.length);
				http.setRequestHeader("Connection", "close");

				http.onreadystatechange = function() {//Call a function when the state changes.
					if (http.readyState == 4 && http.status == 200) {
						//alert(http.responseText);
					}
				};
				http.send(params);
				$('#submitted').removeClass('hide');

                document.getElementById("first_name").value = "";
                document.getElementById("last_name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("telephone").value = "";
                document.getElementById("comment").value = "";
				return false;
			}

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
        <script src="sweetalert-master/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

		<div id="header">
			<div id="fixedSearch">
				<div class="container">
					<div class="row">

						<div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
							<a href="/"> <img src="img/mero-hostel-logo.png"/> </a>
						</div>
						<!-- logo -->

						<?php include 'nav_search.php'?>

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

					<div class="row" style="padding: 20px;">

						<h2 style="margin-left: 0px;" id="deHosTtl">Contact</h2>
						<div>
							<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="350" src="https://maps.google.com/maps?hl=en&q=Deerwalk &ie=UTF8&t=m&z=16&iwloc=B&output=embed">
								<div>
									<small><a href="http://www.embedgooglemaps.com">embed google map</a></small>
								</div>
								<div>
									<small><a href="http://embedgooglemaps.com">embed google maps here</a></small>
								</div>
							</iframe>
						</div>
						<br/>
						<div class="col-md-8">
							<h3 style="margin-left: -15px;" id="review"><a name="review" id="review"></a>Contact Form</h3>
							<div id="frameContent" class="row">
                                <div class="ui positive message hide" id="submitted">
                                    <div class="header">
                                        Thanks. Your email has been sent!
                                    </div>
                                </div>
                                <div class="ui negative message hide" id="notSubmitted">
                                    <div class="header">
                                        Sorry! We are having trouble. Please try again.
                                    </div>
                                </div>

								<form class="ui form" style="width: 97%;" name="contactform" method="post"  onsubmit="return mailIt();">

									<div class="two fields">
										<div class="field">
											<label>First name</label>
											<div class="ui corner labeled input">
												<input placeholder="First Name" type="text" id="first_name" name="first_name" maxlength="50" size="30" required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Last name</label>
											<div class="ui corner labeled input">
												<input placeholder="Last Name" type="text" id ="last_name" name="last_name" maxlength="50" size="30" required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="field">
										<label>Email Address</label>
										<div class="ui corner labeled input">
											<input placeholder="Email" type="text" id = "email" name="email" maxlength="80" size="30" required="true">
											<div class="ui corner label">
												<i class="asterisk icon"></i>
											</div>
										</div>
									</div>
									<div class="field">
										<label>Telephone</label>
										<div class="ui corner labeled input">
											<input placeholder="Telephone" type="text" id = "telephone" name="telephone" maxlength="30" size="30" required="true">
											<div class="ui corner label">
												<i class="asterisk icon"></i>
											</div>
										</div>
									</div>
									<div class="field">
										<label>Comments</label>
										<div class="ui corner labeled input">
											<textarea name="comments" id = "comment" maxlength="1000" cols="25" rows="6" required="true"></textarea>
											<div class="ui corner label">
												<i class="asterisk icon"></i>
											</div>
										</div>
									</div>
									<div>
										<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit" />
									</div>

									<br/>

								</form>
							</div>
							<!-- internal row 1 -->

						</div><!-- main column -->

						<div class="col-md-4">
							<div  class="row">
								<div style="padding: 0px 10px;">
									<h3 id="review"><a name="review" id="review"></a>Contact Details</h3>

									<div id="contactDetails">
										<p>
											<i class="circular inverted orange  marker  icon"></i> Sifal, Kathmandu
										</p>
										<p>
											<i class="circular inverted orange  call  icon"></i> 9849789069, 9860096847
										</p>
										<p>
											<i class="circular inverted orange  mail icon"></i> merohostel@gmail.com
										</p>
										<div></div>
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