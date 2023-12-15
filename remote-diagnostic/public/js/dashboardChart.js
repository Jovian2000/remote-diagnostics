const data = {
    labels: ['Route 1', 'Route 2', 'Route 3', 'Route 4', 'Route 5', 'Route 6', 'Route 7'],
    datasets: [
        {
            label: 'CO2 uitstoot',
            data: [45, 23, 42, 36, 21, 53, 27],
            backgroundColor: '#E57D15',
            yAxisID: 'CO2',
        },
        {
            label: 'NOx uitstoot',
            data: [132, 64, 124, 98, 59, 163, 79],
            backgroundColor: '#2C67CE',
            yAxisID: 'NOx',
        }
    ]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        scales: {
            CO2: {
                type: 'linear',
                position: 'left',
                min: 0,
                max: 200,
                title: {
                    display: true,
                    text: 'CO2 uitstoot (g/km)',
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                },
                ticks: {
                    stepSize: 50
                }
            },
            NOx: {
                type: 'linear',
                position: 'right',
                min: 0,
                max: 200,
                title: {
                    display: true,
                    text: 'NOx uitstoot (g/km)',
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                },
                ticks: {
                    stepSize: 50
                }
            }
        }
    }
};

var myChart = new Chart(
    document.getElementById('floatingBarChart'),
    config
);