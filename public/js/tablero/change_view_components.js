/*
Por lo general, prefiero la solución más general de vincularlo a los eventos 
globales ajaxStart y ajaxStop, de esa manera se muestra para todos los eventos ajax:
$(document).ajaxStart(function(){ });*/
var id, ruta;
var stack = [];
var element_main = false;
var main_system_flag = false;
var frutas = [	"ArduinoProMini3v3", "MPU6050", "LipoBattery3v7",
				"GPSNeo6M", "DHT22","MPL3115A2","BLEHM10", "MQ135"];
var matrix = [] , indicei=0, indicej=0;
var counter=0;
var deposited=0;
var size_matrix;
var newfrutas = frutas.slice();//clonamos frutas
var folder = "grupo";
var last_post_anterior="";
var first_pos;
var array_ordenado =new Array();
function pintarCircuito(indice, binder) { //binder --> aglutinante 
  	// Printing desired values.   	
	$( "#root" ).load( ruta+ "/tablero/partials/"+binder+"_"+indice+".html" );	
}

function init_matrix(columnas){
	for(var filas=0; filas<columnas; filas++) {
   		matrix[filas] = new Array(filas);
	}
	return matrix.length;
}

function print_matrix(){
	for (var i = 0; i < matrix.length; i++) {
		for (var j = 0; j < matrix.length; j++) { 
	        document.write(matrix[i][j] + "	&nbsp; 	&nbsp; 	&nbsp;");
	    }
	    document.write("<br>"); 
	}	
}

function create_matrix(size_matrix, step){
	var columna;
	var fila;
	var data;
	for (fila = 0; fila < size_matrix; fila++) {
		for (columna = 0; columna <size_matrix; columna++){ 
	      //for (columna = 0; columna <=fila; columna++){ 
	        if(fila==columna) {
	        	matrix[fila][columna] = 0;	        	
	        }else{
	        	if(fila<columna){
	        		indicei=indicei+1;//mi matriz inferior es igual a mi matriz superior
	        		//matrix[columna][fila] = indicei; //al mismo tiempo es simetrica
					data=(fila+step)+""+(columna+step);
	        		matrix[columna][fila] = data;	        		
	        		matrix[fila][columna] = data;
	        		//matrix[fila][columna] = indicei;//columna+""+fila
	        	}
	        	/*if(fila>columna)
	        		matrix[columna][fila] = matrix[columna][fila] ;
	        	else{
	        		indicei=indicei+1;
	        		matrix[columna][fila] = indicei;
	        		matrix[fila][columna] = indicei;
	        	}*/
	        }	        
	    }	    
	}
}

function update_matrix(size_matrix, items, pos_aterior){
	var columna;
	var fila;
	var data, copyNumItems;
	copyNumItems=items;
	var pre=pos_aterior, k, cfila;
	for (fila = 0; fila < size_matrix; fila++) {		
		copyNumItems=items;	
		cfila= fila;    
		for (columna = 0; columna <size_matrix; columna++){ 	       
	        if(fila==columna) {
	        	k=1;
	        	do{
	        		matrix[fila][columna] = matrix[fila][columna]+"0";
	        		k++;	        	
	        	}while(k<items);
	        }else{
	        	//if(fila<columna){//mi matriz inferior es igual a mi matriz superior
	        		indicei=indicei+1;//al mismo tiempo es simetrica	        		        		
	        		data= pre+0;	  
	        		if(cfila==data)      		
	        			cfila = cfila+1;
	        		
	        		data= data+""+(cfila+1)+""+copyNumItems;
	        		matrix[columna][fila] = data;	        		
		        	//matrix[fila][columna] = data;	        			        				        	
	        	//}	        	
	        	copyNumItems++; 
	        }	    
			
	    }	

	}
}

function isPar(numero) {
  if(numero % 2 == 0) 
    return true;
}
var  tam=frutas.length;
//var  tam=6;
size_matrix=init_matrix(tam);
create_matrix(size_matrix,0);
//print_matrix();
console.log(matrix);

$(document).ready(function(){ 
	ruta = document.getElementById('path').getAttribute('data-src');	
	$("#container1").disableSelection();//es el menu
	$( "#sortable-10" ).sortable({
       receive : function (event, ui) { 
			$('.spinner').fadeIn(1).delay(0).fadeOut('slow');//$('.spinner').fadeOut(555); 								
			id = ui.item.attr("id");         			
			let position = frutas.indexOf(id);// (pos) es la posición para saber que dispositivo es//console.log(pos); 			
			let position_restante = newfrutas.indexOf(id);
			array_ordenado.push(position);
			//console.log(id);
			//console.log(frutas);
			//console.log(position);			
			if(position==0)	{
				stack.push(position);  // stack 
				array_ordenado.pop();//elimino el primer elemento (controlador)
				main_system_flag=true;
			}
			array_ordenado.sort();
			console.log("sorted:"+array_ordenado);
			let pos_aterior = stack.pop(); // stack is now 			
			//console.log("fila:"+ pos_aterior);			
			if(main_system_flag==true){
				$(ui.item).hide();	
				let index_sitio= matrix[pos_aterior][position];				
				if(deposited>=3)
				{					
					folder="grupos"+counter+"/grupo";//console.log(folder);	  																						
					//console.log("counter:"+counter);															
					//console.log("pos_aterior:"+pos_aterior);
					/*matrix = [];					
					size_matrix=init_matrix(newfrutas.length+1);
					create_matrix(size_matrix,1);	
					update_matrix(size_matrix, deposited, first_pos);
					console.log(matrix);*/
					pos_aterior=0;
					//deposited=0;
					index_sitio="";
					//console.log(array_ordenado.length);
					for (var i=0;i<array_ordenado.length;i++){
						index_sitio = index_sitio+""+array_ordenado[i];
					}					
					console.log("index_sitio:"+index_sitio);
					if(deposited>3){
						$("#root").attr("width","12.4308in");
						$("#root").attr("viewBox","-2330.7654 -2029.2294 12630.7751 7549.4008");
					}
				}

				pintarCircuito(index_sitio,folder);	//console.log("columna:"+ position);
				//console.log("M["+pos_aterior+"]["+position_restante+"]="+matrix[pos_aterior][position]);								
				counter++;
				deposited++;
				if(counter>2){
					last_post_anterior = matrix[pos_aterior][position_restante];
					first_pos=parseInt(last_post_anterior.toString()[0]);
					//console.log("first_pos position:"+first_pos);
					//console.log("ultima position:"+last_post_anterior);					
				}
				stack.push(position);  // stack 							  				  	
			  	newfrutas.splice(position_restante, 1);//elimino los elementos usados			
			  	//console.log(newfrutas);
			  	console.log("_________");	 
			}
       },
       over: function (event, ui) {           		
          $( "#container2" ).removeClass( "overlay-closed" );
       }
    });
	$(".waiters").sortable({
		connectWith: "#sortable-10",		
		cursor: "move",				
		beforeStop: function (event, ui) {				
			id = ui.item.attr("id");        
			let position = frutas.indexOf(id);			
			if(position==0)	{
				element_main=true;
				//newfrutas.splice(position, 1);//elimino el elemento usado
			}
			if(!element_main){
				$( this ).sortable( "cancel" );
				$('.spinner').fadeOut(1);
				$.alert({
				    title: 'Alerta!',
				    type: 'blue',
				    theme: 'bootstrap', // 'material', 'bootstrap'
				    animationBounce: 2.5, // default is 1.2 whereas 1 is no bounce.
				    animation: 'rotate',
    				closeAnimation: 'zoom',
				    content: 'No se puede insertar un elemento hasta colocar un controlador.',
				    buttons: {
				        tryAgain: {
				            text: 'Prueba de nuevo',
				            btnClass: 'btn-blue',
				            action: function(){
				            }
				            }
				        },
					});						
				//no se uede insertar otro elemento hasta que se ponga el arduino				
			}
       },     
	});	

	//reactivamos el drop para cuando se desea mover elemento al area de trabajo
	$(document).on("mousedown","#container1", function (e) {
		$("#container3").droppable({disabled: false});
	}).on('mouseup mouseleave', function() { 
		//no hacer nada
	});

	//desactivamos el drop para cuando se desea mover la protoboard
	$('#container3').on('dragstart', function(event) { 
		$("#container3").droppable({disabled: true});
	});

	$("#container3").droppable({
		drop: function(event, ui) { //cuando se suelta en el area de trabajo				
			//$('.spinner').show(); 
			$( "#container2" ).addClass( "overlay-closed" );//quito la capa semitransparente											
		},over: function(event, ui) { //colocar sobre el area de trabajo
			//if ($(ui.draggable).attr("id") !== 'root')
			$( "#container2" ).removeClass( "overlay-closed" );	//$("#container2" ).css('background', 'grey');			
		},out: function(event, ui){ 			
			$( "#container2" ).addClass( "overlay-closed" );						
		},
	});


});

//$( "#root" ).load( ruta+ "/tablero/partials/grupos.html" );
			/*$.ajax({
			url: ruta + "/tablero/partials/grupos_"+pos+".html" ,
			async: false,   // asynchronous request? (synchronous requests are discouraged...)
			cache: false,   // with this, you can force the browser to not make cache of the retrieved data
			dataType: "text",  // jQuery will infer this, but you can set explicitly
			success: function( data, textStatus, jqXHR ) {
				var resourceContent = data; // can be a global variabl  e too...
				document.getElementById('root').innerHTML = resourceContent;// process the content...            		
			}
		});*/

/*
$(document).ajaxStop(function(){ 
       $('.spinner').fadeOut(555);
 });
 */