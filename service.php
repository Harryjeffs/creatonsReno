<?php
$page_title = " Our Work";


$image_info = array(
    374 => array(
        'before' => 'bathroom-1-before',
        'after' => 'bathroom-1-after'
    ),
    294 => array(
        'before' => 'bathroom-2-before',
        'after' => 'bathroom-2-after'
    ),
    475 => array(
        'before' => 'bathroom-3-before',
        'after' => 'bathroom-3-after'
    ),
    918 => array(
        'before' => 'kitchen-1-before',
        'after' => 'kitchen-1-after'
    )
);
?>
<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<?php include("inc/header.inc.php") ?>
<link type="text/css" href="css/before-after.min.css" rel="stylesheet">

<body>
<div class="wrapper" id="wrapper">
    <div class="offcanvas-pusher">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <?php
                    include 'inc/top-header.html';
                    ?>
                </div>

                <div class="row">
                    <div class="inner-content">
                        <div class="img-holder">
                            <div class="col-md-12">
                                <h2 style="padding: 10px 10px 10px 10px; margin-left: 15px">Our work</h2>
                                <?php
                                        include ("inc/image-slider.php");
                                    ?>
                            </div>
                            <!-- col md 12 -->
                        </div>
                        <!-- img holder -->
                    </div>
                    <!--inner content -->
                </div>
                <!--section row -->
                <div class="row">
                    <section class="call-to-action">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="action-serve">
                                   <h3 style="color: white">Peace of mind, attention to detail, integrity and pride in our work.</h3>
                                </div>
                            </div>
                            <!--	TESTIMONIAL SLIDER SECTION INSERT  -->
                            <?php
                            include ('inc/testimonial.php');
                            ?>
                        </div>
                        <!-- section row -->
                    </section>
                    <!-- .call-to-action -->
                </div>
                <!-- section row -->
                <div class="row">
                    <?php
                    include 'inc/footer.html';
                    ?>
                </div>
                <!-- .footer-section -->
            </div>
            <!-- .container-->
        </div>
        <!--content-wrapper-->
    </div>
    <!-- offcanvas-pusher -->

    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- offcanvas-menu end -->
</div>
<!-- #wrapper -->


<!-- =========================================
JAVASCRIPT
========================================== -->


<?
include 'inc/scripts.php';
?>
<script src="js/before-after.min.js"></script>

<script>
    $(document).ready(function(){
        $(document).on("click", ".image-animate-slider", function(){
            var unique_id = $(this).data("modal_id");
            $.ajax({
                url: "inc/comparison.php",
                type: "post",
                data: {unique_id: unique_id},
                success: function(data){
                    $("#comparsion-viewer").html(data);
                    $('.ba-slider').beforeAfter();

                }
            })
        });
    });
</script>
<div class="modal fade"  role="dialog" id="image-preview">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Before/After Photos</h4>
            </div>
            <div class="modal-body">
                <div class="ba-slider">
                    <img src="<? echo $path . $image_info[294]['before'] . $image_type ?>">
                    <div class="resize">
                        <img src="<? echo $path . $image_info[294]['after'] . $image_type ?>">
                    </div>
                    <span class="handle"></span>
                </div>
<!--                <div id="comparsion-viewer"></div>-->
            </div>
            <!-- modal body -->
        </div>
        <!-- modal content -->
    </div>
    <!-- modal dialog -->
</div>
<!-- modal -->
</body>
</html>