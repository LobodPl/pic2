<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>

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
        <script src="./bower_components/jquery/dist/jquary.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                <table border=1>
                    @foreach ($data as $data)
                        <tr><td><a href='{{url("/crudtest/$data->id")}}'> <span class="pull-right"></span>{{$data->name}}</a></td><td>
                        <form action='{{url("/crudtest/$data->id")}}' id='fid{{$data->id}}'> <input type="hidden" name="_method" value="DELETE"><button type="submit" class="btn btn-default">Usuń</button> </form> 

                        </td></tr>
                    @endforeach
                    </table>
                    <form method="POST" action='{{url("/crudtest")}}'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="name" type="text">
                    <button type="submit" class="btn btn-default">Ok</button> </form>
                </div>
            </div>
        </div>
    </body>
</html>