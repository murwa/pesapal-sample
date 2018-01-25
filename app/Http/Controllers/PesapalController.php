<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class PesapalController
 *
 * @package App\Http\Controllers
 */
class PesapalController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     */
    public function ipn(Request $request)
    {
        //
    }

    /**
     * Handle paypal success callback
     *
     * @param \Illuminate\Http\Request $request
     */
    public function success(Request $request)
    {
        //
    }
}
