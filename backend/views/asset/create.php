<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = Yii::t('app', 'สร้างรหัสเครื่องจักร');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
