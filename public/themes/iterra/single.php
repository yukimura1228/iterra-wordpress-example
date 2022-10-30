<?php get_header(); ?>
<main>
<section class="section">
<div class="section__inner">
<div class="section__heading"></div>
<div class="section__container">
<?php if(have_posts()): while(have_posts()) : the_post(); the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>
</div>
</section>
</main>
<?php get_footer(); ?>
