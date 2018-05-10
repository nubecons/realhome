<?php

$site_url = $this->Url->build('/',true); ?>

<div class="main-container inner-page">
    <div class="container">
        <div class="section-content">

            <div class="section-block">
                <div class="row">
                    <div class="col-md-3  page-sidebar-right">
                        <aside>
                            <div class="card sidebar-card card-contact-seller">
                                <div class="card-header gheading">Ask your Question</div>
                                <div class="card-content user-info">
                                    <div class="card-body text-center">
                                        <div>
                                            <div ><span class="icon search"></span>Ask Your Question&nbsp;</div>

                                            <textarea name="thread_detail" id="thread_detail" style=";width:190px;" class="rfield left focused" placeholder="Get your questions answered by real estate experts ..." onfocus="$(this).addClass( & quot; focused & quot; );" rows="4"></textarea>		<div onclick="$(this).closest('form').submit();" class="clr ask_form_btn grn_btn">
                                                <a href="#buy" class="nav-link" data-toggle="tab"><button type="button" class="btn btn-block btn-primary">Ask Now</button></a>
                                            </div>
                                            <div class="clr"><a rel="nofollow" href="<?=$site_url."forums/ask"?>" class="green" style="float: left; margin: 0px 0px 10px 13px;"><i class="icon d"></i>Start New Discussion</a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="card-header gheading">Forum Categories</div>
                            <div class="inner-box">
                                <div class="user-panel-sidebar">
                                    <div class="collapse-box">
                                    <?php if($ForumCategories){
                                        foreach($ForumCategories as $ForumCategory){
                                            if($ForumCategory->parent_id ==0){?>
                                        <h5 class="collapse-title no-border"><?php echo $ForumCategory->title; ?><a class="pull-right" aria-expanded="true" data-toggle="collapse" href="#MyClassified"><i class="fa fa-angle-down"></i></a></h5>
                                            <?php }if($ForumCategory->parent_id == $ForumCategory->id){?>
                                        <div id="MyClassified" class="panel-collapse collapse show">
                                            <ul class="acc-list">
                                                <li><a href="#"><i class="icon-home"></i><?php echo $ForumCategory->title; ?></a></li>

                                            </ul>
                                        </div>
                                            <?php }}}?>
                                    </div>

                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-sm-9 col-thin-left page-content ">
                        <div class="card sidebar-card card-contact-seller">
                            <div class="card-header gheading">Forum Search </div>
                            <div class="card-content user-info">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label" for="textinput-name">Name</label>

                                        <div class="col-sm-7">
                                            <input id="textinput-name" name="textinput-name" placeholder="Seller Name" class="form-control input-md" required="" type="text">
                                        </div >
                                        <div class="col-sm-3"><a href="#buy" class="nav-link" data-toggle="tab"><button type="button" class="btn btn-block btn-primary">Search</button></a></div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="textinput-name">Advice Type:</label>
                                        <div class="checkbox col-sm-2 ">
                                            <label>
                                                <input value="" type="checkbox">
                                                <small> Questions</small>
                                            </label>
                                        </div>
                                        <div class="checkbox col-sm-2 ">
                                            <label>
                                                <input value="" type="checkbox">
                                                <small>Answers</small>
                                            </label>
                                        </div>
                                        <div class="checkbox col-sm-2 ">
                                            <label>
                                                <input value="" type="checkbox">
                                                <small>Discussions</small>
                                            </label>
                                        </div>
                                        <div class="checkbox col-sm-2 ">
                                            <label>
                                                <input value="" type="checkbox">
                                                <small>Replies</small>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card sidebar-card card-contact-seller">
                            <div class="card-header gheading">Forum Categories </div>
                            <div class="card-content user-info">
                                <div class="card-body">
                                         <?php if($ForumCategories){
                                        foreach($ForumCategories as $ForumCategory){
                                            if($ForumCategory->parent_id ==0){?>
                                    <div class="card bg-light card-body mb-3">
                                        <h3><i class=" icon-certificate icon-color-1"></i><?php echo $ForumCategory->title; ?></h3>
                                        <p><?php echo $ForumCategory->description; ?></p>
                                    </div>
                                         <?php }}}?>
                                </div>
                            </div>
                        </div>
                        <div class="card sidebar-card card-contact-seller">
                            <div class="card-header gheading">Most Discussed Posts </div>
                            <div class="card-content user-info">
                                <div class="card-body text-center">

                                    <div class="adds-wrapper">
                                        <div class="item-list">
                                            <div class="row"><div class="col-md-2 no-padding photobox">
                                                    <div class="add-image"><span class="photo-count"><i
                                                                class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                                class="thumbnail no-margin" src="images/item/tp/Image00003.jpg"
                                                                alt="img"></a></div>
                                                </div>
                                                <!--/.photobox-->
                                                <div class="col-sm-7 add-desc-box">
                                                    <div class="ads-details">
                                                        <h5 class="add-title"><a href="ads-details.html"> MSI GE70 Apache Pro-061 17.3"
                                                                Core i5-4200H/8GB DDR3/NV GTX860M Gaming Laptop </a></h5>
                                                        <span class="info-row"> <span class="date"><i
                                                                    class=" icon-clock"> </i>In Category </span> <span class="item-location"><i
                                                                    class="fa fa-map-marker"></i> Latest Reply by Khalid Javaid | 5 hours ago</span> </span></div>
                                                </div>
                                                <!--/.add-desc-box-->
                                                <div class="col-md-3 text-right  price-box">
                                                    <h2 class="item-price">Where to buy</h2>
                                                    <span class="info-row">
                                                        <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Views">30 </span> 
                                                        <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Replays">10 </span> 
                                                    </span>
                                                    </a></div>
                                                <!--/.add-desc-box-->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>

                    <!--/.page-side-bar-->
                </div>
            </div>


        </div>

    </div>
</div>
