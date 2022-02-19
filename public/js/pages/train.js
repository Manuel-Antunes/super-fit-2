const trainsChart = {
    data: {
        labels: [
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro",
        ],
        datasets: [
            {
                type: "bar",
                label: "Treinos por data inicial",
                data: trainsByStartDate,
                backgroundColor: "#541234",
                borderColor: "#191920",
                borderWidth: 1,
            },
            {
                type: "bar",
                label: "Treinos por data final",
                data: trainsByEndDate,
                backgroundColor: "#7159c1",
                borderColor: "#191920",
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
};

/**
 * @type import('chart.js').Chart
 */
new Chart(document.getElementById("trains-relation"), trainsChart);
