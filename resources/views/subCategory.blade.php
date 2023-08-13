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
                <th>Sub Category Name</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory)

                    <tr>
                        <th>{{$subcategory->id}}</th>
                        <td>{{$subcategory->sub_cat_name}}</td>
                    </tr>
                @endforeach

            </tbody>
          </table>
          <form action="{{route('subcategory.add')}}" method="post">
            @csrf
            <div class="category">
                <label for="">Category Name</label>
                <select class="form-control" name="cat_id" id="cat_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="category">
                 <label for="">Sub Category Name</label>
                 <input type="text" name="sub_cat_name" class="form-control">
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
