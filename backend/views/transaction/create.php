<?php

use yii\bootstrap5\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Transaction */

?>
<div class="transaction-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
