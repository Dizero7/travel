document.addEventListener('DOMContentLoaded', () => {
	//Header navigation adaptive
	const headerMenu = document.getElementById('header-menu'),
	headerToggle = document.getElementById('header-toggle'),
	headerClose = document.getElementById('header-close')

	if(headerToggle){
		headerToggle.addEventListener('click', () =>{
			headerMenu.classList.add('open')
		})
	}

	if(headerClose){
		headerClose.addEventListener('click', () =>{
			headerMenu.classList.remove('open')
		})
	}

	//Header navigation scroll blur
	const blurHeader = () =>{
		const header = document.getElementById('header')

		this.scrollY >=50 ? header.classList.add('header-scroll')
		: header.classList.remove('header-scroll')
	}
	window.addEventListener('scroll', blurHeader)
})