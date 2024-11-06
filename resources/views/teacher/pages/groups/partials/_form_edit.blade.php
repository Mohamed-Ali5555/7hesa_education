<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">الاسم : <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="اضف اسم للمجموعة" value="{{ old('name', $group->name ?? '') }}">
        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="visiability">المجموعة : <span class="text-danger">*</span></label>
            <select class="custom-select mr-sm-2" name="visibility">
                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                <option value="private" {{ (old('visibility', $group->visibility ?? '') == 'private') ? 'selected' : '' }}>مجموعة خاص</option>
                <option value="public" {{ (old('visibility', $group->visibility ?? '') == 'public') ? 'selected' : '' }}>مجموعة عامة</option>
            </select>
        </div>
        @error('visibility')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>


<div class="col-md-6">
    <div class="form-group">
        <label for="days">الايام : <span class="text-danger">*</span></label>
        <input class="tagiffy w-100" name="days" value="{{ old('days', $group->days->map(function($day) {
            return ['value' => $day->id, 'label' => trans("app.days.{$day->name}")];
        })->toJson()) }}">
    </div>
    @error('days')
        <p class="text-danger">{{ $message }}</p>
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
                         

                            <option style="color:black;" value="{{ $grade->id }}" {{$grade->id == $group->grade_id ? 'selected' : ""}}>{{ $grade->Name }}</option>

                        @endforeach

                    </select>
                </div>
                @error('grade_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="class_id">{{ trans('Students_trans.classrooms') }} : <span
                            class="text-danger">*</span></label>
                    <select class="custom-select mr-sm-2" name="class_id" >
                        {{-- <option value="{{$group->class_id }}">{{$group->class_room->Name_Class}}</option> --}}
                        @foreach ($class_rooms as $class_room)
                        <option style="color:black;" 
                            @if (old('class_id ', $group->class_id) == $class_room->id) 
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
        
        
</div>

<div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="start_at">Start At <span class="text-danger">*</span></label>
                    <br />
                    <input type="date" class="form-control" name="start_at" id="start_at"
                        value="{{ old('start_at', isset($group->start_at) ? \Carbon\Carbon::parse($group->start_at)->format('Y-m-d') : \Carbon\Carbon::today()->format('Y-m-d')) }}"
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
                        value="{{ old('end_at', isset($group->end_at) ? \Carbon\Carbon::parse($group->end_at)->format('Y-m-d') : '') }}">
                    @error('end_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="limit_student" class="mb-0">عدد الطلاب بحد اقصي في هذه المجموعه </label>
            <br><small class="text-secondary">اتركها فارغه لتكون بدون حد اقصي</small>
            <input type="number" class="form-control" name="limit_student" id="limit_student" value="{{ old('limit_student', $group->limit_student ?? '') }}">
        </div>
        @error('limit_student')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>

<hr>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
 
<script>
    const days = @json(
        $days->sortBy('id')->map(function ($day) {
            return [
                'value' => $day->id,
                'label' => trans("app.days.{$day->name}"),
            ];
        })->toArray()
    );

    var inputElem = document.querySelector('.tagiffy');
    var initialTags = @json($group->days->map(function($day) {
        return ['value' => $day->id, 'label' => trans("app.days.{$day->name}")];
    })->toArray());

    var tagify = new Tagify(inputElem, {
        whitelist: days,
        enforceWhitelist: true,
        originalInputValueFormat: (valuesArr => valuesArr.map(item => item.value).join(',')),
        dropdown: {
            enabled: 0,
            maxItems: Infinity,
            classname: 'tags-look',
            searchKeys: ['label']  // search by label
        },
        templates: {
            tag: function(tagData){
                return `
                    <tag title="${tagData.label}"
                            contenteditable='false'
                            spellcheck='false'
                            tabIndex="${this.settings.a11y.focusableTags ? 0 : -1}"
                            class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                            ${this.getAttributes(tagData)}>
                        <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                        <div>
                            <span class='tagify__tag-text'>${tagData.label}</span>
                        </div>
                    </tag>
                `;
            },
            dropdownItem: function(item) {
                return `<div ${this.getAttributes(item)}
                    class='tagify__dropdown__item ${item.class ? item.class : ""}'
                    tabindex="0"
                    role="option">
                    ${item.label}
                </div>`;
            }
        }
    });

    // Populate Tagify with existing tags
    tagify.addTags(initialTags.map(tag => ({ value: tag.value, label: tag.label })));

    tagify.on('add', function(e) {
        let tag = e.detail.tag;
        let data = e.detail.data;
        tag.textContent = data.label;
    });
</script> 
    
    
           <script>
            $(document).ready(function () {
                $('select[name="grade_id"]').on('change', function () {
                    var grade_id = $(this).val();
                    if (grade_id) {
                        $.ajax({
                    url: "{{ route('ajax.classrooms', '') }}/" + grade_id,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $('select[name="class_id"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="class_id"]').append('<option value="' + key + '">' + value + '</option>');
                                });
                            },
                        });
                    } else {
                        console.log('AJAX load did not work');
                    }
                });
            });
        </script>
@endsection
