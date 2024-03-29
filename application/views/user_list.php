
<?php echo show_msg();?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/chosen.min.css" />
		
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 <div class="container">
 <div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">User Master Table</h4>

		<div class="widget-toolbar">
			<a href="#modal-wizard-spg-user" data-toggle="modal" class="pink">
				
				<button class="btn btn-success" id="import" > Create SPG User</button> 
			</a>

			<a href="#modal-wizard-user" data-toggle="modal" class="pink" >
			<button class="btn btn-info" > Create User</button> 
			</a>
		</div>

	</div>
	<div class="widget-body ">
		<div class="widget-main">	
		
<table id="simple-table" class="table  table-bordered table-hover">
	<thead>
		<tr>
			<th class="center">
				<label class="pos-rel">
					
					<span class="lbl">Sr.No</span>
				</label>
			</th>
			
			<th>Company Id</th>
			<th>Company Name</th>
			<th >Username Name</th>

			<th>
				Email Id	
			</th>
			<th>
				Access Code
			</th>

			<th>Action</th>

			<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<?php $count =0;
		foreach ($result as $key) {
			$count++;			
		?>
		<tr>
			<td class="center">
				<label class="pos-rel">
					
					<span class="lbl"><?php echo $count; ?></span>
				</label>
			</td>
			<td>
				<a href="#"><?php echo $key->emp_id;?></a>
			</td>
			<td><?php echo $key->emp_name;?></td>
			<td class="hidden-480"><?php echo $key->entity_name;?></td>
			<td><?php echo $key->dept;?></td>

			
			<td class="hidden-480">
				<span class="label label-sm label-warning"><?php echo $key->designation;?></span>
			</td>
			<td class="hidden-480">
				<!-- <span class="label label-sm label-warning">Expiring</span> -->

			</td>
			<td class="center">
				<div class="action-buttons">
					<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
						<i class="ace-icon fa fa-angle-double-down"></i>
						<span class="sr-only">Details</span>
					</a>
				</div>
			</td>

			
		</tr>

		<tr class="detail-row">
			<td colspan="8">
				<div class="table-detail">
					<div class="row">
						<div class="col-xs-4 col-sm-4">
							<div class="profile-user-info profile-user-info-striped">
								<div class="profile-info-row">
									<div class="profile-info-name"> Employee Name </div>

									<div class="profile-info-value">
										<span><?php echo $key->emp_name;?></span>
									</div>
								</div>
								<div class="profile-info-row">
									<div class="profile-info-name"> Date of Birth </div>

									<div class="profile-info-value">
										<span><?php echo $key->birth_date;?></span>
									</div>
								</div>
								<div class="profile-info-row">
									<div class="profile-info-name"> Gender </div>

									<div class="profile-info-value">
										<span><?php echo $key->gender;?></span>
									</div>
								</div>
								<div class="profile-info-row">
									<div class="profile-info-name"> Current Address </div>

									<div class="profile-info-value">
										<span><?php echo $key->temp_address;?></span>
									</div>
								</div>
								<div class="profile-info-row">
									<div class="profile-info-name"> Email Address </div>

									<div class="profile-info-value">
										<span><?php echo $key->email;?></span>
									</div>
								</div>
								<div class="profile-info-row">
									<div class="profile-info-name"> Employee Phone Number </div>

									<div class="profile-info-value">
										<span><?php echo $key->mob;?></span>
									</div>
								</div>


							</div>
						</div>

						<div class="col-xs-4 col-sm-4">
							<div class="space visible-xs"></div>

							<div class="profile-user-info profile-user-info-striped">
								<div class="profile-info-row">
									<div class="profile-info-name"> Bank Name </div>

									<div class="profile-info-value">
										<span><?php echo $key->bank_name;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Branch Name </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span><?php echo $key->bank_branch;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name">Account Number </div>

									<div class="profile-info-value">
										<span><?php echo $key->bank_ac;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> IFSC Code </div>

									<div class="profile-info-value">
										<span><?php echo $key->ifsc;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> PAN Number </div>

									<div class="profile-info-value">
										<span><?php echo $key->pan;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> AADHAR Number </div>

									<div class="profile-info-value">
										<span><?php echo $key->adhaar;?></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-4 col-sm-4">
							<div class="space visible-xs"></div>

							<div class="profile-user-info profile-user-info-striped">
								<div class="profile-info-row">
									<div class="profile-info-name"> Company Name </div>

									<div class="profile-info-value">
										<span><?php echo $key->entity_name;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Department </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span><?php echo $key->dept;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Designation </div>

									<div class="profile-info-value">
										<span><?php echo $key->designation;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Location </div>

									<div class="profile-info-value">
										<span><?php echo $key->location;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Join Date </div>

									<div class="profile-info-value">
										<span><?php echo $key->join_date;?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Exiting Date </div>

									<div class="profile-info-value">
										<span><?php echo $key->exit_date;?></span>
									</div>
								</div>
								<button> Know More..</button>
							</div>
						</div>>
					</div>
				</div>
			</td>
		</tr>
	<?php }?>
		
	</tbody>
</table>
</div>	
	</div>
</div>	
<?php echo $links; ?>
</div>


		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/dataTables.select.min.js"></script>										
		<script type="text/javascript">
			jQuery(function($) {
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				// $('#import').on('click', function(){
					
				// 	 $('.widget-main').toggle();
				// });
			
			
			})
		</script>



		<script src="<?php echo base_url();?>assets/dashboard/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/spinbox.min.js"></script>
	<!-- 	<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/dashboard/js/moment.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/daterangepicker.min.js"></script>
		<!-- <script src="assets/js/bootstrap-datetimepicker.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/dashboard/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/autosize.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.inputlimiter.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/bootstrap-tag.min.js"></script>













<div id="modal-wizard-spg-user" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div id="container">
				<div class="modal-header">
					<h4>Create Spg User</h4>
				</div>
				 <?php 
		$attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
		 echo form_open_multipart('-----',$attributes );?>	
				<div class="modal-body">
					

					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Company Id</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Company Name</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Email Id</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">UserName</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Password</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Confirm Password</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Access Code</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">User Type</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>



				</div>
			</div>

			<div class="modal-footer wizard-actions">
				

				<button class="btn btn-success btn-sm btn-next" data-last="Finish">
					submit
					<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
				</button>

				<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>
					Cancel
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div><!-- PAGE CONTENT ENDS -->




<div id="modal-wizard-user" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div id="container">
				<div class="modal-header">
					<h4>Create User</h4>
				</div>
<?php 
		$attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
		 echo form_open_multipart('-----',$attributes );?>	
				<div class="modal-body">
					 

					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Company Id</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Company Name</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Email Id</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">UserName</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Password</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Confirm Password</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Access Code</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>

					
					<div class="form-group ">
						<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">User Type</label>

						<div class="col-xs-12 col-sm-5">
							<span class="block input-icon input-icon-right">
								<input type="text" id="inputWarning" class="width-100" />
								<i class="ace-icon fa fa-leaf green"></i>
							</span>
						</div>
						<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
					</div>



				</div>
			</div>

			<div class="modal-footer wizard-actions">
				

				<button class="btn btn-success btn-sm btn-next" data-last="Finish">
					submit
					<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
				</button>

				<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>
					Cancel
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>