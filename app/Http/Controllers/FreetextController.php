<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFreetextRequest;
use App\Http\Requests\UpdateFreetextRequest;
use App\Repositories\FreetextRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Auth;

class FreetextController extends AppBaseController
{
    /** @var  FreetextRepository */
    private $freetextRepository;

    public function __construct(FreetextRepository $freetextRepo)
    {
        $this->freetextRepository = $freetextRepo;
    }

    /**
     * Display a listing of the Freetext.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->freetextRepository->pushCriteria(new RequestCriteria($request));
        $freetexts = $this->freetextRepository->all();

        return view('models.freetexts.index')
            ->with('freetexts', $freetexts);
    }

    /**
     * Show the form for creating a new Freetext.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.freetexts.create');
    }

    /**
     * Store a newly created Freetext in storage.
     *
     * @param CreateFreetextRequest $request
     *
     * @return Response
     */
    public function store(CreateFreetextRequest $request)
    {
        $input = $request->all();

        $freetext = $this->freetextRepository->create($input);

        Flash::success('A Freetext létrehoztuk');

        return redirect(route('freetexts.edit', $freetext->id));
    }

    /**
     * Display the specified Freetext.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $freetext = $this->freetextRepository->findWithoutFail($id);

        if (empty($freetext)) {
            Flash::error('A fájlt nem találjuk');

            return redirect(route('home'));
        }

        return view('models.freetexts.show')->with('freetext', $freetext);
    }

    /**
     * Show the form for editing the specified Freetext.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $freetext = $this->freetextRepository->findWithoutFail($id);

        if (empty($freetext)) {
            Flash::error('A fájlt nem találjuk');

            return redirect(route('home'));
        }

        return view('models.freetexts.edit')->with('freetext', $freetext);
    }

    /**
     * Update the specified Freetext in storage.
     *
     * @param  int              $id
     * @param UpdateFreetextRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFreetextRequest $request)
    {
        $freetext = $this->freetextRepository->findWithoutFail($id);

        if (empty($freetext)) {
            Flash::error('A fájlt nem találjuk');

            return redirect(route('home'));
        }

        $freetext = $this->freetextRepository->update($request->all(), $id);

        Flash::success('A fájlt mentettük');

        return redirect(route('home'));
        //return view('models.freetexts.show')->with('freetext', $freetext);
    }

    /**
     * Remove the specified Freetext from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $freetext = $this->freetextRepository->findWithoutFail($id);

        if (empty($freetext)) {
            Flash::error('A Freetext nem találjuk');

            return redirect(route('home'));
        }

        $this->freetextRepository->delete($id);

        Flash::success('A Freetext töröltük');

        return redirect(route('home'));
    }
}
