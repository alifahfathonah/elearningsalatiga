			<style>
				.switch {
					position: relative;
					display: block;
					vertical-align: top;
					width: 100px;
					height: 30px;
					padding: 3px;
					margin: 0 10px 10px 0;
					background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
					background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
					border-radius: 18px;
					box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
					cursor: pointer;
				}
				.switch-input {
					position: absolute;
					top: 0;
					left: 0;
					opacity: 0;
				}
				.switch-label {
					position: relative;
					display: block;
					height: inherit;
					font-size: 10px;
					text-transform: uppercase;
					background: #eceeef;
					border-radius: inherit;
					box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
				}
				.switch-label:before, .switch-label:after {
					position: absolute;
					top: 50%;
					margin-top: -.5em;
					line-height: 1;
					-webkit-transition: inherit;
					-moz-transition: inherit;
					-o-transition: inherit;
					transition: inherit;
				}
				.switch-label:before {
					content: attr(data-off);
					right: 11px;
					color: #aaaaaa;
					text-shadow: 0 1px rgba(255, 255, 255, 0.5);
				}
				.switch-label:after {
					content: attr(data-on);
					left: 11px;
					color: #FFFFFF;
					text-shadow: 0 1px rgba(0, 0, 0, 0.2);
					opacity: 0;
				}
				.switch-input:checked ~ .switch-label {
					background: #E1B42B;
					box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
				}
				.switch-input:checked ~ .switch-label:before {
					opacity: 0;
				}
				.switch-input:checked ~ .switch-label:after {
					opacity: 1;
				}
				.switch-handle {
					position: absolute;
					top: 4px;
					left: 4px;
					width: 28px;
					height: 28px;
					background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
					background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
					border-radius: 100%;
					box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
				}
				.switch-handle:before {
					content: "";
					position: absolute;
					top: 50%;
					left: 50%;
					margin: -6px 0 0 -6px;
					width: 12px;
					height: 12px;
					background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
					background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
					border-radius: 6px;
					box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
				}
				.switch-input:checked ~ .switch-handle {
					left: 74px;
					box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
				}
				
				/* Transition
				========================== */
				.switch-label, .switch-handle {
					transition: All 0.3s ease;
					-webkit-transition: All 0.3s ease;
					-moz-transition: All 0.3s ease;
					-o-transition: All 0.3s ease;
				}
			</style>
			<!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<div class="col-sm-12">
												<h2>Manajemen Mitra Kerja</h2>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>
											<!-- Add Mitra Kerja Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditMitra/'.$mitra[0]['id_mitra']);?>

													<div class="form-group">
														<label for="nama_mitraEdit">Username</label>
														<input type="text" class="form-control" id="nama_mitraEdit" name="nama_mitraEdit" placeholder="Masukkan Nama Mitra..." value="<?= $mitra[0]['nama_mitra'];?>" required>
													</div>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Add Mitra Kerja End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>