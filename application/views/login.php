<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Ayolulus.in</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css">
        <style>
            .loader {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: #F5F8FA;
                z-index: 9998;
                text-align: center;
            }

            .plane-container {
                position: absolute;
                top: 50%;
                left: 50%;
            }
        </style>
    <!-- Js -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left"><div class="circle"></div></div>
                <div class="gap-patch"><div class="circle"></div></div>
                <div class="circle-clipper right"><div class="circle"></div></div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left"><div class="circle"></div></div>
                <div class="gap-patch"><div class="circle"></div></div>
                <div class="circle-clipper right"><div class="circle"></div></div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left"><div class="circle"></div></div>
                <div class="gap-patch"><div class="circle"></div></div>
                <div class="circle-clipper right"><div class="circle"></div></div>
            </div>
            <div class="spinner-layer spinner-green">
                <<div class="circle-clipper left"><div class="circle"></div></div>
                <div class="gap-patch"><div class="circle"></div></div>
                <div class="circle-clipper right"><div class="circle"></div></div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <main>
        <div id="primary" class="p-t-b-100 height-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-md-auto">
                        <div class="shadow r-10">
                        <div class="row grid">
                            <div class="col-md-5 white p-5">
                               <div class="mb-5">
                                   <img src="<?php echo base_url() ?>assets/img/basic/logo.jpg" width="100" alt="">
                               </div>
                                <form class="form-material" action="<?php echo site_url('login/auth') ?>" method="post">
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="username"/>
                                                <label class="form-label">Username</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password"/>
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm pl-4 pr-4">Masuk</button>
                                        <div class="pt-5 pb-5"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-7 blue p-5 text-white">
                                <i class="icon-circle-o s-36"></i>
                                <h1 class="mt-3">Siap Bimbingan?</h1>
                            <div class="pt-3 mb-5">
                                <p>Mulai bimbingan tugas akhir Anda sekarang, jangan biarkan wisudamu terlambat</p>
                            </div>
                                <a href="<?php echo site_url('daftar') ?>" class="btn btn-info s-14 pl-4 pr-4">Buat Akun</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #primary -->
    </main>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<script src="<?php echo base_url() ?>assets/js/app.js"></script>
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>