<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use App\Models\Project;
use App\Models\Street;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getDistricts(Request $request, $id){
        $districts = District::where('city_id', $id)->pluck('name', 'id');
        return response()->json([
            'code' => 200,
            'districts' => $districts,
        ]);
    }

    public function getWards(Request $request, $id){
        $wards = Ward::where('district_id', $id)->pluck('name', 'id');
        return response()->json([
            'code' => 200,
            'wards' => $wards,
        ]);
    }

    public function getProjects(Request $request, $id){
        $projects = Project::where('district_id', $id)->pluck('name', 'id');
        return response()->json([
            'code' => 200,
            'projects' => $projects,
        ]);
    }

    public function getStreets(Request $request, $id){
        $streets = Street::where('district_id', $id)->pluck('name', 'id');
        return response()->json([
            'code' => 200,
            'streets' => $streets,
        ]);
    }

    public function crawlProject(){

        $district = District::where('status', 3)->first();
        if($district){
            $url = "https://dothi.net/Handler/SearchHandler.ashx?module=GetProject";

            $ch = curl_init ( $url );
            curl_setopt_array ( $ch, array (
                    CURLOPT_POST => 1,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_VERBOSE => true,
                    CURLOPT_POSTFIELDS => array (
                            'distId' => $district->id
                    ) 
            ));
            $result = curl_exec ($ch);
            curl_close ($ch);
            $data = json_decode($result);
            echo 'Quận/Huyện: <b>' . $district->name . '</b><br />';
            foreach($data as $obj){
                $project = new Project;
                $project->slug = Str::of($obj->Text)->slug('-');
                $project->name = $obj->Text;
                $project->lat = $obj->Lat;
                $project->lng = $obj->Lng;
                $project->district_id = $district->id;
                $project->street_dothi = $obj->StreetId;
                $project->ward_dothi = $obj->WardId;
                $project->save();
                echo $obj->Text . '<br />';
            }
            $district->status = 4;
            $district->save();
            echo 'done';
        }else{
            echo 'did';
        }
    }
}
