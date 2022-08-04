<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Mainaccount;
class AccountController extends Controller
{
    public function Index(){
        $account = DB::table('accounts')->orderBy('family_code', 'desc')->paginate(15);
        return view('backend.account.index', compact('account'));
    }

    public function AddAccount(){
        $family_code = DB::table('mainaccount')->orderBy('family_code', 'asc')->get();
        return view('backend.account.create', compact('family_code'));
    }

    public function StoreAccount(Request $request){
        $validatedData = $request->validate([
            'family_code' => ['max:255'],
            'full_name' => ['max:255'],
            'ritwik_name' => ['max:255'],
            'swastyayani' => ['max:255'],
            'istabhrity' => ['max:255'],
            'aacharyabhrity' => ['max:255'],
            'dakshina' => ['max:255'],
            'sangathani' => ['max:255'],
            'aanandabaajar' => ['max:255'],
            'pranami' => ['max:255'],
            'swaawa' => ['max:255'],
            'ritwiki' => ['max:255'],
            'utsaw' => ['max:255'],
            'dikshyapra' => ['max:255'],
            'aapra' => ['max:255'],
            'paribhrity' => ['max:255'],
            'wiwidh' => ['max:255'],

        ]);

        $data = array();
        $data['family_code'] = $request->family_code;
        $data['full_name'] = $request->full_name;
        $data['ritwik_name'] = $request->ritwik_name;
        $data['swastyayani'] = $request->swastyayani;
        $data['istabhrity'] = $request->istabhrity;
        $data['aacharyabhrity'] = $request->aacharyabhrity;
        $data['dakshina'] = $request->dakshina;
        $data['sangathani'] = $request->sangathani;
        $data['aanandabaajar'] = $request->aanandabaajar;
        $data['pranami'] = $request->pranami;
        $data['swaawa'] = $request->swaawa;
        $data['ritwiki'] = $request->ritwiki;
        $data['utsaw'] = $request->utsaw;
        $data['dikshyapra'] = $request->dikshyapra;
        $data['aapra'] = $request->aapra;
        $data['paribhrity'] = $request->paribhrity;
        $data['wiwidh'] = $request->wiwidh;
        DB::table('accounts')->insert($data);

        $notification = array(
            'message' => 'व्यक्तिगत विवरण खाता डाटाबेसमा सेभ भयो',
            'alert-type' => 'success'
        );

        return Redirect()->route('account')->with($notification);
    }

    public function EditAccount($id){
        $account = DB::table('accounts')->where('id', $id)->first();
        $mainaccount = DB::table('mainaccount')->get();
        return view('backend.account.edit', compact('account','mainaccount'));
    }

    public function UpdateAccount(Request $request, $id){
        $validatedData = $request->validate([
            'family_code' => ['max:255'],
            'full_name' => ['max:255'],
            'ritwik_name' => ['max:255'],
            'swastyayani' => ['max:255'],
            'istabhrity' => ['max:255'],
            'aacharyabhrity' => ['max:255'],
            'dakshina' => ['max:255'],
            'sangathani' => ['max:255'],
            'aanandabaajar' => ['max:255'],
            'pranami' => ['max:255'],
            'swaawa' => ['max:255'],
            'ritwiki' => ['max:255'],
            'utsaw' => ['max:255'],
            'dikshyapra' => ['max:255'],
            'aapra' => ['max:255'],
            'paribhrity' => ['max:255'],
            'wiwidh' => ['max:255'],

        ]);

        $data = array();
        $data['family_code'] = $request->family_code;
        $data['full_name'] = $request->full_name;
        $data['ritwik_name'] = $request->ritwik_name;
        $data['swastyayani'] = $request->swastyayani;
        $data['istabhrity'] = $request->istabhrity;
        $data['aacharyabhrity'] = $request->aacharyabhrity;
        $data['dakshina'] = $request->dakshina;
        $data['sangathani'] = $request->sangathani;
        $data['aanandabaajar'] = $request->aanandabaajar;
        $data['pranami'] = $request->pranami;
        $data['swaawa'] = $request->swaawa;
        $data['ritwiki'] = $request->ritwiki;
        $data['utsaw'] = $request->utsaw;
        $data['dikshyapra'] = $request->dikshyapra;
        $data['aapra'] = $request->aapra;
        $data['paribhrity'] = $request->paribhrity;
        $data['wiwidh'] = $request->wiwidh;
        DB::table('accounts')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'व्यक्तिगत विवरण खाता डाटाबेसमा अपडेट भयो',
            'alert-type' => 'success'
        );

        return Redirect()->route('account')->with($notification);
    }

    public function DeleteAccount($id){
        DB::table('accounts')->where('id', $id)->delete();
        $notification = array(
            'message' => 'व्यक्तिगतखाता डाटाबेसमा डिलिट भयो',
            'alert-type' => 'error'
        );
        return Redirect()->route('account')->with($notification);
    }
}
