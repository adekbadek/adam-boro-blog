var gists = document.getElementsByClassName('gist')
for (var i = 0; i < gists.length; i++) {
  gists[i].style.height = gists[i].offsetHeight + 'px'
  gists[i].classList.add('g-expandable')
  gists[i].classList.add('g-hidden')
  gists[i].onclick = function(e){
    e.target.classList.remove('g-hidden')
  }
}

hljs.initHighlightingOnLoad();

// all external links should open in new tab
Array.prototype.slice.call(document.querySelectorAll('.single-content a')).map(function(link){
  if(link.href.indexOf('http') >= 0)
    link.target = '_blank'
})
