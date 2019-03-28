$(document).ready(function()
{
  var ctx = document.getElementById('myChart').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['04-2019', '06-2019', '08-2019'],
        datasets: [{
            label: 'Gemiddelde cijfer alle klassen',
            backgroundColor: '#A2E147',
            borderColor: '#A2E147',
            data: [0, 10, 5]
        }]
    },

     options: {
       
     }
  });
})
