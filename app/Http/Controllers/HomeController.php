<?php

namespace App\Http\Controllers;

use App\Repositories\OrdersRepository;
use App\Criteria\MyOrdersCriteria;
use App\Criteria\ConfirmedOrdersCriteria;
use App\Criteria\NotConfirmedOrdersCriteria;

use App\Repositories\AdsRepository;
use App\Criteria\MyAdsCriteria;
use App\Criteria\ConfirmedAdsCriteria;
use App\Criteria\NotConfirmedAdsCriteria;
use App\Criteria\ProgramAdsCriteria;
use App\Criteria\ProgramOrdersCriteria;

use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Http\Request;
use Debugbar;
use Auth;

class HomeController extends Controller
{
    /** @var  OrdersRepository */
    private $ordersRepository;
    /** @var  AdsRepository */
    private $adsRepository;
    private $app_name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OrdersRepository $ordersRepo, AdsRepository $adsRepo)
    {
        $this->ordersRepository = $ordersRepo;
        $this->adsRepository = $adsRepo;
        $this->app_name = env('APP_NAME','sziveslatas.hu');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest() || Auth::user()->roles_id == 1) {
            return redirect(route('welcome'));
        }

        if (Auth::user()->roles_id == 2) {
            $notConfirmedOrdersCriteria = new NotConfirmedOrdersCriteria();
            $this->ordersRepository->pushCriteria(new MyOrdersCriteria());
            $this->ordersRepository->pushCriteria($notConfirmedOrdersCriteria);
            if ($this->app_name=='gyertekel.hu') {
              $this->ordersRepository->pushCriteria(new ProgramOrdersCriteria());
            }
            $orders = $this->ordersRepository->paginate(env('PAGINATION_SIZE'));
            $notConfirmedEvents = $orders;

            $this->adsRepository->pushCriteria(new MyAdsCriteria());
            if ($this->app_name=='gyertekel.hu') {
              $this->adsRepository->pushCriteria(new ProgramAdsCriteria());
            }
            $ads = $this->adsRepository->paginate(env('PAGINATION_SIZE'));

            return view('home', [
                            'notconfirmedevents' => $orders,
                            'ads'                => $ads
                        ]);
        }

        if (Auth::user()->roles_id >= 3) {
            $this->adsRepository->pushCriteria(new NotConfirmedAdsCriteria());
            if ($this->app_name=='gyertekel.hu') {
              $this->adsRepository->pushCriteria(new ProgramAdsCriteria());
            }
            $ads = $this->adsRepository->paginate(env('PAGINATION_SIZE'));

            return view('home')
                ->with('ads', $ads);
        }
    }
}
