<?php $site_url = $this->Url->build('/',true); ?>
    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <div class="col-sm-8 blogLeft">
                        <div class="blog-post-wrapper">


                            <article class="blog-post-item">
                                <div class="inner-box">


                                    <!--blog image-->
                                    <div class="blog-post-img">

                                        <a href="blog-details.html">
                                            <figure>
                                                <img class="img-responsive" alt="blog-post image" src="<?=$site_url?>img/blog/<?php echo $Blog['image']?>">
                                            </figure>
                                        </a>
                                    </div>

                                    <!--blog content-->

                                    <div class="blog-post-content-desc">


                            <span class="info-row blog-post-meta"> <span class="date"><i class=" icon-clock"> </i> <?php echo date("F j, Y, g:i a",strtotime($Blog->created));?></span>  -
                                <span class="author"> <i class="fa fa-user"></i>  <a href="#" title="Posts by Jhon Doe"
                                                                                     rel="author">Admin</a> </span>  -
                                <span class="item-location"><i class="fa fa-comments"></i> Comments <a
                                        href="#">0</a> </span> </span>


                                        <div class="blog-post-content">
                                            <h2><a href="blog-details.html"><?php echo $Blog->title;?></a></h2>


                                            <div class="blog-article-text">
                                                <p> <?php echo $Blog->post;?></p>
                                            </div>
                                        </div>


                                        <div class="clearfix">
                                            <div class="col-md-12  blog-post-bottom">

                                                <ul class="share-this-post">
                                                    <li>Share This:</li>

                                                    <li><a class="google-plus"><i class="fa fa-google-plus"></i>Google-plus</a>
                                                    </li>
                                                    <li><a class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
                                                    </li>
                                                    <li><a><i class="fa fa-twitter"></i>Twitter</a>
                                                    </li>
                                                    <li><a class="pinterest"><i
                                                            class="fa fa-pinterest"></i>Pinterest</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="blog-post-footer">


                                        <div style="clear: both"></div>


                                        <div class="inner ">


                                            <div class="blogs-comments-area">
                                                <h3 class="list-title"><a href="#" class="post-comments">Comments</a>
                                                </h3>

                                                <div class="blogs-comment-respond" id="respond">
                                                    <ul class="blogs-comment-list">

                                                        <li>
                                                            <div class="blogs-comment-wrapper">
                                                                <div class="blogs-comment-avatar">
                                                                    <figure>
                                                                        <img alt="avatar" src="<?=$site_url?>img/user.jpg">
                                                                    </figure>
                                                                </div>
                                                                <div class="blogs-comment-details">
                                                                    <div class="blogs-comment-name">
                                                                        <a href="#">Shawn F. </a>
                                                                        <span class="blogs-comment-date">2 days ago</span>
                                                                    </div>
                                                                    <div class="blogs-comment-description">
                                                                        <p>Etiam porttitor magna at condimentum
                                                                            sollicitudin.
                                                                            Cras sit amet nisi et nunc elementum rutrum
                                                                            non eget dui.</p>
                                                                    </div>
                                                                    <div class="blogs-comment-reply"><a
                                                                            href="#">Reply</a></div>
                                                                </div>
                                                            </div>


                                                        </li>
                                                        <li>
                                                            <div class="blogs-comment-wrapper">
                                                                <div class="blogs-comment-avatar">
                                                                    <figure>
                                                                        <img alt="avatar" src="<?=$site_url?>img/user.jpg">
                                                                    </figure>
                                                                </div>
                                                                <div class="blogs-comment-details">
                                                                    <div class="blogs-comment-name">
                                                                        <a href="#">Tyron L. Ballard</a>
                                                                        <span class="blogs-comment-date">2 days ago</span>
                                                                    </div>
                                                                    <div class="blogs-comment-description">
                                                                        <p>
                                                                            In ullamcorper lectus congue sapien
                                                                            pulvinar, eget gravida metus vestibulum.
                                                                            Donec cursus velit vel urna rutrum
                                                                            tristique.

                                                                        </p>
                                                                    </div>
                                                                    <div class="blogs-comment-reply"><a
                                                                            href="#">Reply</a></div>
                                                                </div>
                                                            </div>

                                                            <ul>

                                                                <li>
                                                                    <div class="blogs-comment-wrapper">
                                                                        <div class="blogs-comment-avatar">
                                                                            <figure>
                                                                                <img alt="avatar" src="<?=$site_url?>img/user.jpg">
                                                                            </figure>
                                                                        </div>
                                                                        <div class="blogs-comment-details">
                                                                            <div class="blogs-comment-name">
                                                                                <a href="#">Mike K. Melancon</a>
                                                                                <span class="blogs-comment-date">15 November 2015</span>
                                                                            </div>
                                                                            <div class="blogs-comment-description">
                                                                                <p> Sed scelerisque ante a lorem
                                                                                    efficitur posuere sit amet ornare
                                                                                    ante. Vestibulum hendrerit leo at
                                                                                    libero bibendum, et eleifend odio
                                                                                    dictum.
                                                                                    Nunc porttitor metus vitae sapien
                                                                                    blandit, ac imperdiet nisl
                                                                                    euismod.</p>
                                                                            </div>
                                                                            <div class="blogs-comment-reply"><a
                                                                                    href="#">Reply</a></div>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li>
                                                                    <div class="blogs-comment-wrapper">
                                                                        <div class="blogs-comment-avatar">
                                                                            <figure>
                                                                                <img alt="avatar" src="<?=$site_url?>img/user.jpg">
                                                                            </figure>
                                                                        </div>
                                                                        <div class="blogs-comment-details">
                                                                            <div class="blogs-comment-name">
                                                                                <a href="#">David S. Ledezma</a>
                                                                                <span class="blogs-comment-date">24 November 2015</span>
                                                                            </div>
                                                                            <div class="blogs-comment-description">
                                                                                <p>Donec dapibus mauris sodales tellus
                                                                                    consectetur condimentum.
                                                                                    Proin id erat dictum, maximus lorem
                                                                                    eu, mattis tortor.</p>
                                                                            </div>
                                                                            <div class="blogs-comment-reply"><a
                                                                                    href="#">Reply</a></div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <li>
                                                            <div class="blogs-comment-wrapper">
                                                                <div class="blogs-comment-avatar">
                                                                    <figure>
                                                                        <img alt="avatar" src="<?=$site_url?>img/user.jpg">
                                                                    </figure>
                                                                </div>
                                                                <div class="blogs-comment-details">
                                                                    <div class="blogs-comment-name">
                                                                        <a href="#">Michelle Garrett</a>
                                                                        <span class="blogs-comment-date">20 November 2015</span>
                                                                    </div>
                                                                    <div class="blogs-comment-description">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Ut mauris magna, lacinia ac
                                                                            purus quis, rutrum bibendum leo sit
                                                                            amet.</p>
                                                                    </div>
                                                                    <div class="blogs-comment-reply"><a
                                                                            href="#">Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    <!--Comment list End-->


                                                    <h3 class="blogs-comment-reply-title list-title">LEAVE A
                                                        COMMENT</h3>

                                                    <form class="blogs-comment-form" id="blogs-commentform"
                                                          method="post" action="#">
                                                        <div class="row form-group">
                                                            <div class="col-md-6"><input class="form-control"
                                                                                         type="text"
                                                                                         placeholder="Enter your name"
                                                                                         aria-required="true" value=""
                                                                                         name="author"></div>
                                                            <div class="col-md-6 text-left"><span>Name*</span></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-6"><input class="form-control"
                                                                                         type="text"
                                                                                         placeholder="Enter your email"
                                                                                         aria-required="true" value=""
                                                                                         name="email"></div>
                                                            <div class="col-md-6 text-left"><span>E-mail*</span></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-6"><input class="form-control"
                                                                                         type="text" value=""
                                                                                         placeholder="Enter your website"
                                                                                         name="url"></div>
                                                            <div class="col-md-6 text-left"><span>Website*</span></div>
                                                        </div>

                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Message"
                                                                      name="blogs-comment"></textarea></div>

                                                        <button type="submit" class="btn-success btn btn-lg"> Submit
                                                        </button>


                                                </div>
                                                <!-- #respond -->


                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </article>


                        </div>
                        <!--/.blog-post-wrapper-->
                    </div>
                    <!--blogLeft-->


                    <div class="col-sm-4 blogRight page-sidebar">
                        <aside>
                            <div class="inner-box">
                                <div class="categories-list  list-filter">
                                    <h5 class="list-title uppercase"><strong><a href="#"> Categories</a></strong></h5>
                                    <ul class=" list-unstyled list-border ">
                                        <?php foreach($BlogCategories as $BlogCategory){?>
                                        <li><a href="#"><span class="title"><?php echo $BlogCategory['title']?></span><span class="count"> (0)</span></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <!--/.categories-list-->
                                <div class="categories-list  list-filter">
                                    <h5 class="list-title uppercase"><strong><a href="#"> recent Blogs</a></strong></h5>


                                    <div class="blog-popular-content">
                                         <?php if($Blogs){
                                foreach ($Blogs as $Blog){?>
                                        <div class="item-list">


                                            <div class="col-sm-4 col-xs-4 no-padding photobox">
                                                <div class="add-image"><a href="<?=$site_url."blogs/blogDetails/".$Blog->id?>"><img class="no-margin"
                                                                                                       src="<?=$site_url?>img/blog/<?php echo $Blog->image?>" alt="img"></a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-sm-8 col-xs-8 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="<?=$site_url."blogs/blogDetails/".$Blog->id?>"><?php echo substr($Blog->title,0,20);?></a></h5>
                                                    <span class="info-row">  <span class="date"><i
                                                            class=" icon-clock"> </i><?php echo date("F j, g:i a",strtotime($Blog->created));?></span> </span>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>
                                         <?php }}?>
                                    </div>


                                    <div style="clear:both"></div>

                                    <!--/.categories-list-->

                                </div>

                            </div>
                        </aside>
                    </div>
                    <!--page-sidebar-->
                </div>
            </div>

        </div>
    </div>