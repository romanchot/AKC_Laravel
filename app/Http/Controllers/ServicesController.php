<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
  /**
   * Create a new controller instance.
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   * @return \Illuminate\Contracts\Support\Renderable
   */

  /**
   * [index description]
   * @return [type] [description]
   */
  public function index()
  {
      $services = Service::all();
      return view('services', compact('services'));
  }

  /**
   * [formServices description]
   * @return [type] [description]
   */
  public function formServices()
  {
      return view('formServices');
  }

  /**
   * [saveServices description]
   * @param  Request $request [description]
   * @return [type]           [description]
   */
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

  /**
   * [editService description]
   * @param  Service $service [description]
   * @return [type]           [description]
   */
  public function editService(Service $service){
    return view('editServices', compact('service'));
  }

  /**
   * [updateService description]
   * @param  Service $service [description]
   * @return [type]           [description]
   */
  public function updateService(Service $service){
    $service->update(request()->all());
    return redirect('/services');
  }

  /**
   * [destroy description]
   * @param  Service $service [description]
   * @return [type]           [description]
   */
  public function destroy(Service $service){
    $service->delete();
    return back()->with('message', 'Service deleted Successfully!!!');
  }
}
