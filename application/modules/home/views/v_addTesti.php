<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3> <b><?= $subbread ;?></b> <small class="text-muted"></small></h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="isi">
                            <div class="row">
                                <div class="col-sm-12">
                                <h2>Add Testimoni</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <?= validation_errors(); ?>
                                </div>
                                <!-- Add Administrator Start -->
                                <div class="col-sm-12">
                                    <?= form_open_multipart('Home/actionAddTestimoni');?>

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="<?= $this->session->userdata('username');?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Testimoni ...." required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="testimoni">Testimoni</label>
                                            <input type="text" class="form-control" id="testimoni" name="testimoni" placeholder="Masukkan Testimoni Kamu ...." required>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-sm" value="Submit"/>
                                        </div>
                                    <?= form_close() ;?>
                                </div>
                                <!-- Add Administrator End -->
                            </div>
                        </div>  
                    </div>
                </div>                  
            </div>
        </div>
    </div>