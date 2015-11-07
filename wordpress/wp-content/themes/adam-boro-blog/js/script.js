var bright_click = document.getElementById('bright-click');
var bright_click_section = document.getElementById('bright-click-section');

function toggle_bright(bright){
	if(bright){
		document.body.classList.remove('bright');
		document.body.classList.add('dark');
		bright_click_section.innerHTML = 'dark'
		window.localStorage['adamboro-blog-bright'] = 'dark'
	}else{
		document.body.classList.remove('dark');
		document.body.classList.add('bright');
		bright_click_section.innerHTML = 'bright'
		window.localStorage['adamboro-blog-bright'] = 'bright'
	}
}

bright_click.onclick = function(){
	if(document.body.classList.contains('dark')){
		toggle_bright(false)
	}else{
		toggle_bright(true)
	}
}

if(window.localStorage['adamboro-blog-bright'] == 'dark'){
	toggle_bright(true)
}else{
	toggle_bright(false)
}

// Flipper - arrow to hide header like a drawer
var header = document.getElementById('masthead')
var header_w = header.getBoundingClientRect().width
var flipper = document.getElementById('flipper-arrow')
var flipper_w = flipper.getBoundingClientRect().width

flipper.onclick = function() {
  if (flipper.children[0].classList.contains('flip')) {
    flipper.children[0].classList.remove('flip')
    document.body.classList.add('fullwidth')
  } else {
    flipper.children[0].classList.add('flip')
    document.body.classList.remove('fullwidth')
  }
}
