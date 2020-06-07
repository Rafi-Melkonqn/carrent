<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @extends('layouts.app')

    @section('content')
        <?php ($mytime = Carbon\Carbon::now());?>
        <div class="ks-page-header">
            <section class="ks-title">
                <h3>Администрация : Агенти Статистика - Резервации</h3>
            </section>
            <div class="card-block">
                <form class="parameter-form" method="get" action="">
                    <div class="form-group">
                        <label for="city">Enter Status</label>
                        <select name="city" class="form-control">
                            @foreach($citys as $city)
                                <option value="{{$city}}">
                                    {{$city}}
                                </option>
                            @endforeach
                        </select>
                    </div>
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
                                <option value="0">Всички дни</option>
                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                <option value="<?= $i; ?>" <?= $i == $mytime->day ? 'selected' : ''; ?> ><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary"  >
                                <span >Покажи</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    </body>
</html>
