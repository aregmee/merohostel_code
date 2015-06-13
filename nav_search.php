<div class="ui selection dropdown">
    <input type="hidden" id="genderSelect" name="gender">
    <i class="dropdown icon"></i>
    <div class="default text">
        Gender
    </div>
    <div class="menu" onchange="hideDiv()">
        <div class="item" data-value="boys" data-text="Male" value="boys">
            <i class="male icon"></i>
            Male
        </div>
        <div class="item" data-value="girls" data-text="Female" value="girls">
            <i class="female icon"></i>
            Female
        </div>
    </div>
</div>
<!-- gender -->

<div class="ui corner labeled input">
    <div class="ui local search">
        <div class="ui left icon input">
            <i class="world icon"></i>
            <input  style="border-radius: 4px;" type="text" placeholder="Enter Location" class="prompt" name="location">
            <div id="result">
            </div>
        </div>
    </div>
</div>
<!-- location -->

<button class="ui orange submit button" style="
								font-size: 16px;
								margin-left: 10px;
								">
    <i class="search icon"></i>Search
</button>