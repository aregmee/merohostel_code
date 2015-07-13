<div id="header">
    <div id="fixedSearch">
        <div class="container">
            <div class="row">

                <div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
                    <a href="/"> <img src="img/mero-hostel-logo.png"/> </a>
                </div>
                <!-- logo -->

                <script type="text/javascript">
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

                    function validateForm() {
                        if ($("#genderSelect").val() != '' && $("#result").val() != '') {
                            return true;
                        } else {
                            sweetAlert("Oops...", "Please enter the required values", "error");
                            return false
                        }
                    }

                </script>
                <script src="sweetalert-master/dist/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
                <form method = "get" action="hostelList.php" autocomplete="off">
                    <div class="ui selection dropdown" style="min-width: 150px;">
                        <input type="hidden" id="genderSelect" name="gender">
                        <i class="dropdown icon"></i>
                        <div class="default text">
                            Gender
                        </div>
                        <div class="menu">
                            <div class="item" data-value="boys" data-text="Boys" value="boys">
                                <i class="male icon"></i>
                                Boys
                            </div>
                            <div class="item" data-value="girls" data-text="Girls" value="girls">
                                <i class="female icon"></i>
                                Girls
                            </div>
                        </div>
                    </div>
                    <!-- gender -->

                    <div class="ui search dropdown selection" style="min-width: 300px;  margin-left: 5px;">
                        <select id="result" name="location">
                            <option value="">Location</option>
                        </select>
                        <input class="search" tabindex="0">
                        <div class="default text">
                            Location
                        </div><div class="menu" tabindex="-1"></div>
                    </div>
                    <!-- location -->

                    <button onclick="return validateForm()" class="ui orange submit button" style="
	font-size: 15px;
	margin-left: 10px;
	" onclick="return validateForm();">
                        <i class="search icon"></i>Search
                    </button>
                </form>

            </div><!--row -->
        </div><!--container -->

    </div><!-- fixedSearch -->
</div><!-- header-->