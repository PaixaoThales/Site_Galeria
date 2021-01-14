$(document).ready(function(e) {
	$('#imagem-antes').slideUp(0);
	$("#imagem").change(function(){
		$('#imagem-antes').slideUp(0);
		readURL(this);
		$('#imagem-antes').slideDown(1000);
	});        
});
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#imagem-antes').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}
function pesquisar(texto, estado, condicao, volta){
	$.ajax({
		url:'pesquisar.action.php?texto='+texto+'&estado='+estado+'&condicao='+condicao+'&volta='+volta,
		success:function(retorno){
			$('#retorno').html(retorno);
		}
	});
}
$(document).ready(function(){
	$('#formObras').validate({
		rules:{
			nome:{
				required: true,
			},
			genero:{
				required: true,
			},
			autor:{
			},
			tecnica:{
				required: true,
			},
			ano:{
				max: 2018,
				min: 0,
			},
			imagem:{
				required: true,
				extension: "jpg|png"
			}
		},
		messages:{
			nome:{
				required: "*",
			},
			genero:{
				required: "*",
			},
			autor:{
			},
			tecnica:{
				required: "*",
			},
			ano:{
				max: "Esse campo deve ter no mínimo 2018 e no máximo 0",
				min: "Esse campo deve ter no mínimo 2018 e no máximo 0",
			},
			imagem:{
				required: "*",
				extension: "Esse campo só aceita imagens"
			}
		}
	});
});




