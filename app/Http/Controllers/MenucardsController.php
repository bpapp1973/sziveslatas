<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenucardsRequest;
use App\Http\Requests\UpdateMenucardsRequest;
use App\Repositories\MenucardsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MenucardsController extends AppBaseController
{
    /** @var  MenucardsRepository */
    private $menucardsRepository;

    public function __construct(MenucardsRepository $menucardsRepo)
    {
        $this->menucardsRepository = $menucardsRepo;
    }

    /**
     * Display a listing of the Menucards.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->menucardsRepository->pushCriteria(new RequestCriteria($request));
        $menucards = $this->menucardsRepository->all();

        return view('models.menucards.index')
            ->with('menucards', $menucards);
    }

    /**
     * Show the form for creating a new Menucards.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.menucards.create');
    }

    /**
     * Store a newly created Menucards in storage.
     *
     * @param CreateMenucardsRequest $request
     *
     * @return Response
     */
    public function store(CreateMenucardsRequest $request)
    {
        $input = $request->all();

        $menucards = $this->menucardsRepository->create($input);

        Flash::success('A Menucards létrehoztuk');

        return redirect(route('menucards.edit', $menucards->id));
    }

    /**
     * Display the specified Menucards.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menucards = $this->menucardsRepository->findWithoutFail($id);

        if (empty($menucards)) {
            Flash::error('A Menucards nem találjuk');

            return redirect(route('home'));
        }

        return view('models.menucards.show')->with('menucards', $menucards);
    }

    /**
     * Show the form for editing the specified Menucards.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menucards = $this->menucardsRepository->findWithoutFail($id);

        if (empty($menucards)) {
            Flash::error('A Menucards nem találjuk');

            return redirect(route('home'));
        }

        return view('models.menucards.edit')->with('menucards', $menucards);
    }

    /**
     * Update the specified Menucards in storage.
     *
     * @param  int              $id
     * @param UpdateMenucardsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenucardsRequest $request)
    {
        $menucards = $this->menucardsRepository->findWithoutFail($id);

        if (empty($menucards)) {
            Flash::error('A Menucards nem találjuk');

            return redirect(route('home'));
        }

        $menucards = $this->menucardsRepository->update($request->all(), $id);

        Flash::success('A Menucards mentettük');

        return view('models.menucards.show')->with('menucards', $menucards);
    }

    /**
     * Remove the specified Menucards from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menucards = $this->menucardsRepository->findWithoutFail($id);

        if (empty($menucards)) {
            Flash::error('A Menucards nem találjuk');

            return redirect(route('home'));
        }

        $this->menucardsRepository->delete($id);

        Flash::success('A Menucards töröltük');

        return redirect(route('home'));
    }
}
