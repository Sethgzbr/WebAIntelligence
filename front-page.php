<?php
/**
 * The front page template for our theme
 *
 * @package WebAIntelligence
 */

get_header(); ?>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>
                    Tech <span>Solutions</span> <br>
                    Talent <span>Strategies</span> <br>
                    Digital <span>Transformation</span>
                </h1>
                <p><?php echo wp_kses_post( 'We help companies scale through custom technological solutions and advanced data analysis.' ); ?></p>
                <div class="hero-btns">
                    <a href="#" class="btn-primary">Get Started</a>
                    <a href="#" class="btn-secondary">View Services</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="img-placeholder">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/logos/LogoPequeño3d.png' ); ?>" alt="Hero Image" class="primera-img">
                </div> 
            </div>
        </div>
    </section>

<?php get_footer(); ?>
