<div class="mb-4">
    <h4 class="my-4 text-center">What's trending</h4>
    <hr />
    
    <?php
    // Dummy trending blog data
    $trendingBlogs = [
        [
            'title' => 'The Ultimate Guide to Web Development',
            'description' => 'Learn about the key concepts and technologies in web development.',
            'image_url' => 'images/image2.jpg'
        ],
        [
            'title' => 'Mastering CSS Flexbox and Grid Layouts',
            'description' => 'Discover how to create responsive layouts using CSS Flexbox and Grid.',
            'image_url' => 'images/image3.jpg'
        ],
        [
            'title' => 'JavaScript Frameworks Comparison: React vs. Vue vs. Angular',
            'description' => 'Explore the pros and cons of popular JavaScript frameworks.',
            'image_url' => 'images/image3.png'
        ]
    ];

    foreach ($trendingBlogs as $blog) {
        echo '<h6 class="mb-1">' . $blog['title'] . '</h6>';
        echo '<img src="' . $blog['image_url'] . '" alt="' . '" style="width: 100%; height: 70px;">';
        echo '<a href="'  . '" class="mt-2 btn btn-sm btn-primary">Read More</a>';
        
        echo '<hr/>';
    }
    ?>
</div>


<hr/>
<h4 class="jumbotron">Courses Offered</h4>
    <ul class="list-group">
        <li class="list-group-item">
            <i class="fas fa-money-bill me-2 text-primary"></i>
            Frontend
        </li>
        <li class="list-group-item">
            <i class="fas fa-puzzle-piece me-2 text-primary"></i>
            Backend
        </li>
        <li class="list-group-item">
            <i class="fas fa-cubes me-2 text-primary"></i>
            Full-stack
        </li>
        <li class="list-group-item">
            <i class="fas fa-cogs me-2 text-primary"></i>
            CI/CD Integration
        </li>
    </ul>

    