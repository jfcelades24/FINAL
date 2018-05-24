<?php
use yii\helpers\Html;
use app\models\Employee;

$this->title ="Employee";
?>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?=Html::a('login',['/site/login']) ?> to create a employee.</span>
<?php else: ?>
    <?= Html::a('Create Employee',['/employee/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>
<?php endif; ?>

<h1><?=$this->title?></h1>

<table class="table table-bordered">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Hire Date</th>
    <th>Job ID</th>
    <th>Salary</th>
    <th>Manager ID</th>
    <th>Department ID</th>
</tr>
<?php foreach($model as $employee): ?>
<tr class="clickable">
    <td>
        <?= Html::a($employee->first_name,
        ['/employee/view',
        'employee_id'=>$employee->employee_id]); ?>
        </td>
            <td><?= $employee->last_name ?></td>
            <td><?= $employee->email ?></td>
            <td><?= $employee->phone_number ?></td>
            <td><?= $employee->hire_date ?></td>
            <td><?= $employee->job_id ?></td>
            <td><?= $employee->salary ?></td>
            <td><?= $employee->manager_id ?></td>
            <td><?= $employee->department_id ?></td>
 </tr>
  <?php endforeach; ?>
</table>