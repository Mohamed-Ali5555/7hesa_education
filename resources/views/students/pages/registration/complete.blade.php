<!-- row -->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>7essa Online Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style type="text/css">
        body {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);
        }

        .error-template {
            padding: 40px 15px;
            text-align: center;
            transform: translate(0, 25%)
        }

        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .error-actions .btn {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <div class="row">
                        <div class="col-md-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    @if ($student->active == 1)
                                        <img src="{{ URL::asset('assets/images/undraw_agree_re_hor9.svg') }}"
                                            alt="avatar" style="width: 270px;position: relative;margin-bottom: 20px;">
                                        <h2>لقد تم تفعيل حسابك بالفعل</h2>
                                        <div class="error-actions"><a
                                                href="{{ route('login.show', [
                                                    'type' => 'teacher',
                                                ]) }}"
                                                class="btn btn-primary btn-lg"><span
                                                    class="glyphicon glyphicon-envelope"></span> تسجيل الدخول </a>
                                        </div>
                                    @else
                                        <img src="{{ URL::asset('assets/images/undraw_thought_process_re_om58.svg') }}"
                                            alt="avatar" style="width: 270px;position: relative;margin-bottom: 20px;">
                                        <h1>للتعليم الاونلاين <span>Board</span> شكرا لك لاستخدام منصة </h1>
                                        <h2>تم تفعيل حسابك بنجاح سوف يتم توجيهك الان الى صفحة تسجيل الدخول لاستكمال
                                            باقي البيانات</h2>
                                        <form name="success" id="success"
                                            action="{{ route('updateInfo.successUpdate', $type) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id"
                                                value="{{ $student->id ?? ($teacher->id ?? '') }}">

                                        </form>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function submitForm() {
        document.success.submit();
    }
    var autosubmit = setInterval(
        function() {
            submitForm();
        }, 3000);
</script>

</html>
