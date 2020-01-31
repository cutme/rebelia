import Cookies from 'js-cookie';

document.addEventListener('DOMContentLoaded', function() {

    const el = document.getElementById('cookies');
    
    const init = function() {
    
        const accept = el.getElementsByClassName('js-accept')[0];

        if (Cookies.get('rebelia-cookies') != 1) {

            el.classList.remove('move-out');
        }
        
        accept.addEventListener('click', function(e) {
            Cookies.set("rebelia-cookies", 1, { expires: 356, path: '/' });
            el.classList.add('move-out');
            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        });
    }
    
    el ? init() : false;

}, false);
