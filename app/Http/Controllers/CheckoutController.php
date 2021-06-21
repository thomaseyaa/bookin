<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

class CheckoutController extends Controller
{
    public function checkout(Request $request){

        if (session('user') == null){
            return redirect('auth')->with('error', "Connectez ou inscrivez-vous d'abord !");
        }
        $user = User::find(session('user')->id);
        $intent = $user->createSetupIntent();
        $stripeKey = env('STRIPE_KEY');

        return view('payment.checkout', compact('intent', 'stripeKey'));
    }

    public function payment(PlanRequest $request){

        $user = User::find(session('user')->id);

        try {
            $subscription = $user
                ->newSubscription('default', $request->id)
                ->withCoupon($request->coupon)
                ->create($request->payment_method);
        } catch (IncompletePayment $e) {
            return redirect()->route('cashier.payment', [
                $e->payment->id, 'redirect' => route('payment.error')
            ]);
        }

        return view('payment.success');
    }

    public function paymentSuccess(){

        if (!session('user') == null){
            return redirect('auth');
        }
        return view('payment.success');
    }

    public function paymentError(){

        if (!session('user') == null){
            return redirect('auth');
        }
        return view('payment.error');
    }
}