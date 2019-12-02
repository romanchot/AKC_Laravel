<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
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
      $services = Service::all();
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
      Service::create($request->all());
      return back()->with('message', 'Service created Successfully!!!');
  }

  public function editService(Service $service){
    return view('editServices', compact('service'));
  }

  public function updateService(Service $service){
    $service->update(request()->all());
    return redirect('/services');
  }

  public function destroy(Service $service){
    $service->delete();
    return back()->with('message', 'Service deleted Successfully!!!');
  }
}
