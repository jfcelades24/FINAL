<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$this->title = "Create Employee";
?>

<h1><?= $this->title;?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
    <?= $form->errorSummary($model); ?>
</div>

<?= $form->field($model, 'first_name')->textArea(); ?>

<?= $form->field($model, 'last_name')->textArea(); ?>

<?= $form->field($model, 'email')->textArea(); ?>

<?= $form->field($model, 'phone_number')->textArea(); ?>

<?= $form->field($model, 'hire_date')->textArea(); ?>

<?= $form->field($model, 'job_id')->textArea(); ?>

<?= $form->field($model, 'salary')->textArea(); ?>

<?= $form->field($model, 'manager_id')->textArea(); ?>

<?= $form->field($model, 'department_id')->textArea(); ?>



<div class="form-group">
    <?= Html::submitButton("Create Employee", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>