<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountiesRequest;
use App\Http\Requests\UpdateCountiesRequest;
use App\Repositories\CountiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CountiesController extends AppBaseController
{
    /** @var  CountiesRepository */
    private $countiesRepository;

    public function __construct(CountiesRepository $countiesRepo)
    {
        $this->countiesRepository = $countiesRepo;
    }

    /**
     * Display a listing of the Counties.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->countiesRepository->pushCriteria(new RequestCriteria($request));
        $counties = $this->countiesRepository->all();

        return view('models.counties.index')
            ->with('counties', $counties);
    }

    /**
     * Show the form for creating a new Counties.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.counties.create');
    }

    /**
     * Store a newly created Counties in storage.
     *
     * @param CreateCountiesRequest $request
     *
     * @return Response
     */
    public function store(CreateCountiesRequest $request)
    {
        $input = $request->all();

        $counties = $this->countiesRepository->create($input);

        Flash::success('A Counties létrehoztuk');

        return redirect(route('counties.edit', $counties->id));
    }

    /**
     * Display the specified Counties.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $counties = $this->countiesRepository->findWithoutFail($id);

        if (empty($counties)) {
            Flash::error('A Counties nem találjuk');

            return redirect(route('home'));
        }

        return view('models.counties.show')->with('counties', $counties);
    }

    /**
     * Show the form for editing the specified Counties.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $counties = $this->countiesRepository->findWithoutFail($id);

        if (empty($counties)) {
            Flash::error('A Counties nem találjuk');

            return redirect(route('home'));
        }

        return view('models.counties.edit')->with('counties', $counties);
    }

    /**
     * Update the specified Counties in storage.
     *
     * @param  int              $id
     * @param UpdateCountiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountiesRequest $request)
    {
        $counties = $this->countiesRepository->findWithoutFail($id);

        if (empty($counties)) {
            Flash::error('A Counties nem találjuk');

            return redirect(route('home'));
        }

        $counties = $this->countiesRepository->update($request->all(), $id);

        Flash::success('A Counties mentettük');

        return view('models.counties.show')->with('counties', $counties);
    }

    /**
     * Remove the specified Counties from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $counties = $this->countiesRepository->findWithoutFail($id);

        if (empty($counties)) {
            Flash::error('A Counties nem találjuk');

            return redirect(route('home'));
        }

        $this->countiesRepository->delete($id);

        Flash::success('A Counties töröltük');

        return redirect(route('home'));
    }
}
