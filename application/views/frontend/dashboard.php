<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/selects/select2.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/datatables_advanced.js"></script>

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
.panel.custom {
    float: left;
    width: 100%;
    max-width: 160px;
    height: 250px;
    margin-left: 10px;
    background-color: white;
    overflow-y: auto;
}

::-webkit-scrollbar
{
	width: 12px;
	background-color: white;
}

::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: LightGrey;
}

.anchor
{
	color: black;
}

.row.panelbody1 {
    width: 100%;   
    display: inline;margin: auto;
    border: 2px;
    border-radius: 5px;
}
.head.element
{
	height: 35px;
	max-height: 35px;
	background-color: LightBlue;
}
.head.para
{
	font-size: 15px;
	text-align: center;
}
.panel.custom,.head.element
{
    border: 1px;
    border-radius: 10px;
}
.tab-pane.fade.has-padding
{
	height: 300px;
	max-height: 300px;
	overflow-y: auto;
}
</style>
<?php if ($this->session->flashdata('welcome')): ?>
        <script>
            swal({
                title: "Done",
                text: "<?php echo $this->session->flashdata('welcome'); ?>",
                icon: "success",
                timer: 1500,
                showConfirmButton: false,
                type: 'success'
            });
        </script>
<?php endif; ?>
	<?php
	$id=$this->session->userdata('adminid');
	$asso_id=$this->session->userdata('associateid');
	if(!($id == NULL))
	{ ?>
<div class="page-container"><!-- Page container -->		
	<div class="page-content"><!-- Page content -->			
		<div class="content-wrapper"><!-- Main content -->
			<!-- My messages -->
			<div class="row"><!-- Dashboard content -->
				<div class="col-lg-1">						
					<div class="panel" style="background-color: Tomato;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->awareness_num_rows(); ?></h3>
							Awareness Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">						
					<div class="panel" style="background-color: Orange;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->interest_num_rows(); ?></h3>
							Interest Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">						
					<div class="panel" style="background-color: DodgerBlue;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->evaluation_num_rows(); ?></h3>
							Evaluation Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">						
					<div class="panel" style="background-color: MediumSeaGreen;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->decision_num_rows(); ?></h3>
							Decision Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">						
					<div class="panel" style="background-color: SlateBlue;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->purchase_num_rows(); ?></h3>
							Purchase Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">
					<div class="panel" style="background-color: Violet;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;">
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->reevaluation_num_rows(); ?></h3>
							ReEvaluation Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="margin-left: 70px;">
					<div class="panel" style="background-color: DarkGrey;-webkit-clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);
clip-path: polygon(75% 0, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0 0);height: 200px;width: 182px;padding-left: 10px;">
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->repurchase_num_rows(); ?></h3>
							RePurchase Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
			</div><!-- /dashboard content -->
						<div class="panel panel-flat">
							
							<!-- /numbers -->


							<!-- Area chart -->
							<div id="messages-stats"></div>
							<!-- /area chart -->


							<!-- Tabs -->
		                	<ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
								<li class="active">
									<a href="#messages-awr" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: Tomato;">
										Awareness Phase
									</a>
								</li>

								<li>
									<a href="#messages-int" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: Orange;">
										Interest Phase
									</a>
								</li>

								<li>
									<a href="#messages-eva" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: DodgerBlue;">
										Evaluation phase
									</a>
								</li>

								<li>
									<a href="#messages-dec" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: MediumSeaGreen;">
										Decision phase
									</a>
								</li>

								<li>
									<a href="#messages-pur" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: SlateBlue;">
										Purchase phase
									</a>
								</li>

								<li>
									<a href="#messages-rev" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: Violet;">
										Re-Evaluation phase
									</a>
								</li>

								<li>
									<a href="#messages-rpu" class="text-size-small text-uppercase" data-toggle="tab" style="background-color: DarkGrey;">
										Re-Purchase phase
									</a>
								</li>
							</ul>
							<!-- /tabs -->


							<!-- Tabs content -->
							<div class="tab-content">
								<div class="tab-pane active fade in has-padding" id="messages-awr">
									<?php $name = $this->CountModel->awareness_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-int">
									<?php $name = $this->CountModel->interest_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-eva">
									<?php $name = $this->CountModel->evaluation_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-dec">
									<?php $name = $this->CountModel->decision_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-pur">
									<?php $name = $this->CountModel->purchase_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-rev">
									<?php $name = $this->CountModel->re_evaluation_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
								<div class="tab-pane fade has-padding" id="messages-rpu">
									<?php $name = $this->CountModel->re_purchase_names_num_rows();
										if(count($name)) :
											foreach ($name as $value) :?>
												<ul class="media-list">
													<li class="media">
														<div class="media-left">
															<?php $base = base_url()."uploads/";
                                            					$path = $base.$value->user_image; ?>
															<img src="<?= $path?>" class="img-circle img-sm" alt="">
														</div>
														
														<div class="media-body">
															<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

															<span class="display-block text-muted"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
														</div>
													</li>
												</ul>
											<?php endforeach; ?>
										<?php else: ?>
	                                        No Records Found.
	                                <?php endif; ?>
								</div>
							</div>
							<!-- /tabs content -->

						</div>
						<!-- /my messages -->
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Today's Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $next_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($next_track_data as $track_data ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>">
	                                        <?=  //print_r($lead_data);exit();
	                                        /*if( count( $data ))
	                                        	echo count($lead_data);exit();
	                                        	{
	                                        		foreach ($lead_data as $lead)
	                                        		{
	                                        			echo $lead->firstname." ".$lead->lastname; ;
	                                        		}
	                                        	}*/
	                                        	ucfirst($track_data->firstname)." ".ucfirst($track_data->lastname);
	                                        ?>
	                                    </td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$track_data->status."."?></h6>
														<p class="mb-15"><?=$track_data->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Next Date: &nbsp;
																<?php $date = $track_data->upcoming_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($track_data->priority == "High") {?>
																	<a class="label label-danger"><?=$track_data->priority?></a>
																<?php } elseif($track_data->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$track_data->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$track_data->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
			</div>

	                                    </td></a>
	                               </tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Today's Completed Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped" style="height: 400px;overflow-y: auto;">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $completed_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($completed_track_data as $completed_track_datas ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>"><?= ucfirst($completed_track_datas->firstname)." ".ucfirst($completed_track_datas->lastname) ?></td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$completed_track_datas->status."."?></h6>
														<p class="mb-15"><?=$completed_track_datas->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Date: &nbsp;
																<?php $date = $completed_track_datas->task_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($completed_track_datas->priority == "High") {?>
																	<a class="label label-danger"><?=$completed_track_datas->priority?></a>
																<?php } elseif($completed_track_datas->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$completed_track_datas->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$completed_track_datas->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
			</div>

	                                    </td></a>
	                               </tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Pending Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $pending_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($pending_track_data as $pending_data ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>"><?= ucfirst($pending_data->firstname)." ".ucfirst($pending_data->lastname) ?></td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$pending_data->status."."?></h6>
														<p class="mb-15"><?=$pending_data->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Date: &nbsp;
																<?php $date = $pending_data->upcoming_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($pending_data->priority == "High") {?>
																	<a class="label label-danger"><?=$pending_data->priority?></a>
																<?php } elseif($pending_data->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$pending_data->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$pending_data->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
									</tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
				</div>	
			</div>
		</div><!-- /main content -->
	</div><!-- /page content -->
</div><!-- /page container -->
	<?php } else { ?>
		<div class="page-container"><!-- Page container -->		
	<div class="page-content"><!-- Page content -->			
		<div class="content-wrapper"><!-- Main content -->
			<!-- My messages -->
			<div class="row"><!-- Dashboard content -->
				<div class="col-lg-1">						
					
				</div>
				<div class="col-lg-1">						
					<div class="panel" style="background-color: Tomato;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_awareness_num_rows($asso_id); ?></h3>
							Awareness Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">						
					<div class="panel" style="background-color: Orange;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_interest_num_rows($asso_id); ?></h3>
							Interest Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">						
					<div class="panel" style="background-color: DodgerBlue;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_evaluation_num_rows($asso_id); ?></h3>
							Evaluation Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">						
					<div class="panel" style="background-color: MediumSeaGreen;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_decision_num_rows($asso_id); ?></h3>
							Decision Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">						
					<div class="panel" style="background-color: SlateBlue;"><!-- Members online -->
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_purchase_num_rows($asso_id); ?></h3>
							Purchase Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">
					<div class="panel" style="background-color: Violet;">
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_reevaluation_num_rows($asso_id); ?></h3>
							ReEvaluation Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
				<div class="col-lg-1">
					<div class="panel" style="background-color: DarkGrey;">
						<div class="panel-body" align="center">
							<h3 class="margin"><?= $count = $this->CountModel->asso_repurchase_num_rows($asso_id); ?></h3>
							RePurchase Phase
							<div class="text-muted text-size-small"><br></div>
						</div>
					</div>
				</div>
			</div><!-- /dashboard content -->
			<div class="panel panel-flat">
				<div id="messages-stats"></div>
            	<ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
					<li class="active">
						<a href="#messages-awr" class="text-size-small text-uppercase" data-toggle="tab">
							Awareness Phase
						</a>
					</li>

					<li>
						<a href="#messages-int" class="text-size-small text-uppercase" data-toggle="tab">
							Interest Phase
						</a>
					</li>

					<li>
						<a href="#messages-eva" class="text-size-small text-uppercase" data-toggle="tab">
							Evaluation phase
						</a>
					</li>

					<li>
						<a href="#messages-dec" class="text-size-small text-uppercase" data-toggle="tab">
							Decision phase
						</a>
					</li>

					<li>
						<a href="#messages-pur" class="text-size-small text-uppercase" data-toggle="tab">
							Purchase phase
						</a>
					</li>

					<li>
						<a href="#messages-rev" class="text-size-small text-uppercase" data-toggle="tab">
							Re-Evaluation phase
						</a>
					</li>

					<li>
						<a href="#messages-rpu" class="text-size-small text-uppercase" data-toggle="tab">
							Re-Purchase phase
						</a>
					</li>
				</ul>
				<!-- /tabs -->

				<!-- Tabs content -->
				<div class="tab-content">
					<div class="tab-pane active fade in has-padding" id="messages-awr">
						<?php $name = $this->CountModel->asso_awareness_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email:</b> <?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-int">
						<?php $name = $this->CountModel->asso_interest_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-eva">
						<?php $name = $this->CountModel->asso_evaluation_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-dec">
						<?php $name = $this->CountModel->asso_decision_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-pur">
						<?php $name = $this->CountModel->asso_purchase_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-rev">
						<?php $name = $this->CountModel->asso_re_evaluation_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
					<div class="tab-pane fade has-padding" id="messages-rpu">
						<?php $name = $this->CountModel->asso_re_purchase_names_num_rows($asso_id);
							if(count($name)) :
								foreach ($name as $value) :?>
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<?php $base = base_url()."uploads/";
                                					$path = $base.$value->user_image; ?>
												<img src="<?= $path?>" class="img-circle img-sm" alt="">
											</div>
											
											<div class="media-body">
												<a href="<?php echo base_url();?>lead_details/<?=$value->lead_id?>"><?= ucfirst($value->firstname)." ".ucfirst($value->lastname); ?><span class="media-annotation pull-right"><?php $date = $value->created_at; $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;?></span></span></a>

												<span class="display-block text-muted" style="color: black;"><b>Email: </b><?=$value->email;?> <b>Contact no: </b><?= $value->contact;?></span>
											</div>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php else: ?>
                                No Records Found.
                        <?php endif; ?>
					</div>
				</div>
				<!-- /tabs content -->

			</div>
						<!-- /my messages -->
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Today's Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $next_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($next_track_data as $track_data ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>">
	                                        <?=  //print_r($lead_data);exit();
	                                        /*if( count( $data ))
	                                        	echo count($lead_data);exit();
	                                        	{
	                                        		foreach ($lead_data as $lead)
	                                        		{
	                                        			echo $lead->firstname." ".$lead->lastname; ;
	                                        		}
	                                        	}*/
	                                        	ucfirst($track_data->firstname)." ".ucfirst($track_data->lastname);
	                                        ?>
	                                    </td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$track_data->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$track_data->status."."?></h6>
														<p class="mb-15"><?=$track_data->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Next Date: &nbsp;
																<?php $date = $track_data->upcoming_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($track_data->priority == "High") {?>
																	<a class="label label-danger"><?=$track_data->priority?></a>
																<?php } elseif($track_data->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$track_data->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$track_data->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
			</div>

	                                    </td></a>
	                               </tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Today's Completed Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $completed_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($completed_track_data as $completed_track_datas ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>"><?= ucfirst($completed_track_datas->firstname)." ".ucfirst($completed_track_datas->lastname) ?></td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$completed_track_datas->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$completed_track_datas->status."."?></h6>
														<p class="mb-15"><?=$completed_track_datas->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Date: &nbsp;
																<?php $date = $completed_track_datas->task_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($completed_track_datas->priority == "High") {?>
																	<a class="label label-danger"><?=$completed_track_datas->priority?></a>
																<?php } elseif($completed_track_datas->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$completed_track_datas->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$completed_track_datas->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
			</div>

	                                    </td></a>
	                               </tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Pending Tasks</h5>
						</div>
						<table class="table datatable-basic table-striped">
							<thead>
								<tr>
									<th>Lead ID</th>
									<th>Lead Name</th>
	                                <th>Track Details</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count( $pending_track_data )):
	                                $i=1;
	                                                    
	                                foreach ($pending_track_data as $pending_data ) :?>
	                                <tr>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>"><?= $i; ?></td></a>                                    
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>"><?= $pending_data->firstname." ".$pending_data->lastname ?></td></a>
	                                    <td><a href="<?php echo base_url();?>lead_details/<?=$pending_data->lead_id?>">
	                                    	<div class="panel border-left-lg border-left-primary">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<h6 class="no-margin-top"><a href="#">What to do on next call?</a><br>#<?=$pending_data->status."."?></h6>
														<p class="mb-15"><?=$pending_data->description."."?></p>
													</div>

													<div class="col-md-6">
														<ul class="list task-details">
															<li>Date: &nbsp;
																<?php $date = $pending_data->upcoming_date;
																	$newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
																			echo $newdate;
																?>
															</li>
															<li>
										                		Priority: &nbsp; 
																<?php if($pending_data->priority == "High") {?>
																	<a class="label label-danger"><?=$pending_data->priority?></a>
																<?php } elseif($pending_data->priority == "Medium") { ?>
																	<a class="label label-primary"><?=$pending_data->priority?></a>
																<?php } else { ?>
																	<a class="label label-success"><?=$pending_data->priority?></a>
																<?php }?>
															</li>
														</ul>
													</div>
												</div>
											</div>
									</tr>
	                                <?php 
	                                $i++;
	                                endforeach; ?>

	                                <?php else: ?>
	                                    <tr>
	                                        <td colspan="3">
	                                            No Records Found.
	                                        </td>
	                                    </tr>
	                                <?php endif; ?>
	                        </tbody>
						</table>
					</div>
				</div>	
			</div>
		</div><!-- /main content -->
	</div><!-- /page content -->
</div><!-- /page container -->
	<?php } ?>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
	
