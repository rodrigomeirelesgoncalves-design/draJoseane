<?php
/**
 * Page Template
 *
 * @package Dra_Joseane_Souza
 */

get_header();
?>

<section class="section-padding" style="padding-top: 8rem;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="page-header" style="margin-bottom: 2rem;">
                    <h1 class="page-title" style="font-size: 2.5rem; font-weight: 700; color: hsl(var(--foreground));">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="page-content" style="max-width: 65ch;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
