<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListsRequest;
use App\Http\Requests\UpdateListsRequest;
use App\Repositories\ListsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ListsController extends AppBaseController
{
    /** @var  ListsRepository */
    private $listsRepository;

    public function __construct(ListsRepository $listsRepo)
    {
        $this->listsRepository = $listsRepo;
    }

    /**
     * Display a listing of the Lists.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->listsRepository->pushCriteria(new RequestCriteria($request));
        $lists = $this->listsRepository->all();

        return view('models.lists.index')
            ->with('lists', $lists);
    }

    /**
     * Show the form for creating a new Lists.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.lists.create');
    }

    /**
     * Store a newly created Lists in storage.
     *
     * @param CreateListsRequest $request
     *
     * @return Response
     */
    public function store(CreateListsRequest $request)
    {
        $input = $request->all();

        $lists = $this->listsRepository->create($input);

        Flash::success('A Lists létrehoztuk');

        return redirect(route('lists.edit', $lists->id));
    }

    /**
     * Display the specified Lists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lists = $this->listsRepository->findWithoutFail($id);

        if (empty($lists)) {
            Flash::error('A Lists nem találjuk');

            return redirect(route('home'));
        }

        return view('models.lists.show')->with('lists', $lists);
    }

    /**
     * Show the form for editing the specified Lists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lists = $this->listsRepository->findWithoutFail($id);

        if (empty($lists)) {
            Flash::error('A Lists nem találjuk');

            return redirect(route('home'));
        }

        return view('models.lists.edit')->with('lists', $lists);
    }

    /**
     * Update the specified Lists in storage.
     *
     * @param  int              $id
     * @param UpdateListsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateListsRequest $request)
    {
        $lists = $this->listsRepository->findWithoutFail($id);

        if (empty($lists)) {
            Flash::error('A Lists nem találjuk');

            return redirect(route('home'));
        }

        $lists = $this->listsRepository->update($request->all(), $id);

        Flash::success('A Lists mentettük');

        return view('models.lists.show')->with('lists', $lists);
    }

    /**
     * Remove the specified Lists from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lists = $this->listsRepository->findWithoutFail($id);

        if (empty($lists)) {
            Flash::error('A Lists nem találjuk');

            return redirect(route('home'));
        }

        $this->listsRepository->delete($id);

        Flash::success('A Lists töröltük');

        return redirect(route('home'));
    }
}
