
var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
 XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
 XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
function mostrarPhp(str) {
 if (XMLHttpRequestObject) {
   var objeto = document.getElementById("container");
   XMLHttpRequestObject.open("GET", 'datos.php?q='+str, true);
   XMLHttpRequestObject.onreadystatechange = function () {
     if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
        
        objeto.innerHTML = XMLHttpRequestObject.responseText;
     }
   };
       XMLHttpRequestObject.send(null);
 }
}
