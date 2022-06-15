
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
      <label for="exampleFormControlInput1">User Name</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  value="{{$user->name}}" placeholder="name of user">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Image Avatar</label>
      <input type="file" name="image" class="form-control" id="exampleFormControlInput1"  value="{{$user->image}}" placeholder="name of user">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email</label>
      <input type="text" name="email" class="form-control" id="exampleFormControlInput1"  value="{{$user->email}}" placeholder=" ex:user@marwan.com">
    </div>
    @if (!$user->id)
    <div class="form-group">
      <label for="exampleFormControlInput1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleFormControlInput1"  value="{{$user->password}}">
    </div>
    @endif
    


   

   
    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status" value="Active" @if ($user->status == "Active") checked @endif >
        <label class="form-check-label" for="status">
          Active
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status" value="Draft" @if ($user->status == "Draft") checked @endif>
        <label class="form-check-label" for="status">
          Draft
        </label>
      </div>

      <button type="submit" class="btn btn-primary">{{$button}}</button>