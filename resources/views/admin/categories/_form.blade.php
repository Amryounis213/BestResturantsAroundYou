
   @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
         @foreach ($errors->all() as $message)
             <li>{{$message}}</li>
         @endforeach
       </ul>
     </div>
   @endif
   <div class="form-group">
      <label  for="exampleFormControlInput1">اسم القسم</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  value="{{$category->name}}" placeholder="name of category">
    </div>
   
   

    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status" value="1" @if ($category->status) checked @endif >
        <label class="form-check-label" for="status">
          Active
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status" value="0" @if (!$category->status) checked @endif>
        <label class="form-check-label" for="status">
          Draft
        </label>
      </div>
      <button type="submit" class="btn btn-primary">{{$button}}</button>