<?php
function saveArticle($title, $author, $content)
{
    $articlesFile = 'articles.json';
    $articles = file_exists($articlesFile) ? json_decode(file_get_contents($articlesFile), true) : [];

    $articles[] = [
        'title' => trim($title),
        'author' => trim($author),
        'content' => trim($content),
        'date' => date('Y-m-d H:i:s')
    ];
    file_put_contents($articlesFile, json_encode($articles, JSON_PRETTY_PRINT));
    return true;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $content = $_POST['content'] ?? '';
    if ($title && $author && $content) {
        saveArticle($title, $author, $content);
        header('Location: index.php');
        exit();
    } else {
        die("Error: All fields are required.");
    }
}
