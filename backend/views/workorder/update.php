<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = Yii::t('app', 'แก้ไขใบสั่งงาน: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ใบสั่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="workorder-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
