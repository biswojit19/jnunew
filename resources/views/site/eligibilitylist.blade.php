

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

                 <!-- Start -->
                 <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
                <i class="fa fa-user"></i>&nbsp;&nbsp;Hello  !
            </h3>
    </div>
    <div class="panel-body">
        <div id="email_status"></div>
        <div id="payment_status"></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:2%;">S.No.</th>
                        <th style="width:15%;">Post No./Name</th>
                        <th style="width:5%;">Vacancy</th>
                        <th style="width:15%;">Department</th>
                        <th style="width:20%;">Advertisement No.</th>
                        <th style="width:15%;">Application Status</th>
                        <th style="width:10%;">Payment Status</th>
                        <th style="width:10%;">Confirm Failed Payment</th>
                        <th style="width:10%;">Send Email to Referees</th>
                        <th style="width:5%;">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                      $sno = 0;
                    @endphp
                    @foreach($list as $lists)
                    @php
                      $sno ++;
                      $jobstatus = \App\Http\Controllers\FormController::getJobStatus($lists->jobId);
                    @endphp
                    <tr>
                        <td> {{ $sno }}</td>
                        <td>{{$lists->jobposts->postNo}} </td>
                        <td>{{$lists->jobposts->totalVacancies}} </td>
                        <td>{{$lists->departments->name}}</td>
                        <td>{{$lists->jobposts->code}} </td>
                        <td>
                           <?php
                                    if ($jobstatus) {
                                        if ($lists->payStatus >= 9) {
                                            echo '<span style="color:green;">Applied Successfully</span>';
                                        } else {
                                            echo "Progress";
                                            // echo Progress::widget([
                                            //     'percent' => $model->getFormStatusPercent()['percent'],
                                            //     //'label' => $model->getFormStatusPercent()['percent'] . ' % Complete',
                                            //     'barOptions' => ['class' => 'progress-bar-success'],
                                            //     'options' => ['class' => 'progress-striped']
                                            // ]);
                                        }
                                    } else {
                                        echo "<span style='color:red;'>Application closed</span>";
                                    }
                                    ?>
                        </td>
                        <td>
                          @if($lists->payStatus ==0)
                          <span style="color:red;">Not Paid </span>
                          @endif
                           </td>
                        <td><a class="btn btn-warning btn-xs pull-right" href="/jnurecRC57/index.php/paytm/payment/topaytmpaymentgateway1?id=3fff59ae0f18a4a47b59b73f6c43d057fb237ef6899550691e8116015c248f5d5351&amp;userid=21627" title="Please re-confirm your payment if amount has debited from your account and status still shows &quot;Not Paid&quot; by clicking &quot;Check&quot; Button." style="width:100px" data-toggle="tooltip" data-placement="top">Check</a></td>
                        <td>NotAvailable </td>
                        <td>
                           <?php
                         
                                    if ($lists->payStatus >= 9) {
                                       
                                            // echo Html::a('Print Application', Url::to(['/form/print-form', 'id' => Yii::$app->security->hashData($model->id, \Yii::$app->params['hashKey'])]), ['target' => '_blank', 'class' => 'btn btn-success btn-xs']);
                                      echo "Print Application";
                                        
                                    } elseif ($jobstatus) {
                                      $id= Crypt::encrypt($lists->id);
                                        echo '<a class="btn btn-warning btn-xs" href="edit/'.$id.'" style="width:100px">Edit</a>';
                                    } else {
                                        echo "<span style='color:red;'>Application closed</span>";
                                    }
                                    ?>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><strong style="color:red">Note: </strong> Please re-confirm your payment if amount has debited from your account and status still shows "Not Paid" by clicking "Check" Button.</p>
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

