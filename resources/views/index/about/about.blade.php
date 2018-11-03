@extends('index.layout.body')

@section('meta-tags')

    <title> О нас</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')

    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight2">О компаний</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li class="active">О компаний</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section
            class="ls section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25 table_section table_section_md">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="with_pos_button left_button">
                        <img src="images/about.jpg" alt=""/>
                        <a href="gallery-regular-4-cols.html" class="theme_button color2 two_lines_button">
                            View more<br> photos
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="section_header highlight">
                        Компания Парасат
                    </h2>
                    <hr class="star_divider">
                    <p class="fontsize_18">
                        В Алмате сегодня множество школ как классической, так и альтернативных видов йоги. Каждый из
                        представленных центров имеет свою линию обучения
                    </p>
                    <p>
                        В Алмате существует множество центров профессиональной переподготовки. Представлены как
                        программы по подготовке специалистов наиболее востребованных профессий, так и курсы повышения
                        квалификации. А так же: интенсивные тренинги, семинары и мастер классы. Учебные центры Алматы
                        предлагают широкий выбор профессиональных курсов.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
            class="cs parallax page_features section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30 container_padding_0 fluid_padding_0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="21" data-speed="2100">0</h3>
                        <p>News Courses Every Years</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="21" data-speed="2100">0</h3>
                        <p>News Courses Every Years</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="21" data-speed="2100">0</h3>
                        <p>News Courses Every Years</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="21" data-speed="2100">0</h3>
                        <p>News Courses Every Years</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_75 section_padding_bottom_75">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header highlight">
                        Our Professors
                    </h2>
                    <hr class="star_divider">
                    <p class="fontsize_18">
                        Pastrami landjaeger shoulder tri-tip t-bone fatback brisket bresaola kevin meatloaf cupim ribeye
                        short loin. Pork loin drumstick shank.
                    </p>
                </div>
            </div>

            <div class="row topmargin_30">
                <div class="col-sm-12">
                    <div class="owl-carousel team-owl-carousel" data-nav="false" data-dots="false"
                         data-responsive-lg="3" data-center="true" data-loop="true">
                        <div class="vertical-item content-absolute hover-content">
                            <div class="item-media">
                                <img src="images/team/01.jpg" alt="">
                                <div class="media-links">

                                </div>
                            </div>
                            <header class="item-content gradient_bg_color cs">
                                <div class="content-justify vertical-center">
                                    <h4 class="margin_0">Zachary Mendoza</h4>
                                    <span class="small-text medium topmargin_5">Medicine proffessor</span>
                                </div>
                            </header>
                        </div>

                        <div class="vertical-item content-absolute hover-content">
                            <div class="item-media">
                                <img src="images/team/03.jpg" alt="">
                                <div class="media-links">

                                </div>
                            </div>
                            <header class="item-content gradient_bg_color cs">
                                <div class="content-justify vertical-center">
                                    <h4 class="margin_0">George Daniel</h4>
                                    <span class="small-text medium topmargin_5">Art proffessor</span>
                                </div>
                            </header>
                        </div>

                        <div class="vertical-item content-absolute hover-content">
                            <div class="item-media">
                                <img src="images/team/02.jpg" alt="">
                                <div class="media-links">

                                </div>
                            </div>
                            <header class="item-content gradient_bg_color cs">
                                <div class="content-justify vertical-center">
                                    <h4 class="margin_0">Charlotte Hanson</h4>
                                    <span class="small-text medium topmargin_5">Sports proffessor</span>
                                </div>
                            </header>
                        </div>
                    </div>
                    <div class="owl-carousel team-owl-carousel-content topmargin_40" data-nav="false" data-dots="false"
                         data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-mouse-drag="false"
                         data-touch-drag="false">

                         <div class="row columns_padding_25 columns_margin_bottom_30">
                            <div class="col-sm-6">
                                <h1 class="section_header">Zachary Mendoza</h1>
                                <hr class="star_divider">
                                <p class="fontsize_18">Jowl boudin salami beef, turducken pork chop flank chuck sirloin
                                    ham shank. Shankle fatback brisket kevin.</p>
                                <p>Ham hock strip steak alcatra, salami meatball biltong tenderloin. Landjaeger shoulder
                                    flank, ham hock salami drumstick pork ham alcatra turkey chicken bresaola fatback.
                                    Capicola ball tip biltong, frankfurter jowl corned beef pork chop tenderloin
                                    meatloaf filet mignon strip steak.</p>
                                <p class="topmargin_40">
                                    <a href="team-single.html" class="read-more">read more</a>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="progress-bar-title">
                                    Pork belly
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="50">
                                        <span>50%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Kevin drumstick pancetta
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                        <span>90%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Hamburger swine
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="25">
                                        <span>25%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row columns_padding_25 columns_margin_bottom_30">
                            <div class="col-sm-6">
                                <h1 class="section_header">George Daniel</h1>
                                <hr class="star_divider">
                                <p class="fontsize_18">Jowl boudin salami beef, turducken pork chop flank chuck sirloin
                                    ham shank. Shankle fatback brisket kevin.</p>
                                <p>Ham hock strip steak alcatra, salami meatball biltong tenderloin. Landjaeger shoulder
                                    flank, ham hock salami drumstick pork ham alcatra turkey chicken bresaola fatback.
                                    Capicola ball tip biltong, frankfurter jowl corned beef pork chop tenderloin
                                    meatloaf filet mignon strip steak.</p>
                                <p class="topmargin_40">
                                    <a href="team-single.html" class="read-more">read more</a>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="progress-bar-title">
                                    Pork belly
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="50">
                                        <span>50%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Kevin drumstick pancetta
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                        <span>90%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Hamburger swine
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="25">
                                        <span>25%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row columns_padding_25 columns_margin_bottom_30">
                            <div class="col-sm-6">
                                <h1 class="section_header">Charlotte Hanson</h1>
                                <hr class="star_divider">
                                <p class="fontsize_18">Jowl boudin salami beef, turducken pork chop flank chuck sirloin
                                    ham shank. Shankle fatback brisket kevin.</p>
                                <p>Ham hock strip steak alcatra, salami meatball biltong tenderloin. Landjaeger shoulder
                                    flank, ham hock salami drumstick pork ham alcatra turkey chicken bresaola fatback.
                                    Capicola ball tip biltong, frankfurter jowl corned beef pork chop tenderloin
                                    meatloaf filet mignon strip steak.</p>
                                <p class="topmargin_40">
                                    <a href="team-single.html" class="read-more">read more</a>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="progress-bar-title">
                                    Pork belly
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="50">
                                        <span>50%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Kevin drumstick pancetta
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                        <span>90%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Hamburger swine
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="25">
                                        <span>25%</span>
                                    </div>
                                </div>

                                <p class="progress-bar-title">
                                    Turkey filet mignon
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                                        <span>100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


