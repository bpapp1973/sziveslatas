<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCalendarsRequest;
use App\Http\Requests\UpdateCalendarsRequest;
use App\Repositories\CalendarsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CalendarsController extends AppBaseController
{
    /** @var  CalendarsRepository */
    private $calendarsRepository;

    public function __construct(CalendarsRepository $calendarsRepo)
    {
        $this->calendarsRepository = $calendarsRepo;
    }

    /**
     * Display a listing of the Calendars.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->calendarsRepository->pushCriteria(new RequestCriteria($request));
        $calendars = $this->calendarsRepository->all();

        return view('models.calendars.index')
            ->with('calendars', $calendars);
    }

    /**
     * Show the form for creating a new Calendars.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.calendars.create');
    }

    /**
     * Store a newly created Calendars in storage.
     *
     * @param CreateCalendarsRequest $request
     *
     * @return Response
     */
    public function store(CreateCalendarsRequest $request)
    {
        $input = $request->all();

        $calendars = $this->calendarsRepository->create($input);

        Flash::success('A Calendars létrehoztuk');

        return redirect(route('calendars.edit', $calendars->id));
    }

    /**
     * Display the specified Calendars.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $calendars = $this->calendarsRepository->findWithoutFail($id);

        if (empty($calendars)) {
            Flash::error('A Calendars nem találjuk');

            return redirect(route('home'));
        }

        return view('models.calendars.show')->with('calendars', $calendars);
    }

    /**
     * Show the form for editing the specified Calendars.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $calendars = $this->calendarsRepository->findWithoutFail($id);

        if (empty($calendars)) {
            Flash::error('A Calendars nem találjuk');

            return redirect(route('home'));
        }

        return view('models.calendars.edit')->with('calendars', $calendars);
    }

    /**
     * Update the specified Calendars in storage.
     *
     * @param  int              $id
     * @param UpdateCalendarsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCalendarsRequest $request)
    {
        $calendars = $this->calendarsRepository->findWithoutFail($id);

        if (empty($calendars)) {
            Flash::error('A Calendars nem találjuk');

            return redirect(route('home'));
        }

        $calendars = $this->calendarsRepository->update($request->all(), $id);

        Flash::success('A Calendars mentettük');

        return view('models.calendars.show')->with('calendars', $calendars);
    }

    /**
     * Remove the specified Calendars from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $calendars = $this->calendarsRepository->findWithoutFail($id);

        if (empty($calendars)) {
            Flash::error('A Calendars nem találjuk');

            return redirect(route('home'));
        }

        $this->calendarsRepository->delete($id);

        Flash::success('A Calendars töröltük');

        return redirect(route('home'));
    }
}
