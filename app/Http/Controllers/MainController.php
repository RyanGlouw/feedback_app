<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.main');
    }

    public function create(Request $request)
    {

        if ($request->isMethod('get')) {
            return view('feedback');
        } else {
            $request->validate([
                'name' => 'required|max:50',
                'phone_number' => 'required',
                'company' => 'required',
                'application_name' => 'required',
                'message' => 'required',
                'file' => 'nullable|file',
            ]);
            Application::create(
                ['name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'company' => $request->company,
                    'application_name' => $request->application_name,
                    'message' => $request->message,
                    'file' => $request->file,
                    'user_id' => auth()->user()->id
                ]

            );
        return redirect()->route('main')->with('success', 'Заявка успешно создана');
        };

    }

    public function store()
    {
        $user = User::find(auth()->user()->id);
        $applications = $user->applications()->orderBy('id')->get();
        return view('orders', compact('applications'));
    }
}
