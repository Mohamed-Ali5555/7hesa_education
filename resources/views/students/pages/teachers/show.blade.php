@extends('students.layouts.master')
@section('css')
    @toastr_css
    <style>



    </style>
@section('title')
    {{ $teacher->name }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ $teacher->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row mb-3">
    <div class="col-md-4">
        <div class="card ">
            <div class="card-body m-auto text-center">
                <div class="user-dp mb-2 mx-auto w-25">
                    <img src="{{ $teacher->avatar }}" class="w-100" alt="{{ $teacher->name }}">
                </div>
                <h2>{{ $teacher->name }}</h2>
                <p>{{ $teacher->bio }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
                {{-- <div class="leaderboard">
                    <h1>
                      <svg class="ico-cup">
                        <use xlink:href="#cup"></use>
                      </svg>
                      المجموعات
                    </h1>
                    <ol>
                        @foreach ($teacher->groups as $group)
                        <li>
                            <mark>{{ $group->name }}</mark>
                    @foreach ($group->days as $day)
                    
                        @endforeach
                        <a class="btn btn-sm join_group" href="{{ route('student.dashboard.groups.join', $group->id) }}">Join
                            This</a>
                        </li>
              @endforeach
                
                    </ol>
                  </div> --}}
                  <article class="leaderboard">
                    <header>
                  
                        <i class="fa fa-user-group"></i>
                  
                      <h1 class="leaderboard__title"><span class="leaderboard__title--top">Group</span><span class="leaderboard__title--bottom">Groupboard</span></h1>
                    </header>
                    
                    <main class="leaderboard__profiles">
                        @foreach ($teacher->groups as $group)
                        <article class="leaderboard__profile">
                            <span class="leaderboard__name">{{ $group->name }}</span>
                                <span class="leaderboard__value">8:30</span>
                            @foreach ($group->days as $day)
                            
                                @endforeach
                                <a class="btn btn-sm join_group" href="{{ route('student.dashboard.groups.join', $group->id) }}">Join
                                    This</a>
                                </article>
                      @endforeach
                      
                    </main>
                  </div>
                
        
 {{-- <div class="card h-100">

        </div> --}}
    </div>
</div>

<div class="row mb-3">
    @foreach ( $packages as $package )
        
    <div class="col-md-4">
        
        <div class="card" style="width: 18rem;">
            <img style="height:250px;" src="{{ asset('assets/images/uploads') . '/' . $package->image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$package->name}}</h5>
              <p class="card-text">{!! $package->description !!}</p>
              <a style="display: block;" href="{{ route('student.dashboard.teachers.package_details',$package->id)}}" class="btn btn-primary">شراء</a>
            </div>
          </div>

    </div>

    @endforeach

</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
