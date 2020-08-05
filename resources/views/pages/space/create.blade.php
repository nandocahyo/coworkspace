@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submit Space</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'space.store', 'method' => 'post', 'files' => true]) !!}
                        <div class="form-group">
                            <label for="">Title</label>
                            {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control
                            is-invalid' : 'form-control']) !!}
                            @error('title')
                            @enderror
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
