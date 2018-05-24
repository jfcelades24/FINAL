<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$this->title = "Create Department";
?>

<h1><?= $this->title;?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
    <?= $form->errorSummary($model); ?>
</div>

<?= $form->field($model, 'department_name')->textInput(); ?>

<?= $form->field($model, 'location_id')->textArea(); ?>


<div class="form-group">
    <?= Html::submitButton("Create Department", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>