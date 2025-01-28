<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
?>
<div class="test-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
        ],
    ]) ?>

</div>
