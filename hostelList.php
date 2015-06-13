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
            if(!isset($_GET["gender"])){
                $gender = "";
            } else {
                $gender = $_GET["gender"];
            }

            $location = $_GET["location"];
            include 'DBConnection.php';

            $per_page = 8;

            if (isset($_GET["page"]))
                $page = $_GET["page"];
            else
                $page=1;
            // Page will start from 0 and Multiple by Per Page
            $start_from = ($page - 1) * $per_page;

            if($gender == "" || $gender == null)
                $sql = "SELECT * FROM hostel WHERE location LIKE '%$location%' ORDER BY location";
            else
                $sql="SELECT * FROM hostel WHERE location LIKE '%$location%' and gender = '$gender' ORDER BY location";

            //Selecting the data from table but with limit
            $sql .= " LIMIT $start_from, $per_page";
            $result =$conn->query($sql);
        ?>
			<div id="header">
				<div id="fixedSearch">
                    <form method = "get" action="hostelList.php">
					<div class="container">
						<div class="row">

							<div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
								<a href="index.php"> <img src="img/mero-hostel-logo.png"/> </a>
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
						
						<div class="col-md-12">
							<h2><?php echo ucfirst($gender) ?> hostel nearby <?php echo $location ?></h2>
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
											<?php $name = $row["name"];
                                                /*$name = stripslashes($name);*/
                                                if(strlen($name) > 24)
                                                    echo substr($name, 0, 22) . "...";
                                                else
                                                    echo $name;

                                            ?>
										</div>

										<div class="description">

										</div>
									</div>
									<div class="extra content">
										<a class="right floated created"><i class="circular inverted orange  user icon"></i><?php echo $row["gender"]; ?></a>
										<a class="friends" href="hostelList.php?location=<?php echo $row["location"]; ?>"><i class="circular inverted orange  point icon"></i><?php echo $row["location"]; ?></a>
									</div>

									<a  style="text-decoration: none;"  href="hostelDetail.php?id=<?php echo $row["id"]; ?>">
									<div style="display: block;	border-radius: 0; margin: 0;" class="ui orange button">
										View Details
									</div> </a>

								</div>
							</div><!-- hostelThumb -->
                            <?php } ?>
                            <div id="pager">
                                <ul class="pagination">
                                    <?php

                                        if($gender == "" || $gender == null)
                                            $sql = "SELECT * FROM hostel WHERE location LIKE '%$location%' ORDER BY location";
                                        else
                                            $sql="SELECT * FROM hostel WHERE location LIKE '%$location%' and gender = '$gender' ORDER BY location";

                                        $result =$conn->query($sql);

                                        // Count the total records
                                        $total_records = mysqli_num_rows($result);

                                        //Using ceil function to divide the total records on per page
                                        $total_pages = ceil($total_records / $per_page) - 1;

                                    ?>
                                    <?php

                                        if($total_pages > 1){

                                            $prev_page = $page - 1;
                                            $next_page = $page + 1;
                                            $url = "hostelList.php?";
                                            if(!empty($location))
                                                $url .= "location=" . $location;
                                            if($page > 1)
                                            echo "<li><a href= '$url&page=$prev_page'>" . '«'."</a></li>";

                                            for ($i=1; $i<=$total_pages; $i++) {
                                                echo "<li>";
                                                echo "<a href='$url&page=".$i."'>".$i."</a> ";
                                                echo "</li>";
                                            };
                                            if($page < $total_pages)
                                                echo "<li><a href='$url&page=$next_page'>" . '»'."</a></li>";
                                        }
                                    ?>
								</ul>
							</div><!-- pager -->

						</div><!-- main column -->

					
					</div><!--row -->
				</div><!--container -->

			</div>
			<!-- content -->

            <?php include "footer.php";?>

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