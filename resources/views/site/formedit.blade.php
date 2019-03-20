

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
               <div class="panel-body">
                 @foreach($model as $lists)
                   <marquee><p style="font-weight:bold; color:#000;">Application for {{$lists->jobposts->code}}  in {{$lists->departments->name}}Advertisement No.  {{$lists->jobposts->code}}</p></marquee> 

                   <!-- Post Strat  -->
                     <table border=2>
   <tr valign="middle">
     <td height="34" colspan="2"> <div align="left"><strong><font color="#990000">Note : Kindly read Guidelines carefully before filling the form.</font></strong></div></td>
     </tr>
                      <?php if($lists->post==1){ ?>
   <tr valign="middle">  <td colspan="2">
   <p align="center" style="font-weight:bold; color:#000;"> <strong>Assistant Professor</strong></p>
   </td></tr>
   <tr>
  <td style="width:70%">General Institution</td>
  <td style="width:30%">Minimum Reqirements to Proceed Further From This Page</td>
   </tr>
   <tr> 
    <td>
        <div align="justify" style="margin-right:1%">
          <ol>
            <li>Good academic record as defined by the concerned university with at least 55% marks (or an equivalent grade in point scale wherever  grading system is followed) at the Master&#8217;s Degree level in a relevant subject from an Indian University, or an equivalent degree from an accredited foreign university. </li>
            <li>Besides fulfilling the above qualifications, the candidate must have cleared the National Eligibility Test (NET) conducted by the UGC, CSIR or similar test accredited by the UGC like SLET/SET. </li>
            <li>Notwithstanding anything contained in sub-clauses (i) and (ii) to this Clause, candidates, who are, or have been awarded a Ph.D. Degree in accordance with the University Grants Commission (Minimum Standards and Procedure for Award of Ph.D. Degree) Regulations 2009, shall be exempted from the requirement of the minimum eligibility condition of NET/SLET/SET for recruitment and appointment of Assistant Professor or equivalent positions in Universities/Colleges/Institutions. </li>
            <li>NET/SLET/SET shall also not be required for such Masters Programmes in disciplines for which NET/SLET/SET is not conducted. </li>
            <li>The candidates applying for the post of Assistant Professor are requested to submit a certificate to the effect that the Ph.D. has been awarded in accordance with the UGC Regulations, 2009, to get exemption from NET. </li>
            <li>The candidates applying for the post of Assistant Professor who were enrolled for Ph.D. before July 11, 2009 will be governed by the 4th Amendment, UGC Regulations 2016, which is as under: </li>
          </ol>
        </div>
        <p align="justify" style="margin-right:1%">&#8220;Provided further, the award of degree to candidates registered for M.Phil/Ph.D. programme prior to July 11, 2009, shall be governed by the provisions of the then existing Ordinances/Bylaws/Regulations of the Institutions awarding the degree and the Ph.D. candidates shall be exempted from the requirement of NET/SLET/SET for recruitment and appointment of Assistant Professor or equivalent positions in Universities/Colleges/Institutions subject to the fulfillment of the following conditions:- </p>
        <div align="justify" style="margin-right:1%">
          <ol>
            <li>Ph.D. degree of the candidate awarded in regular mode only; </li>
            <li>Evaluation of the Ph.D. thesis by at least two external examiners; </li>
            <li>Open Ph.D. viva voce of the candidate had been conducted; </li>
            <li>Candidate has published two research papers from his/her Ph.D. work out of which at least one must be in a refereed journal; </li>
            <li>Candidate has made at least two presentations in conferences/seminars, based on his/her Ph.D. work.          </li>
          </ol>
          <!--ol>
            <li>to  5. as above are to be certified by the Vice-Chancellor/Pro-Vice-Chancellor/Dean (Academic Affairs)/Dean (University instructions).&#8221;</li>
          </ol-->
        </div>  
        <p align="justify" style="font-weight:bold; color:#000;"></p>
   </td>
   <td>
  <div align="justify" style="margin-right:1%">
          <ol>
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever  grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
            <li style="color:red">Candidate must have cleared the National Eligibility Test (NET)</li>
            </ol>
        </div>
   </td>
   </tr>
   <?php } ?>


   <?php if($lists->post==2){ ?>
  
     <tr valign="middle">  <td colspan="2">
   <p align="center" style="font-weight:bold; color:#000;"> <strong>Associate Professor </strong></p>
   </td></tr>
   <tr>
  <td style="width:40%">General Institution</td>
  <td style="width:60%">Minimum Reqirements to Proceed Further From This Page</td>
   </tr>
   <tr> 
    <td>
        <div align="justify" style="margin-right:1%">
          <ol>
      <li>Good academic record with a Ph.D. Degree in the concerned/allied/relevant discipline.</li>
      <li>A Master’s Degree with at least 55% marks (or an equivalent grade in a point scale wherever grading system is followed.</li>
      <li>A minimum of eight years of experience of teaching and/or research in an academic/research position equivalent to that of Assistant Professor in a University, College or Accredited Research Institution/industry excluding the period of Ph.D. research with evidence of published work and a minimum of 5 publications as books and/or research/policy papers.</li>
    </ol>
     </div>
   </td>
   <td>
   <div align="justify" style="margin-right:1%">
          <ol>
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever  grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
            <li style="color:red">Ph.D. is required.(Form Section 2.1-Ph.D.)</li>
            <li style="color:red">At least total 8 years or of experience of teaching and/or research in an academic/research position.(Form Section 3.1)</li>
            <li style="color:red">Minimum 5 Research Papers/Articles in Journal/Conference Proceedings or 5 Research Publication self authored/co-authored/edited book/chapters in books or combination of both must be atleast 5.(Form Section 4.1 and 4.2)</li>
            <li style="color:red">Ph.D. Research Supervision in Research Guidance is required where at least 1 student have submitted or awarded his/her thesis .(Form Section 4.3 Ph.D.)</li>
            </ol>
        </div>
  </td>
   </tr>
   <?php } ?>
   
   
   <?php if($lists->post==3){ ?>
  
    <tr valign="middle">  <td colspan="2">
   <p align="center" style="font-weight:bold; color:#000;"> <strong>Professor </strong></p>
   </td></tr>
   <tr>
  <td style="width:40%">General Institution</td>
  <td style="width:60%">Minimum Reqirements to Proceed Further From This Page</td>
   </tr>
   <tr> 
    <td>
         <div align="justify">(A)  An eminent scholar with Ph.D. qualification(s) in the concerned/allied/relevant discipline and published work of high quality, actively engaged in research with evidence of published work with a minimum of 10 publications books and/or research/policy papers A minimum of ten years of teaching experience in university/college, and/or experience in research at the University/National level institutions/industries, including experience of guiding candidates for research at doctoral level

<br>
  OR<br>(B) An outstanding professional, with established reputation in the relevant field, who has made  significant contributions to the knowledge in the concerned/allied/relevant discipline, to be   substantiated by credentials.</div>
   </td>
    <td>
   <div align="justify" style="margin-right:1%">
          <ol>
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever  grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
            <li style="color:red">Ph.D. is required.(Form Section 2.1-Ph.D.)</li>
            <li style="color:red">At least total 10 years or of experience of teaching and/or research in an academic/research position.(Form Section 3.1)</li>
            <li style="color:red">Minimum 10 Research Papers/Articles in Journal/Conference Proceedings or 5 Research Publication self authored/co-authored/edited book/chapters in books or combination of both must be atleast 5.(Form Section 4.1 and 4.2)</li>
            <li style="color:red">Ph.D. Research Supervision in Research Guidance is required where at least 1 student have submitted or awarded his/her thesis .(Form Section 4.3 Ph.D.)</li>
            </ol>
        </div>
  </td>
   </tr>
   <?php } ?>
    
   </table>
                   <!-- End -->


                   @endforeach
               </div>


<!-- Start -->
 {!! Form::open(array('route' => 'form.storecategory', 'method' => 'POST' )) !!}
 {{ csrf_field() }}

 <input type="hidden" name="formid" value="{{$lists->id}}">
               <div class="panel panel-info du-panel">
      <div class="panel-heading">
          <div class="row">
              <div class="col-md-10">
                  Are you eligible for this post?
              </div>
          </div>
      </div>
      <div class="panel-body">
          <div id="jx-profile-content"></div>
          <div id="form-area-tab-11">

              <div class="row">
                  <div class="col-md-3" id="catego">
                      <div class="form-group field-profile-category required">
                          <label class="control-label" for="profile-category">Category</label>          
                      
                        @php
                          $cat =App\Category::all();
                        @endphp
                        <select class="form-control" name="category">

                        <option>Choose category</option>

                        @foreach ($cat as $item)
                          <option value="{{ $item->id }}" {{ ( $item->id == $lists->category) ? 'selected' : '' }}> {{ $item->name }} </option>
                        @endforeach    </select>

                          <div class="help-block"></div>
                      </div>
                  </div>
                  <div class="col-md-1">
                      <div>.</div>
                      <button type="submit" class="btn btn-warning" onclick="catsave()">Save</button>
                  </div>
                  <div class="col-md-3">
                      <div>.</div>
                      <strong>You have selected Unreserved(UR) as your category</strong>
                  </div>
                  <div class="col-md-5">
                      <strong id="head1" style="color:red"></strong>
                      <br>
                      <ol id="err" style="color:red">

                          <ol>
                          </ol>
                      </ol>
                  </div>
              </div>
              <div class="row">
                  <strong style="color:red">Note:</strong> This is a <i>Minimum Reqirements</i> form. Once you will qualify this minimum reqirements you will be redirected to main form where you can able to fill all the information like bachelor's qualification, M.Phil. etc.

              </div>
          </div>
          <div class="form-group">
              <div class="text-center"> &nbsp;
              </div>

          </div>

      </div>

  </div>
</form>
               <!-- End -->

               @if($lists->category !=0)
               <!-- Start category condtion -->              
               {!! Form::open(array('route' => 'form.storeacademic', 'method' => 'POST' )) !!}
                <input type="hidden" name="formid" value="{{$lists->id}}">
                 <input type="hidden" name="userId" value="{{$lists->userId}}">

               <div class="panel panel-info du-panel">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                2.1 Academic Qualifications <font style="color:red">Note: Provide complete qualification as you will not be able to edit further</font>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <span> <button type="button" id="edit-but-22" class="btn btn-info" onclick="aca();" style="display: none;">Edit Details</button> </span>
                </div>
            </div>
        </div>
    </div>
    @php
     $academic =App\Academic::where('profileId',$lists->id)->where('userId',$lists->userId)->get();
   // dd( count($academic));
    @endphp
  @if(count($academic) != 0)
  
    @foreach ($academic as $academics)

    <div class="panel-body">
        <div id="jx-cont-acad-res"></div>

        <div id="form-area-tab-22">
            <div class="form-group field-academic-qualification required has-success">
                <label class="control-label" for="academic-qualification">Qualification Pattern</label>
                <select id="academic-qualification" class="form-control" name="qualification">
                    <option value="">Select</option>
                    <option value="1" <?php if($academics->qualification ==1) echo'selected="selected"';?>>UG + PG + M.Phil / Ph.D</option>
                    <option value="2" <?php if($academics->qualification ==2) echo'selected="selected"';?>>Integrated Master`s</option>
                </select>

                <div class="help-block"></div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table" id="table-rec-acad-quali">

                        <tbody>
                            <tr>
                                <th style="width:10%;">Examination</th>
                                <th style="width:10%;">Name Of Degree</th>
                                <th style="width:15%;">Main Subject</th>
                                <th style="width:10%;">Year</th>
                                <th style="width:10%;">Result Type</th>
                                <th style="width:20%;">Overall Percentage/Final Grade Points Avg.(FGPA)</th>
                                <th style="width:22%;">Board/University/Institution</th>
                            </tr>
                            <tr>
                                <th>Masters`s Degree</th>
                                <td>
                                    <div class="form-group field-academic-pgcollege required">

                                        <input type="text" id="academic-pgcollege" class="form-control" name="pgCollege" value="{{$academics->pgCollege}}" maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgsubject required">

                                        <input type="text" id="academic-pgsubject" class="form-control" value="{{$academics->pgSubject}}" name="pgSubject" maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgyear required has-success"> 
                                      @php $currentYear = date('Y'); @endphp
                                        <select id="academic-pgyear" class="form-control" name="pgYear">
                                           <option value=""></option>
                                          @foreach (range( $currentYear, 1930) as $value) 
                                            <option value="{{$value}}" <?php if($academics->pgYear ==$value) echo'selected="selected"';?>>{{$value}}</option>
                                           @endforeach
                                          
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgperna required">

                                        <select id="academic-pgperna" class="form-control" name="pgPerNa" onchange="percen_grade();">
                                            <option value="1" <?php if($academics->pgResultType ==1) echo'selected="selected"';?>>Percentage</option>
                                            <option value="2" <?php if($academics->pgResultType ==2) echo'selected="selected"';?>>Grade</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgpercentage required">

                                        <input type="text" id="academic-pgpercentage" class="form-control" name="pgPercentage" value="{{$academics->pgPercentage}}" onchange="percen_grade();">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pguniversity required">

                                        <input type="text" id="academic-pguniversity" class="form-control" name="pgUniversity" maxlength="255" value="{{$academics->pgUniversity}}">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgpoints">

                                        <input type="hidden" id="academic-pgpoints" class="form-control" name="pgPoints" value="{{$academics->pgPoints}}">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <div class="form-group field-academic-netexemptionexplain">

                        <input type="hidden" id="academic-netexemptionexplain" class="form-control" name="netExemptionExplain" value="Not Required">

                        <div class="help-block"></div>
                    </div>
                    <table class="table">

                        <tbody>
                            <tr>
                                <th style="width:10%;">
                                    <div>Ph.D</div>
                                    <div class="form-group field-academic-phdna required">
                                        <label class="control-label">Applicable</label>
                                        <input type="hidden" name="phdNA" value="1">
                                        <div id="academic-phdna">
                                            <label>
                                                <input type="radio" name="phdNA" value="1" <?php if($academics->phdNA ==1) echo'checked';?>> No</label>
                                            <label>
                                                <input type="radio" name="phdNA" value="2" <?php if($academics->phdNA ==2) echo'checked';?>> Yes</label>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </th>

                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdregdate">
                                        <label class="control-label" for="academic-phdregdate">Date of Registration</label>
                                       <!--  <input type="text" id="academic-phdregdate" class="form-control hasDatepicker" name="phdRegDate" readonly="" placeholder="Date of Registration"> -->
                                        <div class='input-group date' id='phdRegDate'>
                                            {!! Form::text('phdRegDate', $academics->phdRegDate,  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdsubdate">
                                        <label class="control-label" for="academic-phdsubdate">Date of Submission</label>
                                       <!--  <input type="text" id="academic-phdsubdate" class="form-control hasDatepicker" name="phdSubDate" readonly="" placeholder="Date of Submission"> -->
                                        <div class='input-group date' id='phdSubDate'>
                                            {!! Form::text('phdSubDate', $academics->phdSubDate,  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdawarddate">
                                        <label class="control-label" for="academic-phdawarddate">Date of Award</label>
                                       <!--  <input type="text" id="academic-phdawarddate" class="form-control hasDatepicker" name="phdAwardDate" readonly="" placeholder="Date of Award"> -->
                                        <div class='input-group date' id='phdaward'>
                                            {!! Form::text('phdAwardDate', $academics->phdAwardDate,  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:30%;">
                                    <div class="form-group field-academic-phdthesistitle">
                                        <label class="control-label" for="academic-phdthesistitle">Thesis Title</label>
                                        <textarea id="academic-phdthesistitle" class="form-control" name="phdThesisTitle" rows="3">{{$academics->phdThesisTitle}}</textarea>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:20%;">
                                    <div class="form-group field-academic-phduniversity">
                                        <label class="control-label" for="academic-phduniversity">University</label> 
                                        <input type="text" id="academic-phduniversity" class="form-control" value="{{$academics->phdUniversity}}" name="phdUniversity" maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:5%;">
                                    <div class="form-group field-academic-phdpoints">

                                        <input type="hidden" id="academic-phdpoints" class="form-control" name="phdPoints">

                                        <div class="help-block"></div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <th colspan="2">Whether Qualified UGC / CSIR
                                    <br>/ Similarly accredited eligibility</th>

                                <td></td>
                                <td>
                                    <div class="form-group field-academic-net required">
                                        <label class="control-label" for="academic-net">NET</label>
                                        <select id="academic-net" class="form-control" name="net" onchange="netfunc()">
                                            <option value=""></option>
                                            <option value="1" <?php if($academics->net ==1) echo'selected="selected"';?>>JRF(UGC)</option>
                                            <option value="2" <?php if($academics->net ==2) echo'selected="selected"';?>>NET(UGC)</option>
                                            <option value="3" <?php if($academics->net ==3) echo'selected="selected"';?>>National Level Test Conducted by any other agency accredited by UGC</option>
                                            <option value="4" <?php if($academics->net ==4) echo'selected="selected"';?>>NET Exempted</option>
                                            <option value="5" <?php if($academics->net ==5) echo'selected="selected"';?>>None</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div id="pns-net-subject">
                                        <div class="form-group field-academic-netsubject">
                                            <label class="control-label" for="academic-netsubject">NET Subject</label>
                                          @php
                                            $netsubjects =App\NetSubject::all();
                                          @endphp
                                            <select id="academic-netsubject" class="form-control" name="netSubject">
                                                <option value=""></option>
                                                @foreach ($netsubjects as $netsubject)
                                                 <option value="{{$netsubject->id}}" <?php if($academics->netSubject ==$netsubject->id) echo'selected="selected"';?>>{{$netsubject->name}}</option>
                                                @endforeach
                                               
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                    <div id="pns-net-exe-block" style="display: none"><span style="color:red; ">I certify that, I am exempted as per UGC regulation. I shall upload NET Exemption certificate in upload tab.</span>

                                    </div>
                                </td>
                                <td>
                                    <div id="pns-net-certificate">
                                        <div class="form-group field-academic-netcertificateno">
                                            <label class="control-label" for="academic-netcertificateno">NET Certificate Number</label>
                                            <input type="text" id="academic-netcertificateno" class="form-control" name="netCertificateNo" maxlength="30" placeholder="Certificate No" value="{{$academics->netCertificateNo}}">

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-netpoints">

                                        <input type="hidden" id="academic-netpoints" class="form-control" name="Academic[netPoints]">

                                        <div class="help-block"></div>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    <strong>Note:</strong>
                    <label style="color:red">Only provide the academic details asked above. In the next step after validation you can able to fill the remaining details like Bachelors, M.Phil etc. </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" id="key-id-acadmic" name="key" value="0">
                    <input type="hidden" name="formId" value="5345">
                    <div class="form-group text-center">
                        <button type="submit" id="submitAcadmic" class="btn btn-warning" onclick="saveaca();">Save</button> &nbsp;

                    </div>
                </div>
            </div>
        </div>

    </div>


    @endforeach

@else

   <div class="panel-body">
        <div id="jx-cont-acad-res"></div>

        <div id="form-area-tab-22">
            <div class="form-group field-academic-qualification required has-success">
                <label class="control-label" for="academic-qualification">Qualification Pattern</label>
                <select id="academic-qualification" class="form-control" name="qualification">
                    <option value="">Select</option>
                    <option value="1">UG + PG + M.Phil / Ph.D</option>
                    <option value="2">Integrated Master`s</option>
                </select>

                <div class="help-block"></div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table" id="table-rec-acad-quali">

                        <tbody>
                            <tr>
                                <th style="width:10%;">Examination</th>
                                <th style="width:10%;">Name Of Degree</th>
                                <th style="width:15%;">Main Subject</th>
                                <th style="width:10%;">Year</th>
                                <th style="width:10%;">Result Type</th>
                                <th style="width:20%;">Overall Percentage/Final Grade Points Avg.(FGPA)</th>
                                <th style="width:22%;">Board/University/Institution</th>
                            </tr>
                            <tr>
                                <th>Masters`s Degree</th>
                                <td>
                                    <div class="form-group field-academic-pgcollege required">

                                        <input type="text" id="academic-pgcollege" class="form-control" name="pgCollege"  maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgsubject required">

                                        <input type="text" id="academic-pgsubject" class="form-control"  name="pgSubject" maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgyear required has-success"> 
                                      @php $currentYear = date('Y'); @endphp
                                        <select id="academic-pgyear" class="form-control" name="pgYear">
                                           <option value=""></option>
                                          @foreach (range( $currentYear, 1930) as $value) 
                                            <option value="{{$value}}">{{$value}}</option>
                                           @endforeach
                                          
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgperna required">

                                        <select id="academic-pgperna" class="form-control" name="pgPerNa" onchange="percen_grade();">
                                            <option value="1">Percentage</option>
                                            <option value="2">Grade</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgpercentage required">

                                        <input type="text" id="academic-pgpercentage" class="form-control" name="pgPercentage" onchange="percen_grade();">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pguniversity required">

                                        <input type="text" id="academic-pguniversity" class="form-control" name="pgUniversity" maxlength="255" >

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-pgpoints">

                                        <input type="hidden" id="academic-pgpoints" class="form-control" name="pgPoints">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <div class="form-group field-academic-netexemptionexplain">

                        <input type="hidden" id="academic-netexemptionexplain" class="form-control" name="netExemptionExplain" value="Not Required">

                        <div class="help-block"></div>
                    </div>
                    <table class="table">

                        <tbody>
                            <tr>
                                <th style="width:10%;">
                                    <div>Ph.D</div>
                                    <div class="form-group field-academic-phdna required">
                                        <label class="control-label">Applicable</label>
                                        <input type="hidden" name="phdNA" value="1">
                                        <div id="academic-phdna">
                                            <label>
                                                <input type="radio" name="phdNA" value="1"> No</label>
                                            <label>
                                                <input type="radio" name="phdNA" value="2"> Yes</label>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </th>

                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdregdate">
                                        <label class="control-label" for="academic-phdregdate">Date of Registration</label>
                                       <!--  <input type="text" id="academic-phdregdate" class="form-control hasDatepicker" name="phdRegDate" readonly="" placeholder="Date of Registration"> -->
                                        <div class='input-group date' id='phdRegDate'>
                                            {!! Form::text('phdRegDate', '',  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdsubdate">
                                        <label class="control-label" for="academic-phdsubdate">Date of Submission</label>
                                       <!--  <input type="text" id="academic-phdsubdate" class="form-control hasDatepicker" name="phdSubDate" readonly="" placeholder="Date of Submission"> -->
                                        <div class='input-group date' id='phdSubDate'>
                                            {!! Form::text('phdSubDate', '',  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:10%;">
                                    <div class="form-group field-academic-phdawarddate">
                                        <label class="control-label" for="academic-phdawarddate">Date of Award</label>
                                       <!--  <input type="text" id="academic-phdawarddate" class="form-control hasDatepicker" name="phdAwardDate" readonly="" placeholder="Date of Award"> -->
                                        <div class='input-group date' id='phdaward'>
                                            {!! Form::text('phdAwardDate','',  ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:30%;">
                                    <div class="form-group field-academic-phdthesistitle">
                                        <label class="control-label" for="academic-phdthesistitle">Thesis Title</label>
                                        <textarea id="academic-phdthesistitle" class="form-control" name="phdThesisTitle" rows="3"></textarea>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:20%;">
                                    <div class="form-group field-academic-phduniversity">
                                        <label class="control-label" for="academic-phduniversity">University</label> 
                                        <input type="text" id="academic-phduniversity" class="form-control" name="phdUniversity" maxlength="255">

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td style="width:5%;">
                                    <div class="form-group field-academic-phdpoints">

                                        <input type="hidden" id="academic-phdpoints" class="form-control" name="phdPoints">

                                        <div class="help-block"></div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <th colspan="2">Whether Qualified UGC / CSIR
                                    <br>/ Similarly accredited eligibility</th>

                                <td></td>
                                <td>
                                    <div class="form-group field-academic-net required">
                                        <label class="control-label" for="academic-net">NET</label>
                                        <select id="academic-net" class="form-control" name="net" onchange="netfunc()">
                                            <option value=""></option>
                                            <option value="1">JRF(UGC)</option>
                                            <option value="2">NET(UGC)</option>
                                            <option value="3">National Level Test Conducted by any other agency accredited by UGC</option>
                                            <option value="4">NET Exempted</option>
                                            <option value="5">None</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </td>
                                <td>
                                    <div id="pns-net-subject">
                                        <div class="form-group field-academic-netsubject">
                                            <label class="control-label" for="academic-netsubject">NET Subject</label>
                                          @php
                                            $netsubjects =App\NetSubject::all();
                                          @endphp
                                            <select id="academic-netsubject" class="form-control" name="netSubject">
                                                <option value=""></option>
                                                @foreach ($netsubjects as $netsubject)
                                                 <option value="{{$netsubject->id}}">{{$netsubject->name}}</option>
                                                @endforeach
                                               
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                    <div id="pns-net-exe-block" style="display: none"><span style="color:red; ">I certify that, I am exempted as per UGC regulation. I shall upload NET Exemption certificate in upload tab.</span>

                                    </div>
                                </td>
                                <td>
                                    <div id="pns-net-certificate">
                                        <div class="form-group field-academic-netcertificateno">
                                            <label class="control-label" for="academic-netcertificateno">NET Certificate Number</label>
                                            <input type="text" id="academic-netcertificateno" class="form-control" name="netCertificateNo" maxlength="30" placeholder="Certificate No">

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group field-academic-netpoints">

                                        <input type="hidden" id="academic-netpoints" class="form-control" name="Academic[netPoints]">

                                        <div class="help-block"></div>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    <strong>Note:</strong>
                    <label style="color:red">Only provide the academic details asked above. In the next step after validation you can able to fill the remaining details like Bachelors, M.Phil etc. </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" id="key-id-acadmic" name="key" value="0">
                    <input type="hidden" name="formId" value="5345">
                    <div class="form-group text-center">
                        <button type="submit" id="submitAcadmic" class="btn btn-warning" onclick="saveaca();">Save</button> &nbsp;

                    </div>
                </div>
            </div>
        </div>

    </div>
@endif

</div>
  </div>
  </div>
  </div>
  </div>
  </div>
</form>
@endif
               <!-- End -->
            


              
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
@endsection


