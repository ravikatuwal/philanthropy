<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IstavrityController extends Controller
{
    public function Index(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $istavrity = DB::table('accounts')
            ->where('family_code',"LIKE", "%$search%")
            ->orWhere('full_name',"LIKE", "%$search%")
            ->orWhere('ritwik_name',"LIKE", "%$search%")->get();
        }else{
            $istavrity = DB::table('accounts')->orderBy('id', 'desc')->get();
            
        }
        return view('backend.istavrity.index', compact('istavrity', 'search'));
        
    }

    public function PrntPriview(Request $request, $search){
        
        $search = $request['search'] ?? "";
        $mainaccount = DB::table('mainaccount')->where('family_code',"LIKE", "%$search%")->first();
        if($search != ""){
            $istavrity = DB::table('accounts')
            ->where('family_code',"LIKE", "%$search%")
            ->orWhere('full_name',"LIKE", "%$search%")
            ->orWhere('ritwik_name',"LIKE", "%$search%")->get();
        }else{
            $istavrity = DB::table('accounts')->orderBy('id', 'desc')->get();
            
        }
        return view('backend.istavrity.printistavrity', compact('istavrity', 'search', 'mainaccount'));
    }
}
