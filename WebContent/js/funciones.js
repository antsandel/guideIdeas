function ocultarTodo(){
	$('#sec0').hide();
	$('#sec1').hide();
	$('#sec2').hide();
	$('#sec3').hide();
	$('#sec4').hide();
	$('#sec5').hide();
}

function mostrar(){
	ocultarTodo();
	var Id = $(this).attr("id");
	console.log(Id);
	$('#sec3').show();
	$("html, body").animate({ scrollTop: 0 }, 600);
}