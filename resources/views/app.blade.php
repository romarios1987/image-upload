<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div id="app"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                @if(count($errors))
                    @foreach($errors->all() as $error)
                        <span class="text-danger">{{$error}}</span>
                    @endforeach
                @endif
                <form action="{{route('upload')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <input type="file" name="image">
                    <img src="/storage/item-29.jpg" alt="image">
                    <input type="submit" class="btn btn-success" value="upload">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>