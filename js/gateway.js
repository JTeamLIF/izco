function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
}

var url = getURLParameter('loc');


$(document).ready(function(){
$('.accept').on('click', function () {
  setCookie();
  location.href=url;
//alert("The paragraph was clicked.");
   });
 });

function setCookie()
{
document.cookie = "verify_jlif=yes";
}
