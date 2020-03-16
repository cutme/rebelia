import Player from '@vimeo/player';

document.addEventListener('DOMContentLoaded',function() {    

    window.vimeoInit = function() {
        
        const el = document.getElementsByClassName('js-vimeo');

        for (let i = 0; i < el.length; i ++) {
            
            let target = el[i].getElementsByTagName('iframe');            
            
            let videoPlayer = new Player(target[0].id);
            
            videoPlayer.on('bufferstart', function() {
                el[i].classList.add('play');
            });
            
            videoPlayer.on('play', function() {
                el[i].classList.add('play');
            });
            
            videoPlayer.on('pause', function() {
                el[i].classList.remove('play');
                //videoPlayer.play();
            });
        }
    };
    
    
}, false);