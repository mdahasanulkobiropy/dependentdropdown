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
            <tbody>
                <form action="{{route('prosubcategory.add')}}" method="post">
                    @csrf
                <label for="">Category Name</label>
                <select class="form-control" name="cat_id" id="cat_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                    @endforeach
                </select>
                <label for="">Sub Category Name</label>
                <select class="form-control" name="sub_cat_id" id="sub_cat_id">

                </select>

                <div class="pro_sub_cat_name">
                     <label for="">Pro Sub Category Name</label>
                     <input type="text" name="pro_sub_cat_name" class="form-control">
                </div>
                <div class="category">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </tbody>
          </table>

            </div>
        </form>
    </div>


    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>

       $(document).ready(function(){


        $('#cat_id').change(function(event){
            var cat_id = this.value;
            $('#sub_cat_id').html('');
            // alert(cat_id);
            $.ajax({
                    url: '/feach-subcategory',
                    method: 'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        cat_id: cat_id,
                    },

                    success:function(res){

                        $.each(res.subcategory, function(index, val){
                            $('#sub_cat_id').append('<option value="'+val.id+'">'+val.sub_cat_name+'</option>');
                        });
                    }


            });
        });

            // $(document).on('click', '#pro_sub_cat_name', function(){

            //     var cat_id = 1;

            //     $.ajax({
            //         url: '/opy',
            //         method: 'POST',
            //         data:{
            //             "_token": "{{ csrf_token() }}",
            //             cat_id: cat_id,
            //         },

            //         success:function(res){
            //             console.log(res.ok);
            //         }


            //     });

            // });


       })

    </script>
</html>
