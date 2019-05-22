<div class="eltdf-container-inner clearfix" style="margin-top: 10%">
    <div class="eltdf-grid-row eltdf-content-has-sidebar eltdf-grid-large-gutter">
        <div class="eltdf-page-content-holder eltdf-grid-col-12">
            <div class="eltdf-blog-holder eltdf-blog-single eltdf-blog-single-standard">
                <article id="post-1316"
                         class="post-1316 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-cucine tag-pasta tag-seafood tag-tasty">
                    <div class="eltdf-post-content">
                        <div class="eltdf-post-heading">

                            <div class="eltdf-post-image">
                                <img width="1300" height="798"
                                     src="https://gourmand.elated-themes.com/wp-content/uploads/2018/01/masonry-post-1.jpg"
                                     class="attachment-full size-full wp-post-image" alt="a"
                                     srcset="<?= "/files/StaffPosts/photo/". $staffPost->photo?> 1300w, <?= "/files/StaffPosts/photo/". $staffPost->photo?> 600w, <?= "/files/StaffPosts/photo/". $staffPost->photo?> 300w, <?= "/files/StaffPosts/photo/". $staffPost->photo?> 768w, <?= "/files/StaffPosts/photo/". $staffPost->photo?> 1024w"
                                     sizes="(max-width: 1300px) 100vw, 1300px"></div>
                        </div>
                        <div class="eltdf-post-text">
                            <div class="eltdf-post-text-inner">
                                <div class="eltdf-post-info-top">
                                    <div itemprop="dateCreated"
                                         class="eltdf-post-info-date entry-date published updated">
                                        <a itemprop="url" href="#">

                                            <?php echo $staffPost->created ?> </a>
                                        <meta itemprop="interactionCount" content="UserComments: 0">
                                    </div>
                                </div>
                                <div class="eltdf-post-text-main">

                                    <h3 itemprop="name" class="entry-title eltdf-post-title">
                                        <?php echo $staffPost->titulo ?> </h3>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p><?php echo $staffPost->body?></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 22px"><span
                                                                class="vc_empty_space_inner"></span></div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="eltdf-post-info-bottom clearfix">
                                    <div class="eltdf-post-info-bottom-left">
                                        <div class="eltdf-post-info-category">
                                            <a href="<?= $this->Url->build("servicos/{$staffPost->staff['id']}/cargos") ?>"
                                               rel="category tag"><?php echo $staffPost->staff['staff']?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
</div>
</div>