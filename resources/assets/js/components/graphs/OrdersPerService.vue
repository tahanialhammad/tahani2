<template>
  <div>
    <canvas id="orderPerServiceChart"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js/auto';

export default {
  name: 'ChartComponent',
  props: ['chartdata'],
  data() {
    return {
      months: ["Vuejs", "React", "Laravel", "WordPress"]
    }
  },
  mounted() {
    this.renderChart();
  },
  methods: { 
    renderChart() {
      const ctx = document.getElementById('orderPerServiceChart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: this.months,
          datasets: [{
            label: 'Customers',
            data: this.chartdata,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          // https://www.chartjs.org/docs/latest/configuration/legend.html
          plugins:{
            legend:{
              labels:{
                usePointStyle : true,
                pointStyle: "circle"
              }
            }
          },
          // scales: {
          //   y: {
          //     beginAtZero: true
          //   }
          // }
        }
      });
    }
  }
};
</script>
