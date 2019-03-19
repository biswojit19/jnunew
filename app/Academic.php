<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = ['qualification', 'pgYear', 'pgPercentage', 'pgSubject', 'pgCollege', 'pgUniversity', 'net', 'phdNA', 'mphilNA', 'totalPoints', 'pgPerNa', 'ugPerNa','userId', 'qualification', 'ugYear', 'urResultType', 'pgYear', 'pgResultType', 'mphilYear', 'mphilResultType', 'net', 'netSubject', 'status', 'profileId', 'phdNA', 'mphilNA', 'totalPoints', 'ugPoints', 'pgPoints', 'mphilPoints', 'phdPoints', 'netPoints', 'pgPerNa', 'ugPerNa', 'mphilPerNa','ugPercentage', 'pgPercentage', 'mphilPercentage','phdRegDate', 'phdAwardDate', 'oDist', 'oYear', 'created_at', 'updated_at', 'phdSubDate', 'oDateSub','mphilStartDate', 'mphilSubmissionDate', 'mphilAwardDate','phdThesisTitle', 'oTitle', 'oDetails', 'netExemptionExplain', 'mphilThesisTitle','ugSubject', 'ugCollege', 'ugUniversity', 'ugUpload', 'pgSubject', 'pgCollege', 'pgUniversity', 'pgUpload', 'mphilSubject', 'mphilCollage', 'mphilUniversity', 'mphilUpload', 'phdUpload', 'oDistUpload', 'netUpload', 'phdUniversity', 'oUniversity', 'enetUpload', 'ugUpload_marksheat', 'pgUpload_marksheat','netCertificateNo','elligible_status','ip'];
    
    
}
