<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Budget */
?>
<div class="budget-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Year',
            'subcategory',
            'Jan',
            'Feb',
            'March',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'December',
        ],
    ]) ?>

</div>
