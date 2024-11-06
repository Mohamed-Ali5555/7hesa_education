@php
    $grades = \App\Models\Grade::get();

@endphp


<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="text-center">
                    يجب عليك استكمال البيانات

                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('register.continue_register',auth()->user()->id) }}" autocomplete="off">
                    @method('PUT')

                 
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="grade_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($grades as $Grade)
                                        <option value="{{ $Grade->id }}">{{ $Grade->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="classroom_id">{{ trans('Students_trans.classrooms') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="classroom_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="section_id">{{ trans('Students_trans.section') }} : </label>
                                <select class="custom-select mr-sm-2" name="section_id">

                                </select>
                            </div>
                        </div>
                    </div><br>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="grade_id">{{ trans('Students_trans.birth_date') }} : <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="Date_Birth" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="classroom_id">{{ trans('Students_trans.academic_year') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" name="academic_year" id="yearSelect"
                                    style=" height: 53px;">
                                    <option value="" disabled>Select Year</option> <!-- Placeholder option -->
                                </select>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                               <button  type="submit" class="btn btn-info form-control">continue_login</button>
                            </div>
                        </div>

                    </div><br>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    const startYear = 1900;
    const endYear = new Date().getFullYear(); // Or any specific year you prefer
    const yearSelect = document.getElementById('yearSelect');

    for (let year = endYear; year >= startYear; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }
</script>
