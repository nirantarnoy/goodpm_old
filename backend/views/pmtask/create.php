<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pmtask */

$this->title = Yii::t('app', 'สร้างลำดับงาน');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ลำดับงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmtask-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
