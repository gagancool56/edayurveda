<!-- ======= Footer ======= -->
<div class="featured-in">
    <p class="text-center">We Have Been Featured In:
        <a href="<?= base_url("wall-street-journal") ?>"><img src=" <?= asset_url('img/featuredin/wallstreetjournal.gif') ?>" border="0"></a>
        <a href="<?= base_url("us-news") ?>"><img src=" <?= asset_url('img/featuredin/usnews.gif') ?>" border="0"></a>
        <a href="<?= base_url("fortune") ?>"><img src=" <?= asset_url('img/featuredin/fortune.gif') ?>" border="0"></a>
        <a href="<?= base_url("usa-today") ?>"><img src=" <?= asset_url('img/featuredin/usatoday.gif') ?>" border="0"></a>
        <a href="<?= base_url("new-york-times") ?>"><img src=" <?= asset_url('img/featuredin/newyorktimes.gif') ?>" border="0"></a>
        <a href="<?= base_url("bloomberg") ?>"><img src=" <?= asset_url('img/featuredin/bloomberg.gif') ?>" border="0"></a>
    </p>
</div>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4><?= business_info('buname') ?></h4>
                    <p>
                        <?= business_info('address') ?><br>
                        <strong>Phone:</strong> <?= business_info('phone') ?><br>
                        <strong>Email:</strong> <?= business_info('email') ?><br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('#services') ?>">Blogs</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('terms-of-use') ?>">Terms of use</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('privacy-policy') ?>">Privacy policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('self-payment-services') ?>">Agreement for self-payment of services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('privacy-practices') ?>">Doctor matrix privacy practices</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('blog/?postid=4') ?>">Generic Med ED Consultant</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('blog/?postid=3') ?>">Ayurveda Med ED Consultant</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('blog/?postid=1') ?>">Yoga ED Consultant</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('#appointment') ?>">Audio Consultancy (Doc on Call)</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('#appointment') ?>">Video Consultancy (Doc on Video Call)</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Get the latest offers and updates join our newsletter.We'll never share your email with anyone else.</p>
                    <form action="" method="post" id="news-letter">
                        <input type="email" name="email"><button type="submit" id="news-letter-submit-btn">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4 pb-5">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                Copyright &copy; 2003 - <?= date('Y') ?><strong><span> Medgen Capital Management,LLC</span></strong></br> All rights reserved worldwide. All other trademarks are the property of their respective owners.
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="<?= social_media_links('twitter') ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?= social_media_links('facebook') ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?= social_media_links('instagram') ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?= social_media_links('linkedin') ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?= '<script> var site_url="' . base_url() . '"</script>' ?>
<!-- Vendor JS Files -->
<script src="<?= asset_url('vendor/purecounter/purecounter.js') ?>"></script>
<script src="<?= asset_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset_url('vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= asset_url('vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= asset_url('vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= asset_url('vendor/jquery.min.js') ?>"></script>
<script src="<?= asset_url('vendor/sweetalert.min.js') ?>"></script>

<!-- Template Main JS File -->
<script src="<?= asset_url('js/main.js') ?>"></script>
<script src="<?= asset_url('js/custom.js') ?>"></script>

<!-- Calendly inline widget begin -->
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->

<!-- Messenger Chat plugin Code -->
<link rel="stylesheet" href="<?= asset_url('wa/floating-wpp.min.css') ?>">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="<?= asset_url('wa/floating-wpp.min.js') ?>"></script>

<div id="WAButton"></div>
<script>
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '+17083628420', //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="<?= asset_url('wa/whatsapp.svg') ?>" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "left"
        });
    });

    $(window).on('load', function() {
        $('.loader').hide();
        $('#overlay').hide();
    })
</script>
</body>

</html>