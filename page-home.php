<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evolvemhs
 */

get_header();

?>

<section class="section background-purple-grad">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1><?php echo esc_attr(the_field('hero_title')); ?></h1>
            </div>
            <div class="col-12 col-lg-6">

            </div>
        </div>
    </div>
</section>

<?php
get_footer(); 