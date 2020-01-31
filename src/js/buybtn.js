document.addEventListener('DOMContentLoaded',function() {
    
    const btn = document.getElementsByClassName('js-buybtn')[0];
     
    
    const init = function() {    
        
        const topbar = document.getElementsByClassName('js-topbar')[0];  
        let status = false;     

        const action = function(e) {
                        
            let scroll_pos = window.pageYOffset || window.scrollY;
        
            if ( scroll_pos > cutme.Helpers.getPosition(btn).y ) {

                if (status === false) {
                    topbar.classList.add('is-visible');
                    status = true;
                }
                
            } else {
                
                if (status === true) {
                    topbar.classList.remove('is-visible');
                    status = false;
                }
            }
        };
        
        action();
        
        window.addEventListener('scroll', action);
    };
    
    
    btn ? init() : false;
    
}, false);