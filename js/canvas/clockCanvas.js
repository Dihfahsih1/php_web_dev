
        // Wait for the page to fully load
        window.onload = function () {
            // Get the canvas and its drawing context
            const canvas = document.getElementById("clockCanvas");
            const ctx = canvas.getContext("2d");

            // Function to draw the clock
            function drawClock() {
                // Clear the canvas to start fresh
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Get the current time
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const seconds = now.getSeconds();

                // Set background color and stroke color
                ctx.fillStyle = "black"; // Background color
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                ctx.strokeStyle = "white"; // Color for lines

                // Draw the clock circle
                ctx.beginPath();
                ctx.arc(100, 100, 80, 0, 2 * Math.PI); // Center (100, 100), Radius 80
                ctx.stroke(); // Draw the circle

                // Draw the seconds hand
                ctx.beginPath();
                ctx.moveTo(100, 100); // Start at the center
                // Calculate end point of seconds hand based on current seconds
                ctx.lineTo(
                    100 + 50 * Math.cos(((seconds - 15) / 60) * 2 * Math.PI),
                    100 + 50 * Math.sin(((seconds - 15) / 60) * 2 * Math.PI)
                );
                ctx.stroke(); // Draw the line

                // Set font color and draw the time
                ctx.fillStyle = "white"; // Font color
                ctx.font = "20px Arial"; // Font style and size
                ctx.fillText(`${hours}:${minutes}:${seconds}`, 65, 180); // Draw time text
            }

            // Call drawClock function every second
            setInterval(drawClock, 1000);
        };
