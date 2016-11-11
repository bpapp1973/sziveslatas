<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImagesRequest;
use App\Http\Requests\UpdateImagesRequest;
use App\Repositories\ImagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ImagesController extends AppBaseController
{
    /** @var  ImagesRepository */
    private $imagesRepository;

    public function __construct(ImagesRepository $imagesRepo)
    {
        $this->imagesRepository = $imagesRepo;
    }

    /**
     * Display a listing of the Images.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imagesRepository->pushCriteria(new RequestCriteria($request));
        $images = $this->imagesRepository->all();

        return view('models.images.index')
            ->with('images', $images);
    }

    /**
     * Show the form for creating a new Images.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.images.create');
    }

    /**
     * Store a newly created Images in storage.
     *
     * @param CreateImagesRequest $request
     *
     * @return Response
     */
    public function store(CreateImagesRequest $request)
    {
        $input = $request->all();

        $images = $this->imagesRepository->create($input);

        Flash::success('A Images létrehoztuk');

        return redirect(route('images.edit', $images->id));
    }

    /**
     * Display the specified Images.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $images = $this->imagesRepository->findWithoutFail($id);

        if (empty($images)) {
            Flash::error('A Images nem találjuk');

            return redirect(route('home'));
        }

        return view('models.images.show')->with('images', $images);
    }

    /**
     * Show the form for editing the specified Images.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $images = $this->imagesRepository->findWithoutFail($id);

        if (empty($images)) {
            Flash::error('A Images nem találjuk');

            return redirect(route('home'));
        }

        return view('models.images.edit')->with('images', $images);
    }

    /**
     * Update the specified Images in storage.
     *
     * @param  int              $id
     * @param UpdateImagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImagesRequest $request)
    {
        $images = $this->imagesRepository->findWithoutFail($id);

        if (empty($images)) {
            Flash::error('A Images nem találjuk');

            return redirect(route('home'));
        }

        $images = $this->imagesRepository->update($request->all(), $id);

        Flash::success('A Images mentettük');

        return view('models.images.show')->with('images', $images);
    }

    /**
     * Remove the specified Images from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $images = $this->imagesRepository->findWithoutFail($id);

        if (empty($images)) {
            Flash::error('A Images nem találjuk');

            return redirect(route('home'));
        }

        $this->imagesRepository->delete($id);

        Flash::success('A Images töröltük');

        return redirect(route('home'));
    }
}
