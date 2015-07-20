<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Find hostels in Kathmandu online | Merohostel.com</title>
		
		<link rel="icon" href="img/favicon.ico">
		<meta content='noodp,noydir' name='robots'/>
		<meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
		<meta content='Merohostel.com' name='author'/>
        <?php
            if (isset($_GET["location"])) {
                $meta_location = $_GET["location"];
            } else {
                $meta_location = "";
            }
            $meta_location .= " kathmandu";
            if (!isset($_GET["gender"])) {
                $gender = "";
            } else {
                $gender = $_GET["gender"];
            }

            if (isset($_GET["location"])) {
                $location = $_GET["location"];
            } else {
                $location = "";
            }
            include 'DBConnection.php';

            $per_page = 8;

            if (isset($_GET["page"]))
                $page = $_GET["page"];
            else
                $page = 1;
            // Page will start from 0 and Multiple by Per Page
            $start_from = ($page - 1) * $per_page;

            if ($gender == "" || $gender == null)
                $sql = "select DISTINCT(h.id), h.name, h.address, h.gender from hostel h
                        left join main_photo mp on h.id = mp.hostel_id
                        where address like '%$location%' order by case when photo_id is null then 1 else 0 end, photo_id";
            else
                $sql = "select DISTINCT(h.id), h.name, h.address, h.gender from hostel h
                        left join main_photo mp on h.id = mp.hostel_id
                        where address like '%$location%' and gender = '$gender' order by case when photo_id is null then 1 else 0 end, photo_id";
            $result = $conn -> query($sql);
        ?>
		<meta content="Choose from <?php echo $result->num_rows;?> hostels in <?php echo ucfirst($meta_location); ?> and read reviews from your fellow hostellers." name="description" >
		<meta content='hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel,  merohostel.com' name='keywords'/>
        <?php
            $sql .= " LIMIT $start_from, $per_page";
            $result = $conn -> query($sql);
        ?>

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
        <?php include 'header.php'; ?>

		<div id="wrapper">

			<div id="content">

				<?php
				include "feedback.php";
 ?>

				<div style="background: #fff;" class="container">

					<div class="row"  id="frameContent" style="padding-top: 20px; padding-bottom: 20px;">

						<div class="col-md-12">
	<h2 style="  color: rgb(255, 110, 60); word-spacing: 3px; font-family: 'Oswald', sans-serif; font-weight: 200;">
                                <?php
								if ($gender != null || $gender != '')
									echo ucfirst($gender) . " hostels ";
								$test_result = $conn -> query("SELECT * FROM hostel where address = '" . $location . "'");

								if (mysqli_num_rows($test_result) > 0) {
									if (($location != null || $location != '') && ($gender == null || $gender == ''))
										echo "Hostels nearby " . $location;
									else if (($location != null || $location != '') && ($gender != null || $gender != ''))
										echo " nearby " . $location;
								} elseif ($conn -> query("SELECT * FROM hostel where address = '" . $location . " %'")) {

									if (($location != null || $location != '') && ($gender == null || $gender == ''))
										echo "Hostels nearby " . $location;
									else if (($location != null || $location != '') && ($gender != null || $gender != ''))
										echo " nearby " . $location;
								}
								if (($gender == null || $gender == '') && ($location == null || $location == ''))
									echo "All Hostels in Kathmandu";
                                ?>
                            </h2>
                                <?php
                                    if($result->num_rows == 0)
                                        echo "<i>Sorry! No hostels match your criteria.</i>";
                                    while($row = $result->fetch_assoc()) {
                                ?>


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
                                        <a href="hostelDetail.php?id=<?php echo $row["id"]; ?>">
                                            <?php
                                            $h_id = $row["id"];
                                            $photos = $conn->query("SELECT url FROM photo p
                                                JOIN main_photo mp on mp.photo_id = p.id
                                                JOIN hostel h on h.id = mp.hostel_id where h.id = $h_id");
                                            $photos_row = $photos -> fetch_assoc();
                                            if($photos_row != null) {
                                                ?>
                                                <img src="<?php echo $photos_row["url"]; ?>"/>
                                            <?php }else { ?>
                                                <img src="img/hostel_icon.png"/>
                                            <?php } ?>
                                        </a>
									</div>

									<div class="content">
										<div class="header">
											<?php $name = $row["name"];
											/*$name = stripslashes($name);*/
											if (strlen($name) > 24) {
												$shortName = substr($name, 0, 22) . "...";
												echo "<a href=hostelDetail.php?id=" . $row["id"], ">$shortName</a>";
											} else {
												echo "<a href=hostelDetail.php?id=" . $row["id"], ">$name</a>";
											}
                                            ?>
										</div>

										<div class="description">

										</div>
									</div>
									<div class="extra content">
										<a class="right floated created" href="hostelList.php?gender=<?php echo $row["gender"]; ?>"><i class="circular inverted orange  user icon"></i><?php echo $row["gender"]; ?></a>
                                        <a class="friends" href="hostelList.php?location=<?php echo $row["address"]; ?>"><i class="circular inverted orange  point icon"></i>
                                            <?php $loc = $row["address"];
											if (strlen($loc) > 15)
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
                                    if ($gender == "" || $gender == null)
                                        $sql = "select DISTINCT(h.id), h.name, h.address, h.gender from hostel h
                    left join hostel_photo hp on h.id = hp.hostel_id
                    where address like '%$location%' order by case when photo_id is null then 1 else 0 end, photo_id";
                                    else
                                        $sql = "select DISTINCT(h.id), h.name, h.address, h.gender from hostel h
                    left join hostel_photo hp on h.id = hp.hostel_id
                    where address like '%$location%' and gender = '$gender' order by case when photo_id is null then 1 else 0 end, photo_id";

									$result = $conn -> query($sql);

									// Count the total records
									$total_records = mysqli_num_rows($result);

									//Using ceil function to divide the total records on per page
									$total_pages = ceil($total_records / $per_page);

									if ($total_pages > 1) {

										$prev_page = $page - 1;
										$next_page = $page + 1;
										$url = "hostelList.php?";
										if (!empty($location)) {
											$url .= "location=" . $location;
											if (!empty($gender))
												$url .= "&gender=" . $gender;
										} else {

											if (!empty($gender))
												$url .= "gender=" . $gender;
										}
										if ($page > 1)
											echo "<a class = \"icon item\" href= '$url&page=$prev_page'>" . '<i class="left arrow icon"></i>' . "</a>";
										if ($total_pages > 6) {
											if ($page - 4 <= 0)
												$i = 1;
											else
												$i = $page - 4;
											if ($page + 4 > $total_pages)
												$pages_to_print = $total_pages;
											else
												$pages_to_print = $page + 4;
											for (; $i <= $pages_to_print; $i++) {

												if ($page == $i)
													echo "<a class = \"active item\" href='$url&page=" . $i . "'>" . $i . "</a>";
												else
													echo "<a class = \"item\" href='$url&page=" . $i . "'>" . $i . "</a>";
											}

										} else {
											for ($i = 1; $i <= $total_pages; $i++) {
												if ($page == $i)
													echo "<a class = \"active item\" href='$url&page=" . $i . "'>" . $i . "</a>";
												else
													echo "<a class = \"item\" href='$url&page=" . $i . "'>" . $i . "</a>";
											}
										}
										if ($page < $total_pages)
											echo "<a class = \"icon item\"href='$url&page=$next_page'>" . '<i class="right arrow icon"></i>' . "</a>";
									}
                                    ?>
                                </div>
							</div><!-- pager -->

						</div><!-- main column -->


					</div><!--row -->
				</div><!--container -->

			</div>
			<!-- content -->

            <?php
			include "footer.php";
		?>

			</div><!-- footer -->
		</div>

		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>