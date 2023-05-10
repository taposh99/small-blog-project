<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Project</title>

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"> {{ session('message') }}</h1>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Create Blog</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>sl</th>
                            <th>Blog List</th>
                       
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->blog }}</td>
                                <td>
                                    
                                    <a href="{{ route('edit.blog',['id'=>$blog->id]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('delete.blog') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure !!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
