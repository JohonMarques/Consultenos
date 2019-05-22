<footer class="eltdf-page-footer">
    <div class="eltdf-footer-top-holder">
        <div class="eltdf-footer-top-inner eltdf-grid">
            <div class="eltdf-grid-row eltdf-footer-top-alignment-left">
                <div class="eltdf-column-content eltdf-grid-col-4">
                    <div id="text-2" class="widget eltdf-footer-column-1 widget_text">
                        <div class="eltdf-widget-title-holder">
                            <h5 class="eltdf-widget-title">Sobre Nós</h5></div>
                        <div class="textwidget">
                            <p><?php echo $about->body ?> </p>
                        </div>
                    </div>

                </div>
                <div class="eltdf-column-content eltdf-grid-col-4">
                    <div id="text-3" class="widget eltdf-footer-column-2 widget_text">
                        <div class="eltdf-widget-title-holder">
                            <h5 class="eltdf-widget-title">Links Uteis</h5></div>
                        <div class="textwidget">
                            <p><a href="/">Home</a></p>
                            <p><a href="/#Missao">Missao</a></p>
                            <p><a href="<?= $this->Url->build("/equipe") ?>">Equipe</a></p>
                            <p><a href="<?= $this->Url->build("/contato") ?>">Fale Conosco</a></p>
                            <p><a href="<?= $this->Url->build("/visita") ?>">Marque uma Visita</a></p>
                        </div>
                    </div>
                </div>
                <div class="eltdf-column-content eltdf-grid-col-4">
                    <div class="widget eltdf-blog-list-widget">
                        <div class="eltdf-widget-title-holder">
                            <h5 class="eltdf-widget-title">Ultimas Postagens</h5></div>
                        <div class="eltdf-blog-list-holder eltdf-bl-simple eltdf-bl-one-column eltdf-small-space eltdf-bl-pag-no-pagination" data-type=simple data-number-of-posts=3 data-number-of-columns=1 data-space-between-items=small data-orderby=date data-order=ASC data-image-size=thumbnail data-title-tag=p data-excerpt-length=40 data-post-info-section=yes data-post-info-image=yes data-post-info-author=yes data-post-info-date=yes data-post-info-category=yes data-post-info-comments=no data-post-info-like=no data-post-info-share=no data-pagination-type=no-pagination data-max-num-pages=13 data-next-page=2>
                            <div class="eltdf-bl-wrapper eltdf-outer-space">
                                <ul class="eltdf-blog-list">
                                    <?php foreach ($globalposts as $post): ?>
                                    <li class="eltdf-bl-item eltdf-item-space clearfix">
                                        <div class="eltdf-bli-inner">

                                            <div class="eltdf-post-image">
                                                <a itemprop="url" href="<?= $this->Url->build("servicos/cargos/{$post->id}")?>" title="<?php echo $post->titulo ?>">
                                                    <img width="150" height="150" src="/images/standard-post-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="a" srcset="<?= "/files/StaffPosts/photo/". $post->photo?> 150w, <?= "/files/StaffPosts/photo/". $post->photo?> 300w, <?= "/files/StaffPosts/photo/". $post->photo?> 100w, <?= "/files/StaffPosts/photo/". $post->photo?> 550w" sizes="(max-width: 150px) 100vw, 150px" /> </a>
                                            </div>
                                            <div class="eltdf-bli-content">

                                                <p itemprop="name" class="entry-title eltdf-post-title">
                                                    <a itemprop="url" href="<?= $this->Url->build("servicos/cargos/{$post->id}")?>" title="<?php echo $post->titulo ?>">
                                                        <?php echo $post->titulo ?>          </a>
                                                </p>
                                                <div itemprop="dateCreated" class="eltdf-post-info-date entry-date published updated">
                                                        <?php echo $post->created ?>
                                                    <meta itemprop="interactionCount" content="UserComments: 0" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="eltdf-footer-bottom-holder">
        <div class="eltdf-footer-bottom-inner eltdf-full-width">
            <div class="eltdf-grid-row ">
                <div class="eltdf-grid-col-4">
                    <div id="media_image-3" class="widget eltdf-footer-bottom-column-1 widget_media_image">
                        <a href="/"><img width="168" height="37" src="/images/rodape.png" class="image wp-image-3051  attachment-full size-full" alt="a" style="max-width: 100%; height: auto;" /></a>
                    </div>
                </div>
                <div class="eltdf-grid-col-4">
                    <div id="text-4" class="widget eltdf-footer-bottom-column-2 widget_text">
                        <div class="textwidget">
                            <p>Desenvolvido pela Fabtech</p>
                        </div>
                    </div>
                </div>
                <div class="eltdf-grid-col-4">
                    <div id="text-9" class="widget eltdf-footer-bottom-column-3 widget_text">
                        <div class="textwidget">
                            <div style="margin: -7px 0;">
                                <h6><span style="color: #999999;">Siga-nos</span>     <span class="eltdf-icon-shortcode normal   eltdf-icon-tiny" style="margin: 0 12px 0 20px;width: 15px;height: 15px;line-height: 15px" data-hover-color="#c5b358" data-color="#fff">
                    <a itemprop="url" class="" href="http://twitter.com" target="_blank">
                    <span aria-hidden="true" class="eltdf-icon-font-elegant  social_twitter eltdf-icon-element" style="color: #fff;font-size:15px" ></span>                    </a>
            </span>
                                    <span class="eltdf-icon-shortcode normal   eltdf-icon-tiny" style="margin: 0 12px 0 0;width: 15px;height: 15px;line-height: 15px" data-hover-color="#c5b358" data-color="#fff">
                    <a itemprop="url" class="" href="http://facebook.com" target="_blank">
                    <span aria-hidden="true" class="eltdf-icon-font-elegant  social_facebook eltdf-icon-element" style="color: #fff;font-size:15px" ></span>                    </a>
            </span>
                                    <span class="eltdf-icon-shortcode normal   eltdf-icon-tiny" style="margin: 0 12px 0 0;width: 15px;height: 15px;line-height: 15px" data-hover-color="#c5b358" data-color="#fff">
                    <a itemprop="url" class="" href="http://youtube.com" target="_blank">
                    <span aria-hidden="true" class="eltdf-icon-font-elegant social_youtube eltdf-icon-element" style="color: #fff;font-size:15px" ></span>                    </a>
            </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php echo $this->fetch('script');
echo $this->Html->script([
    'site/jquery',
    'site/jquery-migrate.min',
    'site/jquery.themepunch.tools.min',
    'site/jquery.themepunch.revolution.min',
    'site/add-to-cart.min',
    'site/gtm4wp-form-move-tracker',
    'site/woocommerce-add-to-cart',
    'site/mediaelement-and-player.min',
    'site/mediaelement-migrate.min',
    'site/scripts',
    'site/core.min',
    'site/restaurant.min',
    'site/jquery.lazy.min',
    'site/rbt-modules',
    'site/jquery.blockUI.min',
    'site/js.cookie.min',
    'site/woocommerce.min.js',
    'site/cart-fragments.min',
    'site/widget.min',
    'site/tabs.min',
    'site/accordion.min',
    'site/wp-mediaelement.min',
    'site/jquery.appear',
    'site/modernizr.min',
    'site/jquery.hoverIntent.min',
    'site/jquery.plugin',
    'site/owl.carousel.min',
    'site/waypoints.min',
    'site/fluidvids.min',
    'site/jquery.prettyPhoto.min',
    'site/perfect-scrollbar.jquery.min',
    'site/ScrollToPlugin.min',
    'site/parallax.min',
    'site/jquery.waitforimages',
    'site/jquery.easing.1.3',
    'site/isotope.pkgd.min',
    'site/packery-mode.pkgd.min',
    'site/jquery.countdown.min',
    'site/counter',
    'site/absoluteCounter.min',
    'site/typed',
    'site/jquery.fullPage.min',
    'site/easypiechart',
    'site/curtain',
    'site/jquery.multiscroll.min',
    'site/select2.full.min',
    'site/modules.min',
    'site/wp-embed.min',
    'site/js_composer_front.min',
    'site/revolution.extension.navigation.min',
    'site/revolution.extension.slideanims.min',
    'site/revolution.extension.layeranimation.min',
    'site/revolution.extension.parallax.min',
    'site/bootstrap-datepicker.min',
    'site/bootstrap-datepicker.pt-BR.min',




]);
?>

<!--scripts que estavam no header-->


<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" type="text/javascript">
    //<![CDATA[
    var gtm4wp_datalayer_name = "dataLayer";
    var dataLayer = dataLayer || [];
    //]]>
</script>


<script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "/js/site/wp-emoji-release.min.js"
        }
    };
    ! function(a, b, c) {
        function d(a, b) {
            var c = String.fromCharCode;
            l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
            var d = k.toDataURL();
            l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
            var e = k.toDataURL();
            return d === e
        }

        function e(a) {
            var b;
            if (!l || !l.fillText) return !1;
            switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                case "flag":
                    return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                case "emoji":
                    return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
            }
            return !1
        }

        function f(a) {
            var c = b.createElement("script");
            c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
        }
        var g, h, i, j, k = b.createElement("canvas"),
            l = k.getContext && k.getContext("2d");
        for (j = Array("flag", "emoji"), c.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
        c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
            c.DOMReady = !0
        }, c.supports.everything || (h = function() {
            c.readyCallback()
        }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
            "complete" === b.readyState && c.readyCallback()
        })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>


<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "https:\/\/gourmand.elated-themes.com\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/gourmand.elated-themes.com\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    var mejsL10n = {
        "language": "en",
        "strings": {
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen-off": "Turn off Fullscreen",
            "mejs.fullscreen-on": "Go Fullscreen",
            "mejs.download-video": "Download Video",
            "mejs.fullscreen": "Fullscreen",
            "mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
            "mejs.loop": "Toggle Loop",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.close": "Close",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.mute-toggle": "Mute Toggle",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.ad-skip": "Skip ad",
            "mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
            "mejs.source-chooser": "Source Chooser",
            "mejs.stop": "Stop",
            "mejs.speed-rate": "Speed Rate",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive"
    };
    /* ]]> */
</script>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" type="text/javascript">
    //<![CDATA[
    dataLayer.push({
        "pagePostType": "frontpage",
        "pagePostType2": "single-page",
        "pagePostAuthor": "admin"
    }); //]]>
</script>
<script data-cfasync="false">
    //<![CDATA[
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KLJLSX7'); //]]>
</script>
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->

<script type="text/javascript">
    function setREVStartSize(e) {
        try {
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
</script>


<!--scrpits que estavam no body-->

<script>
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>

<script>
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script type="text/javascript">
    setREVStartSize({
        c: jQuery('#rev_slider_1_1'),
        responsiveLevels: [1920, 1441, 1025, 480],
        gridwidth: [1300, 1100, 768, 320],
        gridheight: [1100, 768, 960, 720],
        sliderLayout: 'fullscreen',
        fullScreenAutoWidth: 'off',
        fullScreenAlignForce: 'off',
        fullScreenOffsetContainer: '.touch .eltdf-mobile-header',
        fullScreenOffset: ''
    });

    var revapi1,
        tpj = jQuery;

    tpj(document).ready(function() {
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 4000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "custom-arrows",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 1025,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "custom-arrows-dark",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 15,
                        tmp: ''
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "wait",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1920, 1441, 1025, 480],
                visibilityLevels: [1920, 1441, 1025, 480],
                gridwidth: [1300, 1100, 768, 320],
                gridheight: [1100, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    speedbg: 0,
                    speedls: 0,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "spinner2",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: ".touch .eltdf-mobile-header",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }

    }); /*ready*/
</script>
<script>
    var htmlDivCss = ' #rev_slider_1_1_wrapper .tp-loader.spinner2{ background-color: #c5b358 !important; } ';
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    var htmlDivCss = unescape("%23rev_slider_1_1%20.custom-arrows.tparrows%20%7B%0A%09background-color%3A%20transparent%3B%0A%20%20%20%20width%3A%20auto%3B%0A%20%20%20%20height%3A%20auto%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows.tparrows%3Ahover%20%7B%0A%09background-color%3A%20transparent%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22Ionicons%22%3B%0A%09font-size%3A%2040px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows.tparrows%3Ahover%3Abefore%20%7B%0A%09color%3A%20%23c5b358%3B%0A%7D%0A%0A%23rev_slider_1_1%20.custom-arrows.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Cf3d5%22%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Cf3d6%22%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows-dark.tp-bullets%20%7B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows-dark%20.tp-bullet%20%7B%0A%09width%3A6px%3B%0A%09height%3A6px%3B%0A%09position%3Aabsolute%3B%0A%09background-color%3A%20transparent%3B%0A%09border%3A2px%20solid%20%23999%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%09transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%23rev_slider_1_1%20.custom-arrows-dark%20.tp-bullet%3Ahover%2C%0A%23rev_slider_1_1%20.custom-arrows-dark%20.tp-bullet.selected%20%7B%0A%20%20%20%20border-color%3A%20%23c5b358%3B%0A%20%20%20%20background-color%3A%20%23c5b358%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%09transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%09%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>

<!--scrpits que estavam no footer-->


<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/gourmand.elated-themes.com\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        },
        "cached": "1"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    jQuery(document).ready(function(jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "dd\/mm\/yy",
            "firstDay": 1,
            "language": "pt-BR",
            "isRTL": false
        });
    });
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "https:\/\/gourmand.elated-themes.com\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "https:\/\/gourmand.elated-themes.com\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_c789ce8a3a3d4a450887525f4af8476d",
        "fragment_name": "wc_fragments_c789ce8a3a3d4a450887525f4af8476d"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var eltdfGlobalVars = {
        "vars": {
            "eltdfAddForAdminBar": 0,
            "eltdfElementAppearAmount": -100,
            "eltdfAjaxUrl": "https:\/\/gourmand.elated-themes.com\/wp-admin\/admin-ajax.php",
            "eltdfStickyHeaderHeight": 0,
            "eltdfStickyHeaderTransparencyHeight": 70,
            "eltdfTopBarHeight": 0,
            "eltdfLogoAreaHeight": 0,
            "eltdfMenuAreaHeight": 94,
            "eltdfMobileHeaderHeight": 70
        }
    };
    var eltdfPerPageVars = {
        "vars": {
            "eltdfStickyScrollAmount": 0,
            "eltdfHeaderTransparencyHeight": 0,
            "eltdfHeaderVerticalWidth": 0
        }
    };
    /* ]]> */
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6Lf3HqQUAAAAALnpml1f9FdqFb9M0_cFI5er9mH8"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lf3HqQUAAAAALnpml1f9FdqFb9M0_cFI5er9mH8', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('g-recaptcha-response');
                recaptchaResponse.value = token;

        });
    });
</script>

<script type="text/javascript">
    $('.data').datepicker({
        format: "dd/mm/yyyy",
        todayBtn: "linked",
        language: "pt-BR",
        todayHighlight: true,
        autoclose: true
    });
</script>