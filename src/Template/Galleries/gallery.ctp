<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<section id=content-section-2>
    <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
         style="background-color: #ffffff; padding-top: 104px; padding-bottom: 10px; ">

        <div id=gdlr-header-substitute></div>
        <div class=gdlr-page-title-wrapper>
            <div class=gdlr-page-title-overlay></div>
            <div class="gdlr-page-title-container container"><h1 class="gdlr-page-title">Galeria</h1> <span
                        class=gdlr-page-caption>Hotel Real Classic</span></div>
        </div>
        <div style="margin-top: 50px"></div>
        <?php foreach ($categories as $category): ?>
            <div class=container>
                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                    <div class=gdlr-item-title-head><h3
                                class="gdlr-item-title gdlr-skin-title gdlr-skin-border"><?= $category->name ?></h3>
                        <div class=gdlr-item-title-carousel><i class="icon-angle-left gdlr-flex-prev"></i><i
                                    class="icon-angle-right gdlr-flex-next"></i></div>
                        <div class=clear></div>
                    </div>
                </div>
                <div class="room-item-wrapper type-modern">
                    <div class="room-item-holder ">
                        <div class="gdlr-room-carousel-item gdlr-item">
                            <div class=flexslider data-type=carousel data-nav-container=room-item-wrapper
                                 data-columns=3>


                                        <ul class=slides>
                                            <?php foreach ($images as $image):
                                            if ($image->category_id == $category->id) {
                                            ?>
                                            <li class="gdlr-item gdlr-modern-room">

                                                <div class=gdlr-room-thumbnail style="width: 350px; height: 233px">

                                                    <a href="#" id="link1" data-toggle="modal" data-target="#myModal">

                                                        <img class="open" src=/../files/Galleries/photo/<?= $image->photo ?>
 alt width=700 height=400>

                                                    </a>

                                                </div>

                                            </li>
                                            <?php }
                                            endforeach; ?>

                                        </ul>

                                <div class=clear></div>
                            </div>
                        </div>
                        <div class=clear></div>
                    </div>
                </div>
                <div class=clear></div>
                <div class=clear></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class=clear></div>
</section>

<div class="container">

    <div class="row">


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">

            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" style="position: relative;top: -44px;font-size: 50px;">&times;</button>

                    <div style="margin: 0 auto;display: block;" class="modal-body" id="showImg">
                        <!-- here we create the image dynamically -->
                    </div>

                </div>

            </div>
        </div>
    </div>
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

<script>
    var nav = document.getElementById('nav');
    document.body.onscroll = () => {
        if (window.pageYOffset > 400) {

            nav.style.background = "#0182AC";

        } else {
            nav.style.background = "#0182AC";
        }
    }
    $(document).ready(function() {
        $('img').on('click', function() {
            $("#showImg").empty();
            var image = $(this).attr("src");
            $("#showImg").append("<img style='margin-left: 14px;' src='" + image + "' />")
        })
    });

</script>