$(document).ready(function () {
	$(".tel-mask").mask("+998 11 111 11 11");
	$(".tel-mask").on("focus", function () {
		$(this).val("+998");
	});
	$("[data-fancybox='gallery']").fancybox({
		buttons: ["slideShow", "share", "zoom", "fullScreen", "download", "thumbs", "close"],
		image: {
			preload: false,
		},
	});
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();

		const sectionId = this.getAttribute("href");
		const section = document.querySelector(sectionId);
		const headerHeight = document.querySelector("header").offsetHeight;
		const sectionTop = section.offsetTop - headerHeight;

		const scrollOptions = {
			top: sectionTop,
			behavior: "smooth",
		};

		const startTime = performance.now();
		const duration = 1000;
		const startTop = window.pageYOffset;

		function scroll(timestamp) {
			const timeElapsed = timestamp - startTime;
			const progress = Math.min(timeElapsed / duration, 1);

			const easeInOutQuad = (t) => (t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t);

			const scrollTop = startTop + easeInOutQuad(progress) * (sectionTop - startTop);

			window.scrollTo({
				top: scrollTop,
				behavior: "auto",
			});

			if (timeElapsed < duration) {
				requestAnimationFrame(scroll);
			}
		}

		requestAnimationFrame(scroll);
	});
});

function openTab(evt, tabName) {
	var i, tabcontent, tablinks;
	let tab = evt.target.closest(".tab");
	tabcontent = tab.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].classList.remove("active");
	}
	tablinks = tab.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].classList.remove("active");
	}
	document.getElementById(tabName).classList.add("active");
	evt.currentTarget.classList.add("active");
}
let header = document.querySelector(".header");
let prevScrollPos = window.pageYOffset;

window.addEventListener("scroll", function () {
	let currentScrollPos = window.pageYOffset;
	if (prevScrollPos > currentScrollPos) {
		// Scrolling Up
		header.classList.remove("scrolled");
	} else {
		// Scrolling Down
		header.classList.add("scrolled");
	}
	prevScrollPos = currentScrollPos;
});

let main = document.querySelector("main");
let headerHeight = document.querySelector("header").offsetHeight;
window.addEventListener("load", function () {
	if (!main.classList.contains("main")) {
		main.style.marginTop = `${headerHeight}px`;
	}
});

window.addEventListener("load", function () {
	document.body.style = `--header-height: ${headerHeight}px`;
});

const fixNav = () => {
	if (window.scrollY > 1) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
};

window.addEventListener("scroll", fixNav);

const accardionToggle = (slideMenu) => (e) => {
	slideMenu.forEach((links) => {
		const hidePanel = links.nextElementSibling;
		if (links === e.currentTarget) {
			e.currentTarget.classList.toggle("active");
			hidePanel.classList.toggle("active-block");
		} else {
			links.classList.remove("active");
			hidePanel.classList.remove("active-block");
		}
	});
};
const slideMenu = document.querySelectorAll(".accardion-link");

slideMenu.forEach((links) => {
	links.addEventListener("click", accardionToggle(slideMenu));
});



// Accordeon tour-internal.php

const accordeonTitles = document.querySelectorAll('.accordeon__item-btn');


accordeonTitles.forEach.call(accordeonTitles, function(accordeonTitle) {
    accordeonTitle.addEventListener('click', function() {

        const currentText = accordeonTitle.parentElement.querySelector('.accordeon__item-text');

        accordeonTitle.classList.toggle('accordeon__title--active');
        currentText.classList.toggle('accordeon__text--visible');

        const arrowImg = accordeonTitle.querySelector('.accordeon__icon');

        if(currentText.classList.contains('accordeon__text--visible')){
            currentText.style.display = 'block'
            arrowImg.src = "./assets/icons/accordeon__arrow-top.svg"
        } else {
            currentText.style.display = "none"
            arrowImg.src = "./assets/icons/accordeon__arrow-down.svg"
        }

    })
})



// Accordeon my-profile.php

const accordeonButtons = document.querySelectorAll('.myprofile__accordeon-btn');


accordeonButtons.forEach.call(accordeonButtons, function(accordeonButton) {
    accordeonButton.addEventListener('click', function() {

        const currentText = accordeonButton.parentElement.querySelector('.accordeon__item__content');

        accordeonButton.classList.toggle('accordeon__title--active');
        currentText.classList.toggle('accordeon__text--visible');

        const arrowImg = accordeonButton.querySelector('.accordeon__icon-myprofile');

        if(currentText.classList.contains('accordeon__text--visible')){
            currentText.style.display = 'block'
            arrowImg.src = "./assets/icons/accordeon__arrow-top.svg"
        } else {
            currentText.style.display = "none"
            arrowImg.src = "./assets/icons/accordeon__arrow-down.svg"
        }

    })
})



// active sections options


const tabsBtn = document.querySelectorAll('.tab');
const tabsItem = document.querySelectorAll('.tab__item');

tabsBtn.forEach(function(item) {
	item.addEventListener("click", function(){
		let currentBtn = item;
		let tabId = currentBtn.getAttribute("data-tab");
		let currentTab = document.querySelector(tabId);

		if(!currentBtn.classList.contains('show')){
			tabsBtn.forEach(function(item){
				item.classList.remove('show');
			});
	
			tabsItem.forEach(function(item){
				item.classList.remove('show');
			});
	
			currentBtn.classList.add('show');
			currentTab.classList.add('show');

		}

	})
})


// modal my-profile


const editBtnName = document.querySelector('.icon-edit__name');
const modalName = document.querySelector('.popup');
const modalNameClose = document.querySelector('.popup__close-name');
const modalNameSaveBtn = document.querySelector('.popup__btn');

editBtnName.addEventListener('click', function(){
	modalName.classList.toggle('modal-show');
})

modalNameClose.addEventListener('click', function(){
	modalName.classList.toggle('modal-show');
})

modalNameSaveBtn.addEventListener('click', function(){
	modalName.classList.toggle('modal-show');
})



const editBtnTel = document.querySelector('.icon-edit__tel');
const modalTel = document.querySelector('.popup__tel');
const modalTelClose = document.querySelector('.popup__close-tel');
const modalTelSaveBtn = document.querySelector('.popup__tel__btn');

editBtnTel.addEventListener('click', function(){
	modalTel.classList.toggle('modal-show');
});

modalTelClose.addEventListener('click', function(){
	modalTel.classList.toggle('modal-show');
});

modalTelSaveBtn.addEventListener('click', function(){
	modalTel.classList.toggle('modal-show');
});


// login and sign-up confirm

function moveToNextOrPreviousInput(event, currentInput) {
    if (/^[0-9]$/.test(currentInput.value)) {
        // Если введена цифра
        if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
            // Если был удален символ и текущий ввод не первый
            currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
        } else if (currentInput.nextElementSibling !== null) {
            // Если введена цифра и текущий ввод не последний
            currentInput.nextElementSibling.focus(); // Переходим к следующему полю ввода
        }
    } else if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
        // Если символ не цифра и был удален символ, переходим к предыдущему полю ввода
        currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
    }
}



// active page color


document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.nav__link-btn');

    navItems.forEach(item => {
        item.addEventListener('click', function (event) {
            /* event.preventDefault();  */// Предотвращаем переход по ссылке
            
            navItems.forEach(navItem => navItem.classList.remove('header__nav-active'));
            this.classList.add('header__nav-active');
        });
    });
});



  
  