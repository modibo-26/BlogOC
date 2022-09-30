<h2>Voici mes posts</h2>

<?php


foreach ($posts as $post) {
    echo $post['titre'] . '<br>';
    echo $post['contenu'] . '<br>';;
    echo $post['created_at'];
}