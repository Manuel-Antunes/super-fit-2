const labels = ["Masculino", "Feminino", "Outro"];

// item: ChartItem, config: ChartConfiguration<TType, TData, TLabel>

/**
 * @type import('chart.js').ChartData
 */
const data = {
    labels: labels,
    datasets: [
        {
            label: "Relação de gênero",
            backgroundColor: [
                "rgb(255, 99, 132)",
                "rgb(54, 162, 235)",
                "rgb(255, 205, 86)",
            ],
            data: [10, 10, 2],
            hoverOffset: 4,
        },
    ],
};

/**
 * @type import('chart.js').ChartConfiguration
 */
const config = {
    type: "pie",
    data: data,
    options: {
        responsive: true,
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
                { data: "birthDate" },
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
const myChart = new Chart(document.getElementById("users-chart"), config);

$(function () {
    usersDataTable.init({}, "#user-table");
});
