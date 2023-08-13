<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Category</title>
</head>
<body>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Category Name</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)

                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->cat_name}}</td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        <form action="{{route('category.add')}}" method="post">
            @csrf
            <div class="category">
                 <label for="">Category Name</label>
                 <input type="text" name="cat_name" class="form-control">
            </div>
            <div class="category">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</html>
