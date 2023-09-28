/* グローバル Chart:false, feather:false */

(() => {
    'use strict'
  
    feather.replace({ 'aria-hidden': 'true' })
  
    // グラフ
    const ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          '日曜日',
          '月曜日',
          '火曜日',
          '水曜日',
          '木曜日',
          '金曜日',
          '土曜日'
        ],
        datasets: [{
          data: [
            15339,
            21345,
            18483,
            24003,
            23489,
            24092,
            12034
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false
        }
      }
    })
  })()
  