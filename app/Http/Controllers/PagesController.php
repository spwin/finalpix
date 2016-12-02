<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;


class PagesController extends Controller
{
    public function index(){
        $agent = new Agent();
        if($agent->isMobile() || $agent->isTablet()){
            return view('pages.mobile');
        } else {
            return view('pages.homepage');
        }
    }


    public function seo(){
        return view('pages.seo');
    }

    public function programming(){
        return View('pages.programming');
    }

    public function design(){
        return View('pages.design');
    }

    public function services(){
        return View('pages.services');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function sendMail(Request $request) {
        $rules = array(
            'name' => 'required|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'numeric|digits_between:9,15',
            'subject' => 'required|max:100',
            'content' => 'required|min:10'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();
            foreach($messages as $field => $message){
                $request->merge(array($field => ''));
            }
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $data = [
                'email' => 'info@pixsens.co.uk',
                'name' => 'Pixsens Team'
            ];
            Mail::send('emails.contact', ['content' => $request->get('content'), 'phone' => $request->get('phone'), 'name' => $request->get('name')], function ($m) use ($data, $request) {
                $m->from($request->get('email'), $request->get('name'));
                $m->to($data['email'], $data['name'])->subject($request->get('subject'));
            });
            return Redirect::back()->with('success', 'Thank you for your message :)');
        }
    }
}
