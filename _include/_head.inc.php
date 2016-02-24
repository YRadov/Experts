<?php
    //page for navigation light
    $query_string = [];
    $query_string = explode('/',$_SERVER['SCRIPT_FILENAME']);
    $page = array_pop ($query_string);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">

    <title>Эксперты</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />


    <!-- Шрифты -->
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <header>
        <!-- START SLIDER-->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slide1.png" alt="1" height="100%" width="100%">
                </div>
                <div class="item">
                    <img src="img/slide2.png" alt="2" height="100%" width="100%">
                </div>
                <div class="item">
                    <img src="img/slide3.png" alt="3" height="100%" width="100%">
                </div>
                <div class="item">
                    <img src="img/slide.png" alt="4" height="100%" width="100%">
                </div>
            </div>
        </div>
        <!-- STOP SLIDER-->

        <div class="header-nav">

            <div class="header-wrap">

                <!-- START LOGO -->
                <div class="header-logo animated fadeInDown">
                    <a href="index.php">
                        <img src="img/business.png" height="80" alt="logo"  class="img-circle">
                    </a>
                </div><!-- .header-logo -->

                <!-- START NAV -->
                <nav class="navbar navbar-default animated lightSpeedIn" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php if("experts.php" == $page)echo 'class="activ"'?>>
                                    <a href="experts.php"><img src="img/experts.png">&nbsp; Эксперты</a>
                                </li>
                                <li <?php if("questions.php" == $page)echo 'class="activ"'?>>
                                    <a href="questions.php"><img src="img/quest.png">&nbsp; Вопросы</a>
                                </li>
                                <li <?php if("blogs.php" == $page)echo 'class="activ"'?>>
                                    <a href="#"><img src="img/blog.png">&nbsp; Блоги</a>
                                </li>
                                <li <?php if("forums.php" == $page)echo 'class="activ"'?>>
                                    <a href="#"><img src="img/forum.png">&nbsp; Форум</a>
                                </li>
                            </ul>
                            <!-- START SEARCH-->
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Поиск на сайте...">
                                </div>
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <!-- END SEARCH-->
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <!-- END NAV -->

                <!-- START QUESTION'S BLOCK -->
                <div class="header-quest animated bounceInUp">
                    <div class="header-quest-title">
                        <span>Ваш вопрос эксперту:</span>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="header-quest-enter">Войти</a>
                        <img src="img/ok.png" alt="ok">
                        <a href="#" class="header-quest-reg">Регистрация</a>
                    </div>
                    <div class="header-quest-text">
                        <form action="#" method="post" name="header-quest">
                        <textarea name="quest" id="textarea"
                                  placeholder="Введите Ваш вопрос(не более 300 символов)..."
                                  maxlength="300">

                        </textarea>
                            <button type="submit" name="submit" value="quest">
                                Получить ответ
                            </button>
                        </form>
                    </div>
                </div>
                <!-- STOP QUESTION'S BLOCK -->
            </div> <!-- .header-wrap -->

        </div><!-- .header-nav -->

    </header>
