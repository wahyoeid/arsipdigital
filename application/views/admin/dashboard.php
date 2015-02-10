    
<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/amelia/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
    <title>.:: Digital Archiev Management System (DAMSys) <?=base64_decode($this->config->item('one')); ?>
      font-weight: 400;
      src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>aset/font/satu.woff) format('woff');
    }
    @font-face {
      font-family: 'Cabin';
      font-style: normal;
      font-weight: 700;
      src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>aset/font/dua.woff) format('woff');
    }
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster'), url(<?php echo base_url(); ?>aset/font/tiga.woff) format('woff');
    }   
    
    </style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.css" />
  
    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.js"></script>
    <script type="text/javascript">
    // <![CDATA[
    $(document).ready(function () {
        $(function () {
            $( "#kode_surat" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: "<?php echo site_url('admin/get_klasifikasi'); ?>",
                        data: { kode: $("#kode_surat").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
        
        $(function () {
            $( "#dari" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: "<?php echo site_url('admin/get_instansi_lain'); ?>",
                        data: { kode: $("#dari").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
        
        
        $(function() {
            $( "#tgl_surat" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
        });
    });
    // ]]>
    </script>
    </head>
    
  <body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <a class="navbar-brand"><strong style="font-family: verdana;">DAMS</strong></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-user icon-white"></i> Administrator <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/passwod">Rubah Password</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
                <li><a tabindex="-1" href="http://nur-akhwan.blogspot.com/2013/10/aplikasi-sederhana-manajemen-surat.html" target="_blank">Help</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <!--Side Bar OK! -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url(); ?>admin"><i class="icon-home"> </i> Beranda</a></li>
          </ul>

          <ul class="nav nav-sidebar">
            <li class="accordion-toggle">
                <a class="accordion-toggle" data-toggle="accordion" href="#" id="themes"><i class="icon-th-list"> </i> Referensi <span class="caret"></span></a>
                <ul class="accordion-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/klas_surat">Klasifikasi Surat</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/buat_surat">Buat Surat</a></li>
                </ul>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="accordion-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-random"> </i> Transaksi <span class="caret"></span></a>
                <ul class="accordion-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/surat_masuk">Surat Masuk</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li></ul>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="accordion-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-file"> </i> Buku Agenda <span class="caret"></span></a>
                <ul class="accordion-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/agenda_surat_masuk"> Surat Masuk</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/agenda_surat_keluar"> Surat Keluar</a></li>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="accordion-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-wrench"> </i> Pengaturan <span class="caret"></span></a>
                <ul class="accordion-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/pengguna">Instansi Pengguna</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/manage_admin">Manajemen Admin</a></li>
            </li>
          </ul>
        </div>
      </div>
    </div>

    
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?php 
    $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
    echo $this->session->userdata('admin_level');
    ?>
    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="" style="padding: 15px 15px 0 15px;">
            <div class="well well-sm">
                <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
                <h2 style="margin: 15px 0 10px 0; color: #000;"><?php echo $q_instansi->nama; ?></h2>
                <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b><?php echo $q_instansi->alamat; ?></b></div>
                </div>
          </div>
        </div>
      </div>
     <?php $this->load->view('admin/'.$page); ?>
     <?php
      setlocale (LC_TIME, 'INDONESIA');
      $date = strftime( "%A, %d %B %Y");
      $date2= date("Y-m-d");
      $prev3day=date('Y-m-d', strtotime('-3 day'));
      
      ?>
     
     <div class="span12 well well-sm">
      <h2>Status Hari ini <a><?php echo $date;?></a></h2>
      <?php
      $q_count1 = $this->db->query("SELECT COUNT(*)AS count FROM t_surat_masuk WHERE tgl_surat='$date2' ")->row();
      $q_count2 = $this->db->query("SELECT COUNT(*) AS count FROM t_surat_keluar WHERE tgl_surat='$date2'")->row();
      $q_count3 = $this->db->query("SELECT COUNT(*) AS count FROM t_disposisi WHERE batas_waktu BETWEEN '$prev3day' AND '$date2'")->row();
      
      ?>
      
      <div class="row">
      <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img width=80 height=80 src='aset/img/inbox.png' />
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class=""><h2><?php echo $q_count1->count; ?></h2></div>
                                    <div><h3>Surat Masuk</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img width=80 height=80 src='aset/img/outbox.png'/>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class=""><h2><?php echo $q_count2->count; ?></h2></div>
                                    <div><h3>Surat Keluar</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img width=80 height=80 src='aset/img/disposisi.png'/>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class=""><h2><?php echo $q_count3->count; ?></h2></div>
                                    <div><h3>Disposisi (Segera)</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>    
      </div>

<!-- Footer -->
      <div class="span12 well well-sm">
        <h4 style="font-weight: bold">Digital Archiev Management System (DAMSys) by <a> DAMSys Team</a></h4>
        <h6>&copy;  2015. Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage}</h6>
      </div>
 
    </div>
  </div>  
</body>
</html>