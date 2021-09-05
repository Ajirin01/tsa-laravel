<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LocationRepo;
use App\VacancyApplication;

class ApplicationController extends Controller
{
    public function __construct(LocationRepo $loc)
    {
        $this->loc = $loc;
    }
    
    public function vacancyForm(){
        $d['states'] = $this->loc->getStates();
        $d['nationals'] = $this->loc->getAllNationals();
        $d['title'] = 'Vacancy Form';
        return view('vacancy-form', $d);
    }

    public function vacancySubmit(Request $request){
        // return response()->json($request);
        $data = [];
        $data['applicant_name'] = $request->applicant_name;
        $data['post_applying_for'] = $request->post_applying_for;
        $data['applicant_present_address'] = $request->applicant_present_address;
        $data['applicant_age'] = $request->applicant_age;
        $data['applicant_gender'] = $request->applicant_gender;
        $data['applicant_phone'] = $request->applicant_phone;
        $data['status'] = 'pending';
        $data['form_data'] = json_encode($request->all());

        // return response()->json($request->all());
        $create_application = VacancyApplication::create($data);
        if($create_application){
            return redirect('/')->with('msg', 'Application Successfully Submitted!');
        }else{
            return redirect()->back()->with('error', 'Application Could not be Successfully Submitted!');
        }
    }

    public function get_lga($state_id){
        //        $state_id = Qs::decodeHash($state_id);
        //        return ['id' => Qs::hash($q->id), 'name' => $q->name];

        $lgas = $this->loc->getLGAs($state_id);
        return $data = $lgas->map(function($q){
            return ['id' => $q->id, 'name' => $q->name];
        })->all();
    }
}
