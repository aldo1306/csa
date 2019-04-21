$(document).ready(function(){

	// MOSTRANDO Y OCULTANDO MENU
	$('#button-menu').click(function(){
		if($('#button-menu').attr('class') == 'fa fa-bars' ){

			
			$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); // Agregamos el icono X
			$('.menu').css({'left':'0px', 'padding':'0px'}); // Mostramos el menu
			$('.menu').css({'z-index':'1'}); // con posicion absoluta menu

		} else{

			$('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
			$('.menu').css({'left':'-220px', 'padding':'0px'});  // Ocultamos el Menu
			$('.submenu').css({'left':'-220px'}); // Ocultamos el SubMenu
			$('.menu').css({'z-index':'0'}); // csin posicion absoluta menu

		}
	});

	//MOSTRANDO SUBMENU
	$('.item-submenu a').click(function(){
		var positionMenu = $(this).parent().attr('menu'); 
		$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0px'});// Mostramos el menu
	});

	//OCULTAR SUBMENU

	$('.submenu .go-back').click(function(){
		$(this).parent().css({'left':'-220px'})// Regresar a Menu Principal
	});

});