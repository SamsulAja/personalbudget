<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Budget */
/* @var $form yii\widgets\ActiveForm */
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

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
