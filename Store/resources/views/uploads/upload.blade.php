<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Upload File</h1>
            <form action="{{URL::to('upload')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}


                <label>File Name : </label>
                <input type="txt" name="name" id="name"><br>

                <br><label>File Size :    </label>
                <input type="text" name="size" id="size"><br>

                <br><label>Description :    </label>
                <input type="text"  name="description" id="description"><br>

                 <br><label>Price :    </label>
                <input type="text"  name="price" id="price"><br>


                <input class="input100" type="text" id= "user_id" name="user_id" value="{{Auth::user()->id}}" hidden="true">



                <br>  <label>Select Icon To Upload : </label>
                <input type="file" name="icon" id="icon"><br>

                 <br>  <label>Select File To Upload : </label>
                <input type="file" name="file" id="file"><br>


                 <br>  <label>Select File Category:</label>
                  <select class="input-select" name="category">
                    <option value="0">All Categories</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" name ="category">  {{$category -> name}}  </option>
                    @endforeach
                  </select>

              <br>  <input type="submit" value="Upload" name="submit">
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            </form>
            </div>
        </div>
    </body>
</html>
