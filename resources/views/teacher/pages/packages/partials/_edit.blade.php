<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">الاسم : <span class="text-danger">*</span></label>

            <input type="text" class="form-control" name="name" id="name"
                placeholder="اسم الباقه" value="{{ old('name', $package->name) }}">

        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="price">السعر : <span class="text-danger">*</span></label>

            <input type="number" class="form-control" name="price" id="price"
                placeholder="سعر الباقه" value="{{ old('price', $package->price) }}">
        </div>
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="name">الوصف : <span class="text-danger">*</span></label>
            <textarea name="description" id="description" cols="30" rows="10">{{$package->description}}</textarea>

        </div>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-12">
        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label for="name"> status <span class="text-danger">*</span></label>
                    <br />
                    <select class="custom-select mr-sm-2" name="status" id="status">
                        <option value="" disabled>choose</option>
                        <option value="1"
                            {{ old('status', $package->status) == 1 ? 'selected' : '' }}>active
                        </option>
                        <option value="0"
                            {{ old('status', $package->status) == 0 ? 'selected' : '' }}>not active
                        </option>

                    </select>
                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">image : <span class="text-danger">*</span></label>

                    <input type="file" class="form-control" name="image" id="image"
                        placeholder=" upload image">
                </div>
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>




            <div class="col-md-6">
                <div class="form-group">
                    <label for="start_at">Start At <span class="text-danger">*</span></label>
                    <br />
                    <input type="date" class="form-control" name="start_at" id="start_at"
                        value="{{ old('start_at', isset($package->start_at) ? \Carbon\Carbon::parse($package->start_at)->format('Y-m-d') : \Carbon\Carbon::today()->format('Y-m-d')) }}"
                        >
                    @error('start_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="end_at">End At <span class="text-danger">*</span></label>
                    <br />
                    <input type="date" class="form-control" name="end_at" id="end_at"
                        value="{{ old('end_at', isset($package->end_at) ? \Carbon\Carbon::parse($package->end_at)->format('Y-m-d') : '') }}">
                    @error('end_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            



        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span
                            class="text-danger">*</span></label>
                    <select class="custom-select mr-sm-2" name="grade_id">
                        <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                        @foreach ($grades as $grade)
                         

                            <option style="color:black;" value="{{ $grade->id }}" {{$grade->id == $package->grade_id ? 'selected' : ""}}>{{ $grade->Name }}</option>

                        @endforeach

                    </select>
                </div>
                @error('grade_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="classroom_id">{{ trans('Students_trans.classrooms') }} : <span
                            class="text-danger">*</span></label>
                    <select class="custom-select mr-sm-2" name="classroom_id" >
                        {{-- <option value="{{$package->Classroom_id}}">{{$package->class_room->Name_Class}}</option> --}}
                        @foreach ($class_rooms as $class_room)
                        <option style="color:black;" 
                            @if (old('classroom_id', $package->classroom_id) == $class_room->id) 
                                selected="selected" 
                            @endif
                            value="{{ $class_room->id }}">
                            {{ $class_room->Name_Class }}
                        </option>
                    @endforeach
                    

                    </select>
                    @error('classroom_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="package_type"> package_type <span
                            class="text-danger">*</span></label>
                    <br />
                    <select class="custom-select mr-sm-2" name="package_type" id="package_type">
                        <option value="" disabled>choose</option>
                        <option value="1"
                            {{ old('package_type', $package->package_type) == 1 ? 'selected' : '' }}>
                            اسئله فقط</option>
                        <option value="2"
                            {{ old('package_type', $package->package_type) == 2 ? 'selected' : '' }}>
                            شرح فقط</option>
                        <option value="3"
                            {{ old('package_type', $package->package_type) == 3 ? 'selected' : '' }}>
                            اسئله وشرح</option>

                    </select>
                    @error('package_type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

            </div>

        </div>
    </div>


    <script>
     document.addEventListener('DOMContentLoaded', function () {
    const startAtInput = document.getElementById('start_at');
    const endAtInput = document.getElementById('end_at');

    // Set minimum value for end_at based on start_at
    function updateEndAtMinDate() {
        endAtInput.min = startAtInput.value;
    }

    // Run on page load and whenever start_at changes
    updateEndAtMinDate();
    startAtInput.addEventListener('change', updateEndAtMinDate);
});

    </script>
        <script>
            $(document).ready(function () {
                $('select[name="grade_id"]').on('change', function () {
                    var grade_id = $(this).val();
                    if (grade_id) {
                        $.ajax({
                            url: "{{ URL::to('classes') }}/" + grade_id,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $('select[name="classroom_id"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                                });
                            },
                        });
                    } else {
                        console.log('AJAX load did not work');
                    }
                });
            });
        </script>