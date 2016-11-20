<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomsRequest;
use App\Http\Requests\UpdateRoomsRequest;
use App\Repositories\RoomsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoomsController extends AppBaseController
{
    /** @var  RoomsRepository */
    private $roomsRepository;

    public function __construct(RoomsRepository $roomsRepo)
    {
        $this->roomsRepository = $roomsRepo;
    }

    /**
     * Display a listing of the Rooms.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roomsRepository->pushCriteria(new RequestCriteria($request));
        $rooms = $this->roomsRepository->all();

        return view('models.rooms.index')
            ->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new Rooms.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.rooms.create');
    }

    /**
     * Store a newly created Rooms in storage.
     *
     * @param CreateRoomsRequest $request
     *
     * @return Response
     */
    public function store(CreateRoomsRequest $request)
    {
        $input = $request->all();

        $rooms = $this->roomsRepository->create($input);

        Flash::success('A Rooms létrehoztuk');

        return redirect(route('rooms.edit', $rooms->id));
    }

    /**
     * Display the specified Rooms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rooms = $this->roomsRepository->findWithoutFail($id);

        if (empty($rooms)) {
            Flash::error('A Rooms nem találjuk');

            return redirect(route('home'));
        }

        return view('models.rooms.show')->with('rooms', $rooms);
    }

    /**
     * Show the form for editing the specified Rooms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rooms = $this->roomsRepository->findWithoutFail($id);

        if (empty($rooms)) {
            Flash::error('A Rooms nem találjuk');

            return redirect(route('home'));
        }

        return view('models.rooms.edit')->with('rooms', $rooms);
    }

    /**
     * Update the specified Rooms in storage.
     *
     * @param  int              $id
     * @param UpdateRoomsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoomsRequest $request)
    {
        $rooms = $this->roomsRepository->findWithoutFail($id);

        if (empty($rooms)) {
            Flash::error('A Rooms nem találjuk');

            return redirect(route('home'));
        }

        $rooms = $this->roomsRepository->update($request->all(), $id);

        Flash::success('A Rooms mentettük');

        return view('models.rooms.show')->with('rooms', $rooms);
    }

    /**
     * Remove the specified Rooms from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rooms = $this->roomsRepository->findWithoutFail($id);

        if (empty($rooms)) {
            Flash::error('A Rooms nem találjuk');

            return redirect(route('home'));
        }

        $this->roomsRepository->delete($id);

        Flash::success('A Rooms töröltük');

        return redirect(route('home'));
    }
}
