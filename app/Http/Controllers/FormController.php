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
use App\NetSubject;
use App\Academic;


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

      public function storeCategory(Request $request)
    {
            
            $data = $request->all();
            $id = $request->formid;
            $data = request()->except(['_token','formid']);

            $data['category'] = $request->category;
            $data['section1'] = 0;
            $data['section2'] = 0;
            $data['section3'] = 0;
            $data['section4'] = 0;
            $data['section5'] = 0;
            $data['section6'] = 0;
            $data['section7'] = 0;
            $data['section8'] = 0;
            $data['section9'] = 0;
           
            ProfileDetails::where('id', $id)->update($data);
            $ide = Crypt::encrypt($id);

            return redirect("/form/edit/$ide"); 

    }

      public function storeAcademic(Request $request)
    {
            

            Academic::where('userId', $request->userId)->where('profileId', $request->formid)->delete();
            $currentUser = Auth::user();
            $data = $request->all();          
            $data = request()->except(['_token','formid']);

            $data['profileId'] = $request->formid;
            $data['userId'] = $request->userId;
            $data['qualification'] = $request->qualification;

            $data['pgCollege'] = $request->pgCollege;
            $data['pgSubject'] = $request->pgSubject;
            $data['pgYear'] = $request->pgYear;
            $data['pgResultType'] = $request->pgPerNa;
            $data['pgPercentage'] = $request->pgPercentage;
            $data['pgUniversity'] = $request->pgUniversity;
            $data['pgPoints'] = $request->pgPoints;

            $phdNA = $request->phdNA;
            if($phdNA==2){
                $data['phdRegDate'] = $request->phdRegDate;
                $data['phdSubDate'] = $request->phdSubDate;
                $data['phdAwardDate'] = $request->phdAwardDate;
                $data['phdThesisTitle'] = $request->phdThesisTitle;
                $data['phdUniversity'] = $request->phdUniversity;
                $data['phdPoints'] = $request->phdPoints;
            }else{
                $data['phdRegDate'] = "";
                $data['phdSubDate'] = "";
                $data['phdAwardDate'] = "";
                $data['phdThesisTitle'] = "";
                $data['phdUniversity'] = "";
                $data['phdPoints'] = "";
            }

             $net = $request->net;
             if($net <4){
                $data['net'] = $request->net;
                $data['netSubject'] = $request->netSubject;
                $data['netCertificateNo'] = $request->netCertificateNo;

             }
            
           
            Academic::create($data);
            $ide = Crypt::encrypt($request->formid);

            return redirect("/form/edit/$ide"); 

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

public function formedit1($id)
    {
        $ide = Crypt::decrypt($id);

        
		
		$formId =  Crypt::decrypt($id);
		$model = ProfileDetails::with('departments')->with('jobposts')->with('categories')->where('id',$ide)->first();
		$categories = Category::get();
		$userId = $model->userId;
		$category = $model->category;
		$acmodel = Academic::where(['profileId' => $formId, 'userId' => $userId])->first();
		//dd($model);
		//$row=count($acmodel);
		if($acmodel == null){
			$acmodel = new Academic();
		}
		$teachings = TeachingExp::where(['userId' =>$userId, 'profileId' => $formId])->orderBy('id', 'ASC')->get();
		$teachings1 = new TeachingExp();
		$teachingKey = $formId;
		$articles = ResearchArticle::where(['userId' => $userId, 'profileId' => $formId])->orderBy('pubType','ASC')->orderBy('id', 'ASC')->get();
		$articles1 = new ResearchArticle();
		$publications = Researchpublication::where(['userId' =>$userId, 'profileId' => $formId])->orderBy('type','ASC')->orderBy('id', 'ASC')->get();
		$publications1 = new Researchpublication();
		$publicationKey = $formId;
		$rguidance = null;
		$rguidance1 = null;		
		if($model->post != 1){
			$rguidance = Researchguidance::where(['userId' => $userId, 'profileId' => $formId])->orderBy('id' , 'ASC')->first();
			$rguidance1 = new Researchguidance();   
			$appKey = $formId;    
		}		
		//dd($model);
		
		
         return view("site.formedit1", compact('model','formId','userId','acmodel','teachings','teachings1','teachingKey','articles','articles1','publications','publications1','publicationKey','rguidance','rguidance1','categories'));

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
