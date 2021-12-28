
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

		


			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-lg-block">
						
					</div>
					
				
				</div>
				<div class="row">
					
				<?php foreach($data as $key=>$value){ ?>
					
				<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
								
								<h3 class="mt-3 mb-1 text-white"><?php echo $value->patient_name ?></h3>
								<p class="text-white mb-0"><?php echo $value->description ?></p>
								<p class="text-white mb-0"><?php echo $value->booking_date ?></p>
							</div>
							<!-- <ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Gender</span> <strong class="text-muted">Female	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted">Age: 24	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Height</span> <strong class="text-muted">1.5 M	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Weight</span> <strong class="text-muted">65 Kg	</strong></li>
							</ul> -->
                            <div class="card-footer border-0 mt-0">								
								<a href="<?php echo base_url() ?>admin/booking/checked/<?php echo $value->id ?>/<?php echo $value->doctor_id ?>"><button class="btn btn-primary  btn-block" <?php if($key!=0){echo "disabled";} ?> style="display:<?php if($value->status == 4){echo "none"; } ?>" >
									<i class="fas fa-check-square"></i> Checked							
								</button></a>	<br>

								<?php if($value->status == 4){ ?>
							<a href="<?php echo base_url() ?>admin/booking/unhold/<?php echo $value->id ?>/<?php echo $value->doctor_id ?>">	<button class="btn btn-danger btn-block">
								<i class="fas fa-pause"></i> Unhold							
								</button>	</a>
								<?php } else { ?>
									<a href="<?php echo base_url() ?>admin/booking/hold/<?php echo $value->id ?>/<?php echo $value->doctor_id ?>">	<button class="btn btn-danger btn-block">
								<i class="fas fa-pause"></i> Hold							
								</button>	</a>
								<?php } ?>
                            </div>
                        </div>
					</div>
					
					
					<?php } ?>
					</div>
                </div>
				
            </div>
			
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   
	
	<script>
		(function($) {
		 
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		   
		})(jQuery);
	</script>
	
