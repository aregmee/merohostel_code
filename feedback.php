<script type="text/javascript">
    $(function() {
        $("#submit").click(function(){

            $("#feedback_form").submit();
        });
        $("#feedback_form").submit(function (event) {
            //function countStars(){

            var stars = document.getElementById("stars").getElementsByTagName('i');
            var count = 0;
            for (var i = 0; i < stars.length; i++) {

                if (stars[i].classList == "icon active") {

                    count++;
                }
            }
            document.getElementById("rate").value = count;

            //document.getElementById("feedback").innerHTML = "Thank you for providing us your invaluable feedback";
            var rate = $("#rate").val();
            var recommend = "";
            var selected = $("input[type='radio'][name='recommend']:checked");
            if (selected.length > 0) {
                recommend = selected.val();
            }
            var user_type = "";
            selected = $("input[type='radio'][name='user_type']:checked");
            if (selected.length > 0) {
                user_type = selected.val();
            }
            var comments = $("#comments").val();
            var dataString = 'rate=' + rate + '&recommend=' + recommend + '&user_type=' + user_type + '&comments=' + comments;
            $.ajax({
                type: "POST",
                url: "send_feedback.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    if (html == "true") {
                        $('#feedback_form_div').addClass('hide');
                        $('#success_message').removeClass('hide');
                    }
                }
            });
            event.preventDefault();
            return false;
        });
    });
</script>
<div style="cursor: pointer; z-index: 1; position: relative;" data-toggle="modal" data-target="#myModal" id="feedback">
					<a href"#"=""><img src="img/feedback.png"></a>
				</div>

				<!-- Modal -->
				<div id="feedbackModal"  style="display: block;z-index: 99999;  position: absolute;">
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg" >
							<div class="modal-content" id="feedback_form_div">
								<div class="modal-header">
									<button type="button" class="close"
									data-dismiss="modal" aria-hidden="true" style="
									font-size: 30px;
									margin-top: -5px;
									color: red;
									  outline: 0;
									">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel"> Send us your feedback </h4>
								</div>
								<div class="modal-body">

									<form class="ui form" method="post" id="feedback_form">
										<div class="field">
											<label>How do you rate this site overall?</label>
											<div class="ui huge star rating" id="stars" data-rating="5" data-max-rating="5"></div>
                                            <input type="hidden" id="rate" name="rate">
										</div>
										<div class="inline fields">
											<label for="fruit">Would you recommend this site to a friend?</label>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" value="sure" checked="">
													<label>Sure</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" value="likely" >
													<label>Likely</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" value="may be">
													<label>May be</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" value="no">
													<label>Not</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" value="forget it">
													<label>Forget it</label>
												</div>
											</div>
										</div>
										<div class="inline fields">
											<label for="fruit">What type of user are you?</label>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="user_type" checked="" value="student">
													<label>Student</label>
												</div>
											</div>
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="user_type" value="hostel">
                                                    <label>Hostel</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="user_type" value="advertiser">
                                                    <label>Advertiser</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="user_type" value="worker">
                                                    <label>Worker</label>
                                                </div>
                                            </div>
										</div>
										<div class="field">
											<label>Any other comments</label>
											<div class="ui corner labeled input">
												<textarea name="comments" id = "comments" maxlength="1000" cols="25" rows="6"required="true"></textarea>
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
								</div>
								<div class="modal-footer">
									<!--<button type="button" id = "close" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
										Close
									</button>-->
                                    <button type="button" id="submit" class="ui orange submit button" name="submit">
                                        Submit
                                    </button>
                                        <!--<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>-->
								</div>
                                </form><!-- feedback form -->
							</div><!-- /.modal-content -->
                            <div id = "success_message" class="modal-content hide">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true" style="
									font-size: 30px;
									margin-top: -5px;
									color: red;
									  outline: 0;
									">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">Thanks for taking the time to fill out our feedback form, your opinions are important to us.<br> <p>-The MeroHostel Team</p></h4>
                                </div>
                            </div>
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div>