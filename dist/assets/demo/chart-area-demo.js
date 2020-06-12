// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Giu 1", "Giu 2", "Giu 3", "Giu 4", "Giu 5", "Giu 6", "Giu 7", "Giu 8", "Giu 9", "Giu 10", "Giu 11", "Giu 12", "Giu 13"],
    datasets: [{
      label: "Temperatura",
      lineTension: 0.3,
      backgroundColor: "rgba(0,255,0,0.4)",
      borderColor: "rgba(45,175,0,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(45,175,0,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,200,25,1)",
      pointHitRadius: 25,
      pointBorderWidth: 2,
      data: [20, 21, 18, 19, 21, 18, 21, 18, 22, 21, 20, 19, 21],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 50,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
