<?php $submitted = "noidea";
$name = $_GET["name"];
include 'DBConnection.php';
$hostel_row = $conn -> query("SELECT * from hostel where name='$name'");
list($id, $name, $gender, $location, $estd_year, $fee_structure_id, $capacity) = $hostel_row -> fetch_row();

if (empty($name)){
    header("Location: error.php");
    exit;
}

include "Common/Common.php";

$latLong = getLatLong($conn,$id);

$email = "";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $name; ?> | Merohostel.com</title>

    <link rel="icon" href="img/favicon.ico">
    <meta content='noodp,noydir' name='robots'/>
    <meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
    <meta content='Merohostel.com' name='author'/>
    <meta content="<?php echo $name; ?> is located in <?php echo $location; ?>." name="description" >
    <meta content='<?php echo $name; ?>, hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel, merohostel.com' name='keywords'/>

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
    <script type="text/javascript" src="fancy_box/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="fancy_box/jquery.fancybox.css" media="screen" />
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <style>
        .hostelLabel{
            color:red;
            font-size: 12px;
        }
        /* Tabs panel */
        .tabbable-panel {
            /*border:1px solid #eee;*/
            padding: 10px;
        }

        /* Default mode */
        .tabbable-line > .nav-tabs {
            border: none;
            margin: 0px;
            text-transform: uppercase;
        }
        .tabbable-line > .nav-tabs > li {
            margin-right: 2px;
        }
        .tabbable-line > .nav-tabs > li > a {
            border: 0;
            margin-right: 0;
            color: #737373;
        }
        .tabbable-line > .nav-tabs > li > a > i {
            color: #a6a6a6;
        }
        .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
            border-bottom: 4px solid #fbcdcf;
        }
        .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
            border: 0;
            background: none !important;
            color: #333333;
        }
        .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
            color: #a6a6a6;
        }
        .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
            margin-top: 0px;
        }
        .tabbable-line > .nav-tabs > li.active {
            border-bottom: 4px solid #FF6E3C;
            position: relative;
        }

        .tabbable-line > .nav-tabs > li.active > a {
            border: 0;
            color: #FF6E3C;
            font-size: 14px;
            background: #FFF0EB;
            font-weight: bold;
        }
        .tabbable-line > .nav-tabs > li.active > a > i {
            color: #FF6E3C;
        }
        .tabbable-line > .tab-content {
            margin-top: -3px;
            background-color: #fff;
            border: 0;
            border-top: 1px solid #eee;
            padding: 15px 0;
        }
        .portlet .tabbable-line > .tab-content {
            padding-bottom: 0;
        }
        #general_details .info {
            padding: 10px 0;
            font-size: 14px;
        }
        #general_details .info .llabel {
            font-size: 15px;
            line-height: 22px;
            font-weight: bold;
        }
        ul.facilitylist i {
            color: #FF6E3C;
        }
        #quickInquiry {
            position: relative;
            margin-left: 15px;
            background: #FB8860;
            border: none;
        }
        #quickInquiry:hover {
            background: #FFA585;
        }
        .item_info {
            display: inline-block;
            margin-left: 5px;
        }
        .info i {
            top: -10px;
            position: relative;
        }
        .controls {
            background-color: #fff;
            border-radius: 2px;
            border: 1px solid transparent;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            height: 29px;
            margin-left: 17px;
            margin-top: 10px;
            outline: none;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        .controls:focus {
            border-color: #4d90fe;
        }
    </style>
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
                helpers : {
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
                openEffect : 'none',
                closeEffect : 'none',
                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });
            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS : 'fancybox-custom',
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
                padding : 0,
                openEffect : 'elastic',
                openSpeed : 150,
                closeEffect : 'elastic',
                closeSpeed : 150,
                closeClick : true,
                helpers : {
                    overlay : null
                }
            });
            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */
            $('.fancybox-buttons').fancybox({
                openEffect : 'none',
                closeEffect : 'none',
                prevEffect : 'none',
                nextEffect : 'none',
                closeBtn : false,
                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
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
                closeBtn : false,
                arrows : false,
                nextClick : true,
                helpers : {
                    thumbs : {
                        width : 50,
                        height : 50
                    }
                }
            });
            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
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
        function validateReview() {
            if (/^[a-zA-Z]*$/.test($("#first_name").val().trim()) == false) {//validating first name
                sweetAlert("Oops...", "First Name should only contain alphabets!", "error");
                $("#first_name").focus()
                return false
            }
            if (/^[a-zA-Z]*$/.test($("#last_name").val().trim()) == false) {//validating last name
                sweetAlert("Oops...", "Last Name should only contain alphabets!", "error");
                $("#last_name").focus()
                return false
            }
            var email = $("#email").val().trim();
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!email.match(mailformat))//validating email
            {
                sweetAlert("Oops...", "You have entered an invalid email address!", "error");
                $("#email").focus()
                return false;
            }
            return true;
        }
    </script>

</head>

<body>

<?php $reviews = $conn -> query("SELECT * from review where hostel_id = '$id' and display = 1");
//list($id, $capacity, $contact, $gender, $location, $name, $email, $website, $additionalInfo, $ownerId, $mainPhotoUrl) = $row -> fetch_row();
$owner_row = $conn -> query("SELECT * from owner where id='$fee_structure_id'");
list($owner_id, $hostel_id, $owner_name, $contact) = $owner_row -> fetch_row();
if (isset($_POST['review']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['review_email'])) {
    $review = $_POST['review'];
    $first_name = trim($_POST["firstName"]);
    $last_name = trim($_POST["lastName"]);
    $review_email = trim($_POST["review_email"]);
    $date_array = getdate();
    $date = $date_array["year"] . "-" . $date_array["mon"] . "-" . $date_array["mday"] . " " . $date_array["hours"] . ":" . $date_array["minutes"] . ":" . $date_array["seconds"];
    $date = date_create($date);
    $date = date_format($date, "Y/m/d H:i:s");
    $query = "INSERT INTO review VALUES('$review', '$first_name', '$last_name', '$review_email', 0, $id, '$date', null)";
    if (mysqli_query($conn, $query)) {
        $submitted = "true";
    } else {
        $submitted = "false";
    }
}
function humanTiming($time) {
    $time = time() - $time;
    // to get the time since that moment
    $tokens = array(31536000 => 'year', 2592000 => 'month', 604800 => 'week', 86400 => 'day', 3600 => 'hour', 60 => 'minute', 1 => 'second');
    foreach ($tokens as $unit => $text) {
        if ($time < $unit)
            continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
    }
}
?>

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
                    <h2 id="deHosTtl"> <?php echo $name
                        ?> </h2>
                    <div class="row" style="padding: 10px 0px;">
                        <div class="tabbable-panel">
                            <div class="tabbable-line">
                                <ul class="nav nav-tabs ">
                                    <li class="active">
                                        <a href="#tab_default_1" data-toggle="tab"> <i class="fa fa-info-circle" aria-hidden="true"></i> General </a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_2" data-toggle="tab"> <i class="fa fa-money" aria-hidden="true"></i> Facilities </a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_3" data-toggle="tab"> <i class="fa fa-envelope" aria-hidden="true"></i> Fee Structure</a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_5" data-toggle="tab"> <i class="fa fa-envelope" aria-hidden="true"></i> Review</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <div class="row">
                                            <div id="general_details" class="col-md-6">

                                                <div class="info">
                                                    <i class="circular inverted orange home icon"></i>
                                                    <div class="item_info">
                                                        <div class="llabel">
                                                            Name
                                                        </div><span id=""><?php echo $name
                                                            ?></span>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <i class="circular inverted orange  point icon"></i>
                                                    <div class="item_info">
                                                        <div class="llabel">
                                                            Address
                                                        </div><span id=""><?php if($location != NULL && $location != "NULL") echo "" . " <a href=\"hostels-in-kathmandu.php?location=" . $location . "\">" . $location . "</a>";

                                                            ?></span>
                                                    </div>
                                                </div>


                                                <?php
                                                if($hostel_id==264 || $hostel_id==67)
                                                    if($contact != NULL && $contact != "NULL") {

                                                        ?>
                                                        <div class="info">
                                                            <div class="llabel">
                                                                Contact Number
                                                            </div><span id="">
                                                                <?php
                                                                echo "<i class=\"circular inverted orange  phone square icon\"></i>" . " " . $contact

                                                                ?>
                                                            </span>
                                                        </div>

                                                        <?php
                                                    }
                                                ?>
                                                <br/>
                                                <br/>
                                                <br/>
                                                <?php
                                                include 'inquiry.php';
                                                ?>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="hostelImage">
                                                    <?php
                                                    $main_photo = $conn->query("SELECT url FROM photo p
                                                JOIN main_photo mp on mp.photo_id = p.id
                                                JOIN hostel h on h.id = mp.hostel_id where h.id = $id;");
                                                    $main_photo_row = null;
                                                    if($main_photo->num_rows > 0) {
                                                        $main_photo_row = $main_photo->fetch_assoc();
                                                        if ($main_photo_row != null) {
                                                            ?>
                                                            <a class="fancybox" href="<?php echo $main_photo_row["url"]; ?>"
                                                               data-fancybox-group="gallery">
                                                                <img id="firstDetailImage" src="<?php echo $main_photo_row["url"]; ?>"/>
                                                            </a>
                                                        <?php }
                                                        $photos = $conn->query("SELECT url FROM photo p
											JOIN hostel_photo hp on hp.photo_id = p.id
											JOIN hostel h on h.id = hp.hostel_id where h.id = $id");
                                                        $photos_row = null;
                                                        if ($photos->num_rows > 0)
                                                            $photos_row = $photos->fetch_assoc();
                                                        if ($photos_row != null) {
                                                            $noOfImage = 1;
                                                            while ($photos_row != null) {
                                                                $photo = $photos_row["url"];
                                                                $photos_row = $photos->fetch_assoc();
                                                                ?>
                                                                <div id="snippetImg">
                                                                    <a class="fancybox" href="<?php echo $photo; ?>"
                                                                       data-fancybox-group="gallery">
                                                                        <?php if ($noOfImage > 4) {
                                                                            echo '</a>';
                                                                        } else { ?><img
                                                                            src="<?php echo $photo; ?>"/>
                                                                            <?php echo '</a>';
                                                                        }
                                                                        ?>
                                                                </div>
                                                                <?php $noOfImage++;
                                                                if ($photos_row["url"] == "")
                                                                    break;
                                                            }
                                                        }
                                                    }else {
                                                        ?>
                                                        <img  id="firstDetailImage" src="img/hostel_icon.png"/>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab_default_2">
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
                                                        <i class="fa fa-check fa-1" aria-hidden="true"></i> <?php echo $facility; ?>
                                                    </li>
                                                <?php } ?>
                                                <li>
                                                    <i class="fa fa-check fa-1" aria-hidden="true"></i>Hostel Warden
                                                </li>
                                                <li>
                                                    <i class="fa fa-check fa-1" aria-hidden="true"></i>Wi-Fi
                                                </li>
                                                <li>
                                                    <i class="fa fa-check fa-1" aria-hidden="true"></i>24 hour electricity
                                                </li>

                                                <br style="
                                                clear: both;">
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab_default_3">
                                        <div class="row">
                                            <div id="general_details" class="col-md-12">
                                                <?php $fee_structure_row = $conn -> query("SELECT * FROM fee_structure where id=" . $fee_structure_id);
                                                $fee_structure = $fee_structure_row -> fetch_assoc();
                                                $admission = $fee_structure["admission"];
                                                $security_deposit = $fee_structure["security_deposit"];
                                                $bed_1 = $fee_structure["1_bed"];
                                                $bed_2 = $fee_structure["2_bed"];
                                                $bed_3 = $fee_structure["3_bed"];
                                                $bed_4 = $fee_structure["4_bed"];

                                                if(!empty($admission)){
                                                    ?>
                                                    <div class="info">
                                                        <div class="llabel">
                                                            Admission Fee
                                                        </div>
                                                    <span id="">
                                                        <?php
                                                        echo $admission;
                                                        ?>
                                                    </span>
                                                    </div>
                                                    <?php
                                                }

                                                if(!empty($security_deposit)){
                                                    ?>
                                                    <div class="info" >
                                                        <div class="llabel" >
                                                            Security Deposit
                                                        </div >
                                                    <span id = "" >
                                                         <?php
                                                         echo $security_deposit;
                                                         ?>
                                                </span>
                                                    </div>
                                                    <?php
                                                }

                                                if(!empty($bed_1)) {

                                                    ?>
                                                    <div class="info">
                                                        <div class="llabel">
                                                            Single Bedded Room
                                                        </div>
                                                    <span id="">
                                                         <?php
                                                         echo $bed_1;
                                                         ?>
                                                    </span>
                                                    </div>

                                                    <?php
                                                }

                                                if(!empty($bed_2)) {
                                                    ?>
                                                    <div class="info">
                                                        <div class="llabel">
                                                            Two beds per room
                                                        </div>
                                                    <span id="">
                                                         <?php
                                                         echo $bed_2;
                                                         ?>
                                                    </span>
                                                    </div>
                                                    <?php
                                                }
                                                if(!empty($bed_3)) {
                                                    ?>
                                                    <div class="info">
                                                        <div class="llabel">
                                                            Three beds per room
                                                        </div>
                                                    <span id="">
                                                         <?php
                                                         echo $bed_3;
                                                         ?>
                                                    </span>
                                                    </div>
                                                    <?php
                                                }
                                                if(!empty($bed_4)) {
                                                    ?>
                                                    <div class="info">
                                                        <div class="llabel">
                                                            Four beds per room
                                                        </div>
                                                    <span id="">
                                                         <?php
                                                         echo $bed_4;
                                                         ?>
                                                    </span>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_default_5">

                                        <div class="row" style="margin: 0;">
                                            <!-- <div class="ui attached message">
                                            <div class="header">
                                            Submit Review
                                            </div>
                                            <p>
                                            Please fill out the form below to submit a review for this hostel.
                                            </p>
                                            </div> -->

                                            <form class="ui form attached fluid " method="post" onsubmit="return validateReview()" action="hostelDetail.php?name=<?php echo $_GET["name"]?>">
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
                                                    <input class="ui orange submit button" style="float: right;" type="submit" value="Submit Review" name="SubmitReview">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- review -->

                                        <br/>
                                        <?php
                                        if($reviews->num_rows > 0) {
                                            ?>
                                            <div class="row" style="margin: 0;">
                                                <h3 id="review"><a name="review" id="review"></a>Latest Reviews</h3>
                                                <?php
                                                $r_row = $reviews -> fetch_row();
                                                while($r_row != null) {
                                                    list($r_review, $r_first_name, $r_last_name, $r_email, $r_display, $r_hostel_id, $r_date) = $r_row;
                                                    ?>
                                                    <div class="ui comments">
                                                        <div class="comment">
                                                            <div class="content">
                                                                <span class="author"><?php echo $r_first_name; ?></span>
                                                                <div class="metadata">
                                                                    <div class="date">
                                                                        <?php $time = strtotime($r_date);
                                                                        echo humanTiming($time) . ' ago';
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <p>
                                                                        <?php echo $r_review; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- comment-->
                                                    <?php
                                                    $r_row = $reviews -> fetch_row();
                                                }
                                                ?>
                                            </div><!-- latest review-->
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- internal row 1 -->

                    <div  class="row" style="margin:0">
                        <h3 id="shareHostel"><a name="shareHostel"></a>Share this hostel!</h3>
                        <!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox"></div>
                    </div><!-- internal row -->

                    <div  class="row" style="margin:0">
                        <h3 id="shareHostel"><a name="shareHostel"></a>Map</h3>
                        <input id="pac-input" class="controls" type="text"
                               placeholder="Enter a location">
                        <div id="hostelMap" style="height: 400px;">

                        </div>
                    </div><!-- internal row -->

                </div><!-- main column -->

                <div class="col-md-4">
                    <h3 style="    color: #FF6E3D; font-size: 20px;" id="review"><a name="review" id="review"></a>Featured Hostels</h3>

                    <a href="hostelDetail.php?name=Aayush+Boys+Hostel" target="_blank">
                        <div class="advertisement">
                            <img src="https://lh3.googleusercontent.com/-VXhWslwawLk/VbBiWGPSnzI/AAAAAAAAAp8/t7uCKlWoVMw/s240-Ic42/1.PNG" title="Aayush Hostel" alt="aayush-hostel"/>
                            <h2 style="position: relative;top: -31px;">Aayush Boys Hostel</h2>
                        </div> </a>

                    <br/>

                    <a href="hostelDetail.php?name=Kanya+Chhatrabas+(Girls+Hostel)" target="_blank">
                        <div class="advertisement">
                            <img src="https://lh3.googleusercontent.com/-oXuoQAEHKbc/VeLJaJpaNyI/AAAAAAAAApw/9EX80_Dbdp4/s240-Ic42/main%252520photo.jpg" title="Kanya Chhatrabas (Girls Hostel)" alt="kanya-girls-hostel"/>
                            <h2 style="position: relative;top: -31px;">Kanya Girls Hostel</h2>
                        </div> </a>

                    <br/>

                    <a href="hostelDetail.php?name=Subhalaxmi+Boys+Hostel" target="_blank">
                        <div class="advertisement">
                            <img src="https://lh3.googleusercontent.com/-ORQHnjDpWy0/VYgB4o8QhuI/AAAAAAAAAQg/VdEy60o9u5g-7PVYi_RlXKAbR8R1ccHVgCCo/s720-Ic42/DSCN5684.JPG" title="SubhaLaxmi Boys Hostel" alt="subhalaxmi-boys-hostel"/>
                            <h2 style="position: relative;top: -31px;">SubhaLaxmi Boys Hostel</h2>
                        </div> </a>

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

<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBGLh73dfh-fMrkJ4tcgm9g88DDDVFt-04&libraries=places"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGLh73dfh-fMrkJ4tcgm9g88DDDVFt-04&libraries=places&sensor=false"></script>
<script src="js/markerwithlabels.js"></script>
<script src="js/mapJs.js"></script>
<script>
    function init(){
        initialize("<?php echo $latLong['latitude'] ?>","<?php echo $latLong['lognitude'] ?>","<?php echo $location ?>","<?php echo $name ?>");
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>



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