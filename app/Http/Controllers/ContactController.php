<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Rules\IsValidEmail;
use App\Rules\IsValidPhone;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itens = Contact::all();
        return view('contact.index')->with('itens', $itens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => ['required','max:255'],
            'email' => ['required','max:255','string',new IsValidEmail],
            'phone' => ['required','string',new IsValidPhone],
            'message' => ['required'],
            'file' => ['required','max:500','mimes:pdf,doc,docx,odt,txt'] 
        ));

        $row = new Contact();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->phone = $request->phone;
        $row->message = $request->message;
        $row->ip = $request->ip();
        $row->save();
        $row->file = $request->file('file')->store('/contact/'.$row->id);
        $row->save();
        \Illuminate\Support\Facades\Mail::send(new \App\Mail\contact($row));

        Session::flash('success', 'Contato realizado com sucesso.');
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Contact::find($id);
        if(!$row)
        {
            App::abort(404);
        }
        return view('contact.show')->with('row', $row);
    }
}
