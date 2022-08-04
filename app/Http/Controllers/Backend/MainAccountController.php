<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MainAccountController extends Controller
{
    public function Index(){
        $mainaccount = DB::table('mainaccount')->orderBy('family_code', 'desc')->paginate(15);
        return view('backend.mainaccount.index', compact('mainaccount'));
    }


    public function AddMainAccount(){
        return view('backend.mainaccount.create');
    }


    public function StoreMainAccount(Request $request){
        $validatedData = $request->validate([
            'family_code' => ['required', 'unique:mainaccount', 'max:255'],
            'account_name' => ['required', 'max:255'],
        ]);

        $data = array();
        $data['family_code'] = $request->family_code;
        $data['account_name'] = $request->account_name;
        DB::table('mainaccount')->insert($data);
        $notification = array(
            'message' => 'खाता डाटाबेसमा सेभ भयो',
            'alert-type' => 'success'
        );
        return Redirect()->route('mainaccount')->with($notification);
    }

    public function EditMainAccount($family_code){
        $mainaccount = DB::table('mainaccount')->where('family_code', $family_code)->first();
        return view('backend.mainaccount.edit', compact('mainaccount'));
    }

    public function UpdateMainAccount(Request $request, $family_code){
        $data = array();
        $data['family_code'] = $request->family_code;
        $data['account_name'] = $request->account_name;
        DB::table('mainaccount')->where('family_code', $family_code)->update($data);
        $notification = array(
            'message' => 'खाता डाटाबेसमा अपडेट भयो',
            'alert-type' => 'success'
        );
        return Redirect()->route('mainaccount')->with($notification);
    }

    public function DeleteMainAccount($family_code){
        DB::table('mainaccount')->where('family_code', $family_code)->delete();
        $notification = array(
            'message' => 'खाता डाटाबेसमा डिलिट भयो',
            'alert-type' => 'error'
        );
        return Redirect()->route('mainaccount')->with($notification);
    }
}
