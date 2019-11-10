<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Задачник</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <!--        <link rel="stylesheet" type="text/css" href="/css/style.css" />-->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="/css/main.css" />
        
        <link href="/css/addons/datatables.min.css" rel="stylesheet"></link>

        <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/addons/datatables.min.js"></script>

        <script src="js/main.js"></script>

        <script src="js/admin.js"></script>

    </head>
    <body>

        <div class="container">


            <div class="container">
                <ul class="nav nav-tabs" style="float: right">
                    <li class="nav-item"><a class="nav-link active" href="/">Главная</a></li>

                    <?php if (!isset($_SESSION['admin'])) { ?>

                        <li class="nav-item"><a class="nav-link" href="/login">Вход</a></li>

                    <?php } else { ?>

                        <li class="nav-item"><a class="nav-link" href="/admin/logout">Выход</a></li>

                        <li class="nav-item"><a class="nav-link" href="/admin">Панель администратора</a></li>

                    <?php } ?>   
                    <!--						<li><a href="/services">Услуги</a></li>
                                                                    <li><a href="/portfolio">Портфолио</a></li>
                                                                    <li class="last"><a href="/contacts">Контакты</a></li>-->
                </ul>
                <br class="clearfix" />

            </div>
            <div id="page">

                <div id="content">
                    <div class="box">
                        <?php include 'application/views/' . $content_view; ?>

                    </div>
                    <br class="clearfix" />
                </div>
                <br class="clearfix" />
            </div>
            <div id="page-bottom">
                <div id="page-bottom-sidebar">

                </div>
                <div id="page-bottom-content">

                </div>
                <br class="clearfix" />
            </div>
        </div>
        <div class="container">
            <a href="/">Задачник</a> &copy; <?= date("Y") ?></a>
        </div>
    </body>
</html>