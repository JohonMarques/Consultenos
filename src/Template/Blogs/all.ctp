


    <div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid"
     data-home=https://demo.goodlayers.com/hotelmaster>
    <div id=gdlr-header-substitute></div>
    <div class=gdlr-page-title-wrapper>
        <div class=gdlr-page-title-overlay></div>
        <div class="gdlr-page-title-container container"><h1 class="gdlr-page-title">Blog Medium Without Sidebar</h1>
            <span class=gdlr-page-caption>Caption placed here</span></div>
    </div>
    <div class=content-wrapper>
        <div class=gdlr-content>
            <div class=with-sidebar-wrapper>
                <section id=content-section-1>
                    <div class="section-container container">
                        <div class=blog-item-wrapper>
                            <div class=blog-item-holder>
                                <?php foreach ($blogs as $blog): ?>

                                <div class="gdlr-item gdlr-blog-medium">
                                    <div class="gdlr-ux gdlr-blog-medium-ux">
                                        <article id=post-859
                                                 class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
                                            <div class=gdlr-standard-style>
                                                <div class=gdlr-blog-thumbnail><a
                                                            href=https://demo.goodlayers.com/hotelmaster/2013/12/03/sedial-eiusmod-tempor/>
                                                        <img src=/../files/Blogs/photo/<?=$blog->photo?>
                                                              style=" max-width: 100%;
                                                                             height: 300px;
                                                                             width: 473px;"></a>

                                                    </div>                                              </div>

                                                <div class=gdlr-blog-content-wrapper>
                                                    <header class=post-header>
                                                        <div class="gdlr-blog-info gdlr-info">

                                                            <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="https://demo.goodlayers.com/hotelmaster/2013/12/03/"><?= $blog->date?></a></div>

                                                            <div class=clear></div>
                                                        </div>
                                                        <h3 class="gdlr-blog-title"><a
                                                                    href=https://demo.goodlayers.com/hotelmaster/2013/12/03/sedial-eiusmod-tempor/><?=$blog->title?></a></h3>
                                                        <div class=clear></div>
                                                    </header>
                                                    <div class=gdlr-blog-content><?php echo $this->Text->truncate(
                                                            $blog->description,
                                                            480,
                                                            [
                                                                'ellipsis' => '...',
                                                                'exact' => false
                                                            ]
                                                        );?>
                                                        <div class=clear></div>
                                                        <a href=https://demo.goodlayers.com/hotelmaster/2013/12/03/sedial-eiusmod-tempor/ class=excerpt-read-more>Veja mais ⇒<i
                                                                    class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class=clear></div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <?php endforeach; ?>


                            </div>

                        <div class="pagination pagination-large" style="float: right;">
                            <ul class="pagination">
                                <?php
                                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));

                                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                                echo $this->Paginator->next(__('Próxima ⇒'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                                ?>
                            </ul>
                        </div>
                        </div>



                    <div class=clear></div>

                    </div>
                </section>
            </div>
        </div>
        <div class=clear></div>
    </div>
</div>

