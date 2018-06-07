<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = Yii::t('app', 'สร้างใบสั่งงาน');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ใบสั่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorder-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
