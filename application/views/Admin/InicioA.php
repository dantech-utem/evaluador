<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body rounded-0">
                        <h1 class="d-flex justify-content-center">DashBoard</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <canvas id="examPieChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nombre del Examen</th>
                                                <th>Cantidad de Alumnos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Examen 1</td>
                                                <td>50</td>
                                            </tr>
                                            <!-- ... Otras filas ... -->
                                            <tr>
                                                <td>Examen 6</td>
                                                <td>55</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Examenes Creados</th>
                                                <th>Cantidad de Examenes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Examenes</td>
                                                <td>4</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    var ctx2 = document.getElementById('examPieChart').getContext('2d');
    var myPieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Examen 1', 'Examen 2', 'Examen 3', 'Examen 4', 'Examen 5', 'Examen 6'],
            datasets: [{
                data: [50, 40, 35, 60, 75, 55],
                backgroundColor: ['rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)', 'rgba(255, 205, 86, 0.7)', 'rgba(75, 192, 192, 0.7)', 'rgba(153, 102, 255, 0.7)', 'rgba(255, 159, 64, 0.7)'],
                borderColor: ['#fff'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'right'
                }
            }
        }
    });
</script>

