<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Resturant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Resturant::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('city_id' , function(Resturant $model){
                        return $model->City ? $model->City->name : '' ;
                    })
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        //$categories = Category::paginate(5);
        return view('admin.restaurants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Gate::authorize('categories.create');
        $cities = City::all();
        $restaurants = Resturant::where('status', '=', 'Active')->get();
        $category = new Resturant();
        return view('admin.restaurants.create', ['restaurants' => $restaurants, 'category' => $category , 'cities'=>$cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
           'name'=> 'required' ,
       ]);
        //requset Merge ^_^ 
        $request->merge([
            'slug' => Str::slug($request->get('name'))
        ]);


        $input = $request->all();
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $input['image'] = $image_path;
        }


        $restaurants = Resturant::create($input);
        //  Write into session 
        $success = $request->session()->flash('success', $request->name . 'add successfully');
        return redirect()->route('restaurants.index', ['restaurants' => $restaurants]);
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
        // Gate::authorize('restaurants.update');
        $category = Resturant::findorfail($id);
        $restaurants = Resturant::where('status', '=', 'Active')->get();
        return view('admin.restaurants.edit', ['restaurants' => $restaurants, 'category' => $category]);
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
        // Gate::authorize('restaurants.update');
        $request->validate(Resturant::validateRule($id));
        $category = Resturant::find($id);
        #Method 4 : Mass assignment
        $request->merge([
            'slug' => Str::slug($request->get('name')),
        ]);

        $category->update($request->all());
        $success = $request->session()->flash('success', $request->name . ' ' . 'Update successfully');



        return redirect()->route('restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gate::authorize('categories.delete');
        $category = Resturant::findorfail($id);
        $category->delete();
        $success = session()->flash('success', $category->name . ' Deleted successfully');
        return redirect()->back();
    }
}
