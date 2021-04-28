            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h3> <b>Dashboard</b> <small class="text-muted"></small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="isi">
                                    <div class="col-sm-12">
                                        Hai <b> <?= $this->session->userdata('username') ;?></b>
                                    </div>

                                    <div class="col-sm-12">
                                        <h2>Selamat Datang Di E-Learning System SMK Muhammadiyah 1 Purbalingga</h2>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                Anda Berada Di Kelas
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-6">
                                                <?= $kelas_det[0]['nama_kelas'] ;?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                Wali Kelas Anda Adalah
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-6">
                                                <?= $kelas_det[0]['nama_guru'] ;?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                Ketua Kelas Anda Adalah
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-6">
                                                <?= $kelas_det[0]['nama_lengkap'] ;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>                  
                        </div>
                    </div>
                </div>