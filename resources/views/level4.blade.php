@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>


                </div>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/sqlInj">
                            @csrf
                            <div class="form-group">
                                <label>Flag</label>
                                <input type="text" name="search" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
