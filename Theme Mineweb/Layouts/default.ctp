<!DOCTYPE html>

<html lang="fr">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Skill">



    <title><?= $website_name ?> | <?= $title_for_layout ?></title>



    <link rel="icon" type="image/png" href="assets/images/favicon.png">



    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,700%7cMarcellus+SC" rel="stylesheet">



    <?= $this->Html->css('bootstrap.min.css') ?>

    <?= $this->Html->css('font-awesome.min.css') ?>

    <?= $this->Html->css('ionicons.min.css') ?>

    <?= $this->Html->css('settings.css') ?>

    <?= $this->Html->css('layers.css') ?>

    <?= $this->Html->css('navigation.css') ?>

    <?= $this->Html->css('flickity.css') ?>

    <?= $this->Html->css('photoswipe.css') ?>

    <?= $this->Html->css('default-skin.css') ?>

    <?= $this->Html->css('jquery.datetimepicker.min.css') ?>

    <?= $this->Html->css('prism-tomorrow.css') ?>

    <?= $this->Html->css('summernote.css') ?>

    <?= $this->Html->css('godlike.css') ?>

    <?= $this->Html->css('custom.css') ?>



    <style>

        /*Désactive la scrollbar sous Chrome*/

        ::-webkit-scrollbar {

            width: 0px;

            height: 0px;

        }

    </style>



    <?= $this->Html->script('jquery.min.js') ?>



</head>



<body id="home" class="homepage">



<div class="nk-preloader">

    <div class="nk-preloader-bg" style="background-color: #000;" data-close-frames="23" data-close-speed="1.2"

         data-close-sprites="https://mineweb.skilldev.be/theme/Octonia/img/preloader-bg.png" data-open-frames="23" data-open-speed="1.2"

         data-open-sprites="https://mineweb.skilldev.be/theme/Octonia/img/preloader-bg-bw.png">

    </div>

    <div class="nk-preloader-content">

        <div>

            <img class="nk-img" src="https://octonia.fr/theme/OctoniaV2/img/logo.png" width="170">

            <div class="nk-preloader-animation"></div>

        </div>

    </div>

</div>



<?= $this->element('navbar') ?>



<?= $this->element('notifications') ?>



<?= $this->fetch('content'); ?>



<br>

<br>

<br>

<br>

<br>

<br>



<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">

    <img class="nk-footer-top-corner" src="https://octonia.fr/theme/Octonia/img/footer-corner.png" alt="">



    <div class="container">

        <div class="nk-gap-2"></div>

        <div class="nk-gap"></div>



        <p>

            &copy; 2017 OctoniaNetwork

        </p>



        <div class="nk-footer-links">

            <a href="#" class="link-effect">CGU</a>

            <span>|</span> <a href="#" class="link-effect">CGV</a>

        </div>



        <div class="nk-gap-4"></div>

    </div>

</footer>



<?= $this->element('modals') ?>



<?= $this->Html->script('TweenMax.min.js') ?>

<?= $this->Html->script('ScrollToPlugin.min.js') ?>

<?= $this->Html->script('tether.min.js') ?>

<?= $this->Html->script('bootstrap.min.js') ?>

<?= $this->Html->script('sticky-kit.min.js') ?>

<?= $this->Html->script('jarallax.min.js') ?>

<?= $this->Html->script('jarallax-video.min.js') ?>

<?= $this->Html->script('imagesloaded.pkgd.min.js') ?>

<?= $this->Html->script('flickity.pkgd.min.js') ?>

<?= $this->Html->script('isotope.pkgd.min.js') ?>

<?= $this->Html->script('photoswipe.min.js') ?>

<?= $this->Html->script('photoswipe-ui-default.min.js') ?>

<?= $this->Html->script('typed.min.js') ?>

<?= $this->Html->script('jquery.form.min.js') ?>

<?= $this->Html->script('jquery.validate.min.js') ?>

<?= $this->Html->script('jquery.countdown.min.js') ?>

<?= $this->Html->script('moment.min.js') ?>

<?= $this->Html->script('moment-timezone-with-data.js') ?>

<?= $this->Html->script('hammer.min.js') ?>

<?= $this->Html->script('nk-share.js') ?>

<?= $this->Html->script('jquery.nanoscroller.min.js') ?>

<?= $this->Html->script('soundmanager2-nodebug-jsmin.js') ?>

<?= $this->Html->script('jquery.datetimepicker.full.min.js') ?>

<?= $this->Html->script('jquery.themepunch.tools.min.js') ?>

<?= $this->Html->script('jquery.themepunch.revolution.min.js') ?>

<?= $this->Html->script('revolution.extension.video.min.js') ?>

<?= $this->Html->script('revolution.extension.carousel.min.js') ?>

<?= $this->Html->script('revolution.extension.navigation.min.js') ?>

<?= $this->Html->script('keymaster.js') ?>

<?= $this->Html->script('summernote.min.js') ?>

<?= $this->Html->script('prism.js') ?>

<?= $this->Html->script('godlike.min.js') ?>

<?= $this->Html->script('godlike-init.js') ?>

<?= $this->Html->script('notification.js') ?>



<script type="text/javascript">

    var tpj = jQuery;

    var revapi50;

    tpj(document).ready(function() {

        if (tpj("#rev_slider_50_1").revolution == undefined) {

            revslider_showDoubleJqueryError("#rev_slider_50_1");

        } else {

            revapi50 = tpj("#rev_slider_50_1").show().revolution({

                sliderType: "carousel",

                jsFileLocation: "assets/plugins/revolution/js/",

                sliderLayout: "auto",

                dottedOverlay: "none",

                delay: 9000,

                navigation: {

                    keyboardNavigation: "off",

                    keyboard_direction: "horizontal",

                    onHoverStop: "off",

                },

                carousel: {

                    maxRotation: 8,

                    vary_rotation: "off",

                    minScale: 20,

                    vary_scale: "off",

                    horizontal_align: "center",

                    vertical_align: "center",

                    fadeout: "off",

                    vary_fade: "off",

                    maxVisibleItems: 3,

                    infinity: "on",

                    space: -90,

                    stretch: "off"

                },

                responsiveLevels: [1240, 1024, 778, 480],

                gridwidth: [800, 600, 400, 320],

                gridheight: [600, 400, 320, 280],

                lazyType: "none",

                shadow: 0,

                spinner: "off",

                stopLoop: "on",

                stopAfterLoops: 0,

                stopAtSlide: 0,

                shuffle: "off",

                autoHeight: "off",

                fullScreenAlignForce: "off",

                fullScreenOffsetContainer: "",

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

    });

</script>



<?= $this->Html->script('app.js') ?>

<?= $this->Html->script('form.js') ?>

<script>



<?php if($isConnected) { ?>

var notification = new $.Notification({

    'url': {

        'get': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'getAll')) ?>',

        'clear': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clear', 'NOTIF_ID')) ?>',

        'clearAll': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clearAll')) ?>',

        'markAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAsSeen', 'NOTIF_ID')) ?>',

        'markAllAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAllAsSeen')) ?>'

    },

    'messages': {

        'markAsSeen': '<?= $Lang->get('NOTIFICATION__MARK_AS_SEEN') ?>',

        'notifiedBy': '<?= $Lang->get('NOTIFICATION__NOTIFIED_BY') ?>'

    }

});

<?php } ?>



// Config FORM/APP.JS



var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";

var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";



var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";

var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";

var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";

var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"

var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";



var CSRF_TOKEN = "<?= $csrfToken ?>";

</script>



<?php if(isset($google_analytics) && !empty($google_analytics)) { ?>

  <script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



    ga('create', '<?= $google_analytics ?>', 'auto');

    ga('send', 'pageview');

  </script>

<?php } ?>

<?= (isset($configuration_end_code)) ? $configuration_end_code : '' ?>



</body>



</html>