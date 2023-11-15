function confirmacion_Act(EventoAct){
	if(confirm("¿Estas segur@ de actualizar el registro?")){
		return true;
	}else{
		EventoAct.preventDefault();
	}
}

let ac_evento=document.querySelectorAll(".actualizar");

for(var i=0;i<ac_evento.length;i++){
	ac_evento[i].addEventListener('click',confirmacion_Act);
}