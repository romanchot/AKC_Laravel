<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        $services = App\Service::all();
        return view('services', compact('services'));
    }

    public function formServices()
    {
        return view('formServices');
    }

    public function saveServices(Request $request)
    {

        $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
          'address' => 'required'
        ]);

        App\Service::create($request->all());

        return back()->with('message', 'Service created Successfully!!!');
    }

    public function destroy(Service $service){
      $note-delete();

      return back()->with('message', 'Service deleted Successfully!!!');

    }
}
