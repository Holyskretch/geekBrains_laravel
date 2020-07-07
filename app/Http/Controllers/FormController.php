<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\UploadingRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function feedback(){
        return view('form.feedback');
    }

    public function uploading(){
        return view('form.uploading');
    }

    public function feedbackAdd(FeedbackRequest $request){
        $login = $request->input('login');
        $comment = $request->input('comment');

        $str = "Login = ".$login." Comment = ".$comment."; ";
        file_put_contents(storage_path('app/public/feedback.txt'), $str, FILE_APPEND);

        return redirect()->route('index');
    }

    public function uploadingAdd(UploadingRequest $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $text = $request->input('text');

        $str = "Name = ".$name." Phone = ".$phone." Email = ".$email." Text = ".$text;
        file_put_contents(storage_path('app/public/uploading.txt'), $str, FILE_APPEND);

        return redirect()->route('index');
    }
}
