const slider=document.querySelector("#slider");

let sliderAnimation=document.querySelectorAll(".slider__section");
let sliderAnimationUltimo=sliderAnimation[sliderAnimation.length -1];

slider.insertAdjacentElement('afterbegin', sliderAnimationUltimo);

function MoverDerecha(){
	let sliderAnimationn=document.querySelectorAll(".slider__section")[0];

	slider.style.marginLeft="-200%";
	slider.style.transition="all 0.5s linear";

	setTimeout(function(){
		slider.style.transition="none";
		slider.insertAdjacentElement('beforeend', sliderAnimationn);

		slider.style.marginLeft="-100%";
	}, 1500);
}

setInterval(function(){
	MoverDerecha();
}, 4000);