<?php
/**
 * Created by PhpStorm.
 * User: HarryJeffs
 * Date: 31/12/17
 * Time: 11:11 PM
 */

$page_title = "Contact";

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
<?php
include 'inc/header.inc.php';
?>
<body>

<div class="wrapper" id="wrapper">
    <div class="offcanvas-pusher">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <?
                    include 'inc/top-header.html';
                    ?>
                </div>
                <div class="row">
                    <section class="contact-section">
                        <div class="col-md-12">
                            <form action="" method="post" novalidate enctype="multipart/form-data">
                                <div class="col-md-8">
                                    <div class="form-group f1 required" data-fid="f1">
                                        <label class="control-label" for="f1">Full Name</label>
                                        <div class="input-group" id="contact-name">
                                            <span class="input-group-addon left">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input type="text" class="form-control" id="f1" name="f1" value="" data-rule-required="true" />
                                        </div>
                                    </div>
                                    <!--  .form-group #contact-name -->
                                    <div class="form-group f2 required" data-fid="f2" id="contact-email">
                                        <label class="control-label" for="f2">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon left">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" id="f2" name="f2" value="" data-rule-email="true" data-rule-required="true" data-rule-minlength="5" data-msg-minlength="Please enter at least {5} characters."   />
                                        </div>
                                    </div>
                                    <!--  .form-group #contact-email -->
                                    <div class="form-group f4 required" data-fid="f4" id="contact-phone">
                                        <label class="control-label" for="f2">Phone Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon left">
                                                <i class="glyphicon glyphicon-earphone"></i>
                                            </span>
                                            <input type="text" class="form-control" id="f4" name="f4" value="" data-rule-required="true" data-rule-alphanumeric="true" data-rule-minlength="7" data-msg-minlength="Please enter at least {7} numbers." data-mask="#" />
                                        </div>
                                    </div>
                                    <!--  .form-group #contact-phone -->
                                    <div class="form-group f3 required" data-fid="f3" id="contact-phone">
                                        <label class="control-label" for="f3">Message</label>
                                        <div class="input-group">
                                            <span class="input-group-addon left">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </span>
                                            <textarea class="form-control" id="f3" name="f3" rows="4" data-rule-required="true" ></textarea>
                                        </div>
                                    </div>
                                    <!--  .form-group #contact-phone -->
                                    <button class="g-recaptcha btn btn-primary btn-block" data-badge="inline" type="submit">Submit</button>
                                    <!--  .col_field #g-recaptcha -->
                                </div>
                                <div class="col-md-4">
                                    <h3>Prefer to call?</h3>
                                    <br>
                                    <address>
                                        <i class="fa fa-phone"></i> 0407 519 343<br>
                                        <i class="fa fa-envelope"> PO Box 5169 Mordialloc 3195</i>
                                    </address>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- .contact-section -->
                </div>
                <?php
                include 'inc/footer.html';
                ?>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="contact.html">Contact us</a></li>
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
<!--<script src="https://www.google.com/recaptcha/api.js?hl=" async defer></script>-->
</body>
</html>
