<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/form_validation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/uploader_bootstrap.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  color: #ffff;
  border-radius: 2px;
  background-color: #3f51b5;
  font-size: 12px;
  border: 1px solid #3e549a;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
.swal-footer {
  background-color: rgb(245, 248, 250);
  margin-top: 32px;
  border-top: 1px solid #E9EEF1;
  overflow: hidden;
}
.swal-overlay {
  background-color: #3f51b5;
}
</style>
<?php if ($this->session->flashdata('error')): ?>
        <script>
            swal({
                title: "Done",
                text: "<?php echo $this->session->flashdata('error'); ?>",
                icon: "success",
                timer: 1500,
                showConfirmButton: false,
                type: 'success'
            });
        </script>
<?php endif; ?>
<div class="page-container">
    <div class="page-content">
      <div class="content-wrapper">      
          <div class="panel panel-flat">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
              <?php echo form_open_multipart('HomeController/associate_signup',['class'=>'associate-validation']);?>
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                            <legend><i class="glyphicon glyphicon-user"></i> Associate details</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>First name:</label>
                          <input type="text" name="firstname" placeholder="Enter your first name" onkeypress="return isCharacterKey(event)" class="form-control" required />
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Last name:</label>
                          <input type="text" name="lastname" placeholder="Enter your last name" onkeypress="return isCharacterKey(event)" class="form-control" required/>
                        </div>
                      </div>
                  

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Email<span class="required" style="color: #e02222;"> * </span>:</label>
                          <input type="email" name="email" id="email" onblur="cheq_e_mail(this);" placeholder="Enter your email address" class="form-control" required />
                          <div id="msg_email" style="color:red"></div>
                          <?php echo form_error('email'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Password:</label>
                          <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required />
                          <?php echo form_error('password'); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Confirm Password</label>
                          <input class="form-control" type="password"  name="confirmpassword"  placeholder="Re-enter your password" id="confirmpassword" onBlur="match_password()"/>
                        </div>
                        <div id="msg" style="color:red"></div>
                      </div>                        
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Address line:</label>
                          <input type="text" name="address" placeholder="Enter your address" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>City:</label>
                          <input type="text" name="city" placeholder="Enter your city" onkeypress="return isCharacterKey(event)" class="form-control" required />
                        </div>
                      </div>
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label>State/Province:</label>
                          <input type="text" name="state" placeholder="state" onkeypress="return isCharacterKey(event)" class="form-control" required />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <option value="country" disabled selected>Country</option>
                        <select class="form-control" id="country" name="country">
                        <option value="select">Select</option>
                        <<option value="India">India</option> 
                        <option value="Us">Us</option> 
                        <option value="Cape Verde">Cape Verde</option> 
                        </select>
                      </div> -->
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group gender">
                          <label>Gender</label><br>
                          <label class="radio-inline" name="gender">
                          <input type="radio" name="optradio" value="Male" checked>Male
                          </label>
                          <label class="radio-inline">
                          <input type="radio" name="optradio" value="Female">Female
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <p class="birth">Date of Birth</p>
                        <lnput placeholder="text" type="text" /> 
                        <input type="date"  class="form-control"  name="birth_date" />
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Contact<span class="required" style="color: #e02222;"> * </span>:</label>
                          <input type="text" class="form-control" placeholder="Enter your contact number" onblur="cheq_number(this);" name="contact" id="number" maxlength="10" onkeypress="return isNumberKey(event)" />
                          <div id="msg_contact" style="color:red"></div>
                        </div>
                      </div>
                    </div><br>
                <div class="form-group">
                  <div class="col-md-4">
                    <label>Caption</label><br>
                    <textarea rows="5" cols="5" class="form-control" name="caption" placeholder="Enter your caption here"></textarea>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <input name="userfile" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary btn-xs" data-remove-class="btn btn-default btn-xs">
                    <span class="help-block">Choose File</span>
                  </div>
                  </div>
                </div>
                   <div class="content"><br>
                  </fieldset>
                </div>
              </div>

              <div class="text-right">
                <button type="submit" class="btn btn-primary">Add Associate <i class="icon-arrow-right14 position-right"></i></button>
               <!--  <input type="submit" value="submit"> -->
              </div>
              </form>
            </div>
          </div>
        
        <!-- /2 columns form -->
        <!-- /registration form -->

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->

  </div>

  <script type="text/javascript">
      function match_password()
      {
        var password=document.getElementById("password").value;
        var confirmpassword=document.getElementById("confirmpassword").value;
            if(password!=confirmpassword)
            {
              document.getElementById("msg").innerHTML =("Password does not match.");
              document.getElementById("confirmpassword").value='';
              //document.getElementById("password").value='';
              // alert("password does not match");
            }
           /* else
            {
              document.getElementById("msg").innerHTML =("password match");
            }*/
      }
             
      function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
      }

      function isCharacterKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (!(charCode > 31 && (charCode < 48 || charCode > 57)))
        return false;
        return true;
      }

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
                  document.getElementById('email').value = "";
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

       <script type="text/javascript">
      function match_password()
      {
        /* alert("hi");*/
        var password=document.getElementById("password").value;
      /*  alert(password);*/
        var confirmpassword=document.getElementById("confirmpassword").value;
       /* alert(confirmpassword);*/
            if(password!=confirmpassword)
            {
              document.getElementById("msg").innerHTML =("Password does not match.");
              document.getElementById("confirmpassword").value='';
              //document.getElementById("password").value='';
              // alert("password does not match");
            }
           /* else
            {
              document.getElementById("msg").innerHTML =("password match");
            }*/
      }
    </script> 