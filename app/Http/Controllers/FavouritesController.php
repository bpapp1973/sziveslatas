<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFavouritesRequest;
use App\Http\Requests\UpdateFavouritesRequest;
use App\Repositories\FavouritesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FavouritesController extends AppBaseController
{
    /** @var  FavouritesRepository */
    private $favouritesRepository;

    public function __construct(FavouritesRepository $favouritesRepo)
    {
        $this->favouritesRepository = $favouritesRepo;
    }

    /**
     * Display a listing of the Favourites.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->favouritesRepository->pushCriteria(new RequestCriteria($request));
        $favourites = $this->favouritesRepository->all();

        return view('models.favourites.index')
            ->with('favourites', $favourites);
    }

    /**
     * Show the form for creating a new Favourites.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.favourites.create');
    }

    /**
     * Store a newly created Favourites in storage.
     *
     * @param CreateFavouritesRequest $request
     *
     * @return Response
     */
    public function store(CreateFavouritesRequest $request)
    {
        $input = $request->all();

        $favourites = $this->favouritesRepository->create($input);

        Flash::overlay('Sikeres feliratkozás');

        //return redirect(route('favourites.edit', $favourites->id));
        return redirect(route('ads.show', $favourites->ads_id));
    }

    /**
     * Display the specified Favourites.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $favourites = $this->favouritesRepository->findWithoutFail($id);

        if (empty($favourites)) {
            Flash::error('A Favourites nem találjuk');

            return redirect(route('home'));
        }

        return view('models.favourites.show')->with('favourites', $favourites);
    }

    /**
     * Show the form for editing the specified Favourites.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $favourites = $this->favouritesRepository->findWithoutFail($id);

        if (empty($favourites)) {
            Flash::error('A Favourites nem találjuk');

            return redirect(route('home'));
        }

        return view('models.favourites.edit')->with('favourites', $favourites);
    }

    /**
     * Update the specified Favourites in storage.
     *
     * @param  int              $id
     * @param UpdateFavouritesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFavouritesRequest $request)
    {
        $favourites = $this->favouritesRepository->findWithoutFail($id);

        if (empty($favourites)) {
            Flash::error('A Favourites nem találjuk');

            return redirect(route('home'));
        }

        $favourites = $this->favouritesRepository->update($request->all(), $id);

        Flash::success('A Favourites mentettük');

        return view('models.favourites.show')->with('favourites', $favourites);
    }

    /**
     * Remove the specified Favourites from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $favourites = $this->favouritesRepository->findWithoutFail($id);

        if (empty($favourites)) {
            Flash::error('A Favourites nem találjuk');

            return redirect(route('home'));
        }

        $this->favouritesRepository->delete($id);

        Flash::overlay('A Favourites töröltük');

        return redirect(route('ads.show', $favourites->ads_id));
        //return redirect(route('home'));
    }
}
