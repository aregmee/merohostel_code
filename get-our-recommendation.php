<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Get Our Recommendations | Merohostel.com</title>

		<link rel="icon" href="img/favicon.ico">
		<meta content='noodp,noydir' name='robots'/>
		<meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
		<meta content='Merohostel.com' name='author'/>
		<meta content="Are you planning stay in a hostel that provides a familiar and studying environment? Hostels that stand out from the crowd? Our new ‘Get Our Recommendation’ program helps you do just that." name="description" >
		<meta content='get hostels kathmandu, hostel recommendation kathmandu, recommend hostel, hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel,  merohostel.com' name='keywords'/>

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
		<script>
			function recommendation(){
                var name=document.getElementById("name").value;
                var contactNo=document.getElementById("cno").value;
                var emailAddress=document.getElementById("emailAddress").value;
                var gender=document.getElementById("gender").value;
                var course=document.getElementById("course").value;
                var location=document.getElementById("location").value;
                var duration=document.getElementById("duration").value;
                var roomType=document.getElementById('rtype').value;
                var http = new XMLHttpRequest();
                var url = "send_recommendation_email.php";
                var params ="name=" + name + "&emailAddress=" + emailAddress + "&contactNo=" + contactNo +
                    "&gender=" + gender+"&course="+course+"&location="+location+"&duration="+duration+"&rtype="+roomType;
                http.open("POST", url, true);

                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http.setRequestHeader("Content-length", params.length);
                http.setRequestHeader("Connection", "close");

                http.onreadystatechange = function() {//Call a function when the state changes.
                    if (http.readyState == 4 && http.status == 200) {
                        //alert(http.responseText);
                    }
                };
                console.log(params)
                http.send(params);
                $('#sendSuccess').removeClass('hide');
				document.getElementById("name").value=" ";
				document.getElementById("cno").value=" ";
				document.getElementById("emailAddress").value=" ";
				document.getElementById("gender").value=" ";
				document.getElementById("course").value=" ";
				document.getElementById("location").value= " ";
				document.getElementById("duration").value= " ";
				document.getElementById('rtype').value= " ";
                return false;

			}
		</script>
	</head>

	<body>

		<?php
		include 'header.php';
		?>

		<div id="wrapper">

			<div id="content">

				<?php
				include "feedback.php";
				?>

				<div style="background: #fff;" class="container">

					<div id="frameContent" class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2 id="deHosTtl" style="margin-bottom: 0;">Get Our Recommendation</h2>

							<div class="row" >
								<br/>
								<p style="font-size: 15px;word-spacing: 3px;">
									Are you planning to enter Kathmandu for your higher studies? Looking to stay in a hostel that provides a familiar and studying environment? Hostels that stand out from the crowd? Our new ‘Get Our Recommendation’ program helps you do just that.
									</br>
									</br>
									If you get confused with the variety of lists on our website and are confused to choose a hostel – you can leave your burden to us. Fill up this simple enquiry form – sit back, relax and wait for our call.
								</p>

								<h3>How does it work?</h3>

								<p style="font-size: 15px;word-spacing: 3px;">
									We have a list of hostels which is perfect for students, in a desirable location and well managed. Picking a hostel of our recommendation ensures you high quality hostel stay over the coming months or a year. We are committed to improve your hostel experience.
									</br>
									</br>
									Here is the form that you need to fill up.
								</p>

								<form id="addHostel" class="ui form" style="width: 97%;" onsubmit="return recommendation();">
                                    <div class="ui positive message hide" id="sendSuccess">
                                        <div class="header">
                                            Thanks. Your email has been sent!
                                        </div>
                                    </div>
                                    <div class="ui negative message hide" id="sendFailed">
                                        <div class="header">
                                            Sorry! We are having trouble. Please try again.
                                        </div>
                                    </div>
									<div class="field">
										<label>Name</label>
										<div class="ui corner labeled input">
											<input placeholder="Name" type="text"  name="name" id="name"  required="true">
											<div class="ui corner label">
												<i class="asterisk icon"></i>
											</div>
										</div>
									</div>

									<div  class="two fields">
										<div class="field">
											<label>Contact Number</label>
											<div class="ui corner labeled input">
												<input placeholder="Contact Number" type="text" id="cno"  name="cno"  required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Email Address</label>
											<div class="ui corner labeled input">
												<input placeholder="Email Address" type="text" id="emailAddress" name="email"  >
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="ui form">
										<label>Are you a boy or a girl?</label>
										<div class="inline fields">
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="sex" checked="checked" value="boys" id="gender">
													<label>Boy</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="sex" value="girls" id="gender">
													<label>Girl</label>
												</div>
											</div>
										</div>
									</div>

									<div  class="two fields">
										<div class="field">
											<label>Preferred Location</label>
											<div class="ui corner labeled input">
												<input placeholder="Preferred Location" type="text" id="location"  name=""  required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Course of study</label>
											<div class="ui corner labeled input">
												<input placeholder="Course of study" type="text" id="course"  name=""  required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="ui form">
										<label>Stay duration</label>
										<div class="inline fields">
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="duration" checked="checked" value="4 Months" id="duration">
													<label>&lt; 4 months</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="duration" value="4-8 Months" id="duration">
													<label>4-8 months</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="duration" value="8 Months" id="id="duration"">
													<label>&gt; 8 months</label>
												</div>
											</div>
										</div>
									</div>

									<div class="ui form">
										<label>Room Type</label>
										<div class="inline fields">
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="rtype" checked="checked" value="1 Bed" id="rtype">
													<label>1 bed per room</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="rtype" value="2 Bed" id="rtype">
													<label>2 beds per room</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="rtype" value="3 Bed" id="rtype">
													<label>3 beds per room</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="rtype" value="4 Bed" id="rtype">
													<label>4 beds per room</label>
												</div>
											</div>
										</div>
									</div>

									<div>
										<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>
									</div>

									<br/>

								</form>
							</div>
							<!-- internal row 1 -->

						</div><!-- main column -->

						<div class="col-md-4">
							<div  class="row">
								<div style="padding: 0px 10px;">
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