document.addEventListener('DOMContentLoaded',function() {
    
    const upload = document.getElementsByClassName('js-upload')[0];
     
    
    const init = function() {    
    
        const changeEventHandler = function(e) {
            
            const input = upload.getElementsByTagName('input')[0],
                  title = document.getElementsByClassName('js-title')[0];
    
            input.value.replace(/.*(\/|\\)/, '');
            
            //upload.classList.add('file-added');
            
            //selected.innerHTML = input.files.length;
            
            for (let i = 0; i < input.files.length; ++i) {
                let name = input.files.item(i).name;
                title.innerHTML = name;
            }
        }
    
        upload.onchange = changeEventHandler;
    }
    
    
    upload ? init() : false;
    
}, false);