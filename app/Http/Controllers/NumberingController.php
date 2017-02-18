<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Numbering;
use App\Hospital;
class NumberingController extends Controller
{
public function getNumber(Request $request){
	if($request->isMethod('post'))
	{
		$this->validate($request,[
			'hospital_id'=> 'required',
			'patient_id'=> 'required|exists:patients,id',
			]);
		//getting hospital
		$hospital = Hospital::where('id',$request->input('hospital_id'))->first();
		dd($hospital);
		//getting quota
		$quota = $hospital->quota_per_day;
		
		//then get last queue no
		$queue_no = Numbering::where('hospital_id',$hospital->id)->max('queue_no');
		// if($queue_no->count() == 0){
		// 	$queue_no = 0;
		// }
		//getting patient
		$patient = Patient::where('patientID',$request->input('patient_id'))->first();
		if($queue_no <= $quota)
		{
			$gotten_queue_no = $queue_no+1;
			Numbering::create([
				'hospital_id' => $hospital->id,
				'patient_id' => $patientID,
				'queue_no' => $gotten_queue_no,
				]);
			//send success sms contains gotten queue number
		}
		else
		{
			//comeback tomorrow quota reached sms
		}
		return redirect()->back();
	}
	//firing sms to patient contains it's queue number
}
}
