/**
 * Homepage LP Add-to-Cart fix
 * Intercepts hs-cf-add-to-cart button clicks and redirects to WC add-to-cart
 */
(function() {
  // Old HS-plus variation ID → new WC {variation_id, barva, velikost}
  var oldToWc = {
    "980214": {id:20,b:"oranzna",v:"35-36"}, "980199": {id:28,b:"crna",v:"35-36"}, "980212": {id:36,b:"siva",v:"35-36"},
    "980210": {id:21,b:"oranzna",v:"37-38"}, "980213": {id:29,b:"crna",v:"37-38"}, "980204": {id:37,b:"siva",v:"37-38"},
    "980216": {id:22,b:"oranzna",v:"39-40"}, "980219": {id:30,b:"crna",v:"39-40"}, "980185": {id:38,b:"siva",v:"39-40"},
    "980217": {id:23,b:"oranzna",v:"41-42"}, "980187": {id:31,b:"crna",v:"41-42"}, "980189": {id:39,b:"siva",v:"41-42"},
    "980193": {id:24,b:"oranzna",v:"43-44"}, "980211": {id:32,b:"crna",v:"43-44"}, "980208": {id:40,b:"siva",v:"43-44"},
    "980218": {id:25,b:"oranzna",v:"45-46"}, "980192": {id:33,b:"crna",v:"45-46"}, "980215": {id:41,b:"siva",v:"45-46"},
    "982171": {id:26,b:"oranzna",v:"47-48"}, "982175": {id:34,b:"crna",v:"47-48"}, "982176": {id:42,b:"siva",v:"47-48"},
    "982174": {id:27,b:"oranzna",v:"49-50"}, "982168": {id:35,b:"crna",v:"49-50"}, "982173": {id:43,b:"siva",v:"49-50"},
    "980183": {id:19,b:"",v:""} // parent product fallback
  };

  function interceptClick(e) {
    var btn = e.currentTarget;
    var href = btn.getAttribute('href') || '';
    
    // Parse old-style URL: ?add-more=ID,ID,ID or ?add-to-cart=...&variation_id=...
    var addMoreMatch = href.match(/add-more=([0-9,]+)/);
    if (addMoreMatch) {
      e.preventDefault();
      var ids = addMoreMatch[1].split(',').filter(Boolean);
      if (ids.length > 0) {
        var firstId = ids[0];
        var qty = ids.length;
        var mapping = oldToWc[firstId];
        if (mapping && mapping.b) {
          window.location.href = '/?add-to-cart=19&variation_id=' + mapping.id 
            + '&attribute_pa_barva=' + mapping.b 
            + '&attribute_pa_velikost=' + mapping.v 
            + '&quantity=' + qty;
        } else {
          // Fallback: add parent product
          window.location.href = '/?add-to-cart=19&quantity=' + qty;
        }
      }
      return false;
    }
  }

  function attach() {
    var btns = document.querySelectorAll('.hs-cf-cart-btn, [id$="-hs-cf-add-to-cart"]');
    btns.forEach(function(btn) {
      btn.addEventListener('click', interceptClick, true);
    });
  }

  // Re-attach periodically since LP JS updates hrefs dynamically
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', attach);
  } else {
    attach();
  }
  setInterval(attach, 2000);
})();
