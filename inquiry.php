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
					<h4 class="modal-title" id="myModalLabel"> Inquiry about {{this hostel}} </h4>
				</div>
				<div class="modal-body">
					<form class="ui form" method="post" id="feedback_form">
						<div  class="two fields">
							<div class="field">
								<label>Name</label>
								<div class="ui corner labeled input">
									<input placeholder="Name" type="text" id="name" name="name" maxlength="50" size="30" required="true">
									<div class="ui corner label">
										<i class="asterisk icon"></i>
									</div>
								</div>
							</div>
							<div class="field">
								<label>Email Address</label>
								<div class="ui corner labeled input">
									<input placeholder="Email" type="text" id = "email" name="email" maxlength="80" size="30" required="true">
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
									<input placeholder="Contact Number" type="text"  name="cno"  required="true">
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
											<input type="radio" name="rtype" checked="checked" value="1 Bed" id="rtype">
											<label>1 bed per room</label>
										</div>
									</div>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="2 Bed" id="rtype">
											<label>2 beds per room</label>
										</div>
									</div>
									<br/>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="3 Bed" id="rtype">
											<label>3 beds per room</label>
										</div>
									</div>
									<div class="field">
										<div class="ui radio checkbox">
											<input type="radio" name="rtype" value="4 Bed" id="rtype">
											<label>4 beds per room</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="field">
							<label>Message</label>
							<div class="ui corner labeled input">
								<textarea name="comments" id = "comments" maxlength="1000" cols="25" rows="6"required="true"></textarea>
								<!--<div class="ui corner label">
								<i class="asterisk icon"></i>
								</div>-->
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
