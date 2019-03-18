<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;
use App\JobPost;
use App\Designation;
use App\Department;
use App\User;
use App\PostJobCategory;
use App\ProfileDetails;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Crypt;


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
    public function store(Requests\FormStoreRequest $request)
    {
                  

            $currentUser = Auth::user();
            $data = $request->all();
            $data['post'] = $request->post;
            $data['userId'] = $currentUser->id;
            $data['department'] = $request->department;
            // $data['mobile'] = $currentUser->mobile;

            $data['advt'] = $request->advertisement; 
            $data['jobId'] = $request->advertisement;

           // $data['isNewRecord']  = TRUE;
            $data['transaction'] = 0;
            $data['transStatus'] = 0;
            $data['payDate'] = '';
            $data['payStatus'] = 0;
            $data['section1'] = 1;
            $data['section2'] = 0;
            $data['section3'] = 0;
            $data['section4'] = 0;
            $data['section5'] = 0;
            $data['section6'] = 0;
            $data['section7'] = 0;
            $data['section9'] = 0;
            $data['feedback_code'] = null;
            $data['check_pay'] = null;
            $data['no_of_pay'] = null;
            $data['elligible_status'] = null;


            // $lastId =JobPost::create($data);

             $check = ProfileDetails::where('userId',$currentUser->id)->where('post',$request->post)->where('department',$request->department)->where('advt',$request->advertisement)->count();
            //dd($check);
             if($check == 0){
                $lastId =ProfileDetails::create($data); 
                //dd($lastId->id);
                 $formNo = '19Y' . $request->advertisement . 'P' . $request->post . 'I' . $lastId->id;
                ProfileDetails::where('id', $lastId->id)->update(['formNo' => $formNo]);
                 $ide = Crypt::encrypt($lastId->id);
                return redirect("/form/edit/$ide");

             }else
             {
               return redirect("/form/eligibilitylist"); 
             }

           

    }
    public function eligibilitylist()
    {
         $currentUser = Auth::user();
         $list = ProfileDetails::with('departments')->where('userId',$currentUser->id)->get();
         return view("site.eligibilitylist", compact('list'));  
    }

    public static function getJobStatus($id)
    {
        
         $res = JobPost::where('id',$id)->get();
         foreach ($res as  $value) {
             $closeDate = $value->closeDate;
             $status = $value->status;
             $closingTime = $value->closingTime;
         
            $closingDate = new DateTime($closeDate . " " . $closingTime);
            $now = new DateTime();
         
             if (($closingDate > $now) && $status == 1) 
            {
                return true;
            } else {
                return false;
            }
       
         }    

    }

    public function formedit($id)
    {
        $ide = Crypt::decrypt($id);

        $model = ProfileDetails::with('departments')->with('jobposts')->where('id',$ide)->get();
         return view("site.formedit", compact('model'));

    }

    public function formvalidate($id)
    {
          $ide = Crypt::decrypt($id);

        $model = ProfileDetails::with('departments')->with('jobposts')->where('id',$ide)->get();
         return view("site.formedit", compact('model'));

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
        $advertisements = JobPost::where('post','=',$request->post)->where('department','=',$request->department)->get();
        foreach ($advertisements as $advertisement) {
            $html .= '<option value="'.$advertisement->id.'">'.$advertisement->postNo." ".$advertisement->code.'</option>';
        }
        return response()->json(['html' => $html]);
       

    }

    public function getShowUploadInfo(Request $request){
            $html = '';
            $model = JobPost::where('id','=',$request->advertisement)->get();

            // $result['uAcadmic'] = $model->uAcadmic;
            // $result['uTeachExp'] = $model->uTeachExp;
            // $result['uResExp'] = $model->uResExp;
            // $result['uPreDetails'] = $model->uPreDetails;
            // $result['uNoc'] = $model->uNoc;
            // $result['uResArt'] = $model->uResArt;
            // $result['uResPub'] = $model->uResPub;
            // $result['description'] = $model->description;
            // $result['desirable'] = $model->desirable;
            return $model;

    }


}
