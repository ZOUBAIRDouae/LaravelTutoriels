<form action="{{route('products.store')}}" method="POST" id="addProduct">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email" name="name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>