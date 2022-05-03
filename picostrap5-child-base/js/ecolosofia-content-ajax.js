document.addEventListener('DOMContentLoaded', function () {

	let link_animations = document.querySelectorAll('a.animation');
  var custom_body = document.querySelector("#theme-main .custom-body");

  link_animations.forEach(link_animation => {
    link_animation.addEventListener("click", function(e){
      e.preventDefault();
   
      var page_name=this.getAttribute('page-name');
      var page_id=this.getAttribute('page-id');
      custom_body.classList.add("opacity-0");

      jQuery.ajax({
        type: 'GET',
        async: true,
        url: parametros_insertcontent.ajaxURL,
        data: {
          action : 'template_part_ajax',
          page_id : page_id,
          page_name : page_name,
        },
        success: function(data){
          console.log('done');
          custom_body.innerHTML=data;
          custom_body.classList.remove("opacity-0");
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
          console.log(errorThrown);
        }
      });

      this.querySelector('text').setAttribute('fill','#6DD400');
      setColorDot(this.getAttribute('dot-position'));

      document.querySelector('.h1.text-green').classList.add("opacity-0");
      document.querySelector('.sello').classList.replace("opacity-75","opacity-0");

      setTimeout(() => {
        classSvgText('d-none','add');
        calculate_new_rotation(this.getAttribute('dot-position'));
        setTimeout(() => {
          //CAMBIAR CABECERA EN MEDIO DE LA ANIMACION DE ROTACION
          changeTextdata(page_name);
          changeHead(page_name);
          setTimeout(() => {
            document.querySelector('.h1.text-green').classList.remove("opacity-0");
            document.querySelector('.sello').classList.replace("opacity-0","opacity-75");
            this.querySelector('text').setAttribute('fill','white');
            classSvgText('d-none','rm');
          }, 0600);
        }, 0600);
      }, 0300);

    });
  });

  function setColorDot(jump_dot){
    var old_active_dot = document.querySelector('.dot.active');
    var old_dot_position = old_active_dot.getAttribute('dot-position');
    var new_dot_position = parseInt(jump_dot) + parseInt(old_dot_position);
    if(new_dot_position>6){
      var new_dot_position = parseInt(new_dot_position) - 6;
    }
    old_active_dot.classList.remove('active');
    document.querySelector('.dot.dot-'+new_dot_position).classList.add('active');
  }

  function calculate_new_rotation(multiply_rotate){
    var tool_rotate=document.querySelector('.tool-rotate');
    if(tool_rotate.style.transform==""){
      tool_rotate.style.transform = "translate(-50%, -50%) rotate(-"+(60*multiply_rotate)+"deg)";
    }else{
      var current_value = tool_rotate.style.transform.split("rotate(")[1].split("deg)")[0];
      tool_rotate.style.transform = "translate(-50%, -50%) rotate("+(current_value-(60*multiply_rotate))+"deg)";
    }
  }

  function classSvgText(custom_class,action){
    let paths = document.querySelectorAll('a.animation')
    paths.forEach(path => {
      if(action=="add"){
        path.classList.add(custom_class);
      }
      if(action=="rm"){
        path.classList.remove(custom_class);
      }
    });
  }

  function changeTextdata(page_name){
    var text_one=document.querySelector(".group-one");
    var text_two=document.querySelector(".group-two");

    switch (page_name) {
      case 'procesos':
        text_one.setAttribute('page-name','entorno');
        text_one.setAttribute('page-id','589');
        text_one.querySelector('text').innerHTML="Entorno";

        text_two.setAttribute('page-name','producto');
        text_two.setAttribute('page-id','585');
        text_two.querySelector('text').innerHTML="Producto";
      break;
      case 'entorno':
        text_one.setAttribute('page-name','producto');
        text_one.setAttribute('page-id','585');
        text_one.querySelector('text').innerHTML="Producto";

        text_two.setAttribute('page-name','procesos');
        text_two.setAttribute('page-id','587');
        text_two.querySelector('text').innerHTML="Procesos";
      break;
      case 'producto':
        text_one.setAttribute('page-name','procesos');
        text_one.setAttribute('page-id','587');
        text_one.querySelector('text').innerHTML="Procesos";

        text_two.setAttribute('page-name','entorno');
        text_two.setAttribute('page-id','589');
        text_two.querySelector('text').innerHTML="Entorno";
      break;
    }
  }

  function changeHead(page_name){
    var title = document.querySelector('.h1.text-green');
    var sello = document.querySelector('.sello');
    var bg_cabecera = document.querySelector('.bg-custom-image');
    
    switch (page_name) {
      case 'entorno':
        title.innerHTML = "Entorno";
        sello.setAttribute('src', '/wp-content/uploads/2022/03/sello-entorno.png');
        bg_cabecera.style.background = "url('/wp-content/uploads/2022/05/bg-entornos-definitiva.png')";
      break;
      case 'producto':
        title.innerHTML = "Producto";
        sello.setAttribute('src', '/wp-content/uploads/2022/03/sello-producto.png');
        bg_cabecera.style.background = "url('/wp-content/uploads/2022/05/bg-producto-definitiva.png')";
      break;
      case 'procesos':
        title.innerHTML = "Procesos";
        sello.setAttribute('src', '/wp-content/uploads/2022/03/sello-procesos.png');
        bg_cabecera.style.background = "url('/wp-content/uploads/2022/05/bg-procesos-definitiva.png')";
      break;
    }
  }

});