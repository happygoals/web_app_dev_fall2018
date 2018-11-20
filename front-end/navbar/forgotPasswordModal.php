<script>
	// Validates Email types
	function ValidateEmail() {
		var mail = document.getElementById('forgotPasswordEmail').value;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
    		return true;
		}
		alert("The email address you provided is invalid!");
		return false;
	}
</script>

<div aria-hidden="true" aria-labelledby="mySmallModalLabel" class="modal fade bs-modal-sm" id="forgot-password" role="dialog" tabindex="1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="myModalLabel">Password will be sent here.</h6>
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" onsubmit="return ValidateEmail()" method="POST">
					<fieldset>
						<div class="group">
							<input class="input" required="" type="text" id="forgotPasswordEmail" name="forgotPasswordEmail"><span class="highlight"></span><span class="bar"></span> <label class="label" for="forgotPasswordEmail">Email address</label>
						</div>
						<div class="control-group">
							<label class="control-label" for="forgotPassword"></label>
							<div class="controls">
								<button type="submit" class="btn btn-primary btn-block" id="forgotPassword" name="forgotPassword">Send</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>