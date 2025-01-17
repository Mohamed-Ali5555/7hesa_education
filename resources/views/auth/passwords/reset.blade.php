@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                @if($type == 'student')
                    <h3  class="mb-30 text-center">تغيير باسورد الطالب</h3>
                @elseif($type == 'teacher')
                    <h3  class="mb-30 text-center">تغيير باسورد المعلم</h3>
                @else
                    <h3  class="mb-30 text-center">تغيير باسورد الادمن</h3>
                @endif

                @if (\Session::has('message'))
                    <div class="alert alert-danger">
                        <li>{!! \Session::get('message') !!}</li>
                    </div>
                @endif
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('reset.passUpdate', $type)}}">
                        @csrf
                        @if($type == 'student')
                            <input type="hidden" name="id" value="{{$student[0]['id']}}">
                        @elseif($type == 'teacher')
                            <input type="hidden" name="id" value="{{$teacher[0]['id']}}">
                        @else
                            <input type="hidden" name="id" value="{{$admin[0]['id']}}">
                        @endif

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
