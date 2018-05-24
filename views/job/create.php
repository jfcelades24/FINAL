<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$this->title = "Create Job";
?>

<h1><?= $this->title;?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
    <?= $form->errorSummary($model); ?>
</div>

<?= $form->field($model, 'job_title')->textInput(); ?>

<?= $form->field($model, 'min_salary')->textArea(); ?>

<?= $form->field($model, 'max_salary')->textArea(); ?>


<div class="form-group">
    <?= Html::submitButton("Create Job", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>