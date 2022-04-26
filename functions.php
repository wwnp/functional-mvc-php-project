<?php 
function getArticles():array {
  return json_decode(file_get_contents('db/articles.json'), true);
}
function addArticle(string $title, string $content): bool {
  $articles = getArticles();
  $lastId = end($articles)['id'] ?? -1;
  $newId = $lastId + 1;
  $articles[$newId] = [
    'id'=> $newId,
    'title'=> $title,
    'content'=> $content,
  ];
  saveArticles($articles);
  return true;
}
function saveArticles(array $articles): bool {
  file_put_contents('db/articles.json', json_encode($articles));
  return true;
}
function deletePost(int $id): bool {
  $articles = getArticles();
  $articles = array_filter($articles, function($article) use ($id){
    return $article['id'] !== $id;
  });
  saveArticles($articles);
  return true;
}