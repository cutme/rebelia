document.addEventListener('DOMContentLoaded',function() {

    const press = document.getElementsByClassName('js-goto');
	
	const init = function() {
	
	    const list = document.getElementById('pressList'),
	          pagination = document.getElementById('pressPagination'),
	          prev = pagination.getElementsByClassName('js-prev')[0],
	          next = pagination.getElementsByClassName('js-next')[0],
	          items = list.getElementsByClassName('js-item'),
	          itemsPerView = 5;
	    
	    let index = 0;


        const showItems = function(from, to) {
            
            for (let i = from; i < to; i ++) {
                items[i].classList.remove('is-hidden');
                items[i].classList.add('is-visible');
                index ++;
            }
            
            if (index >= items.length) {
                next.classList.add('is-hidden');
            } else {
                next.classList.remove('is-hidden');
            }
        };

        const hideVisible = function() {

            let isVisible = document.querySelectorAll('.is-visible');
            
            [].forEach.call(isVisible, function(el) {
                el.classList.remove("is-visible");
                el.classList.add("is-hidden");
            });
        };


        const showNext = function(e) {

            if (index < items.length) {
                hideVisible();
                showItems(index, index+itemsPerView);
                
                console.log(index);
            } else {
                
                console.log('end');
            }

            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        };


        const showPrev = function(e) {
            
            index = index - itemsPerView;
            
            hideVisible();
            
            console.log(index);
            
            showItems(0, index);

            e.preventDefault() ? e.preventDefault() : e.preventDefault = false;
        };
        
        showItems(0, itemsPerView);

        next.addEventListener('click', showNext);
        prev.addEventListener('click', showPrev);

	    
	};
	
    
    press ? init() : false;
    
}, false);
