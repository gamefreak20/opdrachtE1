$(document).ready(function()
{
  var ctx = document.getElementById('myChart').getContext('2d');
  gradient = ctx.createLinearGradient(0, 0, 0, 400);
  gradient.addColorStop(0, '#E8F8CF');
  gradient.addColorStop(1, '#A5E247');
  var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['04-2019', '06-2019', '08-2019'],
        datasets: [{
            data: [0, 10, 5],
            backgroundColor : gradient,
            borderColor: "#A5E247",
            pointColor: "#A5E247",
            borderWidth: 2,
            label: 'Gemiddelde cijfer alle klassen'
        }]
    },
     options: {

     }
  });
})
