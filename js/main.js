/* WooCommerce add-to-cart integration - intercepts original checkout buttons */
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        function hookButtons() {
            var buttons = document.getElementsByClassName("checkout-add-to-cart-btn");
            for (var i = 0; i < buttons.length; i++) {
                if (buttons[i].dataset.wcHooked) continue;
                buttons[i].dataset.wcHooked = '1';
                buttons[i].addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    var form = document.getElementById('wc-add-to-cart-form');
                    if (!form) { window.location = this.href; return; }
                    
                    // Get selected variation from original JS variables
                    if (typeof variationsArr !== 'undefined' && typeof propertiesArr !== 'undefined') {
                        var selectedIds = [];
                        propertiesArr.forEach(function(prop) {
                            prop.options.forEach(function(opt) {
                                if (opt.selected) selectedIds.push(opt.id);
                            });
                        });
                        
                        var matched = null;
                        variationsArr.forEach(function(v) {
                            if (v.ids.length === selectedIds.length && 
                                v.ids.every(function(id) { return selectedIds.indexOf(id) !== -1; })) {
                                matched = v;
                            }
                        });
                        
                        if (matched && matched.variationId) {
                            document.getElementById('wc-variation-id').value = matched.variationId;
                        }
                    }
                    
                    // Get quantity from the page
                    var qtyEl = document.querySelector('.quantity-selector__current');
                    if (qtyEl) {
                        document.getElementById('wc-quantity').value = parseInt(qtyEl.textContent) || 1;
                    }
                    
                    form.submit();
                });
            }
        }
        // Hook immediately and again after 2s (original JS may recreate buttons)
        hookButtons();
        setTimeout(hookButtons, 2000);
        setTimeout(hookButtons, 5000);
    });
})();
