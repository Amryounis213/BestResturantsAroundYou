@extends('layouts.admin')

@section('content')

  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i>Users Table</h1>
      <p>Users This Store</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Control Panel</li>
      <li class="breadcrumb-item active"><a href="#">Users</a></li>
    </ul>
  </div>
  <div class="col-md-12">
       
        
    <div class="tile">
      @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
       {{Session::get('success')}}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      @endif
      <div class="tile-body">
        <div  class="col-md-12 p-2 m-2 row ">
          <div class="col-md-6 justify-content-start align-items-center">
            <h5 class="h5"><i class="fa fa-table"></i><strong>اضافة مستخدم جديد</strong></h5>
          </div>
          <div class="row col-md-6 justify-content-end">
              <a style="height: 30px; width:140px;" href="{{route('users.create')}}" class="btn btn-primary d-flex justify-content-center align-items-center ml-1"><i class="fa fa-plus "></i><small>اضافة مستخدم جديد</small></a>
          </div>
          
          
        </div>
          <input style="width: 100%; padding:5px ; margin-bottom:5px;" type="text" name="search" placeholder="Search...">
        
        <div class="table-responsive">
          
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>#</th>
                <th>اسم العميل</th>
                <th>الايميل</th>
                <th>الصورة</th>
                <th>الحالة</th>
                <th>الخيارات</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td> 
                <td>{{$user->name}}</td> 
                <td>{{$user->email}}</td> 
                <td>{{$user->description}}</td>
                <td>{{$user->status}}</td> 
                <td>
                  <div class="row justify-content-center">
                    <a style="height: 30px; width:100px;" href="{{route('users.edit',$user->id)}}" class="btn btn-warning d-flex justify-content-center align-items-center ml-1"><i class="fa fa-edit "></i><small>تعديل</small></a>
                    <form action="{{route('users.destroy',$user->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button style="height: 30px; width:100px;" type="submit" class="btn btn-danger d-flex justify-content-center align-items-center ml-1"><i class="fa fa-delete "></i><small>حذف</small></button>
                    </form>
                </div>
                </td>
            <tr> 
              @endforeach
              
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

 

    
   
@endsection