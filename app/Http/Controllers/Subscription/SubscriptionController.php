<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        
       $plano = session()->get('plano');
       if($plano == "plano01"){
            $msg = "Bronze R$ 19,99/mês";
       }else  if($plano == "plano02"){
            $msg = "Prata R$ 49,99/mês";
       }else  if($plano == "plano03"){
            $msg = "Ouro R$ 99,99/mês";
       }else{
            return redirect()->route('planos');
       }
           
        return view('subscriptions.index', ['intent' => auth()->user()->createSetupIntent(), 'plano' =>  $msg]);
    }

    public function store(Request $request)
    {
        $plano = session()->get('plano');
       if($plano == "plano01"){
            $id = "price_1J0FPWGO64tpjsVgr8nLrnT3";
            $clik = 2;
       }else  if($plano == "plano01"){
            $id = "price_1J0FPWGO64tpjsVgr8nLrnT3";
            $clik = 8;
       }else  if($plano == "plano01"){
            $id = "price_1J0FPWGO64tpjsVgr8nLrnT3";
            $clik = 99999;
       }
        $request->user()
                ->newSubscription('default', $id)
                ->create($request->token);

        if($clik == 99999){
            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['clik' => 99999]); 
        }
        DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['clik' => (auth()->user()->clik + $clik)]);        

        return redirect()->route('dashboard');
    }

    public function account()
    {
        $invoices = auth()->user()->invoices();

        return view('subscriptions.account', compact('invoices'));
    }

    public function downloadInvoice($invoiceId)
    {
        return Auth::user()
                    ->downloadInvoice($invoiceId, [
                        'vendor' => config('app.name'),
                        'product' => 'Ckeck KM'
                    ]);
    }

    public function cancel()
    {
        auth()->user()->subscription('default')->cancel();

        return redirect()->route('subscriptions.account');
    }

    public function resume()
    {
        auth()->user()->subscription('default')->resume();

        return redirect()->route('subscriptions.account');
    }
}