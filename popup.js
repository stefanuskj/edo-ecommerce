function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/3.5-157;//150 is half popup's height
	popUpDiv.style.top = popUpDiv_height + 'px';
}
function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/5-170;//150 is half popup's width
	popUpDiv.style.left = window_width + 'px';
}
function popup(detail) {
	blanket_size(detail);
	window_pos(detail);
	toggle('blanket');
	toggle(detail);		
}
function drop() {
	if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";}
	else if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";
	document.getElementById("d1").style.display = "initial";}
	else if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";
	document.getElementById("d1").style.display = "initial";}
	else if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";
	document.getElementById("d1").style.display = "initial";}
	else if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";
	document.getElementById("d1").style.display = "initial";}
	else if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";
	document.getElementById("d1").style.display = "initial";}
	else{document.getElementById("d1").style.display = "initial";}
}
function drop1() {
	if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";}
	else if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";
	document.getElementById("d2").style.display = "initial";}
	else if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";
	document.getElementById("d2").style.display = "initial";}
	else if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";
	document.getElementById("d2").style.display = "initial";}
	else if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";
	document.getElementById("d2").style.display = "initial";}
	else if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";
	document.getElementById("d2").style.display = "initial";}
	else{document.getElementById("d2").style.display = "initial";}
}
function drop2() {
	if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";}
	else if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";
	document.getElementById("d3").style.display = "initial";}
	else if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";
	document.getElementById("d3").style.display = "initial";}
	else if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";
	document.getElementById("d3").style.display = "initial";}
	else if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";
	document.getElementById("d3").style.display = "initial";}
	else if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";
	document.getElementById("d3").style.display = "initial";}
	else{document.getElementById("d3").style.display = "initial";}
}
function drop3() {
	if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";}
	else if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";
	document.getElementById("d4").style.display = "initial";}
	else if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";
	document.getElementById("d4").style.display = "initial";}
	else if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";
	document.getElementById("d4").style.display = "initial";}
	else if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";
	document.getElementById("d4").style.display = "initial";}
	else if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";
	document.getElementById("d4").style.display = "initial";}
	else{document.getElementById("d4").style.display = "initial";}
}
function drop4() {
	if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";}
	else if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";
	document.getElementById("d5").style.display = "initial";}
	else if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";
	document.getElementById("d5").style.display = "initial";}
	else if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";
	document.getElementById("d5").style.display = "initial";}
	else if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";
	document.getElementById("d5").style.display = "initial";}
	else if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";
	document.getElementById("d5").style.display = "initial";}
	else{document.getElementById("d5").style.display = "initial";}
}
function drop5() {
	if (document.getElementById("d6").style.display == "initial")
	{document.getElementById("d6").style.display = "none";}
	else if (document.getElementById("d2").style.display == "initial")
	{document.getElementById("d2").style.display = "none";
	document.getElementById("d6").style.display = "initial";}
	else if (document.getElementById("d3").style.display == "initial")
	{document.getElementById("d3").style.display = "none";
	document.getElementById("d6").style.display = "initial";}
	else if (document.getElementById("d4").style.display == "initial")
	{document.getElementById("d4").style.display = "none";
	document.getElementById("d6").style.display = "initial";}
	else if (document.getElementById("d5").style.display == "initial")
	{document.getElementById("d5").style.display = "none";
	document.getElementById("d6").style.display = "initial";}
	else if (document.getElementById("d1").style.display == "initial")
	{document.getElementById("d1").style.display = "none";
	document.getElementById("d6").style.display = "initial";}
	else{document.getElementById("d6").style.display = "initial";}
}