<?php

/** @var yii\web\View $this */

/** @var yii\data\ActiveDataProvider $dataProvider */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

<?php $this->beginBlock('navbar') ?>
<?= \yii\bootstrap5\Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Edit post', 'url' => ['/site/index']],
    ]
]); ?>
<?php $this->endBlock() ?>


<div class="site-index">

    <div class="container">
        <div class="row">
            <div style="border: 1px solid #777777;" class="col-3">
                <p>menu</p>
                <nav>
                    <ul style="list-style-type: none;">

                        <?php foreach ($cats as $item): ?>
                            <li><a class="btn btn-primary" href="/cat/<?= $item->url ?>"><?= $item->title ?></a></li>

                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <h1 class="text-center">
                    <?= Html::encode($data->title); ?>
                </h1>
                <?php if ($data->img) {
                    echo '<img style="max-width:200px;" src="../' . $data->img . '">';
                }
                ?>
                <?= $data->txt ?>


            </div>
        </div>

        <div class="row">

            <h3 class="text-center">Comment</h3>
            <div class="comment">

                <?php $form = ActiveForm::begin(); ?>
                <span style="display:none;">
        <?= $form->field($model, 'post_id')->textinput(['value'=>$data->id]) ?>
        </span>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'txt') ?>


                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
            <div class="row">
                <?php if($coms){
                    foreach($coms as $com){
                    echo'<div style="padding: 0px;margin:0px;" class="row">';
                        echo'<div style="border:1px solid#ffe8a1;" class="col-2">User:'.$com->name.'</div>';
                        echo'<div style="border:1px solid #777777;" class="col-8">'.$com->txt.'</div>';
                        echo'</div>';
                        echo'</div>';
                    }

                }
                ?>

        </div>
