<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HiringType */

$this->title = $model->Hiring_Type_Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hiring Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hiring-type-view">

    <h1><?= Html::encode($model->Hiring_Type_Name) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Edit'), ['update', 'id' => $model->Hiring_Type_Id], ['class' => 'btn btn-primary btn-edit-popup']) ?>
        <?php Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Hiring_Type_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'Hiring_Type_Id',
            'Hiring_Type_Name',
//            'Created_Date',
//            'Last_Modified_Date',
        ],
    ]) ?>

</div>
