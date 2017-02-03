<?php

namespace App\Http\Controllers;

use App\Repositories\OrdersRepository;
use App\Criteria\MyOrdersCriteria;
use App\Criteria\ConfirmedOrdersCriteria;
use App\Criteria\NotConfirmedOrdersCriteria;

use App\Repositories\AdsRepository;
use App\Criteria\MyAdsCriteria;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OrdersRepository $ordersRepo, AdsRepository $adsRepo)
    {
        $this->ordersRepository = $ordersRepo;
        $this->adsRepository = $adsRepo;
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

        $notConfirmedOrdersCriteria = new NotConfirmedOrdersCriteria();

        $this->ordersRepository->pushCriteria(new MyOrdersCriteria());
        $this->ordersRepository->pushCriteria($notConfirmedOrdersCriteria);
        $orders = $this->ordersRepository->paginate(env('PAGINATION_SIZE'));
        $notConfirmedEvents = $orders;

        $this->adsRepository->pushCriteria(new MyAdsCriteria());
        $ads = $this->adsRepository->paginate(env('PAGINATION_SIZE'));

        return view('home', [
                        'notconfirmedevents' => $notConfirmedEvents,
                        'ads'                => $ads
                    ]);
    }
}
