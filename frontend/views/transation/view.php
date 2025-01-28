<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Transaction */
?>
<div class="transaction-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Account',
            'Date',
            'Description:ntext',
            'Debit',
            'Kredit',
            'subcategory',
        ],
    ]) ?>

</div>
