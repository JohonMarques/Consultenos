<a id='eltdf-back-to-top' href='#'>
                <span class="eltdf-icon-stack">
                     <i class="eltdf-icon-font-awesome fa fa-angle-up "></i>                </span>
</a>

<div class="eltdf-content">
    <div class="eltdf-content-inner">
        <div class="eltdf-title-holder eltdf-centered-type eltdf-title-va-header-bottom eltdf-preload-background eltdf-has-bg-image eltdf-bg-parallax"
            style="height: 551px;background-image:url(/images/team-parallax-1.jpg);"
            data-height="551">
            <div class="eltdf-title-image">
                <img itemprop="image"
                     src="/images/team-parallax-1.jpg" alt="a"/>
            </div>
            <div class="eltdf-title-wrapper" style="height: 551px">
                <div class="eltdf-title-inner">
                    <div class="eltdf-grid">
                        <h1 class="eltdf-page-title entry-title" style="color: #ffffff">Funcionarios</h1>
                        <p class="eltdf-page-subtitle" style="color: rgba(255,255,255,0.6)">Os Talentos por tras da
                            empresa</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="eltdf-full-width" style="margin-top: 7%">
            <div class="eltdf-full-width-inner">
                <div class="eltdf-grid-row">
                    <div class="eltdf-page-content-holder eltdf-grid-col-12">
                        <div class="eltdf-row-grid-section-wrapper ">
                            <div class="eltdf-row-grid-section">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1518514345416">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="eltdf-section-title-holder  eltdf-st-standard eltdf-st-title-left eltdf-st-normal-space ">
                                                    <div class="eltdf-st-inner">
                                                        <h2 class="eltdf-st-title">
                                                            Equipe </h2>
                                                        <div class="eltdf-separator-holder clearfix">
                                                            <div class="eltdf-separator"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <?php foreach ($teams as $team): ?>
                                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="eltdf-team-holder eltdf-team-info-below-image">
                                                                        <div class="eltdf-team-inner">
                                                                            <div class="eltdf-team-image">
                                                                                <img width="300" height="300"
                                                                                     src="<?= "/files/Teams/photo/" . $team->photo ?>"
                                                                                     class="attachment-full size-full"
                                                                                     alt="a"
                                                                                     srcset="<?= "/files/Teams/photo/" . $team->photo ?> 300w, <?= "/files/Teams/photo/" . $team->photo ?> 100w, <?= "/files/Teams/photo/" . $team->photo ?> 150w"
                                                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                                                            </div>
                                                                            <div class="eltdf-team-info">
                                                                                <h5 class="eltdf-team-name"><?php echo $team->name ?></h5>
                                                                                <h6 class="eltdf-team-position">
                                                                                    Cook</h6>
                                                                                <p class="eltdf-team-text"><?php echo substr($team->body, 0, 232) ?></p>
                                                                                <div class="eltdf-team-social-holder">
											<span class="eltdf-team-icon">    <span
                                                        class="eltdf-icon-shortcode eltdf-normal   ">
                    <a class="" href="http://facebook.com" target="_blank">
                    <span class="eltdf-icon-font-elegant social_facebook eltdf-icon-element"></span>                    </a>
            </span>
</span>
                                                                                    <span class="eltdf-team-icon">    <span
                                                                                                class="eltdf-icon-shortcode eltdf-normal   ">
                    <a class="" href="http://twitter.com" target="_blank">
                    <span class="eltdf-icon-font-elegant social_twitter eltdf-icon-element"></span>                    </a>
            </span>
</span>
                                                                                    <span class="eltdf-team-icon">    <span
                                                                                                class="eltdf-icon-shortcode eltdf-normal   ">
                    <a class="" href="http://linkedin.com" target="_blank">
                    <span class="eltdf-icon-font-elegant social_linkedin eltdf-icon-element"></span>                    </a>
            </span>
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_empty_space"
                                                                         style="height: 87px"><span
                                                                                class="vc_empty_space_inner"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>