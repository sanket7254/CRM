<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/form_validation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/uploader_bootstrap.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>

<style type="text/css" href="">
#toast
{
  visibility: hidden;
  max-width: 50px;
  height: 50px;
  /*margin-left: -125px;*/
  margin: auto;
  background-color: green;
  color: #fff;
  text-align: center;
  border-radius: 2px;

  position: fixed;
  z-index: 1;
  left: 0;right:0;
  bottom: 30px;
  font-size: 17px;
  white-space: nowrap;
}
#toast #img
{
  width: 50px;
  height: 50px;
    
    float: left;
    
    padding-top: 16px;
    padding-bottom: 16px;
    
    box-sizing: border-box;

    
    background-color: #111;
    color: #fff;
}
#toast #desc
{

    
    color: #fff;
   
    padding: 16px;
    
    overflow: hidden;
  white-space: nowrap;
}

#toast.show
{
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
}

@-webkit-keyframes fadein
{
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein
{
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes expand
{
    from {min-width: 50px} 
    to {min-width: 350px}
}

@keyframes expand
{
    from {min-width: 50px}
    to {min-width: 350px}
}
@-webkit-keyframes stay
{
    from {min-width: 350px} 
    to {min-width: 350px}
}

@keyframes stay
{
    from {min-width: 350px}
    to {min-width: 350px}
}
@-webkit-keyframes shrink
{
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@keyframes shrink
{
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@-webkit-keyframes fadeout
{
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 60px; opacity: 0;}
}

@keyframes fadeout
{
    from {bottom: 30px; opacity: 1;}
    to {bottom: 60px; opacity: 0;}
}
</style>
<div class="row">

	<div class=" panel border-left-lg border-left-primary">
	<div class="col-sm-1">
		
	</div>
	<div class="col-sm-6 col-lg-3" style="margin-top: 10px;">
		<!-- User details (with sample pattern) -->
		<div class="content-group">
			<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
				<div class="content-group-sm">
					<h5 class="text-semibold no-margin-bottom">
						<b><?= $profile_data->firstname." ".$profile_data->lastname?><b>
					</h5><br>
				</div>

				<a href="#" class="display-inline-block content-group-sm">
					<?php
              $id=$this->session->userdata('adminid');
              $asso_id=$this->session->userdata('associateid');
              if(!($id == NULL)) { ?>
                <?php $base_path = base_url()."uploads/".$profile_data->user_image;?>
                <img src="<?= $base_path;?>" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
              <?php } else { ?>
                <?php $base_path = base_url()."uploads/associate/".$profile_data->user_image;?>
                <img src="<?= $base_path;?>" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
              <?php } ?>
				</a>

				<ul class="list-inline no-margin-bottom">
					<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon legitRipple"><i class="icon-phone"></i></a></li>
					<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon legitRipple"><i class="icon-bubbles4"></i></a></li>
					<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon legitRipple"><i class="icon-envelop4"></i></a></li>
				</ul>
			</div>

			<div class="panel panel-body no-border-top no-border-radius-top">
				<div class="form-group mt-5">
					<label class="text-semibold">Full name:</label>
					<span class="pull-left-sm"><?= $profile_data->firstname." ".$profile_data->lastname?></span>
				</div>

				<div class="form-group">
					<label class="text-semibold">Phone number:</label>
					<span class="pull-left-sm"><?= $profile_data->contact?></span>
				</div>

				<div class="form-group">
					<label class="text-semibold">Email:</label>
					<span class="pull-left-sm"><a href="#"><?= $profile_data->email?></a></span>
				</div>
        <br>
			</div>
		</div>

		<!-- Simple thumbnail with image -->
		<div class="thumbnail">
			<div class="thumb">
				<img src="assets/images/placeholder.jpg" alt="">

				<div class="caption-overflow">
					<span>
						<a href="#" class="btn btn-link btn-icon text-white legitRipple">
							<i class="icon-circle-right2 icon-2x"></i>
						</a>
					</span>
				</div>
			</div>

			<div class="caption">
				Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion...
			</div>
		</div>
		<!-- /simple thumbnail with image -->
	</div>
	<div class="panel-body" style="margin-top: 45px;">
	<div class="col-md-8" style="margin-top: -7px;">
              <?php echo form_open_multipart('HomeController/edit_profile',['class'=>'associate-profile-validation']);?>
              <?php echo form_hidden('user_image',$profile_data->user_image) ?>
              <div class="row">
                <div class="col-md-12 panel border-left-lg border-left-primary">
                  <fieldset>
                            <legend><i class="glyphicon glyphicon-user"></i> Associate details</legend>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>First name:</label>
                          <input type="text" name="firstname" placeholder="" onkeypress="return isCharacterKey(event)" class="form-control" value="<?= $profile_data->firstname?>" />
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Last name:</label>
                          <input type="text" name="lastname" placeholder="" onkeypress="return isCharacterKey(event)" class="form-control" value="<?= $profile_data->lastname?>" required/>
                        </div>
                      </div>
                  

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Email:</label>
                          <input type="email" name="email" id="email" onblur="cheq_e_mail(this);" placeholder="" class="form-control" value="<?= $profile_data->email?>"/>
                          <div id="msg_email" style="color:red"></div>
                          <?php echo form_error('email'); ?>
                        </div>
                      </div>
                      </div>
                  <div class="row">
                  <?php 
                    $page = basename($_SERVER['PHP_SELF']);
                  ?>
                    <div class="col-md-12">
                    <label>Address</label><br>
                    <textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter your address here"><?= $profile_data->address?></textarea>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>City:</label>
                        <input type="text" name="city" placeholder="city" onkeypress="return isCharacterKey(event)" class="form-control" value="<?= $profile_data->city?>" required />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>State/Province:</label>
                        <input type="text" name="state" placeholder="state" onkeypress="return isCharacterKey(event)" class="form-control" value="<?= $profile_data->state?>" required />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <option value="country" disabled selected>Country</option>
                      <select class="form-control" id="country" name="country">
                        <option value="select">Select...</option>
                        <option value="India" <?=$profile_data->country == 'India' ? ' selected="selected"' : '';?>>India</option> 
                        <option value="Us" <?=$profile_data->country == 'Us' ? ' selected="selected"' : '';?>>US</option> 
                        <option value="Cape Verde" <?=$profile_data->country == 'Cape Verde' ? ' selected="selected"' : '';?>>Cape Verde</option> 
                      </select>
                    </div>
                  </div>

                        <div class="row">
                      <div class="col-md-4">
                    <div class="form-group gender">
                    <label>Gender</label><br>
                    <?php if($profile_data->gender == "Male") {?>
                      <label class="radio-inline" name="gender">
                        <input type="radio" name="optradio" value="Male" checked="checked">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="Female">Female
                      </label>
                    <?php } else {?>
                      <label class="radio-inline" name="gender">
                        <input type="radio" name="optradio" value="Male" checked="checked">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="Female" checked="checked">Female
                      </label>
                    <?php } ?>
                  </div>
                  </div>
                  <div class="col-md-4">
                             <label class="birth">Date of Birth</label>
                              <lnput placeholder="text" type="text" /> 
                                  <input type="date"  class="form-control"  name="birth_date" value="<?= $profile_data->birth_date?>"></lnput>
                              </div>
                              <div class="col-md-4">
                        <div class="form-group">
                          <label>Contact<span class="required" style="color: #e02222;"> * </span>:</label>
                         <input type="text" class="form-control" onblur="cheq_number(this);" name="contact" id="number" maxlength="10" onkeypress="return isNumberKey(event)" value="<?= $profile_data->contact?>"/>
                         <div id="msg_contact" style="color:red"></div>
                        </div>
                      </div>
                </div><br>
                <div class="form-group">
                  <div class="form-group">
                    <input name="userfile" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary btn-xs" data-remove-class="btn btn-default btn-xs">
                    <span class="help-block">Choose Profile Picture</span>
                  </div>
                </div>
                   <div class="content"><br>
                  </fieldset>
                </div>
              </div>

              <div class="text-right">
                <button type="submit" class="btn btn-primary">Update Profile<i class="icon-arrow-right14 position-right"></i></button>
               <!--  <input type="submit" value="submit"> -->
              </div>
              </form>
            </div>
          </div>
          <div id="toast" >
            <div id="img">
              Icon
            </div>
            <div id="desc">
              Profile edited successfuly:)
            </div>
          </div>
      </div>
  </div>
</div>
<br><br><br><br>
<?php if($this->session->flashdata('edited')) { ?>
  <script>
      var x = document.getElementById("toast")
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
  </script>
<?php } ?>

<script type="text/javascript">
  function cheq_number()
  {
      var number=$("#number").val();
      var BASE_URL = "<?php echo base_url();?>";
      $.ajax(
      {
          url: BASE_URL+'HomeController/cheq_number',
          type: 'POST',
          data:  { 'number': number},
          dataType:'json',
          success: function(response) 
          {
            if (response == 'Success.')
            {
              $('#msg_contact').html('<span style="color: green;">'+'Success.'+"</span>");
            }
            else if(response == 'Contact Number Already Exist.')
            {
              $('#msg_contact').html('<span style="color: red;">'+'Number already Exist.'+"</span>");
            }
            else
            {
              $('#msg_contact').html('Please enter valid number.');
            }
          }
      });
  }

  function cheq_e_mail()
  {        
    var email=$("#email").val();
    var BASE_URL = "<?php echo base_url();?>";
    $.ajax(
    {
        url: BASE_URL+'HomeController/cheq_email',
        type: 'POST',
        data:  { 'email': email},
        dataType:'json',
        success: function(response) 
        {
          if (response == 'Success.')
          {
            $('#msg_email').html('<span style="color: green;">'+'Success.'+"</span>");
          }
          else if(response == 'Email Already Exist.')
          {
            $('#msg_email').html('<span style="color: red;">'+'Email already Exist.'+"</span>");
          }
          else
          {
            $('#msg_email').html('Please enter valid email.');
          }
        }
    });
  }

</script>
