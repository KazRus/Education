@extends('index.layout.body')

@section('meta-tags')

    <title>Главная страница</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')
    <section class="intro_section page_mainslider ds">
        <div class="flexslider vertical-nav" data-dots="true" data-nav="false">
            <ul class="slides">
                <li>
                    <img src="/images/slide01.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                                <span class="highlight2">Получите</span> востребованные
                                                <br> знания бесплатно
                                                <span class="highlight2">Парасат</span>!
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <p>
                                                Онлайн-курсы от ведущих вузов и компаний страны<br> компаниями и
                                                индивидуальными авторами.
                                            </p>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="courses.html" class="theme_button color2 two_lines_button">
                                                Переити к курсу<br>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="/images/slide02.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                                <span class="highlight2">Education</span> is a tool that
                                                <br> helps us get
                                                <span class="highlight2">Success</span>!
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <p>
                                                Make education your dream and it will help you to fulfill your
                                                dream.<br> Education takes us to the heights of success.
                                            </p>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="courses.html" class="theme_button color2 two_lines_button">
                                                Choose starford<br> today
                                            </a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="/images/slide03.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                                <span class="highlight2">Education</span> is like passport to
                                                <br> the
                                                <span class="highlight2">Better Future</span>!
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <p>
                                                Make education your dream and it will help you to fulfill your
                                                dream.<br> Education takes us to the heights of success.
                                            </p>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="courses.html" class="theme_button color2 two_lines_button">
                                                Choose starford<br> today
                                            </a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

            </ul>
        </div>
    </section>

    <section class="ls section_padding_top_20 section_padding_bottom_10 top_offset_content">
        <div class="container">
            <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                <div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="with_padding gradient_bg_color cs">
                        <h4 class="highlight2 bottommargin_30">
                            Найти курс
                        </h4>
                        <form action="./">

                            <div class="form-group">
                                <label for="course-name" class="sr-only">Название курса
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="course-name"
                                       id="course-name" class="form-control" placeholder="Название курса">
                            </div>
                            <div class="form-group select-group">
                                <label for="category" class="sr-only">Категорий</label>
                                <select id="category" name="category" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Категорий</option>
                                    <option value="cat_1">БиОТ - безопасность и охрана труда</option>
                                    <option value="cat_2">Школьное направление</option>
                                </select>
                                <i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
                            </div>
                            <div class="topmargin_30">
                                <button type="submit" id="search_course_form_submit" name="search_course_submit"
                                        class="theme_button color2">Пойск
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
                        <img src="/images/teaser_icon04.png" alt="" class="icon-background">
                        <h4 class="highlight2 topmargin_0">
                            БиОТ - безопасность и охрана труда
                        </h4>
                        <p class="bottommargin_0 text-left">
                            - промышленная безопасность<br>
                            - пожарная безопасность<br>
                            - оказание доврачебной медицинской помощи
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>
                        <div class="media-links">
                            <a href="#" class="abs-link"></a>
                        </div>
                    </div>
                </div>
                <div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
                        <img src="/images/teaser_icon04.png" alt="" class="icon-background">
                        <h4 class="highlight2 topmargin_0">
                            Школьное направление
                        </h4>
                        <p class="bottommargin_0 text-left">
                            - подготовка к сдачи ЕНТ, ЕГЭ, SAT<br>
                            - подготовка к поступлению в НИШ, КТЛ, РФМШ<br>
                            - подготовка к сдачи IELTS, TOEFL<br>
                            - репетиторство по школьной программе<br>
                            - олимпиадная секция<br>
                            - продлёнка<br>
                            - шахматы
                        </p>
                        <div class="media-links">
                            <a href="#" class="abs-link"></a>
                        </div>
                    </div>
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
                        <img src="/images/about.jpg" alt=""/>
                        <a href="gallery-regular-3-cols.html" class="theme_button color2 two_lines_button">
                            Посмотреть больше<br> фотографий
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="section_header highlight">
                        О школе английского Telc
                    </h2>
                    <hr class="star_divider">
                    <p class="fontsize_18">

                        О школе английского Telc
                        «Telc» - школа английского языка, помогающая своим клиентам знать язык на уровне студентов
                        американских колледжей.
                    </p>
                    <p>
                        В основе курса лежит программа Foundation, используемая ведущими университетами США. Мы
                        открылись в Алматы под маркой школа английского языка Telc. Наша цель: научить вас применять
                        полученные знания в жизни.
                    </p>
                    <p class="topmargin_30">
                        <a href="#" class="read-more">Читать дальше</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="cs parallax page_testimonials section_padding_top_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel testimonials_faces" data-nav="false" data-dots="false" data-margin="0"
                         data-responsive-xs="3" data-resposive-sm="3" data-responsive-md="3" data-responsive-lg="3"
                         data-mouse-drag="false" data-touch-drag="false" data-center="true">
                        <div>
                            <img src="/images/faces/01.jpg" alt="">
                        </div>
                        <div>
                            <img src="/images/faces/02.jpg" alt="">
                        </div>
                        <div>
                            <img src="/images/faces/03.jpg" alt="">
                        </div>
                    </div>
                    <div class="flexslider testimonials_flexslider" data-nav="true" data-dots="true"
                         data-autoplay="false">
                        <ul class="slides">
                            <li>
                                <blockquote class="with_quote topmargin_0">

                                    <div class="item-meta">
                                        <h5>
                                            <a href="#0">Малика</a>
                                        </h5>
                                        <span class="small-text highlight">студент</span>
                                    </div>
                                    Работаю в "air astana" . Посещаю школу TELC. В наше время очень важно и
                                    обязательно знание английского языка . Будучи школьником не придавал этому
                                    особого значения, но сейчас понял что это жизненно необходимо.
                                </blockquote>
                            </li>
                            <li>
                                <blockquote class="with_quote topmargin_0">

                                    <div class="item-meta">
                                        <h5>
                                            <a href="#0">Юля</a>
                                        </h5>
                                        <span class="small-text highlight">студент</span>
                                    </div>
                                    Обучалась в течении месяца в группе, занятия проходили очень легко и эффективно!
                                    Но я сменила групповые на индивидуальные занятия с Питером так как еще
                                    занималась танцами! Очень удобно, график выбирала сама и вуаля теперь я говорю
                                    на английском легко! Спасибо ему ! Сейчас учусь уже в Нью-Йорке!
                                </blockquote>
                            </li>
                            <li>
                                <blockquote class="with_quote topmargin_0">

                                    <div class="item-meta">
                                        <h5>
                                            <a href="#0">Ильяс</a>
                                        </h5>
                                        <span class="small-text highlight">студент</span>
                                    </div>
                                    Перед поступлением в университет, мне необходимо было подтянуть свой английский.
                                    Данную школу мне посоветовал друг, он учился на уровне Б2. А у меня был совсем
                                    начальный уровень, пришел, посоветовали программу для начинающих.
                                    На первом уровне я уже начал говорить! Я был в восторге! И с грамматикой нет
                                    каши в голове.
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header highlight">
                        Другие курсы
                    </h2>
                    <hr class="star_divider">
                    <p class="fontsize_18">
                        Bresaola brisket short loin sausage porchetta fatback ground round pastrami burgdoggen pork
                        jowl jerky venison sirloin ribeye.
                    </p>

                    <div class="owl-carousel topmargin_60" data-responsive-lg="3" data-nav="true">
                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/07.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/01-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">Zachary Mendoza</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Медицина</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">Treating Crohn S Disease With A Special Diet</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/04.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/02-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">Charlotte Hanson</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Рисование</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">How To Maintain Your Mental Health</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/06.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/03-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">George Daniel</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Спорт</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">The Key To Your Motivation And Success</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/04.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/04-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">Esther Craig</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Medicine</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">Law Of Life</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/05.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/05-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">Roger Higgins</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Philosophy</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">Motivate Yourself</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/courses/06.jpg" alt="">
                            </div>
                            <header class="gradient_bg_color cs post-relater-person">
                                <a href="team-single.html" class="avatar">
                                    <img src="/images/team/06-small.jpg" alt="">
                                </a>
										<span class="playfair fontsize_22">
											<a href="#0">Victor Bailey</a>
										</span>
                            </header>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Astronomy</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="course-sample.html">Living In The Now Use It To</a>
                                </h4>
                            </div>
                            <footer class="item-meta bordered-meta greylinks">
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
                                        <span>3269</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
                                        <span>126</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#0">
                                        <i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
                                        <span>550$</span>
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
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
                        <h3 class="counter" data-from="0" data-to="30" data-speed="2100">0</h3>
                        <p>News Courses Every Years</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="28" data-speed="2100">0</h3>
                        <p>Affiliates In All the States of America</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="3720" data-speed="2100">0</h3>
                        <p>Happy Graduates Per Year</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser-icon size_big highlight2">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h3 class="counter" data-from="0" data-to="874" data-speed="2100">0</h3>
                        <p>Professional Teachers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header highlight">
                        Новости
                    </h2>
                    <hr class="star_divider">
                    <p class="fontsize_18">
                        Pastrami landjaeger shoulder tri-tip t-bone fatback brisket bresaola kevin meatloaf cupim
                        ribeye short loin. Pork loin drumstick shank.
                    </p>

                    <div class="owl-carousel topmargin_60" data-responsive-lg="3" data-nav="true">

                        <article class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/blog_post1.jpg" alt="">
                                <div class="media-links color">
                                    <a href="blog-single-right.html" class="abs-link"></a>
                                </div>
                                <div class="cs vertical_gradient_bg_color entry-meta media-meta text-center">
                                    <div>
                                        <span class="date">15</span>
                                        <span class="small-text big-spacing">oct</span>
                                    </div>
                                    <div class="side-media-links">
                                        <a class="prettyPhoto" title="" data-gal="prettyPhoto[gal]"
                                           href="images/blog_post1.jpg">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Medicine</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Cras et tristique ligula, ut molestie</a>
                                </h4>
                                <div class="entry-content">
                                    <p>Short loin ball tip frankfurter tenderloin, ground round capicola alcatra
                                        rump cow bacon cupim leberkas tongue pig.</p>
                                </div>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/blog_post2.jpg" alt="">
                                <div class="media-links color">
                                    <a href="blog-single-right.html" class="abs-link"></a>
                                </div>
                                <div class="cs vertical_gradient_bg_color entry-meta media-meta text-center">
                                    <div>
                                        <span class="date">22</span>
                                        <span class="small-text big-spacing">oct</span>
                                    </div>
                                    <div class="side-media-links">
                                        <a class="prettyPhoto" title="" data-gal="prettyPhoto[gal]"
                                           href="images/blog_post1.jpg">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Philosophy</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Peace On Earth A Wonderful Wish But No Way</a>
                                </h4>
                                <div class="entry-content">
                                    <p>Short loin ball tip frankfurter tenderloin, ground round capicola alcatra
                                        rump cow bacon cupim leberkas tongue pig.</p>
                                </div>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_border">
                            <div class="item-media">
                                <img src="/images/blog_post3.jpg" alt="">
                                <div class="media-links color">
                                    <a href="blog-single-right.html" class="abs-link"></a>
                                </div>
                                <div class="cs vertical_gradient_bg_color entry-meta media-meta text-center">
                                    <div>
                                        <span class="date">31</span>
                                        <span class="small-text big-spacing">oct</span>
                                    </div>
                                    <div class="side-media-links">
                                        <a class="prettyPhoto" title="" data-gal="prettyPhoto[gal]"
                                           href="images/blog_post1.jpg">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                        <a href="blog-single-right.html">
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <div class="catogories-links highlight2links small-text medium">
                                    <a href="courses.html">Astronomy</a>
                                </div>
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Dude You Re Getting A Telescope</a>
                                </h4>
                                <div class="entry-content">
                                    <p>Short loin ball tip frankfurter tenderloin, ground round capicola alcatra
                                        rump cow bacon cupim leberkas tongue pig.</p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


