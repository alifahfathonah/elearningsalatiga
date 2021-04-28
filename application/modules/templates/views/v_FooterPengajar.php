				<footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-info d-block text-center text-sm-left d-sm-inline-block">SMK MUHAMADIYAH 1 PUBALINGGA</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">SMK MUHAMADIYAH 1 PUBALINGGA <i class="fa fa-graduation-cap text-danger"></i></span>
                    </div>
                </footer>
			<!-- partial -->
			</div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="<?= base_url('frontend');?>/assets/js/jquery.dataTables.js"></script> -->
    <script src="<?=base_url('frontend');?>/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url('frontend');?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('frontend');?>/assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url('frontend');?>/assets/js/script1.js"></script>
    <!-- Datatable js -->
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="<?= base_url('frontend');?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url('frontend');?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url('frontend');?>/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    <script>
        CKEDITOR.replace('ckeditor',{
            // uiColor:'#40c4ff'
            filebrowserImageBrowseUrl : '../vendor/kcfinder'
        });
    </script>
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