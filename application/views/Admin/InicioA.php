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
    </div>
    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-file-document"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Examenes</div>
                        </div>
                    </div>
                    <h4 class="mt-4">1,368</h4>
                    <div class="row">
                        <div class="col-5 align-self-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Usuarios</div>

                        </div>
                    </div>
                    <h4 class="mt-4">2,456</h4>
                    <div class="row">       
                        <div class="col-5 align-self-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Inbox</h4>

                    <ul class="inbox-wid list-unstyled">
                        <li class="inbox-list-item">
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 align-self-center">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Paul</h5>
                                        <p class="text-truncate mb-0">Hey! there I'm available</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="inbox-list-item">
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 align-self-center">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Mary</h5>
                                        <p class="text-truncate mb-0">This theme is awesome!</p>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="inbox-list-item">
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 align-self-center">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Cynthia</h5>
                                        <p class="text-truncate mb-0">Nice to meet you</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="inbox-list-item">
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 align-self-center">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Darren</h5>
                                        <p class="text-truncate mb-0">I've finished it! See you so</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
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

