document.addEventListener('DOMContentLoaded', function () {

	/*let link_animations = document.querySelectorAll('a.animation');
  link_animations.forEach(link_animation => {
    link_animation.addEventListener("click", function(e){
      e.preventDefault();
      console.log('click');
      var svg_sello = document.querySelector('svg.svg-under-sellos');
      var g_initial=document.querySelector('g.g-initial');
      var g_reverse=document.querySelector('g.g-reverse');
      var tool_rotate=document.querySelector('g.tool-rotate');
      var g_type = false;

      svg_sello.classList.replace("zi-100","zi-50")

      if(g_initial.classList.contains("d-none")){
        g_initial.classList.remove("d-none");
        var g_type = 1;
      }else{
        g_reverse.classList.remove("d-none");
        var g_type = 2;
      }

      if(tool_rotate.style.transform==""){
        tool_rotate.style.transform = "rotate(-180deg)";
      }else{
        var current_value = tool_rotate.style.transform.split("rotate(")[1].split("deg)")[0];
        tool_rotate.style.transform = "rotate("+(current_value-180)+"deg)";
      }

      setTimeout(() => {
        if(g_type==1){
          g_reverse.classList.add("d-none");
        }else{
          g_initial.classList.add("d-none");
        }
        svg_sello.classList.replace("zi-50","zi-100");
      }, 1500);

    });
  });*/

	var page=2460;
	jQuery.ajax({
		type: 'GET',
		async: true,
		url: parametros_insertcontent.ajaxURL,
		data: {
			action : 'template_part_ajax',                //Este es el nombre de la funcion PHP a la que vamos a llamar (está en el functions.php).
			page_id : page,            //Este es un parámetro que le mandamos para recoger dentro de la funcion PHP y hacer movidas (indicar que template part queremos, por ejemplo.)
		},
		success: function(data){
			console.log(data);
		},
		error: function(MLHttpRequest, textStatus, errorThrown){
			console.log(errorThrown);
		}
	});

});