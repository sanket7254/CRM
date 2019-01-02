<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>
<!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/selects/select2.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/datatables_advanced.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
 <!-- /theme JS files -->
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
<div class="page-container">
    <div id="toast" >
        <div id="img">
            Icon
        </div>
        <div id="desc">
            Lead created successfuly:)
        </div>
    </div>
		<div class="page-content">
			<div class="content-wrapper">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">All Customers</h5>
					</div>
					<div class="row">
                        <div class="col-md-6 col-sm-6 col-6" style="margin-left: 19px;padding-bottom: 30px;">
                            <div class="btn-group">
                                <a href="<?php echo base_url('addcustomer');?>" id="addRow" class="btn btn-info">
                                     Add New Lead <i class="fa fa-plus" style="color: white;"></i>
                                </a>
                            </div>

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload Excel File</button>

                            <a href="HomeController/download_file" class="btn btn-info" >Download Excel Format</a><p>(Note : Supported file formats .xls, .xlsx)</p>
                        </div>
                    </div>

					<table class="table table-bordered table-hover datatable-highlight">
						<thead>
							<tr>
								<th>Lead ID</th>
								<th>Profile Picture</th>
								<th>Lead Name</th>
                                <th>Sales Funnel Status</th>
                                <th>Contact No</th>
								<th>Email</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<?php if (count( $lead_data )):
                                $i=1;
                                                    
                                foreach ($lead_data as $lead_datas ) :?>
                                <tr>
                                    <td><a href="<?php echo base_url();?>lead_details/<?=$lead_datas->lead_id?>"><?= $i; ?></a></td>                                    
                                    <td><a href="<?php echo base_url();?>lead_details/<?=$lead_datas->lead_id?>">
                                        <?php  
                                            $base = base_url()."uploads/";
                                            $path = $base.$lead_datas->user_image;
                                        ?>
                                        <img src="<?= $path?>" width="50" height="50"></a>
                                    </td>
                                    <td><a href="<?php echo base_url();?>lead_details/<?=$lead_datas->lead_id?>"><?= $lead_datas->firstname." ".$lead_datas->lastname ?></a></td>
                                    <td>
                                        <?php if($lead_datas->sales_funnel_status == "Awareness") {?>
                                            <p class="label" style="background-color: Tomato;"><?=$lead_datas->sales_funnel_status?></p>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Interest") { ?>
                                            <a class="label" style="background-color: Orange;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Evaluation") { ?>
                                            <a class="label" style="background-color: DodgerBlue;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Decision") { ?>
                                            <a class="label" style="background-color: MediumSeaGreen;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Purchase") { ?>
                                            <a class="label" style="background-color: SlateBlue;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Re-Evaluation") { ?>
                                            <a class="label" style="background-color: Violet;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } elseif($lead_datas->sales_funnel_status == "Re-Purchase") { ?>
                                            <a class="label" style="background-color: DarkGray;"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } else { ?>
                                            <a class="label label-danger"><?=$lead_datas->sales_funnel_status?></a>
                                        <?php } ?>

                                    </td>
                                    <td><?= $lead_datas->contact ?></td>
                                    <td><?= $lead_datas->email ?></td>
                                    <td>
                                        <?php $date = $lead_datas->created_at;
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

<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form method="post" id="import_form" enctype="multipart/form-data">
            <p><label>Select Excel File</label>
            <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
            <br />
            <input type="submit" name="import" value="Import" class="btn btn-info" />
        </form>
      </div> 
    </div>
  </div>
</div>

<script type="text/javascript">
    function delete_customers()
    {
        var url="<?php echo base_url();?>";
        swal(
        {
            title: "Are you sure?",
            text: "You really want to delete this blog?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => 
        {
                                    
            if (willDelete)
            {
                window.location = url+"deleteblog/"+id+'/'+image;
                swal("Your file is deleted!",
                {
                    icon: "success",
                });
            }
            else
            {
                swal("Your file is safe!");
            }
        });
    }

    $(document).ready(function()
    {
        load_data();

        function load_data()
        {
            //alert('dfgv');
            $.ajax({
                url:"<?php echo base_url(); ?>excel_import/fetch",
                method:"POST",
                success:function(data)
                {
                    $('#customer_data').html(data);
                }
            })
        }

        $('#import_form').on('submit', function(event)
        {
            //alert('submit');
            $.ajax({
                url:"<?php echo base_url(); ?>excel_import/import",
                method:"POST",
                data:new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#file').val('');
                    load_data();
                    //alert(data);
                }
            })
        });

    });
</script>


<?php if($this->session->flashdata('lead_create') || $this->session->flashdata('lead_import')): ?>
    <script>
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    </script>
<?php endif; ?>

<?php if($this->session->flashdata('lead_import')): ?>
    <script>
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    </script>
<?php endif; ?>
