<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="<?php echo base_url()."assets/img/fav-icon.png"; ?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>gaconstructions</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url()."assets/css/font-awesome.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/css/materialdesignicons.min.css"; ?>" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="<?php echo base_url()."assets/vendors/revolution/css/settings.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendors/revolution/css/layers.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendors/revolution/css/navigation.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendors/animate-css/animate.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendors/owl-carousel/assets/owl.carousel.min.css"; ?>" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="<?php echo base_url()."assets/css/style.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/css/responsive.css"; ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>(012) - 3456789</a>
                        <a href="#"><i class="fa fa-map-marker"></i>1234 Cafficic, California</a>
                        <a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="<?php echo base_url()."index.php/Register/viewRegister"; ?>">Sign Up</a></li>
                                <li><a href="<?php echo base_url()."index.php/Login/viewLogin"; ?>">Sign In</a></li>
                                <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Main Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url()."assets/img/home-slider/slider-1.jpg"; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['-38','-38','-38','-20','-20']"
                            data-fontsize="['28','28','28','28']"
                            data-lineheight="['38','38','38','38']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We are weBuilder</div>

                            <div class="tp-caption secand_text"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['38','38','38','38','38']"
                            data-fontsize="['110','110','110','50','50']"
                            data-lineheight="['100','100','100','70','70']"
                            data-width="['none','none','none','none']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]">we innovate </div>
                        </div>
                    </li>
                    <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url()."assets/img/home-slider/slider-2.jpg"; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="slider_text_box2">
                            <div class="tp-caption first_text"
                            data-x="['left','left','left','left','left']"
                            data-y="['middle','middle','middle','middle','middle']"
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['-30','-30','-30','-30','-60']"
                            data-fontsize="['80','80','60','60','40']"
                            data-lineheight="['90','90','70','70','50']"
                            data-width="['none','none','none','none']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]">we build dream</div>

                            <div class="tp-caption secand_text"
                            data-x="['left','left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['50','50','50','40','0']"
                            data-fontsize="['28','28','28','20','20']"
                            data-lineheight="['38','38','38','30','30']"
                            data-width="['760','760','760','550','400']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We made just most advance & user friendly constraction theme in the world</div>

                            <div class="tp-caption"
                            data-x="['left','left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['140','140','140','130','90']"
                            data-fontsize="['28','28','28','28']"
                            data-lineheight="['38','38','38','38']"
                            data-width="['730']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">browse services</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Main Slider Area =================-->
        <!--================Get Quote Area =================-->
        <section class="get_quote_area">
            <div class="container">
                <div class="pull-left">
                    <h4>Looking for a quality and affordable constructor for your next project?</h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn" href="#">GET A QUOTE</a>
                </div>
            </div>
        </section>
        <!--================End Get Quote Area =================-->

        <!--================Who We Are Area =================-->
        <section class="who_we_are_area">
            <div class="container">
                <div class="row who_we_inner">
                    <div class="col-md-5">
                        <div class="who_we_left_content">
                            <div class="main_w_title">
                                <h2>Who <br class="title_br" /> We Are?</h2>
                                <h6>All About US</h6>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                            <div class="border_bar"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="who_we_image">
                            <img src="<?php echo base_url()."assets/img/who-we.jpg"; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Who We Are Area =================-->

        <!--================Our Service Area =================-->
        <section class="our_service_area">
            <div class="left_service">
                <div class="left_service_inner">
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-1.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-1.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>PRE-CONSTRUCTION</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-2.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-2.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>NEW-CONSTRUCTION</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-3.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-3.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>REMODEL & REIMAGE</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-4.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-4.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>LOCATION</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-5.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-5.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>CIVIL & ARCHITECTURE</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="service_item">
                        <div class="service_item_inner">
                            <div class="service_icon">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-6.png"; ?>" alt="">
                                <img src="<?php echo base_url()."assets/img/icon/s-icon-hover-6.png"; ?>" alt="">
                            </div>
                            <a href="#"><h4>ENGINEERING</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                            <a class="view_btn" href="#">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_service">
                <div class="right_service_text">
                    <div class="main_b_title">
                        <h2>our <br class="title_br" /> service</h2>
                        <h6>The Best Construction <br class="sub_br" /> Company</h6>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam quis.</p>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    <div class="border_bar"></div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->

        <!--================Our Project Area =================-->
        <section class="our_project_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="project_left_side">
                            <div class="main_w_title">
                                <h2>OUR <br class="title_br" /> projects</h2>
                                <h6>Great & Awesome Works</h6>
                            </div>
                            <ul class="our_project_filter">
                                <li class="active" data-filter="*"><a href="#">All</a></li>
                                <li data-filter=".building"><a href="#">Buildings</a></li>
                                <li data-filter=".interior"><a href="#">Interior</a></li>
                                <li data-filter=".design"><a href="#">Design</a></li>
                                <li data-filter=".isolation"><a href="#">Isolation</a></li>
                                <li data-filter=".plumbing"><a href="#">Plumbing</a></li>
                                <li data-filter=".tiling"><a href="#">Tiling</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="our_project_details">
                            <div class="project_item building isolation tiling">
                                <img src="<?php echo base_url()."assets/img/project/project-1.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_item building isolation plumbing">
                                <img src="<?php echo base_url()."assets/img/project/project-2.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_item building interior design">
                                <img src="<?php echo base_url()."assets/img/project/project-3.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_item interior isolation plumbing">
                                <img src="<?php echo base_url()."assets/img/project/project-4.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_item interior design tiling">
                                <img src="<?php echo base_url()."assets/img/project/project-5.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_item design plumbing tiling">
                                <img src="<?php echo base_url()."assets/img/project/project-6.jpg"; ?>" alt="">
                                <div class="project_hover">
                                    <div class="project_hover_inner">
                                        <div class="project_hover_content">
                                            <a href="#"><h4>Jahanara Vila</h4></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                            <a class="view_btn" href="#">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Project Area =================-->

        <!--================Work Area =================-->
        <section class="work_area">
            <div class="container">
                <div class="work_content">
                    <div class="main_c_title">
                        <h2>work <br class="title_br" />with us</h2>
                        <h6>Lets Get Offer</h6>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                    <a class="get_bg_btn" href="#">GET A QUOTE</a>
                </div>
            </div>
        </section>
        <!--================End Work Area =================-->

        <!--================Our Team Area =================-->
        <section class="our_team_area">
            <div class="container">
                <div class="main_b_r_title">
                    <h2>our <br class="title_br" />team</h2>
                    <h6>We Are Awesome & Skilled</h6>
                </div>
                <div class="team_slider owl-carousel">
                    <div class="item">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="<?php echo base_url()."assets/img/team/team-1.jpg"; ?>" alt="">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="member_name">
                                <a href="#"><h4>A. R. Khan</h4></a>
                                <h5>Civil Engenear</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="<?php echo base_url()."assets/img/team/team-3.jpg"; ?>" alt="">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="member_name">
                                <a href="#"><h4>Sharmin sarkar</h4></a>
                                <h5>Civil Engenear</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="<?php echo base_url()."assets/img/team/team-1.jpg"; ?>" alt="">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="member_name">
                                <a href="#"><h4>rashIdul islam</h4></a>
                                <h5>Civil Engenear</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="<?php echo base_url()."assets/img/team/team-3.jpg"; ?>" alt="">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="member_name">
                                <a href="#"><h4>A. R. Khan</h4></a>
                                <h5>Civil Engenear</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Team Area =================-->

        <!--================Counter Area =================-->
        <section class="counter_area">
            <div class="container">
                <div class="row counter_inner">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter_item">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <h4 class="counter">245</h4>
                            <h5>total projects</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter_item">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h4 class="counter">535</h4>
                            <h5>houses build</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter_item">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h4 class="counter">288</h4>
                            <h5>experiences staff</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter_item">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                            <h4 class="counter">750</h4>
                            <h5>happy clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Counter Area =================-->

        <!--================Testimonials Area =================-->
        <section class="testimonials_area">
            <div class="container">
                <div class="row testimonials_inner">
                    <div class="col-md-4">
                        <div class="main_w_title">
                            <h2>Client <br class="title_br" />Says</h2>
                            <h6>Golden Word</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="testimonials_slider owl-carousel">
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="<?php echo base_url()."assets/img/testimonials/test-1.jpg"; ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="<?php echo base_url()."assets/img/testimonials/test-1.jpg"; ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="<?php echo base_url()."assets/img/testimonials/test-1.jpg"; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Latest News Area =================-->
        <section class="latest_news_area">
            <div class="container">
                <div class="main_c_b_title">
                    <h2>latest <br class="title_br" />news</h2>
                    <h6>Construction World</h6>
                </div>
                <div class="row latest_news_inner">
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="<?php echo base_url()."assets/img/blog/l-news/l-news-1.jpg"; ?>" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="<?php echo base_url()."assets/img/blog/l-news/l-news-2.jpg"; ?>" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="<?php echo base_url()."assets/img/blog/l-news/l-news-3.jpg"; ?>" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest News Area =================-->

        <!--================Clients Area =================-->
        <section class="clients_area">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-1.png"; ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-2.png"; ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-3.png"; ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-4.png"; ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-5.png"; ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()."assets/img/clients/client-6.png"; ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End Clients Area =================-->

        <!--================Map Area =================-->
        <div id="mapBox" class="mapBox row m0"
        data-lat="40.7112969"
        data-lon="-74.1393991"
        data-zoom="10"
        data-marker="img/map-marker.png"
        data-info="Dhaka, uttara, Sector 10, Road 22"
        data-mlat="40.7112969"
        data-mlon="-74.1393991"></div>
        <!--================End Map Area =================-->
        <!--================Address Area =================-->
        <section class="address_area">
            <div class="container">
                <div class="row address_inner">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url()."assets/img/icon/place-icon.png"; ?>" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Office Address :</h4>
                                <h5>1234 Cafficic, California, USA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url()."assets/img/icon/phone-icon.png"; ?>" alt="">
                            </div>
                            <div class="media-body">
                                <h5>(012) 3456789</h5>
                                <h5>(012) 3456789</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url()."assets/img/icon/inbox-icon.png"; ?>" alt="">
                            </div>
                            <div class="media-body">
                                <h5>info@domain.com</h5>
                                <h5>info@domain.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Address Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img src="<?php echo base_url()."assets/img/footer-logo.png"; ?>" alt="">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget recent_widget">
                                <div class="f_w_title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?php echo base_url()."assets/img/blog/recent-post/recent-1.png"; ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under con-struction</p></a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?php echo base_url()."assets/img/blog/recent-post/recent-2.png"; ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under con-struction</p></a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>1234 Cafficic, California, USA</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>(012) 3456789 </p>
                                            <p>(012) 3456789 </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>info@domain.com</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>Give Us A Call</h5>
                                <h4>(012) 3456789</h4>
                                <h5>or</h5>
                                <a class="get_bg_btn" href="#">GET A QUOTE</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->









        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url()."assets/js/jquery-2.2.4.js"; ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url()."assets/vendors/revolution/js/jquery.themepunch.tools.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"; ?>"></script>

        <script src="<?php echo base_url()."assets/vendors/owl-carousel/owl.carousel.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/isotope/imagesloaded.pkgd.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/isotope/isotope.pkgd.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/magnific-popup/jquery.magnific-popup.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/counterup/waypoints.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/counterup/jquery.counterup.min.js"; ?>"></script>
        <script src="<?php echo base_url()."assets/vendors/flex-slider/jquery.flexslider-min.js"; ?>"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url()."assets/js/gmaps.min.js"; ?>"></script>

        <script src="<?php echo base_url()."assets/js/theme.js"; ?>"></script>
        </body>
        </html>
