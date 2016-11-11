<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitiesRequest;
use App\Http\Requests\UpdateCitiesRequest;
use App\Repositories\CitiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CitiesController extends AppBaseController
{
    /** @var  CitiesRepository */
    private $citiesRepository;

    public function __construct(CitiesRepository $citiesRepo)
    {
        $this->citiesRepository = $citiesRepo;
    }

    /**
     * Display a listing of the Cities.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->citiesRepository->pushCriteria(new RequestCriteria($request));
        $cities = $this->citiesRepository->all();

        return view('models.cities.index')
            ->with('cities', $cities);
    }

    /**
     * Show the form for creating a new Cities.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.cities.create');
    }

    /**
     * Store a newly created Cities in storage.
     *
     * @param CreateCitiesRequest $request
     *
     * @return Response
     */
    public function store(CreateCitiesRequest $request)
    {
        $input = $request->all();

        $cities = $this->citiesRepository->create($input);

        Flash::success('A Cities létrehoztuk');

        return redirect(route('cities.edit', $cities->id));
    }

    /**
     * Display the specified Cities.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cities = $this->citiesRepository->findWithoutFail($id);

        if (empty($cities)) {
            Flash::error('A Cities nem találjuk');

            return redirect(route('home'));
        }

        return view('models.cities.show')->with('cities', $cities);
    }

    /**
     * Show the form for editing the specified Cities.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cities = $this->citiesRepository->findWithoutFail($id);

        if (empty($cities)) {
            Flash::error('A Cities nem találjuk');

            return redirect(route('home'));
        }

        return view('models.cities.edit')->with('cities', $cities);
    }

    /**
     * Update the specified Cities in storage.
     *
     * @param  int              $id
     * @param UpdateCitiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitiesRequest $request)
    {
        $cities = $this->citiesRepository->findWithoutFail($id);

        if (empty($cities)) {
            Flash::error('A Cities nem találjuk');

            return redirect(route('home'));
        }

        $cities = $this->citiesRepository->update($request->all(), $id);

        Flash::success('A Cities mentettük');

        return view('models.cities.show')->with('cities', $cities);
    }

    /**
     * Remove the specified Cities from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cities = $this->citiesRepository->findWithoutFail($id);

        if (empty($cities)) {
            Flash::error('A Cities nem találjuk');

            return redirect(route('home'));
        }

        $this->citiesRepository->delete($id);

        Flash::success('A Cities töröltük');

        return redirect(route('home'));
    }
}
