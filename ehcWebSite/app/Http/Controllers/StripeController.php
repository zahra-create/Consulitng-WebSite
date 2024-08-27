<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class StripeController extends Controller
{   public $stripe;

    public function __construct()
	{
		$this->stripe = new \Stripe\StripeClient(config('stripe.secret_key'));
	}

    public function pay(Request $request)
	{	$montant = $request->input('montant');
		$entreprise = $request->input('company');
		$nom = $request->input('nom');
		$prenom = $request->input('prenom');
		$devise = $request->input('devise');
		
		$service_name = $request->input('service');
		$session = $this->stripe->checkout->sessions->create([
			'mode' => 'payment',


			'success_url' => route('paiement', ['status' => 'success']),
                        'cancel_url' => route('paiement', ['status' => 'fail']),

			'line_items' => [
			[
                          'price_data' => [
                          'currency' => $devise,
                          'product_data' => [
                          'name' => $service_name,
                           ],
                          'unit_amount' => $montant * 100,  //price * 100
                           ],
                          'quantity' => 1,
                           ],		

					],
			
			
		]);

		// enregistrer la transaction dans la BD
		DB::table('transactions')->insert([
			'transaction_id' => $session->id,
			'montant' => $montant,
			'devise' => $devise,
			'nom et prenom' => $nom . ' ' . $prenom,
			'entreprise' => $entreprise,
			'service' => $service_name,
			'session_id' => $session->id,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect($session->url);
	}

   
}
