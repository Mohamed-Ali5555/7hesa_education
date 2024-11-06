
                            
                                @if (@isset($teachers) && !@empty($teachers) && ($teachers->count())>0)
                                @foreach ($teachers as $teacher)
        <div class="col-md-4 mb-30">
            <div class="card card-statistics h-100">
                <a href="{{ route('student.dashboard.teachers.show', $teacher->id) }}">
                    <div class="bg-light border p-4 text-center">
                        <h5 class="mb-30 text-black">{{ $teacher->name }}</h5>
                        <div class="d-flex justify-content-center">
                            <span class="badge text-white bg-{{ $teacher->subject?->color_name }}">
                                {{ $teacher->subject?->name }}
                            </span>
                        </div>
                        <!-- action group -->
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-white"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-more"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="{{ route('student.dashboard.teachers.show', $teacher->id) }}">
                                    <i class="text-success ti-user"></i> View Profile
                                </a>
                            </div>
                        </div>
                        <img class="img-fluid w-25 rounded-circle" src="{{ $teacher->avatar }}" alt="">
                        @if (!empty($teacher->bio))
                            <p class="mt-30 text-white">
                                {{ str($teacher->bio)->limit(30, '...') }}
                            </p>
                        @endif
                    </div>
                </a>
                <div class="text-center mt-3 mb-3">
                    <a class="btn btn-info" href="{{ route('student.dashboard.teachers.show_teacher_details', $teacher->id) }}" style="display: inline-block;color:white;">معلومات المدرس</a>
                    <a class="btn btn-danger" href="{{ route('student.dashboard.teachers.show', $teacher->id) }}" style="display: inline-block;color:white;">باقات المدرس </a>
                </div>
            </div>
        </div>
    @endforeach
                                @else
                                    <div class="alert alert-danger">
                                        عفوا لاتوجد بيانات لعرضها !!
                                    </div>
                                @endif
                      
             

