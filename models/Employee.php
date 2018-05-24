<?php

namespace app\models;

use Yii;
use\common\models\User;

/**
 * This is the model class for table "employee".
 *
 * @property int $employee_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $hire_date
 * @property int $job_id
 * @property string $salary
 * @property int $manager_id
 * @property int $department_id
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'job_id', 'salary', 'manager_id', 'department_id'], 'required'],
            [['hire_date'], 'safe'],
            [['job_id', 'manager_id', 'department_id'], 'integer'],
            [['salary'], 'number'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 200],
            [['phone_number'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'hire_date' => 'Hire Date',
            'job_id' => 'Job ID',
            'salary' => 'Salary',
            'manager_id' => 'Manager ID',
            'department_id' => 'Department ID',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Job::className(), ['employee_id' => 'job_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}