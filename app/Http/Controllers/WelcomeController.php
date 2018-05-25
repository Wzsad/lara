<?php
namespace App\Http\Controllers;

use App\Models\Student;
/**
 *
 */
class WelcomeController
{

  public function index()
  {
    $student = Student::first();
    $data    = $student->getAttributes();
    return "学生id=".$data['id'].";学生name=".$data['name'].";学生age=".$data['age'];
  }
}
