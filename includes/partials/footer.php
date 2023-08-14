<footer class="bg-dark text-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>About Us</h4>
                        <p>We are SofTech Ug, a leading web development training institute. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <p>Email: info@softechug.com</p>
                        <p>Phone: +123 456 789</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Follow Us</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark text-center border-top py-2">
                <p style="font-size: 14px; margin-bottom: 0;">&copy; 2024 SofTech Ug. All rights reserved.</p>
                <canvas id="timeCanvas" width="600" height="70"></canvas>
            </div>
        </footer>

        <script>
            // Get the canvas element and its 2D rendering context
            const canvas = document.getElementById("timeCanvas");
            const ctx = canvas.getContext("2d");

            // Check if start time is already stored in local storage
            // If not, use the current time as the start time
            const startTime = localStorage.getItem("startTime") || Date.now();

            // Function to update and draw the elapsed time on the canvas
            function updateElapsedTime() {
                // Get the current time
                const currentTime = Date.now();

                // Calculate the elapsed time in seconds
                const elapsedTime = Math.floor((currentTime - startTime) / 1000);

                // Calculate hours, minutes, and seconds from the elapsed time
                const hours = Math.floor(elapsedTime / 3600);
                const minutes = Math.floor((elapsedTime % 3600) / 60);
                const seconds = elapsedTime % 60;

                // Clear the canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Set the background color to black
                ctx.fillStyle = "black";
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                // Set the font color to white and size
                ctx.fillStyle = "white";
                ctx.font = "20px Arial";

                // Draw the elapsed time text on the canvas
                ctx.fillText(`Time you have spent on this website:\n${hours}:${minutes}:${seconds}`, 10, 30);

                // Store the updated start time in local storage
                localStorage.setItem("startTime", startTime);
            }

            // Add event listener to clear startTime when the window is closed
            window.addEventListener("beforeunload", function () {
                localStorage.removeItem("startTime");
            });

            // Update the elapsed time every second
            setInterval(updateElapsedTime, 1000);
        </script>

