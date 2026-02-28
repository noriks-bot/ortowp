<?php
defined('ABSPATH') || exit;
global $product;

// Get product data
$product_id = $product->get_id();
$regular_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$gallery_ids = $product->get_gallery_image_ids();
$featured_image_id = $product->get_image_id();

// Build gallery
$gallery_images = array();
if ($featured_image_id) {
    $gallery_images[] = wp_get_attachment_url($featured_image_id);
}
foreach ($gallery_ids as $gid) {
    $gallery_images[] = wp_get_attachment_url($gid);
}

// Get variations if variable product
$variations = array();
$available_sizes = array();
$available_colors = array();
if ($product->is_type('variable')) {
    $variations = $product->get_available_variations();
    $attributes = $product->get_variation_attributes();
    if (isset($attributes['pa_velikost'])) $available_sizes = $attributes['pa_velikost'];
    if (isset($attributes['pa_barva'])) $available_colors = $attributes['pa_barva'];
}

// Price calculations
if (!$sale_price && $product->is_type('variable')) {
    $var_prices = $product->get_variation_prices();
    $sale_price = min($var_prices['sale_price']);
    $regular_price = min($var_prices['regular_price']);
}
if (!$regular_price) $regular_price = 36.95;
if (!$sale_price) $sale_price = 18.99;
$discount = round(100 - ($sale_price / $regular_price * 100));

$price2 = number_format($sale_price * 0.78, 2);
$price3 = number_format($sale_price * 0.73, 2);
$price5 = number_format($sale_price * 0.52, 2);
$total2 = number_format($price2 * 2, 2);
$total3 = number_format($price3 * 3, 2);
$total5 = number_format($price5 * 5, 2);
$orig2 = number_format($regular_price * 2, 2);
$orig3 = number_format($regular_price * 3, 2);
$orig5 = number_format($regular_price * 5, 2);
$save2 = round(100 - ($price2 / $regular_price * 100));
$save3 = round(100 - ($price3 / $regular_price * 100));
$save5 = round(100 - ($price5 / $regular_price * 100));

// Stock number (fake urgency)
$stock_left = rand(12, 24);
?>

<?php do_action('woocommerce_before_single_product'); ?>

<section class="section sct-hero">
    <div class="sct-hero__content container">
        <!-- LEFT: Gallery -->
        <div class="sct-hero__content-row --sticky">
            <div class="sct-hero__gallery">
                <div class="gallery-container">
                    <div class="swiper gallery-slider" id="gallerySlider">
                        <div class="swiper-wrapper">
                            <?php if (!empty($gallery_images)) : ?>
                                <?php foreach ($gallery_images as $img_url) : ?>
                                    <div class="swiper-slide gallery-slider__item">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="STEPEASE">
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/84d4e066ce333_stepease_PP-EN_-_si-2.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/1b704871b6d6_stepease_PP-EN_-_si-5.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/0db2e820e6db5_stepease_PP-EN_-_si.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/04260de1979ae_stepease_PP-EN_-_si-1.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/cc8b1fcd4471_stepease_PP-EN_-_si-7.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/d82503b0fef5a_stepease_PP-EN_-_si-6.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/f3f10485dce06_stepease_PP-EN_-_si-3.jpg" alt="STEPEASE">
                                </div>
                                <div class="swiper-slide gallery-slider__item">
                                    <img src="https://images.hs-plus.com/assets/shared-images/2f514ac962b58_stepease_PP-EN_-_si-4.jpg" alt="STEPEASE">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="gallery-thumbs" id="galleryThumbs">
                        <?php if (!empty($gallery_images)) : ?>
                            <?php foreach ($gallery_images as $i => $img_url) : ?>
                                <div class="gallery-thumbs__item <?php echo $i === 0 ? 'active' : ''; ?>" data-index="<?php echo $i; ?>">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="STEPEASE">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Product Info -->
        <div class="sct-hero__content-row">
            <!-- Rating -->
            <div class="product-rating">
                <img class="product-rating__img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/196c785d39169_stars-5.svg" alt="5 zvezdic">
                <span class="product-rating__txt">Odlično 4,8&nbsp;|&nbsp;1169&nbsp;ocen</span>
            </div>

            <!-- Title -->
            <h1 class="sct-hero__title"><?php echo esc_html($product->get_name()); ?>&nbsp;|&nbsp;Masažni vložki</h1>

            <!-- Price -->
            <div class="price-display">
                <span class="price-sale"><?php echo number_format($sale_price, 2); ?></span>
                <span class="price-original"><?php echo number_format($regular_price, 2); ?> €</span>
                <span class="price-discount">
                    <svg aria-hidden="true" viewBox="0 0 12 12"><path fill="currentColor" fill-rule="evenodd" d="M7 0h3a2 2 0 0 1 2 2v3a1 1 0 0 1-.3.7l-6 6a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 0-1.4l6-6A1 1 0 0 1 7 0m2 2a1 1 0 1 0 2 0 1 1 0 0 0-2 0" clip-rule="evenodd"/></svg>
                    <?php echo $discount; ?>%
                </span>
            </div>

            <!-- Short description -->
            <div class="short-description">
                <ul style="padding:0; margin: 0;">
                    <li>Takojšnje olajšanje</li>
                    <li>Klinično preizkušeno</li>
                    <li>Priporočajo podiatri</li>
                </ul>
            </div>

            <!-- Trust Badges -->
            <ul class="trust-badges">
                <li class="trust-badges__item">
                    <span class="trust-badges__icon">🛡️</span>
                    <span class="trust-badges__text --accent">90-dnevna možnost vračila kupnine</span>
                </li>
                <li class="trust-badges__item">
                    <span class="trust-badges__icon">🏭</span>
                    <span>Skladišče v Sloveniji</span>
                </li>
                <li class="trust-badges__item">
                    <span class="trust-badges__icon">🚚</span>
                    <span>Hitra dostava</span>
                </li>
                <li class="trust-badges__item">
                    <span class="trust-badges__icon">💰</span>
                    <span>Plačilo tudi po povzetju</span>
                </li>
            </ul>

            <hr>

            <!-- 14-day return + 93% rating -->
            <p style="font-size: var(--step--1); color: #666; text-align: center;">
                14-dnevna možnost vračila kupnine<br>
                93% strank je ocenilo Stepease z odličnostjo
            </p>

            <hr>

            <!-- Stock Warning -->
            <div class="stock-warning">
                <span class="stock-warning__dot"></span>
                Na zalogi le še <strong id="stockCount"><?php echo $stock_left; ?></strong> parov!
            </div>

            <hr>

            <!-- Add to Cart Form -->
            <form method="post" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" class="cart" id="ortostepCart">
                
                <!-- Color Selector -->
                <div class="color-selector">
                    <div class="color-selector__label">Barva: <span id="selectedColorName">Oranžna</span></div>
                    <div class="color-options">
                        <?php if (!empty($available_colors)) : ?>
                            <?php 
                            $color_map = array(
                                'oranzna' => '#e03e0d', 'orange' => '#e03e0d',
                                'crna' => '#000000', 'black' => '#000000', 'črna' => '#000000',
                                'siva' => '#a9a9a9', 'grey' => '#a9a9a9',
                            );
                            $color_names = array(
                                'oranzna' => 'Oranžna', 'orange' => 'Oranžna',
                                'crna' => 'Črna', 'black' => 'Črna', 'črna' => 'Črna',
                                'siva' => 'Siva', 'grey' => 'Siva',
                            );
                            $first = true;
                            foreach ($available_colors as $color_slug) :
                                $hex = isset($color_map[strtolower($color_slug)]) ? $color_map[strtolower($color_slug)] : '#ccc';
                                $name = isset($color_names[strtolower($color_slug)]) ? $color_names[strtolower($color_slug)] : $color_slug;
                            ?>
                                <div class="color-option <?php echo $first ? 'active' : ''; ?>" 
                                     style="background-color: <?php echo $hex; ?>"
                                     data-color="<?php echo esc_attr($color_slug); ?>"
                                     data-name="<?php echo esc_attr($name); ?>"
                                     title="<?php echo esc_attr($name); ?>"></div>
                            <?php $first = false; endforeach; ?>
                        <?php else : ?>
                            <div class="color-option active" style="background-color: #e03e0d" data-color="oranzna" data-name="Oranžna" title="Oranžna"></div>
                            <div class="color-option" style="background-color: #000000" data-color="crna" data-name="Črna" title="Črna"></div>
                            <div class="color-option" style="background-color: #a9a9a9" data-color="siva" data-name="Siva" title="Siva"></div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Size Selector -->
                <div class="size-selector">
                    <div class="size-selector__label">Velikost:</div>
                    <div class="size-options">
                        <?php
                        $default_sizes = array('35/36', '37/38', '39/40', '41/42', '43/44', '45/46', '47/48', '49/50');
                        $sizes_to_show = !empty($available_sizes) ? $available_sizes : $default_sizes;
                        foreach ($sizes_to_show as $i => $size) :
                            $display_size = str_replace('-', '/', $size);
                        ?>
                            <div class="size-option <?php echo $i === 4 ? 'active' : ''; ?>" data-size="<?php echo esc_attr($size); ?>">
                                <?php echo esc_html($display_size); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Size Guide -->
                <a href="#" class="size-guide-link" onclick="return false;">
                    <span class="material-symbols-outlined" style="font-size: 1.2em; color: var(--clr-one);">straighten</span>
                    <span class="size-guide-link__text">Manjša velikost? Med velikostima?</span>
                </a>

                <!-- Quantity Bundles -->
                <div class="quantity-bundles">
                    <div class="quantity-bundle active" data-qty="1">
                        <div class="quantity-bundle__name">1 par</div>
                        <div class="quantity-bundle__prices">
                            <span class="quantity-bundle__sale"><?php echo number_format($sale_price, 2); ?> €</span>
                            <span class="quantity-bundle__original"><?php echo number_format($regular_price, 2); ?> €</span>
                            <span class="quantity-bundle__save">-<?php echo $discount; ?>%</span>
                        </div>
                    </div>
                    <div class="quantity-bundle" data-qty="2">
                        <div class="quantity-bundle__name">2 para <span class="quantity-bundle__free-shipping">Brezplačna dostava</span></div>
                        <div class="quantity-bundle__prices">
                            <span class="quantity-bundle__sale"><?php echo $total2; ?> €</span>
                            <span class="quantity-bundle__original"><?php echo $orig2; ?> €</span>
                            <span class="quantity-bundle__save">-<?php echo $save2; ?>%</span>
                        </div>
                    </div>
                    <div class="quantity-bundle" data-qty="3" style="margin-top: 1.25rem;">
                        <div class="quantity-bundle__best">NAJBOLJ PRILJUBLJENA</div>
                        <div class="quantity-bundle__name">3 pari <span class="quantity-bundle__free-shipping">Brezplačna dostava</span></div>
                        <div class="quantity-bundle__prices">
                            <span class="quantity-bundle__sale"><?php echo $total3; ?> €</span>
                            <span class="quantity-bundle__original"><?php echo $orig3; ?> €</span>
                            <span class="quantity-bundle__save">-<?php echo $save3; ?>%</span>
                        </div>
                    </div>
                    <div class="quantity-bundle" data-qty="5">
                        <div class="quantity-bundle__name">5 parov <span class="quantity-bundle__free-shipping">Brezplačna dostava</span></div>
                        <div class="quantity-bundle__prices">
                            <span class="quantity-bundle__sale"><?php echo $total5; ?> €</span>
                            <span class="quantity-bundle__original"><?php echo $orig5; ?> €</span>
                            <span class="quantity-bundle__save">-<?php echo $save5; ?>%</span>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="quantity" id="quantityInput" value="1">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <input type="hidden" name="variation_id" id="variationInput" value="<?php echo !empty($variations) ? $variations[0]['variation_id'] : ''; ?>">
                <input type="hidden" name="ortostep_add_to_cart" value="1">

                <button type="submit" class="add-to-cart-btn">
                    🛒 DODAJ V KOŠARICO
                </button>

                <div class="shipping-info">
                    🚚 Dostava v 2–3 delovnih dneh
                </div>
            </form>

            <hr>

            <!-- FAQ Accordion -->
            <div class="faq-section">
                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">straighten</span>
                        Manjša velikost? Med velikostima?
                    </summary>
                    <div>
                        <p><strong>Manjša od naše najmanjše velikosti?</strong><br>
                        Naročite najmanjšo velikost in jo prirežite po označenih črtah na zadnji strani za popolno prileganje.</p>
                        <p><strong>Med velikostma?</strong><br>
                        Vedno izberite večjo in prirežite po označenih črtah.</p>
                        <p>Preprosto. Nastavljivo. Ustvarjeno zate.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">steps</span>
                        Ali se STEPEASE prilegajo mojim čevljem?
                    </summary>
                    <div>
                        <p>Da, zasnovani so tako, da se popolnoma prilegajo vaši običajni velikosti čevljev.</p>
                        <ul>
                            <li>Ni vam potrebno izbrati večje številke ali kupovati večjih čevljev</li>
                            <li>Robovi, ki jih lahko prirežete za popolno prileganje</li>
                            <li>Ne bodo zožili vaših čevljev</li>
                            <li>Zlahka se prilegajo delovnim čevljem, supergam, športnim copatom in drugim</li>
                        </ul>
                        <p>STEPEASE so ustvarjeni za vsakodnevno nošenje – brez tiščanja, brez ugibanja. Samo čisto udobje.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">emergency</span>
                        Ali pomagajo pri bolečinah v stopalih?
                    </summary>
                    <div>
                        <p>Da, STEPEASE pomagajo pri različnih težavah s stopali, kot so plantarni fasciitis, bolečine v loku, peti in metatarzaliji.</p>
                        <p>Naši vložki nudijo vrhunsko oporo in blaženje, ki pomagata zmanjšati nelagodje in izboljšati splošno zdravje stopal.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">construction</span>
                        Kako dolgo zdržijo vložki STEPEASE?
                    </summary>
                    <div>
                        <p>Vložki STEPEASE so narejeni, da trajajo! Ob pravilni negi vam bodo nudili udobje in oporo več kot 12 mesecev. Za daljšo življenjsko dobo jih redno ročno operite.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">sell</span>
                        Popust za različne velikosti
                    </summary>
                    <div>
                        <p>Naš popust lahko uporabite tudi za različne barve in velikosti!</p>
                        <p><strong>Postopek:</strong></p>
                        <ul>
                            <li>Dodajte eno velikost v košarico.</li>
                            <li>Dodajte še drugo velikost v košarico.</li>
                        </ul>
                        <p>Popust za 2, 3 ali 5 parov se bo samodejno obračunal pri skupni ceni.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">package_2</span>
                        Dostava in pošiljanje
                    </summary>
                    <div>
                        <p>Uživajte v sledenju pošiljke z zavarovano dostavo v 2–3 delovnih dneh. Za vaše udobje bo priložena številka za sledenje.</p>
                    </div>
                </details>

                <details class="acrd__item">
                    <summary>
                        <span class="acrd__heading-icon material-symbols-outlined filled">paid</span>
                        Politika vračil in povračil
                    </summary>
                    <div>
                        <p>Prepričani smo, da vam bo udobje vložkov STEPEASE všeč. Zato ponujamo 90‑dnevno garancijo vračila denarja brez tveganja. Če ne boste popolnoma zadovoljni, nam preprosto pišite in uredili bomo vračilo.</p>
                        <p>Za vračila nam pišite na <a href="mailto:info@stepease.eu">info@stepease.eu</a></p>
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Timer Section -->
<section class="timer-section section">
    <div class="container">
        <h2 class="timer-section__title">EKSKLUZIVNA RAZPRODAJA – ZADNJA PRILOŽNOST!</h2>
        <div class="timer">
            <div class="timer__block">
                <span class="timer__number" id="timerHours">00</span>
                <span class="timer__label">Ure</span>
            </div>
            <div class="timer__block">
                <span class="timer__number" id="timerMinutes">00</span>
                <span class="timer__label">Minute</span>
            </div>
            <div class="timer__block">
                <span class="timer__number" id="timerSeconds">00</span>
                <span class="timer__label">Sekunde</span>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews-section">
    <div class="container">
        <h2 class="reviews-section__title">Poglejte, kako drugi obužujejo svoje vložke STEPEASE</h2>
        <p class="reviews-section__subtitle">Resnične ocene resničnih uporabnikov</p>
        <div class="reviews-grid">
            <div class="review-card">
                <div class="review-card__stars">★★★★★</div>
                <div class="review-card__title">Gradbeni delavec</div>
                <p class="review-card__text">Svoje dni preživim na betonskih tleh v delovnih čevljih s kovinsko kapico. STEPEASE odlično blažijo udarce in nudijo podporo, kar zmanjšuje obremenitev stopal in sklepov. Presenečen sem, koliko so mi pomagali – o njih sem povedal vsem sodelavcem.</p>
                <div class="review-card__author">Nino <span class="review-card__badge">✓ Preverjen nakup</span></div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">★★★★★</div>
                <div class="review-card__title">Medicinska sestra</div>
                <p class="review-card__text">Kot medicinska sestra sem ves dan na nogah. Ko sem jih prvič vstavila, sem takoj začutila razliko. Podpora loka je odlična in prinaša prepotrebno olajšanje. Mehka blazina popolno ublaži stalne pritiske na stopala.</p>
                <div class="review-card__author">Lidija <span class="review-card__badge">✓ Preverjen nakup</span></div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">★★★★★</div>
                <div class="review-card__title">Zaposlen v gostinstvu</div>
                <p class="review-card__text">Vau, ti vložki so presegli vsa moja pričakovanja! Po dveh dneh nošenja med 12-urnimi izmenami sem ugotovil, da so resnično izjemni. So izredno udobni, nudijo oporo ves dan – naročil sem še dva para!</p>
                <div class="review-card__author">Erik <span class="review-card__badge">✓ Preverjen nakup</span></div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">★★★★★</div>
                <div class="review-card__title">Aktiven tekač</div>
                <p class="review-card__text">Sem predan tekač in preizkusil sem že veliko vložkov. Odkar uporabljam STEPEASE, opažam boljšo zmogljivost in hitrejše okrevanje. Toplo priporočam vsem tekačem, ki želijo izboljšati rezultate in zaščititi svoja stopala.</p>
                <div class="review-card__author">Nace <span class="review-card__badge">✓ Preverjen nakup</span></div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">★★★★★</div>
                <div class="review-card__title">Lastnica psa</div>
                <p class="review-card__text">Moji vsakodnevni sprehodi s psom so zdaj povsem drugačni. Prej sem imela boleča stopala in utrujene noge, zdaj pa brez težav sledim svojemu kosmatincu. STEPEASE nudijo odlično oporo, udobje in izboljšajo držo.</p>
                <div class="review-card__author">Sanja <span class="review-card__badge">✓ Preverjen nakup</span></div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Quotes -->
<section class="section" style="text-align: center;">
    <div class="container">
        <blockquote style="font-size: var(--step-2); font-style: italic; max-width: 40rem; margin: 0 auto;">
            "Dolga leta sem se spopadal s plantarno fascijo, a STEPEASE so vse spremenili. Podpora loku je neverjetna in bolečina je končno izginila!"
        </blockquote>
        <blockquote style="font-size: var(--step-2); font-style: italic; max-width: 40rem; margin: 2rem auto 0;">
            "V službi ves dan stojim in ti vložki so mi rešili noge. Ob koncu dneva me stopala ne bolijo več." <br><strong>– Sofija</strong>
        </blockquote>
        <blockquote style="font-size: var(--step-2); font-style: italic; max-width: 40rem; margin: 2rem auto 0;">
            "Preizkusil sem nešteto vložkov, a nobeni se ne morejo primerjati s STEPEASE. Razlika v udobju in počutju je res opazna." <br><strong>– Ivan</strong>
        </blockquote>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section" style="background: var(--bg-clr-two);">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Prihodnost je brez bolečin v stopalih</h2>
        <div class="stats-grid">
            <div>
                <div class="stat__number">95%</div>
                <p class="stat__text">Manj bolečin v stopalih: opora loka in blaženje občutno zmanjšata bolečine v stopalih.</p>
            </div>
            <div>
                <div class="stat__number">94%</div>
                <p class="stat__text">Večje udobje: udobje pri vsakem koraku, manj utrujenosti in nelagodja.</p>
            </div>
            <div>
                <div class="stat__number">90%</div>
                <p class="stat__text">Manjše tveganje za poškodbe: blaženje in opora pomagata zmanjšati možnost poškodb stopal.</p>
            </div>
        </div>
        <p style="text-align: center; font-size: var(--step--1); color: #888; margin-top: 1rem;">* Rezultati temeljijo na kliničnih in potrošniških raziskavah.</p>
    </div>
</section>

<!-- Comparison Table -->
<section class="comparison-section">
    <div class="container">
        <h2 style="text-align: center;">Kaj dela STEPEASE tako posebne?</h2>
        <p style="text-align: center; margin-top: 0.5rem;">Naša predanost je vašemu udobju in zadovoljstvu.</p>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th></th>
                    <th style="color: var(--clr-one);">STEPEASE</th>
                    <th>Drugi</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Blaženje</td><td class="check-yes">✔</td><td class="check-yes">✔</td></tr>
                <tr><td>Zračno</td><td class="check-yes">✔</td><td class="check-no">✘</td></tr>
                <tr><td>Takojšnje olajšanje</td><td class="check-yes">✔</td><td class="check-no">✘</td></tr>
                <tr><td>Podpora loka stopala</td><td class="check-yes">✔</td><td class="check-no">✘</td></tr>
                <tr><td>Absorpcija udarcev</td><td class="check-yes">✔</td><td class="check-no">✘</td></tr>
                <tr><td>Odprava neprijetnega vonja</td><td class="check-yes">✔</td><td class="check-no">✘</td></tr>
                <tr><td>Drago</td><td class="check-no">✘</td><td class="check-yes">✔</td></tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Expert Section -->
<section class="expert-section">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Odkrijte, zakaj strokovnjaki priporočajo STEPEASE</h2>
        <div style="max-width: 50rem; margin: 0 auto; background: #fff; padding: 2rem; border-radius: var(--radius-big); box-shadow: var(--shadow);">
            <h3 style="color: var(--clr-one);">Ciljno olajšanje</h3>
            <p>Kot podolog z dolgoletnimi izkušnjami pri zdravljenju težav, kot sta plosko stopalo in plantarni fasciitis, priporočam ortopedske vložke z masažnimi točkami STEPEASE. Njihova edinstvena zasnova nudi ciljno podporo stopalnim lokom, enakomerno porazdeli pritisk in zmanjša obremenitev plantarne fascije. Ob redni uporabi pacienti opazijo občutno izboljšanje simptomov.</p>
            <p><strong>Dr. Tomaž Novak – Podiater</strong></p>
        </div>
    </div>
</section>

<!-- CTA Bottom -->
<section class="cta-bottom">
    <div class="container">
        <h2 class="cta-bottom__title">Poskrbite za svoja stopala še danes!</h2>
        <p class="cta-bottom__text">Ne glede na to, ali ste zaposlen strokovnjak ali športnik, ki premika svoje meje – ortopedski vložki z masažnimi točkami STEPEASE vam zagotavljajo vrhunsko oporo in olajšanje.</p>
        <a href="#ortostepCart" class="btn" style="font-size: var(--step-2); text-transform: uppercase;">NAROČI ZDAJ</a>
    </div>
</section>

<?php do_action('woocommerce_after_single_product'); ?>
