
document.addEventListener('DOMContentLoaded', function () {

    var enable_cursor=true;

    const contenedor_cursor_custom = document.querySelectorAll('.contenedor-cursor-custom');
    contenedor_cursor_custom.forEach(contenedor => {
        contenedor.addEventListener('mousemove', e=>{
            enable_cursor=false;
            if(document.querySelector('.new-cursor-custom')){
                document.querySelector('.new-cursor-custom').remove();
            }
            var rect = e.target.getBoundingClientRect();
            if(!contenedor.querySelector('.cursor-custom')){
                var cursor_custom = document.createElement('div');
                cursor_custom.className = 'cursor-custom opacity-0';
                if(contenedor.getAttribute("text-cursor-custom")){
                    cursor_custom.innerHTML = '<div>'+contenedor.getAttribute("text-cursor-custom")+'</div>';
                }else{
                    cursor_custom.innerHTML = '<div>VER</div>';
                }
                contenedor.appendChild(cursor_custom);
            }
            var cursorVideo = contenedor.querySelector('.cursor-custom');
            if(cursorVideo.classList.contains('opacity-0')){
                setTimeout(function () {
                    cursorVideo.classList.replace('opacity-0','opacity-100');
                }, 075);
            };
            //setTimeout(function () {
                cursorVideo.style.top = e.clientY - rect.top - 50 + "px";
                cursorVideo.style.left = e.clientX - rect.left - 50 + "px";
                //cursorVideo.style.opacity = 1;
            //}, 075);
        });
        contenedor.addEventListener('mouseleave', e=>{
            enable_cursor=true;
            var cursorVideo = contenedor.querySelector('.cursor-custom');
            if(cursorVideo){
                cursorVideo.classList.replace('opacity-100','opacity-0');
                setTimeout(function () {
                    cursorVideo.remove();
                }, 200);
            }
        });
    });

    var last_top_screen = 0;

    const contenedor_all_html = document.querySelector('html');
    contenedor_all_html.addEventListener('mousemove', e=>{
        if(enable_cursor==true){
            if(!contenedor_all_html.querySelector('.new-cursor-custom')){
                var div_new_cursor_custom = document.createElement('div');
                div_new_cursor_custom.className = 'new-cursor-custom';
                contenedor_all_html.appendChild(div_new_cursor_custom);
            }
            var newCursorDiv = contenedor_all_html.querySelector('.new-cursor-custom');
            newCursorDiv.style.top = e.clientY + document.documentElement.scrollTop  +  "px";
            newCursorDiv.style.left = e.clientX  + "px";
            newCursorDiv.style.display = "block";
            last_top_screen = newCursorDiv.getBoundingClientRect().top;
        }
    });
    window.addEventListener('scroll', event => {
        var newCursorDiv = document.querySelector('html .new-cursor-custom');
        if(newCursorDiv)
        {
            newCursorDiv.style.top = last_top_screen + scrollY + "px";
        }
    });

    const all_links = document.querySelectorAll('html a');
    all_links.forEach(link => {
        link.addEventListener('mouseover', e=>{
            var newCursorDiv = document.querySelector('html .new-cursor-custom');
            if(newCursorDiv)
            {
                newCursorDiv.style.transform = "translateX(-10px) scale(1.3)";
            }
        });
        link.addEventListener('mouseleave', e=>{
            var newCursorDiv = document.querySelector('html .new-cursor-custom');
            if(newCursorDiv)
            {
                newCursorDiv.style.transform = "translateX(-10px) scale(1)";
            }
        });
    });

});