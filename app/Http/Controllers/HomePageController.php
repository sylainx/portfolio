<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $skills = Skill::all();

        return view('welcome', compact(['skills']));
    }



    public function testMail() {
        dd('Not implemented');
        Mail::to('sylainx.dev@gmail.com')->send(new ContactMail('sylainx', 'sylainx.dev@gmail.com', 'test subject', 'test message'));
    }
}
