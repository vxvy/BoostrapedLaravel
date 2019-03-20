@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Information
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="informant_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="informant_name" type="text" class="form-control{{ $errors->has('informant_name') ? ' is-invalid' : '' }}" name="informant_name" value="{{ old('informant_name') }}" required autofocus>

                                @if ($errors->has('informant_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('informant_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="informant_surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="informant_surname" type="text" class="form-control{{ $errors->has('informant_surname') ? ' is-invalid' : '' }}" name="informant_surname" value="{{ old('informant_surname') }}" required autofocus>

                                @if ($errors->has('informant_surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('informant_surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="informant_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="informant_email" type="email" class="form-control{{ $errors->has('informant_email') ? ' is-invalid' : '' }}" name="informant_email" value="{{ old('informant_email') }}" required>

                                @if ($errors->has('informant_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('informant_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ADD TO DATABASE') }}
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

