<!-- 
    
    /* Ensure all carousel images have equal width and height */
.carousel-item img {
width: 100%;
height: 100%;
object-fit: cover; /* This ensures the image fills the container while maintaining aspect ratio */
}

/* Overlay styles */
.carousel-item .overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Change the alpha value to adjust the overlay opacity */
}

/* Content styles */
.carousel-content {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
color: #fff; /* Set the color of the content */
}
 -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/image3.png" alt="image1" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <!-- Add content on top of the carousel -->
            <div class="carousel-content">
                <h1 style="font-size:50px;">SOFTECH SOLUTIONS UGANDA</h1>
                <h4 style="font-size:30px;">Leading Web Development hub in Uganda</h4>
            </div>
        </div>
        
        <div class="carousel-item">
            <img src="images/image1.webp" alt="image2" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>We offer Backend Training</h2>
                <p>We have trained thousands of students in web development</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/image2.jpg" alt="image3" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Superb training in frontend</h2>
                <p style="text-align: center;">We offer training in HTML5, CSS, Bootstrap5 and Javascript Frameworks</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/image3.jpg" alt="image4" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>We offer DevOps</h2>
                <p>We have excellent trainings on hosting applications
                    <br>both online and locally using docker, kubernetes, git, CD/CI</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>