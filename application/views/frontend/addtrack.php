<div class="page-container">
<!-- Page content -->
  <div class="page-content">

<!-- Main content -->
    <div class="content-wrapper">

<!-- Registration form -->

      <div class="panel panel-flat">
<!-- Wizard with validation -->
              <div class="panel panel-white">
          <div class="panel-heading">
            <h6 class="panel-title">Follow Up Data</h6>
          </div>

            
            <?php echo form_open('HomeController/addingtrack',['class'=>'stepy-validation']);?>
            <?php echo form_hidden('lead_id',$lead_data->lead_id)?>
            <?php if(!($next_track_data == NULL)) { ?>
              <fieldset title="1">
                <legend class="text-semibold">Follow Up Details</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                    
                      <?php if(!($lead_data->associate_id == NULL)) {?>
                        <label>Associate ID:</label>
                        <input type="text" name="Associate ID" class="form-control required" value="<?= $lead_data->associate_id?>" readonly/>
                      <?php } else { ?>
                        <label>Admin ID:</label>
                        <input type="text" name="admin_id" class="form-control required" value="<?= $lead_data->admin_id?>" readonly/>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Brief Description: <span class="text-danger">*</span></label>
                          <textarea name="additional_massage" rows="4" cols="4" placeholder="Brief Description about the conversation" class="form-control required"></textarea>
                      </div>
                  </div>                
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Priority:</label>
                      <input type="hidden" name="Priority" value="<?=$next_track_data->priority?>">
                      <select data-placeholder="Select Priority" class="select"  id="TrackStatus" name="Priority" disabled>
                        <option></option>
                        <option value="High" <?=$next_track_data->priority == 'High' ? ' selected="selected"' : '';?>>High</option>
                        <option value="Medium" <?=$next_track_data->priority == 'Medium' ? ' selected="selected"' : '';?>>Medium</option> 
                        <option value="Low" <?=$next_track_data->priority == 'Low' ? ' selected="selected"' : '';?>>Low</option>               
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Follow Up Status: <span class="text-danger">*</span></label>
                      <input type="hidden" name="TrackStatus" value="<?=$next_track_data->status?>">
                      <select data-placeholder="Select Status" class="select required"  id="TrackStatus" name="TrackStatus" disabled>
                        <option></option>
                        <option value="Call or Enquiry" <?=$next_track_data->status == 'Call or Enquiry' ? ' selected="selected"' : '';?>>Call or Enquiry</option>
                        <option value="Appointment" <?=$next_track_data->status == 'Appointment' ? ' selected="selected"' : '';?>>Appointment</option> 
                        <option value="Business Proposal" <?=$next_track_data->status == 'Business Proposal' ? ' selected="selected"' : '';?>>Business Proposal</option>
                        <option value="Confirmation" <?=$next_track_data->status == 'Confirmation' ? ' selected="selected"' : '';?>>Confirmation</option>
                        <option value="Dispatch" <?=$next_track_data->status == 'Dispatch' ? ' selected="selected"' : '';?>>Dispatch</option>
                        <option value="Re-purchase Evaluation" <?=$next_track_data->status == 'Re-purchase Evaluation' ? ' selected="selected"' : '';?>>Re-purchase Evaluation</option>
                        <option value="Re-purchase Decision" <?=$next_track_data->status == 'Re-purchase Decision' ? ' selected="selected"' : '';?>>Re-purchase Decision</option>
                        <option value="Cancelled" <?=$next_track_data->status == 'Cancelled' ? ' selected="selected"' : '';?>>Cancelled</option>              
                      </select>
                    </div>
                  </div>
                </div>
              </fieldset>
            <?php } else { ?>
              <fieldset title="1">
                <legend class="text-semibold">Follow Up Details</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                    
                      <?php if(!($lead_data->associate_id == NULL)) {?>
                        <label>Associate ID:</label>
                        <input type="text" name="Associate ID" class="form-control required" value="<?= $lead_data->associate_id?>" readonly/>
                      <?php } else { ?>
                        <label>Admin ID:</label>
                        <input type="text" name="admin_id" class="form-control required" value="<?= $lead_data->admin_id?>" readonly/>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Brief Description: <span class="text-danger">*</span></label>
                          <textarea name="additional_massage" rows="4" cols="4" placeholder="Brief Description about the conversation" class="form-control required"></textarea>
                      </div>
                  </div>                
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Priority:</label>
                      <input type="hidden" name="Priority" value="High">
                      <select data-placeholder="Select Priority" class="select"  id="TrackStatus" name="Priority" disabled>
                        <option value="High">High</option>                        
                        <option value="Medium">Medium</option> 
                        <option value="Low">Low</option>               
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Follow Up Status: <span class="text-danger">*</span></label>
                      <input type="hidden" name="TrackStatus" value="Call">
                      <select data-placeholder="Select Status" class="select required"  id="TrackStatus" name="TrackStatus" disabled>
                        <option value="Call">Call</option>
                        <option value="CallBack">Call Back</option> 
                        <option value="Appointment">Appointment</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>               
                      </select>
                    </div>
                  </div>
                </div>
              </fieldset>
            <?php } ?>

            <fieldset title="2">
              <legend class="text-semibold">What's Next?</legend>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Follow Up Status: <span class="text-danger">*</span></label>
                    <select data-placeholder="Select Status" class="select required"  id="TrackStatus" name="nextfollowup">
                      <option></option>
                      <option value="Call or Enquiry">Call or Enquiry</option>
                      <option value="Appointment">Appointment</option> 
                      <option value="Business Proposal">Business Proposal</option>
                      <option value="Confirmation">Confirmation</option>
                      <option value="Dispatch">Dispatch</option>
                      <option value="Re-purchase Evaluation">Re-purchase Evaluation</option>
                      <option value="Re-purchase Decision">Re-purchase Decision</option>
                      <option value="Cancelled">Cancelled</option>             
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Priority: <span class="text-danger">*</span></label>
                    <select data-placeholder="Select Priority" class="select required"  id="next_track_priority" name="nextpriority">
                      <option></option>
                      <option value="High">High</option>                        
                      <option value="Medium">Medium</option> 
                      <option value="Low">Low</option>               
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label class="birth">Next Date: <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                    <input type="text" class="form-control required" id="anytime-both" name="upcoming_date" placeholder="Select Dtate">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Follow Up Description: <span class="text-danger">*</span></label>
                    <textarea name="followup" rows="4" cols="4" placeholder="Brief Description about the conversation" class="form-control required"></textarea>
                  </div>
                </div>
              </div>
            </fieldset>
            <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>
          </form>
              </div>
              <!-- /wizard with validation -->
            </div>
          </div>
        </div>
      </div>

      


               

