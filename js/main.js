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
	//Active link
	const sections = document.querySelectorAll('section[id]')

	const scrollActive = () => {
		const scrollY = window.pageYOffset

		sections.forEach(current =>{
			const sectionHeight = current.offsetHeight,
			sectionTop = current.offsetTop - 58,
			sectionId = current.getAttribute('id'),
			sectionsClass = document.querySelector('.header__links li a[href*=' + sectionId + ']')

			if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
				sectionsClass.classList.add('active-link')
			}else{
				sectionsClass.classList.remove('active-link')
			}
		})
	}
	window.addEventListener('scroll', scrollActive)
})