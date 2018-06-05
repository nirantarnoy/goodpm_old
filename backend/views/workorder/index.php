<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use lavrentiev\widgets\toastr\Notification;
use backend\assets\ICheckAsset;

ICheckAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WorkorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ใบสั่งงาน');
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    '@web/js/stockbalancejs.js?V=001',
    ['depends' => [\yii\web\JqueryAsset::className()]],
    static::POS_END
);
?>
<div class="workorder-index">
    <?php $session = Yii::$app->session;
    if ($session->getFlash('msg')): ?>
        <!-- <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php //echo $session->getFlash('msg'); ?>
      </div> -->
        <?php echo Notification::widget([
            'type' => 'success',
            'title' => 'แจ้งผลการทำงาน',
            'message' => $session->getFlash('msg'),
            //  'message' => 'Hello',
            'options' => [
                "closeButton" => false,
                "debug" => false,
                "newestOnTop" => false,
                "progressBar" => false,
                "positionClass" => "toast-top-center",
                "preventDuplicates" => false,
                "onclick" => null,
                "showDuration" => "300",
                "hideDuration" => "1000",
                "timeOut" => "6000",
                "extendedTimeOut" => "1000",
                "showEasing" => "swing",
                "hideEasing" => "linear",
                "showMethod" => "fadeIn",
                "hideMethod" => "fadeOut"
            ]
        ]); ?>
    <?php endif; ?>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="x_panel">
        <div class="x_title">
            <div class="btn-group">
                <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> สร้างใบสั่งงาน'), ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="btn-group">
                <div class="btn btn-default"><i class="fa fa-trash-o"></i> ลบ</div>
                <div class="btn btn-default"><i class="fa fa-ban"></i> ยกเลิก</div>
                <div class="btn btn-default"><i class="fa fa-check-circle"></i> ปิดใบสั่งงาน</งงาน></div>
                <div class="btn btn-default"><i class="fa fa-file"></i> เปิดใบสั่งซ์้อ</งงาน></div>
                <div class="btn btn-default"><i class="fa fa-refresh"></i> เบิกอะไหล่/เครื่องมือ</งงาน></div>
                <div class="btn btn-default"><i class="fa fa-print"></i> พิมพ์</div>
            </div>
            <h4 class="pull-right"><?=$this->title?> <i class="fa fa-file"></i><small></small></h4>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul> -->
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-lg-9">
                    <div class="form-inline">
                        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pull-right">
                        <form id="form-perpage" class="form-inline" action="<?=Url::to(['workreg/index'],true)?>" method="post">
                            <div class="form-group">
                                <label>แสดง </label>
                                <select class="form-control" name="perpage" id="perpage">
                                    <option value="20" <?=$perpage=='20'?'selected':''?>>20</option>
                                    <option value="50" <?=$perpage=='50'?'selected':''?> >50</option>
                                    <option value="100" <?=$perpage=='100'?'selected':''?>>100</option>
                                </select>
                                <label> รายการ</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="table-grid">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'emptyCell'=>'-',
                        'layout'=>'{items}{summary}{pager}',
                        'summary' => "แสดง {begin} - {end} ของทั้งหมด {totalCount} รายการ",
                        'showOnEmpty'=>false,
                        'tableOptions' => ['class' => 'table table-hover'],
                        'emptyText' => '<div style="color: red;align: center;"> <b>ไม่พบรายการไดๆ</b></div>',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','contentOptions' => ['style' => 'vertical-align: middle']],

                            //  'id',
                            [
                                'attribute'=>'work_order_no',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],
                            [
                                'attribute'=>'work_order_date',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],
                            'name',
                            'description:ntext',
                            //'action_by',
                            //'action_date',
                            //'action_note',
                            //'vendor_id',
                            //'work_trade',
                            //'work_type',
                            //'work_priority',
                            //'work_title',
                            //'request_detail:ntext',
                            //'plant_id',
                            //'department_id',
                            //'section_id',
                            //'location_id',
                            //'estimate_start_date',
                            //'estimate_end_date',
                            //'actual_start_date',
                            //'actual_end_date',
                            //'actual_asset_start_date',
                            //'asset_id',
                            [
                                'attribute'=>'status',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'format' => 'html',
                                'value'=>function($data){
                                    return $data->status === 1 ? '<div class="label label-success">Active</div>':'<div class="label label-default">Inactive</div>';
                                }
                            ],
                            [

                                'header' => '',
                                'headerOptions' => ['style' => 'width: 160px;text-align:center;','class' => 'activity-view-link',],
                                'class' => 'yii\grid\ActionColumn',
                                'contentOptions' => ['style' => 'text-align: center'],
                                'buttons' => [
                                    'view' => function($url, $data, $index) {
                                        $options = [
                                            'title' => Yii::t('yii', 'View'),
                                            'aria-label' => Yii::t('yii', 'View'),
                                            'data-pjax' => '0',
                                        ];
                                        return Html::a(
                                            '<span class="glyphicon glyphicon-eye-open btn btn-default"></span>', $url, $options);
                                    },
                                    'update' => function($url, $data, $index) {
                                        $options = array_merge([
                                            'title' => Yii::t('yii', 'Update'),
                                            'aria-label' => Yii::t('yii', 'Update'),
                                            'data-pjax' => '0',
                                            'id'=>'modaledit',
                                        ]);
                                        return $data->status == 1? Html::a(
                                            '<span class="glyphicon glyphicon-pencil btn btn-default"></span>', $url, [
                                            'id' => 'activity-view-link',
                                            //'data-toggle' => 'modal',
                                            // 'data-target' => '#modal',
                                            'data-id' => $index,
                                            'data-pjax' => '0',
                                            // 'style'=>['float'=>'rigth'],
                                        ]):'';
                                    },
                                    'delete' => function($url, $data, $index) {
                                        $options = array_merge([
                                            'title' => Yii::t('yii', 'Delete'),
                                            'aria-label' => Yii::t('yii', 'Delete'),
                                            //'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                            //'data-method' => 'post',
                                            //'data-pjax' => '0',
                                            'onclick'=>'recDelete($(this));'
                                        ]);
                                        return Html::a('<span class="glyphicon glyphicon-trash btn btn-default"></span>', 'javascript:void(0)', $options);
                                    }
                                ]
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <?php Pjax::end(); ?>
</div>
