<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Industry Bootstrap Corporate Web Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
<link href="/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="/css/jcarousel.css" rel="stylesheet" />
<link href="/css/flexslider.css" rel="stylesheet" />
<link href="/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="/css/AdminLTE.min.css">
<link rel="stylesheet" href="/css/skins/_all-skins.min.css">
<link href="/css/style.css" rel="stylesheet" />
<style>.glyphicon{margin-right:5px}.thumbnail{min-height:500px;max-height:500px;margin-bottom:20px;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.item.list-group-item{float:none;width:100%;background-color:#fff;margin-bottom:10px}.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover{background:#694198}.item.list-group-item .list-group-image{margin-right:10px}.item.list-group-item .thumbnail{margin-bottom:0}.item.list-group-item .caption{padding:9px 9px 0}.item.list-group-item:nth-of-type(odd){background:#eee}.item.list-group-item:before,.item.list-group-item:after{display:table;content:" "}.item.list-group-item img{float:left}.item.list-group-item:after{clear:both}.list-group-item-text{margin:0 0 11px}</style>
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
    <!-- start header -->
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="/img/logo.png" alt="logo"/>',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-default navbar-static-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'Кампании', 'url' => ['/camp']],
                ['label' => 'О нас', 'url' => ['/site/about']],
                Yii::$app->user->isGuest ?
                            ['label' => 'Войти', 'url' => ['/user/security/login']] :
                            ['label' => 'Аккаунт (' . Yii::$app->user->identity->username . ')',
                                'items' => [
                                    ['label' => 'Мои кампании', 'url' => ['/campaigns']],
                                    ['label' => 'Мой профиль', 'url' => ['/user/profile/show?id='.Yii::$app->user->identity->getId()]],
                                    ['label' => 'Настройки', 'url' => ['/user/settings/profile']],
                                    ['label' => 'Выйти',
                                        'url' => ['/user/security/logout'],
                                        'linkOptions' => ['data-method' => 'post']]
                                    ]
                            ],
            ],
        ]);
        NavBar::end();
        ?>
    </header>
    <!-- end header -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                    <strong>Industry company Inc</strong><br>
                    JC Main Road, Near Silnile tower<br>
                     Pin-21542 NewYork US.</address>
                    <p>
                        <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                        <i class="icon-envelope-alt"></i> email@domainname.com
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="#">Latest Events</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h5 class="widgetheading">Latest posts</h5>
                    <ul class="link-list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h5 class="widgetheading">Recent News</h5>
                    <ul class="link-list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Industry 2018 All right reserved. By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/jquery.fancybox-media.js"></script> 
<script src="/js/portfolio/jquery.quicksand.js"></script>
<script src="/js/portfolio/setting.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/animate.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/owl-carousel/owl.carousel.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

</body>
</html>
<?php $this->endPage() ?>
