<?php

namespace App\Http\Controllers;

use App\Http\Repositories\LojaRepository;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    private $lojaRepository;

    public function __construct(LojaRepository $lojaRepository)
    {
        $this->lojaRepository = $lojaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->lojaRepository->index();
        } catch (\Throwable $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            return $this->lojaRepository->store($request);
        } catch (\Throwable $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return $this->lojaRepository->show($id);
        } catch (\Throwable $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            return $this->lojaRepository->update($request, $id);
        } catch (\Throwable $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            return $this->lojaRepository->destroy($id);
        } catch (\Throwable $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
