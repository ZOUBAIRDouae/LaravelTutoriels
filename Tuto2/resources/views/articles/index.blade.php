<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <ul>
        @foreach($articles as $article)
            <li>ID: {{$article['id']}} </li>
            <li>Title : {{$article['title']}} </li>
            <li>Content :  {{$article['content']}} </li>
        @endforeach
    </ul>
</body>
</html>