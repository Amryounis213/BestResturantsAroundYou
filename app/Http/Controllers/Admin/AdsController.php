<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Gate::authorize('ads.view');
        $ads = Ads::all();
        return view('admin.static.index', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('ads.create');

        $ads = new Ads();
        return view('admin.static.create', ['ads' => $ads]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Ads::validateRule());

        $Ads = Ads::create($request->all());
        $success = $request->session()->flash('success', $request->name . ' ' . 'Update successfully');
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('ads.update');
        $ads = Ads::findOrfail($id);
        return view('admin.static.edit', ['ads' => $ads]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('ads.update');

        $ads = Ads::find($id);
        $ads->update($request->all());
        $success = $request->session()->flash('success', $request->name . ' ' . 'Update successfully');
        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('ads.delete');

        $ads = Ads::findorfail($id);
        $ads->delete();
        $success = session()->flash('success', $ads->title . ' Deleted successfully');
        return redirect()->back();
    }
}
