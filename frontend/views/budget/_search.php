<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BudgetSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="budget-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Year') ?>

    <?= $form->field($model, 'subcategory') ?>

    <?= $form->field($model, 'Jan') ?>

    <?= $form->field($model, 'Feb') ?>

    <?php // echo $form->field($model, 'March') ?>

    <?php // echo $form->field($model, 'Apr') ?>

    <?php // echo $form->field($model, 'May') ?>

    <?php // echo $form->field($model, 'Jun') ?>

    <?php // echo $form->field($model, 'Jul') ?>

    <?php // echo $form->field($model, 'Aug') ?>

    <?php // echo $form->field($model, 'Sep') ?>

    <?php // echo $form->field($model, 'Oct') ?>

    <?php // echo $form->field($model, 'Nov') ?>

    <?php // echo $form->field($model, 'December') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
