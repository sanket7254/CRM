<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>

        <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/selects/select2.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/datatables_advanced.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
 <!-- /theme JS files -->

<style type="text/css">
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


<div class="page-container">
	<div id="toast" >
		<div id="img">
			Icon
		</div>
		<div id="desc">
			Admin addded successfuly:)
		</div>
	</div>
	<div class="page-content">
		<div class="content-wrapper">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">All Associates</h5>
				</div>

				<div class="row">
                    <div class="col-md-6 col-sm-6 col-6" style="margin-left: 19px;padding-bottom: 10px;">
                        <div class="btn-group">
                            <a href="<?php echo base_url('addassociate');?>" id="addRow" class="btn btn-info">
                                 Add New Associate<i class="fa fa-plus" style="color: white;"></i>
                            </a>
                        </div>
                    </div>
                </div>

				<table class="table table-bordered table-hover datatable-highlight">
					<thead>
						<tr>
							<th>Associate ID</th>
							<th>Profile Picture</th>
							<th>First Name</th>
                            <th>Contact No</th>
							<th>Email</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
                        <?php if (count( $associate )):
                            $i=1;
                                                
                            foreach ($associate as $associates ) :?>
                            <tr>
                                <td><?= $i; ?></td>                                    
                                <td>
                                	<?php  
                                        $base = base_url()."uploads/associate/";
                                        $path = $base.$associates->user_image;
                                    ?>
                                    <img src="<?= $path?>" width="50" height="50">
                                </td>
                                <td><?= $associates->firstname." ".$associates->lastname; ?></td>
                                <td><?= $associates->contact?></td>
                                <td><?= $associates->email ?></td>
                                <td>
                                    <?php $date = $associates->birth_date;
                                        $newdate = date('F d, Y', strtotime(str_replace('/', '-', $date)));
                                        echo $newdate;
                                    ?>
                                </td>
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
</div>


<?php if ($this->session->flashdata('success')): ?>
	<script>
	    var x = document.getElementById("toast")
	    x.className = "show";
	    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
	</script>
<?php endif; ?>
