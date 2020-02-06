const { detect } = require('detect-browser');
const browser = detect();

document.addEventListener('DOMContentLoaded',function() {

    if (browser) {
        document.documentElement.classList.add(browser.name);
    }

    const cover = document.getElementById('cover');
    
    const init = function() {
        document.body.removeAttribute('style');
        document.body.classList.add('is-loaded');
        
        setTimeout(function() {
            cover.remove();
        }, 250);

        
        // Anims on inview
        window.animsInit()   
 
        // Carousels 
        
        document.getElementById('mechanics') ? window.mechanicsCarousel() : false;
        document.getElementById('news') ? window.newsCarousel() : false;
        document.getElementById('played') ? window.playedCarousel() : false;
        document.getElementById('reviews') ? window.reviewsCarousel() : false;
        document.getElementById('watchtrailers') ? window.watchtrailersCarousel() : false;

        // Filters
        
        document.getElementById('filters') ? window.filters() : false;
    };
    
    
    window.addEventListener('load', init);

}, false);