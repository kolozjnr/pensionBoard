<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\StaffRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnivController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function dashboard()
    {
        $users = DB::table('staff_records')->paginate(5);
        return view('admin.index', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $staff = DB::table('staff_records')->where('staff_id','like','%'.$search. '%')->get();
        if($staff->isEmpty())
        {
            return back()->with('error', "No Record Found For '$search'");
        }
        else{
            return view('admin.show', compact('staff'));
        }
    }

    public function pension(Request $request)
    {
        //$page = 0;
        $search = $request->get('search');
        $staff = DB::table('staff_records')->where([
            ['staff_id','like','%'.$search. '%']
            ])
        ->where([
            ['status', '=', 'Retired']
            ])
        ->limit('1')->get();
        if($staff->isEmpty())
        {
            return back()->with('error', "No Record Found For '$search'");
        }
        else{
            foreach($staff as $user)
            {
                $employed = Carbon::parse($user->date_employed);
                $retired_date=Carbon::parse($user->date_retired);
                $userdate = $employed->diffInMonths($retired_date);
               

                $payable = number_format($user->basic_salary/$userdate*1500);
            }
            return view('admin.pension-scheme', compact('user','userdate','payable','retired_date','employed','search'));
        }
       
    }

    //Get Employee details
   /* public function getEmployeeDetails($empid = 0){

        $staff = StaffRecord::find($empid);
  
        $html = "";
        if(!empty($staff)){
           $html = "<tr>
                <td width='30%'><b>ID:</b></td>
                <td width='70%'> ".$user->id."</td>
             </tr>
             <tr>
                <td width='30%'><b>Username:</b></td>
                <td width='70%'> ".$user->lname."</td>
             </tr>
             <tr>
                <td width='30%'><b>Name:</b></td>
                <td width='70%'> ".$user->fname."</td>
             </tr>
             <tr>
                <td width='30%'><b>Email:</b></td>
                <td width='70%'> ".$user->email."</td>
             </tr>
             <tr>
                <td width='30%'><b>Age:</b></td>
                <td width='70%'> ".$user->dob."</td>
             </tr>";
        }
        $response['html'] = $html;
  
        return response()->json($response);
     }*/

     public function profile(){
        $users = User::all();
        foreach($users as $user)
        {
            return view("admin.users-profile", compact("user"));
        }
     }
     public function about(){
        return view("users.about");
     }
     public function contact(){
        return view("users.contact");
     }
  
}
