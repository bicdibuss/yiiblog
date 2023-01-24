<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Coment $model */
/** @var ActiveForm $form */
?>
<div class="comment">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'post_id') ?>
        <?= $form->field($model, 'txt') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- comment -->
