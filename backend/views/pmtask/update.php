<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmtask */

$this->title = Yii::t('app', 'แก้ไขลำดับงาน: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ลำดับงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pmtask-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
