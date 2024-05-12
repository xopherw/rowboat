//just have to make sure css has it start with display: none;
function tog() { this.nextElementSibling.style.display = (this.nextElementSibling.style.display=='block' ? '' : 'block'); }

var togs = document.getElementsByClassName("tog");
for(let i=0;i<togs.length;i++){
  togs[i].addEventListener('keypress', tog, false);
  togs[i].addEventListener('click', tog, false);
}

function flextog() { this.nextElementSibling.style.display = (this.nextElementSibling.style.display=='flex' ? '' : 'flex'); }

var flextogs = document.getElementsByClassName("flextog");
for(let i=0;i<flextogs.length;i++){
  flextogs[i].addEventListener('keypress', flextog, false);
  flextogs[i].addEventListener('click', flextog, false);
}