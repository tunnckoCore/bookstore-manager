<?php
/**
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
$filepath = basename(APP_PATH) . '/views/' . basename(__FILE__);
$templateData['_TELERIK_DEMOS'] = array(
    0 => array(
        'link' => 'http://www.charlike.pw/telerik/ExpenseMonitor/',
        'title' => 'ExpenseMonitor #charlike',
        'anchor' => 'ExpenseMonitor'
    ),
    1 => array(
        'link' => 'http://www.charlike.pw/telerik/FileUpload-Manager/',
        'title' => 'FileUpload Manger #charlike',
        'anchor' => 'FileUpload Manager'
    ),
    2 => array(
        'link' => 'http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/',
        'title' => 'MySQLi Books and Authors Manager #charlike',
        'anchor' => 'MySQLi Books and Authors Manager'
    ),
);

ksort($templateData['_TELERIK_DEMOS']);
?>
<!-- Start: <?php echo $filepath; ?> -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="canonical" content="http://www.charlike.pw/fileupload-manager/">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta property="og:url" content="http://www.charlike.pw/fileupload-manager/">
        <meta property="og:title" content="Charlike Web - FileUpload Manager">
        <meta property="og:description" content="Charlike Web - FileUpload Manager, is simple filesystem-based manager with session.">
        <meta property="og:image" content="http://www.whistle-bg.tk/uploads/charlike-avatar.png">

        <title><?php echo $templateData['title']; ?> #charlike</title>

        <link rel="author" href="https://plus.google.com/101032319194415059995">
        <link rel="shortcut icon" href="http://dewiz.eu/tm.lib/2.0/img/charlike-web/favicon.png">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,400italic|Open+Sans+Condensed:300,700|Pacifico">
        <link rel="stylesheet" href="http://dewiz.eu/tm.lib/2.0/css/charlike-web/core.library.css">
        <link rel="stylesheet" href="http://dewiz.eu/tm.lib/2.0/css/bootstrap/bs-select/bs-select.min.css">
        <link rel="stylesheet" href="custom.css?32434">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//apis.google.com/js/plusone.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <header class="tm-global-header navbar-fixed-top">
            <h1 class="tm-global-hide"><?php echo APP_NAME; ?></h1>
            <div class="navbar navbar-default navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.charlike.pw/"><i class="icon-bookmark"></i> Charlike Web</a>
                </div>
                <nav class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www.whistle-bg.tk">
                                Изображения
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Хостинг и домейни
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle js-activated tm-menu-dropdown" data-toggle="dropdown">
                                Уеб сфера <i class="icon-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Wibso PHP Framework</a></li>
                                <li><a tabindex="-1" href="#">SEO и Front-end</a></li>
                                <li><a tabindex="-1" href="http://www.cmsrevue.com">Форум Готови системи</a></li>
                                <li><a tabindex="-1" href="http://www.itcommunity.eu">IT Форум, помощ, уроци</a></li>


                            </ul>
                        </li>
                        <li>
                            <a href="http://www.zashto-tryabva-da-kupim-acer-ot-www-notebook-bg.charlike.pw/" >
                                Acer SEO
                            </a>
                        </li>
                        <li >
                            <a href="#">
                                Майл
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle js-activated tm-menu-dropdown" data-toggle="dropdown">
                                Telerik Demos <i class="icon-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-php-course-demos">
                                <?php
                                foreach ($templateData['_TELERIK_DEMOS'] as $key => $attr) {
                                    echo '<li><a tabindex="-1" href="'.$attr['link'].'" title="'.$attr['title'].'">'.$attr['anchor'].'</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </nav> <!-- .nav-collapse -->
            </div>
        </header>
        <div class="container tm-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-header">
                        <h1 class="clearfix">
                            <span class="pull-left">
                                <i class="i-library-2"></i> <a href="<?php echo APP_URI; ?>"><?php echo APP_NAME; ?></a>
                            </span>
                            <span class="pull-right">
                                <a href="https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/" target="_blank" class="btn btn-primary btn-lg"><i class="i-github"></i></a>
                                <a href="https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/archive/master.zip" class="btn btn-warning btn-lg"><i class="i-download"></i></a>
                            </span>
                        </h1>
                    </div>
                </div>
            </div><!-- End: <?php echo $filepath; ?> -->
            