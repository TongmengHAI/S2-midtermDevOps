<?php
use App\Models\Student;

it('can create a student', function () {
    $student = Student::create([
        'name' => 'John Doe',
        'email' => 'e20201056@itc.edu.kh',
        'phone' => '012 345 678',
        'dob' => '2003-10-01'
    ]);

    expect($student->exists())->toBeTrue();
});
