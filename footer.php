<?php

defined("ABSPATH") || exit(); ?>

<footer class="footer-bg">
    <div class="container-md">
        <div class="footer-row d-flex justify-content-between">
            <a href="#" class="logo footer-col">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/logo.svg" alt="Logo">
            </a>
            <div class="address footer-col">
                <h3>Address</h3>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/call.svg" alt="call"><a href="tel:+1246333-0088">+ 1 (246) 333-0088</a></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.svg" alt="email"><a href="mailto:alma.lawson@example.com">alma.lawson@example.com</a></li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="map">4140 Parker Rd. Allentown, New Mexico 31134
                    </li>
                </ul>
            </div>

            <div class="social footer-col">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div>

            <div class="subscribe footer-col">
                <h3>Subscribe</h3>
               <form class="subscribe-form" action="#">
                    <input type="email" placeholder="Enter your email">
                    <button><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" alt=""></button>
               </form>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-row d-flex align-items-center justify-content-between">
                <ul class="d-flex">
                    <li><a href="#">Privacy & Terms.</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <span class="copyright">
                    © <?php echo date("Y"); ?> <a href="#">Unded</a>, All Rights Reserved
                </span>
            </div>
        </div>
    </div>
  </footer>
</div><!-- end container -->

<?php wp_footer(); ?>
</body>
</html>