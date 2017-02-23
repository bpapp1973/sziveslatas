<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Repositories\CategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class CategoriesController extends AppBaseController
{
    /** @var  CategoriesRepository */
    private $categoriesRepository;

    public function __construct(CategoriesRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the Categories.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }

        $this->categoriesRepository->pushCriteria(new RequestCriteria($request));
        $categories = $this->categoriesRepository->paginate(env('PAGINATION_SIZE'));

        return view('models.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Categories.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        return view('models.categories.create');
    }

    /**
     * Store a newly created Categories in storage.
     *
     * @param CreateCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriesRequest $request)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $input = $request->all();

        $categories = $this->categoriesRepository->create($input);

        Flash::success('A Categories létrehoztuk');

        return redirect(route('categories.edit', $categories->id));
    }

    /**
     * Display the specified Categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $categories = $this->categoriesRepository->findWithoutFail($id);

        if (empty($categories)) {
            Flash::error('A Categories nem találjuk');

            return redirect(route('home'));
        }

        return view('models.categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified Categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $categories = $this->categoriesRepository->findWithoutFail($id);
        $parents = $this->categoriesRepository->findByField('parent_id',null)->pluck('name','id');

        if (empty($categories)) {
            Flash::error('A Categories nem találjuk');

            return redirect(route('home'));
        }

        return view('models.categories.edit', ['categories' => $categories,
                                                  'parents' => $parents]);
    }

    /**
     * Update the specified Categories in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriesRequest $request)
    {
        $categories = $this->categoriesRepository->findWithoutFail($id);

        if (empty($categories)) {
            Flash::error('A Categories nem találjuk');

            return redirect(route('home'));
        }

        $categories = $this->categoriesRepository->update($request->all(), $id);

        Flash::success('A Categories mentettük');

        return view('models.categories.show')->with('categories', $categories);
    }

    /**
     * Remove the specified Categories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $categories = $this->categoriesRepository->findWithoutFail($id);

        if (empty($categories)) {
            Flash::error('A Categories nem találjuk');

            return redirect(route('home'));
        }

        $this->categoriesRepository->delete($id);

        Flash::success('A Categories töröltük');

        return redirect(route('home'));
    }
}
