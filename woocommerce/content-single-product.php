<?php
/**
 * Pixel-perfect product page - verbatim copy of original HTML
 * Only addition: hidden WooCommerce add-to-cart form
 */
get_header();
global $product;
$pid = (is_object($product) && method_exists($product, 'get_id')) ? $product->get_id() : 0;
?>
<!-- WooCommerce hidden add-to-cart form -->
<form id="wc-add-to-cart-form" method="post" action="<?php echo esc_url($product ? $product->get_permalink() : ''); ?>" style="display:none !important;">
    <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
    <input type="hidden" name="variation_id" id="wc-variation-id" value="">
    <input type="hidden" name="quantity" id="wc-quantity" value="1">
    <button type="submit" name="add-to-cart" value="<?php echo $pid; ?>">Add</button>
</form>


	<main class="main">

		<section class="section sct-hero">
			<div class="sct-hero__content container">
				<div class="sct-hero__content-row --sticky">
					<div class="sct-hero__gallery">

						<div class="gallery-container">
							<!-- Swiper -->
							<div class="swiper gallery-slider">
								<div class="swiper-wrapper">
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/84d4e066ce333_stepease_PP-EN_-_si-2.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/1b704871b6d6_stepease_PP-EN_-_si-5.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/0db2e820e6db5_stepease_PP-EN_-_si.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/04260de1979ae_stepease_PP-EN_-_si-1.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/cc8b1fcd4471_stepease_PP-EN_-_si-7.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/d82503b0fef5a_stepease_PP-EN_-_si-6.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/f3f10485dce06_stepease_PP-EN_-_si-3.jpg"></div>
									<div class="swiper-slide gallery-slider__item"><img src="https://images.hs-plus.com/assets/shared-images/2f514ac962b58_stepease_PP-EN_-_si-4.jpg"></div>
								</div>
								<!-- <div class="swiper-nav-buttons">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div> -->
							</div>
							<!-- Thumbs Swiper -->
							<div class="swiper gallery-thumbs">
								<div class="swiper-wrapper">
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/84d4e066ce333_stepease_PP-EN_-_si-2.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/1b704871b6d6_stepease_PP-EN_-_si-5.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/0db2e820e6db5_stepease_PP-EN_-_si.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/04260de1979ae_stepease_PP-EN_-_si-1.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/cc8b1fcd4471_stepease_PP-EN_-_si-7.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/d82503b0fef5a_stepease_PP-EN_-_si-6.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/f3f10485dce06_stepease_PP-EN_-_si-3.jpg"></div>
									<div class="swiper-slide gallery-thumbs__item"><img src="https://images.hs-plus.com/assets/shared-images/2f514ac962b58_stepease_PP-EN_-_si-4.jpg"></div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="sct-hero__content-row">
					<div class="product-rating">
						<img class="product-rating__img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/196c785d39169_stars-5.svg" alt="5 stars">
						<span class="product-rating__txt">Odli&#x10D;no 4,8&#xA0;|&#xA0;1169&#xA0;ocen</span>
					</div>
					<h1 class="sct-hero__title">STEPEASE&#xA0;|&#xA0;Masa&#x17E;ni vlo&#x17E;ki</h1>
					<div class="sct-hero__price">
						
     <div class="dynamic-cart-reduced-price-container">
      <span id="dynamic_cart_reduced_price_amount" class="dynamic-cart-reduced-price">
        18.99
      </span>

      
    </div>
  
						
      <div class="dynamic-cart-original-price-container"> 
        <span id="dynamic_cart_original_price_amount" class="dynamic-cart-original-price">36.95</span>
        <span id="dynamic_cart_original_price_currency_symbol" class="dynamic-cart-original-price-currency-symbol">&#x20AC;</span>
      
        
      </div>
      
						<!-- <div class="sct-hero__rp1t">[ rp1t ]</div> -->
						<!-- <div class="sct-hero__op1t">[ op1t ]</div> -->
						<style>
							[data-tpl="stps"] .sct-hero__rp1t {
								color: #ff5b00;
								font-size: 1.5rem;
							}
							[data-tpl="stps"] .sct-hero__op1t {
								display: flex;
								color: #000;
								text-wrap: nowrap;
								text-decoration: line-through;
								font-size: 1.25rem;
							}
						</style>
						<span class="sct-hero__price-discount">
							<svg aria-hidden="true" viewBox="0 0 12 12"><path fill="currentColor" fill-rule="evenodd" d="M7 0h3a2 2 0 0 1 2 2v3a1 1 0 0 1-.3.7l-6 6a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 0-1.4l6-6A1 1 0 0 1 7 0m2 2a1 1 0 1 0 2 0 1 1 0 0 0-2 0" clip-rule="evenodd"/></svg>
							
      <div class="dynamic-cart-discount-percent-container">
        <span id="dynamic_cart_discount_percentage_amount">49</span>
        <span id="dynamic_cart_discount_percentage_symbol">%</span>
      </div>
    
						</span>
						
    <script>
    var productSettings = {"estimate_delivery_date":"11.02.2026","retailPrice":"","reviewsTags":[],"productBrands":[],"woocommerceId":980183,"numberOfPiecesInSet":1};
    var countrySettings = {"countryCode":"SI","holidays":["1.1.","2.1.","8.2.","5.4.","6.4.","27.4.","1.5.","2.5.","24.5.","25.6.","15.8.","31.10.","1.11.","25.12.","26.12."],"currencySymbol":"€"};
    var brandSettings = {"name":"Stepease"};
    var variationsArr = [{"ids":["60bf53402b27ec52a2a830c6","689c82ce601c20083023a417"],"names":"Orange 35/36","sku":"3831127616552","hide":false,"variationId":"980214","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82ce601c20083023a417"],"names":"Black 35/36","sku":"3831127616636","hide":false,"variationId":"980199","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82ce601c20083023a417"],"names":"Grey 35/36","sku":"3831127616594","hide":false,"variationId":"980212","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6481ca3c957fc4078ab8b886"],"names":"Orange 37/38","sku":"3831127616559","hide":false,"variationId":"980210","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6481ca3c957fc4078ab8b886"],"names":"Black 37/38","sku":"3831127616643","hide":false,"variationId":"980213","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6481ca3c957fc4078ab8b886"],"names":"Grey 37/38","sku":"3831127616601","hide":false,"variationId":"980204","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6481ca1f957fc4078ab8b883"],"names":"Orange 39/40","sku":"3831127616566","hide":false,"variationId":"980216","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6481ca1f957fc4078ab8b883"],"names":"Black 39/40","sku":"3831127616650","hide":false,"variationId":"980219","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6481ca1f957fc4078ab8b883"],"names":"Grey 39/40","sku":"3831127616608","hide":false,"variationId":"980185","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82d3601c20083023a418"],"names":"Orange 41/42","sku":"3831127616573","hide":false,"variationId":"980217","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82d3601c20083023a418"],"names":"Black 41/42","sku":"3831127616657","hide":false,"variationId":"980187","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82d3601c20083023a418"],"names":"Grey 41/42","sku":"3831127616615","hide":false,"variationId":"980189","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82d9601c20083023a419"],"names":"Orange 43/44","sku":"3831127616580","hide":false,"variationId":"980193","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82d9601c20083023a419"],"names":"Black 43/44","sku":"3831127616664","hide":false,"variationId":"980211","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82d9601c20083023a419"],"names":"Grey 43/44","sku":"3831127616622","hide":false,"variationId":"980208","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82dd601c20083023a41a"],"names":"Orange 45/46","sku":"3831127616587","hide":false,"variationId":"980218","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82dd601c20083023a41a"],"names":"Black 45/46","sku":"3831127616671","hide":false,"variationId":"980192","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82dd601c20083023a41a"],"names":"Grey 45/46","sku":"3831127616629","hide":false,"variationId":"980215","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6941633d40e5fe5badc2a14b"],"names":"Orange 47/48","sku":"3831127626743","hide":false,"variationId":"982171","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6941633d40e5fe5badc2a14b"],"names":"Black 47/48","sku":"3831127626771","hide":false,"variationId":"982175","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6941633d40e5fe5badc2a14b"],"names":"Grey 47/48","sku":"3831127626757","hide":false,"variationId":"982176","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6941634f7de15237bd950d24"],"names":"Orange 49-50","sku":"3831127626750","hide":false,"variationId":"982174","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6941634f7de15237bd950d24"],"names":"Black 49-50","sku":"3831127626778","hide":false,"variationId":"982168","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6941634f7de15237bd950d24"],"names":"Grey 49-50","sku":"3831127626764","hide":false,"variationId":"982173","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0}];
    var propertiesArr = [{"name":"Barva","code":"Color","type":"color","id":"5ed63a5973bd244d330178b7","options":[{"name":"Oranžna","code":"Orange","id":"60bf53402b27ec52a2a830c6","selected":true,"selectedPT":true,"value":"#e03e0d","urlLink":null},{"name":"Črna ","code":"Black","id":"5ed63c0b73bd244d330178b8","selected":false,"value":"#000000","urlLink":null},{"name":"Siva","code":"Grey","id":"644a43c195e8ca06d2c61eb0","selected":false,"value":"#a9a9a9","urlLink":null}],"showPriceForVariation":true},{"name":"Velikost","code":"Size","type":"basic","id":"5ed4f68873bd244d33016317","options":[{"name":"35/36","code":"35/36","id":"689c82ce601c20083023a417","selected":false,"selectedPT":false,"urlLink":null},{"name":"37/38","code":"37/38","id":"6481ca3c957fc4078ab8b886","selected":false,"selectedPT":false,"urlLink":null},{"name":"39/40","code":"39/40","id":"6481ca1f957fc4078ab8b883","selected":false,"selectedPT":false,"urlLink":null},{"name":"41/42","code":"41/42","id":"689c82d3601c20083023a418","selected":false,"selectedPT":false,"urlLink":null},{"name":"43/44","code":"43/44","id":"689c82d9601c20083023a419","selected":true,"selectedPT":true,"urlLink":null},{"name":"45/46","code":"45/46","id":"689c82dd601c20083023a41a","selected":false,"selectedPT":false,"urlLink":null},{"name":"47-48","code":"47/48","id":"6941633d40e5fe5badc2a14b","selected":false,"selectedPT":false,"urlLink":null},{"name":"49-50","code":"49-50","id":"6941634f7de15237bd950d24","selected":false,"selectedPT":false,"urlLink":null}],"showPriceForVariation":false}];
    var relatedArr = [{"_id":"693040aa8f426861019e9c10","name":"STEPHEEL (UP)","sku":"3831127625931","longNames":[{"countryCode":"AL","longName":""},{"countryCode":"AT","longName":"2x Fersenkissen zur Linderung von Fersenschmerzen"},{"countryCode":"BA","longName":""},{"countryCode":"BE","longName":""},{"countryCode":"BG","longName":"2x подложка за пета за облекчаване на болката в петата"},{"countryCode":"CHD","longName":""},{"countryCode":"CHF","longName":""},{"countryCode":"CHI","longName":""},{"countryCode":"CY","longName":""},{"countryCode":"CZ","longName":"2x polštářek na patu pro snížení bolesti paty"},{"countryCode":"DE","longName":"2x Fersenkissen zur Linderung von Fersenschmerzen"},{"countryCode":"DK","longName":""},{"countryCode":"EE","longName":"2x kontsapadi kannavalu vähendamiseks"},{"countryCode":"ES","longName":"2x almohadilla para el talón que reduce el dolor"},{"countryCode":"FI","longName":""},{"countryCode":"FR","longName":"Coussin de talon pour réduire la douleur au talon"},{"countryCode":"GB","longName":""},{"countryCode":"GR","longName":"2x μαξιλαράκι φτέρνας για μείωση του πόνου στη φτέρνα"},{"countryCode":"HR","longName":"2x umetak za petu za smanjenje boli u peti"},{"countryCode":"HU","longName":"2x sarokpárna a sarokfájdalom csökkentésére"},{"countryCode":"IT","longName":"2x cuscinetto per ridurre il dolore al tallone"},{"countryCode":"LT","longName":"2x kulno pagalvėlė, mažinanti kulno skausmą"},{"countryCode":"LV","longName":"2x papēža spilventiņš sāpju mazināšanai papēža zonā"},{"countryCode":"MD","longName":""},{"countryCode":"MK","longName":"2x перница за пета за намалување на болката во петата"},{"countryCode":"NL","longName":"2x hielkussen voor minder hielpijn"},{"countryCode":"PL","longName":"2x poduszka na piętę zmniejszająca ból"},{"countryCode":"PT","longName":"2x almofada de calcanhar para reduzir as dores no calcanhar"},{"countryCode":"RO","longName":"2x talonetă pentru călcâi – reduce durerea la călcâi"},{"countryCode":"RS","longName":"2x uložak za petu za smanjenje bola u peti"},{"countryCode":"SE","longName":""},{"countryCode":"SI","longName":"2x blazinica za peto za zmanjšanje bolečin v peti"},{"countryCode":"SK","longName":"2x vankúšik na pätu na zmiernenie bolesti päty"},{"countryCode":"UA","longName":""},{"countryCode":"US","longName":""},{"countryCode":"XK","longName":""}],"productImageUrls":[{"countryCode":"AL","productImageUrl":""},{"countryCode":"AT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"BA","productImageUrl":""},{"countryCode":"BE","productImageUrl":""},{"countryCode":"BG","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"CHD","productImageUrl":""},{"countryCode":"CHF","productImageUrl":""},{"countryCode":"CHI","productImageUrl":""},{"countryCode":"CY","productImageUrl":""},{"countryCode":"CZ","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"DE","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"DK","productImageUrl":""},{"countryCode":"EE","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"ES","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"FI","productImageUrl":""},{"countryCode":"FR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"GB","productImageUrl":""},{"countryCode":"GR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"HR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"HU","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"IT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"LT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"LV","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"MD","productImageUrl":""},{"countryCode":"MK","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"NL","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"PL","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"PT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"RO","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"RS","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"SE","productImageUrl":""},{"countryCode":"SI","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"SK","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"UA","productImageUrl":""},{"countryCode":"US","productImageUrl":""},{"countryCode":"XK","productImageUrl":""}],"shortNames":[{"countryCode":"AL","shortName":""},{"countryCode":"AT","shortName":""},{"countryCode":"BA","shortName":""},{"countryCode":"BE","shortName":""},{"countryCode":"BG","shortName":""},{"countryCode":"CHD","shortName":""},{"countryCode":"CHF","shortName":""},{"countryCode":"CHI","shortName":""},{"countryCode":"CY","shortName":""},{"countryCode":"CZ","shortName":""},{"countryCode":"DE","shortName":""},{"countryCode":"DK","shortName":""},{"countryCode":"EE","shortName":""},{"countryCode":"ES","shortName":""},{"countryCode":"FI","shortName":""},{"countryCode":"FR","shortName":""},{"countryCode":"GB","shortName":""},{"countryCode":"GR","shortName":""},{"countryCode":"HR","shortName":""},{"countryCode":"HU","shortName":""},{"countryCode":"IT","shortName":""},{"countryCode":"LT","shortName":""},{"countryCode":"LV","shortName":""},{"countryCode":"MD","shortName":""},{"countryCode":"MK","shortName":""},{"countryCode":"NL","shortName":""},{"countryCode":"PL","shortName":""},{"countryCode":"PT","shortName":""},{"countryCode":"RO","shortName":""},{"countryCode":"RS","shortName":""},{"countryCode":"SE","shortName":""},{"countryCode":"SI","shortName":""},{"countryCode":"SK","shortName":""},{"countryCode":"UA","shortName":""},{"countryCode":"US","shortName":""},{"countryCode":"XK","shortName":""}],"originalPrices":[{"countryCode":"IT","currencySymbol":"€","price":11.95},{"countryCode":"LT","currencySymbol":"€","price":11.95},{"countryCode":"PT","currencySymbol":"€","price":11.95},{"countryCode":"SI","currencySymbol":"€","price":11.95},{"countryCode":"LV","currencySymbol":"€","price":11.95},{"countryCode":"RS","currencySymbol":"rsd","price":1399},{"countryCode":"RO","currencySymbol":"lei","price":60.99},{"countryCode":"SK","currencySymbol":"€","price":11.95},{"countryCode":"PL","currencySymbol":"zł","price":51},{"countryCode":"MK","currencySymbol":"ден","price":739},{"countryCode":"NL","currencySymbol":"€","price":11.95},{"countryCode":"AT","currencySymbol":"€","price":11.95},{"countryCode":"BG","currencySymbol":"лв.","price":11.99},{"countryCode":"CZ","currencySymbol":"Kč","price":289},{"countryCode":"DE","currencySymbol":"€","price":11.95},{"countryCode":"EE","currencySymbol":"€","price":11.95},{"countryCode":"ES","currencySymbol":"€","price":11.95},{"countryCode":"FR","currencySymbol":"€","price":11.95},{"countryCode":"GR","currencySymbol":"€","price":11.95},{"countryCode":"HR","currencySymbol":"€","price":11.95},{"countryCode":"HU","currencySymbol":"Ft","price":4590}],"reducedPrices":[{"countryCode":"IT","currencySymbol":"€","price1":3.99},{"countryCode":"LT","currencySymbol":"€","price1":3.99},{"countryCode":"PT","currencySymbol":"€","price1":3.99},{"countryCode":"SI","currencySymbol":"€","price1":3.99},{"countryCode":"LV","currencySymbol":"€","price1":2.99},{"countryCode":"RS","currencySymbol":"rsd","price1":349},{"countryCode":"RO","currencySymbol":"lei","price1":14.99},{"countryCode":"SK","currencySymbol":"€","price1":3.99},{"countryCode":"PL","currencySymbol":"zł","price1":17},{"countryCode":"MK","currencySymbol":"ден","price1":189},{"countryCode":"NL","currencySymbol":"€","price1":3.99},{"countryCode":"AT","currencySymbol":"€","price1":3.99},{"countryCode":"BG","currencySymbol":"лв.","price1":2.99},{"countryCode":"CZ","currencySymbol":"Kč","price1":99},{"countryCode":"DE","currencySymbol":"€","price1":3.99},{"countryCode":"EE","currencySymbol":"€","price1":3.99},{"countryCode":"ES","currencySymbol":"€","price1":3.99},{"countryCode":"FR","currencySymbol":"€","price1":2.99},{"countryCode":"GR","currencySymbol":"€","price1":3.99},{"countryCode":"HR","currencySymbol":"€","price1":4.99},{"countryCode":"HU","currencySymbol":"Ft","price1":1099}],"retailPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"spMinimumPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"forcedMinimumPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"dateCreated":"2025-12-03T13:52:42.744Z","tags":["Related upsell"],"relatedProductDescriptions":[{"countryCode":"AL","relatedProductDescription":""},{"countryCode":"AT","relatedProductDescription":"Füllt einen zu großen Schuh aus, ohne zu reiben oder Blasen zu verursachen.\n"},{"countryCode":"BA","relatedProductDescription":""},{"countryCode":"BE","relatedProductDescription":""},{"countryCode":"BG","relatedProductDescription":"Попълва по-голяма обувка, без триене или причиняване на пришки.\n"},{"countryCode":"CHD","relatedProductDescription":""},{"countryCode":"CHF","relatedProductDescription":""},{"countryCode":"CHI","relatedProductDescription":""},{"countryCode":"CY","relatedProductDescription":""},{"countryCode":"CZ","relatedProductDescription":"Vyplní botu, která je příliš velká, aniž by dřela nebo způsobovala puchýře.\n"},{"countryCode":"DE","relatedProductDescription":"Füllt einen zu großen Schuh aus, ohne zu reiben oder Blasen zu verursachen.\n"},{"countryCode":"DK","relatedProductDescription":""},{"countryCode":"EE","relatedProductDescription":"Täidab liiga suure jalanõu ilma hõõrumise ja villide tekketa.\n"},{"countryCode":"ES","relatedProductDescription":"Ajusta el zapato que te queda demasiado grande, sin causar rozaduras ni ampollas.\n"},{"countryCode":"FI","relatedProductDescription":""},{"countryCode":"FR","relatedProductDescription":"Comble une chaussure trop grande, sans frottement ni ampoules.\n"},{"countryCode":"GB","relatedProductDescription":""},{"countryCode":"GR","relatedProductDescription":"Γεμίζει ένα παπούτσι που είναι πολύ μεγάλο, χωρίς να τρίβει ή να προκαλεί φουσκάλες.\n"},{"countryCode":"HR","relatedProductDescription":"Ispunjava cipelu koja je prevelika, bez trljanja ili stvaranja žuljeva.\n"},{"countryCode":"HU","relatedProductDescription":"Kitölti a túl nagy cipőt anélkül, hogy dörzsölne vagy vízhólyagot okozna.\n"},{"countryCode":"IT","relatedProductDescription":"Riempie una scarpa troppo grande, senza sfregare né causare vesciche.\n"},{"countryCode":"LT","relatedProductDescription":"Užpildo per didelį batą, netrinant ir nesukeliant pūslių.\n"},{"countryCode":"LV","relatedProductDescription":"Aizpilda pārāk lielu apavu, neradot berzi vai tulznas.\n"},{"countryCode":"MD","relatedProductDescription":""},{"countryCode":"MK","relatedProductDescription":"Го пополнува чевелот што е преголем, без триење или предизвикување плускавци.\n"},{"countryCode":"NL","relatedProductDescription":"Vult een schoen die te groot is, zonder te schuren of blaren te veroorzaken.\n"},{"countryCode":"PL","relatedProductDescription":"Wypełnia zbyt luźny but dla lepszego dopasowania bez otarć i pęcherzy.\n"},{"countryCode":"PT","relatedProductDescription":"Basta colocar no seu calçado, sem roçar nem causar bolhas.\n"},{"countryCode":"RO","relatedProductDescription":"Completează pantofii prea largi, fără a provoca frecare sau bătături.\n"},{"countryCode":"RS","relatedProductDescription":"Popunjava cipelu koja je prevelika, bez trenja ili stvaranja žuljeva.\n"},{"countryCode":"SE","relatedProductDescription":""},{"countryCode":"SI","relatedProductDescription":"Zapolni prevelik čevelj, ne da bi drgnila ali povzročala žulje.\n"},{"countryCode":"SK","relatedProductDescription":"Vyplní topánku, ktorá je príliš veľká, bez trenia alebo spôsobovania pľuzgierov.\n"},{"countryCode":"UA","relatedProductDescription":""},{"countryCode":"US","relatedProductDescription":""},{"countryCode":"XK","relatedProductDescription":""}],"isDeleted":false,"brandId":"68f0942607a0f5b28273c985","isRelatedProduct":true,"woocommerceCountrySkus":[{"countryCode":"AL","woocommerceCountrySku":""},{"countryCode":"AT","woocommerceCountrySku":""},{"countryCode":"BA","woocommerceCountrySku":""},{"countryCode":"BE","woocommerceCountrySku":""},{"countryCode":"BG","woocommerceCountrySku":""},{"countryCode":"CHD","woocommerceCountrySku":""},{"countryCode":"CHF","woocommerceCountrySku":""},{"countryCode":"CHI","woocommerceCountrySku":""},{"countryCode":"CY","woocommerceCountrySku":""},{"countryCode":"CZ","woocommerceCountrySku":""},{"countryCode":"DE","woocommerceCountrySku":""},{"countryCode":"DK","woocommerceCountrySku":""},{"countryCode":"EE","woocommerceCountrySku":""},{"countryCode":"ES","woocommerceCountrySku":""},{"countryCode":"FI","woocommerceCountrySku":""},{"countryCode":"FR","woocommerceCountrySku":""},{"countryCode":"GB","woocommerceCountrySku":""},{"countryCode":"GR","woocommerceCountrySku":""},{"countryCode":"HR","woocommerceCountrySku":""},{"countryCode":"HU","woocommerceCountrySku":""},{"countryCode":"IT","woocommerceCountrySku":""},{"countryCode":"LT","woocommerceCountrySku":""},{"countryCode":"LV","woocommerceCountrySku":""},{"countryCode":"MD","woocommerceCountrySku":""},{"countryCode":"MK","woocommerceCountrySku":""},{"countryCode":"NL","woocommerceCountrySku":""},{"countryCode":"PL","woocommerceCountrySku":""},{"countryCode":"PT","woocommerceCountrySku":""},{"countryCode":"RO","woocommerceCountrySku":""},{"countryCode":"RS","woocommerceCountrySku":""},{"countryCode":"SE","woocommerceCountrySku":""},{"countryCode":"SI","woocommerceCountrySku":""},{"countryCode":"SK","woocommerceCountrySku":""},{"countryCode":"UA","woocommerceCountrySku":""},{"countryCode":"US","woocommerceCountrySku":""},{"countryCode":"XK","woocommerceCountrySku":""}],"cart":{"btnQty1":"<strong>1 + 1 GRATIS</strong>","btnQty2":"<strong>2 + 2 GRATIS</strong>","btnQty3":"<strong>3 + 3 GRATIS</strong>"},"image":"67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg","productBrands":[],"additionalVariations":[{"countryCode":"AL","countryId":"67ef6b8b5ab6730d795d527d","realVariations":[],"variations":[]},{"countryCode":"AT","countryId":"5da8661a4ca2c106ccdafa80","realVariations":[],"variations":[]},{"countryCode":"BA","countryId":"681b05544851b847384f0c8d","realVariations":[],"variations":[]},{"countryCode":"BE","countryId":"625423170a34cb2d21d80eb2","realVariations":[],"variations":[]},{"countryCode":"BG","countryId":"5e1475d7704e733d3ec7fae4","realVariations":[],"variations":[]},{"countryCode":"CHD","countryId":"60db0f6d9d62d24c3230951f","realVariations":[],"variations":[]},{"countryCode":"CHF","countryId":"60db0f7e9d62d24c32309523","realVariations":[],"variations":[]},{"countryCode":"CHI","countryId":"60db0f769d62d24c32309521","realVariations":[],"variations":[]},{"countryCode":"CY","countryId":"679c895de23ca17aaed5d6aa","realVariations":[],"variations":[]},{"countryCode":"CZ","countryId":"5e1475f0704e73d3c0c7fae6","realVariations":[],"variations":[]},{"countryCode":"DE","countryId":"5dca6943ac9d992456b69f8e","realVariations":[],"variations":[]},{"countryCode":"DK","countryId":"69145a8105bee56fe6b56506","realVariations":[],"variations":[]},{"countryCode":"EE","countryId":"621e2b44dc6bc1a6d8290dc7","realVariations":[],"variations":[]},{"countryCode":"ES","countryId":"5e147598704e738ff3c7fae0","realVariations":[],"variations":[]},{"countryCode":"FI","countryId":"6286160ec8ee262958e17186","realVariations":[],"variations":[]},{"countryCode":"FR","countryId":"5f89955741605719d21d15a5","realVariations":[],"variations":[]},{"countryCode":"GB","countryId":"613873bd3536f31b20fe1d92","realVariations":[],"variations":[]},{"countryCode":"GR","countryId":"5ed7a071a74c373c0d4ce615","realVariations":[],"variations":[]},{"countryCode":"HR","countryId":"5e14761b704e7345c1c7faeb","realVariations":[],"variations":[]},{"countryCode":"HU","countryId":"5e147642704e73e928c7faed","realVariations":[],"variations":[]},{"countryCode":"IT","countryId":"5d9c86730336b70cbd1315ba","realVariations":[],"variations":[]},{"countryCode":"LT","countryId":"621e2ac9dc6bc1a6d8290dc5","realVariations":[],"variations":[]},{"countryCode":"LV","countryId":"621e2b1edc6bc1a6d8290dc6","realVariations":[],"variations":[]},{"countryCode":"MD","countryId":"63fdbcd990e73c4ade0bf7fc","realVariations":[],"variations":[]},{"countryCode":"MK","countryId":"679c8a0fd52c906b3010917d","realVariations":[],"variations":[]},{"countryCode":"NL","countryId":"5f3ba871ab5e2237240d8c07","realVariations":[],"variations":[]},{"countryCode":"PL","countryId":"5dca6952ac9d99150db69f92","realVariations":[],"variations":[]},{"countryCode":"PT","countryId":"5e1475a0704e736a90c7fae2","realVariations":[],"variations":[]},{"countryCode":"RO","countryId":"5dca694aac9d997e30b69f90","realVariations":[],"variations":[]},{"countryCode":"RS","countryId":"66cd8dccea7d462f3d38146a","realVariations":[],"variations":[]},{"countryCode":"SE","countryId":"6254232c0a34cb2d21d80eb4","realVariations":[],"variations":[]},{"countryCode":"SI","countryId":"5d9c85fc0336b742021314d6","realVariations":[],"variations":[]},{"countryCode":"SK","countryId":"5e14758c704e7328bac7fade","realVariations":[],"variations":[]},{"countryCode":"UA","countryId":"67ac55b9a0d8edda0bdedc21","realVariations":[],"variations":[]},{"countryCode":"US","countryId":"6231edeb9398e11abe08a9f9","realVariations":[],"variations":[]},{"countryCode":"XK","countryId":"67f8a6fc14c174d4567c5da1","realVariations":[],"variations":[]}],"bundleProducts":"","checkoutExtra":"","customBtnQtyText":false,"isBundle":false,"outOfStockPT":false,"outOfStockRO":false,"outOfStockSI":false,"productCogs":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":0.99},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":0.99},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":0.99},{"countryCode":"DE","value":0.99},{"countryCode":"DK","value":""},{"countryCode":"EE","value":0.99},{"countryCode":"ES","value":0.99},{"countryCode":"FI","value":""},{"countryCode":"FR","value":0.99},{"countryCode":"GB","value":""},{"countryCode":"GR","value":0.99},{"countryCode":"HR","value":0.99},{"countryCode":"HU","value":0.99},{"countryCode":"IT","value":0.99},{"countryCode":"LT","value":0.99},{"countryCode":"LV","value":0.99},{"countryCode":"MD","value":""},{"countryCode":"MK","value":0.99},{"countryCode":"NL","value":0.99},{"countryCode":"PL","value":0.99},{"countryCode":"PT","value":0.99},{"countryCode":"RO","value":0.99},{"countryCode":"RS","value":0.99},{"countryCode":"SE","value":""},{"countryCode":"SI","value":0.99},{"countryCode":"SK","value":0.99},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"relatedProducts":[],"reviewsTags":[],"useDropdownForVariations":false,"woocommerceProductIds":[{"countryCode":"AL","woocommerceProductId":""},{"countryCode":"AT","woocommerceProductId":117566},{"countryCode":"BA","woocommerceProductId":""},{"countryCode":"BE","woocommerceProductId":""},{"countryCode":"BG","woocommerceProductId":781382},{"countryCode":"CHD","woocommerceProductId":""},{"countryCode":"CHF","woocommerceProductId":""},{"countryCode":"CHI","woocommerceProductId":""},{"countryCode":"CY","woocommerceProductId":""},{"countryCode":"CZ","woocommerceProductId":2090968},{"countryCode":"DE","woocommerceProductId":117873},{"countryCode":"DK","woocommerceProductId":""},{"countryCode":"EE","woocommerceProductId":90739},{"countryCode":"ES","woocommerceProductId":69545},{"countryCode":"FI","woocommerceProductId":""},{"countryCode":"FR","woocommerceProductId":27034},{"countryCode":"GB","woocommerceProductId":""},{"countryCode":"GR","woocommerceProductId":969990},{"countryCode":"HR","woocommerceProductId":910939},{"countryCode":"HU","woocommerceProductId":2291123},{"countryCode":"IT","woocommerceProductId":1554570},{"countryCode":"LT","woocommerceProductId":180947},{"countryCode":"LV","woocommerceProductId":91154},{"countryCode":"MD","woocommerceProductId":""},{"countryCode":"MK","woocommerceProductId":232915},{"countryCode":"NL","woocommerceProductId":194567},{"countryCode":"PL","woocommerceProductId":2243283},{"countryCode":"PT","woocommerceProductId":740141},{"countryCode":"RO","woocommerceProductId":1118252},{"countryCode":"RS","woocommerceProductId":205252},{"countryCode":"SE","woocommerceProductId":""},{"countryCode":"SI","woocommerceProductId":981495},{"countryCode":"SK","woocommerceProductId":1647687},{"countryCode":"UA","woocommerceProductId":""},{"countryCode":"US","woocommerceProductId":""},{"countryCode":"XK","woocommerceProductId":""}],"acfs":[{"countryCode":"IT","number_of_pieces_in_a_set":""},{"countryCode":"LT","number_of_pieces_in_a_set":""},{"countryCode":"PT","number_of_pieces_in_a_set":""},{"countryCode":"SI","number_of_pieces_in_a_set":""},{"countryCode":"LV","number_of_pieces_in_a_set":""},{"countryCode":"RS","number_of_pieces_in_a_set":""},{"countryCode":"RO","number_of_pieces_in_a_set":""},{"countryCode":"SK","number_of_pieces_in_a_set":""},{"countryCode":"PL","number_of_pieces_in_a_set":""},{"countryCode":"MK","number_of_pieces_in_a_set":""},{"countryCode":"NL","number_of_pieces_in_a_set":""},{"countryCode":"AT","number_of_pieces_in_a_set":""},{"countryCode":"BG","number_of_pieces_in_a_set":""},{"countryCode":"CZ","number_of_pieces_in_a_set":""},{"countryCode":"DE","number_of_pieces_in_a_set":""},{"countryCode":"EE","number_of_pieces_in_a_set":""},{"countryCode":"ES","number_of_pieces_in_a_set":""},{"countryCode":"FR","number_of_pieces_in_a_set":""},{"countryCode":"GR","number_of_pieces_in_a_set":""},{"countryCode":"HR","number_of_pieces_in_a_set":""},{"countryCode":"HU","number_of_pieces_in_a_set":""}],"additionalVariationsPriceOffsets":[{"countryCode":"IT","countryId":"5d9c86730336b70cbd1315ba","value":null},{"countryCode":"LT","countryId":"621e2ac9dc6bc1a6d8290dc5","value":null},{"countryCode":"PT","countryId":"5e1475a0704e736a90c7fae2","value":null},{"countryCode":"SI","countryId":"5d9c85fc0336b742021314d6","value":null},{"countryCode":"LV","countryId":"621e2b1edc6bc1a6d8290dc6","value":null},{"countryCode":"RS","countryId":"66cd8dccea7d462f3d38146a","value":null},{"countryCode":"RO","countryId":"5dca694aac9d997e30b69f90","value":null},{"countryCode":"SK","countryId":"5e14758c704e7328bac7fade","value":null},{"countryCode":"PL","countryId":"5dca6952ac9d99150db69f92","value":null},{"countryCode":"MK","countryId":"679c8a0fd52c906b3010917d","value":null},{"countryCode":"NL","countryId":"5f3ba871ab5e2237240d8c07","value":null},{"countryCode":"AT","countryId":"5da8661a4ca2c106ccdafa80","value":null},{"countryCode":"BG","countryId":"5e1475d7704e733d3ec7fae4","value":null},{"countryCode":"CZ","countryId":"5e1475f0704e73d3c0c7fae6","value":null},{"countryCode":"DE","countryId":"5dca6943ac9d992456b69f8e","value":null},{"countryCode":"EE","countryId":"621e2b44dc6bc1a6d8290dc7","value":null},{"countryCode":"ES","countryId":"5e147598704e738ff3c7fae0","value":null},{"countryCode":"FR","countryId":"5f89955741605719d21d15a5","value":null},{"countryCode":"GR","countryId":"5ed7a071a74c373c0d4ce615","value":null},{"countryCode":"HR","countryId":"5e14761b704e7345c1c7faeb","value":null},{"countryCode":"HU","countryId":"5e147642704e73e928c7faed","value":null}],"discounts":[{"countryCode":"IT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"LT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"PT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"SI","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"LV","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"RS","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"RO","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"SK","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"PL","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"MK","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"NL","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"AT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"BG","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"CZ","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"DE","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"EE","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"ES","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"FR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"GR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"HR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"HU","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"}],"manualsLinks":[{"countryCode":"IT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"LT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"PT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"SI","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"LV","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"RS","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"RO","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"SK","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"PL","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"MK","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"NL","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"AT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"BG","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"CZ","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"DE","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"EE","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"ES","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"FR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"GR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"HR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"HU","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"}],"variations":[],"templates":[],"id":"693040aa8f426861019e9c10","deliveryDates":[{"countryId":"5d9c86730336b70cbd1315ba","countryCode":"IT","date":"05.01.2026"},{"countryId":"621e2ac9dc6bc1a6d8290dc5","countryCode":"LT","date":"05.01.2026"},{"countryId":"5d9c85fc0336b742021314d6","countryCode":"SI","date":"05.01.2026"},{"countryId":"621e2b1edc6bc1a6d8290dc6","countryCode":"LV","date":"05.01.2026"},{"countryId":"66cd8dccea7d462f3d38146a","countryCode":"RS","date":"05.01.2026"},{"countryId":"5dca694aac9d997e30b69f90","countryCode":"RO","date":"05.01.2026"},{"countryId":"5e14758c704e7328bac7fade","countryCode":"SK","date":"05.01.2026"},{"countryId":"5dca6952ac9d99150db69f92","countryCode":"PL","date":"05.01.2026"},{"countryId":"679c8a0fd52c906b3010917d","countryCode":"MK","date":"05.01.2026"},{"countryId":"5f3ba871ab5e2237240d8c07","countryCode":"NL","date":"05.01.2026"},{"countryId":"5da8661a4ca2c106ccdafa80","countryCode":"AT","date":"05.01.2026"},{"countryId":"5e1475d7704e733d3ec7fae4","countryCode":"BG","date":"05.01.2026"},{"countryId":"5e1475f0704e73d3c0c7fae6","countryCode":"CZ","date":"05.01.2026"},{"countryId":"5dca6943ac9d992456b69f8e","countryCode":"DE","date":"05.01.2026"},{"countryId":"621e2b44dc6bc1a6d8290dc7","countryCode":"EE","date":"05.01.2026"},{"countryId":"5f89955741605719d21d15a5","countryCode":"FR","date":"05.01.2026"},{"countryId":"5ed7a071a74c373c0d4ce615","countryCode":"GR","date":"05.01.2026"},{"countryId":"5e14761b704e7345c1c7faeb","countryCode":"HR","date":"05.01.2026"},{"countryId":"5e147642704e73e928c7faed","countryCode":"HU","date":"05.01.2026"}],"enableOriginalPriceOffset":false}];
    var globalPrices = {
        op1: '36.95',
        op2: '73.90',
        op3: '110.85',
        op4: '147.80',
        op5: '184.75',
        opx: '221.70',
        rp1: '18.99',
        rp2: '29.62',
        rp3: '41.59',
        rp4: '55.45',
        rp5: '49.37',
        rpx: '59.25',
    };
    var decimals = 2;
    var redPrice1 = 18.99;
    dynPriceSet = false;

    var purchaseTypePickers = [];
    var selectedPurchaseTypePicker = null;
    

    (function () {
        setTimeout(function() {
            applyDynamicPrice();
            modifyGlobalPrices(redPrice1);
            setSelectedVariations();
            toggleCartButtonStock();
            dyncamicCheckoutHandlePrice();
            if(typeof initPickerSelector === 'function'){
             initPickerSelector();   
            }
            if(typeof initSubscriptionSelector === 'function'){
             initSubscriptionSelector();   
            }
            markOutOfStock2();
            recalculatePrices();
            setLinkDynamicCart();
        }, 1200);
    })();

    function dyncamicCheckoutHandlePrice(){
      $('.dp-all').css('display', 'inline-block');
    }
    
    function getCookieDynCheckout(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
        }
        return "";
    }
    
    
    function initSetLink(){
            try{
                setLinkDynamicCart();
            }catch(err){
                throw err;
            } 
        }
    function setLink(){
        try{
            setLinkDynamicCart();
        }catch(err){
            throw err;
        } 
    }
    
    

    function dynamicCheckoutColorVariationClicked(propertyId, optionId, p, variationIndex){
      let property = propertiesArr.find(pr => pr.id === propertyId);
      let option = property.options.find(opt => opt.id === optionId);

      let selectedVariationValueLabel = document.getElementById("selected-color-variation-value");
      selectedVariationValueLabel.innerText = option.name;

      //remove borders on all variations
      for(let opt = 0; opt < propertiesArr[p].options.length; opt++){
        let optionElement = document.getElementById(propertiesArr[p].id + "-" + propertiesArr[p].options[opt].id + "-" + p);
        if(!!optionElement){
          optionElement.classList.remove('selected');
          optionElement.setAttribute("selected-option", "false");
        }
      }
      //add border to selected variation
      let selectedVariationButtonElement = document.getElementById(propertyId + "-" + optionId + "-" + p);
      selectedVariationButtonElement.classList.add('selected');
      selectedVariationButtonElement.setAttribute("selected-option", "true");
      
      toggleCartButtonStock();
      markOutOfStock2();
      recalculatePrices();
      setLinkDynamicCart();
    }//dynamicCheckoutColorVariationClicked
    
    
  async function recalculatePrices(){
    var originalPrice = 36.95
    var retail_price = 0;
    globalRetailPrice = 0;
    var forced_minimum_price = 0;
    globalMinimumPrice = 0;
    var sp_minimum_price = 0;
    globalSpMinimumPrice = 0;
    var countryMinimumPrice = 6.99;
    var productCogs = 6.99;
    var additionalVariationProductPrice = 0;
    var additionalVariationsPrices = [];
    var decimals = 2;
    var altDecimals = 2;
    var altCurrencySymbol = '€';
    var defaultReducedPrice = 18.99;
    price = setDefaultReducedPrice(price, defaultReducedPrice);
    var countryCurrencySymbol = '€';
    var showAltCurrencyPrice = false;
    var altCurrencyPriceRate = 1;
    var altCurrencyPriceSymbol = '€';
    var enableOriginalPriceOffset = false;

    var skus = getAllSkus();
    var pr2;

    if(country !== 'HR'){
        pr2 = getPr(skus);
    }else {
        //ignore cookie price on HR
        pr2 = '';
    }

    var pr2 = getPr(skus);
    altDynPr = false;
    if (pr2 === '') {
        pr2 = getCookieDynCheckout('sp') || getParam('sp');
        if(pr2 === 0){
            pr2 = getCookieDynCheckout('spe') || getParam('spe');
            spe = getCookieDynCheckout('spe') || getParam('spe');
            altDynPr = true;
            if(spe !== 0){
                altDynPr = true;
            }
        }
    }

    if(getCookieDynCheckout('sp') || getCookieDynCheckout('spe')) {
        pr2 = psp(pr2)
    }

    sp = pr2;
    spe = pr2;
    if(urlIncludesSubstrings(currentUrl, substringsToCheck) || urlIncludesSubstrings(currentUrl, substringsToCheckMailing) 
    || getCookieDynCheckout('utm_source') === 'mailing' || getCookieDynCheckout('utm_mp_source') === 'mailing'
    || getCookieDynCheckout('utm_source') === 'google' || getCookieDynCheckout('utm_mp_source') === 'google'){
        price = pr2;
    }   else {
        price = sp;
        }    

    if (country === 'HR' && altDynPr === false){
        if(urlIncludesSubstrings(currentUrl, substringsToCheck) || getCookieDynCheckout('utm_source') === 'google' || getCookieDynCheckout('utm_mp_source') === 'google' ) {
            price = price / 1;
        }

    }
    
    
    let selectedOptions = [];
    for(let pr = 0; pr < propertiesArr.length; pr++){
      let propertyId = propertiesArr[pr].id;
      let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
      if(selectedOptionElements.length > 0){
        selectedOptions.push(propertiesArr[pr].options.find(opt => opt.id === selectedOptionElements[0].value));
      } 
    }
    //find correct variation
    let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptions.map(sO => sO.id).sort().join(','));
    //PRICE LOGIC--------------------------------------------------------------------------------------------
    
    var cookieUtmSource = getCookieDynCheckout('utm_source')
    var cookieUtmMpSource = getCookieDynCheckout('utm_mp_source')
    var cookiefbclid= getCookieDynCheckout('fbclid')
    var cookieSaleCoupon = getCookieDynCheckout('coupon')

    var globalRetailConverted = globalRetailPrice;
    var globalMinimumConverted = globalMinimumPrice;
    
    var isUtmPresent = (
    urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=', 'fbclid=']) || 
    (cookieUtmMpSource && cookieUtmMpSource !== '') || 
    (cookieUtmSource && cookieUtmSource !== '') ||
    (cookiefbclid && cookiefbclid !== '')
    );
    var isGoogleSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=google', 'utm_source=google']) || cookieUtmMpSource === 'google' || cookieUtmSource === 'google';
    var isNativeHsSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=nativehs', 'utm_source=nativehs']) || cookieUtmMpSource === 'nativehs' || cookieUtmSource === 'nativehs';
    var isNewsLetterSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=newsletter', 'utm_source=newsletter']) || cookieUtmMpSource === 'newsletter' || cookieUtmSource === 'newsletter';
    var isMailingSource = currentUrl.includes('utm_source=mailing', 'utm_mp_source=mailing') || cookieUtmMpSource === 'mailing' || cookieUtmSource === 'mailing';
    var isTikTokSource = currentUrl.includes('utm_source=tiktok', 'utm_mp_source=tiktok') || cookieUtmMpSource === 'tiktok' || cookieUtmSource === 'tiktok';
    var isOtherSource = (urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=']) || cookieUtmMpSource !== '' || cookieUtmSource !== '') && !isGoogleSource && !isMailingSource && !isNativeHsSource && !isNewsLetterSource && !isTikTokSource;
    var hasFbclid = Boolean(urlIncludesSubstrings(currentUrl, ['fbclid=']) || (cookiefbclid && cookiefbclid !== ''));
    var hasSaleCoupon = urlIncludesSubstrings(currentUrl, ['utm_content=sale10']) || getCookieDynCheckout('coupon') === 'sale10';


    if (isUtmPresent) {
      if (isOtherSource || hasFbclid) {
          if (globalRetailPrice != '0') {
              price = globalRetailPrice;
          }else {
              price = defaultReducedPrice >= countryMinimumPrice ? defaultReducedPrice : countryMinimumPrice;
          }
      } else if (isGoogleSource || isMailingSource || isNativeHsSource || isNewsLetterSource || isTikTokSource) {
          if (sp) {
              if (globalMinimumPrice) {
                  price = sp >= globalSpMinimumPrice ? sp : globalSpMinimumPrice;
              } else {
                  price = sp >= countryMinimumPrice ? sp : defaultReducedPrice;
              }
          } else {
              price = defaultReducedPrice >= countryMinimumPrice ? defaultReducedPrice : countryMinimumPrice;
          }
      }

    }else if (defaultReducedPrice > countryMinimumPrice){
        price = defaultReducedPrice;
    }else {
        price = countryMinimumPrice; 
    }

    globalPrices.op1 = originalPrice.toString();
    globalPrices.rp1 = price.toString();

      
    //--------------------------------------------------------------------------------------------------------
    

    initSetLink();
    handleAdditionalVariations(price, countryCurrencySymbol, additionalVariationsPrices, additionalVariationProductPrice,country)

    var wd = getParam('sd');
    var ds = getDsc(wd)

    if (price == 0 && globalPrices && globalPrices.rp1) {
        price = Number(globalPrices.rp1);
    }

    //-------------------------------------------------- OFFSETS


    if(selectedVariation && (selectedVariation.priceOffset > 0 || selectedVariation.priceOffset < 0)){
      price = price + selectedVariation.priceOffset;
      if (enableOriginalPriceOffset){
      originalPrice = originalPrice + selectedVariation.priceOffset;
      }
    }
    
    //----------------------------------------------------------------------------OFFSETS


    if (price !== 0 && typeof price == 'number') {
      //if sd parameter exists, calculate OP, if not, set it default
      var op = (!wd || wd === 0)
        ? Number(originalPrice).toFixed(decimals)
        : (Number(originalPrice) * ds).toFixed(decimals);

    var rp1 = price.toFixed(decimals);
    var rp2 = (price * 0.78).toFixed(decimals);
    var rp3 = (price * 0.73).toFixed(decimals);
    var rp4 = (price * 0.73).toFixed(decimals);
    var rp5 = (price * 0.52).toFixed(decimals);
    var rpx = (price * 0.52).toFixed(decimals);
      const roundQuantityPrice = function (price, salePrice, countryCode){
    try {
    switch(typeof price){
    case 'number': {
        price = price;
        break;
    }
    case 'string': {
        price = parseFloat(price);
        break;
    }
    }
    switch(typeof salePrice){
      case 'number': {
          salePrice = salePrice;
          break;
      }
      case 'string': {
          salePrice = parseFloat(salePrice);
          break;
      }
    }
    }catch(err){
        return price;
    }

    // Convert price and sale price to float for calculation
    price = parseFloat(price.toString().replace(',', '.'));
    salePrice = parseFloat(salePrice.toString().replace(',', '.'));

    // Ensure we don't exceed the original or sale price
    const maxPrice = Math.min(price, salePrice);

    // Determine number of decimals in the original price
    const originalDecimals = price.toString().split('.')[1]?.length || 0;
    const multiplier = Math.pow(10, originalDecimals);

    let roundedPrice;
    let higherPrice;

    // Apply rounding based on the country code
    switch (countryCode) {
      case 'HU':
        roundedPrice = Math.ceil(price / 100) * 100 + 90;
        higherPrice = roundedPrice + 100;
        price = (higherPrice <= maxPrice + 200) ? higherPrice : roundedPrice;
        break;
      case 'CZ':
        roundedPrice = Math.ceil(price / 10) * 10 - 1;
        higherPrice = roundedPrice + 10;
        price = (higherPrice <= maxPrice + 12) ? higherPrice : roundedPrice;
        break;
      case 'RO':
        roundedPrice = Math.floor(price) + 0.99;
        higherPrice = Math.floor(price) + 1.99;
        price = (higherPrice <= maxPrice + 2) ? higherPrice : roundedPrice;
        break;
      case 'PL':
        roundedPrice = Math.floor(price) + 0.00;
        higherPrice = Math.floor(price) + 2.00;
        price = (higherPrice <= maxPrice + 2) ? higherPrice : roundedPrice;
        break;
      case 'RS':
        roundedPrice = Math.floor(price / 10) * 10 + 9;
        price = (roundedPrice <= maxPrice + 9) ? roundedPrice : maxPrice;
        break;
      case 'MK':
        roundedPrice = Math.floor(price / 10) * 10 + 9;
        price = (roundedPrice <= maxPrice + 9) ? roundedPrice : maxPrice;
        break;
      default:
        const priceCents = Math.floor(price * multiplier);
        const salePriceCents = Math.floor(salePrice * multiplier);
        const fractionalPartCents = priceCents % multiplier;
        const roundedFractionalPartCents = fractionalPartCents <= (49 * multiplier / 100) ? (49 * multiplier / 100) : (99 * multiplier / 100);
        const finalPriceCents = Math.min(Math.floor(priceCents / multiplier) * multiplier + roundedFractionalPartCents, salePriceCents);
        price = finalPriceCents / multiplier;
        break;
    }

    return price;//.toFixed(originalDecimals);
    }
        //round quantity prices
        rp1 = rp1;
        if(parseFloat(rp2) < parseFloat(rp1)){
            rp2 = roundQuantityPrice(rp2, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp3) < parseFloat(rp1)){
            rp3 = roundQuantityPrice(rp3, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp4) < parseFloat(rp1)){
            rp4 = roundQuantityPrice(rp4, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp5) < parseFloat(rp1)){
            rp5 = roundQuantityPrice(rp5, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rpx) < parseFloat(rp1)){
            rpx = roundQuantityPrice(rpx, rp1, countrySettings.countryCode).toFixed(decimals);
        }

        var rp2t = (rp2 * 2).toFixed(decimals);
        var rp3t = (rp3 * 3).toFixed(decimals);
        var rp4t = (rp4 * 4).toFixed(decimals);
        var rp5t = (rp5 * 5).toFixed(decimals);
        var rpxt = (rpx * 6).toFixed(decimals);

        var op2t = (op * 2).toFixed(decimals);
        var op3t = (op * 3).toFixed(decimals);
        var op4t = (op * 4).toFixed(decimals);
        var op5t = (op * 5).toFixed(decimals);
        var opxt = (op * 6).toFixed(decimals);

        var d1 = 100 - Math.round((rp1 / op) * 100);
        var d2 = 100 - Math.round((rp2 / op) * 100);
        var d3 = 100 - Math.round((rp3 / op) * 100);
        var d4 = 100 - Math.round((rp4 / op) * 100);
        var d5 = 100 - Math.round((rp5 / op) * 100);
        var dx = 100 - Math.round((rpx / op) * 100);

        var pd1 = (op - rp1).toFixed(decimals);
        var pd2 = ((2 * op) - (2 * rp2)).toFixed(decimals);
        var pd3 = ((3 * op) - (3 * rp3)).toFixed(decimals);
        var pd4 = ((4 * op) - (4 * rp4)).toFixed(decimals);
        var pd5 = ((5 * op) - (5 * rp5)).toFixed(decimals);
        var pdx = ((6 * op) - (6 * rpx)).toFixed(decimals);

        //alternative dynamic price (double currency)
        var altOp;
        var altOp2t;
        var altOp3t;
        var altOp4t;
        var altOp5t;
        var altOpxt;

        var altRp1t;
        var altRp2t;
        var altRp3t;
        var altRp4t;
        var altRp5t;
        var altRpxt;

        if(altDynPr){ 
            altOp = (op * 1).toFixed(altDecimals);
            altOp2t = (op2t * 1).toFixed(altDecimals);
            altOp3t = (op3t * 1).toFixed(altDecimals);
            altOp4t = (op4t * 1).toFixed(altDecimals);
            altOp5t = (op5t * 1).toFixed(altDecimals);
            altOpxt = (opxt * 1).toFixed(altDecimals);

            altRp1t = (rp1 * 1).toFixed(altDecimals);
            altRp2t = (rp2t * 1).toFixed(altDecimals);
            altRp3t = (rp3t * 1).toFixed(altDecimals);
            altRp4t = (rp4t * 1).toFixed(altDecimals);
            altRp5t = (rp5t * 1).toFixed(altDecimals);
            altRpxt = (rpxt * 1).toFixed(altDecimals);
        }

        else {
            if(country === 'HR'){
                altOp = (parseFloat(op)).toFixed(altDecimals);
                altOp2t = (parseFloat(op2t)).toFixed(altDecimals);
                altOp3t = (parseFloat(op3t)).toFixed(altDecimals);
                altOp4t = (parseFloat(op4t)).toFixed(altDecimals);
                altOp5t = (parseFloat(op5t)).toFixed(altDecimals);
                altOpxt = (parseFloat(opxt)).toFixed(altDecimals);

                altRp1t = (parseFloat(rp1)).toFixed(altDecimals);
                altRp2t = (parseFloat(rp2t)).toFixed(altDecimals);
                altRp3t = (parseFloat(rp3t)).toFixed(altDecimals);
                altRp4t = (parseFloat(rp4t)).toFixed(altDecimals);
                altRp5t = (parseFloat(rp5t)).toFixed(altDecimals);
                altRpxt = (parseFloat(rpxt)).toFixed(altDecimals);
            
                op = (op / 1).toFixed(decimals);
                op2t = (op2t / 1).toFixed(decimals);
                op3t = (op3t / 1).toFixed(decimals);
                op4t = (op4t / 1).toFixed(decimals);
                op5t = (op5t / 1).toFixed(decimals);
                opxt = (opxt / 1).toFixed(decimals);

            }
        }
        //IF WE OVERRIDE GLOBAL PRICES WITH OFFSETS THE PRICE KEEPS INCREASING
        if (globalPrices && selectedVariation && !selectedVariation.priceOffset > 0 && !selectedVariation.priceOffset < 0) {
            globalPrices.rp1 = rp1;
            globalPrices.rp2 = rp2t;
            globalPrices.rp3 = rp3t;
            globalPrices.rp4 = rp4t;
            globalPrices.rp5 = rp5t;
            globalPrices.rpx = rpxt;

            globalPrices.op1 = op;
            globalPrices.op2 = op2t;
            globalPrices.op3 = op3t;
            globalPrices.op4 = op4t;
            globalPrices.op5 = op5t;
            globalPrices.opx = opxt;
        }

        var p = {
            'op': op,
            'op_l': op+countryCurrencySymbol,
            'opnc': op,
            'opnc_l': op,
            'rp1':  rp1,
            'rp1_l':  rp1+countryCurrencySymbol,
            'rp1nc': rp1,
            'rp1nc_l': rp1,
            'rp2': rp2,
            'rp2_l': rp2+countryCurrencySymbol,
            'rp2nc': rp2,
            'rp2nc_l': rp2,
            'rp3': rp3,
            'rp3_l': rp3+countryCurrencySymbol,
            'rp3nc': rp3,
            'rp3nc_l': rp3,
            'rp4': rp4,
            'rp4_l': rp4+countryCurrencySymbol,
            'rp4nc': rp4,
            'rp4nc_l': rp4,
            'rp5': rp5,
            'rp5_l': rp5+countryCurrencySymbol,
            'rp5nc': rp5,
            'rp5nc_l': rp5,
            'rpx': rpx,
            'rpx_l': rpx+countryCurrencySymbol,
            'rpxnc': rpx,
            'rpxnc_l': rpx,
            'rp1t': rp1+countryCurrencySymbol,
            'rp1t_l': rp1+countryCurrencySymbol,
            'rp1tnc': rp1,
            'rp1tnc_l': rp1,
            'altRp1t': altRp1t+altCurrencySymbol,
            'rp2t': rp2t+countryCurrencySymbol,
            'rp2t_l': rp2t+countryCurrencySymbol,
            'rp2tnc': rp2t,
            'rp2tnc_l': rp2t,
            'altRp2t': altRp2t+altCurrencySymbol,
            'rp3t': rp3t+countryCurrencySymbol,
            'rp3t_l': rp3t+countryCurrencySymbol,
            'rp3tnc': rp3t,
            'rp3tnc_l': rp3t,
            'altRp3t': altRp3t+altCurrencySymbol,
            'rp4t': rp4t+countryCurrencySymbol,
            'rp4t_l': rp4t+countryCurrencySymbol,
            'rp4tnc': rp4t,
            'rp4tnc_l': rp4t,
            'altRp4t': altRp4t+altCurrencySymbol,
            'rp5t': rp5t+countryCurrencySymbol,
            'rp5t_l': rp5+countryCurrencySymbol,
            'rp5tnc': rp5,
            'rp5tnc_l': rp5,
            'altRp5t': altRp5t+altCurrencySymbol,
            'rpxt': rpxt+countryCurrencySymbol,
            'rpxt_l': rpx+countryCurrencySymbol,
            'rpxtnc': rpx,
            'rpxtnc_l': rpx,
            'altRpxt': altRpxt+altCurrencySymbol,
            'op1t': op,
            'op1t_l': op+countryCurrencySymbol,
            'altOp1t': altOp+altCurrencySymbol,
            'op2t': op2t,
            'op2t_l': op2t+countryCurrencySymbol,
            'altOp2t': altOp2t+altCurrencySymbol,
            'op3t': op3t,
            'op3t_l': op3t+countryCurrencySymbol,
            'altOp3t': altOp3t+altCurrencySymbol,
            'op4t': op4t,
            'op4t_l': op4t+countryCurrencySymbol,
            'altOp4t': altOp4t+altCurrencySymbol,
            'op5t': op5t,
            'op5t_l': op5t+countryCurrencySymbol,
            'altOp5t': altOp5t+altCurrencySymbol,
            'opxt': opxt,
            'opxt_l': opxt+countryCurrencySymbol,
            'altOpxt': altOpxt+altCurrencySymbol,
            'd1': d1,
            'd1_l': d1,
            'd2': d2,
            'd2_l': d2,
            'd3': d3,
            'd3_l': d3,
            'd4': d4,
            'd4_l': d4,
            'd5': d5,
            'd5_l': d5,
            'dx': dx,
            'dx_l': dx,
            'pd1': pd1,
            'pd2': pd2,
            'pd3': pd3,
            'pd4': pd4,
            'pd5': pd5,
            'pdx': pdx,
        }
        
        $('.dp-op').text(p.op);
        $('.dp-opnc').text(p.opnc);
        $('.dp-rp1').text(p.rp1);
        $('.dp-rp2').text(p.rp2);
        $('.dp-rp3').text(p.rp3);
        $('.dp-rp4').text(p.rp4);
        $('.dp-rp5').text(p.rp5);
        $('.dp-rpx').text(p.rpx);

        $('.dp-rp1nc').text(p.rp1nc);
        $('.dp-rp2nc').text(p.rp2nc);
        $('.dp-rp3nc').text(p.rp3nc);
        $('.dp-rp4nc').text(p.rp4nc);
        $('.dp-rp5nc').text(p.rp5nc);
        $('.dp-rpxnc').text(p.rpxnc);

        
        $('.dp-rp1t').text(p.rp1t);
        $('.dp-rp2t').text(p.rp2t);
        $('.dp-rp3t').text(p.rp3t);
        $('.dp-rp4t').text(p.rp4t);
        $('.dp-rp5t').text(p.rp5t);
        $('.dp-rpxt').text(p.rpxt);

        $('.dp-rp1tnc').text(p.rp1tnc);
        $('.dp-rp2tnc').text(p.rp2tnc);
        $('.dp-rp3tnc').text(p.rp3tnc);
        $('.dp-rp4tnc').text(p.rp4tnc);
        $('.dp-rp5tnc').text(p.rp5tnc);
        $('.dp-rpxtnc').text(p.rpxtnc);

        $('.dp-op1t').text(p.op1t);
        $('.dp-op2t').text(p.op2t);
        $('.dp-op3t').text(p.op3t);
        $('.dp-op4t').text(p.op4t);
        $('.dp-op5t').text(p.op5t);
        $('.dp-opxt').text(p.opxt);

        $('.dp-d1').text(p.d1);
        $('.dp-d2').text(p.d2);
        $('.dp-d3').text(p.d3);
        $('.dp-d4').text(p.d4);
        $('.dp-d5').text(p.d5);
        $('.dp-dx').text(p.dx);

        $('.dp-pd').text(p.pd1);
        $('.dp-pd2').text(p.pd2);
        $('.dp-pd3').text(p.pd3);
        $('.dp-pd4').text(p.pd4);
        $('.dp-pd5').text(p.pd5);
        $('.dp-pdx').text(p.pdx);

        //dymamic elements
        switch (selectedGlobalQuantity) {
        case 1: {
          // Reduced price
          const reducedPrice = p.rp1t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);

          // Reduced alt currency
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          // Original price
          const originalPrice = p.op1t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);

          // Original alt currency
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 2: {
          const reducedPrice = p.rp2t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op2t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 3: {
          const reducedPrice = p.rp3t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op3t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 4: {
          const reducedPrice = p.rp4t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op4t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 5: {
          const reducedPrice = p.rp5t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op5t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        default: {
          const reducedPrice = p.rpxt;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.opxt;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }
      }

        $('a.h-dp').each(function(i, e) {
            var url = $(this).attr('href');
            var reg1 = /\<\*(.*)\*\>/gm;
            var reg = new RegExp('\<\*(.*)\*\>', 'gm')
            var n = url.match(reg1) || [];
            if (n) {
                for (let j = 0; j < n.length; j++) {
                    var sub = n[j].substring(2, n[j].length - 2);
                    var subarr = sub.split('#');
                    var code = subarr[0];
                    url = url.replace(n[j], p[code]);
                    $(this).attr('href', url);
                }
            }
        
        });

    } else if (price == 0) {
        $('a.h-dp').each(function(i, e) {
            var url = $(this).attr('href');
            var reg1 = /\<\*(.*)\*\>/gm;
            var reg = new RegExp('\<\*(.*)\*\>', 'gm')
            var n = url.match(reg1) || [];
            if (n) {

                for (let j = 0; j < n.length; j++) {
                    var sub = n[j].substring(2, n[j].length - 2);
                    var subarr = sub.split('#');
                    var pr = subarr[1];
                    url = url.replace(n[j], pr);
                    $(this).attr('href', url);
                }
            }
        
        });
    }

    $('.dp-all').css('display', 'inline-block');
    setLinkDynamicCart();
    }//recalculatePrices
    
    function markOutOfStock2() {
        var selectedValues = {}; // {propertyId: value}

        document.querySelectorAll('button.color-variation-button, button.button-variation')
            .forEach(function(el) {
                if(el.getAttribute('selected-option') === 'true') {
                    selectedValues[el.getAttribute('property-id')] = el.value;
                }
            });

        var allOptions = document.querySelectorAll('button.color-variation-button, button.button-variation');
        allOptions.forEach(function(optionEl) {
            var optionValue = optionEl.value;
            var propertyId = optionEl.getAttribute('property-id');
            var hasValidCombination = variationsArr.some(function(variation) {
                if(variation.ids.indexOf(optionValue) === -1) return false;
                for(var pid in selectedValues) {
                    var selected = selectedValues[pid];
                    if(pid !== propertyId && variation.ids.indexOf(selected) === -1) return false;
                }
                //if disabled is not define (missing in database), set as false    
                if (typeof variation.disable === "undefined") variation.disable = false;
                
                return variation.hide === false && variation.disable !== true;
            });
            var completelyUnavailable = variationsArr.every(function(variation){
                return variation.ids.indexOf(optionValue) === -1 ||
                      variation.hide !== false ||
                      variation.disable === true;
            });
            if(completelyUnavailable) {
                // Completely unavailable: grey + disable + hide if needed
                optionEl.classList.add('greyOut');
                optionEl.classList.add('hiddenvariation');
                optionEl.disabled = true;
            } else if(!hasValidCombination) {
                // Incompatible with current selection: grey only, still clickable
                optionEl.classList.add('greyOut');
                optionEl.classList.remove('hiddenvariation');
                optionEl.disabled = false;
            } else {
                // Available
                optionEl.classList.remove('greyOut');
                optionEl.classList.remove('hiddenvariation');
                optionEl.disabled = false;
            }
        });
    }markOutOfStock2
    

    function handleAddToCartButton(inStock) {
      //get all "add-to-cart" buttons
      const addToCartButtons = document.getElementsByClassName("checkout-add-to-cart-btn");
      for(const addToCartBtn of addToCartButtons){
        var addToCartButton = addToCartBtn;
        var inStockTextElements = addToCartBtn.querySelectorAll("checkout-add-to-cart-btn-text");
        var outOfStockTextElements = addToCartBtn.querySelectorAll("checkout-add-to-cart-btn-text-out-of-stock");

        try {
          if(inStock){
            //in stock
            addToCartButton.classList.remove('checkout-add-to-cart-btn-disabled');
            for(const inStockTextElm of inStockTextElements){
              inStockTextElm.classList.remove('checkout-add-to-cart-btn-text-hidden');
            }
            for(const outOfStockTextElm of outOfStockTextElements){
              outOfStockTextElm.classList.add('checkout-add-to-cart-btn-text-hidden');
            }
          }else {
            //out of stock
            addToCartButton.classList.add('checkout-add-to-cart-btn-disabled');
            for(const inStockTextElm of inStockTextElements){
              inStockTextElm.classList.add('checkout-add-to-cart-btn-text-hidden');
            }
            for(const outOfStockTextElm of outOfStockTextElements){
              outOfStockTextElm.classList.remove('checkout-add-to-cart-btn-text-hidden');
            }
          }
        }catch(err){
          console.error(err);
        }
      }//for
    }//handleAddToCartButton

    function dynamicCheckoutOtherVariationButtonClicked(propertyId, optionId, p, variationIndex){
      let property = propertiesArr.find(pr => pr.id === propertyId);
      let option = property.options.find(opt => opt.id === optionId);

      //remove borders on all variations
      for(let opt = 0; opt < propertiesArr[p].options.length; opt++){
        let optionElement = document.getElementById(propertiesArr[p].id + "-" + propertiesArr[p].options[opt].id + "-" + p);
        if(!!optionElement){
          optionElement.classList.remove('selected');
          optionElement.setAttribute("selected-option", "false");
        }
      }
      //add border to selected variation
      let selectedVariationButtonElement = document.getElementById(propertyId + "-" + optionId + "-" + p);
      selectedVariationButtonElement.classList.add('selected');
      selectedVariationButtonElement.setAttribute("selected-option", "true");

      
      toggleCartButtonStock();
      markOutOfStock2();
      recalculatePrices();
      setLinkDynamicCart();

    }//dynamicCheckoutOtherVariationButtonClicked

    function dynamicCheckoutVariationDropdownChanged(propertyId, p, dropdownElement, variationIndex){
      let options = dropdownElement.options;
      for(let opt = 0; opt < options.length; opt++){
	      options[opt].setAttribute("selected-option", "false");
        if(options[opt].value === dropdownElement.value){
          options[opt].setAttribute("selected-option", "true");
        }//if
      }//for
      setLinkDynamicCart();
      toggleCartButtonStock();
      recalculatePrices();
    }//dynamicCheckoutVariationDropdownChanged


    function setLinkDynamicCart(quantity = null) {
      let linkIdsString = '';
      let singleQuantityValue = 1;
      let singleQuantityValueElement = document.getElementById("single-quantity-value");
      if(!!singleQuantityValueElement){
        singleQuantityValue = parseFloat(singleQuantityValueElement.value);
      }
      if(quantity === null){
       const checkedElement = document.querySelector('[id^="qty"]:checked');
        if (checkedElement) {
          // Extract the number at the end of the ID
          const id = checkedElement.id;
          const number = id.match(/\d+$/)[0]; // gets the number at the end
          singleQuantityValue = parseInt(number)
        }   
      } else {
          singleQuantityValue = quantity;
          }
      
      if(propertiesArr.length > 0){
        //variation product
        //get all selected options for variation
        let selectedOptions = [];
        for(let pr = 0; pr < propertiesArr.length; pr++){
          let propertyId = propertiesArr[pr].id;
          let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
          if(selectedOptionElements.length > 0){
            selectedOptions.push(propertiesArr[pr].options.find(opt => opt.id === selectedOptionElements[0].value));
          } 
        }
        //find correct variation
        let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptions.map(sO => sO.id).sort().join(','));
        //set linkIds
        if(!!selectedVariation){
          for(let qnt = 0; qnt < singleQuantityValue; qnt++){
            if((qnt + 1) === singleQuantityValue){
              linkIdsString += selectedVariation.variationId;
            }else {
              linkIdsString += selectedVariation.variationId + ',';
            }
          }
        }
      }else {
        //simple product
        for(let qnt = 0; qnt < singleQuantityValue; qnt++){
          if((qnt + 1) === singleQuantityValue){
            linkIdsString += productSettings.woocommerceId;
          }else {
            linkIdsString += productSettings.woocommerceId + ',';
          }
        }
      }
      //related
      let relatedData;
      try {
        relatedData = getRelatedProductsData();
      }catch(err){
        //console.log("No related products data");
      }
      if(!!relatedData){
        linkIdsString = linkIdsString + relatedData.wcIds;
      }
      
        //dynamic
        let dynPriceParam = "";
        if(!!redPrice1 && dynPriceSet){
            var spCookie = getCookieDynCheckout('sp') || getParam('sp');
            if(spCookie.length > 0){
                dynPriceParam = "&sp=" + dynPriceToParam(redPrice1);
            } else {
                dynPriceParam = "&spe=" + dynPriceToParam(redPrice1);
            }
        }
        
        var cookieUtmSource = getCookieDynCheckout('utm_source')
        var cookieUtmMpSource = getCookieDynCheckout('utm_mp_source')
        var cookie = getCookieDynCheckout('coupon')
        var cookiefbclid= getCookieDynCheckout('fbclid')

        var isGoogleSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=google', 'utm_source=google']) || cookieUtmMpSource === 'google' || cookieUtmSource === 'google';
        var isMailingSource = currentUrl.includes('utm_source=mailing', 'utm_mp_source=mailing') || cookieUtmMpSource === 'mailing' || cookieUtmSource === 'mailing';
        var isTikTokSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=tiktok', 'utm_source=tiktok']) || cookieUtmMpSource === 'tiktok' || cookieUtmSource === 'tiktok';
        var isOtherSource = (urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=']) || cookieUtmMpSource !== '' || cookieUtmSource !== '') && !isGoogleSource && !isMailingSource && !isTikTokSource;
        var hasFbclid = urlIncludesSubstrings(currentUrl, ['fbclid=']) || cookiefbclid !== '';
        var hasFbclid = Boolean(urlIncludesSubstrings(currentUrl, ['fbclid=']) || (cookiefbclid && cookiefbclid !== ''));


        if ((isOtherSource && !isGoogleSource && !isMailingSource && !isTikTokSource) || hasFbclid){
          dynPriceParam = dynPriceParam + '&utm_source=other';
        } else if (isGoogleSource) {
          dynPriceParam = dynPriceParam + '&utm_source=google';
        } else if (isMailingSource){
          dynPriceParam = dynPriceParam + '&utm_source=mailing';
        } else if (isTikTokSource){
          dynPriceParam = dynPriceParam + '&utm_source=tiktok';
        }

        var hasSaleCoupon = urlIncludesSubstrings(currentUrl, ['utm_content=sale10']) || getCookieDynCheckout('coupon') === 'sale10';
        if (hasSaleCoupon) {
          dynPriceParam += '&c=sale10';
        }
      
      var addToCartButtons = document.getElementsByClassName("checkout-add-to-cart-btn");
      for(const addToCartButton of addToCartButtons){
        addToCartButton.href = "https://ortowp.noriks.com/kosarica/?add-more=" + linkIdsString + dynPriceParam;
      }

      // var postPurchaseButtons = document.getElementsByClassName("checkout-post-purchase-cart-btn");
      // for(const btn of postPurchaseButtons){
      //   btn.href = postPurchaseLink;
      // }
      //var addToCartButton = document.getElementById('checkout_add_to_cart_btn');
      //addToCartButton.href = "https://ortowp.noriks.com/kosarica/?add-more=" + linkIdsString + dynPriceParam;
    }//setLinkDynamicCart

    function setSelectedVariations(){
      for(let pr = 0; pr < propertiesArr.length; pr++){
        let propertyId = propertiesArr[pr].id;
        let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
        for(let sO = 0; sO < selectedOptionElements.length; sO++){
          switch(propertiesArr[pr].type){
            case 'color':
            case 'icon': {
              dynamicCheckoutColorVariationClicked(selectedOptionElements[sO].getAttribute('property-id'), selectedOptionElements[sO]['value'], pr,1);
              break;
            }
            case 'basic': {
              dynamicCheckoutOtherVariationButtonClicked(selectedOptionElements[sO].getAttribute('property-id'), selectedOptionElements[sO]['value'], pr,1);
              break;
            }
            default: break;
          }//switch
        }
      }
    }//setSelectedVariations

    function selectedVariationInStock(){
      let inStock = false;
      if (!variationsArr || variationsArr.length === 0) return inStock;

      let selectedOptionIdsList = [];

      for(let pr = 0; pr < propertiesArr.length; pr++){
        let propertyId = propertiesArr[pr].id;
        let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
        for(let sO = 0; sO < selectedOptionElements.length; sO++){
          selectedOptionIdsList.push(selectedOptionElements[sO]['value']);
        }
      }
      //find correct variation
      let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptionIdsList.map(sO => sO).sort().join(','));
      if(!!selectedVariation && selectedVariation.hide === false && selectedVariation.disable === false){
        inStock = true;
      }
      return inStock;
    }//selectedVariationInStock

    function toggleCartButtonStock(){
      let inStock = false;
      if(variationsArr.length > 0){
        //variation product
        inStock = selectedVariationInStock();
      }else {
        //simple product
        inStock = true;
      }
      try {
        handleAddToCartButton(inStock);
      }catch(err){
        console.error(err);
      }
    }//toggleCartButtonStock

    function applyDynamicPrice(){
      const dynPrice = getDynamicPrice();

      if(!!dynPrice){
        dynPriceSet = true;
        redPrice1 = dynPrice;
      }
    }

    function modifyGlobalPrices(dynamicPriceQnt1){
      if(dynPriceSet){
        let reducedPriceElem = document.getElementById('dynamic_cart_reduced_price_amount');
        let origPriceElem = document.getElementById('dynamic_cart_original_price_amount');
        let discValueElem = document.getElementById('dynamic_cart_discount_percentage_amount');
        
        let newRedPrice1 = parseFloat(dynamicPriceQnt1);
        let newOrigPrice1 =  parseFloat(globalPrices.op1);
        let redPrice1Disc = ((newOrigPrice1 - newRedPrice1) / newOrigPrice1) * 100;

        try{
          globalPrices.rp1 = newRedPrice1;
          globalPrices.op1 = newOrigPrice1;
          reducedPriceElem.innerHTML = Math.round((newRedPrice1 + Number.EPSILON) * 100) / 100;
          origPriceElem.innerHTML = Math.round((newOrigPrice1 + Number.EPSILON) * 100) / 100;
          discValueElem.innerHTML = Math.round(redPrice1Disc);
        }catch(err){
          //console.error("Cannot modify global prices");
        }
      }
    }

    function getDynamicPrice(){
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const dynamicPriceParam = urlParams.get("sp") || getCookieDynCheckout('sp') || urlParams.get("spe") || getCookieDynCheckout('spe');
      
      var dynamicPrice = null;

      if(!!dynamicPriceParam){
        dynamicPrice = dynamicPriceParam.replace("i", ".");
        dynamicPrice = dynamicPrice.substring(2, dynamicPrice.length - 1);
      }
      return dynamicPrice;
    }

    function dynPriceToParam(price){
      var paramPrice;
      if(!!price){
        paramPrice = "77" + price.toString().replace(".", "i") + "7";
      }
      return paramPrice;
    }

    function updateReducedPrices(mainPrice) {
      // main price
      $('#dynamic_cart_reduced_price_amount').text(mainPrice);

      // alt currency
      if (showAltCurrencyPrice) {
        const altPrice = (parseFloat(mainPrice) * altCurrencyPriceRate).toFixed(altDecimals);
        $('#dynamic_cart_reduced_alt_price_amount')
          .text(altPrice + ' ' + altCurrencyPriceSymbol)
          .show();
      }
    }


    ////////////////////////////////////////
        ///////// DELIVERY DATE ///////////////
        //////////////////////////////////////

        function setDeliveryDate (){
            try {
                var daysToDeliver = deliveryDays;
                const weekdays = deliveryWeekdays;

                const productEstimateDelivery = productSettings.estimate_delivery_date;
                const countryHolidays = countrySettings.holidays;
                const countryCode = countrySettings.countryCode;

                const now = new Date(Date.now());

                var firstPossibleDeliveryDate;


                var countryHolidaysDates = [];

                //take today or estimate_delivery for starting date
                if(productEstimateDelivery === ''){//if empty
                    firstPossibleDeliveryDate = new Date(); //today
                }else{
                    var today_date = new Date();
                    var deliv_date = convertStringToDate(productEstimateDelivery, '.');

                    if(today_date <= deliv_date){
                        firstPossibleDeliveryDate = deliv_date;
                    }else{
                        firstPossibleDeliveryDate = today_date;

                        //if order after 18:00 hour, increase daysToDeliver by 1
                        if(now.getHours() >= 18){
                            daysToDeliver++;
                        }
                    }
                }


                //convert strings to dates
                for(let d = 0; d < countryHolidays.length; d++){
                    countryHolidaysDates.push(convertStringToDate(countryHolidays[d], '.'));
                }//for

                //calculate delivery date
                for(let i = 0; i <= daysToDeliver;){
                    if(isWeekend(firstPossibleDeliveryDate) ||
                        isHoliday(firstPossibleDeliveryDate, countryHolidaysDates)){
                        firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                    }else{
                        //decrease daysToDeliver (by increasing for loop counter)
                        if(i < daysToDeliver){
                            firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                            i++;
                        }else{
                            i++;
                        }
                        /*firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                        i++;*/
                    }
                    //firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                }//for

                document.getElementById('delivery-at-day-name').innerHTML = weekdays[firstPossibleDeliveryDate.getDay()];

                generateDeliveryDateText(countryCode, firstPossibleDeliveryDate, deliveryMonths);
            }catch(err){
                console.error("Problem setting delivery date.");
            }
        }//setDeliveryDate

        function generateDeliveryDateText(countryCode, deliveryDate, deliveryMonths){
            try {
                switch(countryCode){
                    case 'HU': {
                        let text = ' ' + deliveryMonths[deliveryDate.getMonth()] + ' ' + deliveryDate.getUTCDate().toString() + '.';

                        document.getElementById('delivery-date').innerHTML = text;
                        break;
                    }
                    default: {
                        document.getElementById('delivery-date').innerHTML = deliveryDate.getUTCDate().toString() + '.' + 
                                                                            (deliveryDate.getMonth() + 1).toString() + '.' + 
                                                                            deliveryDate.getUTCFullYear().toString();
                        break;
                    }
                }
            }catch(e){
                console.log(e);
                console.error("Problem setting delivery date text for specific country.");
            }

        }//HtmlElementId

        function convertStringToDate(stringDate, delimiter = '.'){

            var year; // = new Date().getUTCFullYear().toString();
            var day = stringDate.split(delimiter)[0];
            var month = stringDate.split(delimiter)[1];

            if(stringDate.split(delimiter)[2] === ''){
                //date without year
                year = new Date().getUTCFullYear().toString();
            }else {
                //date with year
                year = stringDate.split(delimiter)[2];
            }

            //var date = new Date(month + '-' + day + '-' + year);
            var date = new Date(year, month - 1, day, 10, 0, 0);
            return date;
        }//convertStringToDate

        function isWeekend(date){
            if(date.getDay() === 0 || date.getDay() > 5){
                return true;
            }
            return false;
        }//isWeekend

        function isHoliday(date, holidays){
            for(let i = 0; i < holidays.length; i++){
                if(date.getDate() === holidays[i].getDate() &&
                    date.getMonth() === holidays[i].getMonth()){
                    return true;
                }//if
            }//for
            return false;
        }//isHoliday

        function addDays(date, days){
            var result = new Date(date);
            result.setDate(result.getDate() + days);
            return result;
        }//addDays


        ////////////////////////////////////////
        //////END DELIVERY DATE ///////////////
        //////////////////////////////////////

  </script>
					</div>
					<div class="sct-hero__descr">
						<!-- <p>Short description</p> -->
						<ul style="list-style:none;padding-left:0;line-height:1.6;">
							<li>&#x2714;&#xA0;Takoj&#x161;nje olaj&#x161;anje</li>
							<li>&#x2714;&#xA0;Klini&#x10D;no preizku&#x161;eno</li>
							<li>&#x2714;&#xA0;Priporo&#x10D;ajo podiatri</li>
						</ul>
					</div>

					<div class="sct-hero__dyn-properties scroll-target">
						<div id="dynamic-cart-variations-container">
                      <div class="single-variation-container" variation-index="0">
                      <div class="colors-container">
                        <div class="color-name-wrapper">
                          <label id="selected-color-variation-name" variation-index="0">Barva: </label><label id="selected-color-variation-value"></label>
                        </div>
                        <div class="color-variations-wrapper">
                              <div class="color-variation">
                                <button id="5ed63a5973bd244d330178b7-60bf53402b27ec52a2a830c6-0" variation-index="0" property-id="5ed63a5973bd244d330178b7" value="60bf53402b27ec52a2a830c6" class="color-variation-button" name="Color-0" selected-option="true" style="background:#e03e0d" ; onclick="dynamicCheckoutColorVariationClicked(&apos;5ed63a5973bd244d330178b7&apos;, &apos;60bf53402b27ec52a2a830c6&apos;, 0, 0);">
                                <label for="5ed63a5973bd244d330178b7-60bf53402b27ec52a2a830c6-0" class="color-variation-button-label">
                                  
                                </label>
                                </button>
                              </div>
                              <div class="color-variation">
                                <button id="5ed63a5973bd244d330178b7-5ed63c0b73bd244d330178b8-0" variation-index="0" property-id="5ed63a5973bd244d330178b7" value="5ed63c0b73bd244d330178b8" class="color-variation-button" name="Color-1" selected-option="false" style="background:#000000" ; onclick="dynamicCheckoutColorVariationClicked(&apos;5ed63a5973bd244d330178b7&apos;, &apos;5ed63c0b73bd244d330178b8&apos;, 0, 0);">
                                <label for="5ed63a5973bd244d330178b7-5ed63c0b73bd244d330178b8-0" class="color-variation-button-label">
                                  
                                </label>
                                </button>
                              </div>
                              <div class="color-variation">
                                <button id="5ed63a5973bd244d330178b7-644a43c195e8ca06d2c61eb0-0" variation-index="0" property-id="5ed63a5973bd244d330178b7" value="644a43c195e8ca06d2c61eb0" class="color-variation-button" name="Color-2" selected-option="false" style="background:#a9a9a9" ; onclick="dynamicCheckoutColorVariationClicked(&apos;5ed63a5973bd244d330178b7&apos;, &apos;644a43c195e8ca06d2c61eb0&apos;, 0, 0);">
                                <label for="5ed63a5973bd244d330178b7-644a43c195e8ca06d2c61eb0-0" class="color-variation-button-label">
                                  
                                </label>
                                </button>
                              </div>
                          </div>
                        </div>
              <div class="other-property-name">
                <label class="other-property-label">Velikost
                </label>
              </div>
              
                  <button name="Size-0" id="5ed4f68873bd244d33016317-689c82ce601c20083023a417-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="689c82ce601c20083023a417" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;689c82ce601c20083023a417&apos;, 1, 0);">
                      35/36
                  </button>
              
                  <button name="Size-1" id="5ed4f68873bd244d33016317-6481ca3c957fc4078ab8b886-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="6481ca3c957fc4078ab8b886" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;6481ca3c957fc4078ab8b886&apos;, 1, 0);">
                      37/38
                  </button>
              
                  <button name="Size-2" id="5ed4f68873bd244d33016317-6481ca1f957fc4078ab8b883-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="6481ca1f957fc4078ab8b883" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;6481ca1f957fc4078ab8b883&apos;, 1, 0);">
                      39/40
                  </button>
              
                  <button name="Size-3" id="5ed4f68873bd244d33016317-689c82d3601c20083023a418-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="689c82d3601c20083023a418" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;689c82d3601c20083023a418&apos;, 1, 0);">
                      41/42
                  </button>
              
                  <button name="Size-4" id="5ed4f68873bd244d33016317-689c82d9601c20083023a419-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="true" selected value="689c82d9601c20083023a419" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;689c82d9601c20083023a419&apos;, 1, 0);">
                      43/44
                  </button>
              
                  <button name="Size-5" id="5ed4f68873bd244d33016317-689c82dd601c20083023a41a-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="689c82dd601c20083023a41a" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;689c82dd601c20083023a41a&apos;, 1, 0);">
                      45/46
                  </button>
              
                  <button name="Size-6" id="5ed4f68873bd244d33016317-6941633d40e5fe5badc2a14b-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="6941633d40e5fe5badc2a14b" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;6941633d40e5fe5badc2a14b&apos;, 1, 0);">
                      47-48
                  </button>
              
                  <button name="Size-7" id="5ed4f68873bd244d33016317-6941634f7de15237bd950d24-1" property-id="5ed4f68873bd244d33016317" type="button" class="button-variation" selected-option="false" value="6941634f7de15237bd950d24" onclick="dynamicCheckoutOtherVariationButtonClicked(&apos;5ed4f68873bd244d33016317&apos;, &apos;6941634f7de15237bd950d24&apos;, 1, 0);">
                      49-50
                  </button>
              
                        </div>
                      </div>
  <style>
    #dynamic-cart-variations-container{
		  touch-action: manipulation;
	  }
    .color-variations-wrapper {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    .color-variation-button{
      background-size: 30px 30px; 
      background-position: 0 0, 30px 30px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: none;
      cursor: pointer;
      margin: 4px;
    }
    .color-variation-button.selected{
      border: 1px solid black;
    }
    .button-variation {
      margin: 3px;
      background-color: green;
    }
    .button-variation.selected{
      margin: 3px;
      background-color: yellow;
    }
    
    .greyOut {
            position: relative;
            opacity: 0.3;
    }
            
    .greyOut::before  {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: red; 
        transform: rotate(-45deg);
        z-index: 1;
        pointer-events: none;
    }

    // .hiddenvariation {
    //     display:none !important;
    // }

    .dynamic-cart-alt-reduced-price, .dynamic-cart-alt-original-price{
    margin-left: 5px;
    }

    #popup-overlay1, #popup-overlay-email, #popup-overlay-success {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        
        /* hidden by default */
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }
    
    .popup1, .popup-email, .popup-success{
        background: #ffffff;
        width: 90%;
        max-width: 620px;
        padding: 32px 28px;
        border-radius: 12px;
        text-align: center;
        position: relative;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    #popup-overlay1.active, #popup-overlay-email.active, #popup-overlay-success.active {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }
    
    #popup-overlay1.active .popup1, #popup-overlay-email.active .popup-email, #popup-overlay-success.active, .popup-success {
        opacity: 1;
        transform: scale(1);
    }
    
    .popup-close1, .popup-close-email, .popup-close-success {
        position: absolute;
        top: 12px;
        right: 14px;
        border: none;
        background: none;
        font-size: 22px;
        cursor: pointer;
        color: #666;
    }
    
    .popup-eyebrow1, .popup-eyebrow-email, .popup-eyebrow-success {
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
    }
    
    .popup-title1, .popup-title-email, .popup-title-success {
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 24px;
        color: #f36b21;
    }
    
    .popup-email-input {
        width: 100%;
        padding: 12px 16px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-weight: 500;
    }
    
    .popup-title1 span, .popup-title-email span, .popup-title-success span {
        display: block;
    }
    
    .popup-cta1, .popup-cta-email, .popup-cta-success {
        background: #f36b21;
        color: #fff;
        border: none;
        padding: 14px 28px;
        font-size: 16px;
        font-weight: 700;
        border-radius: 999px;
        cursor: pointer;
        width: 100%;
    }
    
    .error-message-color {
        color: red;
        font-size: 16px;
        font-weight: 700;
    }
    
    .popup-cta-email:disabled {
        background-color: #d3d3d3;
        color: #999999;
        cursor: not-allowed;
        opacity: 0.5;
    }
    #userAlreadyExistsError, #countrynotFoundError, #enterEmailError, #enterValidEmailText, #unknownError {
        opacity: 0;
        visibility: hidden;
        display: none;
    }
    #userAlreadyExistsError.active, #countrynotFoundError.active, #enterEmailError.active, #enterValidEmailText.active, #unknownError.active {
        opacity: 1;
        visibility: visible;
        display: block;
    }

  </style>
  

						
    <script>
    var productSettings = {"estimate_delivery_date":"11.02.2026","retailPrice":"","reviewsTags":[],"productBrands":[],"woocommerceId":980183,"numberOfPiecesInSet":1};
    var countrySettings = {"countryCode":"SI","holidays":["1.1.","2.1.","8.2.","5.4.","6.4.","27.4.","1.5.","2.5.","24.5.","25.6.","15.8.","31.10.","1.11.","25.12.","26.12."],"currencySymbol":"€"};
    var brandSettings = {"name":"Stepease"};
    var variationsArr = [{"ids":["60bf53402b27ec52a2a830c6","689c82ce601c20083023a417"],"names":"Orange 35/36","sku":"3831127616552","hide":false,"variationId":"980214","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82ce601c20083023a417"],"names":"Black 35/36","sku":"3831127616636","hide":false,"variationId":"980199","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82ce601c20083023a417"],"names":"Grey 35/36","sku":"3831127616594","hide":false,"variationId":"980212","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6481ca3c957fc4078ab8b886"],"names":"Orange 37/38","sku":"3831127616559","hide":false,"variationId":"980210","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6481ca3c957fc4078ab8b886"],"names":"Black 37/38","sku":"3831127616643","hide":false,"variationId":"980213","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6481ca3c957fc4078ab8b886"],"names":"Grey 37/38","sku":"3831127616601","hide":false,"variationId":"980204","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6481ca1f957fc4078ab8b883"],"names":"Orange 39/40","sku":"3831127616566","hide":false,"variationId":"980216","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6481ca1f957fc4078ab8b883"],"names":"Black 39/40","sku":"3831127616650","hide":false,"variationId":"980219","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6481ca1f957fc4078ab8b883"],"names":"Grey 39/40","sku":"3831127616608","hide":false,"variationId":"980185","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82d3601c20083023a418"],"names":"Orange 41/42","sku":"3831127616573","hide":false,"variationId":"980217","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82d3601c20083023a418"],"names":"Black 41/42","sku":"3831127616657","hide":false,"variationId":"980187","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82d3601c20083023a418"],"names":"Grey 41/42","sku":"3831127616615","hide":false,"variationId":"980189","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82d9601c20083023a419"],"names":"Orange 43/44","sku":"3831127616580","hide":false,"variationId":"980193","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82d9601c20083023a419"],"names":"Black 43/44","sku":"3831127616664","hide":false,"variationId":"980211","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82d9601c20083023a419"],"names":"Grey 43/44","sku":"3831127616622","hide":false,"variationId":"980208","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","689c82dd601c20083023a41a"],"names":"Orange 45/46","sku":"3831127616587","hide":false,"variationId":"980218","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","689c82dd601c20083023a41a"],"names":"Black 45/46","sku":"3831127616671","hide":false,"variationId":"980192","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","689c82dd601c20083023a41a"],"names":"Grey 45/46","sku":"3831127616629","hide":false,"variationId":"980215","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6941633d40e5fe5badc2a14b"],"names":"Orange 47/48","sku":"3831127626743","hide":false,"variationId":"982171","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6941633d40e5fe5badc2a14b"],"names":"Black 47/48","sku":"3831127626771","hide":false,"variationId":"982175","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6941633d40e5fe5badc2a14b"],"names":"Grey 47/48","sku":"3831127626757","hide":false,"variationId":"982176","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["60bf53402b27ec52a2a830c6","6941634f7de15237bd950d24"],"names":"Orange 49-50","sku":"3831127626750","hide":false,"variationId":"982174","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["5ed63c0b73bd244d330178b8","6941634f7de15237bd950d24"],"names":"Black 49-50","sku":"3831127626778","hide":false,"variationId":"982168","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0},{"ids":["644a43c195e8ca06d2c61eb0","6941634f7de15237bd950d24"],"names":"Grey 49-50","sku":"3831127626764","hide":false,"variationId":"982173","originalPrice":"36.95","reducedPrice":"18.99","priceOffset":0}];
    var propertiesArr = [{"name":"Barva","code":"Color","type":"color","id":"5ed63a5973bd244d330178b7","options":[{"name":"Oranžna","code":"Orange","id":"60bf53402b27ec52a2a830c6","selected":true,"selectedPT":true,"value":"#e03e0d","urlLink":null},{"name":"Črna ","code":"Black","id":"5ed63c0b73bd244d330178b8","selected":false,"value":"#000000","urlLink":null},{"name":"Siva","code":"Grey","id":"644a43c195e8ca06d2c61eb0","selected":false,"value":"#a9a9a9","urlLink":null}],"showPriceForVariation":true},{"name":"Velikost","code":"Size","type":"basic","id":"5ed4f68873bd244d33016317","options":[{"name":"35/36","code":"35/36","id":"689c82ce601c20083023a417","selected":false,"selectedPT":false,"urlLink":null},{"name":"37/38","code":"37/38","id":"6481ca3c957fc4078ab8b886","selected":false,"selectedPT":false,"urlLink":null},{"name":"39/40","code":"39/40","id":"6481ca1f957fc4078ab8b883","selected":false,"selectedPT":false,"urlLink":null},{"name":"41/42","code":"41/42","id":"689c82d3601c20083023a418","selected":false,"selectedPT":false,"urlLink":null},{"name":"43/44","code":"43/44","id":"689c82d9601c20083023a419","selected":true,"selectedPT":true,"urlLink":null},{"name":"45/46","code":"45/46","id":"689c82dd601c20083023a41a","selected":false,"selectedPT":false,"urlLink":null},{"name":"47-48","code":"47/48","id":"6941633d40e5fe5badc2a14b","selected":false,"selectedPT":false,"urlLink":null},{"name":"49-50","code":"49-50","id":"6941634f7de15237bd950d24","selected":false,"selectedPT":false,"urlLink":null}],"showPriceForVariation":false}];
    var relatedArr = [{"_id":"693040aa8f426861019e9c10","name":"STEPHEEL (UP)","sku":"3831127625931","longNames":[{"countryCode":"AL","longName":""},{"countryCode":"AT","longName":"2x Fersenkissen zur Linderung von Fersenschmerzen"},{"countryCode":"BA","longName":""},{"countryCode":"BE","longName":""},{"countryCode":"BG","longName":"2x подложка за пета за облекчаване на болката в петата"},{"countryCode":"CHD","longName":""},{"countryCode":"CHF","longName":""},{"countryCode":"CHI","longName":""},{"countryCode":"CY","longName":""},{"countryCode":"CZ","longName":"2x polštářek na patu pro snížení bolesti paty"},{"countryCode":"DE","longName":"2x Fersenkissen zur Linderung von Fersenschmerzen"},{"countryCode":"DK","longName":""},{"countryCode":"EE","longName":"2x kontsapadi kannavalu vähendamiseks"},{"countryCode":"ES","longName":"2x almohadilla para el talón que reduce el dolor"},{"countryCode":"FI","longName":""},{"countryCode":"FR","longName":"Coussin de talon pour réduire la douleur au talon"},{"countryCode":"GB","longName":""},{"countryCode":"GR","longName":"2x μαξιλαράκι φτέρνας για μείωση του πόνου στη φτέρνα"},{"countryCode":"HR","longName":"2x umetak za petu za smanjenje boli u peti"},{"countryCode":"HU","longName":"2x sarokpárna a sarokfájdalom csökkentésére"},{"countryCode":"IT","longName":"2x cuscinetto per ridurre il dolore al tallone"},{"countryCode":"LT","longName":"2x kulno pagalvėlė, mažinanti kulno skausmą"},{"countryCode":"LV","longName":"2x papēža spilventiņš sāpju mazināšanai papēža zonā"},{"countryCode":"MD","longName":""},{"countryCode":"MK","longName":"2x перница за пета за намалување на болката во петата"},{"countryCode":"NL","longName":"2x hielkussen voor minder hielpijn"},{"countryCode":"PL","longName":"2x poduszka na piętę zmniejszająca ból"},{"countryCode":"PT","longName":"2x almofada de calcanhar para reduzir as dores no calcanhar"},{"countryCode":"RO","longName":"2x talonetă pentru călcâi – reduce durerea la călcâi"},{"countryCode":"RS","longName":"2x uložak za petu za smanjenje bola u peti"},{"countryCode":"SE","longName":""},{"countryCode":"SI","longName":"2x blazinica za peto za zmanjšanje bolečin v peti"},{"countryCode":"SK","longName":"2x vankúšik na pätu na zmiernenie bolesti päty"},{"countryCode":"UA","longName":""},{"countryCode":"US","longName":""},{"countryCode":"XK","longName":""}],"productImageUrls":[{"countryCode":"AL","productImageUrl":""},{"countryCode":"AT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"BA","productImageUrl":""},{"countryCode":"BE","productImageUrl":""},{"countryCode":"BG","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"CHD","productImageUrl":""},{"countryCode":"CHF","productImageUrl":""},{"countryCode":"CHI","productImageUrl":""},{"countryCode":"CY","productImageUrl":""},{"countryCode":"CZ","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"DE","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"DK","productImageUrl":""},{"countryCode":"EE","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"ES","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"FI","productImageUrl":""},{"countryCode":"FR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"GB","productImageUrl":""},{"countryCode":"GR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"HR","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"HU","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"IT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"LT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"LV","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"MD","productImageUrl":""},{"countryCode":"MK","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"NL","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"PL","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"PT","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"RO","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"RS","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"SE","productImageUrl":""},{"countryCode":"SI","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"SK","productImageUrl":"https://ortowp.noriks.com/app/uploads/2025/11/STEPHEEL-3831127625931-N-1__191125.jpg"},{"countryCode":"UA","productImageUrl":""},{"countryCode":"US","productImageUrl":""},{"countryCode":"XK","productImageUrl":""}],"shortNames":[{"countryCode":"AL","shortName":""},{"countryCode":"AT","shortName":""},{"countryCode":"BA","shortName":""},{"countryCode":"BE","shortName":""},{"countryCode":"BG","shortName":""},{"countryCode":"CHD","shortName":""},{"countryCode":"CHF","shortName":""},{"countryCode":"CHI","shortName":""},{"countryCode":"CY","shortName":""},{"countryCode":"CZ","shortName":""},{"countryCode":"DE","shortName":""},{"countryCode":"DK","shortName":""},{"countryCode":"EE","shortName":""},{"countryCode":"ES","shortName":""},{"countryCode":"FI","shortName":""},{"countryCode":"FR","shortName":""},{"countryCode":"GB","shortName":""},{"countryCode":"GR","shortName":""},{"countryCode":"HR","shortName":""},{"countryCode":"HU","shortName":""},{"countryCode":"IT","shortName":""},{"countryCode":"LT","shortName":""},{"countryCode":"LV","shortName":""},{"countryCode":"MD","shortName":""},{"countryCode":"MK","shortName":""},{"countryCode":"NL","shortName":""},{"countryCode":"PL","shortName":""},{"countryCode":"PT","shortName":""},{"countryCode":"RO","shortName":""},{"countryCode":"RS","shortName":""},{"countryCode":"SE","shortName":""},{"countryCode":"SI","shortName":""},{"countryCode":"SK","shortName":""},{"countryCode":"UA","shortName":""},{"countryCode":"US","shortName":""},{"countryCode":"XK","shortName":""}],"originalPrices":[{"countryCode":"IT","currencySymbol":"€","price":11.95},{"countryCode":"LT","currencySymbol":"€","price":11.95},{"countryCode":"PT","currencySymbol":"€","price":11.95},{"countryCode":"SI","currencySymbol":"€","price":11.95},{"countryCode":"LV","currencySymbol":"€","price":11.95},{"countryCode":"RS","currencySymbol":"rsd","price":1399},{"countryCode":"RO","currencySymbol":"lei","price":60.99},{"countryCode":"SK","currencySymbol":"€","price":11.95},{"countryCode":"PL","currencySymbol":"zł","price":51},{"countryCode":"MK","currencySymbol":"ден","price":739},{"countryCode":"NL","currencySymbol":"€","price":11.95},{"countryCode":"AT","currencySymbol":"€","price":11.95},{"countryCode":"BG","currencySymbol":"лв.","price":11.99},{"countryCode":"CZ","currencySymbol":"Kč","price":289},{"countryCode":"DE","currencySymbol":"€","price":11.95},{"countryCode":"EE","currencySymbol":"€","price":11.95},{"countryCode":"ES","currencySymbol":"€","price":11.95},{"countryCode":"FR","currencySymbol":"€","price":11.95},{"countryCode":"GR","currencySymbol":"€","price":11.95},{"countryCode":"HR","currencySymbol":"€","price":11.95},{"countryCode":"HU","currencySymbol":"Ft","price":4590}],"reducedPrices":[{"countryCode":"IT","currencySymbol":"€","price1":3.99},{"countryCode":"LT","currencySymbol":"€","price1":3.99},{"countryCode":"PT","currencySymbol":"€","price1":3.99},{"countryCode":"SI","currencySymbol":"€","price1":3.99},{"countryCode":"LV","currencySymbol":"€","price1":2.99},{"countryCode":"RS","currencySymbol":"rsd","price1":349},{"countryCode":"RO","currencySymbol":"lei","price1":14.99},{"countryCode":"SK","currencySymbol":"€","price1":3.99},{"countryCode":"PL","currencySymbol":"zł","price1":17},{"countryCode":"MK","currencySymbol":"ден","price1":189},{"countryCode":"NL","currencySymbol":"€","price1":3.99},{"countryCode":"AT","currencySymbol":"€","price1":3.99},{"countryCode":"BG","currencySymbol":"лв.","price1":2.99},{"countryCode":"CZ","currencySymbol":"Kč","price1":99},{"countryCode":"DE","currencySymbol":"€","price1":3.99},{"countryCode":"EE","currencySymbol":"€","price1":3.99},{"countryCode":"ES","currencySymbol":"€","price1":3.99},{"countryCode":"FR","currencySymbol":"€","price1":2.99},{"countryCode":"GR","currencySymbol":"€","price1":3.99},{"countryCode":"HR","currencySymbol":"€","price1":4.99},{"countryCode":"HU","currencySymbol":"Ft","price1":1099}],"retailPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"spMinimumPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"forcedMinimumPrices":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":""},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":""},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":""},{"countryCode":"DE","value":""},{"countryCode":"DK","value":""},{"countryCode":"EE","value":""},{"countryCode":"ES","value":""},{"countryCode":"FI","value":""},{"countryCode":"FR","value":""},{"countryCode":"GB","value":""},{"countryCode":"GR","value":""},{"countryCode":"HR","value":""},{"countryCode":"HU","value":""},{"countryCode":"IT","value":""},{"countryCode":"LT","value":""},{"countryCode":"LV","value":""},{"countryCode":"MD","value":""},{"countryCode":"MK","value":""},{"countryCode":"NL","value":""},{"countryCode":"PL","value":""},{"countryCode":"PT","value":""},{"countryCode":"RO","value":""},{"countryCode":"RS","value":""},{"countryCode":"SE","value":""},{"countryCode":"SI","value":""},{"countryCode":"SK","value":""},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"dateCreated":"2025-12-03T13:52:42.744Z","tags":["Related upsell"],"relatedProductDescriptions":[{"countryCode":"AL","relatedProductDescription":""},{"countryCode":"AT","relatedProductDescription":"Füllt einen zu großen Schuh aus, ohne zu reiben oder Blasen zu verursachen.\n"},{"countryCode":"BA","relatedProductDescription":""},{"countryCode":"BE","relatedProductDescription":""},{"countryCode":"BG","relatedProductDescription":"Попълва по-голяма обувка, без триене или причиняване на пришки.\n"},{"countryCode":"CHD","relatedProductDescription":""},{"countryCode":"CHF","relatedProductDescription":""},{"countryCode":"CHI","relatedProductDescription":""},{"countryCode":"CY","relatedProductDescription":""},{"countryCode":"CZ","relatedProductDescription":"Vyplní botu, která je příliš velká, aniž by dřela nebo způsobovala puchýře.\n"},{"countryCode":"DE","relatedProductDescription":"Füllt einen zu großen Schuh aus, ohne zu reiben oder Blasen zu verursachen.\n"},{"countryCode":"DK","relatedProductDescription":""},{"countryCode":"EE","relatedProductDescription":"Täidab liiga suure jalanõu ilma hõõrumise ja villide tekketa.\n"},{"countryCode":"ES","relatedProductDescription":"Ajusta el zapato que te queda demasiado grande, sin causar rozaduras ni ampollas.\n"},{"countryCode":"FI","relatedProductDescription":""},{"countryCode":"FR","relatedProductDescription":"Comble une chaussure trop grande, sans frottement ni ampoules.\n"},{"countryCode":"GB","relatedProductDescription":""},{"countryCode":"GR","relatedProductDescription":"Γεμίζει ένα παπούτσι που είναι πολύ μεγάλο, χωρίς να τρίβει ή να προκαλεί φουσκάλες.\n"},{"countryCode":"HR","relatedProductDescription":"Ispunjava cipelu koja je prevelika, bez trljanja ili stvaranja žuljeva.\n"},{"countryCode":"HU","relatedProductDescription":"Kitölti a túl nagy cipőt anélkül, hogy dörzsölne vagy vízhólyagot okozna.\n"},{"countryCode":"IT","relatedProductDescription":"Riempie una scarpa troppo grande, senza sfregare né causare vesciche.\n"},{"countryCode":"LT","relatedProductDescription":"Užpildo per didelį batą, netrinant ir nesukeliant pūslių.\n"},{"countryCode":"LV","relatedProductDescription":"Aizpilda pārāk lielu apavu, neradot berzi vai tulznas.\n"},{"countryCode":"MD","relatedProductDescription":""},{"countryCode":"MK","relatedProductDescription":"Го пополнува чевелот што е преголем, без триење или предизвикување плускавци.\n"},{"countryCode":"NL","relatedProductDescription":"Vult een schoen die te groot is, zonder te schuren of blaren te veroorzaken.\n"},{"countryCode":"PL","relatedProductDescription":"Wypełnia zbyt luźny but dla lepszego dopasowania bez otarć i pęcherzy.\n"},{"countryCode":"PT","relatedProductDescription":"Basta colocar no seu calçado, sem roçar nem causar bolhas.\n"},{"countryCode":"RO","relatedProductDescription":"Completează pantofii prea largi, fără a provoca frecare sau bătături.\n"},{"countryCode":"RS","relatedProductDescription":"Popunjava cipelu koja je prevelika, bez trenja ili stvaranja žuljeva.\n"},{"countryCode":"SE","relatedProductDescription":""},{"countryCode":"SI","relatedProductDescription":"Zapolni prevelik čevelj, ne da bi drgnila ali povzročala žulje.\n"},{"countryCode":"SK","relatedProductDescription":"Vyplní topánku, ktorá je príliš veľká, bez trenia alebo spôsobovania pľuzgierov.\n"},{"countryCode":"UA","relatedProductDescription":""},{"countryCode":"US","relatedProductDescription":""},{"countryCode":"XK","relatedProductDescription":""}],"isDeleted":false,"brandId":"68f0942607a0f5b28273c985","isRelatedProduct":true,"woocommerceCountrySkus":[{"countryCode":"AL","woocommerceCountrySku":""},{"countryCode":"AT","woocommerceCountrySku":""},{"countryCode":"BA","woocommerceCountrySku":""},{"countryCode":"BE","woocommerceCountrySku":""},{"countryCode":"BG","woocommerceCountrySku":""},{"countryCode":"CHD","woocommerceCountrySku":""},{"countryCode":"CHF","woocommerceCountrySku":""},{"countryCode":"CHI","woocommerceCountrySku":""},{"countryCode":"CY","woocommerceCountrySku":""},{"countryCode":"CZ","woocommerceCountrySku":""},{"countryCode":"DE","woocommerceCountrySku":""},{"countryCode":"DK","woocommerceCountrySku":""},{"countryCode":"EE","woocommerceCountrySku":""},{"countryCode":"ES","woocommerceCountrySku":""},{"countryCode":"FI","woocommerceCountrySku":""},{"countryCode":"FR","woocommerceCountrySku":""},{"countryCode":"GB","woocommerceCountrySku":""},{"countryCode":"GR","woocommerceCountrySku":""},{"countryCode":"HR","woocommerceCountrySku":""},{"countryCode":"HU","woocommerceCountrySku":""},{"countryCode":"IT","woocommerceCountrySku":""},{"countryCode":"LT","woocommerceCountrySku":""},{"countryCode":"LV","woocommerceCountrySku":""},{"countryCode":"MD","woocommerceCountrySku":""},{"countryCode":"MK","woocommerceCountrySku":""},{"countryCode":"NL","woocommerceCountrySku":""},{"countryCode":"PL","woocommerceCountrySku":""},{"countryCode":"PT","woocommerceCountrySku":""},{"countryCode":"RO","woocommerceCountrySku":""},{"countryCode":"RS","woocommerceCountrySku":""},{"countryCode":"SE","woocommerceCountrySku":""},{"countryCode":"SI","woocommerceCountrySku":""},{"countryCode":"SK","woocommerceCountrySku":""},{"countryCode":"UA","woocommerceCountrySku":""},{"countryCode":"US","woocommerceCountrySku":""},{"countryCode":"XK","woocommerceCountrySku":""}],"cart":{"btnQty1":"<strong>1 + 1 GRATIS</strong>","btnQty2":"<strong>2 + 2 GRATIS</strong>","btnQty3":"<strong>3 + 3 GRATIS</strong>"},"image":"67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg","productBrands":[],"additionalVariations":[{"countryCode":"AL","countryId":"67ef6b8b5ab6730d795d527d","realVariations":[],"variations":[]},{"countryCode":"AT","countryId":"5da8661a4ca2c106ccdafa80","realVariations":[],"variations":[]},{"countryCode":"BA","countryId":"681b05544851b847384f0c8d","realVariations":[],"variations":[]},{"countryCode":"BE","countryId":"625423170a34cb2d21d80eb2","realVariations":[],"variations":[]},{"countryCode":"BG","countryId":"5e1475d7704e733d3ec7fae4","realVariations":[],"variations":[]},{"countryCode":"CHD","countryId":"60db0f6d9d62d24c3230951f","realVariations":[],"variations":[]},{"countryCode":"CHF","countryId":"60db0f7e9d62d24c32309523","realVariations":[],"variations":[]},{"countryCode":"CHI","countryId":"60db0f769d62d24c32309521","realVariations":[],"variations":[]},{"countryCode":"CY","countryId":"679c895de23ca17aaed5d6aa","realVariations":[],"variations":[]},{"countryCode":"CZ","countryId":"5e1475f0704e73d3c0c7fae6","realVariations":[],"variations":[]},{"countryCode":"DE","countryId":"5dca6943ac9d992456b69f8e","realVariations":[],"variations":[]},{"countryCode":"DK","countryId":"69145a8105bee56fe6b56506","realVariations":[],"variations":[]},{"countryCode":"EE","countryId":"621e2b44dc6bc1a6d8290dc7","realVariations":[],"variations":[]},{"countryCode":"ES","countryId":"5e147598704e738ff3c7fae0","realVariations":[],"variations":[]},{"countryCode":"FI","countryId":"6286160ec8ee262958e17186","realVariations":[],"variations":[]},{"countryCode":"FR","countryId":"5f89955741605719d21d15a5","realVariations":[],"variations":[]},{"countryCode":"GB","countryId":"613873bd3536f31b20fe1d92","realVariations":[],"variations":[]},{"countryCode":"GR","countryId":"5ed7a071a74c373c0d4ce615","realVariations":[],"variations":[]},{"countryCode":"HR","countryId":"5e14761b704e7345c1c7faeb","realVariations":[],"variations":[]},{"countryCode":"HU","countryId":"5e147642704e73e928c7faed","realVariations":[],"variations":[]},{"countryCode":"IT","countryId":"5d9c86730336b70cbd1315ba","realVariations":[],"variations":[]},{"countryCode":"LT","countryId":"621e2ac9dc6bc1a6d8290dc5","realVariations":[],"variations":[]},{"countryCode":"LV","countryId":"621e2b1edc6bc1a6d8290dc6","realVariations":[],"variations":[]},{"countryCode":"MD","countryId":"63fdbcd990e73c4ade0bf7fc","realVariations":[],"variations":[]},{"countryCode":"MK","countryId":"679c8a0fd52c906b3010917d","realVariations":[],"variations":[]},{"countryCode":"NL","countryId":"5f3ba871ab5e2237240d8c07","realVariations":[],"variations":[]},{"countryCode":"PL","countryId":"5dca6952ac9d99150db69f92","realVariations":[],"variations":[]},{"countryCode":"PT","countryId":"5e1475a0704e736a90c7fae2","realVariations":[],"variations":[]},{"countryCode":"RO","countryId":"5dca694aac9d997e30b69f90","realVariations":[],"variations":[]},{"countryCode":"RS","countryId":"66cd8dccea7d462f3d38146a","realVariations":[],"variations":[]},{"countryCode":"SE","countryId":"6254232c0a34cb2d21d80eb4","realVariations":[],"variations":[]},{"countryCode":"SI","countryId":"5d9c85fc0336b742021314d6","realVariations":[],"variations":[]},{"countryCode":"SK","countryId":"5e14758c704e7328bac7fade","realVariations":[],"variations":[]},{"countryCode":"UA","countryId":"67ac55b9a0d8edda0bdedc21","realVariations":[],"variations":[]},{"countryCode":"US","countryId":"6231edeb9398e11abe08a9f9","realVariations":[],"variations":[]},{"countryCode":"XK","countryId":"67f8a6fc14c174d4567c5da1","realVariations":[],"variations":[]}],"bundleProducts":"","checkoutExtra":"","customBtnQtyText":false,"isBundle":false,"outOfStockPT":false,"outOfStockRO":false,"outOfStockSI":false,"productCogs":[{"countryCode":"AL","value":""},{"countryCode":"AT","value":0.99},{"countryCode":"BA","value":""},{"countryCode":"BE","value":""},{"countryCode":"BG","value":0.99},{"countryCode":"CHD","value":""},{"countryCode":"CHF","value":""},{"countryCode":"CHI","value":""},{"countryCode":"CY","value":""},{"countryCode":"CZ","value":0.99},{"countryCode":"DE","value":0.99},{"countryCode":"DK","value":""},{"countryCode":"EE","value":0.99},{"countryCode":"ES","value":0.99},{"countryCode":"FI","value":""},{"countryCode":"FR","value":0.99},{"countryCode":"GB","value":""},{"countryCode":"GR","value":0.99},{"countryCode":"HR","value":0.99},{"countryCode":"HU","value":0.99},{"countryCode":"IT","value":0.99},{"countryCode":"LT","value":0.99},{"countryCode":"LV","value":0.99},{"countryCode":"MD","value":""},{"countryCode":"MK","value":0.99},{"countryCode":"NL","value":0.99},{"countryCode":"PL","value":0.99},{"countryCode":"PT","value":0.99},{"countryCode":"RO","value":0.99},{"countryCode":"RS","value":0.99},{"countryCode":"SE","value":""},{"countryCode":"SI","value":0.99},{"countryCode":"SK","value":0.99},{"countryCode":"UA","value":""},{"countryCode":"US","value":""},{"countryCode":"XK","value":""}],"relatedProducts":[],"reviewsTags":[],"useDropdownForVariations":false,"woocommerceProductIds":[{"countryCode":"AL","woocommerceProductId":""},{"countryCode":"AT","woocommerceProductId":117566},{"countryCode":"BA","woocommerceProductId":""},{"countryCode":"BE","woocommerceProductId":""},{"countryCode":"BG","woocommerceProductId":781382},{"countryCode":"CHD","woocommerceProductId":""},{"countryCode":"CHF","woocommerceProductId":""},{"countryCode":"CHI","woocommerceProductId":""},{"countryCode":"CY","woocommerceProductId":""},{"countryCode":"CZ","woocommerceProductId":2090968},{"countryCode":"DE","woocommerceProductId":117873},{"countryCode":"DK","woocommerceProductId":""},{"countryCode":"EE","woocommerceProductId":90739},{"countryCode":"ES","woocommerceProductId":69545},{"countryCode":"FI","woocommerceProductId":""},{"countryCode":"FR","woocommerceProductId":27034},{"countryCode":"GB","woocommerceProductId":""},{"countryCode":"GR","woocommerceProductId":969990},{"countryCode":"HR","woocommerceProductId":910939},{"countryCode":"HU","woocommerceProductId":2291123},{"countryCode":"IT","woocommerceProductId":1554570},{"countryCode":"LT","woocommerceProductId":180947},{"countryCode":"LV","woocommerceProductId":91154},{"countryCode":"MD","woocommerceProductId":""},{"countryCode":"MK","woocommerceProductId":232915},{"countryCode":"NL","woocommerceProductId":194567},{"countryCode":"PL","woocommerceProductId":2243283},{"countryCode":"PT","woocommerceProductId":740141},{"countryCode":"RO","woocommerceProductId":1118252},{"countryCode":"RS","woocommerceProductId":205252},{"countryCode":"SE","woocommerceProductId":""},{"countryCode":"SI","woocommerceProductId":981495},{"countryCode":"SK","woocommerceProductId":1647687},{"countryCode":"UA","woocommerceProductId":""},{"countryCode":"US","woocommerceProductId":""},{"countryCode":"XK","woocommerceProductId":""}],"acfs":[{"countryCode":"IT","number_of_pieces_in_a_set":""},{"countryCode":"LT","number_of_pieces_in_a_set":""},{"countryCode":"PT","number_of_pieces_in_a_set":""},{"countryCode":"SI","number_of_pieces_in_a_set":""},{"countryCode":"LV","number_of_pieces_in_a_set":""},{"countryCode":"RS","number_of_pieces_in_a_set":""},{"countryCode":"RO","number_of_pieces_in_a_set":""},{"countryCode":"SK","number_of_pieces_in_a_set":""},{"countryCode":"PL","number_of_pieces_in_a_set":""},{"countryCode":"MK","number_of_pieces_in_a_set":""},{"countryCode":"NL","number_of_pieces_in_a_set":""},{"countryCode":"AT","number_of_pieces_in_a_set":""},{"countryCode":"BG","number_of_pieces_in_a_set":""},{"countryCode":"CZ","number_of_pieces_in_a_set":""},{"countryCode":"DE","number_of_pieces_in_a_set":""},{"countryCode":"EE","number_of_pieces_in_a_set":""},{"countryCode":"ES","number_of_pieces_in_a_set":""},{"countryCode":"FR","number_of_pieces_in_a_set":""},{"countryCode":"GR","number_of_pieces_in_a_set":""},{"countryCode":"HR","number_of_pieces_in_a_set":""},{"countryCode":"HU","number_of_pieces_in_a_set":""}],"additionalVariationsPriceOffsets":[{"countryCode":"IT","countryId":"5d9c86730336b70cbd1315ba","value":null},{"countryCode":"LT","countryId":"621e2ac9dc6bc1a6d8290dc5","value":null},{"countryCode":"PT","countryId":"5e1475a0704e736a90c7fae2","value":null},{"countryCode":"SI","countryId":"5d9c85fc0336b742021314d6","value":null},{"countryCode":"LV","countryId":"621e2b1edc6bc1a6d8290dc6","value":null},{"countryCode":"RS","countryId":"66cd8dccea7d462f3d38146a","value":null},{"countryCode":"RO","countryId":"5dca694aac9d997e30b69f90","value":null},{"countryCode":"SK","countryId":"5e14758c704e7328bac7fade","value":null},{"countryCode":"PL","countryId":"5dca6952ac9d99150db69f92","value":null},{"countryCode":"MK","countryId":"679c8a0fd52c906b3010917d","value":null},{"countryCode":"NL","countryId":"5f3ba871ab5e2237240d8c07","value":null},{"countryCode":"AT","countryId":"5da8661a4ca2c106ccdafa80","value":null},{"countryCode":"BG","countryId":"5e1475d7704e733d3ec7fae4","value":null},{"countryCode":"CZ","countryId":"5e1475f0704e73d3c0c7fae6","value":null},{"countryCode":"DE","countryId":"5dca6943ac9d992456b69f8e","value":null},{"countryCode":"EE","countryId":"621e2b44dc6bc1a6d8290dc7","value":null},{"countryCode":"ES","countryId":"5e147598704e738ff3c7fae0","value":null},{"countryCode":"FR","countryId":"5f89955741605719d21d15a5","value":null},{"countryCode":"GR","countryId":"5ed7a071a74c373c0d4ce615","value":null},{"countryCode":"HR","countryId":"5e14761b704e7345c1c7faeb","value":null},{"countryCode":"HU","countryId":"5e147642704e73e928c7faed","value":null}],"discounts":[{"countryCode":"IT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"LT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"PT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"SI","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"LV","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"RS","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"RO","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"SK","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"PL","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"MK","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"NL","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"AT","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"BG","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"CZ","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"DE","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"EE","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"ES","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"FR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"GR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"HR","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"},{"countryCode":"HU","discount2":"-1","discount3":"-1","discount4":"-1","discount5":"-1","discountX":"-1","chooseQuantityX":"6","bestOfferBanner":-1,"freeShippingAboveAmount":"0"}],"manualsLinks":[{"countryCode":"IT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"LT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"PT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"SI","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"LV","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"RS","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"RO","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"SK","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"PL","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"MK","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"NL","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"AT","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"BG","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"CZ","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"DE","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"EE","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"ES","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"FR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"GR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"HR","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"},{"countryCode":"HU","manualLink":"https://images.hs-plus.com/assets-dashboard/product-manuals-v2/TRAPKO_prirocnik_SI.pdf"}],"variations":[],"templates":[],"id":"693040aa8f426861019e9c10","deliveryDates":[{"countryId":"5d9c86730336b70cbd1315ba","countryCode":"IT","date":"05.01.2026"},{"countryId":"621e2ac9dc6bc1a6d8290dc5","countryCode":"LT","date":"05.01.2026"},{"countryId":"5d9c85fc0336b742021314d6","countryCode":"SI","date":"05.01.2026"},{"countryId":"621e2b1edc6bc1a6d8290dc6","countryCode":"LV","date":"05.01.2026"},{"countryId":"66cd8dccea7d462f3d38146a","countryCode":"RS","date":"05.01.2026"},{"countryId":"5dca694aac9d997e30b69f90","countryCode":"RO","date":"05.01.2026"},{"countryId":"5e14758c704e7328bac7fade","countryCode":"SK","date":"05.01.2026"},{"countryId":"5dca6952ac9d99150db69f92","countryCode":"PL","date":"05.01.2026"},{"countryId":"679c8a0fd52c906b3010917d","countryCode":"MK","date":"05.01.2026"},{"countryId":"5f3ba871ab5e2237240d8c07","countryCode":"NL","date":"05.01.2026"},{"countryId":"5da8661a4ca2c106ccdafa80","countryCode":"AT","date":"05.01.2026"},{"countryId":"5e1475d7704e733d3ec7fae4","countryCode":"BG","date":"05.01.2026"},{"countryId":"5e1475f0704e73d3c0c7fae6","countryCode":"CZ","date":"05.01.2026"},{"countryId":"5dca6943ac9d992456b69f8e","countryCode":"DE","date":"05.01.2026"},{"countryId":"621e2b44dc6bc1a6d8290dc7","countryCode":"EE","date":"05.01.2026"},{"countryId":"5f89955741605719d21d15a5","countryCode":"FR","date":"05.01.2026"},{"countryId":"5ed7a071a74c373c0d4ce615","countryCode":"GR","date":"05.01.2026"},{"countryId":"5e14761b704e7345c1c7faeb","countryCode":"HR","date":"05.01.2026"},{"countryId":"5e147642704e73e928c7faed","countryCode":"HU","date":"05.01.2026"}],"enableOriginalPriceOffset":false}];
    var globalPrices = {
        op1: '36.95',
        op2: '73.90',
        op3: '110.85',
        op4: '147.80',
        op5: '184.75',
        opx: '221.70',
        rp1: '18.99',
        rp2: '29.62',
        rp3: '41.59',
        rp4: '55.45',
        rp5: '49.37',
        rpx: '59.25',
    };
    var decimals = 2;
    var redPrice1 = 18.99;
    dynPriceSet = false;

    var purchaseTypePickers = [];
    var selectedPurchaseTypePicker = null;
    

    (function () {
        setTimeout(function() {
            applyDynamicPrice();
            modifyGlobalPrices(redPrice1);
            setSelectedVariations();
            toggleCartButtonStock();
            dyncamicCheckoutHandlePrice();
            if(typeof initPickerSelector === 'function'){
             initPickerSelector();   
            }
            if(typeof initSubscriptionSelector === 'function'){
             initSubscriptionSelector();   
            }
            markOutOfStock2();
            recalculatePrices();
            setLinkDynamicCart();
        }, 1200);
    })();

    function dyncamicCheckoutHandlePrice(){
      $('.dp-all').css('display', 'inline-block');
    }
    
    function getCookieDynCheckout(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
        }
        return "";
    }
    
    
    function initSetLink(){
            try{
                setLinkDynamicCart();
            }catch(err){
                throw err;
            } 
        }
    function setLink(){
        try{
            setLinkDynamicCart();
        }catch(err){
            throw err;
        } 
    }
    
    

    function dynamicCheckoutColorVariationClicked(propertyId, optionId, p, variationIndex){
      let property = propertiesArr.find(pr => pr.id === propertyId);
      let option = property.options.find(opt => opt.id === optionId);

      let selectedVariationValueLabel = document.getElementById("selected-color-variation-value");
      selectedVariationValueLabel.innerText = option.name;

      //remove borders on all variations
      for(let opt = 0; opt < propertiesArr[p].options.length; opt++){
        let optionElement = document.getElementById(propertiesArr[p].id + "-" + propertiesArr[p].options[opt].id + "-" + p);
        if(!!optionElement){
          optionElement.classList.remove('selected');
          optionElement.setAttribute("selected-option", "false");
        }
      }
      //add border to selected variation
      let selectedVariationButtonElement = document.getElementById(propertyId + "-" + optionId + "-" + p);
      selectedVariationButtonElement.classList.add('selected');
      selectedVariationButtonElement.setAttribute("selected-option", "true");
      
      toggleCartButtonStock();
      markOutOfStock2();
      recalculatePrices();
      setLinkDynamicCart();
    }//dynamicCheckoutColorVariationClicked
    
    
  async function recalculatePrices(){
    var originalPrice = 36.95
    var retail_price = 0;
    globalRetailPrice = 0;
    var forced_minimum_price = 0;
    globalMinimumPrice = 0;
    var sp_minimum_price = 0;
    globalSpMinimumPrice = 0;
    var countryMinimumPrice = 6.99;
    var productCogs = 6.99;
    var additionalVariationProductPrice = 0;
    var additionalVariationsPrices = [];
    var decimals = 2;
    var altDecimals = 2;
    var altCurrencySymbol = '€';
    var defaultReducedPrice = 18.99;
    price = setDefaultReducedPrice(price, defaultReducedPrice);
    var countryCurrencySymbol = '€';
    var showAltCurrencyPrice = false;
    var altCurrencyPriceRate = 1;
    var altCurrencyPriceSymbol = '€';
    var enableOriginalPriceOffset = false;

    var skus = getAllSkus();
    var pr2;

    if(country !== 'HR'){
        pr2 = getPr(skus);
    }else {
        //ignore cookie price on HR
        pr2 = '';
    }

    var pr2 = getPr(skus);
    altDynPr = false;
    if (pr2 === '') {
        pr2 = getCookieDynCheckout('sp') || getParam('sp');
        if(pr2 === 0){
            pr2 = getCookieDynCheckout('spe') || getParam('spe');
            spe = getCookieDynCheckout('spe') || getParam('spe');
            altDynPr = true;
            if(spe !== 0){
                altDynPr = true;
            }
        }
    }

    if(getCookieDynCheckout('sp') || getCookieDynCheckout('spe')) {
        pr2 = psp(pr2)
    }

    sp = pr2;
    spe = pr2;
    if(urlIncludesSubstrings(currentUrl, substringsToCheck) || urlIncludesSubstrings(currentUrl, substringsToCheckMailing) 
    || getCookieDynCheckout('utm_source') === 'mailing' || getCookieDynCheckout('utm_mp_source') === 'mailing'
    || getCookieDynCheckout('utm_source') === 'google' || getCookieDynCheckout('utm_mp_source') === 'google'){
        price = pr2;
    }   else {
        price = sp;
        }    

    if (country === 'HR' && altDynPr === false){
        if(urlIncludesSubstrings(currentUrl, substringsToCheck) || getCookieDynCheckout('utm_source') === 'google' || getCookieDynCheckout('utm_mp_source') === 'google' ) {
            price = price / 1;
        }

    }
    
    
    let selectedOptions = [];
    for(let pr = 0; pr < propertiesArr.length; pr++){
      let propertyId = propertiesArr[pr].id;
      let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
      if(selectedOptionElements.length > 0){
        selectedOptions.push(propertiesArr[pr].options.find(opt => opt.id === selectedOptionElements[0].value));
      } 
    }
    //find correct variation
    let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptions.map(sO => sO.id).sort().join(','));
    //PRICE LOGIC--------------------------------------------------------------------------------------------
    
    var cookieUtmSource = getCookieDynCheckout('utm_source')
    var cookieUtmMpSource = getCookieDynCheckout('utm_mp_source')
    var cookiefbclid= getCookieDynCheckout('fbclid')
    var cookieSaleCoupon = getCookieDynCheckout('coupon')

    var globalRetailConverted = globalRetailPrice;
    var globalMinimumConverted = globalMinimumPrice;
    
    var isUtmPresent = (
    urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=', 'fbclid=']) || 
    (cookieUtmMpSource && cookieUtmMpSource !== '') || 
    (cookieUtmSource && cookieUtmSource !== '') ||
    (cookiefbclid && cookiefbclid !== '')
    );
    var isGoogleSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=google', 'utm_source=google']) || cookieUtmMpSource === 'google' || cookieUtmSource === 'google';
    var isNativeHsSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=nativehs', 'utm_source=nativehs']) || cookieUtmMpSource === 'nativehs' || cookieUtmSource === 'nativehs';
    var isNewsLetterSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=newsletter', 'utm_source=newsletter']) || cookieUtmMpSource === 'newsletter' || cookieUtmSource === 'newsletter';
    var isMailingSource = currentUrl.includes('utm_source=mailing', 'utm_mp_source=mailing') || cookieUtmMpSource === 'mailing' || cookieUtmSource === 'mailing';
    var isTikTokSource = currentUrl.includes('utm_source=tiktok', 'utm_mp_source=tiktok') || cookieUtmMpSource === 'tiktok' || cookieUtmSource === 'tiktok';
    var isOtherSource = (urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=']) || cookieUtmMpSource !== '' || cookieUtmSource !== '') && !isGoogleSource && !isMailingSource && !isNativeHsSource && !isNewsLetterSource && !isTikTokSource;
    var hasFbclid = Boolean(urlIncludesSubstrings(currentUrl, ['fbclid=']) || (cookiefbclid && cookiefbclid !== ''));
    var hasSaleCoupon = urlIncludesSubstrings(currentUrl, ['utm_content=sale10']) || getCookieDynCheckout('coupon') === 'sale10';


    if (isUtmPresent) {
      if (isOtherSource || hasFbclid) {
          if (globalRetailPrice != '0') {
              price = globalRetailPrice;
          }else {
              price = defaultReducedPrice >= countryMinimumPrice ? defaultReducedPrice : countryMinimumPrice;
          }
      } else if (isGoogleSource || isMailingSource || isNativeHsSource || isNewsLetterSource || isTikTokSource) {
          if (sp) {
              if (globalMinimumPrice) {
                  price = sp >= globalSpMinimumPrice ? sp : globalSpMinimumPrice;
              } else {
                  price = sp >= countryMinimumPrice ? sp : defaultReducedPrice;
              }
          } else {
              price = defaultReducedPrice >= countryMinimumPrice ? defaultReducedPrice : countryMinimumPrice;
          }
      }

    }else if (defaultReducedPrice > countryMinimumPrice){
        price = defaultReducedPrice;
    }else {
        price = countryMinimumPrice; 
    }

    globalPrices.op1 = originalPrice.toString();
    globalPrices.rp1 = price.toString();

      
    //--------------------------------------------------------------------------------------------------------
    

    initSetLink();
    handleAdditionalVariations(price, countryCurrencySymbol, additionalVariationsPrices, additionalVariationProductPrice,country)

    var wd = getParam('sd');
    var ds = getDsc(wd)

    if (price == 0 && globalPrices && globalPrices.rp1) {
        price = Number(globalPrices.rp1);
    }

    //-------------------------------------------------- OFFSETS


    if(selectedVariation && (selectedVariation.priceOffset > 0 || selectedVariation.priceOffset < 0)){
      price = price + selectedVariation.priceOffset;
      if (enableOriginalPriceOffset){
      originalPrice = originalPrice + selectedVariation.priceOffset;
      }
    }
    
    //----------------------------------------------------------------------------OFFSETS


    if (price !== 0 && typeof price == 'number') {
      //if sd parameter exists, calculate OP, if not, set it default
      var op = (!wd || wd === 0)
        ? Number(originalPrice).toFixed(decimals)
        : (Number(originalPrice) * ds).toFixed(decimals);

    var rp1 = price.toFixed(decimals);
    var rp2 = (price * 0.78).toFixed(decimals);
    var rp3 = (price * 0.73).toFixed(decimals);
    var rp4 = (price * 0.73).toFixed(decimals);
    var rp5 = (price * 0.52).toFixed(decimals);
    var rpx = (price * 0.52).toFixed(decimals);
      const roundQuantityPrice = function (price, salePrice, countryCode){
    try {
    switch(typeof price){
    case 'number': {
        price = price;
        break;
    }
    case 'string': {
        price = parseFloat(price);
        break;
    }
    }
    switch(typeof salePrice){
      case 'number': {
          salePrice = salePrice;
          break;
      }
      case 'string': {
          salePrice = parseFloat(salePrice);
          break;
      }
    }
    }catch(err){
        return price;
    }

    // Convert price and sale price to float for calculation
    price = parseFloat(price.toString().replace(',', '.'));
    salePrice = parseFloat(salePrice.toString().replace(',', '.'));

    // Ensure we don't exceed the original or sale price
    const maxPrice = Math.min(price, salePrice);

    // Determine number of decimals in the original price
    const originalDecimals = price.toString().split('.')[1]?.length || 0;
    const multiplier = Math.pow(10, originalDecimals);

    let roundedPrice;
    let higherPrice;

    // Apply rounding based on the country code
    switch (countryCode) {
      case 'HU':
        roundedPrice = Math.ceil(price / 100) * 100 + 90;
        higherPrice = roundedPrice + 100;
        price = (higherPrice <= maxPrice + 200) ? higherPrice : roundedPrice;
        break;
      case 'CZ':
        roundedPrice = Math.ceil(price / 10) * 10 - 1;
        higherPrice = roundedPrice + 10;
        price = (higherPrice <= maxPrice + 12) ? higherPrice : roundedPrice;
        break;
      case 'RO':
        roundedPrice = Math.floor(price) + 0.99;
        higherPrice = Math.floor(price) + 1.99;
        price = (higherPrice <= maxPrice + 2) ? higherPrice : roundedPrice;
        break;
      case 'PL':
        roundedPrice = Math.floor(price) + 0.00;
        higherPrice = Math.floor(price) + 2.00;
        price = (higherPrice <= maxPrice + 2) ? higherPrice : roundedPrice;
        break;
      case 'RS':
        roundedPrice = Math.floor(price / 10) * 10 + 9;
        price = (roundedPrice <= maxPrice + 9) ? roundedPrice : maxPrice;
        break;
      case 'MK':
        roundedPrice = Math.floor(price / 10) * 10 + 9;
        price = (roundedPrice <= maxPrice + 9) ? roundedPrice : maxPrice;
        break;
      default:
        const priceCents = Math.floor(price * multiplier);
        const salePriceCents = Math.floor(salePrice * multiplier);
        const fractionalPartCents = priceCents % multiplier;
        const roundedFractionalPartCents = fractionalPartCents <= (49 * multiplier / 100) ? (49 * multiplier / 100) : (99 * multiplier / 100);
        const finalPriceCents = Math.min(Math.floor(priceCents / multiplier) * multiplier + roundedFractionalPartCents, salePriceCents);
        price = finalPriceCents / multiplier;
        break;
    }

    return price;//.toFixed(originalDecimals);
    }
        //round quantity prices
        rp1 = rp1;
        if(parseFloat(rp2) < parseFloat(rp1)){
            rp2 = roundQuantityPrice(rp2, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp3) < parseFloat(rp1)){
            rp3 = roundQuantityPrice(rp3, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp4) < parseFloat(rp1)){
            rp4 = roundQuantityPrice(rp4, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rp5) < parseFloat(rp1)){
            rp5 = roundQuantityPrice(rp5, rp1, countrySettings.countryCode).toFixed(decimals);
        }
        if(parseFloat(rpx) < parseFloat(rp1)){
            rpx = roundQuantityPrice(rpx, rp1, countrySettings.countryCode).toFixed(decimals);
        }

        var rp2t = (rp2 * 2).toFixed(decimals);
        var rp3t = (rp3 * 3).toFixed(decimals);
        var rp4t = (rp4 * 4).toFixed(decimals);
        var rp5t = (rp5 * 5).toFixed(decimals);
        var rpxt = (rpx * 6).toFixed(decimals);

        var op2t = (op * 2).toFixed(decimals);
        var op3t = (op * 3).toFixed(decimals);
        var op4t = (op * 4).toFixed(decimals);
        var op5t = (op * 5).toFixed(decimals);
        var opxt = (op * 6).toFixed(decimals);

        var d1 = 100 - Math.round((rp1 / op) * 100);
        var d2 = 100 - Math.round((rp2 / op) * 100);
        var d3 = 100 - Math.round((rp3 / op) * 100);
        var d4 = 100 - Math.round((rp4 / op) * 100);
        var d5 = 100 - Math.round((rp5 / op) * 100);
        var dx = 100 - Math.round((rpx / op) * 100);

        var pd1 = (op - rp1).toFixed(decimals);
        var pd2 = ((2 * op) - (2 * rp2)).toFixed(decimals);
        var pd3 = ((3 * op) - (3 * rp3)).toFixed(decimals);
        var pd4 = ((4 * op) - (4 * rp4)).toFixed(decimals);
        var pd5 = ((5 * op) - (5 * rp5)).toFixed(decimals);
        var pdx = ((6 * op) - (6 * rpx)).toFixed(decimals);

        //alternative dynamic price (double currency)
        var altOp;
        var altOp2t;
        var altOp3t;
        var altOp4t;
        var altOp5t;
        var altOpxt;

        var altRp1t;
        var altRp2t;
        var altRp3t;
        var altRp4t;
        var altRp5t;
        var altRpxt;

        if(altDynPr){ 
            altOp = (op * 1).toFixed(altDecimals);
            altOp2t = (op2t * 1).toFixed(altDecimals);
            altOp3t = (op3t * 1).toFixed(altDecimals);
            altOp4t = (op4t * 1).toFixed(altDecimals);
            altOp5t = (op5t * 1).toFixed(altDecimals);
            altOpxt = (opxt * 1).toFixed(altDecimals);

            altRp1t = (rp1 * 1).toFixed(altDecimals);
            altRp2t = (rp2t * 1).toFixed(altDecimals);
            altRp3t = (rp3t * 1).toFixed(altDecimals);
            altRp4t = (rp4t * 1).toFixed(altDecimals);
            altRp5t = (rp5t * 1).toFixed(altDecimals);
            altRpxt = (rpxt * 1).toFixed(altDecimals);
        }

        else {
            if(country === 'HR'){
                altOp = (parseFloat(op)).toFixed(altDecimals);
                altOp2t = (parseFloat(op2t)).toFixed(altDecimals);
                altOp3t = (parseFloat(op3t)).toFixed(altDecimals);
                altOp4t = (parseFloat(op4t)).toFixed(altDecimals);
                altOp5t = (parseFloat(op5t)).toFixed(altDecimals);
                altOpxt = (parseFloat(opxt)).toFixed(altDecimals);

                altRp1t = (parseFloat(rp1)).toFixed(altDecimals);
                altRp2t = (parseFloat(rp2t)).toFixed(altDecimals);
                altRp3t = (parseFloat(rp3t)).toFixed(altDecimals);
                altRp4t = (parseFloat(rp4t)).toFixed(altDecimals);
                altRp5t = (parseFloat(rp5t)).toFixed(altDecimals);
                altRpxt = (parseFloat(rpxt)).toFixed(altDecimals);
            
                op = (op / 1).toFixed(decimals);
                op2t = (op2t / 1).toFixed(decimals);
                op3t = (op3t / 1).toFixed(decimals);
                op4t = (op4t / 1).toFixed(decimals);
                op5t = (op5t / 1).toFixed(decimals);
                opxt = (opxt / 1).toFixed(decimals);

            }
        }
        //IF WE OVERRIDE GLOBAL PRICES WITH OFFSETS THE PRICE KEEPS INCREASING
        if (globalPrices && selectedVariation && !selectedVariation.priceOffset > 0 && !selectedVariation.priceOffset < 0) {
            globalPrices.rp1 = rp1;
            globalPrices.rp2 = rp2t;
            globalPrices.rp3 = rp3t;
            globalPrices.rp4 = rp4t;
            globalPrices.rp5 = rp5t;
            globalPrices.rpx = rpxt;

            globalPrices.op1 = op;
            globalPrices.op2 = op2t;
            globalPrices.op3 = op3t;
            globalPrices.op4 = op4t;
            globalPrices.op5 = op5t;
            globalPrices.opx = opxt;
        }

        var p = {
            'op': op,
            'op_l': op+countryCurrencySymbol,
            'opnc': op,
            'opnc_l': op,
            'rp1':  rp1,
            'rp1_l':  rp1+countryCurrencySymbol,
            'rp1nc': rp1,
            'rp1nc_l': rp1,
            'rp2': rp2,
            'rp2_l': rp2+countryCurrencySymbol,
            'rp2nc': rp2,
            'rp2nc_l': rp2,
            'rp3': rp3,
            'rp3_l': rp3+countryCurrencySymbol,
            'rp3nc': rp3,
            'rp3nc_l': rp3,
            'rp4': rp4,
            'rp4_l': rp4+countryCurrencySymbol,
            'rp4nc': rp4,
            'rp4nc_l': rp4,
            'rp5': rp5,
            'rp5_l': rp5+countryCurrencySymbol,
            'rp5nc': rp5,
            'rp5nc_l': rp5,
            'rpx': rpx,
            'rpx_l': rpx+countryCurrencySymbol,
            'rpxnc': rpx,
            'rpxnc_l': rpx,
            'rp1t': rp1+countryCurrencySymbol,
            'rp1t_l': rp1+countryCurrencySymbol,
            'rp1tnc': rp1,
            'rp1tnc_l': rp1,
            'altRp1t': altRp1t+altCurrencySymbol,
            'rp2t': rp2t+countryCurrencySymbol,
            'rp2t_l': rp2t+countryCurrencySymbol,
            'rp2tnc': rp2t,
            'rp2tnc_l': rp2t,
            'altRp2t': altRp2t+altCurrencySymbol,
            'rp3t': rp3t+countryCurrencySymbol,
            'rp3t_l': rp3t+countryCurrencySymbol,
            'rp3tnc': rp3t,
            'rp3tnc_l': rp3t,
            'altRp3t': altRp3t+altCurrencySymbol,
            'rp4t': rp4t+countryCurrencySymbol,
            'rp4t_l': rp4t+countryCurrencySymbol,
            'rp4tnc': rp4t,
            'rp4tnc_l': rp4t,
            'altRp4t': altRp4t+altCurrencySymbol,
            'rp5t': rp5t+countryCurrencySymbol,
            'rp5t_l': rp5+countryCurrencySymbol,
            'rp5tnc': rp5,
            'rp5tnc_l': rp5,
            'altRp5t': altRp5t+altCurrencySymbol,
            'rpxt': rpxt+countryCurrencySymbol,
            'rpxt_l': rpx+countryCurrencySymbol,
            'rpxtnc': rpx,
            'rpxtnc_l': rpx,
            'altRpxt': altRpxt+altCurrencySymbol,
            'op1t': op,
            'op1t_l': op+countryCurrencySymbol,
            'altOp1t': altOp+altCurrencySymbol,
            'op2t': op2t,
            'op2t_l': op2t+countryCurrencySymbol,
            'altOp2t': altOp2t+altCurrencySymbol,
            'op3t': op3t,
            'op3t_l': op3t+countryCurrencySymbol,
            'altOp3t': altOp3t+altCurrencySymbol,
            'op4t': op4t,
            'op4t_l': op4t+countryCurrencySymbol,
            'altOp4t': altOp4t+altCurrencySymbol,
            'op5t': op5t,
            'op5t_l': op5t+countryCurrencySymbol,
            'altOp5t': altOp5t+altCurrencySymbol,
            'opxt': opxt,
            'opxt_l': opxt+countryCurrencySymbol,
            'altOpxt': altOpxt+altCurrencySymbol,
            'd1': d1,
            'd1_l': d1,
            'd2': d2,
            'd2_l': d2,
            'd3': d3,
            'd3_l': d3,
            'd4': d4,
            'd4_l': d4,
            'd5': d5,
            'd5_l': d5,
            'dx': dx,
            'dx_l': dx,
            'pd1': pd1,
            'pd2': pd2,
            'pd3': pd3,
            'pd4': pd4,
            'pd5': pd5,
            'pdx': pdx,
        }
        
        $('.dp-op').text(p.op);
        $('.dp-opnc').text(p.opnc);
        $('.dp-rp1').text(p.rp1);
        $('.dp-rp2').text(p.rp2);
        $('.dp-rp3').text(p.rp3);
        $('.dp-rp4').text(p.rp4);
        $('.dp-rp5').text(p.rp5);
        $('.dp-rpx').text(p.rpx);

        $('.dp-rp1nc').text(p.rp1nc);
        $('.dp-rp2nc').text(p.rp2nc);
        $('.dp-rp3nc').text(p.rp3nc);
        $('.dp-rp4nc').text(p.rp4nc);
        $('.dp-rp5nc').text(p.rp5nc);
        $('.dp-rpxnc').text(p.rpxnc);

        
        $('.dp-rp1t').text(p.rp1t);
        $('.dp-rp2t').text(p.rp2t);
        $('.dp-rp3t').text(p.rp3t);
        $('.dp-rp4t').text(p.rp4t);
        $('.dp-rp5t').text(p.rp5t);
        $('.dp-rpxt').text(p.rpxt);

        $('.dp-rp1tnc').text(p.rp1tnc);
        $('.dp-rp2tnc').text(p.rp2tnc);
        $('.dp-rp3tnc').text(p.rp3tnc);
        $('.dp-rp4tnc').text(p.rp4tnc);
        $('.dp-rp5tnc').text(p.rp5tnc);
        $('.dp-rpxtnc').text(p.rpxtnc);

        $('.dp-op1t').text(p.op1t);
        $('.dp-op2t').text(p.op2t);
        $('.dp-op3t').text(p.op3t);
        $('.dp-op4t').text(p.op4t);
        $('.dp-op5t').text(p.op5t);
        $('.dp-opxt').text(p.opxt);

        $('.dp-d1').text(p.d1);
        $('.dp-d2').text(p.d2);
        $('.dp-d3').text(p.d3);
        $('.dp-d4').text(p.d4);
        $('.dp-d5').text(p.d5);
        $('.dp-dx').text(p.dx);

        $('.dp-pd').text(p.pd1);
        $('.dp-pd2').text(p.pd2);
        $('.dp-pd3').text(p.pd3);
        $('.dp-pd4').text(p.pd4);
        $('.dp-pd5').text(p.pd5);
        $('.dp-pdx').text(p.pdx);

        //dymamic elements
        switch (selectedGlobalQuantity) {
        case 1: {
          // Reduced price
          const reducedPrice = p.rp1t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);

          // Reduced alt currency
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          // Original price
          const originalPrice = p.op1t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);

          // Original alt currency
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 2: {
          const reducedPrice = p.rp2t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op2t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 3: {
          const reducedPrice = p.rp3t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op3t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 4: {
          const reducedPrice = p.rp4t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op4t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        case 5: {
          const reducedPrice = p.rp5t;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.op5t;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }

        default: {
          const reducedPrice = p.rpxt;
          $('#dynamic_cart_reduced_price_amount').text(reducedPrice);
          if (showAltCurrencyPrice) {
            const altReduced = (parseFloat(reducedPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_reduced_alt_price_amount').text(altReduced + altCurrencyPriceSymbol).show();
          }

          const originalPrice = p.opxt;
          $('#dynamic_cart_original_price_amount').text(originalPrice);
          if (showAltCurrencyPrice) {
            const altOriginal = (parseFloat(originalPrice) * altCurrencyPriceRate).toFixed(altDecimals);
            $('#dynamic_cart_original_alt_price_amount').text(altOriginal + altCurrencyPriceSymbol).show();
          }
          break;
        }
      }

        $('a.h-dp').each(function(i, e) {
            var url = $(this).attr('href');
            var reg1 = /\<\*(.*)\*\>/gm;
            var reg = new RegExp('\<\*(.*)\*\>', 'gm')
            var n = url.match(reg1) || [];
            if (n) {
                for (let j = 0; j < n.length; j++) {
                    var sub = n[j].substring(2, n[j].length - 2);
                    var subarr = sub.split('#');
                    var code = subarr[0];
                    url = url.replace(n[j], p[code]);
                    $(this).attr('href', url);
                }
            }
        
        });

    } else if (price == 0) {
        $('a.h-dp').each(function(i, e) {
            var url = $(this).attr('href');
            var reg1 = /\<\*(.*)\*\>/gm;
            var reg = new RegExp('\<\*(.*)\*\>', 'gm')
            var n = url.match(reg1) || [];
            if (n) {

                for (let j = 0; j < n.length; j++) {
                    var sub = n[j].substring(2, n[j].length - 2);
                    var subarr = sub.split('#');
                    var pr = subarr[1];
                    url = url.replace(n[j], pr);
                    $(this).attr('href', url);
                }
            }
        
        });
    }

    $('.dp-all').css('display', 'inline-block');
    setLinkDynamicCart();
    }//recalculatePrices
    
    function markOutOfStock2() {
        var selectedValues = {}; // {propertyId: value}

        document.querySelectorAll('button.color-variation-button, button.button-variation')
            .forEach(function(el) {
                if(el.getAttribute('selected-option') === 'true') {
                    selectedValues[el.getAttribute('property-id')] = el.value;
                }
            });

        var allOptions = document.querySelectorAll('button.color-variation-button, button.button-variation');
        allOptions.forEach(function(optionEl) {
            var optionValue = optionEl.value;
            var propertyId = optionEl.getAttribute('property-id');
            var hasValidCombination = variationsArr.some(function(variation) {
                if(variation.ids.indexOf(optionValue) === -1) return false;
                for(var pid in selectedValues) {
                    var selected = selectedValues[pid];
                    if(pid !== propertyId && variation.ids.indexOf(selected) === -1) return false;
                }
                //if disabled is not define (missing in database), set as false    
                if (typeof variation.disable === "undefined") variation.disable = false;
                
                return variation.hide === false && variation.disable !== true;
            });
            var completelyUnavailable = variationsArr.every(function(variation){
                return variation.ids.indexOf(optionValue) === -1 ||
                      variation.hide !== false ||
                      variation.disable === true;
            });
            if(completelyUnavailable) {
                // Completely unavailable: grey + disable + hide if needed
                optionEl.classList.add('greyOut');
                optionEl.classList.add('hiddenvariation');
                optionEl.disabled = true;
            } else if(!hasValidCombination) {
                // Incompatible with current selection: grey only, still clickable
                optionEl.classList.add('greyOut');
                optionEl.classList.remove('hiddenvariation');
                optionEl.disabled = false;
            } else {
                // Available
                optionEl.classList.remove('greyOut');
                optionEl.classList.remove('hiddenvariation');
                optionEl.disabled = false;
            }
        });
    }markOutOfStock2
    

    function handleAddToCartButton(inStock) {
      //get all "add-to-cart" buttons
      const addToCartButtons = document.getElementsByClassName("checkout-add-to-cart-btn");
      for(const addToCartBtn of addToCartButtons){
        var addToCartButton = addToCartBtn;
        var inStockTextElements = addToCartBtn.querySelectorAll("checkout-add-to-cart-btn-text");
        var outOfStockTextElements = addToCartBtn.querySelectorAll("checkout-add-to-cart-btn-text-out-of-stock");

        try {
          if(inStock){
            //in stock
            addToCartButton.classList.remove('checkout-add-to-cart-btn-disabled');
            for(const inStockTextElm of inStockTextElements){
              inStockTextElm.classList.remove('checkout-add-to-cart-btn-text-hidden');
            }
            for(const outOfStockTextElm of outOfStockTextElements){
              outOfStockTextElm.classList.add('checkout-add-to-cart-btn-text-hidden');
            }
          }else {
            //out of stock
            addToCartButton.classList.add('checkout-add-to-cart-btn-disabled');
            for(const inStockTextElm of inStockTextElements){
              inStockTextElm.classList.add('checkout-add-to-cart-btn-text-hidden');
            }
            for(const outOfStockTextElm of outOfStockTextElements){
              outOfStockTextElm.classList.remove('checkout-add-to-cart-btn-text-hidden');
            }
          }
        }catch(err){
          console.error(err);
        }
      }//for
    }//handleAddToCartButton

    function dynamicCheckoutOtherVariationButtonClicked(propertyId, optionId, p, variationIndex){
      let property = propertiesArr.find(pr => pr.id === propertyId);
      let option = property.options.find(opt => opt.id === optionId);

      //remove borders on all variations
      for(let opt = 0; opt < propertiesArr[p].options.length; opt++){
        let optionElement = document.getElementById(propertiesArr[p].id + "-" + propertiesArr[p].options[opt].id + "-" + p);
        if(!!optionElement){
          optionElement.classList.remove('selected');
          optionElement.setAttribute("selected-option", "false");
        }
      }
      //add border to selected variation
      let selectedVariationButtonElement = document.getElementById(propertyId + "-" + optionId + "-" + p);
      selectedVariationButtonElement.classList.add('selected');
      selectedVariationButtonElement.setAttribute("selected-option", "true");

      
      toggleCartButtonStock();
      markOutOfStock2();
      recalculatePrices();
      setLinkDynamicCart();

    }//dynamicCheckoutOtherVariationButtonClicked

    function dynamicCheckoutVariationDropdownChanged(propertyId, p, dropdownElement, variationIndex){
      let options = dropdownElement.options;
      for(let opt = 0; opt < options.length; opt++){
	      options[opt].setAttribute("selected-option", "false");
        if(options[opt].value === dropdownElement.value){
          options[opt].setAttribute("selected-option", "true");
        }//if
      }//for
      setLinkDynamicCart();
      toggleCartButtonStock();
      recalculatePrices();
    }//dynamicCheckoutVariationDropdownChanged


    function setLinkDynamicCart(quantity = null) {
      let linkIdsString = '';
      let singleQuantityValue = 1;
      let singleQuantityValueElement = document.getElementById("single-quantity-value");
      if(!!singleQuantityValueElement){
        singleQuantityValue = parseFloat(singleQuantityValueElement.value);
      }
      if(quantity === null){
       const checkedElement = document.querySelector('[id^="qty"]:checked');
        if (checkedElement) {
          // Extract the number at the end of the ID
          const id = checkedElement.id;
          const number = id.match(/\d+$/)[0]; // gets the number at the end
          singleQuantityValue = parseInt(number)
        }   
      } else {
          singleQuantityValue = quantity;
          }
      
      if(propertiesArr.length > 0){
        //variation product
        //get all selected options for variation
        let selectedOptions = [];
        for(let pr = 0; pr < propertiesArr.length; pr++){
          let propertyId = propertiesArr[pr].id;
          let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
          if(selectedOptionElements.length > 0){
            selectedOptions.push(propertiesArr[pr].options.find(opt => opt.id === selectedOptionElements[0].value));
          } 
        }
        //find correct variation
        let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptions.map(sO => sO.id).sort().join(','));
        //set linkIds
        if(!!selectedVariation){
          for(let qnt = 0; qnt < singleQuantityValue; qnt++){
            if((qnt + 1) === singleQuantityValue){
              linkIdsString += selectedVariation.variationId;
            }else {
              linkIdsString += selectedVariation.variationId + ',';
            }
          }
        }
      }else {
        //simple product
        for(let qnt = 0; qnt < singleQuantityValue; qnt++){
          if((qnt + 1) === singleQuantityValue){
            linkIdsString += productSettings.woocommerceId;
          }else {
            linkIdsString += productSettings.woocommerceId + ',';
          }
        }
      }
      //related
      let relatedData;
      try {
        relatedData = getRelatedProductsData();
      }catch(err){
        //console.log("No related products data");
      }
      if(!!relatedData){
        linkIdsString = linkIdsString + relatedData.wcIds;
      }
      
        //dynamic
        let dynPriceParam = "";
        if(!!redPrice1 && dynPriceSet){
            var spCookie = getCookieDynCheckout('sp') || getParam('sp');
            if(spCookie.length > 0){
                dynPriceParam = "&sp=" + dynPriceToParam(redPrice1);
            } else {
                dynPriceParam = "&spe=" + dynPriceToParam(redPrice1);
            }
        }
        
        var cookieUtmSource = getCookieDynCheckout('utm_source')
        var cookieUtmMpSource = getCookieDynCheckout('utm_mp_source')
        var cookie = getCookieDynCheckout('coupon')
        var cookiefbclid= getCookieDynCheckout('fbclid')

        var isGoogleSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=google', 'utm_source=google']) || cookieUtmMpSource === 'google' || cookieUtmSource === 'google';
        var isMailingSource = currentUrl.includes('utm_source=mailing', 'utm_mp_source=mailing') || cookieUtmMpSource === 'mailing' || cookieUtmSource === 'mailing';
        var isTikTokSource = urlIncludesSubstrings(currentUrl, ['utm_mp_source=tiktok', 'utm_source=tiktok']) || cookieUtmMpSource === 'tiktok' || cookieUtmSource === 'tiktok';
        var isOtherSource = (urlIncludesSubstrings(currentUrl, ['utm_mp_source=', 'utm_source=']) || cookieUtmMpSource !== '' || cookieUtmSource !== '') && !isGoogleSource && !isMailingSource && !isTikTokSource;
        var hasFbclid = urlIncludesSubstrings(currentUrl, ['fbclid=']) || cookiefbclid !== '';
        var hasFbclid = Boolean(urlIncludesSubstrings(currentUrl, ['fbclid=']) || (cookiefbclid && cookiefbclid !== ''));


        if ((isOtherSource && !isGoogleSource && !isMailingSource && !isTikTokSource) || hasFbclid){
          dynPriceParam = dynPriceParam + '&utm_source=other';
        } else if (isGoogleSource) {
          dynPriceParam = dynPriceParam + '&utm_source=google';
        } else if (isMailingSource){
          dynPriceParam = dynPriceParam + '&utm_source=mailing';
        } else if (isTikTokSource){
          dynPriceParam = dynPriceParam + '&utm_source=tiktok';
        }

        var hasSaleCoupon = urlIncludesSubstrings(currentUrl, ['utm_content=sale10']) || getCookieDynCheckout('coupon') === 'sale10';
        if (hasSaleCoupon) {
          dynPriceParam += '&c=sale10';
        }
      
      var addToCartButtons = document.getElementsByClassName("checkout-add-to-cart-btn");
      for(const addToCartButton of addToCartButtons){
        addToCartButton.href = "https://ortowp.noriks.com/kosarica/?add-more=" + linkIdsString + dynPriceParam;
      }

      // var postPurchaseButtons = document.getElementsByClassName("checkout-post-purchase-cart-btn");
      // for(const btn of postPurchaseButtons){
      //   btn.href = postPurchaseLink;
      // }
      //var addToCartButton = document.getElementById('checkout_add_to_cart_btn');
      //addToCartButton.href = "https://ortowp.noriks.com/kosarica/?add-more=" + linkIdsString + dynPriceParam;
    }//setLinkDynamicCart

    function setSelectedVariations(){
      for(let pr = 0; pr < propertiesArr.length; pr++){
        let propertyId = propertiesArr[pr].id;
        let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
        for(let sO = 0; sO < selectedOptionElements.length; sO++){
          switch(propertiesArr[pr].type){
            case 'color':
            case 'icon': {
              dynamicCheckoutColorVariationClicked(selectedOptionElements[sO].getAttribute('property-id'), selectedOptionElements[sO]['value'], pr,1);
              break;
            }
            case 'basic': {
              dynamicCheckoutOtherVariationButtonClicked(selectedOptionElements[sO].getAttribute('property-id'), selectedOptionElements[sO]['value'], pr,1);
              break;
            }
            default: break;
          }//switch
        }
      }
    }//setSelectedVariations

    function selectedVariationInStock(){
      let inStock = false;
      if (!variationsArr || variationsArr.length === 0) return inStock;

      let selectedOptionIdsList = [];

      for(let pr = 0; pr < propertiesArr.length; pr++){
        let propertyId = propertiesArr[pr].id;
        let selectedOptionElements = document.querySelectorAll("[property-id=" + "'" + propertyId + "'][selected-option='true']");
        for(let sO = 0; sO < selectedOptionElements.length; sO++){
          selectedOptionIdsList.push(selectedOptionElements[sO]['value']);
        }
      }
      //find correct variation
      let selectedVariation = variationsArr.find(vr => vr.ids.sort().join(',') === selectedOptionIdsList.map(sO => sO).sort().join(','));
      if(!!selectedVariation && selectedVariation.hide === false && selectedVariation.disable === false){
        inStock = true;
      }
      return inStock;
    }//selectedVariationInStock

    function toggleCartButtonStock(){
      let inStock = false;
      if(variationsArr.length > 0){
        //variation product
        inStock = selectedVariationInStock();
      }else {
        //simple product
        inStock = true;
      }
      try {
        handleAddToCartButton(inStock);
      }catch(err){
        console.error(err);
      }
    }//toggleCartButtonStock

    function applyDynamicPrice(){
      const dynPrice = getDynamicPrice();

      if(!!dynPrice){
        dynPriceSet = true;
        redPrice1 = dynPrice;
      }
    }

    function modifyGlobalPrices(dynamicPriceQnt1){
      if(dynPriceSet){
        let reducedPriceElem = document.getElementById('dynamic_cart_reduced_price_amount');
        let origPriceElem = document.getElementById('dynamic_cart_original_price_amount');
        let discValueElem = document.getElementById('dynamic_cart_discount_percentage_amount');
        
        let newRedPrice1 = parseFloat(dynamicPriceQnt1);
        let newOrigPrice1 =  parseFloat(globalPrices.op1);
        let redPrice1Disc = ((newOrigPrice1 - newRedPrice1) / newOrigPrice1) * 100;

        try{
          globalPrices.rp1 = newRedPrice1;
          globalPrices.op1 = newOrigPrice1;
          reducedPriceElem.innerHTML = Math.round((newRedPrice1 + Number.EPSILON) * 100) / 100;
          origPriceElem.innerHTML = Math.round((newOrigPrice1 + Number.EPSILON) * 100) / 100;
          discValueElem.innerHTML = Math.round(redPrice1Disc);
        }catch(err){
          //console.error("Cannot modify global prices");
        }
      }
    }

    function getDynamicPrice(){
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const dynamicPriceParam = urlParams.get("sp") || getCookieDynCheckout('sp') || urlParams.get("spe") || getCookieDynCheckout('spe');
      
      var dynamicPrice = null;

      if(!!dynamicPriceParam){
        dynamicPrice = dynamicPriceParam.replace("i", ".");
        dynamicPrice = dynamicPrice.substring(2, dynamicPrice.length - 1);
      }
      return dynamicPrice;
    }

    function dynPriceToParam(price){
      var paramPrice;
      if(!!price){
        paramPrice = "77" + price.toString().replace(".", "i") + "7";
      }
      return paramPrice;
    }

    function updateReducedPrices(mainPrice) {
      // main price
      $('#dynamic_cart_reduced_price_amount').text(mainPrice);

      // alt currency
      if (showAltCurrencyPrice) {
        const altPrice = (parseFloat(mainPrice) * altCurrencyPriceRate).toFixed(altDecimals);
        $('#dynamic_cart_reduced_alt_price_amount')
          .text(altPrice + ' ' + altCurrencyPriceSymbol)
          .show();
      }
    }


    ////////////////////////////////////////
        ///////// DELIVERY DATE ///////////////
        //////////////////////////////////////

        function setDeliveryDate (){
            try {
                var daysToDeliver = deliveryDays;
                const weekdays = deliveryWeekdays;

                const productEstimateDelivery = productSettings.estimate_delivery_date;
                const countryHolidays = countrySettings.holidays;
                const countryCode = countrySettings.countryCode;

                const now = new Date(Date.now());

                var firstPossibleDeliveryDate;


                var countryHolidaysDates = [];

                //take today or estimate_delivery for starting date
                if(productEstimateDelivery === ''){//if empty
                    firstPossibleDeliveryDate = new Date(); //today
                }else{
                    var today_date = new Date();
                    var deliv_date = convertStringToDate(productEstimateDelivery, '.');

                    if(today_date <= deliv_date){
                        firstPossibleDeliveryDate = deliv_date;
                    }else{
                        firstPossibleDeliveryDate = today_date;

                        //if order after 18:00 hour, increase daysToDeliver by 1
                        if(now.getHours() >= 18){
                            daysToDeliver++;
                        }
                    }
                }


                //convert strings to dates
                for(let d = 0; d < countryHolidays.length; d++){
                    countryHolidaysDates.push(convertStringToDate(countryHolidays[d], '.'));
                }//for

                //calculate delivery date
                for(let i = 0; i <= daysToDeliver;){
                    if(isWeekend(firstPossibleDeliveryDate) ||
                        isHoliday(firstPossibleDeliveryDate, countryHolidaysDates)){
                        firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                    }else{
                        //decrease daysToDeliver (by increasing for loop counter)
                        if(i < daysToDeliver){
                            firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                            i++;
                        }else{
                            i++;
                        }
                        /*firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                        i++;*/
                    }
                    //firstPossibleDeliveryDate = addDays(firstPossibleDeliveryDate, 1);
                }//for

                document.getElementById('delivery-at-day-name').innerHTML = weekdays[firstPossibleDeliveryDate.getDay()];

                generateDeliveryDateText(countryCode, firstPossibleDeliveryDate, deliveryMonths);
            }catch(err){
                console.error("Problem setting delivery date.");
            }
        }//setDeliveryDate

        function generateDeliveryDateText(countryCode, deliveryDate, deliveryMonths){
            try {
                switch(countryCode){
                    case 'HU': {
                        let text = ' ' + deliveryMonths[deliveryDate.getMonth()] + ' ' + deliveryDate.getUTCDate().toString() + '.';

                        document.getElementById('delivery-date').innerHTML = text;
                        break;
                    }
                    default: {
                        document.getElementById('delivery-date').innerHTML = deliveryDate.getUTCDate().toString() + '.' + 
                                                                            (deliveryDate.getMonth() + 1).toString() + '.' + 
                                                                            deliveryDate.getUTCFullYear().toString();
                        break;
                    }
                }
            }catch(e){
                console.log(e);
                console.error("Problem setting delivery date text for specific country.");
            }

        }//HtmlElementId

        function convertStringToDate(stringDate, delimiter = '.'){

            var year; // = new Date().getUTCFullYear().toString();
            var day = stringDate.split(delimiter)[0];
            var month = stringDate.split(delimiter)[1];

            if(stringDate.split(delimiter)[2] === ''){
                //date without year
                year = new Date().getUTCFullYear().toString();
            }else {
                //date with year
                year = stringDate.split(delimiter)[2];
            }

            //var date = new Date(month + '-' + day + '-' + year);
            var date = new Date(year, month - 1, day, 10, 0, 0);
            return date;
        }//convertStringToDate

        function isWeekend(date){
            if(date.getDay() === 0 || date.getDay() > 5){
                return true;
            }
            return false;
        }//isWeekend

        function isHoliday(date, holidays){
            for(let i = 0; i < holidays.length; i++){
                if(date.getDate() === holidays[i].getDate() &&
                    date.getMonth() === holidays[i].getMonth()){
                    return true;
                }//if
            }//for
            return false;
        }//isHoliday

        function addDays(date, days){
            var result = new Date(date);
            result.setDate(result.getDate() + days);
            return result;
        }//addDays


        ////////////////////////////////////////
        //////END DELIVERY DATE ///////////////
        //////////////////////////////////////

  </script>
						<div class="modal-size">
							<a class="modal-size__btn" data-micromodal-trigger="modal-1" href="javascript:;">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960"><path d="M160-240q-33 0-56.5-23.5T80-320v-320q0-33 23.5-56.5T160-720h120v240h80v-240h80v240h80v-240h80v240h80v-240h120q33 0 56.5 23.5T880-640v320q0 33-23.5 56.5T800-240z"/></svg>
								<strong class="modal-size__btn-text">TABELA VELIKOSTI</strong>
							</a>
							<div class="micromodal" id="modal-1" aria-hidden="true">
								<div class="micromodal__overlay" tabindex="-1" data-micromodal-close>
									<div class="micromodal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
										<button class="micromodal__btn-close" aria-label="Close modal" data-micromodal-close>
											<svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M3 21.32L21 3.32001" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M3 3.32001L21 21.32" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
										</button>
										<h3 class="modal-size__title">Tabela velikosti &#x10D;evljev</h3>
										
    <style>
      /* Table Styling */
      .size-table {
          width: 100%;
          padding: 1rem 0;
          border-collapse: collapse;
          text-align: center;
          background-color: #f9f9f9;
          font-family: 'Arial', sans-serif;
      }

      .size-table th, .size-table td {
          border: 1px solid #e3e3e3;
          padding: 10px 5px;
          line-height: 1.3;
          vertical-align: middle;
          white-space: pre-wrap;
      }

      .size-table th, .size-table td:first-child, .size-table tr:first-child td {
          background-color: #292938;
          color: #fff;
          font-weight: 500;
      }

      .size-table td {
          color: #292938;
      }

      .size-table tr:hover td:not(:first-child) {
          background-color: #fff;
          cursor: default;
      }

      .size-table tr:not(:first-child):hover td:first-child {
          background-color: #292938;
      }

      /* Disable hover for the first row and first column */
      .size-table tr:first-child:hover td,
      .size-table td:first-child:hover,
      .size-table th:hover {
          background-color: #292938;
          cursor: default;
      }

      /* Responsive Styling */
      @media screen and (max-width: 991px) {
          .size-table th, .size-table td {
              font-size: 12px;
              padding: 8px 4px;
          }
      }

      @media screen and (max-width: 479px) {
          .size-table th, .size-table td {
              font-size: 10px;
              padding: 6px 3px;
          }
      }
    </style>
    <table border="1" class="size-table"><tbody><tr><td class="header-cell first-column-cell" style="text-align: center;">EU (&#x1F1EA;&#x1F1FA;) </td><td class="header-cell" style="text-align: center;"> Dol&#x17E;ina cm</td></tr><tr><td class="first-column-cell" style="text-align: center;">35-36 </td><td style="text-align: center;">23.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">37-38 </td><td style="text-align: center;">24.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">39-40 </td><td style="text-align: center;">25.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">41-42 </td><td style="text-align: center;">26.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">43-44 </td><td style="text-align: center;">27.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">45-46 </td><td style="text-align: center;">28.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">47-48 </td><td style="text-align: center;">29.5 </td></tr><tr><td class="first-column-cell" style="text-align: center;">49-50 </td><td style="text-align: center;">30.5 </td></tr></tbody></table>
										<p>Vlo&#x17E;ki imajo na zadnji strani ozna&#x10D;ene &#x10D;rte za rezanje. Po teh &#x10D;rtah jih s &#x161;karjami prire&#x17E;ite po meri.</p>
										<p><em><strong>&#x10C;e ste med dvema velikostma, izberite ve&#x10D;jo.</strong></em></p>
									</div>
								</div>
							</div>
						</div>
												
						<div class="sct-hero__offer-ends">PONUDBA KMALU POTE&#x10C;E</div>
						
        <form id="paymentForm" class="payment-form">
            <div class="choose-qty" data-pickername="quantityPickerBox">
                <div class="row"><div class="col-12"><input type="radio" name="qty" id="qty1">
      <label class="qty-item" for="qty1" onclick="setSelectedQuantityGlobal(1); handleAddToCartButton(true); regenerateCartLink({type: &apos;quantityPicker&apos;, quantity: 1})">
    
        <div>
          <div class="qty-item-left">
	<div class="quantity-title">1 par <span class="savebanner">Prihranite <span class="dp-d1 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">49</span>%</span></div>
	<div class="quantity-subtitle">prihranite <span class="dp-pd dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">17.96</span>&#x20AC;</div>
</div>
<div class="qty-item-right">
	<div class="reduced-price"><span class="dp-rp1t dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">18.99&#x20AC;</span> <span class="per_pair">/par</span></div>
	<div class="original-price"><span class="dp-op dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">36.95</span>&#x20AC;</div>
</div>
<!-- <div class="quantity-banner">🔥 Najbolj priljubljeno</div> -->
        </div>
      </label>
    </div></div><div class="row"><div class="col-12"><input type="radio" name="qty" id="qty2" checked>
      <label class="qty-item" for="qty2" onclick="setSelectedQuantityGlobal(2); handleAddToCartButton(true); regenerateCartLink({type: &apos;quantityPicker&apos;, quantity: 2})">
    <div class="popular"><span class="customer-favorite">NAJLJUB&#x160;A IZBIRA</span></div>
        <div>
          <div class="qty-item-left">
	<div class="quantity-title">2 para <span class="savebanner">Prihranite <span class="dp-d2 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">60</span>%</span></div>
	<div class="quantity-subtitle">prihranite <span class="dp-pd2 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">44.28</span>&#x20AC; <div><span class="free-shipping-2">Brezpla&#x10D;na dostava</span></div></div>
</div>
<div class="qty-item-right">
	<div class="reduced-price"><span class="dp-rp2 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">14.81</span>&#x20AC; <span class="per_pair">/par</span></div>
	<div class="original-price"><span class="dp-op dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">36.95</span>&#x20AC;</div>
</div>
<div class="quantity-banner all-countries">&#x1F525; Najbolj priljubljeno</div>
        </div>
      </label>
    </div></div><div class="row"><div class="col-12"><input type="radio" name="qty" id="qty3">
      <label class="qty-item" for="qty3" onclick="setSelectedQuantityGlobal(3); handleAddToCartButton(true); regenerateCartLink({type: &apos;quantityPicker&apos;, quantity: 3})">
    
        <div>
          <div class="qty-item-left">
	<div class="quantity-title">3 pari <span class="savebanner">Prihranite <span class="dp-d3 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">62</span>%</span></div>
	<div class="quantity-subtitle">prihranite <span class="dp-pd3 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">69.26</span>&#x20AC; <div><span class="free-shipping">Brezpla&#x10D;na dostava</span></div></div>
</div>
<div class="qty-item-right">
	<div class="reduced-price"><span class="dp-rp3 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">13.86</span>&#x20AC; <span class="per_pair">/par</span></div>
	<div class="original-price"><span class="dp-op dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">36.95</span>&#x20AC;</div>
</div>
<div class="quantity-banner individual-countries">&#x1F525; Najbolj priljubljeno</div>
        </div>
      </label>
    </div></div><div class="row"><div class="col-12"><input type="radio" name="qty" id="qty5">
      <label class="qty-item" for="qty5" onclick="setSelectedQuantityGlobal(5); handleAddToCartButton(true); regenerateCartLink({type: &apos;quantityPicker&apos;, quantity: 5})">
    
        <div>
          <div class="qty-item-left">
	<div class="quantity-title">5 parov <span class="savebanner">Prihranite <span class="dp-d5 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">73</span>%</span></div>
	<div class="quantity-subtitle">prihranite <span class="dp-pd5 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">135.38</span>&#x20AC; <div><span class="free-shipping">Brezpla&#x10D;na dostava</span></div></div>
</div>
<div class="qty-item-right">
	<div class="reduced-price"><span class="dp-rp5 dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">9.87</span>&#x20AC; <span class="per_pair">/par</span></div>
	<div class="original-price"><span class="dp-op dp-all" style="display: none; white-space:inherit; text-decoration: inherit;">36.95</span>&#x20AC;</div>
</div>
<div class="quantity-banner">Najbolj&#x161;a ponudba</div>
        </div>
      </label>
    </div></div>
            </div>
        </form>
        <script>
            function getUrlParams() {
              const params = new URLSearchParams(window.location.search);
              return {
                order_id: params.get("order_id"),
                order_key: params.get("order_key"),
                lp_upsell: params.get("lp_upsell")
              };
            }
            const orderData = getUrlParams();

            purchaseTypePickers.push({
              type: 'quantityPickerBox',
              name: '[dyn-qty-picker-title]'
            });

            function setSelectedQuantityGlobal(qnt){
              selectedGlobalQuantity = qnt;
              recalculatePrices();
            }//setSelectedQuantityGlobal

            //set global
            setSelectedQuantityGlobal(1);

            function regenerateCartLink({type = null, quantity, subscriptionDuration, subscriptionDiscount}) {
              let addToCartButtons = document.getElementsByClassName('checkout-add-to-cart-btn');
              let postPurchaseButtons = document.getElementsByClassName('checkout_post_purchase_cart_btn');
              const isSubscription = 1;

              const products = (productSettings.woocommerceId+',').repeat(quantity).slice(0,-1)//remove last ","

              switch(type){
                case 'quantityPicker': {
                    // //if variation we need to set it diffrently then if simple
                    // if (variationsArr.length > 0) {
                    //     setLinkDynamicCart(quantity);//dynamical-checkout.js
                    //     break;
                    // }
                  
                  //standard Add to cart
                  const link = "https://ortowp.noriks.com?add-more=" + products;
                  //post purchase add to cart
                  const postPurchaseLink =  "https://ortowp.noriks.com?add-more-lp=" + products +
                                            "&order_id=" + encodeURIComponent(orderData.order_id) +
                                            "&order_key=" + encodeURIComponent(orderData.order_key) +
                                            "&lp_upsell=1";

                  for(const addToCartButton of addToCartButtons){
                    addToCartButton.href = link;
                  }
                  setLinkDynamicCart(quantity);

                  for (const addToCartButton of postPurchaseButtons){
                    addToCartButton.href = postPurchaseLink;
                    }

                  break;
                }
                case 'subscriptionPicker': {
                  //simple product id
                  const products = (productSettings.woocommerceId+',').repeat(quantity).slice(0,-1)//remove last ","
                  const link = "https://ortowp.noriks.com?add-more="+products +
                                "&subsc=" + isSubscription + 
                                "&subsc_dur=" + subscriptionDuration;
                  
                for(const addToCartButton of addToCartButtons){
                    addToCartButton.href = link;
                  }
                  break;
                }
                default: {
                  const products = (productSettings.woocommerceId+',').repeat(quantity).slice(0,-1)//remove last ","
                  const link = "https://ortowp.noriks.com?add-more="+products;
                  const postPurchaseLink = "https://ortowp.noriks.com?add-more-lp=" + products;

                  for(const addToCartButton of addToCartButtons){
                    addToCartButton.href = link;
                  }
                    for (const postPurchaseButton of postPurchaseButtons){
                    postPurchaseButton.href = postPurchaseLink;
                    }
                  break;
                }
              }//switch

            }//regenerateCartLink
          
            document.addEventListener('DOMContentLoaded', function () {
                setTimeout(function() {
                   
                  const quantityNumber = document.querySelectorAll('[id^="qty"]').length
                  for (let index = 1 ; index <= quantityNumber; index++) {
                      const id ="#qty"+index;
                      if($(id).is(":checked")){
                          const products = (productSettings.woocommerceId+',').repeat(index).slice(0,-1)//remove last ","
                          const link = "https://ortowp.noriks.com?add-more="+products;
                          const postPurchaseLink =  "https://ortowp.noriks.com?add-more-lp=" + products +
                                                    "&order_id=" + encodeURIComponent(orderData.order_id) +
                                                    "&order_key=" + encodeURIComponent(orderData.order_key) +
                                                    "&lp_upsell=1";

                          let addToCartButtons = document.getElementsByClassName('checkout-add-to-cart-btn');
                           let postPurchaseButtons = document.getElementsByClassName('checkout_post_purchase_cart_btn');
                          
                           for(const addToCartBtn of addToCartButtons){
                            addToCartBtn.href = link;
                          }
                            for (const addToCartBtn of postPurchaseButtons){
                            addToCartBtn.href = postPurchaseLink}
                          break;
                      }
                  }
                setLinkDynamicCart();
              }, 1000); 
            });
        </script>
        
    
						
        <div class="add-to-cart-button-container">
          <a id="checkout_add_to_cart_btn" class="checkout-add-to-cart-btn" href="https://ortowp.noriks.com/kosarica/?add-more=">
              <span id="checkout_add_to_cart_btn_text" class="checkout-add-to-cart-btn-text"><img src="https://images.hs-plus.com/assets/shared-images/adafec52191b3_cart_icon.svg"><p class="checkout-add-to-cart-order-text">Dodaj v ko&#x161;arico</p></span>
              <span id="checkout_add_to_cart_btn_text_out_of_stock" class="checkout-add-to-cart-btn-text-out-of-stock checkout-add-to-cart-btn-text checkout-add-to-cart-btn-text-hidden"><p class="checkout-add-to-cart-order-text">Ni na zalogi</p></span>
          </a>
        </div>
        <style>
          .checkout-add-to-cart-btn{
            color: white;
            background-color: #25b800;
            margin: auto;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
            display: inline-block;
            linear-gradient(180deg, #3dc200 0, #00ac00 50% 100%);
            height: 52px;
            box-shadow: 0 2px 0 #009900;
            border-radius: 10px;
          }
          .checkout-add-to-cart-btn-disabled {
            pointer-events: none;
          }
          .checkout-add-to-cart-btn-text{
            display: flex;
            top: 50%;
            transform: translateY(-50%);
            width: calc(100% - 60px);
            position: relative;
            text-transform: none;
            justify-content: center;
            margin: auto;
            font-size: 25px;
          }
          .checkout-add-to-cart-btn:hover .checkout-add-to-cart-btn-text{
            color: #fff;
          }
          .checkout-add-to-cart-btn-text-hidden {
            display: none;
          }
          .checkout-add-to-cart-btn-text img{
            margin-right: 10px;
          }
          .checkout-add-to-cart-order-text{
            font-size: 20px;
            color: #fff;
          }
          .add-to-cart-button-container{
          }
          .related-product-original-price{
            font-weight: 600;
            text-decoration: line-through;
          }
        </style>
						
        
          <div class="related-product-wrapper">
            <span class="related-product-text">Kupi skupaj in prihrani:</span>
          
        <div class="related-product" id="related-product-rp-0">
          <div class="related-product-img-desc">
            <span class="related-product-image-wrapper">
              <img class="related-product-image" src="https://images.hs-plus.com/product/product-image/67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg">
            </span>
            <div class="related-product-checkbox-description">
              <span class="related-product-title">
                <div class="related-product-title-and-desc">
                  <p class="related-product-title-text">
                    2x blazinica za peto za zmanj&#x161;anje bole&#x10D;in v peti
                    </p><div class="related-product-description">
                      
      <span class="related-product-description">
        Zapolni prevelik &#x10D;evelj, ne da bi drgnila ali povzro&#x10D;ala &#x17E;ulje.

      </span>
      
                    </div>
                    <div class="related-product-both-prices">
                      <span class="related-product-reduced-price">3.99&#x20AC;</span>
                      <span class="related-product-original-price">11.95&#x20AC;</span>
                    </div>
                  <p></p>
                </div>
              </span>
            </div>
            <div class="related-product-checkbox-wrapper" id="related-product-checkbox-wrapper-rp-0">
              <span class="added-text" id="added-text-rp-0" style="display:none">
                <span class="checkmark-added">L</span>
                Dodano
              </span>
              <label class="related-product-dropdown-quantity" id="qty-picker-display-rp-0" onclick="handleDropdownClick(event)" style="display:none;">
                <select class="quantity-picker" id="quantity-picker-rp-0" onchange="relatedDropDownChanged(&apos;rp-0&apos;);">
                  <option value="1" selected>1x</option>
                  <option value="2">2x</option>
                  <option value="3">3x</option>
                </select>
              </label>
              <div class="related-product-checkbox-container">
                <label class="related-product-container">
                  <input type="checkbox" id="rp-0" name="rp-0" onclick="setLinkDynamicCart();">
                  <span class="checkmark" id="checkmark-rp-0">
                    <p>
                      <span class="add-purchase-text add-related" id="atc-text-rp-0">Dodaj k nakupu</span>
                      <span class="add-purchase-text remove-related" id="rfc-text-rp-0" style="display:none;">
                      <span class="remove-upsell-icon"><img src="https://images.hs-plus.com/assets/shared-images/acedd549f8a4b_remove-from-cart.svg"></span>Odstrani</span>
                    </p>
                  </span>
                </label>
              </div>
            </div>
          </div>
        </div>
        
      </div>
          <script>
            var relatedProductsData = [{"id":"rp-0","name":"2x blazinica za peto za zmanjšanje bolečin v peti","description":"Zapolni prevelik čevelj, ne da bi drgnila ali povzročala žulje.\n","price":3.99,"originalPrice":11.95,"discountPercentage":67,"wcId":981495,"imageUrl":"https://images.hs-plus.com/product/product-image/67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg"}];
            function handleDropdownClick(event) {
                event.stopPropagation(); // Stop propagation to the parent div
            }

            function relatedDropDownChanged(relatedId){
              let checkbox = document.getElementById(relatedId);
              checkbox.checked = true;
              markRelatedSelected(relatedId, "mark");
              setLinkDynamicCart();
            }

            function markRelatedSelected(relatedId, type){
              let relatedWrapper = document.getElementById("related-product-"+ relatedId);
              let relatedCheckbox = document.getElementById("checkmark-"+ relatedId);

            
              switch (type) {
                  case "toggle": {
                      if (relatedWrapper.classList.contains("hs-rp-checked")){
                          relatedWrapper.classList.remove("hs-rp-checked")
                      }
                      else {
                          relatedWrapper.classList.add("hs-rp-checked")
                      }
                      if (relatedCheckbox.classList.contains("checkmark-checked")){
                          relatedCheckbox.classList.remove("checkmark-checked")
                      }
                      else {
                          relatedCheckbox.classList.add("checkmark-checked")
                      }
                      break;
                  }
                  case "mark": {
                      relatedWrapper.classList.add("hs-rp-checked");
                      relatedCheckbox.classList.add("checkmark-checked");
                      break;
                  }
                  case "unmark": {
                      relatedWrapper.classList.remove("hs-rp-checked");
                      relatedCheckbox.classList.remove("checkmark-checked");
                      break;
                  }
                  default: break;
              }//switch
            }

            function getRelatedProductsData() {
              let related = '';
              let price = 0;
              let activeRelatedUpsellHighlighted = null;
          
              for (let r = 0; r < relatedProductsData.length; r++) {
                  let checkbox = document.getElementById(relatedProductsData[r].id);
                  let selectedQuantity = document.getElementById("quantity-picker-" + relatedProductsData[r].id);
                  let quantityPickerDisplay = document.getElementById("qty-picker-display-" + relatedProductsData[r].id);
                  let addToCartText = document.getElementById("atc-text-" + relatedProductsData[r].id);
                  let removeFromCartText = document.getElementById("rfc-text-" + relatedProductsData[r].id);
                  let addedToCart = document.getElementById("added-text-" + relatedProductsData[r].id);
                  let rpCheckboxW = document.getElementById("related-product-checkbox-wrapper-" + relatedProductsData[r].id);
                  
                  if (checkbox && checkbox.checked) {
                      markRelatedSelected(relatedProductsData[r].id, 'mark')
                      let quantity = 0;
                      selectedQuantity.classList.add("quantity-picker-checked");
                      quantityPickerDisplay.style.display = 'flex';
                      addedToCart.style.display = 'flex';
                      addToCartText.style.display = 'none';
                      removeFromCartText.style.display = 'flex';
                      rpCheckboxW.style.justifyContent = 'flex-end';
                      
                      
                      if (selectedQuantity != undefined){
                          quantity = selectedQuantity.value;
                      }

                      for (let i = 0; i < quantity; i++) {
                          
                          related = related + ',' + relatedProductsData[r].wcId;
                          price += Number(relatedProductsData[r].price);
                      }
                  }
                  else {
                      markRelatedSelected('rp-' + r, 'unmark');
                      selectedQuantity.classList.remove("quantity-picker-checked");
                      quantityPickerDisplay.style.display = 'none';
                      addToCartText.style.display = 'block';
                      addedToCart.style.display = 'none';
                      removeFromCartText.style.display = 'none';
                      rpCheckboxW.style.justifyContent = 'center';
                    
                  }
              }
          
              return {
                  wcIds: related,
                  price: price
              };
            }
          </script>
          
						<style>
							[data-tpl="stps"] .related-product-reduced-price {
								color: #fff;
							}
							[data-tpl="stps"] .related-product {
								--clr-accent: #ff5b01;
								--clr-accent-light: #ffeee8;
								--clr-accent-dark: #ff5b01;
								--clr-secondary: #ff5b01;
								hyphens: auto;
								text-wrap: balance;
							}
						</style>
						<div class="bckg-color">
	<div class="delivery__date active_quantity_button">
		<img src="https://images.vigo-shop.com/general/truck_icon_delivery.png"><p class="shipping-info">Danes naro&#x10D;i&#x161;, </p><div class="new_line"><p id="delivery-at-day-name"></p>, <p id="delivery-date"></p></div><p> dobi&#x161;.</p>
  </div>
</div>
<script>
var deliveryWeekdays = ['v nedeljo', 'v ponedeljek', 'v torek', 'v sredo', 'v četrtek', 'v petek', 'v soboto'];
var deliveryDays = 2;
var deliveryMonths = [];
setDeliveryDate();
</script>
<style>
.bckg-color {
    background-color:white!important;
    position:sticky;
    top:3.3rem;
    z-index:10;
  }

	.delivery__date p, #delivery-at-day-name p, .delivery-date p {
		display: inline;
	}

	.delivery__date {
		text-align:center;
    font-weight: 500;
    padding: 0.2rem 0.5rem 0.2rem 0.5rem;
    font-size: 14px;
    position: sticky;
    top:3.3rem;
    z-index:299;
    display:flex;
    justify-content:center;
    white-space:pre;
    align-items:baseline;
    flex-wrap:wrap;
	}

  #delivery-at-day-name, #delivery-date {
    font-weight: 700 !important;
    font-size:16px
    }

  @media screen and (min-width: 1000px) {
    .delivery__date, .bckg-color{
      top:3.75rem;
      font-size:18px;
    }
  #delivery-at-day-name, #delivery-date {
    font-weight: 700 !important;
    font-size:20px;
    }
  }
  .delivery__date img {
    height:18px;
    padding-right: .2rem;
    padding-top: .2rem;
  } 
</style>
						<style>
							.sct-hero .bckg-color {
								z-index: 1;
							}
							.sct-hero .delivery__date {
								font-size: var(--step-0)!important;
								margin-top: 0.5rem!important;
							}
							.sct-hero .delivery__date p {
								font-size: inherit!important;
								margin: 0!important;
							}
							.per_pair{
								color:#000;
								font-weight: 400;
								font-size:14px;
							}
						</style>
					</div>

					<div class="sct-hero__payship">
						<!-- shortcode "payment-methods" -->
<!-- Payment and delivery features (styles in auto shared resourse "Cart CSS") -->
<div class="paydel-features">
	<div class="paydel-features__item">
		<strong class="paydel-features__text" style="margin-inline: auto;">90-dnevna mo&#x17E;nost vra&#x10D;ila kupnine</strong>
	</div>
	<hr style="display: block; margin: 0.5rem 0; background-color: #dbdbdb; border: none; height: 0.0625rem;">

	
	<div class="paydel-features__item">
		<img class="paydel-features__icon paydel-features__icon--country" src="https://images.vigo-shop.com/general/checkout/flag/si.svg" alt>
		<span class="paydel-features__text">Skladi&#x161;&#x10D;e v Sloveniji</span>
	</div>

	<div class="paydel-features__item">
		<img class="paydel-features__icon" src="https://images.vigo-shop.com/general/checkout/delivery-truck.svg" alt>
		<span id="shipping-checkout" class="paydel-features__text --accent">Hitra dostava</span>
		<span id="free-shipping-checkout" style="display: none;">Brezpla&#x10D;na dostava</span>
		<div class="courier-badge">
			<img class="courier-badge__item" src="https://images.vigo-shop.com/general/curriers/posta_slo.png" alt><!-- SI,RS,ES,FR,NL -->
		</div>
	</div>

	<div class="paydel-features__item">
		<img class="paydel-features__icon" src="https://images.vigo-shop.com/general/checkout/COD.svg" alt>
		<span class="paydel-features__text">Pla&#x10D;ilo tudi po povzetju</span>
	</div>

	<!-- <div class="paydel-features__item">
		<img class="paydel-features__icon" src="https://images.vigo-shop.com/general/checkout/back.svg" alt="">
		<span class="paydel-features__text">14-dnevna možnost vračila kupnine</span>
	</div>

	<div class="paydel-features__item">
		<img class="paydel-features__icon" src="https://images.vigo-shop.com/general/checkout/star.svg" alt="">
		<span class="paydel-features__text">93% strank je ocenilo Stepease z odličnostjo</span>
	</div> -->
</div>
<style>
	.courier-badge {display: flex; gap: 0.5rem;}
	.courier-badge__item {height: 22px;}
</style>
<!-- END Payment and delivery features --><div class="paymethods payship">
	<div class="paymethods__box">
		<img class="paymethods__item paymethods__item-img" src="https://images.vigo-shop.com/general/payment/visa.svg" alt>
		<img class="paymethods__item paymethods__item-img" src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt>
		<img class="paymethods__item paymethods__item-img" src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt>
		<img class="paymethods__item paymethods__item-img" src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt>
		<img class="paymethods__item paymethods__item-img" src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt>
	</div>
</div>

<style>
	.paymethods {
		margin-top: 0.5rem;
		/* max-width: 650px; */
	}
	.paymethods__box {
		display: flex;
		gap: .5rem;
		align-items: center;
		flex-wrap: wrap;
	}
	.paymethods__item {}
	.paymethods__item-img {
		height: 1.875rem;
		width: auto;
		object-fit: contain;
		vertical-align: middle;
	}
</style>
					</div>
					<style>
						.sct-hero__payship {
							display: flex;
							flex-direction: column-reverse;
						}
						.paydel-features__item:first-of-type {
							display: none;
						}
						.paydel-features>hr {
							display: none!important;
						}
						.paymethods__box {
							justify-content: center;
							padding-bottom: 0.5rem;
							border-bottom: .0625rem solid var(--clr-border)
						}
						.paymethods__item {
							height: 1.37500rem;
						}
						.paydel-features {
							margin-top: 0.5rem;
							display: flex;
							justify-content: center;
							flex-direction: row;
							column-gap: 1rem;
							flex-wrap: wrap;
						}
					</style>

					<div class="sct-hero__descr">
						<p class="remains"><span class="remains__dot"></span><span class="remains__text">Na zalogi le &#x161;e 19&#xA0;parov!</span></p>

						<ul class="seller-benefits">
							<li class="seller-benefits__item">
								<img class="seller-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/51274f1e1ac1a_local_shipping_36dp_000_FILL0_wght400_GRAD0_opsz40.svg" alt>
								<!-- <span class="seller-benefits__item-icon material-symbols-outlined">local_shipping</span> -->
								<span class="seller-benefits__item-text">Sledenje po&#x161;iljki z zavarovano dostavo</span>
							</li>
							<li class="seller-benefits__item">
								<img class="seller-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/dc81f19ecd50b_sentiment_very_satisfied_36dp_000_FILL0_wght400_GRAD0_opsz40.svg" alt>
								<!-- <span class="seller-benefits__item-icon material-symbols-outlined">sentiment_very_satisfied</span> -->
								<span class="seller-benefits__item-text">Preizkusi 90 dni, brez tveganja</span>
							</li>
							<li class="seller-benefits__item">
								<img class="seller-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3f62b46e6d7db_support_agent_36dp_000_FILL0_wght400_GRAD0_opsz40.svg" alt>
								<!-- <span class="seller-benefits__item-icon material-symbols-outlined">support_agent</span> -->
								<span class="seller-benefits__item-text">Lokalna podpora strankam</span>
							</li>
						</ul>
					</div>

					<div class="acrd">
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">straighten</span>
									<span>Manj&#x161;a velikost? Med velikostima?</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p><strong>Manj&#x161;a od na&#x161;e najmanj&#x161;e velikosti?</strong><br>Naro&#x10D;ite <strong>najmanj&#x161;o velikost</strong> in jo <strong>prire&#x17E;ite</strong> po ozna&#x10D;enih &#x10D;rtah na zadnji strani za popolno prileganje.</p>
								<p><strong>Med velikostma?</strong><br>Vedno <strong>izberite ve&#x10D;jo</strong> in <strong>prire&#x17E;ite</strong> po ozna&#x10D;enih &#x10D;rtah.</p>
								<p>Preprosto. Nastavljivo. Ustvarjeno zate.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">steps</span>
									<span>Ali se STEPEASE prilegajo mojim &#x10D;evljem?</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p><strong>Da,</strong> zasnovani so tako, da se <strong>popolnoma prilegajo va&#x161;i obi&#x10D;ajni velikosti &#x10D;evljev</strong>.</p>
								<ul>
									<li><strong>Ni vam potrebno izbrati ve&#x10D;je &#x161;tevilke</strong> ali kupovati ve&#x10D;jih &#x10D;evljev</li>
									<li><strong>Robovi, ki jih lahko prire&#x17E;ete</strong> za popolno prileganje</li>
									<li><strong>Ne bodo zo&#x17E;ili va&#x161;ih &#x10D;evljev</strong></li>
									<li>Zlahka se prilegajo <strong>delovnim &#x10D;evljem, supergam, &#x161;portnim copatom</strong> in drugim</li>
								</ul>
								<p>STEPEASE so ustvarjeni za vsakodnevno no&#x161;enje &#x2013; brez ti&#x161;&#x10D;anja, brez ugibanja. Samo &#x10D;isto udobje.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">emergency</span>
									<span>Ali pomagajo pri bole&#x10D;inah v stopalih?</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p><strong>Da,</strong> STEPEASE pomagajo pri razli&#x10D;nih te&#x17E;avah s stopali, kot so <strong>plantarni fasciitis, bole&#x10D;ine v loku, peti in metatarzaliji.</strong></p>
								<p>Na&#x161;i vlo&#x17E;ki nudijo vrhunsko oporo in bla&#x17E;enje, ki pomagata zmanj&#x161;ati nelagodje in izbolj&#x161;ati splo&#x161;no zdravje stopal.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">construction</span>
									<span>Kako dolgo zdr&#x17E;ijo vlo&#x17E;ki STEPEASE?</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p><strong>Vlo&#x17E;ki STEPEASE so narejeni, da trajajo!</strong> Ob pravilni negi vam bodo nudili udobje in oporo ve&#x10D; kot <strong>12&#xA0;mesecev.</strong> Za dalj&#x161;o &#x17E;ivljenjsko dobo jih redno ro&#x10D;no operite.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">sell</span>
									<span>Popust za razli&#x10D;ne velikosti</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p>Na&#x161; popust lahko uporabite tudi za razli&#x10D;ne barve in velikosti!</p>
								<p><strong>Postopek:</strong></p>
								<ol>
									<li><strong>Dodajte eno velikost v ko&#x161;arico.</strong></li>
									<li><strong>Dodajte &#x161;e drugo velikost v ko&#x161;arico.</strong></li>
								</ol>
								<p>Popust za 2,&#xA0;3&#xA0;ali&#xA0;5&#xA0;parov se bo samodejno obra&#x10D;unal pri skupni ceni.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">package_2</span>
									<span>Dostava in po&#x161;iljanje</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p>U&#x17E;ivajte v sledenju po&#x161;iljke z zavarovano dostavo v <strong>2&#x2013;3&#xA0;delovnih dneh.</strong> Za va&#x161;e udobje bo prilo&#x17E;ena &#x161;tevilka za sledenje.</p>
							</div>
						</details>
						<details class="acrd__item">
							<summary>
								<div class="acrd__heading">
									<span class="material-symbols-outlined filled">paid</span>
									<span>Politika vra&#x10D;il in povra&#x10D;il</span>
								</div>
							</summary>
							<div class="acrd__body">
								<p>Prepri&#x10D;ani smo, da vam bo udobje vlo&#x17E;kov STEPEASE v&#x161;e&#x10D;. Zato ponujamo 90&#x2011;dnevno garancijo vra&#x10D;ila denarja brez tveganja. &#x10C;e ne boste popolnoma zadovoljni, nam preprosto pi&#x161;ite in uredili bomo vra&#x10D;ilo.</p>
								<p>Za vra&#x10D;ila nam pi&#x161;ite na <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="761f18101936051f580502130613170513581303">[email&#160;protected]</a></p>
							</div>
						</details>
					</div>

					<div class="timer">
						<strong class="timer-title">EKSKLUZIVNA RAZPRODAJA&#xA0;&#x2013;&#xA0;ZADNJA PRILO&#x17D;NOST!</strong>
						<div class="timer-body">
							<div class="time-block">
								<span id="hours">00</span>
								<p>Ure</p>
							</div>
							<div class="time-block">
								<span id="minutes">00</span>
								<p>Minute</p>
							</div>
							<div class="time-block">
								<span id="seconds">00</span>
								<p>Sekunde</p>
							</div>
						</div>
					</div>

					<div class="swiper hero-reviews">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="hero-reviews-item">
									<div class="hero-reviews__photo">
										<img class="hero-reviews__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/dc84ff1836158_review-autor-1.jpg" alt>
									</div>
									<div class="hero-reviews__descr">
										<div class="hero-reviews__descr-text">
											<p>Dolga leta sem se spopadal s plantarno fascio, a STEPEASE so vse spremenili. Podpora loku je neverjetna in bole&#x10D;ina je kon&#x10D;no izginila!</p>
										</div>
										<div class="hero-reviews__descr-author">
											<img class="hero-reviews__descr-rating" src="https://images.hs-plus.com/assets/STEPPER%20test-0/77916ce2372ed_stars-v2-5.svg" alt="5 stars">
											<span>&#x2013;&#xA0;Jakob</span>
											<img class="hero-reviews__descr-verif" src="https://images.hs-plus.com/assets/STEPPER%20test-0/1732fd3af3689_icon-verified.svg" alt="verified">
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="hero-reviews-item">
									<div class="hero-reviews__photo">
										<img class="hero-reviews__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/f5d8588d1923_review-autor-2.jpg" alt>
									</div>
									<div class="hero-reviews__descr">
										<div class="hero-reviews__descr-text">
											<p>V slu&#x17E;bi ves dan stojim in ti vlo&#x17E;ki so mi re&#x161;ili noge. Ob koncu dneva me stopala ne bolijo ve&#x10D;.</p>
										</div>
										<div class="hero-reviews__descr-author">
											<img class="hero-reviews__descr-rating" src="https://images.hs-plus.com/assets/STEPPER%20test-0/9b273ca726803_stars-v2-5.svg" alt="5 stars">
											<span>&#x2013;&#xA0;Sofija</span>
											<img class="hero-reviews__descr-verif" src="https://images.hs-plus.com/assets/STEPPER%20test-0/946eb1cb9c3bc_icon-verified.svg" alt="verified">
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="hero-reviews-item">
									<div class="hero-reviews__photo">
										<img class="hero-reviews__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/e48acee6b1eb3_review-autor-3.jpg" alt>
									</div>
									<div class="hero-reviews__descr">
										<div class="hero-reviews__descr-text">
											<p>Preizkusil sem ne&#x161;teto vlo&#x17E;kov, a nobeni se ne morejo primerjati s&#xA0;STEPEASE. Razlika v udobju in po&#x10D;utju je res opazna.</p>
										</div>
										<div class="hero-reviews__descr-author">
											<img class="hero-reviews__descr-rating" src="https://images.hs-plus.com/assets/STEPPER%20test-0/9f614535da995_stars-v2-5.svg" alt="5 stars">
											<span>&#x2013;&#xA0;Ivan</span>
											<img class="hero-reviews__descr-verif" src="https://images.hs-plus.com/assets/STEPPER%20test-0/5e1a7c138bb3b_icon-verified.svg" alt="verified">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hero-reviews-pagination"></div>
					</div>

					<!-- <p class="urgency-text">
						<strong>NI NA VOLJO NA ALIEXPRESS/TEMU</strong>
					</p> -->

					<ul class="product-benefits">
						<li class="product-benefits__item">
							<img class="product-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/00786c49ba9ea_icon-reduce_pain.png" alt>
							<span class="product-benefits__item-text">Zmanj&#x161;aj bole&#x10D;ino</span>
						</li>
						<li class="product-benefits__item">
							<img class="product-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/0c1cc53330fbc_icon-all_day_comfort.png" alt>
							<span class="product-benefits__item-text">Udobje ves dan</span>
						</li>
						<li class="product-benefits__item">
							<img class="product-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/0baa7b8771bec_icon-arch_support.png" alt>
							<span class="product-benefits__item-text">Podpora loku</span>
						</li>
					</ul>

					<!-- <a class="btn btn--bg sct-hero__btn" href="#">Learn More</a> -->
				</div>
			</div>
		</section>

		<section class="section sct-cure">
			<div class="container">
				
				<div class="sct-cure__content">
					<div class="sct-cure__descr">
						<h2 class="sct-cure__title"><span class="accent">Olaj&#x161;aj</span> bole&#x10D;ine v stopalih</h2>
						<p class="sct-cure__text">Spoznaj vlo&#x17E;ke STEPEASE &#x2013; popolno udobje za tvoja stopala. Ponovno odkrij veselje do stanja, hoje in &#x17E;ivljenja brez bole&#x10D;in v stopalih.</p>
					</div>
					<div class="sct-cure__illustr">
						<img src="https://images.hs-plus.com/assets/STEPPER%20test-0/e07e5f3fd5613_stepease-animation.gif" alt>
						<!-- <video poster="assets/img/cure/STEPPER-video-preview.jpg" width="400" loop muted autoplay playsinline webkit-playsinline>
							<source type="video/webm" src="https://products.demo-salesgate.eu/app/uploads/2025/08/STEPPER-3831127614011-LPtest15__180825.webm">
							<source type="video/mp4" src="https://products.demo-salesgate.eu/app/uploads/2025/08/STEPPER-3831127614011-LPtest15__180825.mp4">
						</video> -->
					</div>
				</div>

			</div>
		</section>

		<div class="horizontal-ticker horizontal-ticker-sections">
			<div class="horizontal-ticker__container">
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
				<p class="horizontal-ticker__item">&#x1F30D; Sledenje po&#x161;iljki z zavarovano dostavo</p>
				<p class="horizontal-ticker__item">&#x1F60A; Ve&#x10D; kot 200&#xA0;000 zadovoljnih strank</p>
				<p class="horizontal-ticker__item">&#x1F6E1;&#xFE0F; 90-dnevno jamstvo za vra&#x10D;ilo denarja</p>
			</div>
		</div>

		<section class="section sct-comparison">
			<div class="container">
				<div class="sct-comparison__content">
					<div class="sct-comparison__illustr">
						<div class="comparison">
							<div class="comparison__container">
								<img class="comparison__image before" src="https://images.hs-plus.com/assets/STEPPER%20test-0/a624d13e6cb5_comparison-before.jpg" alt="before">
								<span class="comparison__text before">Pred</span>
								<img class="comparison__image after" src="https://images.hs-plus.com/assets/STEPPER%20test-0/11ec4acb45091_comparison-after.jpg" alt="after">
								<span class="comparison__text after">Po</span>
								<div class="comparison__slider-line"></div>
								<div class="comparison__slider-icon"></div>
								<input type="range" class="comparison__range" min="0" max="100">
							</div>
						</div>
					</div>
					<div class="sct-comparison__descr">
						<h2 class="sct-comparison__title">Razlika, ki jo prina&#x161;a <span class="accent">STEPEASE</span></h2>
						<p class="sct-comparison__text">Preizkusite spremembo na lastnih stopalih in zakorakajte v svetlej&#x161;o, nebole&#x10D;o prihodnost &#x17E;e danes.</p>
					</div>
				</div>
				<ul class="comparison-benefits">
					<li class="comparison-benefits__item">
						<img class="comparison-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3f69429efc2c1_star_44dp_FF5B00_FILL1_wght400_GRAD0_opsz48.svg" alt>
						<!-- <span class="comparison-benefits__item-icon material-symbols-outlined filled">star</span> -->
						<h3 class="comparison-benefits__item-title">Izbolj&#x161;ajte dr&#x17E;o</h3>
						<span class="comparison-benefits__item-text">Pravilna opora loka spodbuja bolj&#x161;o poravnavo hrbtenice.</span>
					</li>
					<li class="comparison-benefits__item">
						<img class="comparison-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/4ccb9a26eeaaf_bolt_44dp_FF5B00_FILL1_wght400_GRAD0_opsz48.svg" alt>
						<!-- <span class="comparison-benefits__item-icon material-symbols-outlined filled">bolt</span> -->
						<h3 class="comparison-benefits__item-title">Pove&#x10D;ajte zmogljivost</h3>
						<span class="comparison-benefits__item-text">Vsak korak je la&#x17E;ji in bolj pro&#x17E;en, hoja ter tek postaneta prijetnej&#x161;a.</span>
					</li>
					<li class="comparison-benefits__item">
						<img class="comparison-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/4085f689fbaa9_straighten_44dp_FF5B00_FILL1_wght400_GRAD0_opsz48.svg" alt>
						<!-- <span class="comparison-benefits__item-icon material-symbols-outlined filled">straighten</span> -->
						<h3 class="comparison-benefits__item-title">Nastavljiva velikost</h3>
						<span class="comparison-benefits__item-text">Preprosto odre&#x17E;ite po &#x10D;rtkani liniji s &#x161;karjami.</span>
					</li>
					<li class="comparison-benefits__item">
						<img class="comparison-benefits__item-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/039dfb3291eee_wash_44dp_FF5B00_FILL1_wght400_GRAD0_opsz48.svg" alt>
						<!-- <span class="comparison-benefits__item-icon material-symbols-outlined filled">wash</span> -->
						<h3 class="comparison-benefits__item-title">Enostavno pranje</h3>
						<span class="comparison-benefits__item-text">Ro&#x10D;no operite z milom in vodo.</span>
					</li>
				</ul>
			</div>
		</section>

		<section class="section sct-purposes">
			<div class="container-wide">
				<div class="sct-purposes__content">
					<h2 class="sct-purposes__title">Ustvarjeni za <span class="accent">vse prilo&#x17E;nosti</span></h2>
					<div class="swiper purposes-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/e54dd205a5d4e_purposes-1.jpg" alt><span>Ekstremni &#x161;porti</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/3f3a362b9ef86_purposes-2.jpg" alt><span>Izstopajte iz mno&#x17E;ice</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/94d87998d13fd_purposes-3.jpg" alt><span>Tek v naravi</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/b507d66504f75_purposes-4.jpg" alt><span>Re&#x161;evanje &#x17E;ivljenj</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/8263da3f16fba_purposes-5.jpg" alt><span>Avantura</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/02df5692c8645_purposes-6.jpg" alt><span>Nakupovanje</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/c565f489a2adc_purposes-7.jpg" alt><span>Ogled znamenitosti</span></div>
							<div class="swiper-slide purposes-slider__item"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/97eea74cbf81_purposes-8.jpg" alt><span>Dolge izmene</span></div>
						</div>
						<div class="swiper-nav-buttons">
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>
					<div class="purposes-slider-pagination"></div>
				</div>
			</div>
		</section>

		<div class="horizontal-ticker horizontal-ticker-sections">
			<div class="horizontal-ticker__container">
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Opora loka in masa&#x17E;ne to&#x10D;ke</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Uravnavanje temperature in zra&#x10D;nost</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Ve&#x10D; samozavesti pri vsakem koraku</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Odpravlja neprijeten vonj</p>
				<p class="horizontal-ticker__item">&#x1F9E1; Laj&#x161;a bole&#x10D;ine, napetost in nelagodje</p>
			</div>
		</div>

		<section class="section sct-loockat">
			<div class="container">
				<div class="sct-loockat__content">
					<h2 class="sct-loockat__title">Poglejte, kako drugi <span class="accent">obu&#x17E;ujejo svoje vlo&#x17E;ke STEPEASE</span></h2>
					<p class="sct-loockat__text">Resni&#x10D;ne ocene resni&#x10D;nih uporabnikov</p>

					<!-- SLIDER ONE -->
					<div class="loockat-slider__wrapper video">
						<div class="swiper loockat-video-slider">
							<div class="swiper-wrapper">
								<!-- slide 1 -->
								<div class="swiper-slide loockat-video-slider__item">
									<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://fast.wistia.com/player.js" async></script><script src="https://fast.wistia.com/embed/wl5epz67sg.js" async type="module"></script><style>wistia-player[media-id='wl5epz67sg']:not(:defined) { background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/wl5epz67sg/swatch'); display: block; filter: blur(5px); padding-top:133.33333333333334%; }</style> <wistia-player media-id="wl5epz67sg" seo="false" aspect="0.75"></wistia-player>
								</div>
								<!-- slide 2 -->
								<div class="swiper-slide loockat-video-slider__item">
									<script src="https://fast.wistia.com/player.js" async></script><script src="https://fast.wistia.com/embed/n4bf7vqjoh.js" async type="module"></script><style>wistia-player[media-id='n4bf7vqjoh']:not(:defined) { background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/n4bf7vqjoh/swatch'); display: block; filter: blur(5px); padding-top:133.33333333333334%; }</style> <wistia-player media-id="n4bf7vqjoh" seo="false" aspect="0.75"></wistia-player>
								</div>
								<!-- slide 3 -->
								<div class="swiper-slide loockat-video-slider__item">
									<script src="https://fast.wistia.com/player.js" async></script><script src="https://fast.wistia.com/embed/1pmx7n0i70.js" async type="module"></script><style>wistia-player[media-id='1pmx7n0i70']:not(:defined) { background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/1pmx7n0i70/swatch'); display: block; filter: blur(5px); padding-top:133.33333333333334%; }</style> <wistia-player media-id="1pmx7n0i70" seo="false" aspect="0.75"></wistia-player>
								</div>
							</div>
						</div>

						<div class="swiper-nav-buttons">
							<div class="swiper-button-prev loockat-video-prev"></div>
							<div class="swiper-button-next loockat-video-next"></div>
						</div>
						<div class="loockat-video-pagination"></div>
					</div>

					<!-- SLIDER TWO -->
					<div class="loockat-slider__wrapper image">
						<div class="swiper loockat-slider">
							<div class="swiper-wrapper">

								<div class="swiper-slide loockat-slider__item loockat-card">
									<div class="loockat-card__photo">
										<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/0585ca918b355_Stepease_worker.jpg" alt>
										<div class="loockat-card__photo-icon-wrapper">
											<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/1e6d5f307f919_icon-quote.svg" alt>
										</div>
									</div>
									<div class="loockat-card__info">
										<img class="loockat-card__rating-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/223de4527c91b_stars-v2-5.svg" alt>
										<h4 class="loockat-card__title">Gradbeni delavec</h4>
										<p class="loockat-card__text">Svoje dni pre&#x17E;ivim na betonskih tleh v delovnih &#x10D;evljih s kovinsko kapico. Ortopedski vlo&#x17E;ki z masa&#x17E;nimi to&#x10D;kami | STEPEASE odli&#x10D;no bla&#x17E;ijo udarce in nudijo podporo, kar zmanj&#x161;uje obremenitev stopal in sklepov. Presene&#x10D;en sem, koliko so mi pomagali &#x2013; o njih sem povedal vsem sodelavcem.</p>
										<span class="loockat-card__name">Nino</span>
									</div>
								</div>
								<!--  -->
								<div class="swiper-slide loockat-slider__item loockat-card">
									<div class="loockat-card__photo">
										<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3e6a94a56376b_Stepease_nurse.jpg" alt>
										<div class="loockat-card__photo-icon-wrapper">
											<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/c0e82bee8b0a3_icon-quote.svg" alt>
										</div>
									</div>
									<div class="loockat-card__info">
										<img class="loockat-card__rating-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/dd5ae1daa28d4_stars-v2-5.svg" alt>
										<h4 class="loockat-card__title">Medicinska sestra</h4>
										<p class="loockat-card__text">Kot medicinska sestra sem ves dan na nogah. Ko sem jih prvi&#x10D; vstavila, sem takoj za&#x10D;utila razliko. Podpora loka je odli&#x10D;na in prina&#x161;a prepotrebno olaj&#x161;anje. Mehka blazina popolno ubla&#x17E;i stalne pritiske na stopala.</p>
										<span class="loockat-card__name">Lidija</span>
									</div>
								</div>
								<!--  -->
								<div class="swiper-slide loockat-slider__item loockat-card">
									<div class="loockat-card__photo">
										<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/cc70e89aec408_Stepease_service.jpg" alt>
										<div class="loockat-card__photo-icon-wrapper">
											<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/13dbfb108cd5a_icon-quote.svg" alt>
										</div>
									</div>
									<div class="loockat-card__info">
										<img class="loockat-card__rating-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/a53e7aed2de02_stars-v2-5.svg" alt>
										<h4 class="loockat-card__title">Zaposlen v gostinstvu</h4>
										<p class="loockat-card__text">Vau, ti vlo&#x17E;ki so presegli vsa moja pri&#x10D;akovanja! Po dveh dneh no&#x161;enja med 12-urnimi izmenami sem ugotovil, da so resni&#x10D;no izjemni. So izredno udobni, nudijo oporo ves dan &#x2013; naro&#x10D;il sem &#x161;e dva para!</p>
										<span class="loockat-card__name">Erik</span>
									</div>
								</div>
								<!--  -->
								<div class="swiper-slide loockat-slider__item loockat-card">
									<div class="loockat-card__photo">
										<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/94b5200db8b78_Stepease_runner.jpg" alt>
										<div class="loockat-card__photo-icon-wrapper">
											<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/6e0f16ef1cae7_icon-quote.svg" alt>
										</div>
									</div>
									<div class="loockat-card__info">
										<img class="loockat-card__rating-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/c72597c7f4883_stars-v2-5.svg" alt>
										<h4 class="loockat-card__title">Aktiven teka&#x10D;</h4>
										<p class="loockat-card__text">Sem predan teka&#x10D; in preizkusil sem &#x17E;e veliko vlo&#x17E;kov. Odkar uporabljam ortopedske vlo&#x17E;ke z masa&#x17E;nimi to&#x10D;kami STEPEASE, opa&#x17E;am bolj&#x161;o zmogljivost in hitrej&#x161;e okrevanje. Toplo priporo&#x10D;am vsem teka&#x10D;em, ki &#x17E;elijo izbolj&#x161;ati rezultate in za&#x161;&#x10D;ititi svoja stopala.</p>
										<span class="loockat-card__name">Nace</span>
									</div>
								</div>
								<!--  -->
								<div class="swiper-slide loockat-slider__item loockat-card">
									<div class="loockat-card__photo">
										<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3896d617c56ae_Stepease_dog_walker.jpg" alt>
										<div class="loockat-card__photo-icon-wrapper">
											<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/cef046065b9e2_icon-quote.svg" alt>
										</div>
									</div>
									<div class="loockat-card__info">
										<img class="loockat-card__rating-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/cbbb245c372fa_stars-v2-5.svg" alt>
										<h4 class="loockat-card__title">Lastnica psa</h4>
										<p class="loockat-card__text">Moji vsakodnevni sprehodi s psom so zdaj povsem druga&#x10D;ni. Prej sem imela bole&#x10D;a stopala in utrujene noge, zdaj pa brez te&#x17E;av sledim svojemu kosmatincu. Ortopedski vlo&#x17E;ki z masa&#x17E;nimi to&#x10D;kami STEPEASE nudijo odli&#x10D;no oporo, udobje in izbolj&#x161;ajo dr&#x17E;o.</p>
										<span class="loockat-card__name">Sanja</span>
									</div>
								</div>
								<!--  -->

							</div>
						</div>
						<div class="swiper-nav-buttons">
							<div class="swiper-button-prev loockat-main-prev"></div>
							<div class="swiper-button-next loockat-main-next"></div>
						</div>
						<div class="loockat-slider-pagination"></div>
					</div>

				</div>
			</div>
		</section>


		<section class="section sct-results">
			<div class="container">
				
				<div class="sct-results__content">
					<div class="sct-results__descr">
						<h2 class="sct-results__title"><span class="accent">Prihodnost je </span>brez bole&#x10D;in v stopalih</h2>
						<!-- <p class="sct-results__text"></p> -->
					</div>
					<div class="sct-results__illustr results">
						<div class="results__rows-container">
							<div class="results__row">
								<div class="results__percentage" style="--percentage: 95%">
									<p>95&#xA0;%</p>
								</div>
								<div class="results__text">
									<p><strong>Manj bole&#x10D;in v stopalih: </strong>opora loka in bla&#x17E;enje ob&#x10D;utno zmanj&#x161;ata bole&#x10D;ine v stopalih.</p>
								</div>
							</div>
							<div class="results__row">
								<div class="results__percentage" style="--percentage: 94%">
									<p>94&#xA0;%</p>
								</div>
								<div class="results__text">
									<p><strong>Ve&#x10D;je udobje: </strong>udobje pri vsakem koraku, manj utrujenosti in nelagodja.</p>
								</div>
							</div>
							<div class="results__row">
								<div class="results__percentage" style="--percentage: 90%">
									<p>90&#xA0;%</p>
								</div>
								<div class="results__text">
									<p><strong>Manj&#x161;e tveganje za po&#x161;kodbe: </strong>bla&#x17E;enje in opora pomagata zmanj&#x161;ati mo&#x17E;nost po&#x161;kodb stopal.</p>
								</div>
							</div>
						</div>
						<div class="results__caption">
							<p>* Rezultati temeljijo na klini&#x10D;nih in potro&#x161;ni&#x161;kih raziskavah.</p>
						</div>
						<button class="btn-arw results__btn" data-scroll=".scroll-target" data-scroll-offset="120"><span>Izkoristi ponudbo</span></button>
						<!-- <button class="btn-arw results__btn" onclick="submitproductform()"><span>____</span></button> -->
					</div>
				</div>

			</div>
		</section>

		<div class="horizontal-ticker horizontal-ticker-sections">
			<div class="horizontal-ticker__container">
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5;NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5;NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5;NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NAJVE&#x10C;JA RAZPRODAJA DO ZDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA SE KMALU IZTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANI DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NAJVE&#x10C;JA RAZPRODAJA DO ZDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA SE KMALU IZTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANI DO 60%</p>
			</div>
		</div>

		<section class="section sct-special">
			<div class="container">
				<div class="sct-special__content">
					<div class="sct-special__descr">
						<h2 class="sct-special__title">Kaj dela STEPEASE tako <span class="accent">posebne</span>?</h2>
						<p class="sct-special__text">Na&#x161;a predanost je va&#x161;emu udobju in zadovoljstvu &#x2013; trudimo se, da bi resni&#x10D;no izbolj&#x161;ali tvoje vsakdanje &#x17E;ivljenje.</p>
					</div>
					<div class="sct-special__table">
						<table class="compar-table compar-table-template">
							<thead>
								<tr>
									<th>&#xA0;</th>
									<th class="compar-table__logo" style="width: 120px;padding-inline: 0;"><img src="https://images.hs-plus.com/assets/STEPPER%20test-0/099e02a69c373_logo-stepease-orange-bg.svg" alt="StepEase" width="100"></th>
									<th class="compar-table__others" style="width: 100px;padding-inline: 0;">Drugi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Bla&#x17E;enje</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Zra&#x10D;no</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Takoj&#x161;nje olaj&#x161;anje</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Podpora loka stopala</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Absorpcija udarcev</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Odprava neprijetnega vonja</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
								</tr>
								<tr>
									<td class="compar-table__row-name highlighted-cell">
										<strong>Drago</strong>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#121212;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
												<path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
											</svg>
										</div>
									</td>
									<td class="regular-cell">
										<div class="compar-table__icon" style="--icon-color:#53af01;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
											</svg>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section class="section sct-experts">
			<div class="container">
				<div class="sct-experts__content">
					<div class="sct-experts__descr">
						<h2 class="sct-experts__title">Odkrijte, zakaj <span class="accent">strokovnjaki priporo&#x10D;ajo</span> STEPEASE</h2>
						<!-- <p class="sct-experts__text"></p> -->
						<div class="sct-experts__card">
							<div class="loockat-card">
								<div class="loockat-card__photo">
									<img class="loockat-card__photo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/d9f0fad94b90a_doctor.jpg" alt>
									<div class="loockat-card__photo-icon-wrapper">
										<img class="loockat-card__photo-icon" src="https://images.hs-plus.com/assets/STEPPER%20test-0/3d856237fa094_icon-quote.svg" alt>
									</div>
								</div>
								<div class="loockat-card__info">
									<!-- <img class="loockat-card__rating-img" src="assets/img/icons/stars-v2-5.svg" alt=""> -->
									<h4 class="loockat-card__title">Ciljno olaj&#x161;anje</h4>
									<p class="loockat-card__text">Kot podolog z dolgoletnimi izku&#x161;njami pri zdravljenju te&#x17E;av, kot sta plosko stopalo in plantarni fasciitis, priporo&#x10D;am ortopedske vlo&#x17E;ke z masa&#x17E;nimi to&#x10D;kami STEPEASE. Njihova edinstvena zasnova nudi ciljno podporo stopalnim lokom, enakomerno porazdeli pritisk in zmanj&#x161;a obremenitev plantarne fascije. Ob redni uporabi pacienti opazijo ob&#x10D;utno izbolj&#x161;anje simptomov. Z zaupanjem priporo&#x10D;am Ortopedske vlo&#x17E;ke z masa&#x17E;nimi to&#x10D;kami | STEPEASE kot nepogre&#x161;ljiv dodatek tvoji obutvi.</p>
									<span class="loockat-card__name">Dr. Toma&#x17E; Novak &#x2013; Podiater</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section sct-ebook">
			<div class="container">
				<div class="sct-ebook__content">
					<div class="sct-ebook__top">
						<div class="sct-ebook__top-image_box">
							<div class="sct-ebook__top-image"><img src="https://images.hs-plus.com/assets/shared-images/42c652c613426_batch_stepease_cover_SI.jpg"></div>
						</div>
						<div class="sct-ebook__top-content">
							<h2 class="sct-ebook__title">Ponudba <span class="accent">brezpla&#x10D;ne</span> e-knjige</h2>
							<p class="sct-ebook__text">Odkrijte skrivnosti z na&#x161;o ekskluzivno e-knjigo, popolnoma brezpla&#x10D;no ob vsakem naro&#x10D;ilu!</p>
						</div>
					</div>
					<div class="sct-ebook__card">
						<span class="sct-ebook__card-badge">e-knjiga</span>
						<div class="sct-ebook__card-title_box">
							<h3 class="sct-ebook__card-title">Obvladovanje zdravja stopal: Va&#x161; vodnik do sre&#x10D;nih stopal</h3>	
						</div>
						<p class="sct-ebook__card-text"><span>BREZPLA&#x10C;NO</span> ob vsakem nakupu</p>
						<ul class="sct-ebook__card-list">
							<li class="sct-ebook__card-item">Celovito znanje o stopalih</li>
							<li class="sct-ebook__card-item">Razlaga prednosti vlo&#x17E;kov</li>
							<li class="sct-ebook__card-item">Uporaba tehnik zdravljenja stopal</li>
							<li class="sct-ebook__card-item">Smernice za vsakodnevno nego</li>
							<li class="sct-ebook__card-item">Celotno dobro po&#x10D;utje stopal</li>
						</ul>
						<button class="btn-arw results__btn sct-ebook__btn" data-scroll=".scroll-target" data-scroll-offset="120"><span>ZAHTEVAJTE PONUDBO</span></button>
					</div>
				</div>
			</div>
		</section>

		<section class="section sct-reviews">
			<div class="container">
				<!-- <h2 class="sct-reviews__title">Zadovoljni uporabniki</h2> -->

				<div class="sct-reviews__content">
					<div class="whole_reviews_section">    <div class="trustpilot-title" id="reviewsTop">
    <!---->
    <h2 class="happy-customers">Zadovoljni uporabniki</h2>
    </div>
        <div id="product__reviews" class="user-reviews" data-masonry="{ &quot;itemSelector&quot;: &quot;.products__review&quot;, &quot;columnWidth&quot;: 200}"></div>
        <div id="pagination" class="reviews__pagination"></div>
        <button id="review-button" class="review-button">Oddaj mnenje</button><!-- Trigger/Open The Modal -->

<!-- Review sent -->
<div id="review-sent" class="review-sent" style="display: none;"><p>Va&#x161;e mnenje je bilo uspe&#x161;no poslano</p></div>

<!-- The Modal -->
<div id="review-modal" class="review-modal">
    <!-- Modal content -->
    <div class="review-modal-content">
        <div class="review-modal-header">
            <h3 class="review-modal-title">Vpi&#x161;i mnenje</h3>
            <span class="review-modal-close">&#xD7;</span>
        </div>
        <div class="review-modal-body">
            <!-- review-form -->
            <form id="review-form" action="https://diwpk57gr7.execute-api.eu-central-1.amazonaws.com/prod/submitReview" enctype="multipart/form-data" method="POST" target="formFrame">
                <p><label class="review-form__label" for="name">Ime:</label></p>
                <p><input class="review-form__input" name="name" type="text" maxlength="40" placeholder="Ime (javno vidno)" required></p>
                <p><label class="review-form__label" for="email">E-mail:</label></p>
                <p><input class="review-form__input" name="email" maxlength="60" type="email" placeholder="E-mail (ni javno viden)" required></p>
                <p><label class="review-form__label">Ocena:</label></p>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5"><label for="star5" title="5">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4"><label for="star4" title="4">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3"><label for="star3" title="3">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2"><label for="star2" title="2">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1"><label for="star1" title="1">1 star</label>
                </div>
                <p><label class="review-form__label clearfix" for="message">Mnenje:</label></p>
                <p><textarea id="review-form__message" class="review-form__textarea" name="message" maxlength="2000" placeholder="Napi&#x161;i mnenje"></textarea></p>
                <p><input class="review-form__input review-form__input-file" id="review-image" type="file" name="photo" multiple accept="image/*">
                </p><p><input class="review-form__input review-form__btn" type="submit" value="Po&#x161;lji mnenje"></p>
                <input id="reviewFormSku" style="display:none" name="ProductSku" value>
                <input id="reviewFormCountry" style="display:none" name="landingCountry" value>
            </form>
            <!-- END review-form -->
        </div>
    </div>
</div>
<iframe name="formFrame" id="formFrame" style="display:none"></iframe>

<style>
/* ============================== */
/* ======= Write a review ======= */
/* ============================== */

/* ======= review sent ======= */
.review-sent {
	position: fixed;
	top: 5rem;
	left: 50%;
	transform: translateX(-50%);
}
.review-sent p {				
	background-color: lightgreen;
	padding: 10px 15px;
	text-align: center;
	color: #000;
	border-radius: 2em;
	font-size: 1rem;
}

/* ======= star rating ======= */
.rate {
	float: left;
	height: 46px;
	/* padding: 0 10px; */
}
.rate:not(:checked) > input {
	position: absolute;
	top: -9999px;
}
.rate:not(:checked) > label {
	float: right;
	width: 1em;
	overflow: hidden;
	white-space: nowrap;
	cursor: pointer;
	font-size: 2rem;
	color: #ccc;
}
.rate:not(:checked) > label:before {
	content: "★ ";
}
.rate > input:checked ~ label {
	color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
	color: #ffae00;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
	color: #ffae00;
}

/* clearfix */
.clearfix::before {
	content: "";
	clear: both;
	display: table;
}
/* ======= END star rating ======= */


/* ======= modal window ======= */
/* The Modal (background) */
.review-modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1000000; /* Sit on top */
	padding-top: 7vw; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0, 0, 0); /* Fallback color */
	background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
	color: #000;
}
/* Modal Content */
.review-modal-content {
	position: relative;
	background-color: #fefefe;
	margin: auto;
	padding: 0;
	/* border: 1px solid #888; */
	border-radius: .2em;
	width: 100%;
	max-width: 500px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-webkit-animation-name: animatetop;
	-webkit-animation-duration: 0.4s;
	animation-name: animatetop;
	animation-duration: 0.4s;
}
/* Add Animation */
@-webkit-keyframes animatetop {
	from {
		top: -300px;
		opacity: 0;
	}
	to {
		top: 0;
		opacity: 1;
	}
}
@keyframes animatetop {
	from {
		top: -300px;
		opacity: 0;
	}
	to {
		top: 0;
		opacity: 1;
	}
}

/* The Close Button */
.review-modal-close {
	color: white;
	font-size: 1.75rem;
	font-weight: bold;
}
.review-modal-close:hover,
.review-modal-close:focus {
	color: #ccc;
	text-decoration: none;
	cursor: pointer;
}
.review-modal-title {
	font-size: 1.2rem;
	margin: 0;
}
.review-modal-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px 15px;
	background-color: #222;
	color: white;
}
.review-modal-body {
	padding: 15px;
}
/* ======= END modal window ======= */


/* ======= form style ======= */
.review-form {
	font-size: 0.875rem;
}
.review-form p {
	margin: 0;
	line-height: 1;
}

.review-form__label,
.review-form__input,
.review-form__textarea {
	margin-top: .5rem;
	margin-bottom: .5rem;
}

.review-form__input,
.review-form__textarea {
	width: 100%;
	padding: .5rem;
	border: 1px solid #ccc;
}

.review-form__input-file {
	border: none;
	padding: 0;
	margin-top: 0;
}

.review-form__textarea {
	min-height: 5ch;
	height: 12ch;
	resize: vertical;
}
.review-form__btn {
	cursor: pointer;
	border: none;
	color: #fff;
	background-color: #222;
	padding: 15px;
	border-radius: .2em;
	font-weight: 700;
	text-transform: uppercase;
	font-size: 0.875rem;
}
.review-form__btn:hover {
	background-color: #000;
}

.review-button {
	display: block;
    cursor: pointer;
    margin-top: 1rem;
    padding: 0;
    border: none;
    text-transform: uppercase;
	font-size: 0.875rem;
    font-weight: 700;
    background: none;
    margin-right: auto;
    margin-left: auto;
	color: inherit;
	background-image: linear-gradient(currentColor, currentColor);
    background-position: 0% 100%;
    background-repeat: no-repeat;
    background-size: 0% 2px;
    transition: background-size .3s;
}
.review-button:hover {
	background-size: 100% 2px;
}
/* ======= END form style ======= */

/* ============================== */
/* ===== END Write a review ===== */
/* ============================== */
</style>

<script>
	var modal = document.getElementById("review-modal"); // Get the modal
	var btn = document.getElementById("review-button"); // Get the button that opens the modal
	var span = document.getElementsByClassName("review-modal-close")[0]; // Get the <span> element that closes the modal
	var sentMessage = document.querySelector(".review-sent");
	btn.onclick = function () { modal.style.display = "block"; } // When the user clicks the button, open the modal 
	span.onclick = function () { modal.style.display = "none"; } // When the user clicks on <span> (x), close the modal
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none"; // When the user clicks anywhere outside of the modal, close it
			sentMessage.style.display = "block";
			setInterval(function () { sentMessage.style.display = "none"; }, 3000);
		}
	}


	//review Form
	/*var url = 'http://localhost:3012/dev/submitReview';*/

	/*function initReviewForm(method) {
    	if (window.jQuery && 
			window.dataLayer[1] != undefined && 
			window.dataLayer[1]["product SKUs"] != undefined) {
        	
			method();
    	} else {
        	setTimeout(function() { initReviewForm(method) }, 50);
    	}
	}


	initReviewForm(function(){
		initReviewFormAdditionalFields();
		$('#review-form').submit(function(e){
			setTimeout(function() {
				$('#review-modal').attr('style', 'display: none');
				$('#review-sent').attr('style', 'display: block');
				setTimeout(function(e){
					$('#review-sent').attr('style', 'display: none')
				}, 3000);
			},1000);
		});
	});

	function initReviewFormAdditionalFields(){
		var sku = 'not_in_data_layer';
		var country = 'not_in_data_layer';

		if(window.dataLayer[1]['product SKUs'].length > 0){
			sku = window.dataLayer[1]['product SKUs'][0];
		}

		if(window.dataLayer[1]['country_code']){
			country = window.dataLayer[1]['country_code'];
		}

		$('#reviewFormSku').val(sku);
		$('#reviewFormCountry').val(country);
	}*/

	//review Form
    /*var url = 'http://localhost:3012/dev/submitReview';*/

	function initReviewForm(method) {
    	if (window.jQuery && 
			window.dataLayer[1] != undefined && 
			window.dataLayer[1]["product SKUs"] != undefined) {
        	
			method();
    	} else {
        	setTimeout(function() { initReviewForm(method) }, 50);
    	}
	}//initReviewForm

    initReviewForm(function() {
        initReviewFormAdditionalFields();

        var imageBase64String;
        var reader = new FileReader();

        reader.onload = function () {
            imageBase64String = reader.result;
            sendReviewForm(imageBase64String);
            //console.log(reader.result);//base64encoded string
        };
        reader.onerror = function (error) {
            imageBase64String = "";
            sendReviewForm(imageBase64String);
            //console.log('Error: ', error);
        };
        
        $('#review-form').submit(function(e){
            e.preventDefault();

            setTimeout(function() {
                $('#review-modal').attr('style', 'display: none');
                $('#review-sent').attr('style', 'display: block');
                setTimeout(function(e){
                    $('#review-sent').attr('style', 'display: none')
                }, 3000);
            },1000);
            var fileInput = document.getElementById('review-image');
            
			if(fileInput.files.length === 1){
            	reader.readAsDataURL(fileInput.files[0]);
			}else {
				sendReviewForm(imageBase64String);
			}
        });

        function sendReviewForm(imageBase64String){
            let formData = "";
            let boundary = "----WebKitFormBoundaryBuncsLkGs9zPqF9n";
            let dataBoundary = 'multipart/form-data' + ";boundary=" + boundary;
            //let formData = $('#review-form').serialize();
            let inputs = [];
            
            //$('#review-form :input').each(inp)

            let index = 0;
            $('#review-form *').filter('input').each(function() {
                let property;
                if(this.type === 'file'){
                    property = this.name + "=" + imageBase64String;
                }
				else if(this.name === 'rate'){
					if(this.checked == true){
						property = this.name + "=" + this.value;
					}else{}
				}
				else if(this.name === '' || this.name === 'undefined'){
					
				}   
                else {
                    property = this.name + "=" + this.value;
                }

				if(property != undefined){
					if(index === 0){
						formData = property;
					}else {
						formData = formData + boundary + property;
					}
				}
                index++;
            });

			//message
			property = $("#review-form__message").attr('name') + "=" + $("#review-form__message").val();
			if(property != undefined){
				formData = formData + boundary + property;
			}

            //console.log(formData);
            
            //let dataType = 'multipart/form-data'; //boundary=----WebKitFormBoundaryBuncsLkGs9zPqF9n'
            $.ajax({
                type: "POST",
				//url: 'http://localhost:3012/dev/submitReview',
				url: "https://diwpk57gr7.execute-api.eu-central-1.amazonaws.com/prod/submitReview",
                beforeSend: function(request) {
                    request.setRequestHeader("Content-Type", dataBoundary)
                },
                data: formData,
                success: true,
                dataType: "text"
            });
        }//sendReviewForm

        function initReviewFormAdditionalFields(){
            var sku = 'not_in_data_layer';
            var country = 'not_in_data_layer';

            if(window.dataLayer[1]['product SKUs'].length > 0){
                sku = window.dataLayer[1]['product SKUs'][0];
            }

            if(window.dataLayer[1]['country_code']){
                country = window.dataLayer[1]['country_code'];
            }

            $('#reviewFormSku').val(sku);
            $('#reviewFormCountry').val(country);
	    }//initReviewFormAdditionalFields

    });//initReviewForm 

</script><div class="back-to-top">
            <div class="go-to-cart will-scroll" id="backToTopButton" data-scroll=".scroll-target">
                <img class="back-to-top-button" title="Back to Top" src="https://images.vigo-shop.com/general/reviews/back-to-top.png">
                <p>Nazaj na izdelek</p>
            </div> 
        </div>
        <div id="imagePopup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
    background: rgba(0,0,0,0.8); justify-content:center; align-items:center; z-index:9999;">
    <span id="closePopup" style="position:absolute; top:20px; right:30px; color:#fff; font-size:2rem; cursor:pointer;">&#xD7;</span>
    <img id="popupImage" src style="max-width:90%; max-height:90%; border-radius:8px;">
        </div>
<style> 
.trustpilot-title {
    margin-top:1rem;
    pointer-events: none !important;
    cursor: default !important;
    }

@media(min-width: 799px){
    .trustpilot-title {
        display:flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
        }
    }
    
.happy-customers{
    font-weight: bold;
    text-align: center;
    margin: 1rem;
    margin-top:0;
    font-size:clamp(1.5rem, (2.2vw*var(--rem))/11.92, 1.8rem);
    }

/* Style for the whole reviews section */
.whole_reviews_section {
    margin: 40px auto;
    text-align: left;
}
/* Style for the reviews container */
.user-reviews {
    margin-top: 20px;
}

#product__reviews, .user-reviews {
    display:block;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    margin: 0 auto;
    padding: 0;
}

/* Force each review to occupy full width */
.products__review {
  width: 100%;
  display: block;
  box-sizing: border-box;
  overflow: visible;
  margin-bottom: 20px;
}

.products__review.hidden {
    display:none!important;
}

@media (min-width: 768px) {
  /* če želiš drugačne širine na večjih zaslonih, jih tu definiraj */
  .products__review.fullwidth-desktop {
    width: 100% !important;
  }
}

/* Style for individual review items */
.products__review {
    width: 100%;
    margin-bottom: 20px;
    background-color: #fff;
    box-sizing: border-box;
    overflow: hidden; 
    border-bottom: 1px #ff5b0040 solid;
}
/* Style for review images */
.img__review {
    max-width: 150px;
    height: 150px;
}
/* Style for description review*/
.description__review {
    padding: 0px 10px 10px 10px;
}
/* Style for review name */
.name__review {
    color:#ff5b00;
    font-weight: 400;
    font-size: 16px;
    line-height: 15px;
    margin-bottom:10px;
}

/* .name__review::after {
    content: url('https://images.vigo-shop.com/general/reviews/verifying-icon-black.png');
    margin-left: 5px;
    } */

/* Style for review rating */
.rating__review {
    font-size: 18px;
    color: #000;
    padding-top: 10px;
    padding-bottom: 10px;
}

.rating__review img {
    height: .8rem;
}

/* Style for review text */
.text__review {
    font-size: var(--step-0, 1rem);
    line-height:19px;
}

.cal-stars-link {
	display: inline-block;
	margin-top:.5rem !important;
	color: inherit;
}

.cal-stars-link:hover {
	color: inherit;
}

.cal-stars {
	display: flex;
    align-items: center;
}

.star-ratings {
	unicode-bidi: bidi-override;
	color: #d4d4d4;
	font-size: 1.75rem;
	position: relative;
	margin: 0;
	padding: 0;
}

.fill-ratings::before,
.empty-ratings::before {
	content: '★★★★★';
}

.fill-ratings {
    margin:auto;
    text-align:center;
	color: #fbc83d;
	padding: 0;
	position: absolute;
	z-index: 1;
	display: block;
	top: 0;
	left: 0;
	overflow: hidden;
}

.empty-ratings {
	padding: 0;
	display: block;
	z-index: 0;
}

.product-rating__text {
	margin-left: .5rem;
    color: inherit;
}

.product-rating__text strong{
    color: inherit;
}
   img[src=""]{
    display: none !important;
}

.products__review {
    /* Style for desktop - 5 reviews in a row */
    width: calc(100%);
    /* Style for tablet - 4 reviews in a row */
    @media (max-width: 1024px) {
        width: calc(100%);
    }
    /* Style for mobile - 2 reviews in a row */
    @media (max-width: 768px) {
        width: calc(100%);
    }
}

@media(max-width: 799px){
    .cal-stars-link {
		margin: auto;
	}
    .star-ratings {
        margin:auto;
		width: fit-content;
		text-align: center;
    }
    .cal-stars {
        display: block !important;
    }
    .buy_star-ratings {
        margin-left: 0.5rem;
    }
}

.reviews__pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
    margin: 1.5rem auto;
    flex-wrap: wrap;
}

.pagination-btn {
    border: 1px solid #000;
    border-radius: 8px;
    padding: 4px 10px;
    cursor: pointer;
    background-color: #fff;
    color: #000;
    font-size: 14px;
    user-select: none;
    transition: all 0.2s ease;
}

.pagination-btn.active {
    background-color: #000;
    color: #fff;
    cursor: default;
}

.pagination-btn:hover:not(.active) {
    background-color: #f0f0f0;
}

.back-to-top {
    text-align:center;
}
.go-to-cart{
    display:inline-flex;
    align-items:center;
    box-shadow:3px 3px 3px 3px #00000017;
    border-radius:30px;
    cursor: pointer;
    font-size: 14px;
    background-color:#fff;
    box-sizing:border-box;
    border:none;
    margin-top:1rem;
    }
.back-to-top-button {
  width:50px;
  cursor:pointer;
  margin-right:5px;
}
.go-to-cart p{
    margin-right:5px
}

.image__video{
    margin: 0px 10px 20px 10px;
    max-height: 150px !important;
    max-width: 150px !important;
}
</style>
<script>
    async function getReviewsFromUrl(url){
        let result = {
            reviews: [],
            averageRating: 0,
            allReviewsCount: 0
        };
        return new Promise(async (resolve, reject) => {  
            try {
                let reviewsResponse = await fetch(url, {
                    mode: 'cors',
                    method: 'GET',
                    headers: { 'Content-Type': 'application/json' },
                });
                let reviewsData = await reviewsResponse.json();
                if (reviewsData.reviews && reviewsData.averageRating && reviewsData.allReviewsCount) {
                    result = reviewsData;
                }
                resolve(result);
            } catch(err){
                resolve(result);
            }
        });
    }

    function getAppropriateBrandReviews(brandReviews){
        let filteredBrandReviews = [];
        try {
            if  (productSettings.reviewsTags.length === 0){
                filteredBrandReviews.push(...brandReviews.filter(x=>Array.from(x.tags).length === 0));
            } else if (productSettings.reviewsTags.length > 0){
                for (let i = 0; i  <  productSettings.reviewsTags.length; i++) {
                    for(let r = 0; r < brandReviews.length; r++){
                        let tags = Array.from(brandReviews[r].tags, x => x.name);
                        if(tags.includes(productSettings.reviewsTags[i])){
                            filteredBrandReviews.push(brandReviews[r]);
                            brandReviews.splice(r, 1);
                            r--;
                        }
                    }
                }
                filteredBrandReviews.push(...brandReviews.filter(x=>Array.from(x.tags).length === 0));
            }   
            return filteredBrandReviews;
        }catch(err){
            return [];
        }
    }

    function getHash(sku){
        var hash = 0, i, chr;
        if (sku.length === 0) return hash;
        for (i = 0; i < sku.length; i++) {
            chr = sku.charCodeAt(i);
            hash = ((hash << 5) - hash) + chr;
            hash |= 0;
        }
        return hash;
    }

    function generateRandomNumber(sku, min, max) {
        const hash = getHash(sku.toString());
        return min + (Math.abs(hash) % (max - min + 1));
    }

    let masonryGrid;

    function jQueryLoaded() {
        if (window.jQuery) {
            setTimeout(function () {
                try {
                    initRating();
                    setTimeout(function() {
                        masonryGrid.layout();
                    }, 300);
                } catch (e) {
                    console.error(e);
                }
            }, 300);
        } else {
            window.setTimeout("jQueryLoaded();", 500);
        }
    }

    // --- PAGINATION ---
    const reviewsPerPage = 10;
    let currentPage = 1;
    let totalPages = 1;

    function showPage(pageNum, shouldScroll = true) {
        const reviews = document.querySelectorAll('.products__review');
        totalPages = Math.ceil(reviews.length / reviewsPerPage);

        if (pageNum < 1) pageNum = 1;
        if (pageNum > totalPages) pageNum = totalPages;
        currentPage = pageNum;

        reviews.forEach((review, i) => {
            review.style.display =
                i >= (pageNum - 1) * reviewsPerPage && i < pageNum * reviewsPerPage
                    ? 'block'
                    : 'none';
        });

        masonryGrid.layout();
        renderPagination();

        if (shouldScroll) {
            const scrollTarget = document.getElementById('reviewsTop');
            if (scrollTarget) {
                const offset = 80; // pixels
                window.scrollTo({
                    top: scrollTarget.getBoundingClientRect().top + window.scrollY - offset,
                    behavior: 'smooth'
                });
            }
        }
    }

    function renderPagination() {
        const paginationContainer = document.getElementById('pagination');
        paginationContainer.innerHTML = '';

        totalPages = Math.ceil(document.querySelectorAll('.products__review').length / reviewsPerPage);
        if (totalPages <= 1) return;

        const createBtn = (text, page, disabled = false, active = false) => {
            const btn = document.createElement('span');
            btn.classList.add('pagination-btn');
            if (active) btn.classList.add('active');
            btn.textContent = text;
            if (!disabled && !active) {
                btn.addEventListener('click', () => showPage(page));
            } else if (disabled) {
                btn.style.visibility = 'hidden';
            }
            return btn;
        };

        const buttons = [];

        buttons.push(createBtn('<<', 1, currentPage === 1));
        buttons.push(createBtn('<', currentPage - 1, currentPage === 1));

        const start = Math.max(1, currentPage - 2);
        const end = Math.min(totalPages, start + 4);

        for (let i = start; i <= end; i++) {
            buttons.push(createBtn(i, i, false, i === currentPage));
        }

        buttons.push(createBtn('>', currentPage + 1, currentPage === totalPages));
        buttons.push(createBtn('>>', totalPages, currentPage === totalPages));

        buttons.forEach(b => paginationContainer.appendChild(b));
    }

    function initPagination() {
        showPage(1, false);
    }

    // --- STARS ---
    function initRating() {
        const starsContainers = document.querySelectorAll(".rating__review");
        starsContainers.forEach(container => {
            const rating = parseInt(container.innerText);
            container.innerHTML = "";
            for (let i = 1; i <= 5; i++) {
                const star = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                star.setAttribute("viewBox", "0 0 24 24");
                star.setAttribute("width", "20");
                star.setAttribute("height", "20");
                const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                path.setAttribute("d", "M12 .587l3.668 7.431 8.21 1.193-5.938 5.787 1.402 8.178L12 18.896l-7.342 3.86 1.402-8.178-5.938-5.787 8.21-1.193L12 .587z");
                path.setAttribute("fill", i <= rating ? "#ff5b00" : "#dedede");
                star.appendChild(path);
                container.appendChild(star);
            }
        });
    }

    (async function () {
        let allReviews = [];
        let allRating = 0;
        let allReviewsCount = 0;

        const productReviewsUrl = 'https://images.hs-plus.com/assets/reviews-v2/68f61cb507c783c77a1547ab_SI.json';
        const brandReviewsUrl = "https://images.hs-plus.com/assets/reviews-v2/" + brandSettings.name.toLowerCase() + "_"  + countrySettings.countryCode.toUpperCase() + ".json";
        const generalReviewsUrl = "https://images.hs-plus.com/assets/reviews-v2/general_product_reviews_" + countrySettings.countryCode.toUpperCase() + ".json";

        const getReviewsCalls = [
            getReviewsFromUrl(productReviewsUrl),
            getReviewsFromUrl(brandReviewsUrl),
            getReviewsFromUrl(generalReviewsUrl)
        ];

        function getSingleSku() {
            var sku = "";
            if (sku === ""){
                var skus = "['3831127616552','3831127616636','3831127616594','3831127616559','3831127616643','3831127616601','3831127616566','3831127616650','3831127616608','3831127616573','3831127616657','3831127616615','3831127616580','3831127616664','3831127616622','3831127616587','3831127616671','3831127616629','3831127626743','3831127626771','3831127626757','3831127626750','3831127626778','3831127626764']";
                if (skus.length > 0){
                    return skus[0];
                } else {
                    return "12345678";
                } 
            } else {
                return sku;
            }
        }

        await Promise.all(getReviewsCalls).then(results => {
            let productReviews  = results[0];
            let brandReviews = results[1];
            let generalReviews = results[2];

            let endIndex = generateRandomNumber(getSingleSku(), 0, Math.floor(generalReviews.reviews.length / 5));

            if(productReviews.reviews.length > 0){
                allReviews = productReviews.reviews;
                allReviews.push(...getAppropriateBrandReviews(brandReviews.reviews));
                allRating = productReviews.averageRating;
                allReviewsCount = productReviews.allReviewsCount;
            } else {
                allReviews.push(...getAppropriateBrandReviews(brandReviews.reviews));
                if(generalReviews.reviews.length > 0){
                    generalReviews.reviews = generalReviews.reviews.slice(endIndex);
                    allReviews.push(...generalReviews.reviews);
                }
                allRating = generalReviews.averageRating;
                allReviewsCount = generalReviews.allReviewsCount;                                        
            }
        });
        
        let revHtml = "";
        for (let i = 0; i < allReviews.length; i++) {
            let imageVideo = "";
            if (allReviews[i].imageUrl === "https://images.hs-plus.com/assets/review-images/") {
                imageVideo = `<div class="image__video"><img class="img__review" src=""><div class="video_review">${allReviews[i].script}</div></div>`;
            } else {
                imageVideo = `<div class="image__video"><img class="img__review" src="${allReviews[i].imageUrl}"><div class="video_review">${allReviews[i].script}</div></div>`;
            }
            revHtml += `<div class="products__review">
                            <div class="whole__review">
                                <div class="description__review">
                                    <div class="rating__review">${allReviews[i].rating}</div>
                                    <div class="name__review">${allReviews[i].name}</div>
                                    <div class="text__review"><p>${allReviews[i].text}</p></div>
                                </div>
                                ${imageVideo}
                            </div>
                        </div>`;
        }

        document.getElementById('product__reviews').innerHTML = revHtml;

        masonryGrid = new Masonry('.user-reviews', {
            itemSelector: '.products__review',
            columnWidth: '.products__review',
            gutter: 20,
            percentPosition: true
        });

        imagesLoaded(document.querySelector("#product__reviews"), function(){
            masonryGrid.layout();
        });

        initPagination();

        // Random rating text setup
        const randomReviewsCount = generateRandomNumber(getSingleSku(), 1050, 1700);
        const randomPercentageFromHash = generateRandomNumber(getSingleSku(), 45, 49) / 10;
        const starWidthPercentage  = (randomPercentageFromHash / 5) * 100;

        document.querySelectorAll('.fill-ratings').forEach(el => el.style.width = starWidthPercentage + '%');
        document.querySelectorAll('.product-rating__text').forEach(el => {
            el.innerHTML = `${randomPercentageFromHash} / 5 - <strong>${randomReviewsCount}</strong> ocen kupcev`;
        });

        document.getElementById('backToTopButton').addEventListener('click', function() {
            showPage(1);
            masonryGrid.layout();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Popup for images
        const popup = document.getElementById('imagePopup');
        const popupImage = document.getElementById('popupImage');
        const closePopup = document.getElementById('closePopup');

        document.querySelectorAll('.img__review').forEach(img => {
            img.addEventListener('click', function() {
                if (this.src) {
                    popupImage.src = this.src;
                    popup.style.display = 'flex';
                }
            });
        });

        closePopup.addEventListener('click', () => popup.style.display = 'none');
        popup.addEventListener('click', (e) => { if (e.target === popup) popup.style.display = 'none'; });

        jQueryLoaded();
    })();
</script></div>
				</div>
				<style>
					.whole_reviews_section {
						margin-block: 0;
					}
					.happy-customers {
						font-size: var(--step-6_5);
						font-weight: 850;
						line-height: 1.2;
						margin-inline: auto;
						margin-bottom: var(--gap-s);
					}
				</style>

			</div>
		</section>

		<div class="horizontal-ticker horizontal-ticker-sections">
			<div class="horizontal-ticker__container">
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
				<p class="horizontal-ticker__item">&#x2744;&#xFE0F; ZIMSKA RAZPRODAJA</p>
				<p class="horizontal-ticker__item">&#x1F4A5; NA&#x160;A NAJVE&#x10C;JA RAZPRODAJA DO SEDAJ</p>
				<p class="horizontal-ticker__item">&#x231B; PONUDBA KMALU POTE&#x10C;E</p>
				<p class="horizontal-ticker__item">&#x1F525; PRIHRANITE DO 60%</p>
			</div>
		</div>

		<section class="section sct-help">
			<div class="container">
				<div class="sct-help__content">
					<div class="sct-help__descr">
						<h2 class="sct-help__title">Poskrbite za svoja stopala <span class="accent">&#x161;e danes</span>!</h2>
						<p class="sct-help__text">Ne glede na to, ali ste zaposlen strokovnjak ali &#x161;portnik, ki premika svoje meje &#x2013; ortopedski vlo&#x17E;ki z masa&#x17E;nimi to&#x10D;kami STEPEASE vam zagotavljajo vrhunsko oporo in olaj&#x161;anje. Vzemite si trenutek zase, vlo&#x17E;ite v udobje in ob&#x10D;utite razliko na lastnih stopalih.</p>
						
						<button class="btn-arw" data-scroll=".scroll-target" data-scroll-offset="120"><span>Izkoristite ponudbo</span></button>
						<!-- <button class="btn btn--bg" onclick="submitproductform()">Claim Offer</button> -->
						<!-- <button class="btn-arw" onclick="submitproductform()"><span></span></button> -->
					</div>
				</div>
			</div>
		</section>

		<section class="section sct-guarantees">
			<div class="container">
				<div class="guarantees">
	<ul class="guarantees__list">
		<li class="guarantees__item"><img src="https://images.hs-plus.com/assets/Lumipalm-0/b851179f48034_delivery-svgrepo-com.svg"><span>Hitra dostava</span></li>
		<li class="guarantees__item"><img src="https://images.hs-plus.com/assets/Lumipalm-0/b3683f84bf812_cash-on-delivery-icon.svg"><span>Pla&#x10D;ilo po povzetju</span></li>
		<li class="guarantees__item"><img src="https://images.vigo-shop.com/general/flags/flag-icon-si.svg"><span>Slovensko skladi&#x161;&#x10D;e</span></li>
	</ul>
</div>
<style>
	@media screen and (max-width: 1023px) {
        .guarantees__list {display: grid;grid-template-columns: repeat(3, 1fr);}
        .guarantees__item {flex-direction: column;text-align: center;}
    }
</style>
			</div>
		</section>

	</main>

	<!-- Footer brand -->

<?php get_footer(); ?>
