

@extends('layouts.main')
@section('content')
<div class="container-fluid uod-content anil-container" style="margin-top:0; padding:0 0 0 0">
   <div class="site-index">
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-primary" style="width:95%; margin-right:2.5%; margin-left:2.5%">
               <div class="panel-heading">
                  <h4 style="text-align: center; font-weight: bold;">JAWAHARLAL NEHRU FACULTY RECRUITMENT PORTAL</h4>
               </div>
               <!-- Start -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Notifications
                            </h3>
                        </div>
                        <div class="panel-body">            
                            Welcome to Jawaharlal Nehru University  Online Recruitment Portal.
                            <br>
                            This is your personalized dashboard to keep a track on your applications and other related information.
                        </div>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-rounded btn-primary" href="{{route('form.apply')}}">Apply Now&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
                        </div>
             </div>

               <!-- End -->
              
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
@endsection

