<?php
use yii\helpers\Html;

$this->title ="Job";
?>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?=Html::a('login',['/site/login']) ?> to create a job.</span>
<?php else: ?>
    <?= Html::a('Create Job',['/job/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>
<?php endif; ?>

<h1><?=$this->title?></h1>

<table class="table table-bordered">
<tr>
    <th>Job Title</th>
    <th>Min Salary</th>
    <th>Max Salary</th>
    
</tr>
<?php foreach($model as $job): ?>
<tr class="clickable">
    <td>
        <?= Html::a($job->job_title,
        ['/job/view',
        'job_id'=>$job->job_id]); ?>
        </td>
            <td><?= $job->min_salary ?></td>
            <td><?= $job->max_salary ?></td>
           
        
 </tr>
  <?php endforeach; ?>
</table>