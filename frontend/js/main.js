let interceptAnims;
let prevOffset = window.pageYOffset;

document.addEventListener('DOMContentLoaded', () => {
	interceptAnims = document.getElementsByClassName('animated');
	pauseAnimations(interceptAnims);
	configureLinks();
});

document.addEventListener('scroll', hideHeader);

document.addEventListener('scroll', () => {
	for (let i = 0; i < interceptAnims.length; i++) {
		if (checkIntercept(interceptAnims[i])) {
			playAnimation(interceptAnims[i]);
		}
	}
});

function pauseAnimations(elements) {
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.webkitAnimationPlayState = 'paused';
	}
}

function checkIntercept(element) {
	if (window.pageYOffset + window.innerHeight * 0.5 > getYOffset(element)) {
		return true;
	} else {
		return false;
	}
}

function playAnimation(element) {
	element.style.webkitAnimationPlayState = 'running';
}

function getYOffset(element) {
	var offset = 0;

	while (element) {
		offset += element.offsetTop;
		element = element.offsetParent;
	}

	return offset;
}

function configureLinks() {
	let scrollers = document.getElementsByClassName('nav-link');
	for (let i = 0; i < scrollers.length; i++) {
		scrollers[i].onclick = (event) => {
			event.preventDefault();
			document.getElementById(scrollers[i].getAttribute('href').split('#')[1]).scrollIntoView();
		};
	}
}

function scrollDirection() {
	if (window.pageYOffset > prevOffset) {
		prevOffset = window.pageYOffset;
		return -1;
	} else {
		prevOffset = window.pageYOffset;
		return 1;
	}
}

function hideHeader() {
	let header = document.getElementById('header');
	if (scrollDirection() === -1) {
		header.style.opacity = '0';
	} else {
		header.style.opacity = '1';
	}
}
