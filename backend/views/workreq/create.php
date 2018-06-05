<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Workreq */

$this->title = Yii::t('app', 'สร้างใบคำร้อง');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ใบคำร้อง'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workreq-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
