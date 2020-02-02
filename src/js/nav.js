const bodyScrollLock = require('body-scroll-lock');
const disableBodyScroll = bodyScrollLock.disableBodyScroll;
const enableBodyScroll = bodyScrollLock.enableBodyScroll;

document.addEventListener('DOMContentLoaded',function() {

    const el = document.getElementsByClassName('js-nav')[0],
          menu = document.getElementsByClassName('js-menu')[0],
          hamburger = document.getElementsByClassName('js-hamburger')[0];

    const init = function() {

        let ww = 0, wh = 0, nh = 0;
        const apla = document.getElementsByClassName('js-apla')[0];
        
        const checkHeight = function() {
            
            wh = window.innerHeight;                     
            
            // if height of navigate is bigger than window 
                        
            if (nh > wh) {
                
                el.style.height = wh - 30 + 'px';
                
            } else {
                
                el.removeAttribute('style');
                
            }            
        }
        
        const clickOutside = function(e) {
                        
            if (e.target.classList.contains('js-apla')) {
                
                hideMenu();
            }
        };

        const checkWindowWidth = function() {
            ww = window.innerWidth;

            if (ww > 1024) {

                hideMenu();
            }
        };
        
        const hideMenu = function() {

            document.removeEventListener('click', clickOutside);
            
            apla.classList.remove('is-black');
            setTimeout(function() {
                
                apla.classList.remove('is-visible');
                
            }, 600);
            
            el.classList.remove('is-visible');
            el.removeAttribute('style');
            hamburger.classList.remove('is-active');
            
            window.removeEventListener('resize', checkHeight);
            el.removeAttribute('style');
            
            enableBodyScroll(el);
        };

        const showMenu = function(e) {
        
            if (e.currentTarget.classList.contains('is-active')) {
            
                hideMenu();            
            
            } else {
            
                document.addEventListener('click', clickOutside);
                
                disableBodyScroll(el);
                
                apla.classList.add('is-visible');
                setTimeout(function() {
                    
                    apla.classList.add('is-black');
                    
                }, 10);
                
                el.classList.add('is-visible');
                hamburger.classList.add('is-active');
                
                nh = el.clientHeight;
                checkHeight();
                
                window.addEventListener('resize', checkHeight);
            }
        };

        

        window.addEventListener('resize', checkWindowWidth);

        checkWindowWidth();

        hamburger.addEventListener('click', showMenu);


        // Hide menu on ESC

        document.addEventListener('keydown', function(evt) {
            // evt = evt || window.event;
            var isEscape = false;
            if ("key" in evt) {
                isEscape = (evt.key == "Escape" || evt.key == "Esc");
            } else {
                isEscape = (evt.keyCode == 27);
            }
            if (isEscape) {
                hideMenu();
            }
        });

    };

    el ? init() : false;

}, false);