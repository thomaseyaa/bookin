<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Mail\AdminNotification;
use App\Mail\UserNotification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Cashier\Cashier;

class CheckoutController extends Controller
{
    public function checkout($id){

        if (session('user') == null){
            return redirect('auth')->with('error', "Connectez ou inscrivez-vous d'abord !");
        }

        if ($id == 'price_1J00C1DsSB57FjAfcyuwIefR'){
            $plan = [
                'name' => 'Basic',
                'price' => '7,99',
            ];
        }
        else{
            $plan = [
                'name' => 'Pro',
                'price' => '17,99',
            ];
        }

        $user = User::find(session('user')->id);
        $intent = $user->createSetupIntent();
        $stripeKey = env('STRIPE_KEY');

        return view('payment.checkout', compact('intent', 'stripeKey'))->with('plan', $plan);
    }

    public function payment(PlanRequest $request){

        $user = User::find(session('user')->id);

        try {
            try {
                $subscription = $user
                    ->newSubscription('default', $request->id)
                    ->withCoupon($request->coupon)
                    ->create($request->payment_method);
            } catch (\Throwable $th) {
                return redirect(url()->previous())->with('error', "Le code promo n'est pas valide !")->withInput();
            }
        } catch (IncompletePayment $e) {
            return redirect()->route('cashier.payment', [
                $e->payment->id, 'redirect' => route('payment.error')
            ]);
        }

        if ($request->id == 'price_1J00C1DsSB57FjAfcyuwIefR'){
            $plan = 'Basic';
            $price = '7,99';
        }
        else {
            $plan = 'Pro';
            $price = '17,99';
        }

        $adminReceive = [
            'email' => $user->email,
            'plan' => $plan,
            'price' => $price,
        ];

        $userReceive = [
            'email' => $user->email,
            'plan' => $plan,
            'price' => $price,
        ];

        Mail::to("75ecc7fe2d-4f6a7b@inbox.mailtrap.io")->send(new AdminNotification($adminReceive));
        Mail::to($user->email)->send(new userNotification($userReceive));

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