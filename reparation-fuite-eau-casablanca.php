<?php
include "./connect.php"; // Make sure this file includes database connection setup
//  script qui permet de gerer le texte et les images
$reparation_eau= $conn->prepare("SELECT * from reparation_eau Limit 1");
$reparation_eau->execute();
$reparation_eau = $reparation_eau->fetch();


// images
// $image = $conn->prepare("SELECT * from reparation_eau Limit 1");
// $image->execute();
// $image = $image->fetch();

// data of srvices table
$services = $conn->prepare("SELECT * from services");
$services->execute();
$services = $services->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /><!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
  <!-- Library CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.html" rel="stylesheet" />
  <link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/animations.css" media="screen" rel="stylesheet" />
  <link href="css/superfish.css" media="screen" rel="stylesheet" />
  <link href="css/revolution-slider/css/settings.css" media="screen" rel="stylesheet" />
  <link href="css/prettyPhoto.css" media="screen" rel="stylesheet" /><!-- Theme CSS -->
  <link href="css/style.css" rel="stylesheet" /><!-- Skin -->
  <link class="colors" href="css/colors/blue.css" rel="stylesheet" /><!-- Responsive CSS -->
  <link href="css/theme-responsive.css" rel="stylesheet" /><!-- Switcher CSS -->
  <link href="css/switcher.css" rel="stylesheet" />
  <link href="css/spectrum.css" rel="stylesheet" /><!-- Favicons -->
  <link href="img/logo plomberie .png" rel="shortcut icon" />
  <link href="img/ico/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="img/ico/apple-touch-icon-72.png" rel="apple-touch-icon" sizes="72x72" />
  <link href="img/ico/apple-touch-icon-114.png" rel="apple-touch-icon" sizes="114x114" />
  <link href="img/ico/apple-touch-icon-144.png" rel="apple-touch-icon" sizes="144x144" />


  <title>Reparation fuite d'eau casablanca - HVNET PLOMBERIE</title>
  <meta name="description"
    content="Reparation fuite d'eau casablanca societe professionel dans la reparation fuite d'eau au maroc.">
    <meta name="keywords" content="Reparation fuite d'eau casablanca , societe reparation fuite d'eau casablanca , fuite d'eau casablanca , entreprise reparation fuite d'eau casablanca, Reparation fuite d'eau casablanca Maroc , societe reparation fuite d'eau casablanca Maroc ,  fuite d'eau casablanca Maroc, Reparation fuite d'eau Maroc, societe reparation fuite d'eau Maroc , fuite d'eau Maroc">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Link canonique -->
  <link rel="canonical" href="index.php/reparation-fuite-eau-casablanca.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style type="text/css">
    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home #footer .footer-top .container .row .col-lg-3.col-md-3.col-xs-12.col-sm-3.footer-one ul a il {

      font-size: 14px;
    }

    .de {
      color: #F00;
    }

    .home .wrap center {
      display: none;
    }

    .pr {
      text-align: center;
    }
  </style>




  <style type="text/css">
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;
     
      margin-top: 8px;
    }

    .dropdown-submenu .dropdown-menu {
      
      bottom: 35px !important;
      left: 100% !important;
      margin-left: .1rem;
      margin-right: .1rem;
    }
  </style>
</head>

<body class="home">
  <div class="wrap"><!-- Header Start -->


    <header id="header">
      <div class="top-bar">
        <div class="slidedown collapse">
          <div class="container">
            <div class="phone-email pull-left">

              <i class="icon-phone"></i>Tel : <a href ="Tel:+212615599092"><strong>+212 615 599 092</strong></a>
              <i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href = "mailto:hvnet.plomberie.maroc@gmail.com"><strong> hvnet.plomberie.maroc@gmail.com </strong></a>
            </div>
            <div class="pull-right">
              <ul class="social pull-left">
                <li class="facebook"><a href="https://www.facebook.com/deratisation.casablanca"><i
                      class="icon-facebook"></i></a></li>

                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="dribbble"><a href="#"><i class="icon-dribbble"></i></a></li>
                <li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
                <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
              </ul>
              <div id="search-form" class="pull-right">
                <form action="#" method="get">
                  <input type="text" class="search-text-box">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>






      <!-- nav bar start -->
      <div class="main-header">
        <div class="container" id="container-header">

          <!-- toggle collqpse -->
          <div class="topnav navbar-header">
            <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
              <i class="icon-angle-down icon-current"></i>
            </a>
          </div>

          <!-- enstoggle -->
          <div class="logo pull-left" style="margin-top:20px ;"> <a href="index.php"><img id="img-nav"
            alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo plomberie .png" /></a></div> 


          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
            <a id="button-phone" class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
              <i class="icon-reorder icon-2x"></i>
            </a>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <!-- <div class="logo pull-left" style="margin-top:10px;"> <a href="index.php"><img id="img-nav"  alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo-winbest-deratisation.png" /></a></div>  -->
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown">
                  
                  <a class="nav-link" href="a-propos-nous.php">A PROPOS DE NOUS<span class="sr-only">(current)</span></a>

                 </li>


                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> NOS ACTIVITES
                  </a>
                  <ul class="dropdown-menu activites" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a href="reparation-fuite-eau-casablanca.php">reparation fuite d'eau<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a
                        href="remplacement-chauffe-eau-electrique-casablanca.php">Remplacement chauffe-eau
                        éléctrique<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="debouchage-wc-casablanca.php">Débouchage WC <span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="depannage-plomberie-casablanca.php">Dépannage plomberie<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="debouchage-canalisation-casablanca.php">Débouchage
                        canalisation <span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="remplacement-robinet-casablanca.php">Remplacement
                        Robinet<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="installation-plomberie-casablanca.php">Installation de
                        plomberie<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="urgence-plombier-casablanca.php">Urgence plombier Casablanca<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    </li>
                  </ul>
                <li class="nav-item ">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item btn-menu" id="btn-menu">
                  <a id="btnn" class="nav-link" href="devis.php">DEMANDEZ DEVIS</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- nav bar end -->
    </header>





    <div id="main">


      <!-- block text star -->
      <div class="container">
        <div class="row">
          <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3 id="titlee" style="display: none;">A propos de nous
            </h3>
            <div class="elementor-text-editor elementor-clearfix">
              <h1 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Reparation Fuite d'Eau Casablanca</strong></h1>
             <?php echo $reparation_eau["presentation"];?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <img id="imgser" alt="societe professionel dans la reparation fuite d'eau au maroc "
            src="./admin/pages/reparation_fuite_d'eau/imgs/<?php echo $reparation_eau["img1"]?>">
          </div>
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h1 id="paragraphe" class="titre-secend"></h1><strong>L'isolation de la fuite d'eau</strong></h1>
                <p>Une fois que la source de la fuite d'eau est détectée, les professionnels procèdent à l'isolation de la fuite. Cela implique de couper l'alimentation en eau pour éviter que l'eau ne continue de fuir. L'isolation de la fuite peut être effectuée en fermant les robinets d'arrêt, les vannes ou les tuyaux. Dans certains cas, l'isolation de la fuite peut nécessiter la fermeture de l'alimentation en eau de tout le bâtiment. Vous pouvez faire appel à
                  <strong>HVNET PLOMBERIE</strong> qui interviendra très rapidement à votre domicile.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h2 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Reparation Fuite d'Eau</strong></h1>
                  <p>Après l'isolation de la fuite d'eau, les professionnels procèdent à la réparation de la fuite. Les réparations peuvent être mineures ou majeures selon la gravité de la fuite. Les réparations mineures peuvent inclure le remplacement d'un joint défectueux, le resserrement d'un raccord ou le remplacement d'un robinet. Les réparations majeures peuvent nécessiter le remplacement complet d'une section de tuyauterie endommagée.
                  </p>
                  <p>Après la réparation de la fuite d'eau, les professionnels procèdent au nettoyage de la zone affectée. Cela implique de nettoyer toute l'eau stagnante et de sécher complètement la zone pour éviter les moisissures et les odeurs. Les professionnels effectuent également une vérification de la réparation pour s'assurer que la fuite a été complètement corrigée et qu'il n'y a pas d'autres problèmes de plomberie.
                  </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="elementor-text-editor elementor-clearfix">
                  <h2 id="paragraphe" class="titre-secend"><strong>La prévention des fuites d'eau futures</strong></h1>
                    <p>La prévention des fuites d'eau futures est un aspect important de la gestion de l'eau à long terme. Voici quelques mesures que vous pouvez prendre pour prévenir les fuites d'eau futures :

                      <br><i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Faites régulièrement inspecter vos canalisations et robinets pour détecter les fuites d'eau cachées. Vous pouvez également installer un système de surveillance de fuites d'eau pour vous alerter en cas de fuite.
                      
                      <br><i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Remplacez les vieux tuyaux et les robinets usés. Les tuyaux en cuivre peuvent rouiller ou se corroder avec le temps, ce qui peut entraîner des fuites d'eau. Les robinets peuvent également se corroder et se fissurer.
                                                                                        
                      <br><i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Évitez de jeter des déchets dans les toilettes ou les éviers, car cela peut entraîner des obstructions et des fuites d'eau.
                    </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <img id="imgser" alt="societe professionel dans la reparation fuite d'eau au maroc"
              src="./admin/pages/reparation_fuite_d'eau/imgs/<?php echo $reparation_eau["img2"]?>">
            </div>
          </div>


          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h3><strong>Les etapes de la reparation Fuite d'Eau au Maroc</strong></h3>
                <p> 
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Localisez la fuite : Trouvez la source de la fuite. Elle peut être visible, comme une fuite de robinet ou une fuite de tuyau, ou invisible, comme une fuite dans un mur.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Coupez l'arrivée d'eau : Pour éviter une inondation, coupez l'arrivée d'eau à l'aide de la vanne d'arrêt principale.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Procurez-vous les matériaux nécessaires : Les matériaux nécessaires dépendent de la source de la fuite. Vous aurez peut-être besoin de pièces de rechange telles que des <br>tuyaux, des raccords, des joints ou des robinets.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Réparez la fuite : Utilisez des outils adaptés pour réparer ou remplacer les pièces défectueuses. Assurez-vous que tout est bien serré et étanche.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Vérifiez que la fuite est réparée : Ouvrez lentement la vanne d'arrêt principale et vérifiez qu'il n'y a plus de fuite. Vérifiez également que le débit d'eau est normal et que la pression est correcte.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Nettoyez la zone : Une fois la réparation terminée, nettoyez soigneusement la zone pour éliminer tout débris ou saleté.

                </p>
              </div>
            </div>
          </div>

        </div>

        <!-- block text end -->





      </div>


        <!-- Footer Start -->
    <footer id="footer">
      <!-- Footer Top Start -->
      <div class="footer-top">
        <div class="container" id="foorter-container">
          <div class="row">
            <div class="fixed-btn">
              <a href="devis.php"><i class="fas fa-comment-alt" aria-hidden="true"></i></a>
          </div>
          <div class="fixed-btn1">
            <a href="tel:+212627078073"><i class="fa fa-phone" aria-hidden="true"></i></a>
          </div>
          <div class="fixed-btn2">
            <a href="https://api.whatsapp.com/send?phone=0627078073"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
        </div>

         <!-- insertion de l'élément fixe a gauche -->
          <div class="fixed-left">
          <a href="#" id="site-scroll-top" class="show"><span class="fa-solid fa-chevron-up" style="color:#FFF;" ></span></a>
          </div>
            <!--description-->

           
            <div class="col-md-4 col" id="description">
              <div class="col col-social-icons">
                   <a href="index.php"><img style="width: 160px; height:160px; margin-bottom: 30px; margin-left: 145px;"
                  alt="Société de plomberie à Casablanca Maroc" height="86"
                  src="img/logo footer.png" width="120" /></a>
                <p class="p-footer" id="pf">
                  <strong><span style="color: #FFF;"> HVNET PLOMBERIE </span></strong> , Société de
                  plomberie à Casablanca Maroc expérimentée et compétitive au service des particuliers,
                  des professionnels et des collectivités, spécialisée dans la plomberie,
                  à Casablanca et partout au Maroc.
                </p>
                <a class="nav-link" href="contact.php"><img class="image-link" alt="Socite de deratisation" src="img/contact/nous contactez.png" style="margin-left: 84px;"></a>

              </div>
            </div>



            <!--nos services-->

            <!-- <div class="col-md-5 col" id="services">
            <div class="col">
              <h4 class="h-footer" id="h-service">Nos Services</h4>
              <br>
              <ul class="service-ul">
                <div class="row">

                  <div class="col-md-6 service-left">
                    
                       <?php
                       $i = 1;
                          foreach($services as $service){
                            if($i<=6){
                              ?>
                              <li><a href="reparation-fuite-eau-casablanca.php">
                              <il> <?php echo $service["title"]; ?></il>
                            </a></li> <br>

                          <?php
                            }
                        
                          ++$i;
                          }
                       ?>
                  </div>

                  <?php
                    if(count($services)>6){
                      ?>
                      <div class="col-md-6 service-right">
                      <?php
                       $i = 1;
                          foreach($services as $service){
                            if($i>4){
                              ?>
                              <li><a href="reparation-fuite-eau-casablanca.php">
                              <il> <?php echo $service["title"]; ?></il>
                            </a></li> <br>

                          <?php
                            }
                        
                          ++$i;
                          }
                       ?>
  
  
                    </div>
                    <?php
                    }
                  ?>
               
                </div>
              </ul>

            </div>
          </div> -->
      <!--nos services-->

      <div class="col-md-5 col" id="services">
              <div class="col">
                <h4 class="h-footer" id="h-service">Nos Services</h4>
                <br>
                <ul class="service-ul">
                  <div class="row">

                    <div class="col-md-6 service-left">
                      <li><a href="reparation-fuite-eau-casablanca.php">
                          <il> Reparatition fuite d'eau</il>
                        </a></li> <br>

                      <li><a href="remplacement-chauffe-eau-electrique-casablanca.php">
                          <il> Remplacement chauffe-eau electrique</il>
                        </a></li> <br>

                      <li><a href="debouchage-wc-casablanca.php">
                          <il>Debouchage WC</il>
                        </a></li> <br>

                      <li><a href="broyeur-casablanca.php">
                          <il> Broyeur</il>
                        </a></li> <br>

                      <li><a href="debouchage-machine-laver-casablanca.php">
                          <il> Debouchage machine a laver</il>
                        </a></li> <br>

                      <li><a href="depannage-plomberie-casablanca.php">
                          <il> Depannage plomberie</il>
                        </a></li> <br>

                      <li style="margin-left: 130px; "><a href="debouchage-canalisation-casablanca.php">
                          <il> Debouchage canalisation </il>
                        </a></li> <br>
                    </div>

                    <div class="col-md-6 service-right">
                      <li><a href="remplacement-robinet-casablanca.php">
                          <il> Remplacement robinet </il>
                        </a></li> <br>

                      <li><a href="ballon-eau-chaude-casablanca.php">
                          <il> Ballon d'eau chaude </il>
                        </a></li> <br>

                      <li><a href="urgence-plombier-casablanca.php">
                          <il> Urgence plombier Casablanca </il>
                        </a></li> <br>

                      <li><a href="installation-chaudiere-casablanca.php">
                          <il> Installation chaudière</il>
                        </a></li> <br>

                      <li><a href="installation-plomberie-casablanca.php">
                          <il> Installation de plomberie </il>
                        </a></li> <br>

                      <li><a href="chauffe-eau-casablanca.html">
                          <il> chauffe-eau </il>
                        </a></li> <br>


                    </div>
                  </div>
                </ul>

              </div>
            </div>

            <!--contact-->

            <div class="col-md-3 col" id="contact">
              <div class="col">
                <h4 class="h-footer">Contact</h4>

                <ul class="contact-footer">
                  <hr>
                  <li>Adresse : 53 Rue El Bakri, Casablanca 20110</li>
                  <hr>
                  <li> Tel : <a href ="Tel:+212615599092"> +212 615 599 092</a></li>
                  <hr>
                  <li> Tel : <a href = "Tel:+212615599092"> +212 615 599 092</a></li>
                  <hr>

                  <li><i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href = "mailto:hvnet.plomberie.maroc@gmail.com"> hvnet.plomberie.maroc@gmail.com</a></li>
                  <hr>
                </ul>



                <!--A PROPOS DE NOUS-->

                <h4 class="h-footer">A PROPOS DE NOUS</h4>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d150484.96673729524!2d-7.531170778966888!3d33.546116603459296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1678362338005!5m2!1sfr!2sma"
                  width="265" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
  
                <a href="index.php">
                  <p><u>Société de Plomberie Casablanca Maroc</u></p>
                </a>
  
              </div>
            </div>
  
          </div>
  

          <!--copyright-->


          <div class="row">

            <div class="col-lg-3 "></div>


            <div class="col-lg-6 ">
              <div class="row icon">
                <div class="col item social">
                  <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="row copyright">
                <div class="copyright"> &copy; Copyright 2022 by &nbsp; <a href="index.php">HVNET PLOMBERIE
                    Casablanca</a>. Tous droits réservés.</div>
              </div>
            </div>


            <div class="col-lg-3 footer-logo"></div>
          </div>


        </div>
      </div>
      <!-- Footer Bottom End -->
    </footer>


  </div>


  <!-- The Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.parallax.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/tweetMachine.js"></script>
  <script src="js/tytabs.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jflickrfeed.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/spectrum.js"></script>
  <script src="js/switcher.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/jquery.gmap.min.js"></script>
  <script src="js/custom.js"></script>
  </div>
  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        $(document).ready(function () {
            $("#table").DataTable();
            $("#trier").click(()=>{
                $("#trier-detaills").fadeIn();
                $("#trier").css("display","none");
            })
       
        
        })

   </script>
</body>
</html>