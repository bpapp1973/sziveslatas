<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Repositories\OrdersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Debugbar;

class OrdersController extends AppBaseController
{
    /** @var  OrdersRepository */
    private $ordersRepository;

    public function __construct(OrdersRepository $ordersRepo)
    {
        $this->ordersRepository = $ordersRepo;
    }

    /**
     * Display a listing of the Orders.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordersRepository->pushCriteria(new RequestCriteria($request));
        $orders = $this->ordersRepository->paginate(5);

        return view('models.orders.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new Orders.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.orders.create');
    }

    /**
     * Store a newly created Orders in storage.
     *
     * @param CreateOrdersRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdersRequest $request)
    {

        $input = $request->all();
        $range=$this->parseDateRange($input["daterange"]);
        $input["startdate"] = $range[0];
        $input["enddate"]   = $range[1];

        $orders = $this->ordersRepository->create($input);

        Flash::success('Emailben értesítettük a hirdetőt a foglalási szándékodról. Hamarosan felveszi veled a kapcsolatot.');

        //return redirect(route('orders.edit', $orders->id));
        return redirect(route('ads.show', $orders->ads_id));
    }

    /**
     * Display the specified Orders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orders = $this->ordersRepository->findWithoutFail($id);

        if (empty($orders)) {
            Flash::error('A megrendelést nem találjuk');

            return redirect(route('home'));
        }

        return view('models.orders.show')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified Orders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orders = $this->ordersRepository->findWithoutFail($id);

        if (empty($orders)) {
            Flash::error('A megrendelést nem találjuk');

            return redirect(route('home'));
        }

        return view('models.orders.edit')->with('orders', $orders);
    }

    /**
     * Update the specified Orders in storage.
     *
     * @param  int              $id
     * @param UpdateOrdersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdersRequest $request)
    {
        $orders = $this->ordersRepository->findWithoutFail($id);

        if (empty($orders)) {
            Flash::error('A megrendelést nem találjuk');

            return redirect(route('home'));
        }

        $orders = $this->ordersRepository->update($request->all(), $id);

        Flash::success('A megrendelést mentettük');

        return view('models.orders.show')->with('orders', $orders);
    }

    /**
     * Remove the specified Orders from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orders = $this->ordersRepository->findWithoutFail($id);

        if (empty($orders)) {
            Flash::error('A megrendelést nem találjuk');

            return redirect(route('home'));
        }

        $this->ordersRepository->delete($id);

        Flash::success('A megrendelést töröltük');

        return redirect(route('home'));
    }

    private function parseDateRange($daterange) {
        $pos = strpos($daterange, ' - ');
        $startDate = substr($daterange,0,$pos);
        $endDate = substr($daterange, $pos+3);
        return [$startDate,$endDate];
    }
}
