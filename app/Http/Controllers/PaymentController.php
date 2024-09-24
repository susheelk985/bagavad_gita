<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function createUpiLink()
    {
        $payeeAddress = 'susheelk985@oksbi';
        $payeeName = 'SUSHEEL KUMAR';
        $transactionId = uniqid(); // Unique transaction ID
        $transactionRef = 'order' . rand(1000, 9999); // Order ID or reference ID
        $transactionNote = 'Payment for Bagavad Gita site ' . $transactionRef;
        $amount = 100; // Amount in INR
        $currency = 'INR';
        $callbackUrl = route('upi-callback'); // Laravel route to handle callback
        // Check the generated callback URL
        Log::info('Generated callback URL: ' . $callbackUrl);

        $upiLink = "upi://pay?pa=" . urlencode($payeeAddress) . "&pn=" . urlencode($payeeName) . "&tid=" . urlencode($transactionId) . "&tr=" . urlencode($transactionRef) . "&tn=" . urlencode($transactionNote) . "&am=" . urlencode($amount) . "&cu=" . urlencode($currency) . "&callback_url=" . urlencode($callbackUrl);
        // Storage::put('payment.txt', $upiLink);
        // Log the generated UPI link for debugging
        Log::info('Generated UPI link: ' . $upiLink);

        return redirect($upiLink);
    }

    public function handleCallback(Request $request)
    {
        Log::info('UPI Callback Request:', $request->all()); // Log incoming data
        $status = $request->get('status'); // Get transaction status from request
        $transactionId = $request->get('transaction_id');
        $orderId = $request->get('order_id');
        Storage::put('payment.txt', 'tst');

        if ($status == 'SUCCESS') {
            // Payment is successful
            // Handle success logic (e.g., update order status, notify user)
            Storage::put('payment.txt', 'success');
            return view('success');
        } else {
            // Payment failed or was cancelled
            // Handle failure logic (e.g., show error message, retry payment)
            Storage::put('payment.txt', 'failure');
            return view('failure');
        }
    }
}
