<div id="header">
    <div id="fixedSearch">
        <div class="container">
            <div class="row">

                <div style="float: left;padding: 14px 14px;margin-top: -10px;margin-bottom: -15px;">
                    <a href="/"> <img src="img/mero-hostel-logo.png"/> </a>
                </div>
                <!-- logo -->
                <script type="text/javascript" charset="utf-8" src="js/typeahead.jquery.js"></script>
                <script type="text/javascript" charset="utf-8" src="js/handlebars.js"></script>
                <script type="text/javascript">
                    var locations = [];
                    var search = function(){
                        while(locations.pop()!= null);
                        var gender = $('#genderSelect').val();
                        var dataString = 'gender=' + gender;
                        $.ajax({
                            type : "POST",
                            url : "search.php",
                            data : dataString,
                            cache : false,
                            success : function(html) {
                                html = html.split("\"");
                                for(var i = 1; i < html.length; i+=2){

                                    locations.push(html[i]);
                                }
                            }
                        });
                    };

                    $(document).ready(function() {

                        var substringMatcher = function(strs) {
                            return function findMatches(q, cb) {
                                var matches, substringRegex;

                                // an array that will be populated with substring matches
                                matches = [];

                                // regex used to determine if a string contains the substring `q`
                                substrRegex = new RegExp(q, 'i');

                                // iterate through the pool of strings and for any string that
                                // contains the substring `q`, add it to the `matches` array
                                $.each(strs, function(i, str) {
                                    if(str.indexOf(',') != -1) {
                                        str = str.split(',')[1];
                                    }
                                    str = str.trim();
                                    if (substrRegex.test(str)) {
                                        if($.inArray(str, matches) === -1) {
                                            matches.push(str);
                                        }
                                    }
                                });

                                cb(matches);
                            };
                        };
                        $('#locations .typeahead').typeahead({
                                hint: true,
                                highlight: true,
                                minLength: 1
                            },
                            {
                                name: 'locations',
                                source: substringMatcher(locations)
                            });
                    });
                </script>
                    <form method = "get" action="hostels-in-kathmandu.php" autocomplete="off">

                        <div class="ui selection dropdown" style="font-size: 16px;position: relative;right: 5px;min-width: 150px;">
                            <input type="hidden" name="gender" id = "genderSelect" onchange="search();">
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

                        <div id="locations" style=" display: inline-block;  line-height: 45px">
                            <input class="ui input typeahead " style="outline: 0;width: 300px;font-size: 16px; padding: 11px; padding-left: 20px;border: 1px solid #ddd; border-radius: 5px;" type="text" placeholder="Location" onfocus="search();" name="location">
                        </div>
                        <!-- location -->
                        <button class="ui orange submit button" style="
									font-size: 16px;
									margin-left: 10px;
									">
                            <i class="search icon"></i>Search
                        </button>
                    </form>

            </div><!--row -->
        </div><!--container -->

    </div><!-- fixedSearch -->
</div><!-- header-->
<?php include 'analyticstracking.php'; ?>