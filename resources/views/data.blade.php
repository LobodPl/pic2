<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 20;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 21px;
            }
        </style>
        <script src="./bower_components/jquery/dist/jquery.js"></script>
    </head>
    <body>
        <script>
            $.delete = function(url, data, callback, type){
                if ( $.isFunction(data) ){
                    type = type || callback,
                    callback = data,
                    data = {}
                }
                return $.ajax({
                    url: url,
                    type: 'DELETE',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                           return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    success: setTimeout(function(){ location.reload(); }, 50),
                    data: data,
                    contentType: type
                });
            }
        $.put = function(url, data, callback, type){
                if ( $.isFunction(data) ){
                    type = type || callback,
                    callback = data,
                    data = {}
                }
                return $.ajax({
                    url: url,
                    type: 'PUT',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                           return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    success: setTimeout(function(){ location.reload(); }, 50),
                    data: data,
                    contentType: type
                });
            }
            function del(id){
                 $.delete('{{url("/crudtest/")}}/'+id,'', function(result){console.log(result);})
             }
            function put(id){
                 $.put('{{url("/crudtest/")}}/'+id,{"name": $('input[name=up'+id+']').val()}, function(result){console.log(result);})
             }
        </script>
        <div class="container">
            <div class="content">
                <div class="title">
                <table border=1>
                    @foreach ($data as $data)
                        <tr><td><a href='{{url("/crudtest/$data->id")}}'> <span class="pull-right">{{$data->name}}</a></td><td>
                        <button onclick='del({{"$data->id"}})' class="btn btn-default">Usuń</button>
                        </td><td>
                        <input name='up{{"$data->id"}}'><button onclick='put({{"$data->id"}})' class="btn btn-default">Zmień</button>
                        </td></tr>
                    @endforeach
                    </table>
                    <form method="POST" action='{{url("/crudtest")}}'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="name" type="text">
                    <button type="submit" class="btn btn-default">Dodaj</button> </form>
                </div>
            </div>
        </div>
    </body>
</html>