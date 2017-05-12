<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Categories;
use App\Http\Requests\CreateHighlightsRequest;
use App\Http\Requests\UpdateHighlightsRequest;
use App\Repositories\HighlightsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HighlightsController extends AppBaseController
{
    /** @var  HighlightsRepository */
    private $highlightsRepository;
    private $app_name;

    public function __construct(HighlightsRepository $highlightsRepo)
    {
        $this->highlightsRepository = $highlightsRepo;
        $this->app_name = env('APP_NAME','szíveslátás.hu');
    }

    /**
     * Display a listing of the Highlights.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->highlightsRepository->pushCriteria(new RequestCriteria($request));
        $highlights = $this->highlightsRepository->findByField('site',$this->app_name)->all();

        if ($this->app_name=='gyertekel.hu') {
            $programs = Categories::where('parent_id',4)->get(['id']);
            $ads = Ads::where('isvalid','1')
                ->whereIn('categories_id',$programs)
                ->get(['id','title','summary','highlighted','description']);
        } else {
            $ads = Ads::where(['isvalid'=>'1'])->get(['id','title','summary','highlighted','description']);
        }

        return view('models.highlights.index')
            ->with(['highlights'=> $highlights,
                    'ads'       => $ads]);
    }

    /**
     * Show the form for creating a new Highlights.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.highlights.create');
    }

    /**
     * Store a newly created Highlights in storage.
     *
     * @param CreateHighlightsRequest $request
     *
     * @return Response
     */
    public function store(CreateHighlightsRequest $request)
    {
        $input = $request->all();

        $highlights = $this->highlightsRepository->create($input);

        Flash::success('A kiemelést létrehoztuk');

        return redirect(route('highlights.edit', $highlights->id));
    }

    /**
     * Display the specified Highlights.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $highlights = $this->highlightsRepository->findWithoutFail($id);

        if (empty($highlights)) {
            Flash::error('A kiemelést nem találjuk');

            return redirect(route('home'));
        }

        return view('models.highlights.show')->with('highlights', $highlights);
    }

    /**
     * Show the form for editing the specified Highlights.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $highlights = $this->highlightsRepository->findWithoutFail($id);

        if (empty($highlights)) {
            Flash::error('A kiemelést nem találjuk');

            return redirect(route('home'));
        }

        return view('models.highlights.edit')->with('highlights', $highlights);
    }

    /**
     * Update the specified Highlights in storage.
     *
     * @param  int              $id
     * @param UpdateHighlightsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHighlightsRequest $request)
    {
        $highlights = $this->highlightsRepository->findWithoutFail($id);

        if (empty($highlights)) {
            Flash::error('A kiemelést nem találjuk');

            return redirect(route('home'));
        }

        $highlights = $this->highlightsRepository->update($request->all(), $id);

        Flash::success('A kiemelést mentettük');

        return view('models.highlights.show')->with('highlights', $highlights);
    }

    /**
     * Remove the specified Highlights from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $highlights = $this->highlightsRepository->findWithoutFail($id);

        if (empty($highlights)) {
            Flash::error('A kiemelést nem találjuk');

            return redirect(route('home'));
        }

        $this->highlightsRepository->delete($id);

        Flash::success('A kiemelést töröltük');

        return redirect(route('home'));
    }
}
