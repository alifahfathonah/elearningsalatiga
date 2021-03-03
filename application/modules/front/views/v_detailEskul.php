<?php defined('BASEPATH') or exit('No direct script access allowed');?>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>EKSTRAKULIKULER</h3>
                    <img src="<?= base_url('frontend');?>/assets/images/eskul/<?= $eskul[0]['file'] ;?>" alt="<?= $eskul[0]['file'] ;?>" style="width:250px;heigth:250px;">
                    <h4><p><?= $eskul[0]['keterangan'] ;?></p></h4>
                </div>
            </div>
            <a href="<?= base_url('front');?>" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            <!-- end title -->
        
            <style>
                .kotak{
                    background-color:green;
                }
                .menjorok{
                    margin-left:20px;
                }
                .kotakinfo{
                    background-color:red;
                    width:750px;
                }
            </style>
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="message-box">
                        <div class="row">
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>