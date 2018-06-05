<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = Yii::t('app', 'แก้ไขรหัสเครื่องจักร: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รหัสเครื่องจักร'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="asset-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
