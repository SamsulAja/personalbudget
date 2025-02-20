<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Year',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'subcategory',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Jan',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Feb',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'March',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Apr',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'May',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Jun',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Jul',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Aug',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Sep',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Oct',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Nov',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'December',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'Lihat','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Hapus', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Anda Yakin?',
                          'data-confirm-message'=>'Apakah Anda yakin akan menghapus data ini?'], 
    ],

];   