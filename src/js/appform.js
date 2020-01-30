document.addEventListener('DOMContentLoaded',function() {
    
    const btn = document.getElementsByClassName('js-apply')[0];
     
    
    const init = function() {    
        
        const form = document.getElementsByClassName('js-appform')[0],
              content = document.getElementsByClassName('js-appform__content')[0];
        
        const action = function(e) {
            
            btn.classList.add('fade-out');
            
            form.classList.add('is-visible');
            
            setTimeout(function() {
                content.classList.add('is-visible');
            }, 10);
            
            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        };
        
    
        btn.addEventListener('click', action);
    }
    
    
    btn ? init() : false;
    
}, false);