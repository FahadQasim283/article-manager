<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Article - TechBlog</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>TechBlog</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="create_article.php">Write New Article</a>
            </nav>
        </header>
        <main>
            <?php
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $articlesFile = 'articles.json';
                if (file_exists($articlesFile)) {
                    $articlesJson = file_get_contents($articlesFile);
                    $articles = json_decode($articlesJson, true);
                    $id = intval($_GET['id']);
                    if (isset($articles[$id])) {
                        $article = $articles[$id];
                        echo "<article>";
                        echo "<h2>" . $article['title'] . "</h2>";
                        echo "<div class='article-meta'>";
                        echo "<span>By " . $article['author'] . "</span>";
                        echo "<span>" . $article['date'] . "</span>";
                        echo "</div>";
                        echo "<div class='article-content'>" . ($article['content']) . "</div>";
                        echo "</article>";
                    } else {
                        echo "<p>Article not found.</p>";
                    }
                } else {
                    echo "<p>No articles available.</p>";
                }
            } else {
                echo "<p>Invalid article ID.</p>";
            }
            ?>
        </main>
        <footer>
            <p>&copy; 2024 TechBlog. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>