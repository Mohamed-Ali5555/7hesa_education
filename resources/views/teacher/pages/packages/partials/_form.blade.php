<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">الاسم : <span class="text-danger">*</span></label>

            <input type="text" class="form-control" name="name" id="name" placeholder="اسم الباقه">

        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="price">السعر : <span class="text-danger">*</span></label>

            <input type="number" class="form-control" name="price" id="price" placeholder="سعر الباقه">
        </div>
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="name">الوصف : <span class="text-danger">*</span></label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>

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
                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>active</option>
                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>not active</option>

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
                    <label for="name"> start_at <span class="text-danger">*</span></label>
                    <br />
                    <input type="datetime-local" class="form-control" name="start_at" id="start_at" min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
                    @error('start_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="end_at"> end_at <span class="text-danger">*</span></label>
                    <br />
                    <input type="datetime-local" class="form-control" name="end_at" id="end_at">
                    @error('end_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                            <option style="color:black;" @if (old('grade_id') == $grade->id) selected="selected" @endif
                                value="{{ $grade->id }}">
                                {{ $grade->Name }}
                            </option>
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
                    <select class="custom-select mr-sm-2" name="classroom_id">

                    </select>
                    @error('classroom_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="package_type"> package_type <span class="text-danger">*</span></label>
                    <br />
                    <select class="custom-select mr-sm-2" name="package_type" id="package_type">
                        <option value="" disabled>choose</option>
                        <option value="1" {{ old('package_type') == 1 ? 'selected' : '' }}>اسئله فقط</option>
                        <option value="2" {{ old('package_type') == 2 ? 'selected' : '' }}>شرح فقط</option>
                        <option value="3" {{ old('package_type') == 3 ? 'selected' : '' }}> اسئله وشرح</option>

                    </select>
                    @error('package_type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

            </div>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const startAtInput = document.getElementById('start_at');
                const endAtInput = document.getElementById('end_at');
            
                // Set the min date for start_at to today
                function updateStartAtMinDate() {
                    const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
                    startAtInput.setAttribute('min', today + 'T00:00'); // Set the min attribute for datetime-local
                }
            
                // Update end_at min date based on start_at value
                function updateEndAtMinDate() {
                    const startAtDate = new Date(startAtInput.value);
                    if (!isNaN(startAtDate.getTime())) { // Check if start_at has a valid date
                        endAtInput.setAttribute('min', startAtInput.value);
                    }
                }
            
                // Initialize min date for start_at
                updateStartAtMinDate();
            
                // Event listeners
                startAtInput.addEventListener('change', updateEndAtMinDate);
            });
            </script>
            