// JavaScript Document
var set = 1;
var arrpath = new Array();
var arrimg = new Array();
//var url = "default.htm";********************************
var url ="";

$(document).ready(function() {
	generate_code( $("#text_form").val() );	
	$("#text_form").keyup(function() {
		generate_code( $("#text_form").val() );	//le pasa el caracter A la funcion
	});
	
		$(".opt").change(function() {
		if ( $("#text_form").val() != "" )					  
			generate_code( $("#text_form").val() );						  
	});

});


function select_letter_set(setid) {
	set = setid;
	if ($("#text_form").val() != "")
		generate_code( $("#text_form").val() );
	return false;
}




function add_movement(str) {
	var speed;
	var dir = $("#direction").val();
	switch ( $("#speed").val() ) {
		case "slow": speed = 3; break;
		case "medium": speed = 9; break;
		case "fast": speed = 18; break;
	}
	
	return '<marquee width="100%" behavior="scroll" direction="'+dir+'" scrollamount="'+speed+'">' + str + '</marquee>';
}

function generate_code(text) {
	str = "";
	code = "";
	var ii = 0;
	
	for(i = 0; i < text.length; i++) {
		ch = text.charAt(i).toLowerCase(); //el primer caracter .convierte en minuscula
		if (ch == '*') {
			str += "<img border='0' alt='empty' src="+url+"images/iconos/default.htm"+arrpath[ii]+"default.htm"+arrimg[ii]+">";
			ii++;			
		}
		else if(ch < 'a' || ch > 'z')//IMPORT
			str += "<img border='0' alt='empty' src="+url+"http://www.textoconbrillo.net/images/empty.gif width=20 height=1>";
					
		else
			str += "<img border='0' alt='" + ch + "' src='"+url+"http://www.textoconbrillo.org/texto/brillo" + set + "/" + ch + ".gif'>";
	}	
	
		if ( $("#movement").val() == "yes" )
		str = add_movement(str);

	
	code = '<a style="border:0" href="http://www.textoconbrillo.org/" target="_blank" title="Texto con brillo">' + str + '</a>';

		
	$("#text_display").html( str );
	//$("#txt_code_display").val( code );
	$("#code_display").css("display", "block")
	// alert (str);
	$("#codehtml").val(code);
}






/*//////////////////////////////////////////////////*/
$(document).ready( DD_roundies.addRule('.modulo', '5px', true) );
$(document).ready( DD_roundies.addRule('.pagina', '0px 0px 3px 3px', true) );
$(document).ready( DD_roundies.addRule('.cabecera', '0px 0px 5px 5px', true) );



