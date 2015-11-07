$(document).ready(function()
{
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var mov = setInterval(cambiarImagen,5000);
	var ellipseWitdh = $("#principal-circle").width();
    


	$(".page").css("height",windowHeight+"px");


    
 
	$(window).ready(function()
	{
      windowWidth = $(window).width();
	  windowHeight = $(window).height();
	  ellipseWitdh = $("#principal-circle").width();


      $(".page").css("width",windowWidth+"px");
      $(".page").css("height",windowHeight+"px");


      $("#principal-circle").css("height",(windowWidth*0.3)+"px");
      $("#principal-circle").css("width",(windowWidth*0.3)+"px");
      $("#principal-circle").css("border-radius",((windowWidth*0.4)/2)+"px");

      $("#title").css("width",(windowWidth*0.3)+"px");

      $("#menu").css("height", windowHeight+"px");

      $(".triangulo-left").css("border-bottom",windowHeight+"px solid transparent");
      $(".triangulo-left").css("border-left",(windowWidth*0.2)+"px solid white");
      

      $(".triangulo-right").css("border-top",windowHeight+"px solid transparent");
      $(".triangulo-right").css("border-right",(windowWidth*0.2)+"px solid white");

      $(".slide").css("width", ellipseWitdh*0.7+"px");
      $(".slide").css("height",ellipseWitdh*0.7+"px");
      $(".slide>img").css("width",ellipseWitdh*0.7+"px");
      $(".slide>img").css("height",ellipseWitdh*0.7+"px");
      $("#title h1").css("font-size",windowWidth*0.05+"px");

      $(".sh-1 img").css("width",windowWidth*0.25+"px");
      $(".sh-1").css("font-size",windowWidth*0.015+"px");

       });

      $(window).scroll(function()
      {
         var top = $(window).scrollTop();

         if(top > (windowHeight-70))
         {
         	$(".triangulo-left").fadeIn();
         	$(".triangulo-right").fadeIn();
         }
         else
         {
         	$(".triangulo-left").fadeOut();
         	$(".triangulo-right").fadeOut();
         }
      });
	


	$(window).resize(function()
	{
      
      windowWidth = $(window).width();
	  windowHeight = $(window).height();
	  ellipseWitdh = $("#principal-circle").width();


      $(".page").css("width",windowWidth+"px");
      $(".page").css("height",windowHeight+"px");


      $("#principal-circle").css("height",(windowWidth*0.3)+"px");
      $("#principal-circle").css("width",(windowWidth*0.3)+"px");
      $("#principal-circle").css("border-radius",((windowWidth*0.4)/2)+"px");

      $("#title").css("width",(windowWidth*0.3)+"px");

      $("#menu").css("height", windowHeight+"px");

      $(".triangulo-left").css("border-bottom",windowHeight+"px solid transparent");
      $(".triangulo-left").css("border-left",(windowWidth*0.2)+"px solid white");
      

      $(".triangulo-right").css("border-top",windowHeight+"px solid transparent");
      $(".triangulo-right").css("border-right",(windowWidth*0.2)+"px solid white");

      $(".slide").css("width", ellipseWitdh*0.7+"px");
      $(".slide").css("height",ellipseWitdh*0.7+"px");
      $(".slide>img").css("width",ellipseWitdh*0.7+"px");
      $(".slide>img").css("height",ellipseWitdh*0.7+"px");
      $("#title h1").css("font-size",windowWidth*0.05+"px");

      $(".sh-1 img").css("width",windowWidth*0.25+"px");

$(".sh-1").css("font-size",windowWidth*0.015+"px");
	});

	$("#boton-menu").click(function()
	{
       $("#menu").slideUp();
	});

	$("#circulo-menu img").click(function()
	{
      $("#menu").slideDown();
	});

});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function cambiarImagen () 
	{
	  var size = $("#principal-circle").find(".slide").size(); // size es el numero total de divs con esa clase


      $("#principal-circle").find(".slide").each(function(index,value)
       {

         if($(this).hasClass("visible")) // selecciona el elemento que tenga la clase visible
         {
            $(this).fadeOut(); // lo oculta y retira la clase 
            $(this).removeClass("visible");

            //console.log('test');

            if (index + 1 < size) //siempre y cuaando existan mas divs con esa caracateristica
            {
              $($("#principal-circle").find(".slide").get(index + 1)).fadeIn();//mostrara el siguiente Div
              $($("#principal-circle").find(".slide").get(index + 1)).addClass("visible")//añadira la clase visible
              
              console.log(index);

              return false;  
            }
            else//en caso contrario volvera a la div con el indice 0 que es el pricipio del slideShow
            {
              $($("#principal-circle").find(".slide").get(0)).fadeIn();
              $($("#principal-circle").find(".slide").get(0)).addClass("visible")

              return false;

            }
	     }
	    });
	} 