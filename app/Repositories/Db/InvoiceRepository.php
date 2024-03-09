<?php

namespace App\Repositories\Db;

use App\Models\Invoice;

class InvoiceRepository
{
    public function getAllInvoicesWithUserName()
    {
        return Invoice::with('user')->get()->map(function ($invoice) {
            return [
                'id' => $invoice->id,
                'invoice_number' => $invoice->invoice_number,
                'amount' => $invoice->amount,
                'invoice_date' => $invoice->invoice_date,
                'user_id' => $invoice->user_id,
                'user_name' => $invoice->user->name,
                'paid' => $invoice->paid,
                'service_ids' => $invoice->service_ids,
            ];
        });
    }
}
