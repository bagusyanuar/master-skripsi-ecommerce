<?php


namespace App\Http\Controllers\Member;


use App\Helper\CustomController;

class HomepageController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('member.index');
    }
}
