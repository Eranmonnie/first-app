<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first page</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <h1>Posts</h1>
    <?php foreach ($posts as $post) :?>
    <article>
        
        <p><?= $post ?></p>
      
    </article>
    <?php endforeach; ?>
    
</body>
</html>