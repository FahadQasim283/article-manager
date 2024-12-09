<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechBlog - Technology Articles</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Tech Blog</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="create_article.php">Write Article</a>
            </nav>
        </header>
        <main>
            <h2>Latest Technology Articles</h2>
            <?php
            $articlesFile = 'articles.json';
            if (file_exists($articlesFile)) {
                $articlesJson = file_get_contents($articlesFile);
                $articles = json_decode($articlesJson, true);
                if (!empty($articles)) {
                    echo "<div class='article-list'>";
                    foreach ($articles as $index => $article) {
                        echo "<div class='article-preview'>";
                        echo "<h3><a href='view_article.php?id={$index}'>" . htmlspecialchars($article['title']) . "</a></h3>";
                        echo "<p>By " . htmlspecialchars($article['author']) . "</p>";
                        echo "<p>" . htmlspecialchars($article['content']) . "</p>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No articles have been published yet.</p>";
                }
            } else {
                echo "<p>No articles have been published yet.</p>";
            }
            ?>
        </main>
        <footer>
            <p>TechBlog copy right &copy; All rights reserved.</p>
        </footer>
    </div>
</body>

</html>