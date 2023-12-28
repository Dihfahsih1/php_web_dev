<div class="jumbotron text-center custom-jumbotron">
    <h2>Clients' feedback</h2>
    <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Sample student feedback data (you can replace this with actual data from a database)
            $feedbackData = array(
                array(
                    "quote" => "Great experience! I learned a lot about
                    web development and found a job shortly after the training.",
                    "author" => "John Doe, Frontend Developer"
                ),
                array(
                    "quote" => "The training was intensive and well-structured.
                     I'm now confident in my full-stack development skills.",
                    "author" => "Jane Smith, Full-stack Developer"
                ),
                array(
                    "quote" => "SOFTECH Uganda provides the best web development
                    training in the region. Highly recommended!",
                    "author" => "Mike Johnson, Web Developer"
                )
                // Add more feedback data as needed
            );

            // Loop through the feedback data and create carousel items
            $firstItem = true;
            foreach ($feedbackData as $feedback) {
                $activeClass = $firstItem ? "active" : "";
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<div class="jumbotron text-center bg-dark py-5">';
                echo '<blockquote class="blockquote">';
                echo '<p class="mb-0">' . $feedback["quote"] . '</p>';
                echo '<hr />';
                echo '<footer class="blockquote-footer">' . $feedback["author"] . '</footer>';
                
                echo '</blockquote>';
                echo '</div>';
                echo '</div>';
                $firstItem = false;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

</div>