<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title ="View Job  $model->job_id";
$this->params['breadcrumbs'][] = ['label' => 'Job', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'job_id' => $model->job_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'job_id' => $model->job_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this job?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'job_id',
            'job_title',
            'min_salary',
            'max_salary',
            
        ],
    ]) ?>

</div>
