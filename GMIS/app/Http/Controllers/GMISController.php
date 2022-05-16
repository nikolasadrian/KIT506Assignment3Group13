<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\classes;
use App\Models\studentGroups;
use App\Models\meetings;

class GMISController extends Controller
{
    public function index()
    {
        return view('main');
    }
   
    public function operation()
    {
        return view('operation'); 
    }


	public function checklogin(Request $request)
    {
        if('bachelor' == $request->input('username'))
        	if('bachelor' == $request->input('password'))
    			return view ('operationbachelor');
        else if('master' == $request->input('username'))
        	if('master' == $request->input('password'))
    			return view ('operationmaster');
    }

	public function logout()
    {
    	return view('main'); 
    }


	public function checkoperation_m(Request $request)
    {
        if('Show all groups' == $request->input('operation'))
        	{
        	$studentGroups = studentGroups::all();
    		return view('view_all_groups',compact('studentGroups'));
        	}
    	if('Show all students (given and family name)' == $request->input('operation'))
        	{
        	$students = students::all();
        	return view('view_all_students',compact('students'));
        	}
    	if('Show all classes' == $request->input('operation'))
        	{
        	$classes = classes::all();
    		return view('view_all_classes',compact('classes'));
        	}	
    	if('Show all meetings' == $request->input('operation'))
        	{
        	$meetings = meetings::all();
    		return view('view_all_meetings',compact('meetings'));
        	}
    	if('Search, view all classes for a student' == $request->input('operation'))	
        	return view ('op5m');
    	if('Search, view all meetings for a student' == $request->input('operation'))
    		return view ('op6m');
    	if('Search, view all students in a group' == $request->input('operation'))
    		return view ('op7m');
    	if('Search, view all groups in a class' == $request->input('operation'))
    		return view ('op8m');
    	if('Select one' == $request->input('operation'))
    		return view ('operationmaster');
    }



	public function checkoperation_b(Request $request)
    {
    	if('Search, view all classes for a student' == $request->input('operation'))	
        	return view ('op5b');
    	if('Search, view all meetings for a student' == $request->input('operation'))
    		return view ('op6b');
    	if('Search, view all students in a group' == $request->input('operation'))
    		return view ('op7b');
    	if('Search, view all groups in a class' == $request->input('operation'))
    		return view ('op8b');
    	if('Select one' == $request->input('operation'))
    		return view ('operationbachelor');
    }


	#view all groups
	public function op1()
    {
        $studentGroups = studentGroups::all();
    	return view('view_all_groups',compact('studentGroups')); 
    }

	#view all students
    public function op2()
    {
    	$students = students::all();
        return view('view_all_students',compact('students')); 
    }

    #view all classes
	public function op3()
    {
        $classes = classes::all();
    	return view('view_all_classes',compact('classes'));
    }

	#view all meetings
    public function op4()
    {
        $meetings = meetings::all();
    	return view('view_all_meetings',compact('meetings'));
    }




	#search view classes for a student
	public function op5_1m(Request $request)
    {
  		$name = $request->get('searchname');  	
    	$gmis_student = students::where('given_name', 'LIKE', '%'.$name.'%')
        						->orWhere('family_name', 'LIKE', '%'.$name.'%')
        						->get();
        return view('op5m',compact('gmis_student')); 
    }

	public function op5_1b(Request $request)
    {
  		$name = $request->get('searchname');  	
    	$gmis_student = students::where('given_name', 'LIKE', '%'.$name.'%')
        						->orWhere('family_name', 'LIKE', '%'.$name.'%')
        						->get();
        return view('op5b',compact('gmis_student')); 
    }

    public function op5_2m($id)
    {
    	$gmis_student = students::find($id);
    	$gmis_class = classes::where('group_id',$gmis_student->group_id)->get();	
        return view('op5_2m',compact('gmis_student','gmis_class')); 
    }

	 public function op5_2b($id)
    {
    	$gmis_student = students::find($id);
    	$gmis_class = classes::where('group_id',$gmis_student->group_id)->get();	
        return view('op5_2b',compact('gmis_student','gmis_class')); 
    }
	





  #search view meetings in a student
	public function op6_1m(Request $request)
    {
  		$name = $request->get('searchname');  	
    	$gmis_student = students::where('given_name', 'LIKE', '%'.$name.'%')
        						->orWhere('family_name', 'LIKE', '%'.$name.'%')
        						->get();
        return view('op6m',compact('gmis_student')); 
    }

	public function op6_1b(Request $request)
    {
  		$name = $request->get('searchname');  	
    	$gmis_student = students::where('given_name', 'LIKE', '%'.$name.'%')
        						->orWhere('family_name', 'LIKE', '%'.$name.'%')
        						->get();
        return view('op6b',compact('gmis_student')); 
    }

    public function op6_2m($id)
    {
    	$gmis_student = students::find($id);
    	$gmis_meeting = meetings::where('group_id',$gmis_student->group_id)->get();
        return view('op6_2m',compact('gmis_student','gmis_meeting')); 
    }

	public function op6_2b($id)
    {
    	$gmis_student = students::find($id);
    	$gmis_meeting = meetings::where('group_id',$gmis_student->group_id)->get();
        return view('op6_2b',compact('gmis_student','gmis_meeting')); 
    }







 #search view students in a group
	public function op7_1m(Request $request)
    {
  		$group = $request->get('searchgroup');  	
    	$gmis_studentGroup = studentGroups::where('group_name', 'LIKE', '%'.$group.'%')
        						->get();
        return view('op7m',compact('gmis_studentGroup')); 
    }

	public function op7_1b(Request $request)
    {
  		$group = $request->get('searchgroup');  	
    	$gmis_studentGroup = studentGroups::where('group_name', 'LIKE', '%'.$group.'%')
        						->get();
        return view('op7b',compact('gmis_studentGroup')); 
    }

    public function op7_2m($id)
    {
    	$gmis_studentGroup = studentGroups::find($id);
    	$gmis_student = students::where('group_id',$gmis_studentGroup->group_id)->get();
        return view('op7_2m',compact('gmis_studentGroup','gmis_student')); 
    }
	
	public function op7_2b($id)
    {
    	$gmis_studentGroup = studentGroups::find($id);
    	$gmis_student = students::where('group_id',$gmis_studentGroup->group_id)->get();
        return view('op7_2b',compact('gmis_studentGroup','gmis_student')); 
    }






   #search view groups in a class
	public function op8_1m(Request $request)
    {
  		$ID = $request->get('searchID');  	
    	$gmis_class = classes::where('class_id', 'LIKE', '%'.$ID.'%')
        						->get();
        return view('op8m',compact('gmis_class')); 
    }

	public function op8_1b(Request $request)
    {
  		$ID = $request->get('searchID');  	
    	$gmis_class = classes::where('class_id', 'LIKE', '%'.$ID.'%')
        						->get();
        return view('op8b',compact('gmis_class')); 
    }

    public function op8_2m($id)
    {
    	$gmis_class = classes::find($id);
    	$gmis_studentGroup = studentGroups::where('group_id',$gmis_class->group_id)->get();
        return view('op8_2m',compact('gmis_class','gmis_studentGroup')); 
    }

	public function op8_2b($id)
    {
    	$gmis_class = classes::find($id);
    	$gmis_studentGroup = studentGroups::where('group_id',$gmis_class->group_id)->get();
        return view('op8_2b',compact('gmis_class','gmis_studentGroup')); 
    }



}

?>

