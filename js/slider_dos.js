const slider_dos=document.querySelector("#slider_dos");

let slider_dosAnimation=document.querySelectorAll(".slider_section_dos");
let slider_dosAnimationUltimo=slider_dosAnimation[slider_dosAnimation.length -1];

slider_dos.insertAdjacentElement('afterbegin', slider_dosAnimationUltimo);

function MoverDerecha_dos(){
	let slider_dosAnimationn=document.querySelectorAll(".slider_section_dos")[0];

	slider_dos.style.marginLeft="-200%";
	slider_dos.style.transition="all 0.5s linear";

	setTimeout(function(){
		slider_dos.style.transition="none";
		slider_dos.insertAdjacentElement('beforeend', slider_dosAnimationn);

		slider_dos.style.marginLeft="-100%";
	}, 1500);
}

setInterval(function(){
	MoverDerecha_dos();
}, 3000);