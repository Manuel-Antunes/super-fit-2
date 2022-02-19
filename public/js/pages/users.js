/**
 * @type import('chart.js').ChartConfiguration
 */
const userChartConfig = {
    type: "pie",
    data: {
        labels: ["Masculino", "Feminino", "Outro"],
        datasets: [
            {
                label: "Relação de gênero",
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                ],
                data: [malesCount, femalesCount, othersCount],
                hoverOffset: 4,
            },
        ],
    },
    options: {
        responsive: true,
    },
};

/**
 * @type import('chart.js').ChartConfiguration
 */
const annivesaryChartConfig = {
    type: "bar",
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
                label: "Aniversarios do ano",
                data: monthAnniversariants,
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

const usersDataTable = (function () {
    const usersTable = function (data, id) {
        // begin first table
        const url = "/api/users/datatable";
        console.log(id);
        console.log($(id));
        $(id).DataTable({
            responsive: true,
            order: [0, "asc"],
            processing: true,
            serverSide: true,
            ajax: {
                url: url,
                type: "GET",
                data,
            },
            columns: [
                { data: "name" },
                { data: "gender" },
                { data: "birth_date" },
                { data: "id" },
                { data: "id" },
            ],
            columnDefs: [
                {
                    targets: 3,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return `<a class="btn btn-primary font-weight-bolder" href="/editor/analysis/edit/${data}"><i class="far fa-edit"></i> Editar</a>`;
                    },
                },
                {
                    targets: 4,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return `
              <form action="/editor/analysis/${data}?_method=DELETE" method="POST">
              <button type="submit" class="btn btn-danger font-weight-bolder"><i class="fas fa-trash-alt"></i> Deletar</button>
              </form>
              `;
                    },
                },
            ],
        });
    };

    return {
        // main function to initiate the module
        init: function (data, id) {
            usersTable(data, id);
        },
    };
})();

/**
 * @type import('chart.js').Chart
 */
new Chart(document.getElementById("users-chart"), userChartConfig);
/**
 * @type import('chart.js').Chart
 */
new Chart(
    document.getElementById("users-anniversary-chart"),
    annivesaryChartConfig
);

$(function () {
    usersDataTable.init({}, "#user-table");
});
