<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentTransaction extends Model
{
    protected $table = 'payment_transactions';





    /**
	 * @desc Get student sessionwise class info
	 *

     * @param int $feeBreakupId
	 * 
	 * @return array
	 *
	 */



     public function getTransactionHistoryByBreakupId(int $feeBreakupId):array{
        return PaymentTransaction::select()
        ->where('students_fees_breakups_id', $feeBreakupId)
        ->get()
        ->toArray();


    }




}