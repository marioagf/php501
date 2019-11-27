@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Soma</div>
                <div class="card-body">
                    <form action="/soma" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="text">N1</label>
                            <input type="text" id="n1" name="n1">
                        </div>
                        <div class="form-group">
                            <label for="text">N2</label>
                            <input type="text" id="n2" name="n2">
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection()