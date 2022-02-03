window.onload = function(){
  document.getElementById("boton").onclick = mostrarPhp;
}

var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
 XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
 XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
function mostrarPhp() {
 if (XMLHttpRequestObject) {
   var objeto = document.getElementById("content");
   XMLHttpRequestObject.open("POST", 'datos.php', true);
   XMLHttpRequestObject.onreadystatechange = function () {
     if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
        
      objeto.innerHTML = XMLHttpRequestObject.responseText;
     }
   };
       XMLHttpRequestObject.send(null);
 }
}
