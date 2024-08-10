<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
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
