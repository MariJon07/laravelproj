<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
		// To retrieve all students:
		$students = \App\Models\Student::all();

		// To create a new record:
		$student = new \App\Models\Student();
		$student->name = 'John Doe';
		$student->email = 'john@example.com';
		$student->save();

		// Assuming the student with ID 1 exists
		$student = \App\Models\Student::find(1); 
		$student->name = 'update Name'
		$student->save();

		// Assuming the student with ID 1 exists
		$student = \App\Models\Student::find(1);
		$student->delete();

	    use HasFactory;
}
