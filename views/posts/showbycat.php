<?php

/** @var yii\web\View $this */

/** @var yii\data\ActiveDataProvider $dataProvider */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content">
        <ul class="row">
            <?php foreach ($data as $item): ?>
                <div style="border: 1px solid #777777;" class="col-12">
                    <h1 class="text-center">
                        <?= Html::encode($item->title); ?>
                    </h1>
                    <?php if ($item->img) {
                        echo '<img style="max-width:150px;" src="../' . $item->img . '"/>';
                    } ?>

                    <?= mb_substr($item->txt, 0, 180); ?>
                    <?
                    echo '...';
                    echo '<a class="btn btn-primary" href="../post/' . $item->url . '">Read more</a>';
                    ?>
                    <span >Category: <a href="../cat/<?= $item->cat ?>"><?= $item->cat ?></a></span>
                </div>
            <?php endforeach; ?>
        </ul>


    </div>

</div>
</div>
