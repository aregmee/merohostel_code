	<div style="cursor: pointer;" data-toggle="modal" data-target="#myModal" id="feedback">
					<a href"#"><img src="img/feedback.png" /></a>
				</div>

				<!-- Modal -->
				<div id="feedbackModal"  style="display: block;z-index: 99999;  position: absolute;">
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg" >
							<div class="modal-content">
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

									<form class="ui form">
										<div class="field">
											<label>How do you rate this site overall?</label>
											<div class="ui huge star rating"  data-rating="3" data-max-rating="5"></div>
										</div>
										<div class="inline fields">
											<label for="fruit">Would you recommend this site to a friend?</label>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" checked="">
													<label>Sure</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend" >
													<label>Likely</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend">
													<label>May be</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend">
													<label>Not</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="recommend">
													<label>Forget it</label>
												</div>
											</div>
										</div>
										<div class="inline fields">
											<label for="fruit">What type of user are you?</label>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="uare" checked="">
													<label>Students</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="uare">
													<label>Affiliate</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
													<input type="radio" name="uare">
													<label>Hostel</label>
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

									</form><!-- feedback form -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
										Close
									</button>
									<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div>