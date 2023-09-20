function chartContextHum(ctx){
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
    labels: [],
    datasets: [{
        label: "Altitud (GY-80)",
        borderColor: "black",
        data: [],
        fill: false,
        pointStyle: 'circle',
        backgroundColor: '#cc6600',
        pointRadius: 7,
        pointHoverRadius: 7,        
    }]
    },
    // Configuration options go here
        options: {
              responsive: true,
              scales: {
                  yAxes: [{                                  
                       ticks: {
                          stepSize:5.5,
                      }

                  }]
              }
        }    
    });
    return  chart;
}
