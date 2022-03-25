<?php

namespace App\Http\Controllers;

use App\Models\ItemOrder;
use App\Models\Wallet;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {               
        // Gelen verilerin toplam fiyatı hesaplanmalı kullanıcının cüzdanınından ilgili miktar düşülmelidir.
        // Ödenen siparişler hesaptan düşülmelidir ve ilgili veritabanından silinmelidir.
        // Aynı sayfaya geri yönlendirilme yapılmalıdır ve ilgili success mesajı gönderilmelidir.


        if($request->has('items') && $request->user()->wallet)
        {   
            $totalAmount = 0;
            $itemIdForClosing = [];

            foreach ($request->items as $key => $item) {
                $totalAmount = $totalAmount + json_decode($item)->amount;
                $itemIdForClosing[] = $key;
            }
            
            $userWallet = Wallet::where("user_id",$request->user()->id)->first();           
            $userEstimatedAmount = $userWallet->amount - $totalAmount;

            if($totalAmount > $userWallet->amount || $userEstimatedAmount < 0)
            {
                return back()->with('error','Your account balance is not available for paying.');
            }
            else
            {
                $remainingAmount = $userWallet->amount - $totalAmount;
                $userWallet->amount = $remainingAmount;
                $userWallet->save();

                foreach($itemIdForClosing as $closedItem){
                    $itemOrder = ItemOrder::where('item_id',$closedItem)->first();
                    $itemOrder->check = 'closed';
                    $itemOrder->save();
                }

                return back()->with('success','Your payment has been received.');
            }
        }
        
    }
}
