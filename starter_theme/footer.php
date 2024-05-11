<?php
/**
 * The template for displaying the footer.
 */

    $site_name = get_bloginfo('name' );
    $tagline   = get_bloginfo('description', 'display' );
?>

        </div>
        <!-- end content -->

        <footer>

            <div class="container">

                <div class="brand">
                    <!-- <img
                        src="<?php bloginfo('template_directory'); ?>/assets/images/render-small.jpg"
                        alt="logo"
                    > -->
                    <div class="location">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/#"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg> <span>Facebook</span></a></li>
                            <li><a href="https://twitter.com/#"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg> <span>Twitter</span></a></li>
                            <li><a href="https://www.linkedin.com/company/#"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg> <span>Linkedin</span></a></li>
                            <li><a href="mailto:info@mail.com"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Mail.Ru</title><path d="M15.61 12c0 1.99-1.62 3.61-3.61 3.61-1.99 0-3.61-1.62-3.61-3.61 0-1.99 1.62-3.61 3.61-3.61 1.99 0 3.61 1.62 3.61 3.61M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12c2.424 0 4.761-.722 6.76-2.087l.034-.024-1.617-1.879-.027.017A9.494 9.494 0 0 1 12 21.54c-5.26 0-9.54-4.28-9.54-9.54 0-5.26 4.28-9.54 9.54-9.54 5.26 0 9.54 4.28 9.54 9.54a9.63 9.63 0 0 1-.225 2.05c-.301 1.239-1.169 1.618-1.82 1.568-.654-.053-1.42-.52-1.426-1.661V12A6.076 6.076 0 0 0 12 5.93 6.076 6.076 0 0 0 5.93 12 6.076 6.076 0 0 0 12 18.07a6.02 6.02 0 0 0 4.3-1.792 3.9 3.9 0 0 0 3.32 1.805c.874 0 1.74-.292 2.437-.821.719-.547 1.256-1.336 1.553-2.285.047-.154.135-.504.135-.507l.002-.013c.175-.76.253-1.52.253-2.457 0-6.617-5.383-12-12-12"/></svg> <span>E-mail</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="links">

                    <div class="col">
                        <h4>Column 1</h4>
                        <ul>
                            <li><a href="#">Point 1</a></li>
                            <li><a href="#">Point 2</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Column 2</h4>
                        <ul>
                            <li><a href="#">First</a></li>
                            <li><a href="#">Second</a></li>
                            <li><hr></li>
                            <li><a href="#">Last</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Column 3</h4>
                        <ul class="tech">
                            <li><a href="#">one</a></li>
                            <li><a href="#">two</a></li>
                            <li><a href="#">three</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="copy">
                &copy; 2022 ...
            </div>

        </footer>

        <?php wp_footer(); ?>

        <script
            src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"
            defer
        ></script>

    </body>
</html>









