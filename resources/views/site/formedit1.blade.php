@extends('layouts.main')
@section('content')

<div class="panel panel-primary" style="width:95%; margin-right:2.5%; margin-left:2.5%">
			<div class="panel-heading">
				<h4 style="text-align: center; font-weight: bold;">JAWAHARLAL NEHRU FACULTY RECRUITMENT PORTAL</h4>
			</div>
			<div class="panel-body">
<div class="text-center" >
   <marquee><p style="font-weight:bold; color:#000;">Application for <?= $model->jobposts->code ?> in <?= $model->departments->name ?>  Advertisement No. <?= $model->jobposts->code ?> </p></marquee> 
<div class="table-responsive">  
  <table border=2>
   <tr valign="middle">
     <td height="34" colspan="2"> <div align="left"><strong><font color="#990000">Note : Kindly read Guidelines carefully before filling the form.</font></strong></div></td>
     </tr>
	
	 
   
   <?php if($model->post==1){ ?>
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
            <li>Good academic record as defined by the concerned university with at least 55% marks (or an equivalent grade in point scale wherever �grading system is followed) at the Master&#8217;s Degree level in a relevant subject from an Indian University, or an equivalent degree from an accredited foreign university. </li>
            <li>Besides fulfilling the above qualifications, the candidate must have cleared the National Eligibility Test (NET) conducted by the UGC, CSIR or similar test accredited by the UGC like SLET/SET. </li>
            <li>Notwithstanding anything contained in sub-clauses (i) and (ii) to this Clause, candidates, who are, or have been awarded a Ph.D. Degree in accordance with the University Grants Commission (Minimum Standards and Procedure for Award of Ph.D. Degree) Regulations 2009, shall be exempted from the requirement of the minimum eligibility condition of NET/SLET/SET for recruitment and appointment of Assistant Professor or equivalent positions in Universities/Colleges/Institutions. </li>
            <li>NET/SLET/SET shall also not be required for such Masters Programmes in disciplines for which NET/SLET/SET is not conducted. </li>
            <li>The candidates applying for the post of Assistant Professor are requested to submit a certificate to the effect that the Ph.D. has been awarded in accordance with the UGC Regulations, 2009, to get exemption from NET. </li>
            <li>The candidates applying for the post of Assistant Professor who were enrolled for Ph.D. before July 11, 2009 will be governed by the 4th�Amendment, UGC Regulations 2016, which is as under: </li>
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
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever �grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
            <li style="color:red">Candidate must have cleared the National Eligibility Test (NET)</li>
            </ol>
        </div>
   </td>
   </tr>
   <?php } ?>
   
   
   
   
   <?php if($model->post==2){ ?>
  
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
      <li>A Master�s Degree with at least 55% marks (or an equivalent grade in a point scale wherever grading system is followed.</li>
      <li>A minimum of eight years of experience of teaching and/or research in an academic/research position equivalent to that of Assistant Professor in a University, College or Accredited Research Institution/industry excluding the period of Ph.D. research with evidence of published work and a minimum of 5 publications as books and/or research/policy papers.</li>
    </ol>
     </div>
   </td>
   <td>
   <div align="justify" style="margin-right:1%">
          <ol>
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever �grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
            <li style="color:red">Ph.D. is required.(Form Section 2.1-Ph.D.)</li>
            <li style="color:red">At least total 8 years or of experience of teaching and/or research in an academic/research position.(Form Section 3.1)</li>
            <li style="color:red">Minimum 5 Research Papers/Articles in Journal/Conference Proceedings or 5 Research Publication self authored/co-authored/edited book/chapters in books or combination of both must be atleast 5.(Form Section 4.1 and 4.2)</li>
            <li style="color:red">Ph.D. Research Supervision in Research Guidance is required where at least 1 student have submitted or awarded his/her thesis .(Form Section 4.3 Ph.D.)</li>
            </ol>
        </div>
	</td>
   </tr>
   <?php } ?>
   
   
   <?php if($model->post==3){ ?>
  
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
  OR<br>(B)	An outstanding professional, with established reputation in the relevant field, who has made 	significant contributions to the knowledge in the concerned/allied/relevant discipline, to be 	substantiated by credentials.</div>
   </td>
    <td>
   <div align="justify" style="margin-right:1%">
          <ol>
            <li style="color:red">At least 55%(50% for SC/ST Applicants) marks (or an equivalent grade in point scale wherever �grading system is followed) at the Master's Degree level.(Form Section 2.1-Percentage/Grade#)</li>
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
   </div>
   <br />
</div>
<hr />
<div class="row" id="error">
    {!! Form::open(['id' => 'user-profile-form']) !!}
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    Are you eligible for this post?
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div id='jx-profile-content'></div>
            <div id="form-area-tab-11"> 
              
                <div class="row">
                    <div class="col-md-3" id="catego">
						<input type="hidden" name="formId" value="<?= $formId ?>">
						<select id="profile-category" class="form-control" name="Profile[category]">
						<option value=""></option>
						<option value="1">Unreserved(UR)</option>
						<option value="2">OBC</option>
						<option value="3">OBC+PWD(OH)</option>
						<option value="4">OBC+PWD(VH)</option>
						<option value="5">SC</option>
						<option value="6">SC+PWD(OH)</option>
						<option value="7">SC+PWD(VH)</option>
						<option value="8">ST</option>
						<option value="9">ST+PWD(OH)</option>
						<option value="10">ST+PWD(VH)</option>
						<option value="11" selected="">UR+PWD(OH)</option>
						<option value="12">UR+PWD(VH)</option>
						</select>
					</div>
					<div class="col-md-1">
						<div>.</div>
						<button type="submit" class="btn btn-warning" onclick="catsave()">Save</button>
                    </div>
					<?php if(isset($model->category)){ ?>
					<div class="col-md-3">
						<div>.</div>
						<strong><?php if($model->category > 0 && $model->category <= 12 ){ echo "You have selected ".$model->categories->name." as your category"; } ?></strong>
                    </div>
					<div class="col-md-5">
					<STRONG ID="head1" style="color:red"></STRONG><br>
						<ol id="err" style="color:red">
							
						<ol>
					</div>
					<?php } ?>
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

    {!! Form::close() !!}
</div>



<script>
        function catsave(){     
		   $.ajax({
                url: '/jnunew/index.php/profile/apply1',
                type: 'post',
                data: $('#user-profile-form').serialize(),
                dataType: 'html',
                success: function (data) {
                    var y = JSON.parse(data);
                    
                    if (y.status) {
                        $('#jx-profile-content').html(y.message).show();
                        $('#rec-user-form').tabs('load', 0);
                        $('#edit-but-11').show();
                        $('#display-area-tab-11').show();
                        $('#form-area-tab-11').hide();
                    } else {
                        $('#jx-profile-content').html(y.message).show();
                        $('#edit-but-11').hide();
                        $('#display-area-tab-11').hide();
                        $('#form-area-tab-11').show();
                    }
                    return false;

                },
                error: function () {
                    alert('An error has occured while saving form. Please reload the page and resubmit your form.');
                    return false;
                }
            });
		}
</script>

<?php if($model->category!=0){ ?>

<div class="row">
	{!! Form::open(['id' => 'acad-qual-form-du']) !!}
   
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    2.1 Academic Qualifications <font style="color:red">Note: Provide complete qualification as you will not be able to edit further</font>
            </div>
			<div class="col-md-6">
                    <div class="text-right">  
                        <span >
						<button type="button" id="edit-but-22" class="btn btn-info" onclick="aca();">Edit Details</button>
						</span>
                    </div>
                </div>
        </div>
		</div>
		
        <div class="panel-body">
            <div id='jx-cont-acad-res'></div>
			
            <div id="form-area-tab-22" style="display: block;"> 
                <div class="form-group field-academic-qualification required">
<label class="control-label" for="academic-qualification">Qualification Pattern</label>
<select id="academic-qualification" class="form-control" name="Academic[qualification]">
<option value="">Select</option>
<option value="1" selected="">UG + PG + M.Phil / Ph.D</option>
<option value="2">Integrated Master`s</option>
</select>

<div class="help-block"></div>
</div>               
				<div class="row">
				<div class="table-responsive">  
                    <table class="table" id="table-rec-acad-quali"> 
					
                        <tbody><tr>
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
                            <td><div class="form-group field-academic-pgcollege required">

<input type="text" id="academic-pgcollege" class="form-control" name="Academic[pgCollege]" value="sd" maxlength="255">

<div class="help-block"></div>
</div></td>
                            <td> <div class="form-group field-academic-pgsubject required">

<input type="text" id="academic-pgsubject" class="form-control" name="Academic[pgSubject]" value="sdasdas" maxlength="255">

<div class="help-block"></div>
</div></td>
							<td>    <div class="form-group field-academic-pgyear required">

<select id="academic-pgyear" class="form-control" name="Academic[pgYear]">
<option value="2019" selected="">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
</select>

<div class="help-block"></div>
</div></td>
							<td> <div class="form-group field-academic-pgperna required">

<select id="academic-pgperna" class="form-control" name="Academic[pgPerNa]" onchange="percen_grade();">
<option value="1" selected="">Percentage</option>
<option value="2">Grade</option>
</select>

<div class="help-block"></div>
</div></td>
                            <td>  <div class="form-group field-academic-pgpercentage required">

<input type="text" id="academic-pgpercentage" class="form-control" name="Academic[pgPercentage]" value="76.00" onchange="percen_grade();">

<div class="help-block"></div>
</div></td>
                            <td> <div class="form-group field-academic-pguniversity required">

<input type="text" id="academic-pguniversity" class="form-control" name="Academic[pgUniversity]" value="fgdfg" maxlength="255">

<div class="help-block"></div>
</div></td>
                          <td><div class="form-group field-academic-pgpoints">

<input type="hidden" id="academic-pgpoints" class="form-control" name="Academic[pgPoints]" value="30">

<div class="help-block"></div>
</div> </td>
                        </tr>
                        

                    </tbody></table>
</div>
<div class="table-responsive">  
                    <div class="form-group field-academic-netexemptionexplain">

<input type="hidden" id="academic-netexemptionexplain" class="form-control" name="Academic[netExemptionExplain]" value="Not Required">

<div class="help-block"></div>
</div><table class="table">
                       
                        <tbody><tr>
                            <th style="width:10%;"><div>Ph.D</div>  <div class="form-group field-academic-phdna required">
<label class="control-label">Applicable</label>
<input type="hidden" name="Academic[phdNA]" value="1"><div id="academic-phdna"><label><input type="radio" name="Academic[phdNA]" value="1"> No</label>
<label><input type="radio" name="Academic[phdNA]" value="2" checked=""> Yes</label></div>

<div class="help-block"></div>
</div></th>

                        <td style="width:10%;"> 
                            <div class="form-group field-academic-phdregdate">
<label class="control-label" for="academic-phdregdate">Date of Registration</label>
<input type="text" id="academic-phdregdate" class="form-control hasDatepicker" name="Academic[phdRegDate]" value="2010-03-15" readonly="" placeholder="Date of Registration">


<div class="help-block"></div>
</div></td>
                        <td style="width:10%;"> <div class="form-group field-academic-phdsubdate">
<label class="control-label" for="academic-phdsubdate">Date of Submission</label>
<input type="text" id="academic-phdsubdate" class="form-control hasDatepicker" name="Academic[phdSubDate]" value="2015-03-28" readonly="" placeholder="Date of Submission">


<div class="help-block"></div>
</div></td>
                        <td style="width:10%;"> <div class="form-group field-academic-phdawarddate">
<label class="control-label" for="academic-phdawarddate">Date of Award</label>
<input type="text" id="academic-phdawarddate" class="form-control hasDatepicker" name="Academic[phdAwardDate]" value="2015-03-30" readonly="" placeholder="Date of Award">


<div class="help-block"></div>
</div></td>
                        <td style="width:30%;"> <div class="form-group field-academic-phdthesistitle">
<label class="control-label" for="academic-phdthesistitle">Thesis Title</label>
<textarea id="academic-phdthesistitle" class="form-control" name="Academic[phdThesisTitle]" rows="3">sdas</textarea>

<div class="help-block"></div>
</div></td>
                        <td style="width:20%;"><div class="form-group field-academic-phduniversity">
<label class="control-label" for="academic-phduniversity">University</label>
<input type="text" id="academic-phduniversity" class="form-control" name="Academic[phdUniversity]" value="bkbkj" maxlength="255">

<div class="help-block"></div>
</div></td>
                        <td style="width:5%;"> <div class="form-group field-academic-phdpoints">

<input type="hidden" id="academic-phdpoints" class="form-control" name="Academic[phdPoints]" value="40">

<div class="help-block"></div>
</div> </td>

                        </tr>
                        
                        <tr>
                            <th colspan="2">Whether Qualified UGC / CSIR  <br>/ Similarly accredited eligibility</th>

                            <td></td>
                            <td> <div class="form-group field-academic-net required">
<label class="control-label" for="academic-net">NET</label>
<select id="academic-net" class="form-control" name="Academic[net]" onchange="netfunc()">
<option value=""></option>
<option value="1" selected="">JRF(UGC)</option>
<option value="2">NET(UGC)</option>
<option value="3">National Level Test Conducted by any other agency accredited by UGC</option>
<option value="4">NET Exempted</option>
<option value="5">None</option>
</select>

<div class="help-block"></div>
</div></td>
                            <td><div id="pns-net-subject"><div class="form-group field-academic-netsubject">
<label class="control-label" for="academic-netsubject">NET Subject</label>
<select id="academic-netsubject" class="form-control" name="Academic[netSubject]">
<option value=""></option>
<option value="46">Adult Education/ Continuing Education/ Andragogy/ Non Formal Education</option>
<option value="8" selected="">Anthropology</option>
<option value="48">Arab Culture and Islamic Studies</option>
<option value="29">Arabic</option>
<option value="58">Archaeology</option>
<option value="36">Assamese</option>
<option value="19">Bengali</option>
<option value="79">Bodo</option>
<option value="53">Buddhist, Jaina, Gandhian and Peace Studies</option>
<option value="81">Chemical Sciences</option>
<option value="32">Chinese</option>
<option value="9">Commerce</option>
<option value="62">Comparative Literature</option>
<option value="54">Comparative Study of Religions</option>
<option value="72">Computer Science and Applications</option>
<option value="59">Criminology</option>
<option value="12">Defence and Strategic Studies</option>
<option value="33">Dogri</option>
<option value="80">Earth Sciences</option>
<option value="2">Economics</option>
<option value="10">Education</option>
<option value="73">Electronic Science</option>
<option value="85">Engineering Sciences</option>
<option value="30">English</option>
<option value="74">Environmental Sciences</option>
<option value="61">Folk Literature</option>
<option value="68">Forensic Science</option>
<option value="39">French</option>
<option value="66">Geography</option>
<option value="44">German</option>
<option value="37">Gujarati</option>
<option value="20">Hindi</option>
<option value="7">History</option>
<option value="13">Home Science</option>
<option value="77">Human Rights and Duties</option>
<option value="49">Indian Culture</option>
<option value="75">International and Area Studies</option>
<option value="45">Japanese</option>
<option value="21">Kannada</option>
<option value="70">Kashmiri</option>
<option value="71">Konkani</option>
<option value="50">Labour Welfare/Personnel Management/Industrial Relations/ Labour and Social Welfare/Human Resource Management</option>
<option value="51">Law</option>
<option value="52">Library and Information Science</option>
<option value="82">Life Sciences</option>
<option value="31">Linguistics</option>
<option value="18">Maithili</option>
<option value="22">Malayalam</option>
<option value="17">Management</option>
<option value="35">Manipuri</option>
<option value="38">Marathi</option>
<option value="55">Mass Communication and Journalism</option>
<option value="83">Mathematical Sciences</option>
<option value="57">Museology &amp; Conservation</option>
<option value="16">Music</option>
<option value="34">Nepali</option>
<option value="23">Odia</option>
<option value="69">Pali</option>
<option value="56">Performing Arts ? Dance/Drama/Theatre</option>
<option value="42">Persian</option>
<option value="4">Philosophy</option>
<option value="47">Physical Education</option>
<option value="84">Physical Sciences</option>
<option value="3">Political Science</option>
<option value="15">Population Studies</option>
<option value="76">Prakrit</option>
<option value="5">Psychology</option>
<option value="14">Public Administration</option>
<option value="24">Punjabi</option>
<option value="43">Rajasthani</option>
<option value="41">Russian</option>
<option value="25">Sanskrit</option>
<option value="63">Sanskrit Traditional Subjects</option>
<option value="67">Social Medicine &amp; Community Health</option>
<option value="11">Social Work</option>
<option value="6">Sociology</option>
<option value="40">Spanish</option>
<option value="26">Tamil</option>
<option value="27">Telugu</option>
<option value="78">Tourism Administration and Management</option>
<option value="60">Tribal and Regional Language/Literature</option>
<option value="28">Urdu</option>
<option value="65">Visual Arts</option>
<option value="64">Women Studies </option>
</select>

<div class="help-block"></div>
</div> </div>
                                <div id="pns-net-exe-block" style="display: none"><span style="color:red; ">I certify that, I am exempted as per UGC regulation. I shall upload NET Exemption certificate in upload tab.</span>
                                    
                                </div>
                            </td>
                            <td><div id="pns-net-certificate"> <div class="form-group field-academic-netcertificateno">
<label class="control-label" for="academic-netcertificateno">NET Certificate Number</label>
<input type="text" id="academic-netcertificateno" class="form-control" name="Academic[netCertificateNo]" value="57868689" maxlength="30" placeholder="Certificate No">

<div class="help-block"></div>
</div></div></td>
                            <td><div class="form-group field-academic-netpoints">

<input type="hidden" id="academic-netpoints" class="form-control" name="Academic[netPoints]" value="0">

<div class="help-block"></div>
</div> </td>
							 
                        </tr>

                    </tbody></table>
					<strong>Note:</strong><label style="color:red">Only provide the academic details asked above. In the next step after validation you can able to fill the remaining details like Bachelors, M.Phil etc. </label>
                </div>              
                </div>              
			
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" id="key-id-acadmic" name="key" value="5d6d56d699723fc44654ea5d80188d0ea0934d96060f3d17f48ffc02cbc827da6012">                        <input type="hidden" name="formId" value="5345">                        <div class="form-group text-center">
                            <button type="submit" id="submitAcadmic" class="btn btn-warning" onclick="saveaca();">Save</button> &nbsp;
                           
                        </div>
                    </div>
                </div>
            </div>
			<?php 
			if($row>0){
			?>
			
			
			
			
            <div id="display-area-tab-22"> 
                <div class="row">
				<div class="table-responsive">  
                    <table class="table-striped table"  style="width:100">       
                        <tr>
                            <th style="width:10%;">Examination</th>
                            <th style="width:20%;">Name Of Degree</th>
                            <th style="width:25%;">Main Subject</th>
                            <th style="width:10%;">Percentage/Grade<sup>#</sup> </th>
                            <th style="width:10%;">Year</th>
                            <th style="width:22%;">Board/University/Institution</th>
                            <?php if (!empty($show['uAcadmic'])) : ?> <th style="width:10"> File </th>  <?php endif; ?>
                          <?php if($post == 5){?>  <th style="width:3%;">Points</th><?php } ?>
                        </tr>

                        
                        <tr>
                            <th>Masters`s Degree</th>
                            <td><?= $acmodel->pgCollege ?></td>
                            <td><?= $acmodel->pgSubject ?></td>
                            <td id="gra"><?= $acmodel->pgPercentage ?></td>
                            <td><?= $acmodel->pgYear ?></td>
                            <td><?= $acmodel->pgUniversity ?></td>
                            <?php if (!empty($show['uAcadmic'])){ ?> 
                                <?php if (!empty($acmodel->pgUpload)){ ?>
                                    <td><a href="<?= Yii::$app->params['upDisAc'] . $acmodel->pgUpload ?>" target="blank">View</a></td>
                                    <?php
								}
                                else {
                                    array_push($validate, 'Masters Degree Certificate File not uploaded please check upload section');
                                    ?>
                                    <td><sapan class="nared">File Not Uploaded</sapan> </td>
								<?php } ?>
							<?php } ?>                  
                        <?php if($post == 5){?><td><?= $acmodel->pgPoints ?></td><?php } ?>
                        </tr>
                        
                        <?php if ($acmodel->phdNA === 2) { ?>
                            <tr>
                                <th>Ph.D </th>
                                <td><strong>Thesis Title :</strong>  <?= $acmodel->phdThesisTitle ?></td>
                                <td><strong>University : </strong>  <?= $acmodel->phdUniversity ?></td>
                                <td><strong>Registration Date :</strong>  <?= $acmodel->phdRegDate ?></td>
                                <td><strong>Submission Date :</strong> <?= $acmodel->phdSubDate ?></td>
                                <td><strong>Award Date :</strong>  <?= $acmodel->phdAwardDate ?></td>
                                <?php if (!empty($show['uAcadmic'])){ ?> 
                                    <?php if (!empty($acmodel->phdUpload)) {?>
                                        <td><a href="<?= Yii::$app->params['upDisAc'] . $acmodel->phdUpload ?>" target="blank">View</a></td>
                                        <?php
									}
                                    else {
                                        array_push($validate, 'Ph.D Supporting File not Uploaded');
                                        ?>
                                        <td><sapan class="nared">File Not Uploaded</sapan> </td>
									<?php } ?>
								<?php } ?>
                            <?php if($post == 5){?><td><strong> </strong>  <?= $acmodel->phdPoints ?></td><?php } ?>
                            </tr>                        
                        <?php } else{ ?>
                            <tr id="phd1">
                                <th>Ph.D</th>
                                <td>NA</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>NA</td>
						<?php if (!empty($show['uAcadmic'])) { ?> <td>NA</td><?php } ?>
                                <?php if($post == 5){?><td>NA</td><?php } ?>
                            </tr>
                        <?php } ?>
                        
                        <tr>
                            <td colspan="2"> <strong>Whether Qualified UGC/CSIR/Similarly accredited eligibility </strong> </td>
                            <td id="net"> <strong>Net :</strong> </td>                       
                            <?php if ($acmodel->net == 1 || $acmodel->net == 2 || $acmodel->net == 3){ ?>
                                <td> <strong>NET Subject :</strong> </td>
                                <td colspan="2"> <strong>NET Certificate Number :</strong><?= $acmodel->netCertificateNo ?></td>
                                <?php if (!empty($show['uAcadmic'])) { ?> 
                                    <?php if (!empty($acmodel->netUpload)) { ?>
                                        <td><a href="" target="blank">View</a></td>
                                        <?php
                                    }else{
                                        array_push($validate, 'UGC/CSIR/Similarly accredited eligibility Supporting File not Uploaded');
                                        ?>
                                        <td><span class="nared">File Not Uploaded</span> </td>
									<?php }  ?>
								<?php}?>                   
							<?php } else if ($acmodel->net == 4) { ?>
                            <td colspan="3"><strong>Exemption Explain :</strong><p>Please upload NET Exemption certificate in upload tab</p></td>
                            <?php if (!empty($show['uAcadmic'])) { ?> 
                                <td></td>
                            <?php } ?>
							<?php } else{ ?>
                            <td colspan="3"> </td>   
                            <?php if (!empty($show['uAcadmic'])) { ?> 
                                <td></td>
                            <?php } ?>
							 <?php if (!empty($show['uAcadmic'])) { ?> 
                                    <?php if (!empty($acmodel->enetUpload)) { ?>
                                        <td><a href="" target="blank">View</a></td>
                                        <?php
									}
                                    else {
                                        array_push($validate, 'Exemption Explain Supporting File not Uploaded');
                                        ?>
                                        <td><span class="nared">File Not Uploaded</span> </td>
									<?php } ?>
							 <?php } ?> 
							<?php } ?>

                       <?php if($post == 5){?> <td> <?php
                            if ($post == 1) {
                                echo $acmodel->netPoints;
                            } else {
                                echo "NA";
                            }
					   ?></td><?php } ?>
                        </tr>
                    </table>
					<strong>Note:</strong><label style="color:red">Only provide the academic details asked above. In the next step after validation you can able to fill the remaining details like Bachelors, M.Phil etc. </label>
                </div>
                </div>
               
            </div>
			<?php  } ?>
		
        </div>
    </div>
    {!! Form::close() !!}

</div>

<script>
    function saveaca() {
            $.ajax({
                url: '/jnurecRC57/index.php/academic/eligible',
                type: 'post',
                data: $('#acad-qual-form-du').serialize(),
                dataType: 'html',
                success: function (data) {
                  y = JSON.parse(data);
				  //alert(y.response);
                    if (y.response === 1) {
                
                        return false;
                    } else {
                         if(y.dates === 1){
						   alert('Ph.D. fields are empty');
					   }
                        return false;
                    }
                },
                error: function () {
                    alert('An error has occured while saving form. Please reload the page and resubmit your form.');
                    return false;
                }
            });
       
		}
	
 function netfunc(){
	 var k = $("#academic-net").val();
	 //alert(k);
           if(k == 4){
                $('#pns-net-subject').hide();
                $('#pns-net-certificate').hide();
                $('#pns-net-exe-block').show();
		   }else if(k == 5){
			   $('#pns-net-subject').hide();
                $('#pns-net-certificate').hide();
                $('#pns-net-exe-block').hide();
		   }else {
			    $('#pns-net-subject').show();
                $('#pns-net-certificate').show();
		   }
   
          
        }
       
</script>
<div  id="help21" style="display: none">
    <?= Help::resolveHelpContent($post, 21) ?> 
</div>

<div class="row">
{!! Form::open(['id' => 'teachingexpform']) !!}
   
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    3.1 Full-time Teaching Experience <br><font style="color:blue">Note: Provide all your Full-time and Persent Teaching Experience as you will not be able to edit further</font>
                </div>
               

            </div>
        </div>
        <div class="panel-body">
            <div id="teachingexpcontent">
            </div>
            <div class="row">
                <div class="col-md-11">
                    <strong><span>Please Leave blank if you don't have relevant experience </span> ( Period of acquiring M.Phil degree / 
                        residency period for pursuing Ph.D degree / Part-time Teaching/ Guest Lecturer / Contract Position / Teaching Assistantship shall not be considered as experience/ research experience ) 
                        (Each period of experience claimed must be supported by a Experience Certificate issued by the employer). <font style="color:red">Note: Please also specify your current working experience here.</font> </strong>
                </div>
                <div class="col-md-1" >
                  
                </div>
            </div>
            <br>
			<div class="table-responsive">  
            <table class="table table-responsive table-bordered table-striped table-condensed" id="teaching-exp-table">
                <thead>
                    <tr id="tr-teach-exp-0">
                        <td style="width: 1%;">#</td>
                        <td style="width: 20%;">Name of University / College / Institution / Organization</td>
                        <td style="width: 15%;">Designation</td>
                        <td style="width: 6%;">Status</td>
                        <td style="width: 10%;">Scale/Band and Grade pay</td>
                        <?php if ($post == 1) { ?>                         
                            <td style="width: 10%;">Nature of Assignment / Training</td>
                        <?php }else{ ?>
                            <td style="width: 10%;">Classes Taught/Training</td>
                            <td style="width: 10%;">Course / Subject</td>
                        <?php } ?>
                        <td style="width: 8%;">Date From <br>(yyyy-mm-dd)</td>
                        <td style="width: 8%;">Date To  <br>(yyyy-mm-dd)</td>
                        <td style="width: 4%;" id="exp1">Time Period</td>
                        <td style="width: 3%;">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> <div class="form-group field-researcharticle-pubtype required">

<select id="researcharticle-pubtype" class="form-control" name="Researcharticle[pubType]">
<option value=""></option>
<option value="1">Research Paper / Review Article</option>
<option value="2">Conference Proc. Full Length Paper</option>
</select>

<div class="help-block"></div>
</div></td>
                        <td> <div class="form-group field-researcharticle-title required">

<textarea id="researcharticle-title" class="form-control" name="Researcharticle[title]" row="2"></textarea>

<div class="help-block"></div>
</div></td>
                        <td><div class="form-group field-researcharticle-journalno required">

<input type="text" id="researcharticle-journalno" class="form-control" name="Researcharticle[journalNo]" maxlength="255">

<div class="help-block"></div>
</div></td>
                        <td><div class="form-group field-researcharticle-issnisbnno required">

<input type="text" id="researcharticle-issnisbnno" class="form-control" name="Researcharticle[issnIsbnNo]" maxlength="100">

<div class="help-block"></div>
</div></td>
                        <td><div class="form-group field-researcharticle-refereed required">

<select id="researcharticle-refereed" class="form-control" name="Researcharticle[refereed]">
<option value=""></option>
<option value="1">No</option>
<option value="2">Yes</option>
</select>

<div class="help-block"></div>
</div></td>
                        <td> <div class="form-group field-researcharticle-author required">

<select id="researcharticle-author" class="form-control" name="Researcharticle[author]">
<option value=""></option>
<option value="1">Sole</option>
<option value="2">First Author</option>
<option value="3">Corresponding Author</option>
<option value="4">Supervisor</option>
<option value="5">Mentor</option>
<option value="6">Other</option>
</select>

<div class="help-block"></div>
</div></td>  
                        <td><div class="form-group field-researcharticle-year required">

<select id="researcharticle-year" class="form-control" name="Researcharticle[year]">
<option value=""></option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
</select>

<div class="help-block"></div>
</div></td>
						<td><div class="form-group field-researcharticle-sp_points">

<input type="text" id="researcharticle-sp_points" class="form-control" name="Researcharticle[sp_points]">

<div class="help-block"></div>
</div></td>                        
                        <td><div class="form-group">
                                <input type="hidden" name="articleKey" value="5345">                                <input type="hidden" name="articleref" value="0">                                <button type="submit" id="btn-pub-article" class="btn btn-xs btn-warning">Save &amp; Add</button>                            </div></td>
                    </tr>
					
					


                    <?php if (!empty($teachings)) : ?>
                        <?php foreach ($teachings as $key => $teach): ?>
						<?php $hash = Crypt::encrypt($teach->id); ?>    
                            <tr id=<?= "tr-teach-exp-" . $hash ?> >
                                                  
                                <td><?= $key + 2 ?></td>
                                <td><a href="#" class="teach-exp-xedit"  data-name="university" data-type="textarea"  data-pk="<?= $hash ?>"  data-title="Enter University / College / Institution"><?= $teach->university ?></a></td>
                                <td><a href="#" class="teach-exp-xedit"  data-name="designation" data-type="textarea"  data-pk="<?= $hash ?>"  data-title="Enter Designation"><?= $teach->designation ?></a></td>
                                <td><a href="#" class="teach-exp-xedit-select"  data-name="status" data-type="select"   data-pk="<?= $hash ?>"  data-title="Status" data-value=<?= $teach->status ?> ></a></td>
                                <td><a href="#" class="teach-exp-xedit"  data-name="payScale" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="Pay Scale(with PB & GP/AGP)"  ><?= $teach->payScale ?></a></td>
                                <?php if ($post == 1) : ?>
                                <?php else : ?>
                                    <td><a href="#" class="teach-exp-xedit-classes"  data-name="subTaught" data-type="select"   data-pk="<?= $hash ?>"  data-title="Classes Taught/Training"  ></a></td>
                                <?php endif; ?>
                                <td><a href="#" class="teach-exp-xedit"  data-name="natureAssignment" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="Nature of Assignment"  ><?= $teach->natureAssignment ?></a></td>
                                <td><a href="#" class="teach-exp-xedit-date"  data-name="from" data-type="date"   data-pk="<?= $hash ?>"  data-title="From"  ><?= $teach->from ?></a></td>
                                <td><a href="#" class="teach-exp-xedit-date"  data-name="to" data-type="date"   data-pk="<?= $hash ?>"  data-title="From"  ><?= $teach->to ?></a></td>
                                <td><?= $teach->displayTimePeriod() ?> </td>
                                <td>
                                   <button type="button" class="btn btn-xs btn-danger teacher-exp-delete" onclick="deleteTeacherExp('tr-teach-exp-<?php echo $hash; ?>');">Delete</button>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </tbody>

            </table>
        </div>
        </div>
    </div>

   {!! Form::close() !!}
</div>
<script>
      
$(document).ready(function(){
	
    $('#teachingexpform').on('beforeSubmit', function (event) {
    var form = $(this);
     if (form.find('.has-error').length) {
          return false;
           }

    $.ajax({
    url: '" .    route('teachingexp.save1') . "',
            type: 'post',
            data: form.serialize(),
            dataType: 'html',
            success: function(data) {
               var y = JSON.parse(data);
               console.log(y);
			   //alert(y.response);
                    if (y.response === 1)
            {
            var tableTeachExp = document.getElementById('teaching-exp-table')

                    var rowCount = tableTeachExp.rows.length;
                    var row = tableTeachExp.insertRow(2);
                    row.id = 'tr-teach-exp-'.concat(y.id);
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    var cell7 = row.insertCell(7);
                    var cell8 = row.insertCell(8);
                    var cell9 = row.insertCell(9);
					var cell10 = row.insertCell(10);
                    if(".$model->post."!=1){
                    var cell10 = row.insertCell(10);
                        }
                    cell0.innerHTML = 1 + parseInt(tableTeachExp.rows[ rowCount - 1 ].cells[0].innerHTML);
                    cell1.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"university\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter University / College / Institution\">', y.university, '</a>');
                    cell2.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"designation\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter Designation\">', y.designation, '</a>');
                    cell3.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic-select\"  data-name=\"status\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Select Status\">', y.status, '</a>');
                    cell4.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"payScale\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Pay Scale\">', y.payScale, '</a>');
                    cell5.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"Classes Taught/Training\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Classes Taught/Training\">', y.subTaught, '</a>');            
                 if(".$model->post."===1){
                    cell6.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"natureAssignment\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter Nature of Assignment\">', y.natureAssignment, '</a>');
                    cell7.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dy-date\"  data-name=\"from\" data-type=\"date\"  data-pk='.concat(y.id, ' data-title=\"From date\">', y.from, '</a>');
                    cell8.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dy-date\"  data-name=\"to\" data-type=\"date\"  data-pk='.concat(y.id, ' data-title=\"To Date\">', y.to, '</a>');
                    cell9.innerHTML = y.point;
                    cell10.innerHTML = y.formNo;
                    }else{
                    cell5.innerHTML = '<a href=\"#\" class=\"teach-exp-classes-dynamic\"  data-name=\"subTaught\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Classes Taught/Training\">', y.subTaught, '</a>');
                    cell6.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dynamic\"  data-name=\"natureAssignment\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter Nature of Assignment\">', y.natureAssignment, '</a>');
                    cell7.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dy-date\"  data-name=\"from\" data-type=\"date\"  data-pk='.concat(y.id, ' data-title=\"From date\">', y.from, '</a>');
                    cell8.innerHTML = '<a href=\"#\" class=\"teach-exp-xedit-dy-date\"  data-name=\"to\" data-type=\"date\"  data-pk='.concat(y.id, ' data-title=\"To Date\">', y.to, '</a>');
                    cell9.innerHTML = y.point;
                    cell10.innerHTML = y.formNo;                    
                      }             
                    
                   for (var i = 1; i <= rowCount; i++){
            tableTeachExp.rows[ i ].cells[0].innerHTML = i;
            }
            document.getElementById('teachingexpform').reset();
                    var reply = "<div class='alert alert-success' role='alert'>Full-time Teaching Experience Row Successfully Saved (Please check second row of this table)</div>";
                    $('#teachingexpcontent').html(reply).show().fadeOut(7000);
                    return false;
            } else{
            var reply = "<div class='alert alert-danger' role='alert'>Please provide the valid data</div>";
                    $('#teachingexpcontent').html(reply).show().fadeOut(7000);
                    return false;
            }

            },
            error: function() {
           // alert('An error has occured while adding a new block.');
                    var reply = "<div class='alert alert-danger' role='alert'>Please provide the valid data</div>";
                    $('#teachingexpcontent').html(reply).show().fadeOut(70000);
                    return false;
            }
    });
            return false;
    });

          }); 
          
   
    function deleteTeacherExp(x)
    {
        if (confirm("Do you want to delete this Entry") == true) {

            var tempid = x.split('-')[3];
            $.ajax({
                url: '<?=  route('teachingexp.delete1') ?>',
                type: 'post',
                data: {index: tempid, referenceId: "<?= $teachingKey ?>"},
                dataType: 'html',
                error: function () {
                    alert('An error has occured while deleting.');
                    return false;
                },
                success: function (data) {
                    if (data) {
                        var row = document.getElementById(x);
                        row.parentNode.removeChild(row);
                        var reply = "<div class='alert alert-warning' role='alert'>Data Deleted Successfully</div>";
                        $('#teachingexpcontent').html(reply).show();
                    }

                },
            });
        } else
        {
            return false;
        }
    }

</script>



<script>


    $(document).ready(function () {
        $.fn.editable.defaults.mode = 'inline';
        $('.teach-exp-xedit').editable({
            url: ' <?=  route('teachingexp.update') ?>',
            success: function (response, newValue) {

            }
        });
        $('.teach-exp-xedit-select').editable({
            source: [
                {value: 1, text: 'Permanent'},
                {value: 2, text: 'Ad-hoc'},
                {value: 3, text: 'Temporary'}
            ],
            url: '<?=  route('teachingexp.update') ?>',
            success: function (response, newValue) {
            },
        });
        $('.teach-exp-xedit-select').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $('.teach-exp-xedit-classes').editable({
            source: [
                {value: 1, text: 'Undergraduate'},
                {value: 2, text: 'Postgraduate'},
                {value: 3, text: 'Other'}
            ],
            url: '<?=  route('teachingexp.update') ?>',
            success: function (response, newValue) {
            },
        });
        $('.teach-exp-xedit-classes').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $('.teach-exp-xedit-classes').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $('.teach-exp-xedit-date').editable({
            format: 'yyyy-mm-dd',
            viewformat: 'yyyy-mm-dd',
            datepicker: {
                weekStart: 1
            },
            url: '<?=  route('teachingexp.update') ?>',
            success: function (response, newValue) {

                updateTeachinghExpTime($(this), response.timeinterval);
            }
        });
        $('.teach-exp-xedit-date').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $(document).on('mouseover', '.teach-exp-xedit-dynamic', function (e) {
            $(this).editable({
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?=  route('teachingexp.update') ?>',
                success: function (response, newValue) {

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        $(document).on('mouseover', '.teach-exp-xedit-dynamic-select', function (e) {

            $(this).editable({
                source: [
                    {value: 1, text: 'Permanent'},
                    {value: 2, text: 'Ad-hoc'},
                    {value: 3, text: 'Temporary'}
                ],
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?=  route('teachingexp.update') ?>',
                success: function (response, newValue) {

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        $(document).on('mouseover', '.teach-exp-classes-dynamic', function (e) {

            $(this).editable({
                source: [
                    {value: 1, text: 'Undergraduate'},
                    {value: 2, text: 'Postgraduate'},
                    {value: 3, text: 'Other'}
                ],
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?=  route('teachingexp.update') ?>',
                success: function (response, newValue) {

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });

        $(document).on('mouseover', '.teach-exp-xedit-dy-date', function (e) {
            $(this).editable({
                format: 'yyyy-mm-dd',
                viewformat: 'yyyy-mm-dd',
                datepicker: {
                    weekStart: 1
                },
                url: '<?=  route('teachingexp.update') ?>',
                success: function (response, newValue) {

                    updateTeachinghExpTime($(this), response.timeinterval);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });


        $('#teach-exp-na').on('change', function () {
            if ($(this).prop('checked')) {
                var rowCount = +$('#teaching-exp-table tr').length;
                if (rowCount >= 3) {
                    var response = confirm('Are you sure all yor data stored in ' + (rowCount - 2) + ' rows in section 3.1 will be deleted after you click ok please click cancel if you don\'t want this action');
                    if (response) {

                        $.ajax({
                            url: '<?=  route('teachingexp.deletebulk') ?> ',
                            type: 'post',
                            data: {'referenceId': "<?= $teachingKey ?>"},
                            dataType: 'html',
                            error: function () {
                                alert('An error has occured while deleting.');
                                return false;
                            },
                            success: function (data) {
                                if (data) {
                                    $('#teachingexpcontent').html("<div class='alert alert-warning' role='alert'>" + data + " Rows Deleted Successfully</div>").show().fadeOut(7000);
                                    var delcount = 0;
                                    $("#teaching-exp-table tr").each(function () {
                                        if (delcount >= 2) {
                                            +$(this).remove();
                                        }
                                        delcount++;
                                    });
                                    $('#teaching-exp-table').hide();

                                }
                            },
                        });
                    } else {
                        $('#teach-exp-na').prop('checked', false);
                    }
                } else {
                    $('#teaching-exp-table').hide();

                }
            } else {
                $('#teaching-exp-table').show();

            }
        });

        var updateTeachinghExpTime = function (element, value) {
            if (POASTAF === 1) {
                element.closest('tr').find('td:eq(8)').html(value);
            } else {
                element.closest('tr').find('td:eq(9)').html(value);
            }
        };

        $('#section-31-help').on('click', function (e) {
            e.preventDefault();
        });
        $('#section-31-help').popover({container: 'body',
            content: $('#help31').html(),
        });

    });

</script>

<div class="row">
    <?php
    $form = ActiveForm::begin([
                'id' => 'research-article-form',
                'action' => '',
    ]);
	$articleKey = $formId;
    $x = Profile::getPostIdByKey($articleKey);
	$x = $model->post;
    ?>
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    4.1 
                        <?php if ($x != 1) : ?>
                            (III A) <?php endif; ?> Research Papers/Articles in Journal/Conference Proceedings (In Related Areas Only)<br><font style="color:blue">Note: Provide all Research Papers/Articles in Journal/Conference Proceedings as you will not be able to edit further</font>
                </div>
                <div class="col-md-2">
                    <?php echo Html::hiddenInput('totalPoinAcadExp', 0) ?><?php if ($x != 1):?>Self-Appraisal Score Claimed<?php else : ?><?php endif; ?> :  <?php if ($x != 1){ ?><span id="total-points-resarticle-du"> </span><?php } ?>
                    
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div id="research-article-response" ></div>
            <div class="row">
                <div class="col-md-10"> <strong>Please Leave blank if you do not have any research papers. </strong> </div> 
                <div class="col-md-2"> <?php // Html::checkbox('noResearcharticle', Null, ['uncheck' => 0, 'id' => 'no-res-article','data-referenceid'=>$articleKey]);    ?> </div>
            </div>
            <br>
			<div class="table-responsive">  
            <table class="table table-responsive table-bordered" id="res-article-table">
                <thead>
                    <tr id="pub1"><td style="width: 1%;">#</td>
                        <td style="width: 10%;">Publication Type</td>
                        <td style="width: 20%;">Title of the Paper</td>
                        <td style="width: 10%;">Journal Name/Page Numbers</td>
                        <td style="width: 10%;">ISSN No.</td>
                        <td style="width: 8%;">Refereed</td>
                        <td style="width: 10%;">Author</td>
                        <td style="width: 5%;">Year</td>
						<?php if ($x != 1){ ?><td style="width: 10%;">Self-Appraisal Score</td><?php } ?>
                        <?php if ($x != 1){ ?><!--td style="width: 2%;"></td--><?php } ?>
                        <td style="width: 7%;">Action</td>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td> <?= $form->field($articles1, 'pubType')->dropDownList(Researcharticle::getPublicationTypeOption(), ['prompt' => ''])->label(false) ?></td>
                        <td> <?= $form->field($articles1, 'title')->textarea(['row' => 2])->label(false) ?></td>
                        <td><?= $form->field($articles1, 'journalNo')->textInput(['maxlength' => true])->label(false) ?></td>
                        <td><?= $form->field($articles1, 'issnIsbnNo')->textInput(['maxlength' => true])->label(false) ?></td>
                        <td><?= $form->field($articles1, 'refereed')->dropDownList(Researcharticle::getRefereedOption(), ['prompt' => ''])->label(false) ?></td>
                        <td> <?= $form->field($articles1, 'author')->dropDownList(Researcharticle::getAuthorOption(), ['prompt' => ''])->label(false) ?></td>  
                        <td><?= $form->field($articles1, 'year')->dropDownList(Researcharticle::getYearOption(), ['prompt' => ''])->label(false) ?></td>
						<?php if ($x != 1){ ?><td><?= $form->field($articles1, 'sp_points')->textInput(['maxlength' => true])->label(false) ?></td><?php } ?>
                        
                        <td><div class="form-group">
                                <?= Html::hiddenInput('articleKey', $articleKey) ?>
                                <?= Html::hiddenInput('articleref', 0) ?>
                                <?= Html::submitButton('Save & Add', ['class' => 'btn btn-xs btn-warning', 'id' => 'btn-pub-article']) ?>
                            </div></td>
                    </tr>
                    <?php if (!empty($articles)) : ?>
                        <?php foreach ($articles as $key => $value): ?>
                            <?php $hash =  Crypt::encrypt($value->id  ); ?>
                            <tr id=<?= "tr-article-pub-" . $hash; ?> >

                                <td><?= $key + 2 ?></td>
                                <td><a href="#" class="article-pub-pubType-select"  data-name="pubType" data-type="select"  data-pk="<?= $hash ?>"  data-title="Publication Type"></a></td>
                                <td><a href="#" class="article-pub-xedit"  data-name="title" data-type="textarea"  data-pk="<?= $hash ?>"  data-title="Title of the Paper"><?= $value->title ?></a></td>
                                <td><a href="#" class="article-pub-xedit"  data-name="journalNo" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="Journal Name/Page Numbers"  ><?= $value->journalNo ?></a></td>
                                <td><a href="#" class="article-pub-xedit"  data-name="issnIsbnNo" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="ISSN/ ISBN No."  ><?= $value->issnIsbnNo ?></a></td>
                                <td><a href="#" class="article-pub-xedit-select-ref"  data-name="refereed" data-type="select"   data-pk="<?= $hash ?>"  data-title="Refereed"  ></a></td>
                                <td><a href="#" class="article-pub-xedit-author"  data-name="author" data-type="select"   data-pk="<?= $hash ?>"  data-title="Author"  ></a></td>
                                <td><a href="#" class="article-pub-xedit-year"  data-name="year" data-type="number"   data-pk="<?= $hash ?>"  data-title="Year"  ><?= $value->year ?></a></td>
                                <?php //if ($x != 1){ ?><!--td><?= $value->points ?></td--><?php // } ?>
								<?php if ($x != 1){ ?><td><a href="#" class="article-pub-xedit"  data-name="sp_points" data-type="number"   data-pk="<?= $hash ?>"  data-title="SP Points"  ><?= $value->sp_points ?></a></td><?php  } ?>
                                <td>
                                   
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<?php
if ($x != 1){ 
$this->registerJs("
    $(document).ready(function(){
		 var acadmicStatus = ".$row.";
		// alert(acadmicStatus);
        var readyAcadmic = function () {
            if (acadmicStatus>0) {
                $('#edit-but-22').show();
                $('#display-area-tab-22').show();
                $('#form-area-tab-22').hide();
            } else {
                $('#edit-but-22').hide();
                $('#display-area-tab-22').hide();
                $('#form-area-tab-22').show();
            }
        };
        readyAcadmic();
        $('#edit-but-22').on('click', function () {
            $('#edit-but-22').hide();
            $('#display-area-tab-22').hide();
            $('#form-area-tab-22').show();
			
        });
        $('#acadmic-cancel-btn').on('click', function () {
            $('#rec-user-form').tabs('load', 1);
        });
    $('#research-article-form').on('beforeSubmit', function(){
          var form = $(this);
            if (form.find('.has-error').length) { return false; }

    $.ajax({
    url: '" . \Yii::$app->urlManager->createUrl(['researcharticle/save1']) . "',
            type: 'post',
            data: form.serialize(),
            dataType: 'html',
            success: function(data) {
                var y = JSON.parse(data);
                    if (y.response === 1)
            {
				
            var tableModel = document.getElementById('res-article-table')
document.getElementById('research-article-form').reset();
                    var rowCount = tableModel.rows.length;
                    var row = tableModel.insertRow(2);
                    row.id = 'tr-research-article-'.concat(y.id);
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    var cell7 = row.insertCell(7);
                    var cell8 = row.insertCell(8);
                    var cell9 = row.insertCell(9);
                    cell0.innerHTML = 1 + parseInt(tableModel.rows[ rowCount - 1 ].cells[0].innerHTML);
                    cell1.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-select\"  data-name=\"pubType\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Enter Publication type\">', y.pubType, '</a>');
                    cell2.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"title\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter Title\">', y.title, '</a>');
                    cell3.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"journalNo\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Journal No\">', y.journalNo, '</a>');
                    cell4.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"issnIsbnNo\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"ISSN/ ISBN No.\">', y.issnIsbnNo, '</a>');
                    cell5.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-data\"  data-name=\"refereed\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Refereed\">', y.refereed, '</a>');
                    cell6.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-author\"  data-name=\"author\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Author\">', y.author, '</a>');
                    cell7.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"year\" data-type=\"number\"  data-pk='.concat(y.id, ' data-title=\"Year\">', y.year, '</a>');
                    cell8.innerHTML = '<a href=\"#\" class=\"article-pub-xedit\"  data-name=\"sp_points\" data-type=\"number\"  data-pk='.concat(y.id, ' data-title=\"SP Points\">', y.sp_points, '</a>');
                    cell9.innerHTML = y.formNo;
                    for (var i = 1; i <= rowCount; i++){
            tableModel.rows[ i ].cells[0].innerHTML = i;
            }
              updateTotalPointsRes();
            document.getElementById('research-article-form').reset();
             var reply = \"<div class='alert alert-success' role='alert'>Data Successfully Saved (Please check second row of this table)</div>\";
                    $('#research-article-response').html(reply).show().fadeOut(7000);
            } else{
            var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
                    $('#research-article-response').html(reply).show().fadeOut(7000);
            }

            },
            error: function() {
           // alert('An error has occured while adding a new block.');
                    var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
                    $('#research-article-response').html(reply).show();
            }
    });
            return false;
    });
    });
  ");

  
}else {
	
	
	
	$this->registerJs("
 
    $(document).ready(function(){
		var acadmicStatus = ".$row.";
		 //alert(acadmicStatus);
        var readyAcadmic = function () {
            if (acadmicStatus>0) {
                $('#edit-but-22').show();
                $('#display-area-tab-22').show();
                $('#form-area-tab-22').hide();
            } else {
                $('#edit-but-22').hide();
                $('#display-area-tab-22').hide();
                $('#form-area-tab-22').show();
            }
        };
        readyAcadmic();
        $('#edit-but-22').on('click', function () {
            $('#edit-but-22').hide();
            $('#display-area-tab-22').hide();
            $('#form-area-tab-22').show();
			
        });
        $('#acadmic-cancel-btn').on('click', function () {
            $('#rec-user-form').tabs('load', 1);
        });
    $('#research-article-form').on('beforeSubmit', function(){
          var form = $(this);
            if (form.find('.has-error').length) { return false; }

    $.ajax({
    url: '" . \Yii::$app->urlManager->createUrl(['researcharticle/save1']) . "',
            type: 'post',
            data: form.serialize(),
            dataType: 'html',
            success: function(data) {
                var y = JSON.parse(data);
                    if (y.response === 1)
            {
            var tableModel = document.getElementById('res-article-table')

                    var rowCount = tableModel.rows.length;
                    var row = tableModel.insertRow(2);
                    row.id = 'tr-research-article-'.concat(y.id);
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    var cell7 = row.insertCell(7);
                    var cell8 = row.insertCell(8);
                
                    cell0.innerHTML = 1 + parseInt(tableModel.rows[ rowCount - 1 ].cells[0].innerHTML);
                    cell1.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-select\"  data-name=\"pubType\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Enter Publication type\">', y.pubType, '</a>');
                    cell2.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"title\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Enter Title\">', y.title, '</a>');
                    cell3.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"journalNo\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"Journal No\">', y.journalNo, '</a>');
                    cell4.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"issnIsbnNo\" data-type=\"textarea\"  data-pk='.concat(y.id, ' data-title=\"ISSN/ ISBN No.\">', y.issnIsbnNo, '</a>');
                    cell5.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-data\"  data-name=\"refereed\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Refereed\">', y.refereed, '</a>');
                    cell6.innerHTML = '<a href=\"#\" class=\"res-art-dyn-pub-author\"  data-name=\"author\" data-type=\"select\"  data-pk='.concat(y.id, ' data-title=\"Author\">', y.author, '</a>');
                    cell7.innerHTML = '<a href=\"#\" class=\"res-art-dyn-text\"  data-name=\"year\" data-type=\"number\"  data-pk='.concat(y.id, ' data-title=\"Year\">', y.year, '</a>');
                    cell8.innerHTML = y.formNo;
                    for (var i = 1; i <= rowCount; i++){
            tableModel.rows[ i ].cells[0].innerHTML = i;
            }
              updateTotalPointsRes();
            document.getElementById('research-article-form').reset();
             var reply = \"<div class='alert alert-success' role='alert'>Data Successfully Saved (Please check second row of this table)</div>\";
                    $('#research-article-response').html(reply).show().fadeOut(7000);
            } else{
            var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
                    $('#research-article-response').html(reply).show().fadeOut(7000);
            }

            },
            error: function() {
           // alert('An error has occured while adding a new block.');
                    var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
                    $('#research-article-response').html(reply).show();
            }
    });
            return false;
    });
    });
  ");

  

}




 ?>

<script>
    //Pub Type
    $(document).ready(function () {

        $.fn.editable.defaults.mode = 'inline';
        $('.article-pub-pubType-select').editable({
            source: [
                {value: 1, text: 'Research Paper / Review Article'},
                {value: 2, text: 'Conference Proc. Full Length Paper'},
            ],
            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
            success: function (response, newValue) {
                updateAcadResPoints($(this), response.points);
                updateTotalPointsRes();
            },
        });
        $('.article-pub-pubType-select').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $(document).on('mouseover', '.res-art-dyn-pub-select', function (e) {
            $(this).editable({
                source: [
                    {value: 1, text: 'Research Paper / Review Article'},
                    {value: 2, text: 'Conference Proc. Full Length Paper'},
                ],
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
                success: function (response, newValue) {
                    updateAcadResPoints($(this), response.points);

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        //paper,journal,issn

        $('.article-pub-xedit').editable({
            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
            success: function (response, newValue) {
                updateAcadResPoints($(this), response.points);

            },
        });
        $('.article-pub-xedit').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $(document).on('mouseover', '.res-art-dyn-text', function (e) {
            $(this).editable({
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
                success: function (response, newValue) {
                    updateAcadResPoints($(this), response.points);

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        //refereed
        $('.article-pub-xedit-select-ref').editable({
            source: [
                {value: 1, text: 'No'},
                {value: 2, text: 'Yes'},
            ],
            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
            success: function (response, newValue) {
                updateAcadResPoints($(this), response.points);

            },
        });
        $('.article-pub-xedit-select-ref').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $(document).on('mouseover', '.res-art-dyn-pub-data', function (e) {
            $(this).editable({
                source: [
                    {value: 1, text: 'No'},
                    {value: 2, text: 'Yes'},
                ],
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
                success: function (response, newValue) {
                    updateAcadResPoints($(this), response.points);

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        //Author


        $('.article-pub-xedit-author').editable({
            source: [
			//modified by cis
                {value: 1, text: 'Sole'},
                {value: 2, text: 'First Author'},
				{value: 3, text: 'Corresponding Author'},
                {value: 4, text: 'Supervisor'},
				{value: 5, text: 'Mentor'},
				{value: 6, text: 'Other'},
            ],
            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
            success: function (response, newValue) {
                updateAcadResPoints($(this), response.points);

            },
        });
        $('.article-pub-xedit-author').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });
        $(document).on('mouseover', '.res-art-dyn-pub-author', function (e) {
            $(this).editable({
                source: [
                    //{value: 1, text: 'Sole'},
                    //{value: 2, text: 'Co-Author'},
					//modified by cis
                {value: 1, text: 'Sole'},
                {value: 2, text: 'First Author'},
				{value: 3, text: 'Corresponding Author'},
                {value: 4, text: 'Supervisor'},
				{value: 5, text: 'Mentor'},
				{value: 6, text: 'Other'},
                ],
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
                success: function (response, newValue) {
                    updateAcadResPoints($(this), response.points);

                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        //
        //year

        $('.article-pub-xedit-year').editable({
            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/update']) ?>',
            success: function (response, newValue) {
                updateAcadResPoints($(this), response.points);

            }
        });
        $('.article-pub-xedit-year').editable('option', 'validate', function (v) {
            if (!v)
                return 'Required field!';
        });



        $('#no-res-article').on('change', function () {
            if ($(this).prop('checked')) {
                var rowCount = +$('#res-article-table tr').length;
                if (+$('#res-article-table tr').length >= 3) {

                    var articleKey = $(this).data('referenceid');
                    var response = confirm('Are you sure all yor data stored in ' + (rowCount - 2) + ' rows in section 4.1 will be deleted after you click ok please click cancel if you don\'t want this action');
                    if (response) {

                        $.ajax({
                            url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/deletebulk']) ?>',
                            type: 'post',
                            data: {referenceId: articleKey},
                            dataType: 'html',
                            error: function () {
                                //  alert('An error has occured while deleting.');
                                return false;
                            },
                            success: function (data) {
                                if (data) {
                                    $('#research-article-response').html("<div class='alert alert-warning' role='alert'>" + data + " Rows Deleted Successfully</div>").show().fadeOut(7000);
                                    var delcount = 0;
                                    $("#res-article-table tr").each(function () {
                                        if (delcount >= 2) {
                                            +$(this).remove();
                                        }
                                        delcount++;
                                    });
                                    $('#res-article-table').hide();
                                    updateTotalPointsRes();
                                }
                            },
                        });
                    } else {
                        $('#no-res-article').prop('checked', false);
                    }
                } else {
                    $('#res-article-table').hide();
                    updateTotalPointsRes();
                }
            } else {
                $('#res-article-table').show();
                updateTotalPointsRes();
            }
        });
        $('#section-41-help').on('click', function (e) {
            e.preventDefault();
        });
        $('#section-41-help').popover({container: 'body',
            content: $('#help41').html(),
        });

    });



    var updateAcadResPoints = function (element, value) {
        element.closest('tr').find('td:eq(8)').html(value);
        updateTotalPointsRes();
    };

    var updateTotalPointsRes = function () {
        var total = 0;
        var temp = 0;
        $("#res-article-table tr").each(function () {
            temp = +$(this).find('td:eq(8)').text();
            if (!isNaN(temp)) {
                total += temp;
            }
        });
        $('#total-points-resarticle-du').html(total);
    };

    var updatepubsearchserno = function () {
        var count = 0;
        $("#res-article-table tr").each(function () {
            if (count) {
                $(this).find('td:eq(0)').text(count);
            }
            count++;
        });
    };

    updateTotalPointsRes();
</script>
<script>

    function deleteArticle1(x)
    {
        if (confirm("Do you want to delete this Entry") == true) {

            var tempid = x.split('-')[3];
            $.ajax({
                url: '<?= \Yii::$app->urlManager->createUrl(['researcharticle/delete1']) ?>',
                type: 'post',
                data: {index: tempid, referenceId: "<?= $articleKey ?>"},
                dataType: 'html',
                error: function () {
                    alert('An error has occured while deleting.');
                    return false;
                },
                success: function (data) {
                    if (data) {
                        var row = document.getElementById(x);
                        row.parentNode.removeChild(row);
                        var reply = "<div class='alert alert-warning' role='alert'>Data Deleted Successfully</div>";
                        $('#research-article-response').html(reply).show();
                    }

                },
            });
        } else
        {
            return false;
        }
    }

</script>

<div class="row">

    <?php
    $form = ActiveForm::begin([
                'id' => 'research-publication-form',
                'action' => \Yii::$app->urlManager->createUrl(['researchpublication/save1']),
    ]);
    $x = Profile::getPostIdByKey($publicationKey);
	$x = $model->post;
    ?>
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    4.2 <?php if ($x != 1) : ?>
                            (III B) <?php endif; ?>Research Publication self authored/co-authored/edited book/chapters in books (In Related Areas Only) <br><font style="color:blue">Note: Provide all Research Publication self authored/co-authored/edited book/chapters in books as you will not be able to edit further</font>
                </div>
                <div class="col-md-2"> <?php if ($x != 1):?>Self-Appraisal Score Claimed:  <span id="to-p-resepbook-du"> </span><?php endif; ?>
              
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div id="jx-response-reseach-pub"> </div> 
            <div class="row">
                <div class="col-md-10"> <strong> Please Leave blank if you do not have any research publications. </strong></div>  
                <div class="col-md-2">  <?php // Html::checkbox('noResearchPub', Null, ['uncheck' => 0, 'id' => 'no-res-pub-book']);     ?>   </div>
            </div>
            <br>
			<div class="table-responsive">  
            <table class="table table-responsive table-bordered"  id="research-publication-table" >
                <thead>
                    <tr  id="pub2"><td style="width: 1%;">#</td>
                        <td style="width: 15%;">Publication Type</td>
                        <td style="width: 25%;">Title</td>
                        <td style="width: 10%;">ISSN/ ISBN No.</td>
                        <!-- <td style="width: 4%;">Refereed</td> -->
                        <td style="width: 10%;">Author/Co-Author</td>
                        <?php if ($x == 1) : ?>
                            <td style="width: 10%;">Publisher (city/country)</td>
                        <?php else: ?>
                            <td style="width: 15%;">Editor`s Name(where applicable else write NA)</td>
                        <?php endif; ?>
                        <td style="width: 5%;">Year</td>
                        <td style="width: 5%;">Level</td>
                        <?php if ($x != 1):?><!--td style="width: 2%;">API Claimed:</td-->
						<td style="width: 2%;">Self-Appraisal Score</td><?php endif; ?>
                        <td style="width: 10%;">Action</td>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <?php if ($x == 1) : ?>
                            <td>  <?= $form->field($publications1, 'type')->dropDownList(Researchpublication::getPublicationTypeOption(), ['prompt' => ''])->label(false) ?>    </td>
                        <?php else: ?>
                            <td>  <?= $form->field($publications1, 'type')->dropDownList(Researchpublication::getProfessorPublicationOption(), ['prompt' => ''])->label(false) ?>    </td>
                        <?php endif; ?>
                        <td>  <?= $form->field($publications1, 'title')->textarea(['maxlength' => true])->label(false) ?></td>
                        <td>  <?= $form->field($publications1, 'issnNo')->textInput(['maxlength' => true])->label(false) ?></td>
                        <!-- <td>  <?= $form->field($publications1, 'refereed')->dropDownList(Researchpublication::getRefereedOption(), ['prompt' => ''])->label(false) ?></td> -->
                        <td>  <?= $form->field($publications1, 'author')->dropDownList(Researchpublication::getAuthorOption(), ['prompt' => ''])->label(false) ?></td>
                        <td>  <?= $form->field($publications1, 'publisher')->textInput(['maxlength' => true])->label(false) ?></td>  
                        <td>  <?= $form->field($publications1, 'year')->dropDownList(Researchpublication::getYearOption(), ['prompt' => ''])->label(false) ?></td>
                       
                        <td>  <?= $form->field($publications1, 'level')->dropDownList(Researchpublication::getLevelsOption(), ['prompt' => ''])->label(false) ?>    </td>
                         <?php if ($x != 1):?> <td><?= $form->field($publications1, 'sp_points')->textInput(['maxlength' => true])->label(false) ?></td><?php endif; ?>
                         <td><div class="form-group">
                                <?= Html::hiddenInput('publicationKey', $publicationKey) ?>
                                <?= Html::submitButton('Save & Add', ['class' => 'btn btn-xs  btn-warning', 'id' => 'btn-res-publication']) ?>
                            </div></td>
                    </tr>

                    <?php if (!empty($publications)) : ?>
                        <?php foreach ($publications as $key => $value): ?>
                            <?php $hash =  Crypt::encrypt( $value->id); ?>
                            <tr id=<?= "tr-res-pub-" . $hash; ?> >
                                <td><?= $key + 2 ?></td>
                                <?php if ($x == 1) : ?>
                                    <td><a href="#" class="research-pub-type-select"  data-name="type" data-type="select"  data-pk="<?= $hash ?>"  data-title="Publication Type"></a></td>
                                <?php else: ?>
                                    <td><a href="#" class="research-pub-prof-type-select"  data-name="type" data-type="select"  data-pk="<?= $hash ?>"  data-title="Publication Type"></a></td>
                                <?php endif; ?>
                                <td><a href="#" class="research-pub-xedit"  data-name="title" data-type="textarea"  data-pk="<?= $hash ?>"  data-title="Title"><?= $value->title ?></a></td>
                                <td><a href="#" class="research-pub-xedit"  data-name="issnNo" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="Journal Name/Page Numbers"  ><?= $value->issnNo ?></a></td>
                                <!-- <td><a href="#" class="research-pub-xedit-select-ref"  data-name="refereed" data-type="select"   data-pk="<?= $hash ?>"  data-title="Refereed"  ><?php // Researchpublication::getRefereedOption()[$value->refereed]) ?></a></td> -->
                                <td><a href="#" class="research-pub-xedit-author"  data-name="author" data-type="select"   data-pk="<?= $hash ?>"  data-title="Author"  ></a></td>
                                <td><a href="#" class="research-pub-xedit"  data-name="publisher" data-type="textarea"   data-pk="<?= $hash ?>"  data-title="Publisher"  ><?= $value->publisher ?></a></td>
                                <td><a href="#" class="research-pub-xedit"  data-name="year" data-type="number"   data-pk="<?= $hash ?>"  data-title="Year"  ><?= $value->year ?></a></td>
                                <td><a href="#" class="research-pub-xedit-level-select"  data-name="level" data-type="select"   data-pk="<?= $hash ?>"  data-title="Level"  ><?= $value->level ?></a></td>
                                <?php if ($x != 1):?> <!--td> <?= $value->points ?></td-->
								<td><a href="#" class="article-pub-xedit"  data-name="sp_points" data-type="number"   data-pk="<?= $hash ?>"  data-title="SP Points"  ><?= $value->sp_points ?></a></td>
<?php endif; ?>
								<td>
                                   
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>
        </div>
    </div>
  {!! Form::close() !!}
</div>


<?php if ($x != 1){
$this->registerJs("
  
    $(document).ready(function(){
    $('#research-publication-form').on('beforeSubmit', function(){
          var form = $(this);
            if (form.find('.has-error').length) { return false; }

    $.ajax({
  url: '" . \Yii::$app->urlManager->createUrl(['researchpublication/save1']) . "',
  type: 'post',
  data: form.serialize(),
  dataType: 'html' ,
  success: function(data) {
   var y=JSON.parse(data);

     if(y.response===1)
     {
var tableModel = document.getElementById('research-publication-table')

    var rowCount = tableModel.rows.length;
    var row = tableModel.insertRow(2);
    row.id='tr-res-pub-'.concat(y.id);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    var cell6 = row.insertCell(6);
    var cell7 = row.insertCell(7);
    var cell8 = row.insertCell(8);
    var cell9 = row.insertCell(9);

    cell0.innerHTML = 1+parseInt(tableModel.rows[ rowCount- 1 ].cells[0].innerHTML);
    if(".$model->post."===1){
    cell1.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-pub-select\"  data-name=\"type\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Enter Publication type\">',y.type,'</a>');
     }else{
    cell1.innerHTML = '<a href=\"#\" class=\"res-prof-dyn-pub-select\"  data-name=\"type\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Enter Publication type\">',y.type,'</a>');
        }   
    cell2.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"title\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Enter Title\">',y.title,'</a>');
    cell3.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"issnNo\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"ISSN/ ISBN No.\">',y.issnNo,'</a>');    
    cell4.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-author\"  data-name=\"author\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Author\">',y.author,'</a>');       
    cell5.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"publisher\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Publisher\">',y.publisher,'</a>');
    cell6.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"year\" data-type=\"number\"  data-pk='.concat(y.id ,' data-title=\"Year\">',y.year,'</a>');
    cell7.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-level-select\"  data-name=\"level\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Level\">',y.level,'</a>');
    cell8.innerHTML = '<a href=\"#\" class=\"article-pub-xedit\"  data-name=\"sp_points\" data-type=\"number\"  data-pk='.concat(y.id, ' data-title=\"SP Points\">', y.sp_points, '</a>');
    cell9.innerHTML = y.formNo;
    for(var i=1;i<=rowCount;i++){
         tableModel.rows[ i ].cells[0].innerHTML =i;
        }
document.getElementById('research-publication-form').reset(); 
 updateTotalPointsResPub();
var reply = \"<div class='alert alert-success' role='alert'>Data Successfully Saved (Please check second row of this table)</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
return false;
}else{
var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
return false
}

  },
  error: function() {
  alert('An error has occured while adding a new block.');
  var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
 return false
  }
  });

return false

  });

  });

"); }else { 
$this->registerJs("
  
    $(document).ready(function(){
    $('#research-publication-form').on('beforeSubmit', function(){
          var form = $(this);
            if (form.find('.has-error').length) { return false; }

    $.ajax({
  url: '" . \Yii::$app->urlManager->createUrl(['researchpublication/save1']) . "',
  type: 'post',
  data: form.serialize(),
  dataType: 'html' ,
  success: function(data) {
   var y=JSON.parse(data);

     if(y.response===1)
     {
var tableModel = document.getElementById('research-publication-table')

    var rowCount = tableModel.rows.length;
    var row = tableModel.insertRow(2);
    row.id='tr-res-pub-'.concat(y.id);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    var cell6 = row.insertCell(6);
    var cell7 = row.insertCell(7);
    var cell8 = row.insertCell(8);
   

    cell0.innerHTML = 1+parseInt(tableModel.rows[ rowCount- 1 ].cells[0].innerHTML);
    if(".$model->post."===1){
    cell1.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-pub-select\"  data-name=\"type\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Enter Publication type\">',y.type,'</a>');
     }else{
    cell1.innerHTML = '<a href=\"#\" class=\"res-prof-dyn-pub-select\"  data-name=\"type\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Enter Publication type\">',y.type,'</a>');
        }   
    cell2.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"title\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Enter Title\">',y.title,'</a>');
    cell3.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"issnNo\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"ISSN/ ISBN No.\">',y.issnNo,'</a>');    
    cell4.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-author\"  data-name=\"author\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Author\">',y.author,'</a>');       
    cell5.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"publisher\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Publisher\">',y.publisher,'</a>');
    cell6.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-text\"  data-name=\"year\" data-type=\"number\"  data-pk='.concat(y.id ,' data-title=\"Year\">',y.year,'</a>');
    cell7.innerHTML = '<a href=\"#\" class=\"res-pub-dyn-level-select\"  data-name=\"level\" data-type=\"select\"  data-pk='.concat(y.id ,' data-title=\"Level\">',y.level,'</a>');
    cell8.innerHTML = y.formNo;
    for(var i=1;i<=rowCount;i++){
         tableModel.rows[ i ].cells[0].innerHTML =i;
        }
document.getElementById('research-publication-form').reset(); 
 updateTotalPointsResPub();
var reply = \"<div class='alert alert-success' role='alert'>Data Successfully Saved (Please check second row of this table)</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
return false;
}else{
var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
return false
}

  },
  error: function() {
  alert('An error has occured while adding a new block.');
  var reply = \"<div class='alert alert-danger' role='alert'>Please provide the valid data</div>\";
 $('#jx-response-reseach-pub').html(reply).show().fadeOut(7000);
 return false
  }
  });

return false

  });

  });

  ");
}
?>


<script>
    $(document).ready(function () {
        $.fn.editable.defaults.mode = 'inline';
//        $(document).on('click', '.btn-delete-res-pub', function (event) {
//            if (confirm("Do you want to delete this Entry") === true) {
//                var tempid = $(this).data('key').split('-')[3];
//                content = $(this);
//                $.ajax({
//                    url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/delete']) ?>',
//                    type: 'post',
//                    data: {index: tempid, referenceId: "<?= $publicationKey ?>"},
//                    dataType: 'html',
//                    error: function () {
//                        alert('An error has occured while deleting.');
//                        return false;
//                    },
//                    success: function (data) {
//                        
//                        if (data) {
//                            content.closest('tr').remove();
//                            var reply = "<div class='alert alert-warning' role='alert'>Data Deleted Successfully</div>";
//                            $('.jx-response-reseach-pub').html(reply).show().fadeOut(7000);
//                        }
//                        updatepubserno();
//                        updateTotalPointsResPub();
//                    },
//                });
//                return false;
//            } else {
//                return false;
//            }
//        });
//   Publication Type

        $('.research-pub-prof-type-select').editable({
            source: <?= Researchpublication::getProfessorPublicationOptionJson() ?>,
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-prof-type-select').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
        $(document).on('mouseover', '.res-prof-dyn-pub-select', function (e) {
            $(this).editable({
                source: <?= Researchpublication::getProfessorPublicationOptionJson() ?>,
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        
        //Level
                $('.research-pub-xedit-level-select').editable({
            source: <?= Researchpublication::getLevelsOptionJson() ?>,
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-xedit-level-select').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
        $(document).on('mouseover', '.res-pub-dyn-level-select', function (e) {
            $(this).editable({
                source: <?= Researchpublication::getLevelsOptionJson() ?>,
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        
        
        //publication type assistant 
        $('.research-pub-type-select').editable({
            source: <?= Researchpublication::getPublicationTypeOptionJson() ?>,
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-type-select').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
                
        $(document).on('mouseover', '.res-pub-dyn-pub-select', function (e) {
            $(this).editable({
                source: <?= Researchpublication::getPublicationTypeOptionJson() ?>,
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        //textarea  & text

        $('.research-pub-xedit').editable({
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-xedit').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
        $(document).on('mouseover', '.res-pub-dyn-text', function (e) {
            $(this).editable({
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        // refereed

        $('.research-pub-xedit-select-ref').editable({
            source: <?= Researchpublication::getRefereedOptionJson() ?>,
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-xedit-select-ref').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
        $(document).on('mouseover', '.res-pub-dyn-pub-ref', function (e) {
            $(this).editable({
                source: <?= Researchpublication::getRefereedOptionJson() ?>,
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        // Author
        $('.research-pub-xedit-author').editable({
            source: <?= Researchpublication::getAuthorOptionJson() ?>,
            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
            success: function (response, newValue) {
                updateResPubBookPoints($(this), response.points);
            }
        });
        $('.research-pub-xedit-select-ref').editable('option', 'validate',
                function (v) {
                    if (!v)
                        return 'Required field!';
                });
        $(document).on('mouseover', '.res-pub-dyn-author', function (e) {
            $(this).editable({
                source: <?= Researchpublication::getAuthorOptionJson() ?>,
                pk: $(this).attr('data-pk'),
                name: $(this).attr('data-name'),
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/update']) ?>',
                success: function (response, newValue) {
                    updateResPubBookPoints($(this), response.points);
                }
            });
            $(this).editable('option', 'validate', function (v) {
                if (!v)
                    return 'Required field!';
            });
        });
        var updateResPubBookPoints = function (element, value) {
            element.closest('tr').find('td:eq(8)').html(value);
            updateTotalPointsResPub();
        };
        $('#no-res-pub-book').on('change', function () {
            if ($(this).prop('checked')) {
                var rowCount = +$('#research-publication-table tr').length;
                if (+$('#research-publication-table tr').length >= 3) {
                    var response = confirm('Are you sure all yor data stored in ' + (rowCount - 2) + ' rows in section 4.2 will be deleted after you click ok please click cancel if you don\'t want this action');
                    if (response) {

                        $.ajax({
                            url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/deletebulk']) ?>',
                            type: 'post',
                            data: {'referenceId': "<?= $publicationKey ?>"},
                            dataType: 'html',
                            error: function () {
                                return false;
                            },
                            success: function (data) {
                                if (data) {
                                    $('#jx-response-reseach-pub').html("<div class='alert alert-warning' role='alert'>" + data + " Rows Deleted Successfully</div>").show().fadeOut(70000);
                                    var delcount = 0;
                                    $("#research-publication-table tr").each(function () {
                                        if (delcount >= 2) {
                                            +$(this).remove();
                                        }
                                        delcount++;
                                    });
                                    $('#research-publication-table').hide();
                                    updateTotalPointsResPub();
                                }
                            },
                        });
                    } else {
                        $('#no-res-pub-book').prop('checked', false);
                    }
                } else {
                    $('#research-publication-table').hide();
                    updateTotalPointsResPub();
                }
            } else {
                $('#research-publication-table').show();
                updateTotalPointsResPub();
            }
        });
        $('#section-42-help').on('click', function (e) {
            e.preventDefault();
        });
        $('#section-42-help').popover({container: 'body',
            content: $('#help42').html(),
        });
    });

    var updateTotalPointsResPub = function () {
        var total = 0;
        var temp = 0;
        $("#research-publication-table tr").each(function () {
            temp = +$(this).find('td:eq(8)').text();
            if (!isNaN(temp)) {
                total += temp;
            }
        });
        $('#to-p-resepbook-du').html(total);
    };
    var updatepubserno = function () {
        var count = 0;
        $("#research-publication-table tr").each(function () {
            if (count) {
                $(this).find('td:eq(0)').text(count);
            }
            count++;
        });
    };
    updateTotalPointsResPub();
</script>

<script>

    function deletePublication1(x)
    {
        if (confirm("Do you want to delete this Entry") == true) {

            var tempid = x.split('-')[3];
            $.ajax({
                url: '<?= \Yii::$app->urlManager->createUrl(['researchpublication/delete1']) ?>',
                type: 'post',
                data: {index: tempid, referenceId: "<?= $publicationKey ?>"},
                dataType: 'html',
                error: function () {
                    alert('An error has occured while deleting.');
                    return false;
                },
                success: function (data) {
                    if (data) {
                        var row = document.getElementById(x);
                        row.parentNode.removeChild(row);
                        var reply = "<div class='alert alert-warning' role='alert'>Data Deleted Successfully</div>";
                        $('#jx-response-reseach-pub').html(reply).show();
                    }

                },
            });
        } else
        {
            return false;
        }
    }

</script>
<?php if($model->post != 1){ ?>
<div class="row">

    <?php
    $form = ActiveForm::begin([
                'id' => 'res-guide-form1',
                'action' => '',
    ]);
    ?>
    <div class="panel panel-info du-panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-8">
                    4.6 (III D) Research Guidance : Number of scholars who have already been awarded M.Phil/Ph.D. degree under your
                        supervision both as guide and/or co-guide <br><font style="color:blue">Note: Provide complete details as you will not be able to edit further</font>
                </div>
                <div class="col-md-2"> Self-Appraisal Score Claimed :  <span id="total-res-guide-point"> <?= $rguidance1->sp_points_total ?> </span>       
                </div>
				<div class="col-md-2"> 
					<div class="text-right">  
                        <span > <?= Html::button('Edit Details', ['class' => 'btn btn-info', 'onclick' => "formguide();"]) ?> </span>
                    </div>        
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div id="jx-res-guide-pub"> 
                </div> 
            </div> 
            <div class="row">
                <div class="col-xs-2"> <strong> Research Supervision </strong> </div>
                <div class="col-xs-3"> <strong> No of Candidate registered till date</strong> </div>                
                <div class="col-xs-2"> <strong> Thesis Submitted </strong> </div>                
                <div class="col-xs-2"> <strong> Degree Awarded</strong> </div>
                <div class="col-xs-3"> <strong> Self-Appraisal Score</strong> </div>
            </div>
			<?php if(!$rguidance){ ?>
			
            <div class="row">
                <div class="col-xs-2"> <strong> M.Phil </strong> </div>
                <div class="col-xs-3"><?= $form->field($rguidance1, 'mphilNoCandi')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-2"><?= $form->field($rguidance1, 'mphilThesis')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-2"><?= $form->field($rguidance1, 'mphilDegree')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-3" id="mphil-res-guide-point">  <!--?= $model->mphilPoints ?--><?= $form->field($rguidance1, 'sp_points_mphil')->textInput(['maxlength' => true])->label(false) ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2"><strong>Ph.D </strong> </div>
                <div class="col-xs-3"><?= $form->field($rguidance1, 'phdNoCandi')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-2"><?= $form->field($rguidance1, 'phdThesis')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-2"> <?= $form->field($rguidance1, 'phdDegree')->textInput()->label(FALSE) ?> </div>
                <div class="col-xs-3" id="phd-res-guide-point"> <!--?= $model->phdPoints ?--> <?= $form->field($rguidance1, 'sp_points_phd')->textInput(['maxlength' => true])->label(false) ?> </div>
            </div>
            <div class="form-group text-center ">
                <?= Html::hiddenInput('appKey', $appKey) ?>
                   <?= Html::hiddenInput('key', $rguidance1->isNewRecord ? 0 : Yii::$app->security->hashData($rguidance1->id, Yii::$app->params['hashKey']),['id'=>'res-guide-updatekey']) ?>
                <?= Html::button($rguidance1->isNewRecord ? 'Add' : 'Update', ['class' => $rguidance1->isNewRecord ? 'btn btn-success' : 'btn btn-warning','id'=>'res-guide-submit', 'onclick' => 'guide1();']) ?>
            </div> 
			<?php }else { ?>
			<hr>
			<div id="editeguide">
			 <div class="row">
                <div class="col-xs-2"> <strong> M.Phil </strong> </div>
                <div class="col-xs-3"><?= $rguidance->mphilNoCandi ?> </div>
                <div class="col-xs-2"><?= $rguidance->mphilThesis ?> </div>
                <div class="col-xs-2"><?= $rguidance->mphilDegree ?> </div>
                <div class="col-xs-3" id="mphil-res-guide-point">  <!--?= $model->mphilPoints ?--><?= $rguidance->sp_points_mphil ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2"><strong>Ph.D </strong> </div>
                <div class="col-xs-3"><?= $rguidance->phdNoCandi ?> </div>
                <div class="col-xs-2" id="phdgui1"><?= $rguidance->phdThesis ?> </div>
                <div class="col-xs-2" id="phdgui2"> <?= $rguidance->phdDegree ?> </div>
                <div class="col-xs-3" id="phd-res-guide-point"> <!--?= $model->phdPoints ?--> <?= $rguidance->sp_points_phd ?> </div>
            </div>
			</div>
			<?php } ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <script>
        
            function guide1() {
                var form = $('#res-guide-form1');
                if (form.find('.has-error').length) {
                    return false;
                }
                $.ajax({
                    url: '<?= \Yii::$app->urlManager->createUrl(['researchguidance/save2']) ?>',
                    type: 'post',
                    data: form.serialize(),
                    dataType: 'html',
                    error: function () {
                        alert('An error has occured while saving record.');
                        return false;
                    },
                    success: function (data) {
                        if (data) {
                            y = JSON.parse(data);
                            $('#mphil-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_mphil,'</a>'));
                            $('#phd-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_phd,'</a>'));
                            $('#ug-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_mster,'</a>'));
                            $('#total-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_total,'</a>'));
                           
                            
                            if (y.response === 1) {
                                $('#res-guide-updatekey').val(y.key);
                                $('#res-guide-submit').html('Update').removeClass('btn-success').addClass('btn-warning');
                                $('#jx-res-guide-pub').html("<div class='alert alert-warning' role='alert'>Data saved successfully</div>").show().fadeOut(7000);                                 
							location.reload(true);
						   } else {
                                $('#jx-res-guide-pub').html("<div class='alert alert-warning' role='alert'>Problem in saving form please reload the page</div>").show().fadeOut(7000);

                            }

                        }
                    },
                });
                return false;
            } 
			
			function guide() {
                var form = $('#res-guide-form1');
                if (form.find('.has-error').length) {
                    return false;
                }
                $.ajax({
                    url: '<?= \Yii::$app->urlManager->createUrl(['researchguidance/save1']) ?>',
                    type: 'post',
                    data: form.serialize(),
                    dataType: 'html',
                    error: function () {
                        alert('An error has occured while saving record.');
                        return false;
                    },
                    success: function (data) {
                        if (data) {
                            y = JSON.parse(data);
                            $('#mphil-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_mphil,'</a>'));
                            $('#phd-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_phd,'</a>'));
                            $('#ug-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_mster,'</a>'));
                            $('#total-res-guide-point').html('<a href=\"#\" class=\"res-projopp-xedit\"  data-name=\"sp_points\" data-type=\"textarea\"  data-pk='.concat(y.id ,' data-title=\"Self-Appraisal Score\">',y.sp_points_total,'</a>'));
                           
                            
                            if (y.response === 1) {
                                $('#res-guide-updatekey').val(y.key);
                                $('#res-guide-submit').html('Update').removeClass('btn-success').addClass('btn-warning');
                                $('#jx-res-guide-pub').html("<div class='alert alert-warning' role='alert'>Data saved successfully</div>").show().fadeOut(7000);                                 
							location.reload(true);
						   } else {
                                $('#jx-res-guide-pub').html("<div class='alert alert-warning' role='alert'>Problem in saving form please reload the page</div>").show().fadeOut(7000);

                            }

                        }
                    },
                });
                return false;
            }

            $('#section-47-help').on('click', function (e) {
                e.preventDefault();
            });
            $('#section-47-help').popover({container: 'body',
                content: $('#help47').html(),
            });
        


    </script>
<?php } ?>
<script>
    function finalize(){
            $.ajax({
                url: '<?= \Yii::$app->urlManager->createUrl(['form/finalize']) ?>',
                type: 'post',
                data: {referenceId: "<?= $formId ?>"},
                dataType: 'html',
                error: function () {
                    alert('An error has occured while validating.');
                    return false;
                },
                success: function (data) {
					//alert(data);
					data = JSON.parse(data);
					//alert(data);
					var err1="";
                  if(<?php echo $model->post ;?> == 1){ 
					  if(data.allowedcat == false){
						err1=err1 + "<li>This post is not for your category type.</li>"; 
						document.getElementById("catego").style.backgroundColor = "red"; 						
					  } 
					  if(data.qualification != 1){
						err1=err1 + "<li>Minimum required marks(%/Grade) at the Master�s Degree level not fulfilled</li>"; 
						document.getElementById("gra").style.backgroundColor = "red"; 						
					  }
					  if(data.net != 1){
						  err1=err1 + "<li>NET is required for this post.</li>";
						  document.getElementById("net").style.backgroundColor = "red"; 
					  }
					  
					  if(data.qualification == 1 && data.net == 1 && data.allowedcat == true){
						  window.location ="<?= \Yii::$app->urlManager->createUrl(['form/application', 'id' => Yii::$app->security->hashData($model->id, \Yii::$app->params['hashKey'])]) ?>";
					  }else{ 
					  document.getElementById("head1").innerHTML="You are not qualified because:-";
					  alert('You are not qualified for this post because you are not fulfill the minimum criteria.');
					  }
				  }
                  if(<?php echo $model->post ;?> == 2){
					  
					   if(data.allowedcat == false){
						   
						err1=err1 + "<li>This post is not for your category type.</li>"; 
						document.getElementById("catego").style.backgroundColor = "red"; 						
					  } 
					   if(data.qualification != 1){
						err1=err1 + "<li>Minimum required marks(%/Grade) at the Master�s Degree level not fulfilled</li>"; 
						document.getElementById("gra").style.backgroundColor = "red"; 						
					  }
					   if(data.phd != 1){
						err1=err1 + "<li>Ph.D. is required</li>"; 
						document.getElementById("phd1").style.backgroundColor = "red";
							document.getElementById("pub2").style.backgroundColor = "red"; 
					  }
					    if(data.totalexp != 1){
						err1=err1 + "<li>Required Total years of  Full-time Teaching Experience is not fulfilled</li>"; 
						document.getElementById("exp1").style.backgroundColor = "red"; 						
					  }
					  
					   if(data.pub != 1){
						err1=err1 + "<li>Required total number of Research Papers/Articles + Research Publication(i.e. 4.1 and 4.2) is not fulfilled</li>"; 
						document.getElementById("pub1").style.backgroundColor = "red"; 						
					  }
					 
					  
					  if(data.phdguide != 1){
						err1=err1 + "<li>Atleast 1 Ph.D. Guidance is required either awarded or submitted</li>"; 
						document.getElementById("phdgui1").style.backgroundColor = "red"; 	
							document.getElementById("phdgui2").style.backgroundColor = "red"; 
					  }
					  
					  if(data.qualification == 1 && data.phd == 1 && data.pub == 1 && data.totalexp == 1 && data.phdguide == 1 && data.allowedcat == true){
						  window.location ="<?= \Yii::$app->urlManager->createUrl(['form/application', 'id' => Yii::$app->security->hashData($model->id, \Yii::$app->params['hashKey'])]) ?>";
					  }else{ 
					  document.getElementById("head1").innerHTML="You are not qualified because:-";
					  alert('You are not qualified for this post because you are not fulfill the minimum criteria.');
					  }  
				  }
                  if(<?php echo $model->post ;?> == 3){
					  
					   if(data.allowedcat == false){
						err1=err1 + "<li>This post is not for your category type.</li>"; 
						document.getElementById("catego").style.backgroundColor = "red"; 						
					  } 
					  if(data.qualification != 1){
						err1=err1 + "<li>Minimum required marks(%/Grade) at the Master�s Degree level not fulfilled</li>"; 
						document.getElementById("gra").style.backgroundColor = "red"; 						
					  }
					 
					  if(data.phd != 1){
						err1=err1 + "<li>Ph.D. is required</li>"; 
						document.getElementById("phd1").style.backgroundColor = "red"; 						
					  }
					  if(data.totalexp != 1){
						err1=err1 + "<li>Required Total years of  Full-time Teaching Experience is not fulfilled</li>"; 
						document.getElementById("exp1").style.backgroundColor = "red"; 						
					  }
					   if(data.pub != 1){
						err1=err1 + "<li>Required total number of Research Papers/Articles + Research Publication(i.e. 4.1 and 4.2) is not fulfilled</li>"; 
						document.getElementById("pub1").style.backgroundColor = "red"; 
						document.getElementById("pub2").style.backgroundColor = "red"; 						
					  }
					  
					   
					   if(data.phdguide != 1){
						err1=err1 + "<li>Atleast 1 Ph.D. Guidance is required either awarded or submitted</li>"; 
						document.getElementById("phdgui1").style.backgroundColor = "red";
						document.getElementById("phdgui2").style.backgroundColor = "red"; 						
					  }
					   
					   if(data.qualification == 1 && data.phd == 1 && data.pub == 1 && data.totalexp == 1 && data.phdguide == 1 && data.allowedcat == true){
						  window.location ="<?= \Yii::$app->urlManager->createUrl(['form/application', 'id' => Yii::$app->security->hashData($model->id, \Yii::$app->params['hashKey'])]) ?>";
					  }else{ 
					  document.getElementById("head1").innerHTML="You are not qualified because:-";
					  alert('You are not qualified for this post because you are not fulfill the minimum criteria.');
					  }  
				  }
				  document.getElementById("err").innerHTML=err1;
				  document.getElementById("error").scrollIntoView();
                },
            });
        } 
function percen_grade(){

	var pertype = document.getElementById("academic-pgperna").value;
	var per_grade = document.getElementById("academic-pgpercentage").value;
	
	if(pertype == 2 && per_grade > 10 ){
		alert("Overall Percentage/Final Grade Points Avg.(FGPA) Can't be greater than 10.");
		document.getElementById("academic-pgpercentage").value="";
	}	
}

<?php 
if(isset($rguidance->id)){
	$key1=$rguidance->id;
}else{
	$key1=0;
}
			

$guideform = '<div class="text-center">\
<div class="row"> <div class="col-xs-2"> <strong> M.Phil </strong> </div>\
<div class="col-xs-3"><div class="form-group field-researchguidance-mphilnocandi required">\
<input id="researchguidance-mphilnocandi" class="form-control" name="Researchguidance[mphilNoCandi]" type="text">\
<div class="help-block"></div></div></div>\
<div class="col-xs-2"><div class="form-group field-researchguidance-mphilthesis required">\
<input id="researchguidance-mphilthesis" class="form-control" name="Researchguidance[mphilThesis]" type="text">\
<div class="help-block"></div></div></div><div class="col-xs-2"><div class="form-group field-researchguidance-mphildegree required">\
<input id="researchguidance-mphildegree" class="form-control" name="Researchguidance[mphilDegree]" type="text">\
<div class="help-block"></div></div></div><div class="col-xs-3" id="mphil-res-guide-point"><div class="form-group field-researchguidance-sp_points_mphil required">\
<input id="researchguidance-sp_points_mphil" class="form-control" name="Researchguidance[sp_points_mphil]" type="text">\
<div class="help-block"></div></div></div> </div><div class="row"><div class="col-xs-2"><strong>Ph.D </strong> </div>\
<div class="col-xs-3"><div class="form-group field-researchguidance-phdnocandi required">\
<input id="researchguidance-phdnocandi" class="form-control" name="Researchguidance[phdNoCandi]" type="text">\
<div class="help-block"></div></div></div><div class="col-xs-2"><div class="form-group field-researchguidance-phdthesis required">\
<input id="researchguidance-phdthesis" class="form-control" name="Researchguidance[phdThesis]" type="text">\
<div class="help-block"></div></div></div><div class="col-xs-2"><div class="form-group field-researchguidance-phddegree required">\
<input id="researchguidance-phddegree" class="form-control" name="Researchguidance[phdDegree]" type="text">\
<div class="help-block"></div></div></div><div class="col-xs-3" id="phd-res-guide-point"><div class="form-group field-researchguidance-sp_points_phd required">\
<input id="researchguidance-sp_points_phd" class="form-control" name="Researchguidance[sp_points_phd]" type="text">\
<div class="help-block"></div></div></div></div><div class="form-group text-center ">\
<input name="appKey" value="'.$formId.'" type="hidden"><input id="res-guide-updatekey" name="key" value="'.$key1.'" type="hidden">\
<div align="right"><button type="button" id="res-guide-submit" class="btn btn-success" onclick="guide();">Save Change</button>\
</div> </div>'; 
			?>
function formguide(){
	var l='<?php echo $guideform; ?>';
	document.getElementById("editeguide").innerHTML=l;
}
</script>
<div class="text-center" >

  <?= Html::button('Validate', ['class' => 'btn btn-warning', 'id'=>'validate', 'onclick' => 'finalize();']) ?>
 </div>
 
 </div>
				
				
			</div>
			
			<?php } ?>
</div>

</div>
	


@endsection