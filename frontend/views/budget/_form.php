<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Budget $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="budget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'subcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jan')->textInput() ?>

    <?= $form->field($model, 'Feb')->textInput() ?>

    <?= $form->field($model, 'March')->textInput() ?>

    <?= $form->field($model, 'Apr')->textInput() ?>

    <?= $form->field($model, 'May')->textInput() ?>

    <?= $form->field($model, 'Jun')->textInput() ?>

    <?= $form->field($model, 'Jul')->textInput() ?>

    <?= $form->field($model, 'Aug')->textInput() ?>

    <?= $form->field($model, 'Sep')->textInput() ?>

    <?= $form->field($model, 'Oct')->textInput() ?>

    <?= $form->field($model, 'Nov')->textInput() ?>

    <?= $form->field($model, 'December')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
