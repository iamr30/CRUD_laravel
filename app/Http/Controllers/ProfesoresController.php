<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfesoresRequest;
use App\Http\Requests\UpdateProfesoresRequest;
use App\Repositories\ProfesoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProfesoresController extends AppBaseController
{
    /** @var  ProfesoresRepository */
    private $profesoresRepository;

    public function __construct(ProfesoresRepository $profesoresRepo)
    {
        $this->profesoresRepository = $profesoresRepo;
    }

    /**
     * Display a listing of the Profesores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profesores = $this->profesoresRepository->all();

        return view('profesores.index')
            ->with('profesores', $profesores);
    }

    /**
     * Show the form for creating a new Profesores.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created Profesores in storage.
     *
     * @param CreateProfesoresRequest $request
     *
     * @return Response
     */
    public function store(CreateProfesoresRequest $request)
    {
        $input = $request->all();

        $profesores = $this->profesoresRepository->create($input);

        Flash::success('Profesores saved successfully.');

        return redirect(route('profesores.index'));
    }

    /**
     * Display the specified Profesores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profesores = $this->profesoresRepository->find($id);

        if (empty($profesores)) {
            Flash::error('Profesores not found');

            return redirect(route('profesores.index'));
        }

        return view('profesores.show')->with('profesores', $profesores);
    }

    /**
     * Show the form for editing the specified Profesores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profesores = $this->profesoresRepository->find($id);

        if (empty($profesores)) {
            Flash::error('Profesores not found');

            return redirect(route('profesores.index'));
        }

        return view('profesores.edit')->with('profesores', $profesores);
    }

    /**
     * Update the specified Profesores in storage.
     *
     * @param int $id
     * @param UpdateProfesoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfesoresRequest $request)
    {
        $profesores = $this->profesoresRepository->find($id);

        if (empty($profesores)) {
            Flash::error('Profesores not found');

            return redirect(route('profesores.index'));
        }

        $profesores = $this->profesoresRepository->update($request->all(), $id);

        Flash::success('Profesores updated successfully.');

        return redirect(route('profesores.index'));
    }

    /**
     * Remove the specified Profesores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profesores = $this->profesoresRepository->find($id);

        if (empty($profesores)) {
            Flash::error('Profesores not found');

            return redirect(route('profesores.index'));
        }

        $this->profesoresRepository->delete($id);

        Flash::success('Profesores deleted successfully.');

        return redirect(route('profesores.index'));
    }
}
