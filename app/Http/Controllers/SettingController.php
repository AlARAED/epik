<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $setting = Setting::all();
      // dd(count($setting));

     //   return view('products.index',compact('products'))
         //   ->with('i', (request()->input('page', 1) - 1) * 5);
         return view('setting.index',compact('setting'));
    }



    public function boxsommer()
    {
          $setting = Setting::all();
      // dd(count($setting));

     //   return view('products.index',compact('products'))
         //   ->with('i', (request()->input('page', 1) - 1) * 5);
         return view('setting.box',compact('setting'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'address' => 'required',
            'telephone' => 'required',
        ]);

        Setting::create($request->all());

        return redirect()->route('setting')
                        ->with('success','Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $setting)
    {

       $setting =    Setting::find($setting);
     //  dd($setting);
        return view('setting.show',compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $setting)
    {
       // dd($setting);
         $setting =    Setting::find($setting);
        return view('setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
  //  public function update(Request $request, Setting $setting)
    public function update(Request $request,  $id)
    {
       // dd("123");
      //  dd($id);
      $setting = Setting::find($id);
        $request->validate([
            'address' => 'required',
            'telephone' => 'required',
        ]);

        $setting->update($request->all());

        return redirect()->route('setting')
                        ->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
   /* public function destroy(Setting $setting)
    {
        dd("123");
        $setting->delete();

        return redirect()->route('setting.index')
                        ->with('success','Contact deleted successfully');
    }*/

public function settingdestroy(Request $request ,$id)
{
    $setting = Setting::find($id);
    $setting->delete();

    return redirect()->route('setting')
    ->with('success','Contact deleted successfully');
  // $notification = array('message' => 'removed successfully', 'alert_type' => 'success');
  //    return redirect()->back()->with($notification);


}
}
