<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    // Retrieve data from the PHP-generated table
    const courseData = <?php echo json_encode($courseData); ?>;

    // Extract course names and registered student counts
    const courseNames = Object.keys(courseData);
    const studentCounts = Object.values(courseData);

    // Get the canvas element
    const canvas = document.getElementById("courseChart");
    const ctx = canvas.getContext("2d");

    // Create a new chart
    const courseChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: courseNames,
            datasets: [{
                label: 'Number of Students',
                data: studentCounts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
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
