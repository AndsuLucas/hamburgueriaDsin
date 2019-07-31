function tirarNumeros(event){
	var text = $(this).val().toString().replace(/[^A-Za-z]/g, " ");
	$(this).val(text.trim())
}
		
function removerLetras(){
	var text = $(this).val().toString().replace(/[^0-9]/g, " ");
	$(this).val(text.trim());
}

