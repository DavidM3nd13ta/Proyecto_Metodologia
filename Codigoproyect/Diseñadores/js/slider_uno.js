const slider_uno=document.querySelector("#slider_uno");

let slider_unoAnimation=document.querySelectorAll(".slider_section_uno");
let slider_unoAnimationUltimo=slider_unoAnimation[slider_unoAnimation.length -1];

slider_uno.insertAdjacentElement('afterbegin', slider_unoAnimationUltimo);

function MoverDerecha_uno(){
	let slider_unoAnimationn=document.querySelectorAll(".slider_section_uno")[0];

	slider_uno.style.marginLeft="-200%";
	slider_uno.style.transition="all 0.5s linear";

	setTimeout(function(){
		slider_uno.style.transition="none";
		slider_uno.insertAdjacentElement('beforeend', slider_unoAnimationn);

		slider_uno.style.marginLeft="-100%";
	}, 1500);
}

setInterval(function(){
	MoverDerecha_uno();
}, 3500);