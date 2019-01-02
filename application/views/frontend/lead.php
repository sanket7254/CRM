<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
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
	@import url('https://fonts.googleapis.com/css?family=Montserrat');

.wrapper {
  position: relative;
  height: 12em;
}

.countdown-container {
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
}

.countdown {
  display: flex;
  transform-style: preserve3d;
  perspective: 500px;
  height: 10rem;
  width: 40em;
  margin: 0 auto;
}
.countdown.remove {
  animation: hide-countdown 1s cubic-bezier(0, 0.9, 0.56, 1.2) forwards;
  overflow: hidden;
}

.number, .separator {
  display: block;
  color: #333;
  height: 7rem;
  font-size: 7rem;
  position: relative;
  line-height: 7rem;
  text-align: center;
  width: 100%;
}

.separator {
  margin: 0 auto;
  width: 2rem;
}

.new, .old, .current {
  color: #333;
  position: absolute;
  border-radius: 1rem;
  height: 7rem;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}

.new {
  animation: show-new 0.4s cubic-bezier(0, 0.9, 0.5, 1.2) forwards;
}

.old {
  animation: hide-old 2s cubic-bezier(0, 0.9, 0.56, 1.2) forwards;
}

.countdown section {
  position: relative;
}

#js-days:after, #js-hours:after, #js-minutes:after, #js-seconds:after {
  content: "DAYS";
  position: absolute;
  text-align: center;
  left: 0;
  right: 0;
  bottom: -50px;
  font-size: 12px;
}
#js-hours:after {
  content: "HOURS";
}
#js-minutes:after {
  content: "MINUTES";
}
#js-seconds:after {
  content: "SECONDS";
}
@keyframes hide-countdown {
  to {
    height: 0;
    overflow: hidden;
  }
}
@keyframes show-new {
  0% {
    opacity: 0;
    transform: translate(-50%, -50%) translateY(-2rem) scale(0.8) rotateX(-20deg);
  }
  100% {
    transform: translate(-50%, -50%);
  }
}
@keyframes hide-old {
  0% {
    transform: translate(-50%, -50%);
  }
  100% {
    opacity: 0;
    transform: translate(-50%, -50%) translateY(-5rem) scale(0.5) rotateX(-75deg);
  }
}
</style>
<div class="row" style="margin-top: 50px;">
	<div class="col-md-1">
		
	</div>
	<div class="col-sm-6 col-lg-3">
		<!-- User details (with sample pattern) -->
		<div class="content-group">
			<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
				<div class="content-group-sm">
					<h5 class="text-semibold no-margin-bottom">
						<?= $lead_data->firstname." ".$lead_data->lastname; ?>
					</h5>

					<span class="display-block">Head of UX</span>
				</div>

				<div class="display-inline-block content-group-sm">
					<?php  
                        $base = base_url()."uploads/demo.jpg";
                    ?>
					<img src="<?= $base;?>" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
				</div>

				<ul class="list-inline no-margin-bottom">
					<li><a href="<?php echo base_url('addtrack');?>/<?= $lead_data->lead_id;?>" class="btn bg-blue-700 btn-rounded btn-icon">Add Follow Up</a></li>
					<?php echo form_hidden('lead_id',$lead_data->lead_id); ?>
				</ul>
			</div>

			<div class="panel panel-body no-border-top no-border-radius-top">
				<div class="form-group mt-5">
					<label class="text-semibold">Full name:</label>
					<span class="pull-right-sm"><?= $lead_data->firstname." ".$lead_data->lastname; ?></span>
				</div>

				<div class="form-group">
					<label class="text-semibold">Phone number:</label>
					<span class="pull-right-sm"><?= "+91"." ".$lead_data->contact; ?></span>
				</div>

				<div class="form-group">
					<label class="text-semibold">Corporate Email:</label>
					<span class="pull-right-sm"><a href="#">corporate@domain.com</a></span>
				</div>

				<div class="form-group no-margin-bottom">
					<label class="text-semibold">Personal Email:</label>
					<span class="pull-right-sm"><a href="#"><?= $lead_data->email?></a></span>
				</div>
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
	<div class="col-md-6">
		<?php if(!($next_track_data == NULL)) { ?>
			<div class="panel border-left-lg border-left-primary">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8">
							<h6 class="no-margin-top"><a href="task_manager_detailed.html">What to do on next call?</a><br>#<?=$next_track_data->status."."?></h6>
							<p class="mb-15"><?=$next_track_data->description."."?></p>
						</div>

						<div class="col-md-4">
							<ul class="list task-details">
								<li>Next Date: &nbsp;
									<?php $date = $next_track_data->upcoming_date;
										$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
												echo $newdate;
									?>
								</li>
								<li>
			                		Priority: &nbsp; 
									<?php if($next_track_data->priority == "High") {?>
										<a class="label label-danger"><?=$next_track_data->priority?></a>
									<?php } elseif($next_track_data->priority == "Medium") { ?>
										<a class="label label-primary"><?=$next_track_data->priority?></a>
									<?php } else { ?>
										<a class="label label-success"><?=$next_track_data->priority?></a>
									<?php }?>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
					<div class="heading-elements" id="hide_this_section">
						<span class="heading-text">Due Time: <span class="text-semibold">
							<div id="duetime">
						<?php $second_date = $next_track_data->upcoming_date;
								$first_date = $track_data[0]->created_at;

						 ?>
						 </div></span>
						 <input type="hidden" value="<?=$second_date;?>" name="second_date" id="second_date">
						 <input type="hidden" value="<?=$first_date;?>" name="first_date" id="first_date">
					</div>
					
					<section class="wrapper" id="hide_timer" >
					<section id="countdown-container" class="countdown-container">
					<article id="js-countdown" class="countdown" style="height: 15px;width: 10;">
					<section id="js-days" class="number"></section>
					<section id="js-separator" class="separator">:</section>
					<section id="js-hours" class="number"></section>
					<section id="js-separator" class="separator">:</section>
					<section id="js-minutes" class="number"></section>
					<section id="js-separator" class="separator">:</section>
					<section id="js-seconds" class="number"></section>
					</article>
					</section>
					</section>
				</div>
			</div>
			<?php } else{ ?>
				<div class="panel panel-body border-top-blue">
					<a>No records found.</a>
				</div>
			
		<?php }?>




		<div class="panel panel-body border-top-blue">
				<?php if(!($track_data == NULL)) { ?>
				<ul class="list-feed">
					<?php 
					$i=1; 
					foreach($track_data as $track_details) { ?>
					<li class="border-success-400">
						<div class="row">
							<div class="col-md-8">
								<h6 class="no-margin-top"><a href="">#<?=$track_details->status."."?></a></h6>
								<p class="mb-15"><?=$track_details->description."."?></p>
							</div>

							<div class="col-md-4">
								<ul class="list task-details">
									<li>Date: &nbsp;<?php $date = $track_details->created_at;
											$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
											echo $newdate;
									?></li>
									<li>
										Priority: &nbsp;
										<?php if($track_details->priority == "High") {?>
											<a class="label text-danger" style="font-size: 13px;"><?=$track_details->priority?></a>
										<?php } elseif($track_details->priority == "Medium") { ?>
											<a class="label text-primary" style="font-size: 13px;"><?=$track_details->priority?></a>
										<?php } else { ?>
											<a class="label text-success" style="font-size: 13px;"><?=$track_details->priority?></a>
										<?php }?>
									</li>
								</ul>
							</div>
						</div>
						<hr>
					</li>
					<?php $i++; } ?>
				</ul>
			<?php } else { ?>
            <div class="row">
              <div class="col-md-8">
                <h6 class="no-margin-top"><a href="">#Created.</a></h6>
                <p class="mb-15">Lead generated successfully. Now you can add follow up.</p>
              </div>

              <div class="col-md-4">
                <ul class="list task-details">
                  <li>Date: &nbsp;<?php $date = date('Y-m-d H:i:s');
                      $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
                      echo $newdate;
                  ?></li>
                  <li>
                    Priority: &nbsp;<a class="label text-danger" style="font-size: 13px;">High</a>
                  </li>
                </ul>
              </div>
            </div>
            <hr>
			<?php } ?>
			</div>
	</div>
</div>
<div class="heading-elements 1" style="height: 70px;">
	<p id="set_message" style="color: red;margin-left: 25px;margin-top: 10px;font-size: 30px;margin-bottom: 40px;"></p>
</div>
<br><br><br><br>
<script type="text/javascript">
	$(document).ready(function() {
	/*$('#duetime').on('load',function() {
		alert('in time');*/
  
  /*var targetDate  = document.getElementById('second_date').value;
  var now   = document.getElementById('first_date').value;*/

  var targetDate  = new Date(document.getElementById('second_date').value);
  var now   = new Date(document.getElementById('first_date').value);

  var check = new Date();

  if(targetDate<check)
  {
  	document.getElementById('hide_timer').style.display = "none";
  	document.getElementById('hide_this_section').style.display = "none";
  	document.getElementById("set_message").innerHTML = "Time is over.";
  }
  else
  {
  	  window.days = daysBetween(now, targetDate);
	  var secondsLeft = secondsDifference(now, targetDate);
	  window.hours = Math.floor(secondsLeft / 60 / 60);
	  secondsLeft = secondsLeft - (window.hours * 60 * 60);
	  window.minutes = Math.floor(secondsLeft / 60 );
	  secondsLeft = secondsLeft - (window.minutes * 60);
	  console.log(secondsLeft);
	  window.seconds = Math.floor(secondsLeft);
	  startCountdown();

	  if(days <= 0 && hours <= 4)
	  {
	  	alert("In hours");
	  	var BASE_URL = "<?php echo base_url();?>";
        $.ajax(
          {
              url: BASE_URL+'HomeController/send_email',
              dataType:'json',
              success: function(response) 
              {
                if (response == 'Success.')
                {

                }
                else
                {
                  
                }
              }
          });
	  }
  }
  
});
	/*});*/
var interval;

function daysBetween( date1, date2 ) {
  //Get 1 day in milliseconds
  var one_day=1000*60*60*24;

  // Convert both dates to milliseconds
  var date1_ms = date1.getTime();
  var date2_ms = date2.getTime();

  // Calculate the difference in milliseconds
  var difference_ms = date2_ms - date1_ms;
    
  // Convert back to days and return
  return Math.round(difference_ms/one_day); 
}

function secondsDifference( date1, date2 ) {
  //Get 1 day in milliseconds
  var one_day=1000*60*60*24;

  // Convert both dates to milliseconds
  var date1_ms = date1.getTime();
  var date2_ms = date2.getTime();
  var difference_ms = date2_ms - date1_ms;
  var difference = difference_ms / one_day; 
  var offset = difference - Math.floor(difference);
  return offset * (60*60*24);
}

function startCountdown() {
  $('#input-container').hide();
  $('#countdown-container').show();
  
  displayValue('#js-days', window.days);
  displayValue('#js-hours', window.hours);
  displayValue('#js-minutes', window.minutes);
  displayValue('#js-seconds', window.seconds);

  interval = setInterval(function() {
    if (window.seconds > 0) {
      window.seconds--;
      displayValue('#js-seconds', window.seconds);
    } else {
      // Seconds is zero - check the minutes
      if (window.minutes > 0) {
        window.minutes--;
        window.seconds = 59;
        updateValues('minutes');
      } else {
        // Minutes is zero, check the hours
        if (window.hours > 0)  {
          window.hours--;
          window.minutes = 59;
          window.seconds = 59;
          updateValues('hours');
        } else {
          // Hours is zero
          window.days--;
          window.hours = 23;
          window.minutes = 59;
          window.seconds = 59;
          updateValues('days');
        }
        // $('#js-countdown').addClass('remove');
        // $('#js-next-container').addClass('bigger');
      }
    }
  }, 1000);
}

function updateValues(context) {
  if (context === 'days') {
    displayValue('#js-days', window.days);
    displayValue('#js-hours', window.hours);
    displayValue('#js-minutes', window.minutes);
    displayValue('#js-seconds', window.seconds);
  } else if (context === 'hours') {
    displayValue('#js-hours', window.hours);
    displayValue('#js-minutes', window.minutes);
    displayValue('#js-seconds', window.seconds);
  } else if (context === 'minutes') {
    displayValue('#js-minutes', window.minutes);
    displayValue('#js-seconds', window.seconds);
  }
}

function displayValue(target, value) {
  var newDigit = $('<span></span>');
  $(newDigit).text(pad(value))
    .addClass('new');
  $(target).prepend(newDigit);
  $(target).find('.current').addClass('old').removeClass('current');
  setTimeout(function() {
    $(target).find('.old').remove();
    $(target).find('.new').addClass('current').removeClass('new');
  }, 900);
}

function pad(number) {
  return ("0" + number).slice(-2);
}
</script>


