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

<section class="section background-purple-grad pt-5">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <?php if (get_field('hero_above_title')) : ?>
                <p class="mb-0" style="font-size: 16px;"><?php echo esc_attr(get_field('hero_above_title')); ?></p>
                <?php endif; ?>
                <?php if (get_field('hero_title')) : ?>
                <h1 style="font-size: 44px;"><?php echo esc_attr(get_field('hero_title')); ?></h1>
                <?php endif; ?>
                <?php if (get_field('hero_subtitle')) : ?>
                <p class="mb-2" style="font-size: 18px;"><?php echo esc_attr(get_field('hero_subtitle')); ?></p>
                <?php endif; ?>
                <?php if (get_field('hero_tagline')) : ?>
                <p class="mb-0" style="font-size: 18px;"><?php echo esc_attr(get_field('hero_tagline')); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                <?php 
			if (get_field('hero_image')) : 
				$hero_image = get_field('hero_image');	
				?>
                <img class="img-fluid" src="<?php echo esc_url($hero_image['url']); ?>"
                    alt="<?php echo esc_attr($hero_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="about" class="section bg-white py-5">
    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-0">
                <?php 
			if (get_field('about_image')) : 
				$about_image = get_field('about_image');	
				?>
                <img class="img-fluid shadow rounded" src="<?php echo esc_url($about_image['url']); ?>"
                    alt="<?php echo esc_attr($about_image['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 order-0 order-lg-1 text-center text-lg-left">
                <?php if (get_field('about_title')) : ?>
                <h2 class="mb-3 about-title"><?php echo esc_attr(get_field('about_title')); ?></h2>
                <?php endif; ?>

                <?php if (get_field('about_license')) : ?>
                <p class="mb-3 text-black-50"><?php echo esc_attr(get_field('about_license')); ?></p>
                <?php endif; ?>

                <?php if (get_field('about_content')) : ?>
                <?php echo the_field('about_content'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="specialties" class="section background-purple-grad py-5">
    <div class="container">
        <?php if (get_field('specialties_section_title')) : ?>
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-5 specialties-section-title">
                    <?php echo esc_attr(get_field('specialties_section_title')); ?></h2>
            </div>
        </div>
        <?php endif; ?>

        <?php if (get_field('individual_therapy_title')) : ?>
        <div class="bg-white rounded shadow" data-aos="fade-up" data-aos-once="true">
            <div class="row mb-5">

                <div class="col-12 col-lg-6">
                    <?php 
			if (get_field('individual_therapy_image')) : 
				$individual_therapy_image = get_field('individual_therapy_image');	
				?>
                    <img class="img-fluid pb-5" src="<?php echo esc_url($individual_therapy_image['url']); ?>"
                        alt="<?php echo esc_attr($individual_therapy_image['alt']); ?>">
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="p-3 p-xl-5">
                        <h3 class="mb-3 individual-therapy-title">
                            <?php echo esc_attr(get_field('individual_therapy_title')); ?></h3>

                        <?php if (get_field('individual_therapy_content')) : ?>
                        <?php echo the_field('individual_therapy_content'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (get_field('family_therapy_title')) : ?>
        <div class="bg-white rounded shadow" data-aos="fade-up" data-aos-once="true">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <div class="p-3 p-xl-5">
                        <h3 class="mb-3 family-therapy-title">
                            <?php echo esc_attr(get_field('family_therapy_title')); ?></h3>

                        <?php if (get_field('family_therapy_content')) : ?>
                        <?php echo the_field('family_therapy_content'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1 text-right">
                    <?php 
			if (get_field('family_therapy_image')) : 
				$family_therapy_image = get_field('family_therapy_image');	
				?>
                    <img class="img-fluid pb-5" src="<?php echo esc_url($family_therapy_image['url']); ?>"
                        alt="<?php echo esc_attr($family_therapy_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>

<section id="groups" class="section bg-white groups py-5">
    <div class="container">
        <?php if (get_field('groups_section_title')) : ?>
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-5 groups-section-title">
                    <?php echo esc_attr(get_field('groups_section_title')); ?></h2>
            </div>
        </div>
        <?php endif; ?>

        <?php if (get_field('groups_title')) : ?>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center" data-aos="fade-right" data-aos-once="true">
                <?php 
			if (get_field('groups_image')) : 
				$groups_image = get_field('groups_image');	
				?>
                <img class="img-fluid" src="<?php echo esc_url($groups_image['url']); ?>"
                    alt="<?php echo esc_attr($groups_image['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6">

                <h3 class="mb-3 individual-therapy-title">
                    <?php echo esc_attr(get_field('groups_title')); ?></h3>

                <?php if (get_field('groups_content')) : ?>
                <?php echo the_field('groups_content'); ?>
                <?php endif; ?>

            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php if (get_field('quote')) : ?>
<section style="background-color: #F9F9F9;" class="section quote py-5">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-10 text-center">
                <p class="h1 font-weight-normal font-italic mb-3"><?php echo esc_attr(get_field('quote')); ?></p>
                <?php if (get_field('quote_author')) : ?>
                <p class="font-weight-bold mb-0" style="font-size: 36px;">-
                    <?php echo esc_attr(get_field('quote_author')); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="contact" class="section bg-white py-5 contact">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-8">
                <?php if (get_field('contact_section_title')) : ?>
                <h2 class="mb-5 contact-section-title text-center">
                    <?php echo esc_attr(get_field('contact_section_title')); ?></h2>
                <?php endif; ?>
                <?php if (get_field('contact_description')) : ?>
                <div class="text-center">
                    <?php echo get_field('contact_description'); ?></div>
                <?php endif; ?>
                <p class="text-center font-weight-bold pb-3" style="font-size: 22px;">
                    <?php if (get_field('phone_number', 'option')) : ?>Phone:
                    <?php echo '<a class="text-primary" href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>'; ?>
                    &nbsp; | &nbsp;<?php endif; ?>
                    <?php if (get_field('phone_number', 'option')) : ?>Email:
                    <?php echo '<a class="text-primary" href="mailto:' . get_field('email_address', 'option') . '">' . get_field('email_address', 'option') . '</a>'; ?>
                    <?php endif; ?>
                </p>

                <?php if (get_field('contact_image')) : 
					$contact_image = get_field('contact_image');
					?>
                <div class="pb-5">
                    <img class="img-fluid" src="<?php echo esc_url($contact_image['url']);?>"
                        alt="<?php echo esc_url($contact_image['alt']);?>">
                </div>
                <?php endif; ?>
                <p class="text-center font-weight-bold pb-3" style="font-size: 22px;">Send a message</p>
                <?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
                <p class="text-center my-5"><?php echo esc_attr(get_field('pricing_information')); ?></p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); 