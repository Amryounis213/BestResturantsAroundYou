<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Gate::authorize('categories.view');
        if ($request->ajax()) {
            $data = Category::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        //$categories = Category::paginate(5);
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Gate::authorize('categories.create');
        $categories = Category::where('status', '=', 'Active')->get();
        $category = new Category();
        return view('admin.categories.create', ['categories' => $categories, 'category' => $category]);
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
        $categories = Category::create($request->all());
        //  Write into session 
        $success = $request->session()->flash('success', $request->name . 'add successfully');
        return redirect()->route('categories.index', ['categories' => $categories]);
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
        // Gate::authorize('categories.update');
        $category = Category::findorfail($id);
        $categories = Category::where('status', '=', 'Active')->get();
        return view('admin.categories.edit', ['categories' => $categories, 'category' => $category]);
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
        // Gate::authorize('categories.update');
        $request->validate(Category::validateRule($id));
        $category = Category::find($id);
        #Method 4 : Mass assignment
        $request->merge([
            'slug' => Str::slug($request->get('name')),
        ]);

        $category->update($request->all());
        $success = $request->session()->flash('success', $request->name . ' ' . 'Update successfully');



        return redirect()->route('categories.index');
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
        $category = Category::findorfail($id);
        $category->delete();
        $success = session()->flash('success', $category->name . ' Deleted successfully');
        return redirect()->back();
    }
}
