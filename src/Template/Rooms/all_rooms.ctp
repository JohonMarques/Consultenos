
<body data-rsssl=1
      class="page-template-default page page-id-3603 _masterslider _msp_version_3.2.7  hotelmaster-button-classic-style  header-style-1  hotelmaster-classic-style  hotelmaster-single-classic-style">
<div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid"
     data-home=../.. style="padding-top: 104px;">

    <div id=gdlr-header-substitute></div>
    <div class=gdlr-page-title-wrapper>
        <div class=gdlr-page-title-overlay></div>
        <div class="gdlr-page-title-container container"><h1 class="gdlr-page-title">Hotel Real Classic</h1> <span
                    class=gdlr-page-caption>Todas as acomodações</span></div>
    </div>
    <div class=content-wrapper>
        <div class=gdlr-content>
            <div class=with-sidebar-wrapper>
                <section id=content-section-1>
                    <div class="section-container container">
                        <div class="room-item-wrapper type-classic" style="margin-bottom: 30px;">
                            <div class="room-item-holder ">
                                <div class=clear></div>
                                <?php foreach($rooms as $room):
                                    $cont = 0;?>
                                <div class="four columns" style="float: right;">
                                    <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                                        <div class="gdlr-ux gdlr-classic-room-ux">
                                            <div class=gdlr-room-thumbnail style="width: 350px; height: 233px"><a
                                                        href="<?= $this->Url->build('rooms/room/'.$room->id)?>">
                                                    <?php foreach ($images as $image):

                                                        if(($image->room_id == $room->id)&&$cont==0)
                                                        { ?><img src=/../files/PhotosRooms/photo/<?= $image->photo?>
                                                                alt width=700 height=400>
                                                            <?php $cont++;
                                                        }
                                                    endforeach; ?></a></div>
                                            <h3 class="gdlr-room-title"><a
                                                        href=<?= $this->Url->build('rooms/room/'.$room->id)?> ><?=$room->name?></a></h3>
                                            <div class=gdlr-hotel-room-info>
                                                <div class=gdlr-room-info><i
                                                            class="fa fa-check-square-o icon-check"></i><span
                                                            class=gdlr-head>Cama:</span><span
                                                            class=gdlr-tail><?= $room->beds?></span></div>
                                                <div class=gdlr-room-info><i
                                                            class="fa fa-check-square-o icon-check"></i><span
                                                            class=gdlr-head>Pessoas:</span><span
                                                            class=gdlr-tail><?= $room->people?></span></div>
                                                <div class=gdlr-room-info><i
                                                            class="fa fa-check-square-o icon-check"></i><span
                                                            class=gdlr-head>Vista:</span><span class=gdlr-tail><?= $room->view?></span>
                                                </div>
                                                <div class=gdlr-room-info><i
                                                            class="fa fa-check-square-o icon-check"></i><span
                                                            class=gdlr-head>Wifi:</span><span class=gdlr-tail><?php if ($room->wifi == 'S') echo 'SIM'; else echo 'NÃO'; ?></span>
                                                </div>
                                                <div class=gdlr-room-price><span class=gdlr-head>A partir de</span><span
                                                            class=gdlr-tail>R$<?= $room->price ?></span></div>
                                                <div class=clear></div>
                                            </div>
                                            <a class="gdlr-button with-border"
                                               href=<?= $this->Url->build('rooms/room/'.$room->id)?>>Veja mais <i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>

                                <div class=clear></div>
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
<script></script>


<script>jQuery(document).ready(function (jQuery) {
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
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });</script>
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

</body>
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

