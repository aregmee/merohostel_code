<script type="text/javascript">
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
    function validateForm(){
        if($("#genderSelect").val()!='' && $("#result").val()!=''){
            return true;
        }else{
            alert("Please enter the required values");
            return false
        }
    }

</script>
<form method = "get" action="hostelList.php" autocomplete="off" onsubmit="return validateForm()">
    <div class="ui selection dropdown">
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

    <select class="ui search dropdown" id = "result" name="location">
        <option value="">Location</option>
    </select>
    <!-- location -->

    <button class="ui orange submit button" style="
                                    font-size: 16px;
                                    margin-left: 10px;
                                    ">
        <i class="search icon"></i>Search
    </button>
</form>