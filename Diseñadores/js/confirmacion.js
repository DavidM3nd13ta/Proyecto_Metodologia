function confirmacion(Evento){
	if(confirm("¿Estas segur@ de eliminar el registro?")){
		return true;
	}else{
		Evento.preventDefault();
	}
}

let c_evento=document.querySelectorAll(".eliminar");

for(var i=0;i<c_evento.length;i++){
	c_evento[i].addEventListener('click',confirmacion);
}