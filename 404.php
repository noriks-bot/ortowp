<?php get_header(); ?>
<div class="page-404">
    <h1 class="page-404__title">404</h1>
    <h2>Stran ni najdena</h2>
    <p>Žal te strani ni mogoče najti.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">Nazaj na domačo stran</a>
</div>
<?php get_footer(); ?>
