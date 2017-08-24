$(document).ready(inicia);


function inicia(){
	
	//Eventos de inicio
	$("#fila-seccion-quienes-somos").click(desplegar_quienes_somos);
	//Fotografía escalable de secciones principales
	actualizaTamano();
	$(window).resize(actualizaTamano);
	//hipervínculos JavaScript
	agregarVinculos();
}



function desplegar_quienes_somos(){
	//$("#fila-seccion-quienes-somos-explicacion").toggle();
	$("#fila-seccion-quienes-somos").slideUp();
	$("#fila-seccion-quienes-somos-explicacion").slideDown();

	$("#fila-seccion-quienes-somos-explicacion").click(function () {
		$("#fila-seccion-quienes-somos").slideDown();
		$("#fila-seccion-quienes-somos-explicacion").slideUp();
	});
}


function actualizaTamano(){
	
	//alert($("#fila-seccion-paginas-principales").css("width"));
	
	if($(window).width()>=768){
		$("#fila-seccion-paginas-principales-foto-derecha").css("height",$("#fila-seccion-paginas-principales-primera-columna").css("height"));
		$("#logo-formamos-profesionistas").css("display","inline");
	}else{
		$("#fila-seccion-paginas-principales-foto-derecha").css("height","200");
		$("#logo-formamos-profesionistas").css("display","none");
	}
		
	$("#fila-seccion-visitanos-izquierda").css("height",$("#fila-seccion-visitanos-derecha").css("height"));

	$("#mapa-upemor").height($("#fila-seccion-visitanos-derecha").css("height"));
}


function agregarVinculos(){
	//$("#fila-seccion-visitanos-izquierda").click(function(){ window.open("https://www.google.com/maps/place/Upemor/@18.890333,-99.141514,14z/data=!4m2!3m1!1s0x0:0x33c5f106f173bb4e?hl=es-ES", "win", "") });	*/
}