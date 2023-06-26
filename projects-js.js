
	
filterSelection("all")
function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("filterDiv");
	if (c == "all") c = "";
	for (i = 0; i < x.length; i++) {
	RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
	}
}

function AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	}
}

function RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	}
	element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("projFilter");
var btns = btnContainer.getElementsByClassName("projBtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


// Project Transition
window.addEventListener('DOMContentLoaded', function(){
	jQuery(document).ready(function($){
		$('.projInner').mouseover(function(){
			var imageHeight = $(this).find('.myProj').height();
			var laptopHeight = $( this ).height();
			var scrollHeight = imageHeight-laptopHeight;
			$(this).find('.myProj').css("transform", "translate3d(0, -"+scrollHeight+"px, 0)");
		});

		$('.projInner').mouseout(function(){
		$(this).find('.myProj').css("transform", "translate3d(0, 0, 0)");
		});
	});
});


// Load More Button
jQuery(document).ready(function($){
	$(function(){
		//$("div.unload").slice(0, 6).show();
		$("#loadMore").click(function(e){
			e.preventDefault();
			$("div.unload:hidden").slice(0, 6).show();
			if($("div.unload:hidden").length == 0){
				$("#loadMore").hide();
			}
		});
	});
});