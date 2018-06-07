<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sysconfig */

$this->title = Yii::t('app', 'ตั้งค่าระบบ', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ตั้งค่าระบบ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sysconfig-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
