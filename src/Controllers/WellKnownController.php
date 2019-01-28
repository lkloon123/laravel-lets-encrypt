<?php
/**
 * @author Lam Kai Loon <lkloon123@hotmail.com>
 */

namespace NeoSon\LetsEncrypt\Controllers;

use Illuminate\Routing\Controller;

class WellKnownController extends Controller
{
    public function index($key)
    {
        return response()->file(storage_path("letsencrypt/.well-known/acme-challenge/$key"));
    }
}