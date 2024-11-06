<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script type="text/javascript">
    var plugin_path = "{{ asset('assets/js') }}/";
</script>
<script src="{{ asset('pluginEditor/js/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<!-- chart -->
<script src="{{ asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>



@if (App::getLocale() == 'en')
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/en/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/en/dataTables.bootstrap4.min.js') }}"></script>
@else
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/ar/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-datatables/ar/dataTables.bootstrap4.min.js') }}"></script>
@endif

@yield('js')


<script>
    function CheckAll(className, elem) {
        var elements = document.getElementsByClassName(className);
        var l = elements.length;

        if (elem.checked) {
            for (var i = 0; i < l; i++) {
                elements[i].checked = true;
            }
        } else {
            for (var i = 0; i < l; i++) {
                elements[i].checked = false;
            }
        }
    }
</script>


<script>
    $(document).ready(function() {
        $('select[name="grade_id"]').on('change', function() {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('Get_classrooms') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="classroom_id"]').empty();
                        $('select[name="classroom_id"]').append(
                            '<option selected disabled >{{ trans('Parent_trans.Choose') }}...</option>'
                            );
                        $.each(data, function(key, value) {
                            $('select[name="classroom_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('select[name="classroom_id"]').on('change', function() {
            var classroom_id = $(this).val();
            if (classroom_id) {
                $.ajax({
                    url: "{{ URL::to('Get_Sections') }}/" + classroom_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="section_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="section_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('select[name="section_id"]').on('change', function() {
            var section_id = $(this).val();
            if (section_id) {
                $.ajax({
                    url: "{{ URL::to('Get_Teacher') }}/" + section_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="teacher_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="teacher_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('select[name="grade_id_new"]').on('change', function() {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('Get_classrooms') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="classroom_id_new"]').empty();
                        $('select[name="classroom_id_new"]').append(
                            '<option selected disabled >{{ trans('Parent_trans.Choose') }}...</option>'
                            );
                        $.each(data, function(key, value) {
                            $('select[name="classroom_id_new"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('select[name="classroom_id_new"]').on('change', function() {
            var classroom_id = $(this).val();
            if (classroom_id) {
                $.ajax({
                    url: "{{ URL::to('Get_Sections') }}/" + classroom_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="section_id_new"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="section_id_new"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('select[name="section_id_new"]').on('change', function() {
            var section_id = $(this).val();
            if (section_id) {
                $.ajax({
                    url: "{{ URL::to('Get_Teacher') }}/" + section_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="teacher_id_new"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="teacher_id_new"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
<script src="{{ asset('pluginEditor/js/tinymce/plugins/eqneditor.js') }}"></script>
<script>
    var editor_config = {
        path_absolute: `{{ asset('pluginEditor/') }}`,
        convert_urls: true,
        selector: 'textarea',
        relative_urls: true,
        plugins: [
            'eqneditor', 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor',
            'pagebreak','table', 'emoticons', 'template', 'help',
            'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
        ],
        toolbar: 'undo redo | eqneditor | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        file_picker_callback: function(callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                'body')[0].clientWidth;
            let y = window.innerHeight || document.documentElement.clientHeight || document
                .getElementsByTagName('body')[0].clientHeight;

            let type = 'image' === meta.filetype ? 'Images' : 'Files',
                url = `{{ route('fm.tinymce5') }}`;

            tinymce.activeEditor.windowManager.openUrl({
                url: url,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config)
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.timepicker').timepicker({
            timeFormat: 'h:mm',
        })
    });
</script>
