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
    <meta content="Merohostel.com helps you browse hostels inside Kathmandu valley online. Read reviews from fellow hostellers, view the detailed information & choose a hostel today." name="description" >
    <meta content='hostels in kathmandu, kathmandu hostel, hostel kathmandu, hostel nepal, hostels in nepal, merohostel,  merohostel.com' name='keywords'/>

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

    <!-- Used with Tab History !-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.min.js"></script>
    <script src="semantic/dist/semantic.js"></script>
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="bootstrap/html5shiv.min.js"></script>
    <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" charset="utf-8" src="js/typeahead.jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/handlebars.js"></script>
    <script type="text/javascript">
        var locations = [];
        var myfunction = function(){
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
                        if (substrRegex.test(str)) {
                            matches.push(str);
                        }
                    });

                    cb(matches);
                };
            };
            $('#the-basics .typeahead').typeahead({
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
</head>
<body>

<form method = "get" action="hostels-in-kathmandu.php" autocomplete="off" onsubmit="return validateForm()">

    <div class="ui selection dropdown" style="
									font-size: 16px;
									position: relative;
									right: 5px;
									min-width: 150px;
									">
        <input type="hidden" name="gender" id = "genderSelect">
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
    <!-- <div class="ui search dropdown selection" style="font-size: 16px; min-width: 300px;">
         <select id="result" name="location">
             <option value="">Location</option>
         </select>
         <input class="search" tabindex="0">
         <div class="default text">
             Location
         </div><div class="menu" tabindex="-1"></div>
     </div>
     <button class="ui orange submit button" style="
                                     font-size: 16px;
                                     margin-left: 10px;
                                     ">
         <i class="search icon"></i>Search
     </button>-->

    <div id="the-basics">
        <input class="typeahead" type="text" placeholder="Location" onfocus="myfunction();">
    </div>
</form>
<script src="js/main.js"></script>
<script src="bootstrap/bootstrap.js"></script>
</body>
</html>