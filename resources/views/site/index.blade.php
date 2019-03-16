

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
               <div class="panel-body">
                  <div class="col-md-9">
                     <div class="row" style="font-weight:normal">
                        <div class="table-responsive">
                        <table class="table">
                           <thead>
                             <tr class="danger">
                              <th>Posts</th>
                              <th>Application Start Date/Time</th>
                              <th>Application Close Date/Time</th>
                              <th>Total Post</th>
                             </tr> 

                            <!--  <tr class="success">
                              <th>Assistant Professor</th>
                              <td>2017-12-30 Time: 09:00:00</td>
                              <td>2018-01-29 Time: 17:30:00</td>
                              <td>58</td>
                             </tr> -->
                           </thead>
                           <tbody>
                              @php
                                 $all_total_vacancy = 0;
                              @endphp
                               @foreach($jobposts as $jobpost)
                                 
                             <tr class="success">
                               <td>{{ $jobpost->designations->name }}</td>
                                    <td>{{ $jobpost->startDate }} {{$jobpost->startingTime}}</td>
                                     <td>{{ $jobpost->closeDate }} {{$jobpost->closingTime}}</td>
                              <td> 
                                   00

                                 
                              </td> 
                             </tr> 
                              @endforeach
                           
                             <tr class="info">
                              
                              <td></td>
                              <td></td>
                              <th>Total: </th>
                              <td>{{$all_total_vacancy}}</td>
                             </tr> 
                           </tbody>
                        </table>
                           <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">A number of faculty positions at the level of Professor, Associate Professor and Assistant Professor are available in various Schools/Centres of the University. &nbsp;Candidates with good academic record, teaching and research experience and working in related areas, are encouraged to apply. &nbsp;University also solicits applications from candidates with research interests that are interdisciplinary. At present, the number of vacancies at each level are as under:</span></p>
                           <br>
                           <table align="center" class="table table-striped" style="border-collapse: collapse; width: 473.2000pt;">
                              <tbody>
                                 <tr class="success" style="height: 13.9000pt;">
                                    <td style="width: 141.583px; padding: 0pt 5.4pt; border: 1pt solid windowtext;">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Position/Scale of Pay</span></strong></p>
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">&nbsp;</span></strong></p>
                                    </td>
                                    <td style="width: 124.217px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Essential Qualifications</span></strong></p>
                                    </td>
                                    <td style="width: 50.75px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">SC</span></strong></p>
                                    </td>
                                    <td style="width: 44.05px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">ST</span></strong></p>
                                    </td>
                                    <td style="width: 48.6167px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">OBC</span></strong></p>
                                    </td>
                                    <td style="width: 51.5px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">UR</span></strong></p>
                                    </td>
                                    <td style="width: 61.4167px; padding: 0pt 5.4pt; border-color: windowtext windowtext windowtext currentcolor; border-style: solid solid solid none; border-width: 1pt 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Total</span></strong></p>
                                    </td>
                                 </tr>
                                 <tr style="height: 20.8500pt;">
                                    <td style="width: 141.583px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext; border-style: none solid solid; border-width: medium 1pt 1pt;">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Professor</span></strong></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">37400-67000/- </span></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">(PB-IV) AGP Rs. 10000/-</span></p>
                                    </td>
                                    <td style="width: 124.217px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;" rowspan="3">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">As per UGC Regulations, 2010 as amended from time to time for all the teaching posts.</span></p>
                                    </td>
                                    <td style="width: 50.75px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">02</span></p>
                                    </td>
                                    <td style="width: 44.05px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">01</span></p>
                                    </td>
                                    <td style="width: 48.6167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">-</span></p>
                                    </td>
                                    <td style="width: 51.5px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">19</span></p>
                                    </td>
                                    <td style="width: 61.4167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">22</span></p>
                                    </td>
                                 </tr>
                                 <tr class="info" style="height: 17.3500pt;">
                                    <td style="width: 141.583px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext; border-style: none solid solid; border-width: medium 1pt 1pt;">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Associate Professor</span></strong></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">37400-67000/- </span></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">(PB-IV) AGP Rs. 9000/-</span></p>
                                    </td>
                                    <td style="width: 50.75px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">04</span></p>
                                    </td>
                                    <td style="width: 44.05px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">03</span></p>
                                    </td>
                                    <td style="width: 48.6167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">-</span></p>
                                    </td>
                                    <td style="width: 51.5px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">19</span></p>
                                    </td>
                                    <td style="width: 61.4167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">26</span></p>
                                    </td>
                                 </tr>
                                 <tr class="info" style="height: 17.3500pt;">
                                    <td style="width: 141.583px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext; border-style: none solid solid; border-width: medium 1pt 1pt;">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Assistant Professor</span></strong></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">15600-39100/- </span></p>
                                       <p style="margin-bottom: 0.0000pt;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">(PB-III) AGP Rs. 6000/-</span></p>
                                    </td>
                                    <td style="width: 50.75px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">03</span></p>
                                    </td>
                                    <td style="width: 44.05px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">05</span></p>
                                    </td>
                                    <td style="width: 48.6167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">13</span></p>
                                    </td>
                                    <td style="width: 51.5px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">17</span></p>
                                    </td>
                                    <td style="width: 61.4167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><span style="font-family: 'Verdana'; font-size: 11.0000pt;">38</span></p>
                                    </td>
                                 </tr>
                                 <tr style="height: 17.3500pt;">
                                    <td style="width: 141.583px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext; border-style: none solid solid; border-width: medium 1pt 1pt;">
                                       <p style="margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">Total</span></strong></p>
                                    </td>
                                    <td style="width: 124.217px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">&nbsp;</span></strong></p>
                                    </td>
                                    <td style="width: 50.75px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">9</span></strong></p>
                                    </td>
                                    <td style="width: 44.05px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">9</span></strong></p>
                                    </td>
                                    <td style="width: 48.6167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">13</span></strong></p>
                                    </td>
                                    <td style="width: 51.5px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">55</span></strong></p>
                                    </td>
                                    <td style="width: 61.4167px; padding: 0pt 5.4pt; border-color: currentcolor windowtext windowtext currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium;">
                                       <p style="margin-bottom: 0.0000pt; text-align: center;"><strong><span style="font-family: 'Verdana'; font-size: 11.0000pt;">86</span></strong></p>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <h4 style="font-weight: bold;">
                           <p align=center><u>The deadline to submit recommendation is 22<sup>nd</sup> February 2018</u><img src="/upload57/new.gif" height="40px"></img></p>
                        </h4>
                        <br>
                        <h4><a target="_blank" href="/upload57/AdvtNoRC-57-2017Corrigendum.pdf">Corrigendum Advertisement No. RC/57/2017</a></h4>
                        <h4><a target="_blank" href="/upload57/RC-57-2017.pdf">Click here to view the detailed advertisement for RC-57-2017</a></h4>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="row">
                        <div class="col-md-12">
						
						
						<form method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
       <p class="login-box-msg"> Registered Email-id</p>
        <input type="email" class="form-control" placeholder="Applicant's Registered Email-id" name="email" value="{{ old('email') }}">
        

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <p class="login-box-msg"> Password</p>
        <input type="password" class="form-control" placeholder="Password" name="password">
       

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
     
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
       
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
	  <div class="panel-footer">
		<ul>
		   <li>
			  <h4> <a href="/site/signup">New User Registration</a></h4>
		   </li>
		   <li>
			  <h4><a href="/request-password-reset">Reset Password</a> </h4>
		   </li>
		   <li>
			  <h4><a href="/site/about">Help</a></h4>
		   </li>
		</ul>
	 </div>
								 
								 
    </form>
						
						
						
						
						
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <div class="row">
                     <div class="col-md-12 text-center" style="color: green"><strong>Write to us at recruitment[at]mail[dot]jnu[dot]ac[dot]in for issues related to the online application form.</strong></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
@endsection

