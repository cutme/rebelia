document.addEventListener('DOMContentLoaded',function() {

    window.filters = function() {
        
        const el = document.getElementById('filters');
        const target = document.querySelector(".js-target");
        const links = document.querySelectorAll(".js-trace a");
        
        function action(e) {
            
            if (!this.parentNode.classList.contains("active")) {
                for (let i = 0; i < links.length; i++) {
                    if (links[i].parentNode.classList.contains("is-active")) {
                        links[i].parentNode.classList.remove("is-active");
                    }
                }
            
                this.parentNode.classList.add("is-active");
                
                const width = this.getBoundingClientRect().width;
                const left = this.offsetLeft;
                
                target.style.width = `${width}px`;
                target.style.left = `${left}px`;
                target.style.transform = "none";
                target.classList.add('is-active');
            }
            
            if (document.getElementById('played')) {
                
                let index = cutme.Helpers.thisIndex(e.currentTarget.parentNode);

                window.playedflkty.select(index);
            }
            
            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        }
        
        for (let i = 0; i < links.length; i++) {
            
            if (el.classList.contains('js-hover')) {
                links[i].addEventListener("mouseenter", action);
            } else {
                links[i].addEventListener("click", action);
            }            
        }
        
        
        
        const reset = function() {
            
            for (let i = 0; i < links.length; i ++) {
                
                if (links[i].parentNode.classList.contains('is-active')) {
                    
                    let initWidth = links[i].getBoundingClientRect().width;
                    let initLeft = links[i].offsetLeft;
                    
                    target.style.width = `${initWidth}px`;
                    target.style.left = `${initLeft}px`;
                    target.style.transform = "none";
                }
            }
        };
        
        setTimeout(function() {
            reset();
        }, 500);
        
        window.addEventListener('resize', function() {
            
            setTimeout(function() {
                reset();
            }, 300);
            
        });

    };
    

}, false);
