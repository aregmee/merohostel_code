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

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="fancy_box/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="fancy_box/jquery.fancybox.css?v=2.1.5" media="screen" />
		<!-- Google Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 *  Simple image gallery. Uses default settings
                 */

                $('.fancybox').fancybox();

                /*
                 *  Different effects
                 */

                // Change title type, overlay closing speed
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title : {
                            type : 'outside'
                        },
                        overlay : {
                            speedOut : 0
                        }
                    }
                });

                // Disable opening and closing animations, change title type
                $(".fancybox-effects-b").fancybox({
                    openEffect  : 'none',
                    closeEffect	: 'none',

                    helpers : {
                        title : {
                            type : 'over'
                        }
                    }
                });

                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS    : 'fancybox-custom',
                    closeClick : true,

                    openEffect : 'none',

                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        overlay : {
                            css : {
                                'background' : 'rgba(238,238,238,0.85)'
                            }
                        }
                    }
                });

                // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,

                    openEffect : 'elastic',
                    openSpeed  : 150,

                    closeEffect : 'elastic',
                    closeSpeed  : 150,

                    closeClick : true,

                    helpers : {
                        overlay : null
                    }
                });

                /*
                 *  Button helper. Disable animations, hide close button, change title type and content
                 */

                $('.fancybox-buttons').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',

                    prevEffect : 'none',
                    nextEffect : 'none',

                    closeBtn  : false,

                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        buttons	: {}
                    },

                    afterLoad : function() {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });


                /*
                 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                 */

                $('.fancybox-thumbs').fancybox({
                    prevEffect : 'none',
                    nextEffect : 'none',

                    closeBtn  : false,
                    arrows    : false,
                    nextClick : true,

                    helpers : {
                        thumbs : {
                            width  : 50,
                            height : 50
                        }
                    }
                });

                /*
                 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                 */
                $('.fancybox-media')
                    .attr('rel', 'media-gallery')
                    .fancybox({
                        openEffect : 'none',
                        closeEffect : 'none',
                        prevEffect : 'none',
                        nextEffect : 'none',

                        arrows : false,
                        helpers : {
                            media : {},
                            buttons : {}
                        }
                    });
            });


            $(function(){
                $(".search").keyup(function()
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
            });


            function validateReview(){
                if (/^[a-zA-Z]*$/.test($("#first_name").val()) == false) {//validating first name
                    alert("Name should contain only alphabets");
                    $("#first_name").focus()
                    return false
                }
                if (/^[a-zA-Z]*$/.test($("#last_name").val()) == false) {//validating last name
                    alert("Name should contain only alphabets");
                    $("#last_name").focus()
                    return false
                }
                var email = $("#email").val()
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (!email.match(mailformat))//validating email
                {
                    alert("You have entered an invalid email address!");
                    $("#email").focus()
                    return false;
                }
                $("#reviewSubmitted").removeClass('hide')
                return true
            }
        </script>
	</head>

	<body>
		<?php $submitted = "noidea";
		$id = $_GET["id"];
		include 'DBConnection.php';
		$hostel_row = $conn -> query("SELECT * from hostel where id='$id'");
        $reviews = $conn->query("SELECT * from review where hostel_id = '$id' and display = 1");
        //list($id, $capacity, $contact, $gender, $location, $name, $email, $website, $additionalInfo, $ownerId, $mainPhotoUrl) = $row -> fetch_row();
        list($id, $name, $gender, $location, $estd_year, $fee_structure_id, $capacity) = $hostel_row->fetch_row();
        $owner_row = $conn -> query("SELECT * from owner where id='$fee_structure_id'");
        list($owner_id, $hostel_id, $owner_name, $contact) = $owner_row->fetch_row();
        if (isset($_POST['review']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['review_email'])) {
			$review = $_POST['review'];
			$first_name = $_POST["firstName"];
			$last_name = $_POST["lastName"];
			$review_email = $_POST["review_email"];
            $date_array = getdate();
            $date = $date_array["year"] . "-" . $date_array["mon"] . "-" . $date_array["mday"] . " "
                    . $date_array["hours"] . ":" . $date_array["minutes"] . ":" . $date_array["seconds"];
            $date=date_create($date);
            $date = date_format($date,"Y/m/d H:i:s");
			$query = "INSERT INTO review VALUES('$review', '$first_name', '$last_name', '$review_email', 0, $id, '$date')";
			if (mysqli_query($conn, $query)) {
				$submitted = "true";
			} else {
				$submitted = "false";
			}
		}
        function humanTiming ($time)
        {
            $time = time() - $time; // to get the time since that moment

            $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
            }

        }
		?>

		<div id="header">
			<div id="fixedSearch">
				<div class="container">
					<div class="row">

						<div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
							<a href="index.php"> <img src="img/mero-hostel-logo.png"/> </a>
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

						<div class="col-md-8">
							<h2 id="deHosTtl"><?php echo $name
							?></h2>
							<div class="row" style="
							background-color: #f6f6f6;
							padding: 10px 0px;

							">
								<div class="col-md-3">
									<div class="hostelImage">
                                        <?php
                                        $photos = $conn->query("SELECT url FROM photo p
                                                JOIN hostel_photo hp on hp.photo_id = p.id
                                                JOIN hostel h on h.id = hp.hostel_id where h.id = $id");
                                        $photos_row = $photos -> fetch_assoc();
                                        if($photos_row != null) {
                                            ?>
                                            <a class="fancybox" href="<?php echo $photos_row["url"];?>" data-fancybox-group="gallery">
                                                <img src="<?php echo $photos_row["url"];?>"/>
                                            </a>
                                        <?php
                                        }
                                        while($photos_row != null){
                                            $photo = $photos_row["url"];
                                            $photos_row = $photos -> fetch_assoc();
                                            if($photos_row["url"] == "" )
                                                break;
                                            ?>
                                            <a class="fancybox" href="<?php echo $photos_row["url"];?>" data-fancybox-group="gallery"></a>
                                        <?php } ?>

									</div>
								</div>
								<div class="col-md-9" style="border-left: 2px dotted #ccc;">

									<h4>General Info</h4>
									<p>
										<?php if($location != NULL && $location != "NULL") echo "<a href=\"hostelList.php?location=" . $location . "\"><i class=\"circular inverted orange  point icon\"></i>" . " " . $location . "</a>"
										?>
									</p>
									<p>
										<?php if($contact != NULL && $contact != "NULL") echo "<i class=\"circular inverted orange  phone square icon\"></i>" . " " . $contact
										?>
									</p>
									<p>
										<?php if($email != NULL && $email != "NULL") echo "<i class=\"circular inverted orange  mail  icon\"></i>" . " " . $email
										?>
									</p>

								</div>

							</div>
							<!-- internal row 1 -->
                            <div  class="row">
                                <h3 id="shareHostel"><a name="shareHostel"></a>Share this hostel!</h3>
                                <!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox"></div>
                            </div><!-- internal row -->
							<div class="row">
								<h3 id="facilities"><a name="facilities" id="facilities"></a>Facilities</h3>

								<div class="facilities">
									<ul class="facilitylist">
                                        <?php
                                            $facilities = $conn->query("SELECT DISTINCT (f.name) as facility_name from facility f
                                                                        JOIN hostel_facility hf on hf.facility_id = f.id
                                                                        JOIN hostel h on h.id = $id where hf.hostel_id=$id");
                                            $facilities_row = $facilities -> fetch_assoc();
                                            while($facilities_row != null){
                                            $facility = $facilities_row["facility_name"];
                                            $facilities_row = $facilities -> fetch_assoc();
                                        ?>
										<li>
                                            <?php
											    echo $facility;
                                            ?>
										</li>
										<?php } ?>
                                        <li>
                                            Hostel Warden
                                        </li>
                                        <li>
                                            Wi-Fi
                                        </li>
                                        <li>
                                            24 hour electricity
                                        </li>
										<br style="clear: both;">
									</ul>
								</div>
							</div><!-- row 2 -->

							<div class="row">
                                    <div class="ui attached message">
                                        <div class="header">
                                            Submit Review
                                        </div>
                                        <p>Please fill out the form below to submit a review for this hostel.</p>
                                    </div>
                                    <div class="ui positive message hide" id="reviewSubmitted">
                                        <div class="header">
                                            Thanks. Your review has been successfully submitted!
                                        </div>
                                    </div>
                                    <div class="ui negative message hide">
                                        <div class="header hide">
                                            Sorry! We are having trouble. Please try again.
                                        </div>
                                    </div>
                                <form class="ui form attached fluid segment" method="post" onsubmit="return validateReview()" action="hostelDetail.php?id=<?php echo $_GET["id"]?>">
                                    <div class="two fields">
                                        <div class="field">
                                            <label>First name</label>
                                            <div class="ui corner labeled input">
                                                <input placeholder="First Name" type="text" name="firstName" id="first_name" required="true">
                                                <div class="ui corner label">
                                                    <i class="asterisk icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Last name</label>
                                            <div class="ui corner labeled input">
                                                <input placeholder="Last Name" type="text" name="lastName" id="last_name" required="true">
                                                <div class="ui corner label">
                                                    <i class="asterisk icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Email Address</label>
                                        <div class="ui corner labeled input">
                                            <input placeholder="Email" type="text" name="review_email" id="email" required="true">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Add New Review</label>
                                        <div class="ui corner labeled input">
                                            <textarea name="review" rows="5" cols="40" required="true"></textarea>
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                    </div>
									<div>
										<input class="ui orange submit button" type = "submit" value = "Submit Review" name = "SubmitReview"/>
									</div>
								</form>
							</div><!-- internal row 2 -->

							<br>
                            <?php
                                if($reviews->num_rows > 0){
                            ?>
                            <div class="row">
                                <h3 id="review"><a name="review" id="review"></a>Latest Reviews</h3>
                                <?php
                                    $r_row = $reviews -> fetch_row();
                                    while($r_row != null){
                                    list($r_review, $r_first_name, $r_last_name, $r_email, $r_display, $r_hostel_id, $r_date) = $r_row;
                                ?>
                                        <div class="ui comments">
                                          <div class="comment">
                                            <div class="content">
                                              <span class="author"><?php echo $r_first_name; ?></span>
                                              <div class="metadata">
                                                <div class="date">
                                                    <?php
                                                        $time = strtotime($r_date);

                                                        echo humanTiming($time).' ago';
                                                    ?>
                                                </div>
                                              </div>
                                              <div class="text">
                                                <p><?php echo $r_review; ?></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div><!-- comment-->
                            <?php
                                    $r_row = $reviews->fetch_row();
                                } ?>
                            </div><!-- row -->
                            <?php } ?>
                            </div><!-- main column -->
						
						
						<div class="col-md-4">

						</div><!-- sidebar -->
						
						
					</div><!-- content -->
				</div><!-- container -->
			</div>
			<!-- content -->

            <?php
	include "footer.php";
?>

			</div><!-- footer -->
		</div>

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fbb182a18547812" async="async"></script>
		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--		<script src="js/jquery.min.js"></script>-->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>