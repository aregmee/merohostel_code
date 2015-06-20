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
</script>
<form method = "get" action="hostelList.php" autocomplete="off">
	<div class="ui selection dropdown" style=" margin-right: 4px;	min-width: 160px;">
		<input type="hidden" id="genderSelect" name="gender">
		<i class="dropdown icon"></i>
		<div class="default text">
			Gender
		</div>
		<div class="menu" onchange="hideDiv()">
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

	<div class="ui search dropdown selection" style=" min-width: 260px;">

		<select id="result" name="location" >
			<option value="">Location</option>
		</select><i class="dropdown icon"></i>
		<input class="search" tabindex="0">
		<div class="default text">
			Location
		</div><div class="menu" tabindex="-1"></div>
	</div>
	<!-- location -->

	<button class="ui orange submit button" style="
	font-size: 15px;
	margin-left: 10px;
	">
		<i class="search icon"></i>Search
	</button>
</form>