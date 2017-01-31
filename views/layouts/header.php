<!DOCTYPE html>
<html>
    <head>
        <title>#VOLGSTORE - продажа оригинальной продукции</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="/template/images/favicon.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="/template/css/bootstrap.min.css">
        <link rel="stylesheet" href="/template/css/style.css">
        <link rel="stylesheet" href="/template/css/style-responsive.css">
        <link rel="stylesheet" href="/template/css/animate.min.css">
        <link rel="stylesheet" href="/template/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="/template/css/owl.carousel.css">
        <link rel="stylesheet" href="/template/css/magnific-popup.css">        

        
    </head>
  <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42269659 = new Ya.Metrika({ id:42269659, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42269659" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Загрузка...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="/" class="logo">
                            #VOLGSTORE
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/catalog/" >Каталог</a></li>
                            <li><a href="/contacts/" >Контакты</a></li>
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                                                       
                            <!-- Cart -->
                            <li>
                                <a href="/cart/" class="active"><i class="fa fa-shopping-cart"></i> Корзина(<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</a>
                            </li>
                            <!-- End Cart -->
                                                        
                            <!-- Account -->
                            <?php if (User::isGuest()): ?> 
                            <li>
                                <a href="/user/login/"><span class="btn btn-mod btn-circle btn-gray"><i class="fa fa-user"></i> Войти</span></a>
                            </li>
                            <?php else: ?>
                            <li>
                                <a href="/cabinet/"><span class="btn btn-mod btn-circle btn-gray"><i class="fa fa-user"></i>Кабинет</span></a>
                            </li>
                            <?php endif; ?>
                            <!-- End Account -->
                                                       
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            

