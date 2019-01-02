<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
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

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">

        <!-- Registration form -->
      
          <div class="panel panel-flat">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
              <?php echo form_open_multipart('HomeController/lead_signup');?>
              <div class="row">
              

                <div class="col-md-12">
                  <fieldset>
                            <legend><i class="glyphicon glyphicon-user"></i> Lead details</legend>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>First Name:</label>
                          <input type="text" name="firstname" placeholder="Enter your firstname" onkeypress="return isCharacterKey(event)" class="form-control" required />
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Last Name:</label>
                          <input type="text" name="lastname" placeholder="Enter your lastname" onkeypress="return isCharacterKey(event)" class="form-control" required/>
                        </div>
                      </div>
                  

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Email<span class="required" style="color: #e02222;"> * </span>:</label>
                          <input type="email" name="email" id="email" onblur="cheq_e_mail(this);" placeholder="Enter you email" class="form-control" required />
                          <div id="msg_email" style="color:red"></div>
                          <?php echo form_error('email'); ?>
                        </div>
                      </div>
                      </div>
                      <div class="row"> 
                        <div class="col-md-12">
                        <div class="form-group">
                      <label>Address:</label>
                      <textarea rows="3" cols="3"  name="additional_massage" class="form-control" placeholder="Enter your address here"></textarea>
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
                    <div class="col-md-4">
                        <div class="form-group">
                          <label>State:</label>
                          <input type="text" name="state" placeholder="Enter your state" onkeypress="return isCharacterKey(event)" class="form-control" required />
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
                    </div>
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
                                  <input type="date"  class="form-control"  name="birth_date" ></lnput>
                              </div>
                              <div class="col-md-4">
                        <div class="form-group">
                          <label>Contact<span class="required" style="color: #e02222;"> * </span>:</label>
                         <input type="text" class="form-control" placeholder="Enter your contact number" onblur="cheq_number(this);" name="contact" id="number" maxlength="10" onkeypress="return isNumberKey(event)" />
                         <div id="msg_contact" style="color:red"></div>
                        </div>
                      </div>
                </div><br>
                   <div class="content"><br>
                  </fieldset>
                </div>
              </div>
              
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Add Lead <i class="icon-arrow-right14 position-right"></i></button>
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
          url: BASE_URL+'HomeController/lead_cheq_number',
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
        url: BASE_URL+'HomeController/lead_cheq_email',
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