<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Transaction $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'Account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Debit')->textInput() ?>

    <?= $form->field($model, 'Kredit')->textInput() ?>

    <?= $form->field($model, 'subcategory')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
