@extends('layouts.app')

@section('content')

<?php ($mytime = Carbon\Carbon::now());?>
    <div class="ks-page-header">
        <section class="ks-title">
            <h1 class="bold italic text-white text-center text">Rent a car G&D</h1>
            <h3 class="bold italic text-white text-center text">Бързо и лесно
                <i class="	glyphicon glyphicon-road"></i>
            </h3>
        </section>
        <div class="card-block text-warning bold">
            <form class="parameter-form" method="get" action="{{ route('order.result') }}">
                <table>
                    <tbody>
                        <tr>
                            <div class="form-group mr-5 pr-5">
                                <label for="city">Въвеади Град</label>
                                <select name="city" class="form-control">
                                    @foreach($citys as $city)
                                        <option value="{{$city->src}}">
                                            {{$city->src}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="year">Въвеади начална дата</label>
                            <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <select name="year" class="form-control ks-select" >
                                                                    <?php for ($i = $mytime->year +2; $mytime->year  <= $i; $i--): ?>
                                                                    <option value="<?= $i ?>" <?= $i == $mytime->year ? 'selected' : ''; ?> ><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <?php
                                                                function month_name_by_number($number, $locale = 'bg_BG.utf8')
                                                                {
                                                                    setlocale(LC_TIME, $locale);
                                                                    return mb_convert_case(strftime('%B', mktime(0, 0, 0, $number, 1)), MB_CASE_TITLE, "UTF-8");
                                                                }
                                                                ?>
                                                                <select name="month" class="form-control ks-select custom-select category-select">
                                                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                                                    <option value="<?= $i; ?>" <?= $i == $mytime->month ? 'selected' : ''; ?> >
                                                                        <?= month_name_by_number($i) ?>
                                                                    </option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="day" class="form-control ks-select custom-select category-select">
                                                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                                                    <option value="<?= $i; ?>" <?= $i == $mytime->day ? 'selected' : ''; ?> ><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                        </tr>
                        <tr>
                            <label for="yearEnd">Въвеади краина дата</label>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <select name="yearEnd" class="form-control ks-select" >
                                                                    <?php for ($i = $mytime->year +2; $mytime->year  <= $i; $i--): ?>
                                                                    <option value="<?= $i ?>" <?= $i == $mytime->year ? 'selected' : ''; ?> ><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="monthEnd" class="form-control ks-select custom-select category-select">
                                                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                                                    <option value="<?= $i; ?>" <?= $i == $mytime->month ? 'selected' : ''; ?> >
                                                                        <?= month_name_by_number($i) ?>
                                                                    </option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="dayEnd" class="form-control ks-select custom-select category-select">
                                                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                                                    <option value="<?= $i; ?>" <?= $i == $mytime->day + 1? 'selected' : ''; ?> ><?= $i; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                            <div class="col-sm-2">
                                <div class="form-group text-center">
                                    <button type="submit"  class="nextStep btn btn-success btn-lg" />
                                        Next <i class="glyphicon glyphicon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
<script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript"
        src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
    $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
    });
    $('#datetimepicker1').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
    });
</script>
@endsection

