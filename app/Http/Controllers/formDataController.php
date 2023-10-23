<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class formDataController extends Controller
{
    public function addData(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'email' => 'email|required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            // Validation failed, you can perform actions such as redirection
            return redirect('/' . '#contact')
                ->withErrors($validator) // Send the errors back to the view
                ->withInput(); // Send the input data back to the form
        }

        $emails = DB::table('form_data')->upsert([
            'name' => $req->name,
            'email' => $req->email,
            'topic' => $req->subject,
            'message' => $req->message
        ], ['email'], ['topic', 'message', 'name']);
        if ($emails) {
            return redirect('/' . '#contact')->with('success', "Thanks for Contacting Us. I'll reach you soon !!");
        } else {
            return redirect('/' . '#contact')->with('fail', "Something went wrong !!");
        }
    }
    public function addData2(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'message2' => 'required'
        ]);

        if ($validator->fails()) {
            // Validation failed, you can perform actions such as redirection
            return redirect('/' . '#footer')
                ->withErrors($validator) // Send the errors back to the view
                ->withInput(); // Send the input data back to the form
        }

        $check = DB::table('form2')->insert([
            'message' => $req->message2
        ]);
        // return redirect('/'.'#footer')->with('success2', 'Thanks for contacting. Reach you soon ...');
        if ($check)
            return redirect('/' . '#footer')->with('success2', 'Thanks for contacting. Reach you soon ...');

        else
            return redirect('/' . '#footer')->with('fail2', 'Something went wrong !!!');
    }

    public function deleterow($id)
    {
        $success = DB::table('form_data')->where('id', '=', $id)->delete();
        if ($success)
            return redirect('/dashboard')->with('success', 'Record Deleted Successfully !!');
        else
            return redirect('/dashboard')->with('fail', 'Record could not be Deleted!!');
    }
}
