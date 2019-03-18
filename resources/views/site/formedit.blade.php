

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

               <!-- End -->
              
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
@endsection

