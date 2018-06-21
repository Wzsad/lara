<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Container\Container;
/**
 *
 */
class WelcomeController
{

  public function index()
  {
    $student = Student::first();
    $data    = $student->getAttributes();
    $app     = Container::getInstance();
    $factory = $app->make('view');
    return $factory->make('welcome')->with('data', $data);
    // return "学生id=".$data['id'].";学生name=".$data['name'].";学生age=".$data['age'];
  }
}
