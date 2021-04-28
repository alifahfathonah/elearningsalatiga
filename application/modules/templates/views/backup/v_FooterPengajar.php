		
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		<script type="text/javascript">
				<?php if ($this->session->flashdata('success')) {?>
						toastr.success("<?php echo $this->session->flashdata('success'); ?>");
				<?php } elseif ($this->session->flashdata('error')) {?>
						toastr.error("<?php echo $this->session->flashdata('error'); ?>");
				<?php } elseif ($this->session->flashdata('warning')) {?>
						toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
				<?php } elseif ($this->session->flashdata('info')) {?>
						toastr.info("<?php echo $this->session->flashdata('info'); ?>");
				<?php }?>
		</script>

		<script src="<?= base_url('frontend');?>/assets/js/popper.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- Datepicker -->
		<script src="<?= base_url('frontend') ?>/assets/js/bootstrap-datepicker.js"></script>

		<!-- Datatable js -->
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

		<!-- Include Modjs -->
		<script src="
			<?php
                    if ($this->uri->segment('2')==''||$this->uri->segment('2')==null) {
                        echo base_url('modjs/'.$this->uri->segment('1').'.js');
                    } else {
                        echo base_url('modjs/'.$this->uri->segment('1').'/'.$this->uri->segment('2').'.js');
                    };
        ;?>">
		</script>
	</body>
</html>