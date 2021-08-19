@include('header')



<form class="container w-50" method="post" action="{{route ('createrecord')}}" >
  @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Lastname</label>
    <div class="col-sm-10">
      <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Input lastname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" name="name" placeholder="Input name">
      <button class="btn btn-dark form-control mt-2" type="submit" name="button">Add</button>
    </div>
  </div>

</form>
