<script type="text/javascript">
    function onSubmitForm(){

        $("#inquiry_form").submit();
    }
    $(function() {
        $("#close_button").click(function(){

            $('#inquiry_form_div').removeClass('hide');
            $('#success_message_inquiry').addClass('hide');
        });
        $("#inquiry_form").submit(function(event) {

            var name = $("#name").val();
            var contact = $("#contact").val();
            var email = $("#email").val();
            var rtype = $('input[name="rtype"]:checked').val();
            var comments = $("#message").val();
            var hostel_id = $("#hostel_id").val();
            var hostel_name = $("#hostel_name").val();
            var dataString = 'name=' + name + '&contact=' + contact + '&rtype=' + rtype + '&message=' + comments
                +'&hostel_id='+ hostel_id + '&hostel_name=' + hostel_name + '&email=' + email;

            $.ajax({
                type : "POST",
                url : "save_inquiry.php",
                data : dataString,
                cache : false,
                success : function(html) {
                    if (html == "true") {
                        $('#inquiry_form_div').addClass('hide');
                        $('#success_message_inquiry').removeClass('hide');
                    }
                }
            });
            event.preventDefault();
            return false;
        });
    });
</script>
<div id="quickInquiry" data-toggle="modal" data-target="#myInquiry" id="feedback">
	<a href"#"="">
	<p class="ui header">
		<i class="large icons"> <i class="white inverted envelope icon" style="color: #E07B53;"></i> </i>
		Quick Inquiry
	</p> </a>
</div>

<!-- Modal -->
<div id="feedbackModal"  style="display: block;z-index: 99999;  position: absolute;">
	<div class="modal fade" id="myInquiry" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog modal-lg" >
			<div class="modal-content" id="inquiry_form_div">
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
					<h4 class="modal-title" id="myModalLabel"> Inquiry about <?php echo $name;?> </h4>
				</div>
				<div class="modal-body">
					<form class="ui form" method="post" id="inquiry_form">
						<div  class="two fields">
							<div class="field">
								<label>Name</label>
								<div class="ui corner labeled input">
									<input placeholder="Name" type="text" name="name" maxlength="50" size="30" required="true" id = "name">
									<div class="ui corner label">
										<i class="asterisk icon"></i>
									</div>
								</div>
							</div>
							<div class="field">
								<label>Email Address</label>
								<div class="ui corner labeled input">
									<input placeholder="Email" type="text" name="email" maxlength="80" size="30" required="true" id = "email">
									<div class="ui corner label">
										<i class="asterisk icon"></i>
									</div>
								</div>
							</div>
						</div>
						<div  class="two fields">
							<div class="field">
								<label>Contact Number</label>
								<div class="ui corner labeled input">
									<input placeholder="Contact Number" type="text"  name="phone"  required="true" id = "contact">
									<div class="ui corner label">
										<i class="asterisk icon"></i>
									</div>
								</div>
							</div>

							<div  style="display: inline-block; margin-left: 10px;">
								<label>Room Type</label>
								<div id="radioGap" class="inline fields">
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" checked="checked" value="1 Bed">
											<label>1 bed per room</label>
										</div>
									</div>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="2 Bed">
											<label>2 beds per room</label>
										</div>
									</div>
									<br/>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="3 Bed">
											<label>3 beds per room</label>
										</div>
									</div>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="4 Bed" >
											<label>4 beds per room</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="field">
                            <label for="comments">Message</label>
                            <div class="ui corner labeled input">
                                <textarea name="comments" id = "message" maxlength="1000" rows="10" cols="100"></textarea>
							</div>
						</div>
                <input type="hidden" value="<?php echo $id;?>" name="hostelId" id = "hostel_id">
                <input type="hidden" value="<?php echo $name;?>" name="hostelName" id = "hostel_name">
				<div class="modal-footer">
					<!--<button type="button" id = "close" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
					Close
					</button>-->
                    <button type="button" id="submit" class="ui orange submit button" name="submit" onclick="onSubmitForm();">
                        Submit
                    </button>
				</div>
				</form><!-- feedback form -->
			    </div><!-- /.modal-content -->
            </div>
			<div id ="success_message_inquiry" class="modal-content hide">
				<div class="modal-header">
					<button type="button" class="close"
					data-dismiss="modal" aria-hidden="true" style="
					font-size: 30px;
					margin-top: -5px;
					color: red;
					outline: 0;
					" id="close_button">
						&times;
					</button>
					<h4 id="messageFeedback" class="modal-title"><img style="width: 150px;" src="img/thanks.png"/>
					<br>
					<br>
					<br>
					<div>
						Thanks for taking the time to fill out our Inquiry form, we will be back to you soon.
					</div>
					<br>
					<br>
					<div style="color: #000;">
						-The MeroHostel Team
					</div></h4>
				</div>
			</div>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
