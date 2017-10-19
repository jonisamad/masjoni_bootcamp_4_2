<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;


class StudentController extends Controller
{
    function EditStudent(Request $req) {
        DB::beginTransaction();
        try {
            $this->validate($req, [
                'student_name' => 'required'
            ]);
            $name = $req->input('student_name');
            $email = $req->input('email');
            $phone = $req->input('phone');
            $edits = Student::updateOrCreate(
                ['student_name' => $name],
                ['email' => $email, 'phone' => $phone]
            );
            DB::commit();
            return response()->json(['message' => 'Succesfully Add/Edit Student'], 201);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message' => 'Action Failed, exception:' + $e], 500); 
        }
    }
}

}
