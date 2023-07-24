document.getElementById("toggleButton").addEventListener("click", function() {
    var calificaciones = document.getElementById("calificaciones");
    calificaciones.classList.toggle("show");
});

        // Datos fijos para mostrar la cantidad de personas que han contestado cada examen
       

        // Configurar la gráfica
        var ctx = document.getElementById('examChart').getContext('2d');
        var examChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: examResults.labels,
                datasets: [{
                    label: 'Número de Personas',
                    data: examResults.data,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
