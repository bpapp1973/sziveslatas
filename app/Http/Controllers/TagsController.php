<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagsRequest;
use App\Http\Requests\UpdateTagsRequest;
use App\Repositories\TagsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TagsController extends AppBaseController
{
    /** @var  TagsRepository */
    private $tagsRepository;

    public function __construct(TagsRepository $tagsRepo)
    {
        $this->tagsRepository = $tagsRepo;
    }

    /**
     * Display a listing of the Tags.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tagsRepository->pushCriteria(new RequestCriteria($request));
        $tags = $this->tagsRepository->all();

        return view('models.tags.index')
            ->with('tags', $tags);
    }

    /**
     * Show the form for creating a new Tags.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.tags.create');
    }

    /**
     * Store a newly created Tags in storage.
     *
     * @param CreateTagsRequest $request
     *
     * @return Response
     */
    public function store(CreateTagsRequest $request)
    {
        $input = $request->all();

        $tags = $this->tagsRepository->create($input);

        Flash::success('A Tags létrehoztuk');

        return redirect(route('tags.edit', $tags->id));
    }

    /**
     * Display the specified Tags.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tags = $this->tagsRepository->findWithoutFail($id);

        if (empty($tags)) {
            Flash::error('A Tags nem találjuk');

            return redirect(route('home'));
        }

        return view('models.tags.show')->with('tags', $tags);
    }

    /**
     * Show the form for editing the specified Tags.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tags = $this->tagsRepository->findWithoutFail($id);

        if (empty($tags)) {
            Flash::error('A Tags nem találjuk');

            return redirect(route('home'));
        }

        return view('models.tags.edit')->with('tags', $tags);
    }

    /**
     * Update the specified Tags in storage.
     *
     * @param  int              $id
     * @param UpdateTagsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTagsRequest $request)
    {
        $tags = $this->tagsRepository->findWithoutFail($id);

        if (empty($tags)) {
            Flash::error('A Tags nem találjuk');

            return redirect(route('home'));
        }

        $tags = $this->tagsRepository->update($request->all(), $id);

        Flash::success('A Tags mentettük');

        return view('models.tags.show')->with('tags', $tags);
    }

    /**
     * Remove the specified Tags from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tags = $this->tagsRepository->findWithoutFail($id);

        if (empty($tags)) {
            Flash::error('A Tags nem találjuk');

            return redirect(route('home'));
        }

        $this->tagsRepository->delete($id);

        Flash::success('A Tags töröltük');

        return redirect(route('home'));
    }
}
