<?php

namespace App\Http\Controllers;

use App\Job_seeker;
use App\Login_Credential;
use App\User;
use Illuminate\Http\Request;

class Job_SeekerController extends Controller
{
    //
    public function SignUp(Request $request)
    {
        //dd($request->all());
        $user=new User();
        $user->First_Name=$request->First_Name;
        $user->Last_Name=$request->Last_Name;
        $user->Email=$request->Email;
        $user->Country_Id=$request->Country_Id;
        //$user->Gender=$request->Gender;
        $user->save();

        $jobseeker=new Job_seeker();

        $jobseeker->Mobile_No=$request->Mobile_No;
        $jobseeker->DOB=$request->DOB;
       // $jobseeker->Gender=$request->Gender;
        //$jobseeker->Marital_Status=$request->Marital_Status;
        $jobseeker->Resume_Id=$request->Resume_Id;
        $jobseeker->Picture=$request->Picture;
        $jobseeker->Nationality_Id=$request->Nationality_Id;
        $jobseeker->Driving_License=$request->Driving_License;
        $jobseeker->Relocate=$request->Relocate;
        $jobseeker->User_Id=$request->User_Id;
        $jobseeker->save();


        $login= new Login_Credential();
        $login->User_Name=$request->User_Name;
        $login->Password=$request->Password;
        $login->User_Id=$request->User_Id;
        $login->IP_Address=$request->IP_Address;
        $login->Terminal_Name=$request->Terminal_Name;
        $login->save();


    }
}
