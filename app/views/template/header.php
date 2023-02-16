<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title><?= $data['judul']; ?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?= BASEURL ?>/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?= BASEURL ?>/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="<?= BASEURL ?>/css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="<?= BASEURL ?>/images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- top -->
   <!-- header -->
   <header class="header-area">
      <?php if (isset($_SESSION['login'])) { ?>
         <div class="left">
            <span><?= isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?><span>
         </div>
      <?php } ?>
      <div class="right">
         <?php if (isset($_SESSION['login'])) { ?>
            <a href="<?= BASEURL ?>/login/logout" class="fa-2x logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
         <?php } else { ?>
            <a href="<?= BASEURL ?>/login"><i class="fa fa-user" aria-hidden="true"></i></a>
         <?php } ?>
      </div>
      <div class="container">
         <div class="row d_flex">
            <div class="col-sm-3 logo_sm">
               <div class="logo">
                  <a href="index.html"></a>
               </div>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
               <div class="navbar-area">
                  <nav class="site-navbar">
                     <ul>
                        <li></li>
                        <li></li>
                        <li><a class="<?= ($data['judul'] == 'Home') ? 'active' : ''  ?>" href="<?= BASEURL ?>">Home</a></li>
                        <li><a class="<?= ($data['judul'] == 'About') ? 'active' : ''  ?>" href="<?= BASEURL ?>/about">About</a></li>
                        <li><a class="<?= ($data['judul'] == 'Video') ? 'active' : ''  ?>" href="<?= BASEURL ?>/video">Video</a></li>
                        <li><a class="<?= ($data['judul'] == 'Artikel') ? 'active' : ''  ?>" href="<?= BASEURL ?>/post">Artikel</a></li>
                        <li><a class="<?= ($data['judul'] == 'Contact') ? 'active' : ''  ?>" href="<?= BASEURL ?>/contact">Kontak</a></li>
                        <?php if (isset($_SESSION['login'])) { ?>
                        <li>
                           <div class="dropdown">
                              <a class="btn dropdown-toggle <?= ($data['judul'] == 'Mengelola Berita' || 'pencegahan') ? 'active' : ''  ?>" type="button" 
                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Mengelola Data
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item text-dark" href="<?= BASEURL ?>/post/berita">Berita</a>
                                 <a class="dropdown-item text-dark" href="<?= BASEURL ?>/tips/tips">Pencegahan</a>
                              </div>
                           </div>
                        </li>
                        <?php } ?>
                     </ul>
                     <button class="nav-toggler">
                        <span></span>
                     </button>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header -->
   <div class="full_bg">
      <!-- header inner -->
      <div class="section">
         <!-- controls -->
         <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
   </div>
   <!-- end banner -->