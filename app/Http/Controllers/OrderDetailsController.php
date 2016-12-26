<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderDetailsRequest;
use App\Http\Requests\UpdateOrderDetailsRequest;
use App\Repositories\OrderDetailsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderDetailsController extends AppBaseController
{
    /** @var  OrderDetailsRepository */
    private $orderDetailsRepository;

    public function __construct(OrderDetailsRepository $orderDetailsRepo)
    {
        $this->orderDetailsRepository = $orderDetailsRepo;
    }

    /**
     * Display a listing of the OrderDetails.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->orderDetailsRepository->pushCriteria(new RequestCriteria($request));
        $orderDetails = $this->orderDetailsRepository->all();

        return view('models.order_details.index')
            ->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for creating a new OrderDetails.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.order_details.create');
    }

    /**
     * Store a newly created OrderDetails in storage.
     *
     * @param CreateOrderDetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderDetailsRequest $request)
    {
        $input = $request->all();

        $orderDetails = $this->orderDetailsRepository->create($input);

        Flash::success('A Order Details létrehoztuk');

        return redirect(route('orderDetails.edit', $orderDetails->id));
    }

    /**
     * Display the specified OrderDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderDetails = $this->orderDetailsRepository->findWithoutFail($id);

        if (empty($orderDetails)) {
            Flash::error('A Order Details nem találjuk');

            return redirect(route('home'));
        }

        return view('models.order_details.show')->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for editing the specified OrderDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderDetails = $this->orderDetailsRepository->findWithoutFail($id);

        if (empty($orderDetails)) {
            Flash::error('A Order Details nem találjuk');

            return redirect(route('home'));
        }

        return view('models.order_details.edit')->with('orderDetails', $orderDetails);
    }

    /**
     * Update the specified OrderDetails in storage.
     *
     * @param  int              $id
     * @param UpdateOrderDetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderDetailsRequest $request)
    {
        $orderDetails = $this->orderDetailsRepository->findWithoutFail($id);

        if (empty($orderDetails)) {
            Flash::error('A Order Details nem találjuk');

            return redirect(route('home'));
        }

        $orderDetails = $this->orderDetailsRepository->update($request->all(), $id);

        Flash::success('A Order Details mentettük');

        return view('models.order_details.show')->with('orderDetails', $orderDetails);
    }

    /**
     * Remove the specified OrderDetails from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderDetails = $this->orderDetailsRepository->findWithoutFail($id);

        if (empty($orderDetails)) {
            Flash::error('A Order Details nem találjuk');

            return redirect(route('home'));
        }

        $this->orderDetailsRepository->delete($id);

        Flash::success('A Order Details töröltük');

        return redirect(route('home'));
    }
}
