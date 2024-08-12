<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- bootstrap.min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid header-container bg-blue p-0" id="header">
        <div class="container">
            <div class="header navigation-bar d-flex justify-content-between align-items-center">
                <div class="logo">Design<strong>Source</strong></div>
                <ul class="centered-nav d-flex align-items-center gap-lg-5 gap-md-4 gap-3 mb-0 ps-0 py-1 py-md-0 justify-content-md-center justify-content-around">
                    <li><a href="#" class="link">Home</a></li><span class="y-divider d-md-none d-block"></span>
                    <li><a href="#" class="link">Designs</a></li><span class="y-divider d-md-none d-block"></span>
                    <li><a href="blog.php" class="link">Blog</a></li><span class="y-divider d-md-none d-block"></span>
                    <li><a href="#" class="link">About</a></li>
                </ul>
                <a href="resume.php" class="btn btn-success rounded">Create CV</a>
            </div>
        </div>
    </div>

    <h1>Blog</h1>
    <div>
        <label for="category">Filter by Category:</label>
        <!-- <select id="category" onchange="filterPosts()">
            <option value="all">All</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
        </select> -->
        
        <div id="categories">
            <div class="category-bubble active-category" data-category="all">All</div>
            <div class="category-bubble" data-category="category1">Category 1</div>
            <div class="category-bubble" data-category="category2">Category 2</div>
            <div class="category-bubble" data-category="category3">Category 3</div>
            <div class="category-bubble" data-category="category4">Category 4</div>
        </div>

    </div>
    <div id="posts"></div>

    <?php
        $postFiles = array_values(array_diff(scandir('posts'), array('..', '.')));
        echo '<script>';
        echo 'const postFiles = ' . json_encode($postFiles) . ';';
        echo '</script>';
    ?>

    <script src="js/main.js"></script>
</body>
</html>
