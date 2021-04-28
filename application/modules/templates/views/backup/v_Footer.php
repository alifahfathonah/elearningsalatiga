<?php defined('BASEPATH') or exit('No direct script access allowed');?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social Media</h3>
                        </div>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/smkmusaga/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/smkmuhammadiyah1purbalingga/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="www.youtube.com/channel/UCdPxEmrRUICmR3LLmasmjHg"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">smkmuh1pbg@yahoo.co.id</a></li>
                            <li><a href="http://smkmusaga.sch.id/">http://smkmusaga.sch.id/</a></li>
                            <li>Jl. Let. Jend. S. Parman PO BOX 125 Purbalingga</li>
                            <li>+61 281 - 895768</li>
                        </ul>
                    </div>
                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?= base_url('frontend');?>/assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('frontend');?>/assets/js/custom.js"></script>
	<script src="<?= base_url('frontend');?>/assets/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>