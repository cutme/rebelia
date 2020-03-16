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
        
        // Jobs
        
        const jobsNav = document.getElementsByClassName('js-jobs');
        
        for (let i = 0; i < jobsNav.length; i ++) {
            jobsNav[i].getElementsByTagName('a')[0].setAttribute('data-num', jobsCount);
        }
        
        
        // Vimeo
        if (document.getElementsByClassName('js-vimeo').length > 0) {
            window.vimeoInit();
        }
        
        
        // Contact Form 7
        
        const upload = document.getElementsByClassName('js-upload')[0];
        
        if (upload) {
            const span = document.createElement("span");
            span.classList.add('wpcf7-not-valid-tip2');
            span.innerHTML = 'Please attach your resume/cv file';
            upload.appendChild(span);
        }
        
        const gototarget = function(el, offset) {
            const window_pos = window.pageYOffset || window.scrollY || document.documentElement.scrollTop;
    	    const obj = document.getElementById(el);
    	    
    	    if (!offset) {
        	    offset = 0;
    	    }
    	    	    
	        let target = window_pos + obj.getBoundingClientRect().top - offset;
	        cutme.Helpers.scrollTo(target, 1, 0);
        };

    	document.addEventListener( 'wpcf7mailsent', function( event ) {

            if ( event.detail.contactFormId === '220') {
                
                document.getElementsByClassName('js-appform__content')[0].classList.add('is-hidden');
                document.getElementsByClassName('js-appformthanks')[0].classList.add('is-visible');
                
                gototarget('thanks', 100);
            }
        }, false );
        
/*
        document.addEventListener( 'wpcf7submit', function( event ) {
            console.log('b' + event);
            if (document.getElementsByName('your-file')[0].classList.contains('wpcf7-not-valid')) {
                    document.getElementsByClassName('js-upload')[0].classList.remove('has-error');
                } 
        }, false );
*/
        
        document.addEventListener( 'wpcf7invalid', function( event ) {
            if ( event.detail.contactFormId === '220') {
                if (document.getElementsByName('your-file')[0].classList.contains('wpcf7-not-valid')) {
                    upload.classList.add('has-error');  
                    
                    gototarget('appform');                  
                    
                } else {
                    upload.classList.remove('has-error');
                }              
            }
        }, false );
        
        
        
        
        // Fix for freescroll
        
        (function() {
            var touchingCarousel = false,
              touchStartCoords;
        
            document.body.addEventListener('touchstart', function(e) {
              if (e.target.closest('.flickity-slider')) {
                touchingCarousel = true;
              } else {
                touchingCarousel = false;
                return;
              }
        
              touchStartCoords = {
                x: e.touches[0].pageX,
                y: e.touches[0].pageY
              }
            });
        
            document.body.addEventListener('touchmove', function(e) {
              if (!(touchingCarousel && e.cancelable)) {
                return;
              }
        
              var moveVector = {
                x: e.touches[0].pageX - touchStartCoords.x,
                y: e.touches[0].pageY - touchStartCoords.y
              };
        
              if (Math.abs(moveVector.x) > 7)
                e.preventDefault()
        
            }, {passive: false});
          })();


    };
    
    
    window.addEventListener('load', init);

}, false);