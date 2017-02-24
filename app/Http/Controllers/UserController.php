<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Counties;
use App\Models\Cities;
use App\Models\Roles;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->paginate(env('PAGINATION_SIZE'));

        return view('models.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $cities = Cities::pluck('name','id');
        $counties = Counties::pluck('name', 'id');
        return view('models.users.create')->with(['counties' => $counties, 
                                    'cities' => $cities
                                    ]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success('A felhasználó létrehozva.');

        return redirect(route('users.edit', $user->id));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            //Flash::error('A felhasználó nem található');

            return redirect(route('users.index'));
        }

        return view('models.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('A felhasználó nem található');

            return redirect(route('users.index'));
        }

        $cities = Cities::pluck('name','id');
        $counties = Counties::pluck('name', 'id');
        $roles = Roles::pluck('name', 'id');
        return view('models.users.edit')->with(['user' => $user, 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'roles' => $roles
                                    ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('A felhasználó nem található');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('A felhasználó adatait frissítettük');

        return redirect(route('users.edit', $user->id));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('A felhasználó nem található');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('A felhasználó törölve');

        return redirect(route('home'));
    }

    /**
     * Show the password change form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPwdChangeForm()
    {
        return view('auth.passwords.change', ['user' => Auth::user()]);
    }

    /**
     * Change the password after validation.
     *
     * @param  Request $request
     * @param  int $id
     * @return redirect
     */
    public function pwdChange(Request $request, $id)
    {
        $data = $request->all();
        $user = User::whereUsername($data['username']);
        
        $validator = Validator::make($data, [
                'old_pwd' => 'hash:'.Auth::user()->password,
                'password' => 'required|min:6|confirmed',
            ]);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        } else {
            if ($user->exists()) {
                $user->update(['password' => bcrypt($data['password'])]);
            }
            return redirect('/home')->with('status', 'A jelszó sikeresen megváltoztatva');
        }
    }


}
