<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Meal;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Meal::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('image', 'admin.meals._image')
                    ->editColumn('resturant_id', function($model){
                        return $model->restaurant->name;
                    })
                    ->editColumn('category_id', function($model){
                        return $model->category->name;
                    })
                    ->editColumn('status', 'admin.meals.status')

                    ->addColumn('action' , 'admin.meals.action_icon')
                    ->rawColumns(['action' , 'image' , 'status'])
                    ->make(true);
        }
        return view('admin.meals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status' , 1)->get();
        $rest = Resturant::where('status' , 1)->get();
        return view('admin.meals.create');
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
            'description'=>'required' ,
            'categories'=> 'required',
            'resturants'=> 'required',
        ]);
         //requset Merge ^_^ 
        $request->merge([
            'resturant_id'=> $request->resturants,
            'category_id'=> $request->categories,
        ]);
    
         $input = $request->all();
        
       
      
         if ($request->hasFile('image')) {
            
             $image_path = $request->file('image')->store('uploads', 'public');
             $input['image'] = $image_path;

            
         }
 
 
         $meals = Meal::create($input);
         //  Write into session 
         $success = $request->session()->flash('success', $request->name . 'add successfully');
         return redirect()->route('meals.index');
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
        $meal =Meal::find($id);
        $categories = Category::where('status' , 1)->get();
        $rest = Resturant::where('status' , 1)->get();
        return view('admin.meals.edit' , compact('meal'));
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
        $request->validate([
            'name'=> 'required' ,
            'description'=>'required' ,
            'category_id'=> 'required',
            'resturant_id'=> 'required',
    
        ]);
         //requset Merge ^_^ 
        
         $meal =Meal::find($id);
         $input = $request->all();
         if ($request->hasFile('image')) {
             $image_path = $request->file('image')->store('uploads', 'public');
             $input['image'] = $image_path;
         }
 
 
         $meal->update($input);
         //  Write into session 
         $success = $request->session()->flash('success', $request->name . 'add successfully');
         return redirect()->route('meals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
