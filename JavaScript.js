/*dark/bright mode function----------------------*/

var icon= document.getElementById('icon');
icon.onclick=function(){
   document.body.classList.toggle("light-mode");
   if(document.body.classList.contains("light-mode"))
   {
     icon.src="./Content/dark_theme_icon/moon.png";
   }else
   {
     icon.src="./Content/dark_theme_icon/sun.png";
   }
 }

