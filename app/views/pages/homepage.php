<?php require RUTA_APP . '/views/includes/header.php' ?>

<h1><?php echo $data['title']; ?></h1>
<h1><?php echo RUTA_APP; ?></h1>
<ul>
    <?php foreach($data['articles'] as $articles) :?>
        <li><?php  echo $articles->title; ?></li>
    <?php endforeach; ?>
</ul>
<?php require RUTA_APP . '/views/includes/footer.php' ?>
