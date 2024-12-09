<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create New Article - TechBlog</title>
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
            <h2>Create Article</h2>
            <form id="articleForm" action="save_article.php" method="POST">
                <div class="form-group">
                    <label for="title">Article Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author Name:</label>
                    <input type="text" id="author" name="author" required>
                </div>
                <div class="form-group">
                    <label for="content">Article Content:</label>
                    <textarea id="content" name="content" rows="10" required></textarea>
                </div>
                <div class="button">
                    <button type="submit">Publish Article</button>
                </div>
            </form>
        </main>
        <footer>
            <p>&copy; 2024 TechBlog. All rights reserved.</p>
        </footer>
    </div>
    <script src="validation.js"></script>
</body>

</html>