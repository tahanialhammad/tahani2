<template>
  <div>
    <canvas id="myChart"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js/auto';

export default {
  name: 'ChartComponent',
  props: ['chartdata'],
  data() {
    return {
      months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    }
  },
  mounted() {
    this.renderChart();
  },
  methods: {
    renderChart() {
      const ctx = document.getElementById('myChart').getContext('2d');
      let gradient = ctx.createLinearGradient(0, 0, 0, 400);

      gradient.addColorStop(0, 'rgba(29, 220,191, 0.2)');
      gradient.addColorStop(1, 'rgba(255, 255,255, 0)');

      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: this.months,
          datasets: [{
            label: 'Customers',
            data: this.chartdata,
            backgroundColor: gradient,
            fill: true,
            borderWidth: 2,
            borderColor: '#1ddcbf',
            pointBackgroundColor: '#1ddcbf',
            pointBorderColor: 'white',
            pointBorderWidth: 2,
            pointStyle: 'circle',
            pointRadius: 4,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.4
            }
          },
          scales: {
            yAxes: [
              {
                ticks: {
                  fontColor: "#b2b7be",
                  fontFamily: "montserrat",
                  fontStyle: "bold",
                  align: 'start',
                  padding: 15
                },
                gridLines: {
                  display: true,
                  drawBorder: false,
                  color: "#eaebed"
                }
              }
            ],
            xAxes: [
              {
                ticks: {
                  fontColor: "#333840",
                  fontFamily: "montserrat",
                  //fontSize: 18,
                  fontStyle: "bold",
                  padding: 15
                },
                gridLines: {
                  display: false,
                  // color: "#333840"
                }
              }
            ],
          },
          legend: {
            display: false,
            // labels: {
            //   fontColor: "red",
            //   fontSize: 16,
            // }
          },
          tooltips: {
            titleFontFamily: 'Montserrat',
            backgroundColor: '#333840',
            bodyFontColor: 'white',
            bodyFontFamily: 'Montserrat',
            caretSize: 10,
            cornerRadius: 10,
            xPadding: 20,
            yPadding: 20,
            usePointStyle: true,
          },
        },
      });
    }
  }
};
</script>
