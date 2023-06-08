<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multilevel Dropdown</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Multilevel Dropdown</h2>
  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('success')}}
    </div>
  @endif
  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $error }}
        </div>
    @endforeach
  @endif
  <form action="{{route('add.drop.down')}}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <select class="form-control" name="category">
        <option value="0">--select--</option>
        @php dropdownTree(); @endphp
      </select>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="name" placeholder="category name" name="name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



</body>
</html>
