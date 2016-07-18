@extends('layouts.app')

@section('content')
<div class="container">
            <div class="content">
                <div class="title">
                <table border=1 align="center">
                    @foreach ($data as $data)
                        <tr><td><a href='{{url("/crudtest/$data->id")}}'> <span class="pull-right">{{$data->name}}</a></td>
                        <td>{!!Form::open(array('url' => url("/crudtest/$data->id"), 'method' => 'delete'))!!}<button type="submit" class="btn btn-default">Usuń</button>{!!Form::close()!!}</td>
                        <td>{!!Form::open(array('url' => url("/crudtest/$data->id"), 'method' => 'put'))!!}<input name="name"><button type="submit" class="btn btn-default">Zmień</button>{!!Form::close()!!}
                        </td></tr>
                    @endforeach
                    </table>
                    <form method="POST" action='{{url("/crudtest")}}'>
                    <center><input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="name" type="text">
                    <button type="submit" class="btn btn-default">Dodaj</button></center> </form>
                </div>
            </div>
</div>
@endsection