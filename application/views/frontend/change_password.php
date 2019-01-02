<div class="row" style="margin-top: 50px;">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-6">
		<!-- User details (with sample pattern) -->
		<div class="content-group">
			<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
				
				<h5 class="text-semibold no-margin-bottom">
					Change Password
				</h5>
			</div>
			<?php echo form_open('HomeController/confirm_change_password');?>
			<div class="panel panel-body no-border-top no-border-radius-top">
				<div class="row">
                	<div class="col-md-6">
                    	<div class="form-group">
                      		<label>Old Password:</label>
                      		<input type="password" name="old_password" id="old_password" placeholder="Please enter your old password." onblur="check_password(this);" class="form-control" required/>
                      		<div id="msg_password"></div>
                    	</div>
                  	</div>
                </div>

                <div class="row" id="new_pass" style="display: none;">
		            <div class="col-md-6">
		                <div class="form-group">
		                  <label>New Password:</label>
		                  <input type="password" name="password" id="password" placeholder="Enter your new password." class="form-control" required/>
		                </div>
		            </div>
              	</div>

              	<div class="row" id="conf_pass" style="display: none;">
	                <div class="col-md-6">
	                    <div class="form-group">
	                      <label>Confirm New Password:</label>
	                      <input type="password" name="confirm_password" id="confirm_password" onblur="new_confirm_password(this);" placeholder="Please Re-enter your password." class="form-control" required/>
	                      <div id="msg_incorrect_password" style="color:red"></div>
	                      <div id="msg_correct_password" style="color:green"></div>
	                    </div>
	                </div>
	            </div>

                <div class="text-right">
                	<button type="submit" class="btn btn-primary">Change Password <i class="icon-arrow-right14 position-right"></i></button>
        		</div>
	        </div>
	    	</form>
		</div>
	</div>
</div>
<br><br><br><br>

<script type="text/javascript">
	function check_password()
	{
		var old_password=$("#old_password").val();
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax(
		{
			url: BASE_URL+'HomeController/check_password',
			type: 'POST',
			data:  { 'old_password': old_password},
			dataType:'json',
			success: function(response) 
			{
				if (response == 'Success.')
				{
					$('#msg_password').html('<span style="color: green;">'+'Success.'+"</span>");
					$('#new_pass').show();
					$('#conf_pass').show();
				}
				else if(response == 'Please enter correct password.')
				{
					$('#msg_password').html('<span style="color: red;">'+'Please enter correct password.'+"</span>");
					$('#new_pass').hide();
					$('#conf_pass').hide();
				}
				else
				{
					$('#msg_password').html('<span style="color: red;">'+'Please enter password.'+"</span>");
					$('#new_pass').hide();
					$('#conf_pass').hide();
				}
			}
		});
	}
	
	function new_confirm_password()
	{
		document.getElementById("msg_correct_password").innerHTML ="";
		document.getElementById("msg_incorrect_password").innerHTML ="";
		var password = document.getElementById("password").value;
		var confirmpassword=document.getElementById("confirm_password").value;

		if(password!=confirmpassword)
		{
			document.getElementById("msg_correct_password").innerHTML ="";
			document.getElementById("msg_incorrect_password").innerHTML =("Password does not match.");
			document.getElementById("confirmpassword").value='';
		}
		else
		{
			document.getElementById("msg_incorrect_password").innerHTML ="";
			document.getElementById("msg_correct_password").innerHTML =("Password match.");
		}
	}
</script>


