/*     
Función para mostrar el reloj y la fecha
*/
$( document ).ready(function() {
	updateDay();//para que al cargarse por primera vez se coloque el dia
	updateTime();// y la hora
	
	function updateTime(){
		var today = new Date();
		var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		document.getElementById('time').innerHTML = time; //update the date 		    
	}
	setInterval(updateTime, 1000);

	function updateDay(){
		var today = new Date();
		var dd = String(today.getDate()).padStart(2, '0');
		var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
		var yyyy = today.getFullYear();

		today = mm + '/' + dd + '/' + yyyy;
		document.getElementById('date').innerHTML = today; //update the date		
	}
	setInterval(updateDay, 60000);//cada minuto se actualiza el dia	
});



 