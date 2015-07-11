<!DOCTYPE HTML>
<?php
include("DBConnection.php");
$name = $_POST["hname"];
$gender = $_POST["sex"];
$address = $_POST["address"];
$honame = $_POST["honame"];
$cno = $_POST["cno"];
$edate = $_POST["edate"];
$capacity = $_POST["tno"];
$adfee = $_POST["admissionfee"];
$sdepo = $_POST["sdepo"];
$mf1 = $_POST["mf1"];
$mf2 = $_POST["mf2"];
$mf3 = $_POST["mf3"];
$mf4 = $_POST["mf4"];

if(isset($name) && isset($gender) && isset($address)){

    $sql = "INSERT INTO temp_fee_structure (admission, security_deposit, 1_bed, 2_bed, 3_bed, 4_bed)
	VALUES('$adfee','$sdepo','$mf1','$mf2','$mf3','$mf4')";
    mysqli_query($conn, $sql);

    $last_id = "SELECT id FROM temp_fee_structure ORDER BY id desc";
    $ids = $conn->query($last_id);
    $ids_row = $ids->fetch_assoc();
    $fee_id = $ids_row["id"];

    $sql = "INSERT INTO temp_hostel (name ,gender ,address ,estd_year,fee_structure_id,capacity)
	VALUES ('$name ','	$gender ','$address ','$edate ','$fee_id','$tno ')";
    mysqli_query($conn, $sql);

    $last_id = "SELECT id FROM temp_hostel ORDER BY id desc";
    $ids = $conn->query($last_id);
    $ids_row = $ids->fetch_assoc();
    $hos_id = $ids_row["id"];
    $sql = "INSERT INTO temp_owner (hostel_id ,name ,contact)
	VALUES ('$hos_id ',' $honame ','$cno ')";
    mysqli_query($conn, $sql);

    if(is_array($_POST['facility'])) {
        foreach($_POST['facility'] as $selected){
            $sql = "INSERT INTO temp_hostel_facility (hostel_id, facility_id) VALUES('$hos_id ', '$selected')";
            mysqli_query($conn, $sql);
        }
    }
    $submitted = "true";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add your Hostel | Merohostel.com</title>

    <link rel="icon" href="img/favicon.ico">
    <meta content='noodp,noydir' name='robots'/>
    <meta content='INDEX, FOLLOW' name='GOOGLEBOT'/>
    <meta content='Merohostel.com' name='author'/>
    <meta content="" name="description" >
    <meta content='add hostels, submit hostel in merohostel, hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel, merohostel.com' name='keywords'/>

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

            <div id="frameContent" class="row" style="padding: 20px;">

                <div class="col-md-8">
                    <h2 id="deHosTtl">Add Hostel</h2>
                    <div class="row" style="margin-top: -15px;">
                        <?php if(isset($submitted)){
                            if ($submitted == "true"){?>
                                <div class="ui positive message">
                                    <div class="header">
                                        Thank you for adding the hostel. We will verify the information before updating on the website.
                                    </div>
                                </div>
                            <?php }
                        } ?>
                        <form id="addHostel" class="ui form" style="width: 97%;"  method="post" action="addHostel.php" enctype="multipart/form-data">

                            <h3 id="facilities"><a name="facilities" id="facilities"></a>General Information</h3>
                            <div class="field">
                                <label>Hostel Name</label>
                                <div class="ui corner labeled input">
                                    <input placeholder="Hostel Name" type="text"  name="hname"  required="true">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ui form">
                                <label>Gender</label>
                                <div class="inline fields">
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="sex" checked="checked" value="boys">
                                            <label>Boys</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="sex" value="girls">
                                            <label>Girls</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Address</label>
                                <div class="ui corner labeled input">
                                    <input placeholder="Address" type="text"  name="address"  required="true">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Hostel Owner's Name</label>
                                <div class="ui corner labeled input">
                                    <input placeholder="Hostel Owner's Name" type="text"  name="honame" >
                                    <div class="ui corner label">
                                    </div>
                                </div>
                            </div>
                            <div  class="two fields">
                                <div class="field">
                                    <label>Contact Number</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Contact Number" type="text"  name="cno"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Established Year</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Established Year" type="text"  name="edate"  >
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 id="facilities"><a name="facilities" id="facilities"></a>Facilities</h3>
                            <div class=" fields">
                                <div class="field">
                                    <div class="ui checkbox">
                                        <input type="checkbox" name="facility[]" value="1">
                                        <label>24 electricity</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="2">
                                        <label>Wi-Fi</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="3">
                                        <label>Hot Water</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="4">
                                        <label>Locker</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="5">
                                        <label>Hostel Warden</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="6">
                                        <label>Laundry</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui  checkbox">
                                        <input type="checkbox" name="facility[]" value="7">
                                        <label>Telivision</label>
                                    </div>
                                </div>
                            </div>

                            <div  class="one fields">
                                <div class="field">
                                    <label>Capacity</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Capacity" type="number" id = "capacity" name="tno" maxlength="30" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <h3 id="fee_structure" style="margin: 0px 0px 10px 0px;"><a name="fee_structure" id="fee_structure"></a>Fee Structure</h3>
                            <div class="two fields">
                                <div class="field">
                                    <label>Admission</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Admission" type="number" id = "admission_fee" name="admissionfee" maxlength="30" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Security Deposit</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Security Deposit" type="number" id = "sec_dep" name="sdepo" maxlength="30" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four fields">
                                <div class="field">
                                    <label>1 Bed</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="1 Bed" type="number" id="one_bed" name="mf1" maxlength="50" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>2 Bed</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="2 Bed" type="number" id ="two_bed" name="mf2" maxlength="50" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>3 Bed</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="3 Bed" type="number" id="three_bed" name="mf3" maxlength="50" size="30">
                                        <div class="ui corner label">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>4 Bed</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="4 Bed" type="number" id ="four_bed" name="mf4" maxlength="50" size="30">
                                        <div class="ui corner label">
                                        </div>
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