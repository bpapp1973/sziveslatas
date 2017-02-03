<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Repositories\RolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class RolesController extends AppBaseController
{
    /** @var  RolesRepository */
    private $rolesRepository;

    public function __construct(RolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the Roles.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $this->rolesRepository->pushCriteria(new RequestCriteria($request));
        $roles = $this->rolesRepository->all();

        return view('models.roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new Roles.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        return view('models.roles.create');
    }

    /**
     * Store a newly created Roles in storage.
     *
     * @param CreateRolesRequest $request
     *
     * @return Response
     */
    public function store(CreateRolesRequest $request)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $input = $request->all();

        $roles = $this->rolesRepository->create($input);

        Flash::success('A Roles létrehoztuk');

        return redirect(route('roles.edit', $roles->id));
    }

    /**
     * Display the specified Roles.
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
        $roles = $this->rolesRepository->findWithoutFail($id);

        if (empty($roles)) {
            Flash::error('A Roles nem találjuk');

            return redirect(route('home'));
        }

        return view('models.roles.show')->with('roles', $roles);
    }

    /**
     * Show the form for editing the specified Roles.
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
        $roles = $this->rolesRepository->findWithoutFail($id);

        if (empty($roles)) {
            Flash::error('A Roles nem találjuk');

            return redirect(route('home'));
        }

        return view('models.roles.edit')->with('roles', $roles);
    }

    /**
     * Update the specified Roles in storage.
     *
     * @param  int              $id
     * @param UpdateRolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRolesRequest $request)
    {
        if (Auth::guest() || Auth::user()->roles_id < 3) {
            return redirect(route('welcome'));
        }
        $roles = $this->rolesRepository->findWithoutFail($id);

        if (empty($roles)) {
            Flash::error('A Roles nem találjuk');

            return redirect(route('home'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success('A Roles mentettük');

        return view('models.roles.show')->with('roles', $roles);
    }

    /**
     * Remove the specified Roles from storage.
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
        $roles = $this->rolesRepository->findWithoutFail($id);

        if (empty($roles)) {
            Flash::error('A Roles nem találjuk');

            return redirect(route('home'));
        }

        $this->rolesRepository->delete($id);

        Flash::success('A Roles töröltük');

        return redirect(route('home'));
    }
}
