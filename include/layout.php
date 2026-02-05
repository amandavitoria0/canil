<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetDevShop - O petshop do dev</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <?php  include "header.php"?>

<nav>
    <ul>
        <li class="<?= $active['main']?>"><a href="/site/">Todos</a>
        <li class="<?= $active=['cachorros']?>"><a href="/site/cachorros">Cachorros</a>
        <li class="<?= $active['gatos']?>"><a href="/site/gatos">Gatos</a>
        <li class="<?= $active['peixes']?>"><a href="/site/peixes">Peixes</a> 
        <li class="<?= $active['calopsita']?>"><a href="/site/calopsita">calopsita</a> 
        <li class="<?= $active['papagaio']?>"><a href="/site/papagaio">papagaio</a> 
        <li class="<?= $active['canario']?>"><a href="/site/canario">canario</a> 
        <li class="<?= $active['raposa']?>"><a href="/site/raposa">raposa</a> 
        <li class="<?= $active['coelho']?>"><a href="/site/coelho">coelho</a> 
        <li class="<?= $active['rato']?>"><a href="/site/rato">rato</a> 
        <li class="<?= $active['passaros']?>"><a href="/site/passaros">passaros</a> 
    </ul>
</nav>
<?php if($_SERVER['REQUEST_URL']) ?>
<section class="banner" style="background-image: url('<?= $banner?>')"><?= $title ?></section>
<h2> <?= $title ?> disponíveis para adoção</h2>
<?php endif; ?>

<div class="container list">
    <?php  foreach($content as $animal):?>
    <div class="item">
        <img src="<?=  $animal['image']?> "class="item--image" />
        <div class="item--name"><?=  $animal['name']?></div>
        <div class="item--color"><?=  $animal['color']?></div>
        <div class="item--genre"><?=  $animal['genre']?></div>
    </div>
        <?php endforeach; ?>
</div>
<?php  include "footer.php"?>
</body>
</html>

