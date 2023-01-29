<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Posts $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt')->textarea(['rows' => 6],['id' => 'myTextarea']) ?>

    <?= $form->field($model, 'img')->fileInput(['accept' => 'image/*']) ?>
    <?$session=Yii::$app->session?>
    <?= $form->field($model, 'user')->textInput(['value' =>$session['login']]) ?>

    <?= $form->field($model, 'cat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <span style="display:none">
    <?= $form->field($model, 'data')->textInput(['value'=>time()]) ?>
    </span>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
