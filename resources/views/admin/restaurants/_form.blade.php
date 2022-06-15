@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif

@php
   
    $columns = Illuminate\Support\Facades\Schema::getColumnListing('resturants');
    $discard = array('id' , 'created_at' , 'updated_at' , 'slug');
    $textarea = array('description');
    $images = array('image');
    $date = array();
    $status = array('status');


    $filter_data = [];
    $selectfields = [];
    foreach ($columns as $key => $disc) {
        
        if(str_contains($disc , '_id'))
        {
            
            $word =strstr($disc , '_id' ,true) ;
            $plural =Str::plural((string)$word , 2);
            array_push($filter_data , $disc); 
            array_push($selectfields ,$plural);
           
        }
    }

    
@endphp

<div class="row">

@foreach ($columns as $key=>$col)

@if(!in_array($col ,$filter_data) && !in_array($col ,$discard))
    @if(in_array($col ,$textarea))
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1"><strong>{{__('titles.'.$col)}}</strong></label>
        <textarea name="{{$col}}" rows="2" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    @elseif(in_array($col ,$images))
   
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1"><strong>{{__('titles.'.$col)}}</strong></label>
        <input  type="file" name="{{$col}}"  class="form-control">
    </div>
    @elseif(in_array($col ,$date))
   
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1"><strong>{{__('titles.'.$col)}}</strong></label>
        <input  type="date" name="{{$col}}"  class="form-control">
    </div>
   
    @elseif(in_array($col ,$status))
   
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1"><strong>{{__('titles.'.$col)}}</strong></label>

        <div class="toggle lg">
            <label>
              <input name="status" type="checkbox" checked value="1"><span class="button-indecator"></span>
            </label>
          </div>
    </div>
   
    
    @else
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1"><strong>{{__('titles.'.$col)}}</strong></label>
        <input type="text" name="{{$col}}" class="form-control" id="exampleFormControlInput1"
            placeholder=" هنا">
    </div>
    @endif


    
@endif
@endforeach
</div>
<hr>
<div class="row">
@foreach ($selectfields as  $key=>$col)

<div class="form-group col-md-4">
    <label for="exampleFormControlSelect1"><strong>{{__('titles.'.$col)}}</strong></label>
    <select name="{{$col}}" class="form-control " id="exampleFormControlSelect1">
        <option value="">Select {{$col}}</option>
        @foreach (DB::table($col)->select('id' , 'name')->limit(10)->get() as $col)
        <option value="{{$col->id}}">Select {{$col->name}}</option>
        @endforeach
        
    </select>
</div>
@endforeach
</div>







<button type="submit" class="btn btn-primary">{{ $button }}</button>
