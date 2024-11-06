<div class="form-row">
    <div class="col-6">
        <label for="name">اسم الكوبون</label>
        <input type="text" name="name" value="{{ old('name', $coupon->name) }}" class="form-control">
        @error('name')
            <p class="text-danger">{{ $message }}
        </div>
    @enderror
</div>
<div class="col-6">
    <label for="code">الكود</label>
    <input type="text" name="code" value="{{ old('code', $coupon->code) }}" class="form-control">
    @unless ($coupon)
        <small>اتركه فارغا اذا كنت تريد ان يكون عشوائي</small>
    @endunless
    @error('code')
        <p class="text-danger">{{ $message }}
    </div>
@enderror
</div>
</div>

<div class="form-row">
    <div class="col-6">
        <div class="form-group">
            <label for="type">نوع الكوبون : <span class="text-danger">*</span></label>
            <select id="type" class="custom-select mr-sm-2" name="type">
                <option @selected(old('type', optional($coupon)->type) == 'percent') value="percent">نسبة مئويه</option>
                <option @selected(old('type', optional($coupon)->type) == 'fixed') value="fixed">مبلغ ثابت</option>
            </select>
            @error('type')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <label for="amount">المبلغ</label>
        <input type="number" id="amount" min="0" max="100" required name="amount"
            value="{{ old('amount', $coupon->amount) }}" class="form-control">
        @error('amount')
            <p class="text-danger">{{ $message }}
        </div>
    @enderror
</div>


<div class="col-6">
    <label for="amount">start date</label>
    <input type="date" id="start_date" required name="start_date"
        value="{{ old('start_date', $coupon->start_date) }}" class="form-control">
    @error('start_date')
        <p class="text-danger">{{ $message }}
    </div>
@enderror
</div>

<div class="col-6">
    <label for="end_date">end date</label>
    <input type="date" id="end_date" required name="end_date" value="{{ old('end_date', $coupon->end_date) }}"
        class="form-control">
    @error('end_date')
        <p class="text-danger">{{ $message }}
    </div>
@enderror
</div>



<div class="col-12">
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="active" @checked($coupon->active) name="active"
            value="1">
        <label class="form-check-label" for="status">الحاله</label>
    </div>
    @error('status')
        <p class="text-danger">{{ $message }}
    </div>
@enderror
</div>
</div>

</div>
@section('js')
    <script>
        $('#type').change(function() {
            if ($(this).val() == 'percent') {
                return $('#amount').attr('max', 100)
            }
            return $('#amount').removeAttr('max')
        });
    </script>


<script>
    $(document).ready(function() {
        // Get today's date in YYYY-MM-DD format
        var today = new Date().toISOString().split('T')[0];

        // Get existing values for start_date and end_date (if any)
        var startDate = $('#start_date').val();
        var endDate = $('#end_date').val();

        // Set start_date to today's date if it's empty (for new forms)
        if (!startDate) {
            $('#start_date').val(today).attr('min', today);
            startDate = today; // Update startDate variable for later use
        } else {
            // Set the min attribute to the current start date to prevent past dates on edit
            $('#start_date').attr('min', today);
        }

        // Set end_date's min value based on start_date
        if (!endDate) {
            $('#end_date').attr('min', startDate);
        } else {
            // Ensure the end date is not before the start date when editing
            $('#end_date').attr('min', startDate);
        }

        // Update the end date's min value when the start date changes
        $('#start_date').on('change', function() {
            var newStartDate = $(this).val();
            $('#end_date').attr('min', newStartDate);
        });
    });
</script>

@endsection
