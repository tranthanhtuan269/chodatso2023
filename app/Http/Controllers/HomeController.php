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

    public function crawlData(){

        $city = City::where('status', 0)->first();
        if($city){
            $url = "https://dothi.net/Handler/SearchHandler.ashx?module=GetDistrict";

            $ch = curl_init ( $url );
            curl_setopt_array ( $ch, array (
                    CURLOPT_POST => 1,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_VERBOSE => true,
                    CURLOPT_POSTFIELDS => array (
                            'cityCode' => $city->slug
                    ) 
            ));
            $result = curl_exec ($ch);
            curl_close ($ch);
            $data = json_decode($result);
            foreach($data as $obj){
                $district = new District;
                $district->slug = Str::of($obj->Text)->slug('-');
                $district->name = $obj->Text;
                $district->city_id = $city->id;
                $district->save();
                echo $obj->Text . '<br />';
            }
            $city->status = 1;
            $city->save();
            echo 'done';
        }
    }

    public function crawlDistrict(){

        $district = District::where('status', 0)->first();
        if($district){
            $url = "https://dothi.net/Handler/SearchHandler.ashx?module=GetWard";

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
            foreach($data as $obj){
                $ward = new Ward;
                $ward->slug = Str::of($obj->Text)->slug('-');
                $ward->name = $obj->Text;
                $ward->prefix = $obj->WardPrefix;
                $ward->district_id = $district->id;
                $ward->save();
                echo $obj->Text . '<br />';
            }
            $district->status = 1;
            $district->save();
            echo 'done';
        }
    }

    public function crawlStreet(){

        $district = District::where('status', 1)->first();
        if($district){
            $url = "https://dothi.net/Handler/SearchHandler.ashx?module=GetStreet";

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
            echo 'Quận/Huyện: ' . $district->name . '<br />';
            foreach($data as $obj){
                $street = new Street;
                $street->slug = Str::of($obj->Text)->slug('-');
                $street->name = $obj->Text;
                $street->prefix = $obj->StreetPrefix;
                $street->district_id = $district->id;
                $street->save();
                echo $obj->Text . '<br />';
            }
            $district->status = 2;
            $district->save();
            echo 'done';
        }else{
            echo 'did';
        }
    }

    public function crawlProject(){

        $district = District::where('status', 2)->first();
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
                $project->street_dothi = $obj->StreetId;
                $project->ward_dothi = $obj->WardId;
                $project->save();
                echo $obj->Text . '<br />';
            }
            $district->status = 3;
            $district->save();
            echo 'done';
        }else{
            echo 'did';
        }
    }
}
