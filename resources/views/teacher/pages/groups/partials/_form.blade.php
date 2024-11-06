<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">الاسم : <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="اضف اسم للمجموعة">
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
                {{-- @foreach ($grades as $grade)
                @endforeach --}}
                <option value="private">مجموعة خاص</option>
                <option value="public">مجموعة عامة</option>
            </select>
        </div>
        @error('grade_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="days">الايام : <span class="text-danger">*</span></label>
            <input class="tagiffy w-100" name="days">
            {{-- <select class="custom-select mr-sm-2 tagiffy" name="days[]" multiple>
                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
   
                {{-- <option value="public">مجموعة عامة</option>
            </select> --}}
        </div>
        @error('tagiffy')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>


</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span class="text-danger">*</span></label>
            <select class="custom-select mr-sm-2" name="grade_id">
                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->Name }}</option>
                @endforeach
            </select>
        </div>
        @error('grade_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
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
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="start_date">Start Date : <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="start_date" id="start_date">
        </div>
        @error('start_date')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="end_date">End Date : <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="end_date" id="end_date">
        </div>
        @error('start_date')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>



</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="limit_student" class="mb-0">عدد الطلاب بحد اقصي في هذه المجموعه </label>
            <br><small class="text-secondary">اتركها فارغه لتكون بدون حد اقصي</small>
            <input type="number" class="form-control" name="limit_student" id="limit_student">
        </div>
        @error('limit_student')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

</div>
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script> --}}
    <script>
        const days = @json(
            $days->sortBy('id')->map(function ($day) {
                return [
                    'value' => $day->id,
                    'label' => trans("app.days.{$day->name}"),
                ];
            })->toArray());
        
        var inputElem = document.querySelector('.tagiffy');
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
                    `
                },
                dropdownItem: function(item) {
                    return `<div ${this.getAttributes(item)}
                        class='tagify__dropdown__item ${item.class ? item.class : ""}'
                        tabindex="0"
                        role="option">
                        ${item.label}
                    </div>`
                }
            }
        });
        
        tagify.on('add', function(e) {
            let tag = e.detail.tag;
            let data = e.detail.data;
            tag.textContent = data.label;
        });
    </script>
@endsection
