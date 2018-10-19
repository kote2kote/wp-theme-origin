const hello = name => {
  return `hello ${name}`;
};
console.log(hello("latte & oreo"));

function jsresize(){
  var width = window.innerWidth ||
              document.documentElement.clientWidth ||
              document.body.clientWidth;
  document.getElementById('width').innerHTML = 'document width: ' + width + 'px';
};
window.onload = jsresize;
window.onresize = jsresize;