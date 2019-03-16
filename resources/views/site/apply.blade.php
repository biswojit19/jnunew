

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
                               Post Department Selection
                            </h3>

                        </div>
                        <div class="panel-body">            
                            <div class="col-md-12">
                                 <label><l style="color:red">Note: </l>Please recheck the Post Name, Department and the Advertisement No. before clicking the apply button.</label>
                              </div>

                               <div class="col-md-4">
                                {!! Form::label('Post') !!}        

                                {!! Form::select('post', App\Designation::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose post','id' => 'post'] ) !!}

                               </div>

                                 <div class="col-md-4">
                                {!! Form::label('Department') !!}        

                                   <select class="form-control" id="department" name="department">
                                     <option  value=""></option>
                                   </select>

                               </div>
                                <div class="col-md-4">
                                {!! Form::label('Advertisement No') !!}        

                                   <select class="form-control" id="advertisement" name="advertisement">
                                     <option  value=""></option>
                                   </select>

                               </div>

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


