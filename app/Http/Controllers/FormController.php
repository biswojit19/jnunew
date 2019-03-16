<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\JobPost;
use App\Designation;
use App\Department;
use App\User;
use App\PostJobCategory;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("site.eligibility");  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
    public function apply()
    {
        return view("site.apply");  
    }

    public function department(Request $request){       


        $html = '';
        $html .=' <option  value=""></option>';
        $departments = Department::all();
        foreach ($departments as $department) {
            $html .= '<option value="'.$department->id.'">'.$department->name.'</option>';
        }
        return response()->json(['html' => $html]);

    }

    public function advertisement(Request $request){       

       // dd($request->post);
        $html = '';
        $html .=' <option  value=""></option>';
        $advertisements = JobPost::where('post','=',$request->post)->where('department','=',$request->department)->get();;
        foreach ($advertisements as $advertisement) {
            $html .= '<option value="'.$advertisement->id.'">'.$advertisement->code.'</option>';
        }
        return response()->json(['html' => $html]);
       

    }


}
