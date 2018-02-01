(function() {
	
	var preload = document.getElementById("preload");
	var loading = 0;
	var id = setInterval(frame, 30);
	
	function frame() {
	if(loading == 100) {
		clearInterval(id);
		window.open('https://www.linkedin.com/in/daler-rakhmet-zade-94532ba0/', "_self");
		
	}	
	else {
		loading = loading + 1;
		if(loading == 50) {
		preload.style.animation = "fadeout 1.5s ease";
	} 
}
}

})();