<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistiek</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script> 
</head>
<body>
    <div>
        @include("templates.header")
    </div>
    <div class="statistiek_hero"> 
         <canvas id="myChart" style="width:100%;max-width:700px"></canvas> 
    </div>

    <div>
            @include("templates.footer")    
    </div>
    <script>
        var xValues = ["Ja", "Nee"];
        var yValues = [15,17];
        var barColors = ["blue","red"];

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            title: {
                display: true,
                text: "Ananas op je pizza?"
            },
            legend: {
                display: false
            }
        }
        
        });
</script>

</body>
</html>
