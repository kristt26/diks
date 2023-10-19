<!DOCTYPE html>
<html lang="en" ng-app="apps">
  <head>
    <meta name="description" content="Sistem Manamejen Baptis, Sidi, Nikah">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sistem DIKS">
    <meta property="og:title" content="Sistem Manamejen Baptis, Sidi, Nikah">
    <!-- <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png"> -->
    <meta property="og:description" content="Sistem Manamejen Baptis, Sidi, Nikah">
    <title>Sistem Manamejen Baptis, Sidi, Nikah</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body class="app sidebar-mini rtl" ng-controller="indexController">
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?= view('menu')?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="col-md-12">
        <?= $this->renderSection('content');?>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="<?= base_url()?>js/jquery-3.2.1.min.js"></script>

    <script src="<?= base_url() ?>libs/angular/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.8.2/angular-sanitize.min.js" integrity="sha512-JkCv2gG5E746DSy2JQlYUJUcw9mT0vyre2KxE2ZuDjNfqG90Bi7GhcHUjLQ2VIAF1QVsY5JMwA1+bjjU5Omabw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-animate/1.8.2/angular-animate.min.js" integrity="sha512-jZoujmRqSbKvkVDG+hf84/X11/j5TVxwBrcQSKp1W+A/fMxmYzOAVw+YaOf3tWzG/SjEAbam7KqHMORlsdF/eA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() ?>app/apps.js"></script>
    <script src="<?= base_url() ?>app/services/helper.services.js"></script>
    <script src="<?= base_url() ?>app/services/admin.services.js"></script>
    <script src="<?= base_url() ?>app/services/auth.services.js"></script>
    <script src="<?= base_url() ?>app/services/pesan.services.js"></script>
    <script src="<?= base_url() ?>app/controllers/admin.controllers.js"></script>
    <script src="<?= base_url() ?>libs/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
    <script src="<?= base_url() ?>libs/angular-locale_id-id.js"></script>
    <script src="<?= base_url() ?>libs/angular-datatables/dist/angular-datatables.js"></script>
    <script src="<?= base_url() ?>libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>libs/datatables/btn.js"></script>
    <script src="<?= base_url() ?>libs/datatables/print.js"></script>
    <script src="<?= base_url() ?>libs/loading/dist/loadingoverlay.js"></script>

    <script src="<?= base_url() ?>libs/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>libs/angular-ui-select2/src/select2.js"></script>
    <script src="<?= base_url() ?>libs/sweetalert2/dist/sweetalert2.all.min.js"></script>



    <script src="<?= base_url()?>js/popper.min.js"></script>
    <script src="<?= base_url()?>js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= base_url()?>js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?= base_url()?>js/plugins/chart.js"></script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'octagoncendrawasihsolution.com') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>