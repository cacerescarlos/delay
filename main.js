


// BLOQUEO DE RETROSESO
 function nobackbutton(){  
      window.location.hash="no-back-button";  
   window.location.hash="Again-No-back-button" //chrome 
   window.onhashchange=function(){window.location.hash="no-back-button";} 
 }





// Service Worker
if ('serviceWorker' in navigator) {
console.log("Puedes usar service Worker en tu navegador");
			
			//registra el services worker
		navigator.serviceWorker.register('./sw.js')
		.then(res=> console.log('serviceWorker cargado correctamente',res))
		.catch(err => console.log('serviceWorker no se ha podido registrar',err));
}

else{
console.log("NO PUEDES usar service Worker en tu navegador");
}

/*

// funciones al cargar la pagina
$(document).ready(function(){
	console.log('ini');
	/*$("#menu a").click(function(e){
		e.preventDefault();
		$("html, body").animate({
			scrollTop: $($(this).attr('href')).offet().top
		});
		return false;
	});

});// end
*/




//Scroll suavizado