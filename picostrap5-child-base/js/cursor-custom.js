
document.addEventListener('DOMContentLoaded', function () {

    const contenedor_cursor_custom = document.querySelectorAll('.contenedor-cursor-custom');
    contenedor_cursor_custom.forEach(contenedor => {
        contenedor.addEventListener('mousemove', e=>{
            var rect = e.target.getBoundingClientRect();
            if(!contenedor.querySelector('.cursor-custom')){
                var cursor_custom = document.createElement('div');
                cursor_custom.className = 'cursor-custom';
                if(contenedor.getAttribute("text-cursor-custom")){
                    cursor_custom.innerHTML = '<div>'+contenedor.getAttribute("text-cursor-custom")+'</div>';
                }else{
                    cursor_custom.innerHTML = '<div>VER</div>';
                }
                contenedor.appendChild(cursor_custom);
            }
            var cursorVideo = contenedor.querySelector('.cursor-custom');
            
            setTimeout(function () {
                cursorVideo.style.top = e.clientY - rect.top - 50 + "px";
                cursorVideo.style.left = e.clientX - rect.left - 50 + "px";
                cursorVideo.style.display = "block";
            }, 075);

            //cursorVideo.setAttribute("style", "top: " + (e.clientY - rect.top - 50) + "px; left: " + (e.clientX - rect.left - 50) + "px; display: block;")
        });
        contenedor.addEventListener('mouseleave', e=>{
            var cursorVideo = contenedor.querySelector('.cursor-custom');
            if(cursorVideo){
                cursorVideo.remove();
            }
        });
    });

    /*const contenedor_all_html = document.querySelector('html');
    contenedor_all_html.addEventListener('mousemove', e=>{
        var rect = e.target.getBoundingClientRect();

        if(!contenedor_all_html.querySelector('.new-cursor-custom')){
            //CREAMOS DIV
            var div_new_cursor_custom = document.createElement('div');
            div_new_cursor_custom.className = 'new-cursor-custom';
            //div_new_cursor_custom.innerHTML = '<div>NEW CURSOR</div>';
            contenedor_all_html.appendChild(div_new_cursor_custom);
        }
        
        var newCursorDiv = contenedor_all_html.querySelector('.new-cursor-custom');
        newCursorDiv.style.top = e.clientY + document.documentElement.scrollTop  +  "px";
        newCursorDiv.style.left = e.clientX  + "px";
        newCursorDiv.style.display = "block";
    });*/

});