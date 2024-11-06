@extends('students.layouts.master')
@section('css')
    @toastr_css
@section('title')
الباقات التي تم الاشتراك فيها 
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
الباقات التي تم الاشتراك فيها 
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="row">
    @if (!$packages->isEmpty()) 
    @foreach ($packages as $package )
        

    <div class="col-md-4 mb-30">
        <div class="card" style="width: 18rem;">
            <img  style="height:340px;" src="{{ asset('assets/images/uploads') . '/' . $package->image }}" class="card-img-top" alt="{{$package->name }}">
            <div class="card-body">
              <h5 class="card-title">{{$package->name}}</h5>
              <p class="card-text">{!! $package->description !!}</p>
              <a href="{{route('student.dashboard.sessions.courses',$package->id)}}" class="btn btn-primary" style="display: block">get courses</a>
            </div>
          </div>
    </div>

    @endforeach

    @else 
    <div>not found yet packages</div>
    @endif
</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
