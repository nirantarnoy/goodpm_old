<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sysconfig */

$this->title = Yii::t('app', 'ตั้งค่าระบบ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ตั้งค่าระบบ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysconfig-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
