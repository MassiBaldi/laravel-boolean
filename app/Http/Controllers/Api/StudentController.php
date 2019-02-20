<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
  public function filter(Request $request) {

    $data = $request->all();
    $gender = $data['gender'];

    if (empty($gender)) {

      return response()->json([
        'error' => 'Gender è vuoto'
      ]);
    }
    $filteredStudent = [];

    foreach (config('students') as $student) {

      if ($student['gender'] == $gender){

        $filteredStudent[] = $student;
      }
    }

    return response()->json([
      'error' => '',
      'success' => true,
      'numero_risultati' => count($filteredStudent),
      'results' => $filteredStudent
    ]);
  }


}
