<?php
$stats  = $args['stats'] ?? [];
$type  = $args['type'] ?? 1;
?>

<div id="key-stats" class="grid max-w-screen-xl grid-cols-1 gap-8 mx-auto sm:grid-cols-2 xl:grid-cols-4">
    <?php foreach($stats as $stat): ?>
    <?php 

    // echo '<pre>';
    // var_dump($stat);
    // echo '</pre>';

    ?>
    <div class="p-10 bg-white rounded-lg">
        <p class="font-serif text-brand <?= $type == "2" ? "text-3xl" : "text-5xl lg:text-6xl" ?>">
            <?= $stat["number"]; ?>
        </p>
        <p class="mt-2"><?= $stat["text"]; ?></p>
    </div><?php endforeach; ?>
</div>