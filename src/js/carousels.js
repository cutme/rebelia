const Flickity = require('flickity');
const utils = require('fizzy-ui-utils');
import Player from '@vimeo/player';

document.addEventListener('DOMContentLoaded',function() {
    
    const disablePointerEvents = function(container, flkty) {
        
        let pause; 
        let cell = container.getElementsByClassName('carousel-cell');
        
        flkty.on('dragStart', function() {            
            
            for (let i = 0; i < cell.length; i++) {
                //cell[i].getElementsByTagName('a')[0].style.pointerEvents = 'none';
                cell[i].style.pointerEvents = 'none';
            }
        });
        
        flkty.on('dragEnd', function() {

            setTimeout(function() {
                
                for (let i = 0; i < cell.length; i++) {
                    //cell[i].getElementsByTagName('a')[0].style.pointerEvents = 'all';
                    cell[i].style.pointerEvents = 'all';
                } 

            }, 100);

        });
    };


    if (typeof Flickity === 'function') {

      var proto = Flickity.prototype;
    
      proto.watchCSS = function () {
        var watchOption = this.options.watchCSS;
        if (!watchOption) {
          return;
        }
    
        var afterContent = getComputedStyle(this.element, ':after').content;
        // activate if :after { content: 'flickity' }
        if (afterContent.indexOf('flickity') != -1) {
          // ---modification start---
          // check for watchCSS options changes
          if (typeof watchOption === 'object') {
            this.watchCSSOptionsChange(afterContent);
          }
          // ---modification end---
          this.activate();
        } else {
          this.deactivate();
        }
      };
    
      proto.watchCSSOptionsChange = function (afterContent) {
        // store the current breakpoint identifier
        if (!this._currentOptionsIdentifier) {
          this._currentOptionsIdentifier = '';
        }
        // trim flickity. and surrounding quotes from the new breakpoint identifier
        var identifier = afterContent.substring(0, afterContent.length - 1).substring(10);
    
        // check for breakpoint change
        if (this._currentOptionsIdentifier !== identifier) {
    
          // if the original options have been cloned apply them to reset
          if (typeof this.options._flickityInitialOptions === 'object') {
    
            this.options = this.options._flickityInitialOptions;
            this._currentOptionsIdentifier = '';
          }
    
          // check if the new breakpoint options exist
          if (typeof this.options.watchCSS[identifier] === 'object') {
    
            // clone the original options so we can reset on breakpoint change
            this.options._flickityInitialOptions = JSON.parse(JSON.stringify(this.options));
    
            // apply the new options
            var newOptions = this.options.watchCSS[identifier];
    
            for (var key in newOptions) {
              if (newOptions.hasOwnProperty(key)) {
                this.options[key] = newOptions[key];
              }
            }
    
            // update the identifer so we can skip if there's no change in breakpoint
            this._currentOptionsIdentifier = identifier;
          }
        }
      }
    }
    

    const controls = function(container, arg) {

        // Dots
        const cellsButtonGroup = container.nextElementSibling.querySelector('.js-group--dots');
        
        if (cellsButtonGroup) {
        
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
        }
    };

    const selectorMatches = function(el, selector) {
    	var p = Element.prototype;
    	var f = p.matches || p.webkitMatchesSelector || p.mozMatchesSelector || p.msMatchesSelector || function(s) {
    		return [].indexOf.call(document.querySelectorAll(s), this) !== -1;
    	};
    	return f.call(el, selector);
    };
    
    
    window.mechanicsCarousel = function() {
        
        const mechanics = document.getElementById('mechanics'),
              info = document.getElementById('mechanicsInfo'),
              slide = mechanics.getElementsByTagName('iframe');

        const mechanicsflkty = new Flickity( mechanics, {
            percentPosition: false,
            dragThreshold: 1,
            watchCSS: {
                desktop: {
                    wrapAround: true
                },
                mobile: {
                    cellAlign: 'left',
                    freeScroll: true,
                    //freeScrollFriction: 0.03,
                }
            }
        });
        
        const mechanicsInfoflkty = new Flickity( info, {
            draggable: false,
            prevNextButtons: false,
            pageDots: false,
            fade: true
        });
        
        mechanicsflkty.on( 'change', function( index ) {
            mechanicsInfoflkty.select( index, true, true );
        });
        
               
        mechanicsflkty.on('staticClick', function(e, pointer, cellElement, cellIndex) { 
            
            
                       
            //for (let i = 0; i < slide.length; i++) {
                
  
            //console.log(cellElement)              
               // el[i].getElementsByTagName('iframe');            
            
//            let videoPlayer = new Player(target[0].id);
            

                
                //slide[i].style.pointerEvents = 'all';
           // }            
        });

        disablePointerEvents(mechanics, mechanicsflkty);
        controls(mechanics, mechanicsflkty);
    };

    window.newsCarousel = function() {
        
        const news = document.getElementById('news');

        const newsflkty = new Flickity( news, {
            dragThreshold: 1,
            watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                    groupCells: true,
                    groupCells: 2,
                },
                mobile: {
                    cellAlign: 'left',
                    freeScroll: true,
                    //freeScrollFriction: 0.03,
                    draggable: true
                }
            }
        });


        disablePointerEvents(news, newsflkty);
        controls(news, newsflkty);
    };
    
    window.playedCarousel = function() {
        
        const played = document.getElementById('played');

        window.playedflkty = new Flickity( played, {
            dragThreshold: 1,
            prevNextButtons: false,
            pageDots: false,
            draggable: false
        });
    };
    
    window.reviewsCarousel = function() {
        
        const reviews = document.getElementById('reviews');

        const reviewsflkty = new Flickity( reviews, {
            adaptiveHeight: false,
            dragThreshold: 1,
            watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                    groupCells: true,
                    groupCells: 2,
                },
                mobile: {
                    freeScroll: true,
                    //freeScrollFriction: 0.03,
                }
            }
        });

        controls(reviews, reviewsflkty);
    };

    window.watchtrailersCarousel = function() {
        
        const watchtrailers = document.getElementById('watchtrailers');

        const watchtrailersflkty = new Flickity( watchtrailers, {
            dragThreshold: 1,
            watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                    groupCells: true,
                    groupCells: 1,
                },
                mobile: {
                    freeScroll: true,
                    //freeScrollFriction: 0.03,
                }
            }            
        });
        
        disablePointerEvents(watchtrailers, watchtrailersflkty);
        controls(watchtrailers, watchtrailersflkty);
    };
    




}, false)