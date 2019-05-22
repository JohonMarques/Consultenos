
<?php
    $slides = '';
    $mini = '';

    $counter = 0;
    foreach ($images as $image):

        $img = $image->photo;

        if ($counter == 0) {
            $slides .= '<li><img src=/../files/PhotosRooms/photo/'.$img.' alt width=750 height=330></li>';
            $mini .= '<li><img src=/../files/PhotosRooms/photo/'.$img.' alt width=150 height=150></li>';

        } else {
            $slides .= ' <li> <img src=/../files/PhotosRooms/photo/'.$img.' alt width=750 height=330></a></li>';
            $mini .= '<li> <img src=/../files/PhotosRooms/photo/'.$img.' alt width=150 height=150></li>';
        }

        $counter++;
endforeach;

foreach ($rooms as $room): ?>

<body data-rsssl=1
      class="room-template-default single single-room postid-3584 _masterslider _msp_version_3.2.7  hotelmaster-button-classic-style  header-style-1  hotelmaster-classic-style  hotelmaster-single-classic-style">

    <div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid"
         data-home=https://demo.goodlayers.com/hotelmaster>
        <header class=gdlr-header-wrapper style="margin-top: 104px;">

        </header>
        <div id=gdlr-header-substitute></div>
        <div class=gdlr-page-title-wrapper>
            <div class=gdlr-page-title-overlay></div>
            <div class="gdlr-page-title-container container"><h3 class="gdlr-page-title"><?= $room->name?></h3></div>
        </div>
        <div class=content-wrapper>
            <div class=gdlr-content>
                <div class=with-sidebar-wrapper>
                    <div class="with-sidebar-container container gdlr-class-no-sidebar">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content twelve columns">
                                <div class="gdlr-item gdlr-item-start-content">
                                    <div id=room-3584
                                         class="post-3584 room type-room status-publish has-post-thumbnail hentry room_category-room room_tag-junior room_tag-luxury room_tag-room">

                                        <div class=gdlr-room-main-content>
                                            <div style="width: 600px; margin: 0 auto; display:block" class="gdlr-room-thumbnail gdlr-single-room-thumbnail">
                                                <div class=flexslider data-pausetime=7000 data-slidespeed=600
                                                     data-effect=fade>
                                                    <ul class=slides>
                                                        <?= $slides?>

                                                    </ul>
                                                </div>
                                                <ul class=gdlr-flex-thumbnail-control id=gdlr-flex-thumbnail-control>
                                                    <?= $mini?>

                                                </ul>
                                            </div>
                                            <div class=gdlr-room-title-wrapper><h3 class="gdlr-room-title"><?= $room->name?></h3>
                                                <div class=gdlr-room-price><span class=gdlr-head>A partir de R$</span><span
                                                            class=gdlr-tail><?= $room->price ?></span></div>
                                                <div class=clear></div>
                                            </div>
                                            <div class=gdlr-hotel-room-info-new-style>
                                                <div class=gdlr-room-info-new-style><span class=gdlr-head>
                                                        <img src=https://demo.goodlayers.com/hotelmaster/wp-content/themes/hotelmaster/images/default-icon/bed-icon.png
                                                                    alt></span><span style="width: 111px;" class=gdlr-tail><?= $room->beds ?></span>
                                                </div>
                                                <div class=gdlr-room-info-new-style><span class=gdlr-head>
                                                        <img src=https://demo.goodlayers.com/hotelmaster/wp-content/themes/hotelmaster/images/default-icon/guest-icon.png
                                                                        alt></span><span class=gdlr-tail><?= $room->people ?></span>
                                                </div>
                                                <div class=gdlr-room-info-new-style><span class=gdlr-head>
                                                        <img src=https://demo.goodlayers.com/hotelmaster/wp-content/themes/hotelmaster/images/default-icon/eye-icon.png
                                                                        alt></span><span class=gdlr-tail><?= $room->view ?></span>
                                                </div>
                                                <div class=gdlr-room-info-new-style><span class=gdlr-head>
                                                        <img src=https://demo.goodlayers.com/hotelmaster/wp-content/themes/hotelmaster/images/default-icon/wifi-icon.png
                                                                        alt></span><span
                                                                    class=gdlr-tail><?php if ($room->wifi == 'S') echo 'SIM'; else echo 'NÃO'; ?></span>
                                                </div>
                                                <div class=clear></div>
                                            </div>
                                            <div class=gdlr-room-content><h5>Detalhes</h5>
                                                <p><?= $room->details ?></p>
                                                <div class=clear></div>

                                                <div class=clear></div>
                                                <div class=gdlr-space style="margin-top: -20px;"></div>

                                                <div class=clear></div>
                                                <div class=gdlr-space style="margin-top: 40px;"></div>
                                                <div class=gdlr-shortcode-wrapper>
                                                    <div class=clear></div>
                                                    <div class="gdlr-item gdlr-divider-item">
                                                        <div class="gdlr-divider thick"></div>
                                                    </div>
                                                </div>
                                                <div class=clear></div>
                                                <div class=gdlr-space style="margin-top: -20px;"></div>
                                                <p><strong>Localização</strong></p>
                                                <p>Orla de Atalaia, s/n, Aracaju, CEP 49036-080, Brasil<br>
                                                    Telefone :  79 2106-7020 / 2106-7023 / 2106-7000 / 2106-7001<br> <a href=mailto:reservas@realclassichotel.com.br>reservas@realclassichotel.com.br</a>
                                                </p>


                                                <iframe style="margin: 0 auto; display: block;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.833787739463!2d-37.04234575038783!3d-10.975915425851383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71ab6b52a74b63d%3A0xf17e2db42dcd881a!2sReal+Classic+Hotel!5e0!3m2!1spt-BR!2sbr!4v1555513700518!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=clear></div>
                        </div>
                        <div class=clear></div>
                    </div>
                </div>
            </div>
            <div class=clear></div>
        </div>

    </div>
    <script></script>


    <script>var objectL10n = {
            "closeText": "Done",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "monthStatus": "Show a different month",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "firstDay": "1"
        };</script>
    <script src='https://maps.google.com/maps/api/js?key=AIzaSyD733KCcfQFGTp5SjZ5P9nvUKl6Ir4fYPo&#038;libraries=geometry%2Cplaces%2Cweather%2Cpanoramio%2Cdrawing&#038;language=en&#038;ver=c7a66300841ff401a3479dc0e6b0f415'></script>


</body>
<?php endforeach; ?>
<script>
    var nav = document.getElementById('nav');
    document.body.onscroll = () => {
        if (window.pageYOffset > 400) {

            nav.style.background = "#0182AC";

        } else {
            nav.style.background = "#0182AC";
        }
    }
</script>
