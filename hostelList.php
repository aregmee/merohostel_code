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
	</head>

	<body>
        <?php
            if(!isset($_GET["gender"])){
                $gender = "";
            } else {
                $gender = $_GET["gender"];
            }

            if(isset($_GET["location"])) {
                $location = $_GET["location"];
            } else{
                $location = "";
            }
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

				<?php
	include "feedback.php";
	?>

				<div style="background: #fff;" class="container">

					<div class="row"  id="frameContent" style="padding-top: 20px; padding-bottom: 20px;">
						
						<div class="col-md-12">
							<h2>
                                <?php
                                    if($gender != null || $gender != '')
                                        echo ucfirst($gender) . " hostels ";
                                    $test_result = $conn->query("SELECT * FROM hostel where location = " . $location);
                                    echo $test_result->num_rows;
                                    if(!$test_result->num_rows) {
                                        if (($location != null || $location != '') && ($gender == null || $gender == ''))
                                            echo "Hostels nearby " . $location;
                                        else if(($location != null || $location != '') && ($gender != null || $gender != ''))
                                            echo " nearby " . $location;
                                    }
                                    if(($gender == null || $gender == '') && ($location == null || $location == ''))
                                        echo "All Hostels in Kathmandu";
                                ?>
                            </h2>
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
										<a class="right floated created" href="hostelList.php?gender=<?php echo $row["gender"]; ?>"><i class="circular inverted orange  user icon"></i><?php echo $row["gender"]; ?></a>
                                        <a class="friends" href="hostelList.php?location=<?php echo $row["location"]; ?>"><i class="circular inverted orange  point icon"></i>
                                            <?php $loc = $row["location"];
                                            if(strlen($loc) > 15)
                                                echo substr($loc, 0, 13) . "...";
                                            else
                                                echo $loc;

                                            ?>
									</div>

									<a  style="text-decoration: none;"  href="hostelDetail.php?id=<?php echo $row["id"]; ?>">
									<div style="display: block;	border-radius: 0; margin: 0;" class="ui orange button">
										View Details
									</div> </a>

								</div>
							</div><!-- hostelThumb -->
                            <?php } ?>
                            <div id="pager">
                                <div class="ui pagination menu">
                                    <?php

                                    if($gender == "" || $gender == null)
                                        $sql = "SELECT * FROM hostel WHERE location LIKE '%$location%' ORDER BY location";
                                    else
                                        $sql="SELECT * FROM hostel WHERE location LIKE '%$location%' and gender = '$gender' ORDER BY location";

                                    $result =$conn->query($sql);

                                    // Count the total records
                                    $total_records = mysqli_num_rows($result);

                                    //Using ceil function to divide the total records on per page
                                    $total_pages = ceil($total_records / $per_page);

                                    if($total_pages > 1){

                                        $prev_page = $page - 1;
                                        $next_page = $page + 1;
                                        $url = "hostelList.php?";
                                        if(!empty($location))
                                            $url .= "location=" . $location;
                                        if($page > 1)
                                            echo "<a class = \"icon item\" href= '$url&page=$prev_page'>" . '<i class="left arrow icon"></i>'."</a>";

                                        for ($i=1; $i<=$total_pages; $i++) {
                                            if($page == $i)
                                                echo "<a class = \"active item\" href='$url&page=" . $i . "'>" . $i . "</a>";
                                            else
                                                echo "<a class = \"item\" href='$url&page=" . $i . "'>" . $i . "</a>";
                                        }
                                        if($page < $total_pages)
                                            echo "<a class = \"icon item\"href='$url&page=$next_page'>" . '<i class="right arrow icon"></i>'."</a>";
                                    }
                                    ?>
                                </div>
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
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>