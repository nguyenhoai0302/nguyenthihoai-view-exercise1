// Tạo biểu đồ
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar', // Kiểu biểu đồ cột
  data: {
    labels: ['01 Jan', '03 Jan', '05 Jan', '07 Jan', '09 Jan', '11 Jan'],
    datasets: [{
      label: 'Monthly',
      data: [430, 500, 420, 670, 230, 420, 200, 380, 780, 380, 300, 180],
      backgroundColor: 'rgba(166, 109, 212, 0.85)', // Màu cột
      borderColor: 'rgba(247, 250, 255, .7)', // Màu viền
      borderWidth: 1
    }, {
      label: 'Last Year',
      data: [360, 680, 300, 700, 230, 420, 200, 380, 780, 380, 300, 180],
      backgroundColor: 'rgba(255, 99, 132, 1)', // Màu cột
      borderColor: 'rgba(255, 99, 132, 1)', // Màu viền
      borderWidth: 5,
      type: 'line' // Kiểu biểu đồ đường
    }]
  },
  options: {
    scales: {
      y: {
        ticks: {
          stepSize: 200 // Bước nhảy là 200
        }
      }
    }
  }

});

/* chart.js chart examples */

var ctx1 = document.getElementById("pieChart1");
var pieChart1 = new Chart(ctx1, {
    type: 'doughnut', // or 'pie'
    options: {
        cutoutPercentage: 75,
        legend: {
            position: 'left',
            labels: {
                boxWidth: 10,
                fontStyle: 'italic',
                fontColor: '#aaa',
                usePointStyle: true,
            }
        },

    },
    data: {
        labels: [
            "First",
            "Second",
            "Third",
            "Fourth"
        ],
        datasets: [
            {
                data: [250, 100, 100, 200],
                borderWidth: 0,
                backgroundColor: [
                    '#e63a54',
                    '#d8f4ff',
                    "#110f48",
                    "#f8f8fa"
                ],
                hoverBackgroundColor: [
                    '#e63a54',
                    '#d8f4ff',
                    "#110f48",
                    "#f8f8fa"
                ]
            }]
    }
});

