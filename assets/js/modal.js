/* function Modalopen(modal) {
	modal.classList.add("modal--active");
	document.body.classList.add("no-scroll");
}

function modalclose(closeButton) {
	document.body.classList.remove("no-scroll");
	closeButton.closest("[data-modal]").classList.remove("modal--active");
}

function modal(openSelector, closeSelector) {
	const openTriggers = Array.from(document.querySelectorAll(openSelector));
	const closeTriggers = Array.from(document.querySelectorAll(closeSelector));

	openTriggers.forEach((el) => {
		el.addEventListener("click", function (e) {
			const modalId = this.getAttribute("data-modal-id");
			const targetModal = document.querySelector(`[data-modal="${modalId}"]`);

			Modalopen(targetModal);
		});
	});

	closeTriggers.forEach((el) => {
		el.addEventListener("click", function () {
			modalclose(this);
		});
	});
}

modal(".open-modal", ".close-modal");

const myModal = document.querySelectorAll(".modal");
myModal.forEach((el) => {
	el.addEventListener("click", function (e) {
		el.classList.remove("modal--active");
		document.body.classList.remove("no-scroll");
	});
}); */

// mobile navigation

let lang = document.querySelector(".lang");
const handleLang = () => {
	lang.classList.toggle("active");
};

let mobileMenu = document.querySelector(".mobileMenu");
let burger = document.querySelector(".burger");

const toggleMobileMenu = () => {
	mobileMenu.classList.toggle("mobileMenu-active");
	burger.classList.toggle("active");
	document.body.classList.toggle("no-scroll");
};

// lang Active

const langActive = document.querySelector('.lang__active');
const langBtnRu = document.querySelector('.lang__item-ru');
const langBtnUz = document.querySelector('.lang__item-uz');
const langBtnEn = document.querySelector('.lang__item-en');

langBtnRu.addEventListener('click', function(){
	langActive.innerHTML = 'RU'
});

langBtnUz.addEventListener('click', function(){
	langActive.innerHTML = 'UZ'
});

langBtnEn.addEventListener('click', function(){
	langActive.innerHTML = 'EN'
});

// filter tour mobil version

const tourFilter = document.querySelector('.tour__filter__block');
const filterMenuButton = document.querySelector('.filter-menu');

filterMenuButton.addEventListener('click', function(){
	tourFilter.classList.toggle('open__filter');
	document.body.classList.toggle("no-scroll");
});

const filterButtonClose = document.querySelector('.tour__filter__close');

filterButtonClose.addEventListener('click', function(){
	tourFilter.classList.toggle('open__filter');
	document.body.classList.toggle("no-scroll");
})


const filterButtonTrue = document.querySelector('.tour__filter__block .tour__filter__buttons .filter-true');

filterButtonTrue.addEventListener('click', function(){
	tourFilter.classList.toggle('open__filter');
	document.body.classList.toggle("no-scroll");
})

const filterButtonFalse = document.querySelector('.tour__filter__block .tour__filter__buttons .filter-false');

filterButtonFalse.addEventListener('click', function(){
	tourFilter.classList.toggle('open__filter');
	document.body.classList.toggle("no-scroll");
})





