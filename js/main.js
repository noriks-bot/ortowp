document.addEventListener('DOMContentLoaded', function() {
    
    // Swiper Gallery (mobile only)
    if (window.innerWidth < 768) {
        var gallerySlider = new Swiper('#gallerySlider', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        
        // Thumbnail clicks
        document.querySelectorAll('.gallery-thumbs__item').forEach(function(thumb) {
            thumb.addEventListener('click', function() {
                var index = parseInt(this.dataset.index);
                gallerySlider.slideTo(index);
                document.querySelectorAll('.gallery-thumbs__item').forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    }

    // Color selector
    document.querySelectorAll('.color-option').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.color-option').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            var nameEl = document.getElementById('selectedColorName');
            if (nameEl) nameEl.textContent = this.dataset.name;
            updateVariation();
        });
    });

    // Size selector
    document.querySelectorAll('.size-option').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.size-option').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            updateVariation();
        });
    });

    // Quantity bundles
    document.querySelectorAll('.quantity-bundle').forEach(function(bundle) {
        bundle.addEventListener('click', function() {
            document.querySelectorAll('.quantity-bundle').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            var qtyInput = document.getElementById('quantityInput');
            if (qtyInput) qtyInput.value = this.dataset.qty;
        });
    });

    // Update variation ID based on selected color + size
    function updateVariation() {
        // This would match against WooCommerce variations
        // For now we keep the default variation
    }

    // Countdown Timer
    function startTimer() {
        // Set end time to end of today + random hours
        var now = new Date();
        var end = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59);
        
        function tick() {
            var now = new Date();
            var diff = end - now;
            if (diff <= 0) {
                // Reset to next day
                end = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 23, 59, 59);
                diff = end - now;
            }
            
            var hours = Math.floor(diff / (1000 * 60 * 60));
            var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            var h = document.getElementById('timerHours');
            var m = document.getElementById('timerMinutes');
            var s = document.getElementById('timerSeconds');
            
            if (h) h.textContent = hours.toString().padStart(2, '0');
            if (m) m.textContent = minutes.toString().padStart(2, '0');
            if (s) s.textContent = seconds.toString().padStart(2, '0');
        }
        
        tick();
        setInterval(tick, 1000);
    }
    startTimer();

    // Header hide on scroll
    var lastScroll = 0;
    var header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            var currentScroll = window.pageYOffset;
            if (currentScroll > lastScroll && currentScroll > 200) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }
            lastScroll = currentScroll;
        });
    }

    // Stock count decreasing effect
    var stockEl = document.getElementById('stockCount');
    if (stockEl) {
        var stock = parseInt(stockEl.textContent);
        setInterval(function() {
            if (Math.random() < 0.3 && stock > 5) {
                stock--;
                stockEl.textContent = stock;
            }
        }, 30000);
    }
});
