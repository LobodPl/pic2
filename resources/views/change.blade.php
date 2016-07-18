@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Zmiana hasła</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/change') }}">
                            {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Aktualne Hasło</label>

                            <div class="col-md-6">
                                <input id="email" type="password" class="form-control" name="oldpass" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Nowe Hasło</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Potwierdź Hasło</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_con">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-refresh"></i> Zmień Hasło
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
