@extends('index.layout.body')

@section('meta-tags')

    <title>Новости</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')

    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight2">Другие новости</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li class="active">Другие новости</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">

                    <article class="event-single vertical-item content-padding big-padding  with_border">
                        <div class=" entry-thumbnail">
                            <img src="images/gallery/01.jpg" alt="">
                        </div>

                        <div class="item-content">

                            <header class="entry-header">

                                <p class="grey darklinks margin_0">
                                    <span class="rightpadding_20"><i class="fa fa-calendar highlight2"></i> Feb 12, 2017</span>
                                    <i class="fa fa-map-marker highlight2"></i> Conference Hall
                                </p>

                                <h1 class="entry-title topmargin_10">
                                    <a href="event-single-left.html" rel="bookmark">Single Event Title</a>
                                </h1>

                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut  wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                </p>
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel <a href="#">illum dolore eu feugiat</a> nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. At vero eos et accusam et justo duo.
                                </p>

                            </div>

                        </div>
                        <!-- .item-content -->

                    </article>

                    <div class="with_padding big-padding  comments-wrapper with_border">
                        <div class="comments-area" id="comments">
                            <ol class="comment-list">
                                <li class="comment even thread-even depth-1 parent">
                                    <article class="comment-body media">
                                        <div class="media-left">
                                            <img class="media-object" alt="" src="images/faces/02.jpg">
                                        </div>
                                        <div class="media-body">
                                            <div class="comment-meta darklinks">
                                                <a class="author_url" rel="external nofollow" href="#">Jeanette Dixon</a>
														<span class="comment-date">

															<time class="entry-date small-text highlight2 semibold" datetime="2017-03-13T08:50:40+00:00">
                                                                June 11, 2017
                                                            </time>
														</span>
                                            </div>
                                            <p>Pig meatloaf jowl pastrami strip steak drumstick landjaeger shoulder porchetta beef ribs beef t-bone meatball cow andouille. Pork pancetta salami meatloaf ribeye.</p>
													<span class="reply">
														<a href="#respond">
                                                            <span class="sr-only">Reply</span>
                                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                                        </a>
													</span>
                                        </div>
                                    </article>
                                    <!-- .comment-body -->

                                    <ol class="children">
                                        <li class="comment byuser odd alt depth-2 parent">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="images/faces/03.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Stanley Sparks</a>
																<span class="comment-date">

																	<time class="entry-date small-text highlight2 semibold" datetime="2017-03-13T08:50:40+00:00">
                                                                        June 11, 2017
                                                                    </time>
																</span>
                                                    </div>
                                                    <p>Pig meatloaf jowl pastrami strip steak drumstick landjaeger shoulder porchetta beef ribs beef t-bone meatball cow andouille. Pork pancetta salami meatloaf ribeye.</p>
															<span class="reply">
																<a href="#respond">
                                                                    <span class="sr-only">Reply</span>
                                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                                </a>
															</span>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->

                                            <ol class="children">
                                                <li class="comment byuser even depth-3">
                                                    <article class="comment-body media">
                                                        <div class="media-left">
                                                            <img class="media-object" alt="" src="images/faces/01.jpg">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="comment-meta darklinks">
                                                                <a class="author_url" rel="external nofollow" href="#">Pearl McGee</a>
																		<span class="comment-date">

																			<time class="entry-date small-text highlight2 semibold" datetime="2017-03-13T08:50:40+00:00">
                                                                                June 11, 2017
                                                                            </time>
																		</span>
                                                            </div>
                                                            <p>Pig meatloaf jowl pastrami strip steak drumstick landjaeger shoulder porchetta beef ribs beef t-bone meatball cow andouille. Pork pancetta salami meatloaf ribeye.</p>
																	<span class="reply">
																		<a href="#respond">
                                                                            <span class="sr-only">Reply</span>
                                                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                                                        </a>
																	</span>
                                                        </div>
                                                    </article>
                                                    <!-- .comment-body -->
                                                </li>
                                                <!-- #comment-## -->
                                            </ol>
                                            <!-- .children -->
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>
                                    <!-- .children -->
                                </li>
                                <!-- #comment-## -->

                            </ol>
                            <!-- .comment-list -->
                        </div>
                        <!-- #comments -->


                        <div class="comment-respond" id="respond">
                            <h3>Leave Comment</h3>

                            <form class="comment-form" id="commentform" method="post" action="./">
                                <div class="row columns_padding_10">
                                    <div class="col-md-6">
                                        <div class="form-group margin_0">
                                            <label for="author">Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group margin_0">
                                            <label for="comment_email">E-mail Address</label>
                                            <input type="email" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Enter your e-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group margin_0">
                                            <label for="comment">Comment</label>
                                            <textarea aria-required="true" rows="5" cols="45" name="comment" id="comment" class="form-control" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit topmargin_10">
                                    <button type="submit" id="submit" name="submit" class="theme_button wide_button color2">Send now!</button>
                                </div>
                            </form>
                        </div>
                        <!-- #respond -->
                    </div>

                </div>
                <!--eof .col-sm-8 (main content)-->

                <!-- sidebar -->
                <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">



                    <div class="widget widget_popular_courses">

                        <h3 class="widget-title">Popular courses</h3>
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/courses/01_square.jpg" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="entry-title">
                                        <a href="blog-single-left.html">
                                            The Terrible Truth About Acid Reflux Disease Short Ribs Brisket
                                        </a>
                                    </h4>
                                    <p class="small-text medium highlight2links">
                                        <a href="#0">Medicine</a>
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/courses/05_square.jpg" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="entry-title">
                                        <a href="blog-single-left.html">
                                            Living In The Now Use It To Enrich Your Life Ribeye Turducken
                                        </a>
                                    </h4>
                                    <p class="small-text medium highlight2links">
                                        <a href="#0">Painting</a>
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/courses/03_square.jpg" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="entry-title">
                                        <a href="blog-single-left.html">
                                            Peace On Earth A Wonderful Wish But No Way Pork Belly
                                        </a>
                                    </h4>
                                    <p class="small-text medium highlight2links">
                                        <a href="#0">Sports</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>







                </aside>
                <!-- eof aside sidebar -->

            </div>
        </div>
    </section>

@endsection


