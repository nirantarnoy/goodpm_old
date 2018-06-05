<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Assetgroup */

$this->title = Yii::t('app', 'สร้างกลุ่มเครื่องจักร');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assetgroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assetgroup-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
