<?php
include "./connect.php"; // Make sure this file includes database connection setup
//  script qui permet de gerer le texte et les images
$remplacement_chauffe_eau_electrique= $conn->prepare("SELECT * from remplacement_chauffe_eau_electrique Limit 1");
$remplacement_chauffe_eau_electrique->execute();
$remplacement_chauffe_eau_electrique = $remplacement_chauffe_eau_electrique->fetch();


// images
// $image = $conn->prepare("SELECT * from remplacement_chauffe_eau_electrique Limit 1");
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


  <title> Remplacement chauffe eau electrique casablanca - HVNET PLOMBERIE</title>
  <meta name="description"
    content="Remplacement chauffe eau electrique societe professionel dans le remplacement chauffe eau electrique au maroc">
    <meta name="keywords" content="Remplacement chauffe eau electrique casablanca , societe de remplacement chauffe eau electrique casablanca , chauffe eau electrique casablanca , entreprise remplacement chauffe eau electrique casablanca, Remplacement chauffe eau electrique casablanca Maroc , societe remplacement chauffe eau electrique casablanca Maroc , Remplacement chauffe eau electrique Maroc, Remplacement chauffe eau electrique Maroc, societe remplacement chauffe eau electrique Maroc , Remplacement chauffe eau electrique Maroc">

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
  <link rel="canonical" href="index.html/remplacement-chauffe-eau-electrique-casablanca.html">
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
              <i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href = "mailto:hvnet.plomberie.maroc@gmail.com"> <strong>hvnet.plomberie.maroc@gmail.com</strong></a>
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
          <div class="logo pull-left" style="margin-top:20px ;"> <a href="index.html"><img id="img-nav"
            alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo plomberie .png" /></a></div> 


          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
            <a id="button-phone" class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
              <i class="icon-reorder icon-2x"></i>
            </a>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <!-- <div class="logo pull-left" style="margin-top:10px;"> <a href="index.html"><img id="img-nav"  alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo-winbest-deratisation.png" /></a></div>  -->
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  
                  <a class="nav-link" href="a-propos-nous.html">A PROPOS DE NOUS<span class="sr-only">(current)</span></a>

                 </li>



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
                  <a class="nav-link" href="blog.html">Blog</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item btn-menu" id="btn-menu">
                  <a id="btnn" class="nav-link" href="devis.html">DEMANDEZ DEVIS</a>
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
              <h1 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Remplacement Chauffe-Eau Electrique Casablanca</strong></h1>
            <?php echo $remplacement_chauffe_eau_electrique ["presentation"];?>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <img id="imgser" alt="societe professionel dans le remplacement chauffe eau electrique a casablanca"
              src="admin/pages/remplacement_chauffe_eau_electrique/imgs/<?php echo $remplacement_chauffe_eau_electrique["img1"];?>">
          </div>
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h1 id="paragraphe" class="titre-secend"></h1><strong>La préparation de l'installation</strong></h1>
                <p>Après avoir sélectionné le nouveau chauffe-eau électrique, les professionnels procèdent à la préparation de l'installation. Cette étape implique la vérification de l'emplacement de l'ancien chauffe-eau électrique, la mesure de l'espace disponible pour le nouveau modèle et l'évaluation de la plomberie existante pour déterminer si des modifications sont nécessaires. Les professionnels peuvent également procéder à la déconnexion de l'ancien chauffe-eau électrique pour préparer l'installation du nouveau modèle.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h2 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Remplacement Chauffe-Eau</strong></h1>
                  <p>Une fois que l'emplacement est prêt et que la plomberie est évaluée, les professionnels procèdent à l'installation du nouveau chauffe-eau électrique. Cette étape implique le raccordement des tuyaux d'entrée et de sortie d'eau, la fixation du nouveau chauffe-eau électrique à l'emplacement approprié et la connexion du système électrique. Les professionnels peuvent également procéder à des tests pour s'assurer que le nouveau chauffe-eau électrique fonctionne correctement.
                  </p>
                  <p>Après l'installation du nouveau chauffe-eau électrique, les professionnels procèdent au nettoyage de la zone d'installation. Cette étape implique la vérification de l'étanchéité des connexions de plomberie et la suppression de tout débris ou matériaux de l'installation. Les professionnels peuvent également vérifier si l'installation est conforme aux normes de sécurité et aux réglementations locales.
                  </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="elementor-text-editor elementor-clearfix">
                  <h2 id="paragraphe" class="titre-secend"><strong>La formation du proprietaire</strong></h1>
                    <p>La dernière étape dans le remplacement d'un chauffe-eau électrique à Casablanca est la formation du propriétaire. Les professionnels peuvent vous donner des instructions sur l'utilisation du nouveau chauffe-eau électrique, y compris la température de l'eau, la vidange et le nettoyage réguliers et la vérification des éléments de sécurité. Ils peuvent également vous fournir des informations sur la garantie et l'entretien du chauffe-eau électrique pour garantir une utilisation à long terme.
                    </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <img id="imgser" alt="societe professionel dans le remplacement chauffe eau electrique au maroc"
              src="admin/pages/remplacement_chauffe_eau_electrique/imgs/<?php echo $remplacement_chauffe_eau_electrique["img2"];?>">
            </div>
          </div>


          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h3><strong>Remplacement Chauffe-Eau Electrique au Maroc </strong></h3>
                <p>
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Éteignez l'alimentation électrique : Coupez l'alimentation électrique du chauffe-eau en utilisant le disjoncteur dédié dans le tableau électrique.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Évacuez l'eau : Évacuez l'eau contenue dans le chauffe-eau en utilisant un tuyau d'arrosage ou en ouvrant la soupape de vidange située au bas de l'appareil.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Détachez les connexions électriques : Débranchez les câbles électriques qui alimentent le chauffe-eau.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Détachez les tuyaux d'eau : Détachez les tuyaux d'eau chaude et d'eau froide qui relient le chauffe-eau aux canalisations.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Détachez le chauffe-eau : Détachez le chauffe-eau du mur ou du support sur lequel il est fixé en retirant les vis de fixation.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Installez le nouveau chauffe-eau : Installez le nouveau chauffe-eau en suivant les instructions du fabricant. Assurez-vous qu'il est correctement fixé au mur ou au support.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Branchez les tuyaux d'eau : Branchez les tuyaux d'eau chaude et d'eau froide aux canalisations. Utilisez des raccords et des joints pour garantir une étanchéité parfaite.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Branchez les connexions électriques : Branchez les câbles électriques au nouveau chauffe-eau.
                  <br> <i class="fa-solid fa-angle-down fa-xs" style="color: #7accff;"></i> Remplissez le chauffe-eau : Ouvrez la soupape d'arrivée d'eau froide et laissez le chauffe-eau se remplir complètement.
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
              <a href="devis.html"><i class="fas fa-comment-alt" aria-hidden="true"></i></a>
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
                <a href="index.html"><img style="width: 160px; height:160px; margin-bottom: 30px;"
                    alt="Société de dératisation et désinsectisation à Casablanca Maroc" height="86"
                    src="img/logo footer.png" width="120" /></a>
                <p class="p-footer" id="pf">
                  <strong><span style="color: #FFF;"> HVNET PLOMBERIE </span></strong> , Société de
                  plomberie à Casablanca Maroc expérimentée et compétitive au service des particuliers,
                  des professionnels et des collectivités, spécialisée dans la plomberie,
                  à Casablanca et partout au Maroc.
                </p>
                <a class="nav-link" href="contact.html"><img class="image-link" alt="Socite de deratisation" src="img/contact/nous contactez.png" style="margin-left: 30px;"></a>

              </div>
            </div>



            <!--nos services-->

            <div class="col-md-5 col" id="services">
              <div class="col">
                <h4 class="h-footer" id="h-service">Nos Services</h4>
                <br>
                <ul class="service-ul">
                  <div class="row">

                    <div class="col-md-6 service-left">
                      <li><a href="reparation-fuite-eau-casablanca.html">
                          <il> Reparatition fuite d'eau</il>
                        </a></li> <br>

                      <li><a href="remplacement-chauffe-eau-electrique-casablanca.html">
                          <il> Remplacement chauffe-eau electrique</il>
                        </a></li> <br>

                      <li><a href="debouchage-wc-casablanca.html">
                          <il>Debouchage WC</il>
                        </a></li> <br>

                      <li><a href="broyeur-casablanca.html">
                          <il> Broyeur</il>
                        </a></li> <br>

                      <li><a href="debouchage-machine-laver-casablanca.html">
                          <il> Debouchage machine a laver</il>
                        </a></li> <br>

                      <li><a href="depannage-plomberie-casablanca.html">
                          <il> Depannage plomberie</il>
                        </a></li> <br>

                      <li style="margin-left: 130px; "><a href="debouchage-canalisation-casablanca.html">
                          <il> Debouchage canalisation </il>
                        </a></li> <br>
                    </div>

                    <div class="col-md-6 service-right">
                      <li><a href="remplacement-robinet-casablanca.html">
                          <il> Remplacement robinet </il>
                        </a></li> <br>

                      <li><a href="ballon-eau-chaude-casablanca.html">
                          <il> Ballon d'eau chaude </il>
                        </a></li> <br>

                      <li><a href="urgence-plombier-casablanca.html">
                          <il> Urgence plombier Casablanca </il>
                        </a></li> <br>

                      <li><a href="installation-chaudiere-casablanca.html">
                          <il> Installation chaudière</il>
                        </a></li> <br>

                      <li><a href="installation-plomberie-casablanca.html">
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
  
                <a href="index.html">
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
                <div class="copyright"> &copy; Copyright 2022 by &nbsp; <a href="index.html">HVNET PLOMBERIE
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
</body>
</html>