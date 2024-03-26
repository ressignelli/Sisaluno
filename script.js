function Excluir(){
	alert("Excluido");
}

function Habilitar(){
	const x = document.forms["form1"];
	for (i=0; i<x.length; i++){
		x.elements[i].disabled = false;
	}
}

function Desabilitar(){
	const x = document.forms["form1"];

	for (i=0; i < x.length; i++){
		x.elements[i].disabled = true;
	}
}