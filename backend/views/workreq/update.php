<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workreq */

$this->title = Yii::t('app', 'แก้ไขใบคำร้อง: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ใบคำร้อง'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="workreq-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
