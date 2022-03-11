
document.addEventListener('DOMContentLoaded', function () {

    const contenedor_cursor_custom = document.querySelectorAll('.contenedor-cursor-custom');
    contenedor_cursor_custom.forEach(contenedor => {
        contenedor.addEventListener('mousemove', e=>{
            var rect = e.target.getBoundingClientRect();
            if(!contenedor.querySelector('.cursor-custom')){
                var cursor_custom = document.createElement('div');
                cursor_custom.className = 'cursor-custom';
                cursor_custom.innerHTML = '<div>VER</div>';
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
    
});