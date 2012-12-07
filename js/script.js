var index = 0;
var imagens = ['img/logocin.png',"img/logoufpe.png",'img/icone.jpg'];

var intervalo;

function mudaImagem(){
	

	$('#setaDir').click(function(){
	var proximoIndex = (index + 1) % imagens.length;
	
	$("#SlideShowGrande").fadeOut(400);
	
	setTimeout(function(){
		$("#SlideShowGrande").attr('src',imagens[proximoIndex]);
	}, 400);
	
	$("#SlideShowGrande").fadeIn(400);
	
	index = proximoIndex;
	clearInterval(intervalo);

	});

	$('#setaEsq').click(function(){

		if(index>0){
			var proximoIndex = (index - 1) % imagens.length;
	
			$("#SlideShowGrande").fadeOut(400);
	
			setTimeout(function(){
				$("#SlideShowGrande").attr('src',imagens[proximoIndex]);
			}, 400);
			
			$("#SlideShowGrande").fadeIn(400);
			
			index = proximoIndex;
			clearInterval(intervalo);
		}else {
			index = imagens.length;
			var proximoIndex = (index - 1) % imagens.length;
	
			$("#SlideShowGrande").fadeOut(400);
	
			setTimeout(function(){
				$("#SlideShowGrande").attr('src',imagens[proximoIndex]);
			}, 400);
			
			$("#SlideShowGrande").fadeIn(400);
			
			index = proximoIndex;
			clearInterval(intervalo);
		}
	});
}


intervalo = setInterval(mudaImagem, 3000);
