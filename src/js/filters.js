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
                    //links[i].style.opacity = "0.25";
                }
            
                this.parentNode.classList.add("is-active");
                //this.style.opacity = "1";
                
                const width = this.getBoundingClientRect().width;
                const left = this.offsetLeft;
                
                target.style.width = `${width}px`;
                target.style.left = `${left}px`;
                target.style.transform = "none";
            }
            
            if (document.getElementById('played')) {
                
                let index = cutme.Helpers.thisIndex(e.currentTarget.parentNode);

                window.playedflkty.select(index);
            }
            
            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        }
        
        for (let i = 0; i < links.length; i++) {
            //links[i].addEventListener("click", (e) => e.preventDefault());
            
            if (el.classList.contains('js-hover')) {
                links[i].addEventListener("mouseenter", action);
            } else {
                links[i].addEventListener("click", action);
            }            
        }
        
        const initWidth = links[0].getBoundingClientRect().width;
        const initLeft = links[0].offsetLeft;
        
        target.style.width = `${initWidth}px`;
        target.style.left = `${initLeft}px`;
        target.style.transform = "none";

    };
    

}, false);
