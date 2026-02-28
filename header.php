<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="site-header">
    <div class="horizontal-ticker horizontal-ticker-sections">
        <div class="horizontal-ticker__container">
            <?php for ($i = 0; $i < 8; $i++) : ?>
            <p class="horizontal-ticker__item">❄️ ZIMSKA RAZPRODAJA</p>
            <p class="horizontal-ticker__item">💥 NAŠA NAJVEČJA RAZPRODAJA DO SEDAJ</p>
            <p class="horizontal-ticker__item">⌛ PONUDBA KMALU POTEČE</p>
            <p class="horizontal-ticker__item">🔥 PRIHRANITE DO 60%</p>
            <?php endfor; ?>
        </div>
    </div>
    <div class="header__inner">
        <div class="header__content container">
            <a class="header__logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="header__logo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/62260f0233272_logo-stepease-orange-bg.svg" alt="STEPEASE">
            </a>
            <a class="header__cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
                <img class="header__cart-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3ed463b233aa1_icon-cart.svg" alt="Košarica">
            </a>
        </div>
    </div>
</header>

<main class="main">
