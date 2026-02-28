/**
 * WooCommerce Add-to-Cart override for ortowp.noriks.com
 * Replaces old HS-plus ?add-more= URLs with native WC add-to-cart
 */
(function() {
  // Map: "ColorCode SizeCode" → { id: WC_variation_id, barva: slug, velikost: slug }
  var wcMap = {
    "Orange 35/36":  {id:20, b:"oranzna", v:"35-36"},
    "Orange 37/38":  {id:21, b:"oranzna", v:"37-38"},
    "Orange 39/40":  {id:22, b:"oranzna", v:"39-40"},
    "Orange 41/42":  {id:23, b:"oranzna", v:"41-42"},
    "Orange 43/44":  {id:24, b:"oranzna", v:"43-44"},
    "Orange 45/46":  {id:25, b:"oranzna", v:"45-46"},
    "Orange 47/48":  {id:26, b:"oranzna", v:"47-48"},
    "Orange 49-50":  {id:27, b:"oranzna", v:"49-50"},
    "Black 35/36":   {id:28, b:"crna", v:"35-36"},
    "Black 37/38":   {id:29, b:"crna", v:"37-38"},
    "Black 39/40":   {id:30, b:"crna", v:"39-40"},
    "Black 41/42":   {id:31, b:"crna", v:"41-42"},
    "Black 43/44":   {id:32, b:"crna", v:"43-44"},
    "Black 45/46":   {id:33, b:"crna", v:"45-46"},
    "Black 47/48":   {id:34, b:"crna", v:"47-48"},
    "Black 49-50":   {id:35, b:"crna", v:"49-50"},
    "Grey 35/36":    {id:36, b:"siva", v:"35-36"},
    "Grey 37/38":    {id:37, b:"siva", v:"37-38"},
    "Grey 39/40":    {id:38, b:"siva", v:"39-40"},
    "Grey 41/42":    {id:39, b:"siva", v:"41-42"},
    "Grey 43/44":    {id:40, b:"siva", v:"43-44"},
    "Grey 45/46":    {id:41, b:"siva", v:"45-46"},
    "Grey 47/48":    {id:42, b:"siva", v:"47-48"},
    "Grey 49-50":    {id:43, b:"siva", v:"49-50"}
  };

  function getSelectedVariationName() {
    if (typeof propertiesArr === 'undefined' || typeof variationsArr === 'undefined') return null;
    var selectedOptions = [];
    for (var pr = 0; pr < propertiesArr.length; pr++) {
      var propertyId = propertiesArr[pr].id;
      var els = document.querySelectorAll("[property-id='" + propertyId + "'][selected-option='true']");
      if (els.length > 0) {
        var opt = propertiesArr[pr].options.find(function(o) { return o.id === els[0].value; });
        if (opt) selectedOptions.push(opt);
      }
    }
    var selectedVariation = variationsArr.find(function(vr) {
      return vr.ids.slice().sort().join(',') === selectedOptions.map(function(o) { return o.id; }).sort().join(',');
    });
    return selectedVariation ? selectedVariation.names : null;
  }

  function getQuantity() {
    var singleQtyEl = document.getElementById("single-quantity-value");
    if (singleQtyEl) return parseInt(singleQtyEl.value) || 1;
    var checked = document.querySelector('[id^="qty"]:checked');
    if (checked) {
      var num = checked.id.match(/\d+$/);
      return num ? parseInt(num[0]) : 1;
    }
    return 1;
  }

  function wcAddToCart(e) {
    e.preventDefault();
    e.stopPropagation();

    var varName = getSelectedVariationName();
    if (!varName) {
      alert('Prosimo, izberite barvo in velikost.');
      return false;
    }

    var mapping = wcMap[varName];
    if (!mapping) {
      alert('Izbrana kombinacija ni na voljo.');
      return false;
    }

    var qty = getQuantity();

    // Use WooCommerce native add-to-cart URL → redirects to cart
    var url = '/?add-to-cart=19'
      + '&variation_id=' + mapping.id
      + '&attribute_pa_barva=' + mapping.b
      + '&attribute_pa_velikost=' + mapping.v
      + '&quantity=' + qty;

    window.location.href = url;
    return false;
  }

  function attachHandlers() {
    var btns = document.getElementsByClassName('checkout-add-to-cart-btn');
    for (var i = 0; i < btns.length; i++) {
      btns[i].setAttribute('href', '#');
      btns[i].style.cursor = 'pointer';
      // Remove old onclick if any
      btns[i].onclick = null;
      btns[i].addEventListener('click', wcAddToCart, true);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', attachHandlers);
  } else {
    attachHandlers();
  }
  // Also re-attach after any dynamic updates
  var _origSetLink = typeof setLinkDynamicCart === 'function' ? setLinkDynamicCart : null;
  window.setLinkDynamicCart = function(quantity) {
    if (_origSetLink) { try { _origSetLink(quantity); } catch(e) {} }
    setTimeout(attachHandlers, 50);
  };
})();
