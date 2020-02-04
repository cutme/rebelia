const Flickity = require('flickity');

const utils = require('fizzy-ui-utils');


document.addEventListener('DOMContentLoaded',function() {
    
    const disablePointerEvents = function(container, flkty) {
        flkty.on('dragStart', function() {
            let video = container.getElementsByClassName('js-video');
            
            for (let i = 0; i < video.length; i++) {
                video[i].style.pointerEvents = 'none';
            }            
        });
        
        flkty.on('dragEnd', function() {
            let video = container.getElementsByClassName('js-video');
            
            for (let i = 0; i < video.length; i++) {
                video[i].style.pointerEvents = 'all';
            }            
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

    const selectorMatches = function(el, selector) {
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
            watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                    groupCells: true,
                    groupCells: 2,
                },
                mobile: {
                    freeScroll: true
                }
            }
        });


        controls(news, newsflkty);
    };
    
    window.playedCarousel = function() {
        
        const played = document.getElementById('played');

        window.playedflkty = new Flickity( played, {
            prevNextButtons: false,
            pageDots: false,
            draggable: false
        });
    };
    
    window.reviewsCarousel = function() {
        
        const reviews = document.getElementById('reviews');

        const reviewsflkty = new Flickity( reviews, {
            watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                    groupCells: true,
                    groupCells: 2,
                },
                mobile: {
                    freeScroll: true
                }
            }
        });

        controls(reviews, reviewsflkty);
    };
    

    
    window.watchtrailersCarousel = function() {
        
        const watchtrailers = document.getElementById('watchtrailers');

        const watchtrailersflkty = new Flickity( watchtrailers, {
             watchCSS: {
                desktop: {
                    cellAlign: 'left',
                    contain: true,
                },
                mobile: {
                    freeScroll: true
                }
            }            
        });
        
        disablePointerEvents(watchtrailers, watchtrailersflkty);
        controls(watchtrailers, watchtrailersflkty);
    };
    




}, false)