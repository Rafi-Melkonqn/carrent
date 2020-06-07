<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use app\http\helpers;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $citys = Agent::distinct()->get(['src']);
        return view('home',compact('citys'));
    }

    public function getCarOrder()
    {
        $citys = Agent::distinct()->get(['src']);
        return view('carOrder',compact('citys'));
    }

    public function index(Request $request)
    {
//        $year = $request->get('year', 0);
//        $month = $request->get('month', 0);
//        $day = $request->get('day', 0);
//
//        $startDate = Carbon::now();
//        $endDate = Carbon::now();
//
//        if ($year >= 0 && $month > 0 && $day > 0)
//        {
//            $startDate = Carbon::createFromDate($year, $month, $day )->startOfDay();
//            $endDate = Carbon::createFromDate($year, $month, $day )->endOfDay();
//        }
//        elseif ($year >= 2000 && $month > 0 && $day < 1 )
//        {
//            $startDate = Carbon::createFromDate($year, $month, 1 )->startOfMonth();
//            $endDate = Carbon::createFromDate($year, $month, 1 )->endOfMonth();
//        }
//        elseif ($year > 0 || $year == 0)
//        {
//            if ($year == 0) { $year = date('Y'); }
//
//            $startDate = Carbon::createFromDate($year, 1, 1 )->startOfMonth();
//            $endDate = Carbon::createFromDate($year, 12, 1 )->endOfMonth();
//        }
//
//        seo()->setTitle('Администрация : Резервации Статистика');
//
//
//        return view('admin.layouts.kosmo')
//            ->with('content', view('home')->with(compact('year', 'month', 'day')));
    }
}
