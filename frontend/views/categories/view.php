<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Categories */
?>
<div class="categories-view">
 
    <?= DetailView::widget([
        // 'model' => $model,
        'attributes' => [
            'id',
            'subcategory',
            'category',
            'categorytype',
        ],
    ]) ?>

</div>
