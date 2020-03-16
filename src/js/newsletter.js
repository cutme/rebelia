document.addEventListener('DOMContentLoaded',function() {
    
    const el = document.getElementsByClassName('es_subscription_form')[0];
            
/*
    const validateEmail = function(mail) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)) {
            
            return (true)
        } else {
            
            return (false)
        }
    }
*/
    
    const init = function() {
        
        el.setAttribute('novalidate', 'novalidate');
        
/*
        
        let field = el.elements["email"];
        
        const div = document.createElement("div");
        div.classList.add('error-message');
        
        el.appendChild(div);
        
        const action = function(e) {
            
            if ( validateEmail(field)) {
                el.classList.remove('no-valid');
            } else {
                el.classList.add('no-valid');
                e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
            }        	
        };
        
        el.addEventListener('submit', action);
*/
    };
    
    
    
    
    el ? init() : false;
    
    

}, false);
