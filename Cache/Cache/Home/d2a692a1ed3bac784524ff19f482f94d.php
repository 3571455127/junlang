<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>

    <meta name="description" content="<?php echo ($seo_description); ?>"/>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

    <meta name="renderer" content="webkit">

    <meta name="viewport"

        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <!-- wap -->

    <meta name="wap-font-scale" content="no" />

    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="format-detection" content="telephone=yes" />

    <meta name="Robots" content="all">

    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">



    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <script src="__PUBLIC__/www/js/jquery.min.js"></script>

    <script src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>

    <script src="__PUBLIC__/www/js/circleChart.min.js"></script>

    <script src="__PUBLIC__/www/js/swiper.min.js"></script>

    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

    <script src="__PUBLIC__/www/js/main.js"></script>



</head>



<body data-spy="scroll" data-target="#navbar-example">



    <header>



        <nav class="navbar navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>

                </div>



                <div id="navbar-example">

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">

                            <li class="active"><a href="/index.php">Home</a></li>

                            <li><a href="#about">About Junon</a></li>

                            <li><a href="#product">Product</a></li>

                            <li><a href="#service">Service</a></li>

                            <li><a href="#partner">Partner</a></li>

                            <li><a href="#contact">Contact Us</a></li>

                        </ul>

                    </div>

                </div>



            </div>

        </nav>

    </header>
<div class="index">

    <!-- banner  -->
    <div class="banner">
        <!-- pc -->
        <div class="pc-banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-btn">
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>

            </div>
        </div>
        <!-- wap -->
        <div class="wap-banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div>
        <a id="about"></a>
        <div class="about">
            <div class="container">
                <div class="row">
                    <?php getcatvar('page','id = 74','cont');?>
                </div>
            </div>
        </div>
    </div>

    <!-- product -->
    <div>
        <a id="product"></a>
        <div class="product">
            <div class="container">
                <div class="row">
                    <h3>Product</h3>
                    <div class="list clearfix">
                        <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="box">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    <div class="txt">
                                        <?php echo ($r["cont"]); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end --><?php endforeach; endif;?>
                    </div>
                    <a class="pro-contact" href="#contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Service -->
    <div>
        <a id="service"> </a>
        <div class="service">
            <div class="container">
                <div class="row">
                    <?php getcatvar('page','id = 108','cont');?>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners -->
    <div>
        <a id="partner"> </a>
        <div class="partner">
            <div class="container">
                <div class="row">
                    <h3>partner</h3>
                    <!-- pc -->
                    <div class="pc-partner">
                        <?php getcatvar('page','id = 77','cont');?>
                    </div>

                    <!-- wap-partner -->
                    <div class="wap-partner">
                        <?php getcatvar('page','id = 77','pcont');?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div>
        <a id="contact"></a>
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="left col-lg-6 col-md-6">
                            <div class="footer-logo"><img src="__PUBLIC__/www/images/footer-logo.png" alt=""></div>
                            <div class="ad"><?php echo ($name); ?></div>
                            <div class="info">
                                <ul>
                                    <li><?php echo ($address); ?></li>
                                    <li><?php echo ($phonea); ?></li>
                                    <li><?php echo ($phone); ?></li>
                                    <li><?php echo ($fox); ?></li>

                                </ul>
                            </div>
                            <div class="share">
                                <ul class="clearfix">
                                    <li class="linkedin"><a href="<?php echo ($ins); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="__PUBLIC__/www/images/linkedin.png" alt=""></a>
                                    </li>
                                    <li class="twitter"><a href="<?php echo ($twitter); ?>" title="" target="_blank"
                                            rel="nofollow"><img src="__PUBLIC__/www/images/twitter.png" alt=""></a>
                                    </li>
                                    <li class="whatsapp"><a href="<?php echo ($Whatsapp); ?>" title="" target="_blank"
                                            rel="nofollow"><img src="__PUBLIC__/www/images/whatsapp.png" alt=""></a>
                                    </li>
                                    <li class="skype"><a href="<?php echo ($Skype); ?>" title="" target="_blank" rel="nofollow"><img
                                                src="__PUBLIC__/www/images/skype.png" alt=""></a>
                                    </li>
                                    <li class="youtube"><a href="<?php echo ($youtube); ?>" title="" target="_blank"
                                            rel="nofollow"><img src="__PUBLIC__/www/images/youtube.png" alt=""></a>
                                    </li>
                                    <li class="facebook"><a href="<?php echo ($facebook); ?>" title="" target="_blank"
                                            rel="nofollow"><img src="__PUBLIC__/www/images/facebook.png" alt=""></a>
                                    </li>
                                    <li><a href="javascript:;"><img src="__PUBLIC__/www/images/wechat.png"
                                                alt="wechat"></a>
                                        <div class="wechat-box"><img src="__PUBLIC__/www/images/code.png" alt=""></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right col-lg-6 col-md-6">
                            <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit2(this);"
                                action="index.php?g=Home&a=message">
                                <input type="text" placeholder="* Name" name="name">
                                <input type="text" placeholder="* Emai" name="email">
                                <input type="text" placeholder="Phone Number" name="phone">
                                <textarea placeholder="* Message" name="message"></textarea>
                                <input type="submit" value="Send" class="submit-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <!-- footer -->
    <footer>
        <div class="goTop">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>
</body>

</html>