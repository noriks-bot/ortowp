<?php get_header(); ?>

<div class="front-hero">
    <div class="front-hero__content">
        <img src="https://images.hs-plus.com/assets/STEPPER%20test-0/62260f0233272_logo-stepease-orange-bg.svg" alt="STEPEASE" style="width: 200px; margin-bottom: 2rem;">
        <h1 class="front-hero__title">Olajšaj bolečine v stopalih</h1>
        <p class="front-hero__subtitle">Spoznaj vložke STEPEASE – popolno udobje za tvoja stopala. Ponovno odkrij veselje do stanja, hoje in življenja brez bolečin v stopalih.</p>
        <?php
        $product = get_page_by_title('STEPEASE', OBJECT, 'product');
        if (!$product) {
            $args = array('post_type' => 'product', 'posts_per_page' => 1);
            $products = get_posts($args);
            if ($products) $product = $products[0];
        }
        $product_url = $product ? get_permalink($product->ID) : '#';
        ?>
        <a href="<?php echo esc_url($product_url); ?>" class="btn" style="font-size: var(--step-2); text-transform: uppercase;">NAROČI ZDAJ – 49% POPUST</a>
        <div class="front-hero__badges">
            <span>🌍 Sledenje pošiljki z zavarovano dostavo</span>
            <span>😊 Več kot 200 000 zadovoljnih strank</span>
            <span>🛡️ 90-dnevno jamstvo za vračilo denarja</span>
        </div>
    </div>
</div>

<div class="features-grid">
    <div class="feature-card">
        <div class="feature-card__icon">🦶</div>
        <h3 class="feature-card__title">Takojšnje olajšanje</h3>
        <p>Ortopedski vložki z masažnimi točkami za takojšnje udobje.</p>
    </div>
    <div class="feature-card">
        <div class="feature-card__icon">🔬</div>
        <h3 class="feature-card__title">Klinično preizkušeno</h3>
        <p>Rezultati temeljijo na kliničnih in potrošniških raziskavah.</p>
    </div>
    <div class="feature-card">
        <div class="feature-card__icon">👨‍⚕️</div>
        <h3 class="feature-card__title">Priporočajo podiatri</h3>
        <p>Strokovnjaki priporočajo STEPEASE za zdravje stopal.</p>
    </div>
</div>

<section class="cta-bottom">
    <div class="container">
        <h2 class="cta-bottom__title">Poskrbite za svoja stopala še danes!</h2>
        <p class="cta-bottom__text">Ne glede na to, ali ste zaposlen strokovnjak ali športnik – ortopedski vložki STEPEASE vam zagotavljajo vrhunsko oporo in olajšanje.</p>
        <a href="<?php echo esc_url($product_url); ?>" class="btn">OGLEJ SI IZDELEK</a>
    </div>
</section>

<?php get_footer(); ?>
