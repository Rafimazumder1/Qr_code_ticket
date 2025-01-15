<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BercodeController extends Controller
{
    // public function index()
    // {
    //     // Simulate ticket sales data (replace this with your database query)
    //     $ticketSales = [
    //         (object) [
    //             'TKT_SALE_ID' => 1,
    //             'FROM_STATION' => 'Station A',
    //             'TO_ST_NAME' => 'Station B',
    //             'FARE' => 100,
    //             'TKT_NO' => 'TKT12345',
    //             'ISSUE_DATE' => '2024-12-21',
    //             'MOBILE_NO' => '1234567890',
    //             'PAY_BANK' => 'Bank A',
    //             'PAY_MODE' => 'Credit Card',
    //         ],
    //         (object) [
    //             'TKT_SALE_ID' => 2,
    //             'FROM_STATION' => 'Station X',
    //             'TO_ST_NAME' => 'Station Y',
    //             'FARE' => 200,
    //             'TKT_NO' => 'TKT67890',
    //             'ISSUE_DATE' => '2024-12-22',
    //             'MOBILE_NO' => '0987654321',
    //             'PAY_BANK' => 'Bank B',
    //             'PAY_MODE' => 'Cash',
    //         ],
    //     ];

    //     // Generate QR codes for each ticket
    //     foreach ($ticketSales as $ticket) {
    //         $ticket->qr_code = \DNS2D::getBarcodeHTML(json_encode($ticket), 'QRCODE');
    //     }

    //     // Pass the data to the view
    //     return view('bercode.index', compact('ticketSales'));
    // }

    public function index($id)
    {
        // Execute the SQL query
        $ticket = DB::select("
            SELECT
                TKT_SALE_ID,
                FROM_STATION,
                TO_ST_NAME,
                FARE,
                TKT_NO,
                ISSUE_DATE,
                MOBILE_NO,
                PAY_BANK,
                PAY_MODE
            FROM V_TICKET_SALE_DTL
            WHERE TKT_SALE_ID = :id", ['id' => $id]);

        // dd($ticket); // Optional: to check the data in the controller

        // Pass the data to the view
        return view('bercode.index', ['ticket' => $ticket[0]]);
    }

}
