window.addEventListener('load', function(){
	const car = document.querySelector(".carousel");
    car.style.visibility = "visible";/*hacer visible una vez cargado*/ 

    let slider=new Glider(document.querySelector('.carousel__lista'), {
		autoplay:2000					,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores',
		draggable:true,
		rewind:true,
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},
		responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 450,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
        		slidesToShow: 2,
				slidesToScroll: 2,
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			}
		]
	});
	
	let autoplayDelay = 3500;

	let autoplay = setInterval(() => {
		slider.scrollItem('next')
	}, autoplayDelay);

	document.querySelector('.carousel__lista').addEventListener('mouseover', (event) => {
		if (autoplay != null) {
		clearInterval(autoplay);
		autoplay = null;
		}
	}, 300);

	document.querySelector('.carousel__lista').addEventListener('mouseout', (event) => {
		if (autoplay == null) {
		autoplay = setInterval(() => {
			slider.scrollItem('next')
		}, autoplayDelay);
		}
	}, 300);
});