<div class="eltdf-content-inner">
    <div class="eltdf-title-holder eltdf-centered-type eltdf-title-va-header-bottom
     eltdf-preload-background eltdf-has-bg-image eltdf-bg-parallax"
         style="height: 551px;
         background-image:url(/images/blog-title-img.jpg);"
         data-height="551">
        <div class="eltdf-title-image">
            <img itemprop="image" src="/images/blog-title-img.jpg" alt="a"/>
        </div>
        <div class="eltdf-title-wrapper" style="height: 551px">
            <div class="eltdf-title-inner">
                <div class="eltdf-grid">
                    <h1 class="eltdf-page-title entry-title" style="color: #ffffff">Posts de Funcionarios</h1>
                    <p class="eltdf-page-subtitle" style="color: rgba(255,255,255,0.6)">Tudo que precisa saber sobre</p>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="eltdf-container-inner clearfix" style="margin-top: 10%">
        <div class="eltdf-grid-row ">
            <div class="eltdf-page-content-holder eltdf-grid-col-12">
                <div class="eltdf-blog-holder eltdf-blog-masonry eltdf-blog-pagination-standard eltdf-masonry-images-fixed eltdf-blog-type-masonry eltdf-blog-three-columns eltdf-normal-space eltdf-blog-masonry-in-grid" data-blog-type="masonry" data-next-page="2" data-max-num-pages="2" data-post-number="11" data-excerpt-length="30" data-category="lifestyle">
                    <div class="eltdf-blog-holder-inner eltdf-outer-space" style="position: relative; height: 2970.3px; opacity: 1;">
                        <div class="eltdf-blog-masonry-grid-sizer"></div>
                        <div class="eltdf-blog-masonry-grid-gutter"></div>
                        <?php foreach ($posts as $post): ?>
                  <article id="post-1276" class="eltdf-post-has-media eltdf-item-space post-1276 post type-post
                  status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-cook tag-pasta
                   tag-seafood tag-tasty" style="position: absolute; left: 315px; top: 2313px;">
                            <div class="eltdf-post-content">
                                <div class="eltdf-post-heading">

                                    <div class="eltdf-post-image">
                                        <a itemprop="url" href="" title="<?php echo $post->titulo ?>">
                                            <img width="1300" height="798" src="/images/" <?= $post->foto?> class="attachment-full size-full wp-post-image" alt="a" srcset="<?= "/files/StaffPosts/photo/". $post->photo?> 1300w, <?= "/files/StaffPosts/photo/". $post->photo?> 600w, <?= "/files/StaffPosts/photo/". $post->photo?> 300w, <?= "/files/StaffPosts/photo/". $post->photo?> 768w, <?= "/files/StaffPosts/photo/". $post->photo?> 1024w" sizes="(max-width: 1300px) 100vw, 1300px">					</a>
                                    </div>
                                            </div>
                                <div class="eltdf-post-text">
                                    <div class="eltdf-post-text-inner">
                                        <div class="eltdf-post-info-top">
                                            <div itemprop="dateCreated" class="eltdf-post-info-date entry-date published updated">
                                                <a itemprop="url" href="https://gourmand.elated-themes.com/2018/01/">

                                                    <?php echo $post->created ?>         </a>
                                                <meta itemprop="interactionCount" content="UserComments: 0">
                                            </div>                </div>
                                        <div class="eltdf-post-text-main">

                                            <h5 itemprop="name" class="entry-title eltdf-post-title">
                                                <a itemprop="url" href="<?= $this->Url->build("servicos/cargos/{$post->id}")?>" title="<?php echo $post->titulo ?>">
                                                    <?php echo $post->titulo ?>            </a>
                                            </h5>                    		<div class="eltdf-post-excerpt-holder">
                                                <p itemprop="description" class="eltdf-post-excerpt">
                                                   <?php echo substr($post->body,0,180)  ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    </div>




                    <div class="eltdf-blog-pagination">
                        <ul>
                            <?php echo $this->paginator->numbers(); ?>
                        </ul>
                    </div>

                    <div class="eltdf-blog-pagination-wp">
                    </div>

                </div>	</div>
        </div>	    </div>

</div>





