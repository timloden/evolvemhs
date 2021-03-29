<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolvemhs
 */

?>

</div><!-- #content -->

<footer class="site-footer bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="nav justify-content-center py-5" style="font-size: 20px;">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">Specialties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="#">Contact</a>
                    </li>
                </ul>
                <p class="mb-0 text-white font-weight-bold" style="font-size: 24px;">Nicole Levin</p>
                <p class="mb-0 text-white font-weight-bold" style="font-size: 20px;">
                    <?php echo get_field('license', 'option'); ?></p>

                <p class="mb-0 text-white py-4" style="font-size: 20px;">
                    <?php if (get_field('phone_number', 'option')) : ?>
                    <?php echo '<a class="text-white" href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>'; ?>
                    &nbsp; | &nbsp;
                    <?php endif; ?>
                    <?php if (get_field('phone_number', 'option')) : ?>
                    <?php echo '<a class="text-white" href="mailto:' . get_field('email_address', 'option') . '">' . get_field('email_address', 'option') . '</a>'; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="copyright py-5">
        <div class="container">
            <p class="m-0 text-center text-white" style="font-size: 12px;">&copy; Evolve Mental Health Services
                <?php echo date( 'Y' ); ?>
            </p>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>