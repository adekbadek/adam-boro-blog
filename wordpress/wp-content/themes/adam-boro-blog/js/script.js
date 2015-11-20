// var bright_click = document.getElementById('bright-click');
// var bright_click_section = document.getElementById('bright-click-section');

// function toggle_bright(bright){

// 	if(bright){
// 		document.body.classList.remove('bright');
// 		document.body.classList.add('dark');
// 		bright_click_section.innerHTML = 'dark'
// 		// window.localStorage['adamboro-blog-bright'] = 'dark'
// 		document.cookie="bright_class=dark";
// 		console.log('change to dark');
// 	}else{
// 		document.body.classList.remove('dark');
// 		document.body.classList.add('bright');
// 		bright_click_section.innerHTML = 'bright'
// 		// window.localStorage['adamboro-blog-bright'] = 'bright'
// 		document.cookie="bright_class=bright";
// 		console.log('change to bright');
// 	}
// }
//
// bright_click.onclick = function(){
// 	if(document.body.classList.contains('dark')){
// 		toggle_bright(false)
// 	}else{
// 		toggle_bright(true)
// 	}
// }

// if(window.localStorage['adamboro-blog-bright'] == 'dark'){
// 	toggle_bright(true)
// }else{
// 	toggle_bright(false)
// }

// Flipper - arrow to hide header like a drawer
var flipper = document.getElementById('flipper-arrow')

flipper.onclick = function() {

	// class flip does not change anything, it acts as a data attr
  if (flipper.children[0].classList.contains('flip')) {
  	// window.localStorage['adamboro-blog-flip'] = 'f'
		document.cookie="width_class=fullwidth" + ";path=/";
    flipper.children[0].classList.remove('flip')
    document.body.classList.add('fullwidth')
  } else {
  	// window.localStorage['adamboro-blog-flip'] = 't'
		document.cookie="width_class=with_menu" + ";path=/";
    flipper.children[0].classList.add('flip')
    document.body.classList.remove('fullwidth')
  }
}
