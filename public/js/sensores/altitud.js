
function chartContextHum(ctx){


    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',
    
      // The data for our dataset
      data: {
      labels: [],
      datasets: [{
          label: "Altitud",
          borderColor: "black",
          borderDash: [5, 5], // Patrón de guiones y espacios
          borderWidth: 1,
          data: [],
        //  fill: false,
          pointStyle: 'triangle',
          pointBackgroundColor: 'black',
          backgroundColor: '#90caf9',
          pointRadius: 7,
          pointHoverRadius: 7,        
      }]
      },
      
     
  
      // Configuration options go here
          options: {
                responsive: true,
                scales: {
                    yAxes: [{   
                        gridLines: {
                            display: false, // Oculta las líneas de graduación en el eje Y
                        },                               
                        ticks: {
                           // stepSize: 5,
                            beginAtZero: true, 
                        }, 
                        scaleLabel: {
                            display: true,
                            labelString: 'Altura (metros)',
                        }
                    
                    }], 
                    xAxes: [{
                        gridLines: {
                            display: false, // Oculta las líneas de graduación en el eje Y
                        },
                        ticks: {
                           // stepSize:5,
                            beginAtZero: true, 
                        }, 
                        scaleLabel: {
                            display: true,
                            labelString: 'Tiempo(segundos) ',
                        }
                    }]    

                }
          }    
      });
      return  chart;
  }