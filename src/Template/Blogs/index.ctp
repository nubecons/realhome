<?php $site_url = $this->Url->build('/',true); ?>
    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <div class="col-sm-8 blogLeft">
                        <div class="blog-post-wrapper">
                            <?php if($Blogs){
                                foreach ($Blogs as $Blog){?>
                            <article class="blog-post-item">
                                <div class="inner-box">

                                    <!--blog image-->
                                    <div class="blog-post-img">

                                        <a href="blogDetails">
                                            <figure>
                                                <img  style="max-height:350px" class="img-responsive" alt="blog-post image"
                                                     src="<?php echo $site_url ?>img/blog/<?php echo $Blog->image; ?>">
                                            </figure>
                                        </a>
                                    </div>

                                    <!--blog content-->

                                    <div class="blog-post-content-desc">


                            <span class="info-row blog-post-meta"> <span class="date"><i class=" icon-clock"> </i> <?php echo date("F j, Y, g:i a",strtotime($Blog->created));?> </span>  -
                                <span class="author"> <i class="fa fa-user"></i>  <a rel="author"
                                                                                     title="Posts by" href="#">Admin</a> </span>  -
                                <span class="item-location"><i class="fa fa-comments"></i> Comments <a
                                        href="#">0</a> </span> </span>


                                        <div class="blog-post-content">
                                            <h2><a href="#"><?php echo $Blog->title;?></a></h2>

                                            <p><?php echo substr($Blog->post,0,200);?></p>

                                            <div class="row">
                                                <div class="col-md-12 clearfix blog-post-bottom">
                                                    <a class="btn btn-primary  pull-left" href="<?=$site_url."blogs/blogDetails/".$Blog->id?>">More
                                                        info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </article>
                            <?php }}?>
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
                                        <li><a href="#"><span class="title"><?php echo $BlogCategory['title']?></span><span class="count"> (<?php echo $BlogCategory['records']?>)</span></a></li>
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
                                                <div class="add-image"><a href="<?=$site_url."blogs/blogDetails/".$Blog->id?>"><img  class="no-margin img-responsive"
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
    <!-- /.main-container -->
    <div class="parallaxbox about-parallax-bottom">
        <div class="container">
            <div class="row text-center featuredbox">
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-book-open ln-shadow-box shape-3"></i></div>
                        <h3 class="title-4">Customer service</h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit
                            tortor.</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class=" icon-lightbulb ln-shadow-box shape-6"></i></div>
                        <h3 class="title-4">Seller satisfaction</h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit tortor.
                            .</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-megaphone ln-shadow-box shape-5"></i></div>
                        <h3 class="title-4">Best Offers </h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit
                            tortor. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>