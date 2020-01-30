const Flickity = require('flickity');

const utils = require('fizzy-ui-utils');


document.addEventListener('DOMContentLoaded',function() {
    
    const controls = function(container, arg) {

        // Dots
        const cellsButtonGroup = container.nextElementSibling.querySelector('.js-group--dots');
        const cellsButtons = utils.makeArray( cellsButtonGroup.children );
        
        // update buttons on select
        arg.on( 'select', function() {
            const previousSelectedButton = cellsButtonGroup.querySelector('.is-selected');
            const selectedButton = cellsButtonGroup.children[ arg.selectedIndex ];
            
            previousSelectedButton.classList.remove('is-selected');
            selectedButton.classList.add('is-selected');
        });

        // cell select
        cellsButtonGroup.addEventListener( 'click', function( event ) {
            if ( !selectorMatches( event.target, '.dot' ) ) {
                return;
            }
        
            const index = cellsButtons.indexOf( event.target );
            arg.select( index );
        });


        // Arrows
                        
        const prevArrow = container.nextElementSibling.getElementsByClassName('js-previous')[0];
        const nextArrow = container.nextElementSibling.getElementsByClassName('js-next')[0];
        
        prevArrow.addEventListener( 'click', function() {
            arg.previous();
        });
        
        nextArrow.addEventListener( 'click', function() {
            arg.next();
        });
    };

    function selectorMatches(el, selector) {
    	var p = Element.prototype;
    	var f = p.matches || p.webkitMatchesSelector || p.mozMatchesSelector || p.msMatchesSelector || function(s) {
    		return [].indexOf.call(document.querySelectorAll(s), this) !== -1;
    	};
    	return f.call(el, selector);
    };
    
    
    window.mechanicsCarousel = function() {
        
        const mechanics = document.getElementById('mechanics');

        const mechanicsflkty = new Flickity( mechanics, {
            wrapAround: true,
            prevNextButtons: false,
            pageDots: false
        });

        //controls(mechanicsflkty);
    };

    window.newsCarousel = function() {
        
        const news = document.getElementById('news');

        const newsflkty = new Flickity( news, {
            cellAlign: 'left',
            contain: true,
            groupCells: true,
            groupCells: 2,
            prevNextButtons: false,
            pageDots: false
        });

        controls(news, newsflkty);
    };
    
    window.reviewsCarousel = function() {
        
        const reviews = document.getElementById('reviews');

        const reviewsflkty = new Flickity( reviews, {
            cellAlign: 'left',
            contain: true,
            groupCells: true,
            groupCells: 2,
            prevNextButtons: false,
            pageDots: false
        });

        controls(reviews, reviewsflkty);
    };
    
    
    window.trailersCarousel = function() {
        
        const trailers = document.getElementById('trailers');

        const trailersflkty = new Flickity( trailers, {
            prevNextButtons: false,
            pageDots: false
        });

        controls(trailers, trailersflkty);
    };
    




}, false)