<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all());
    }

    public function show($id): JsonResponse
    {
        $person = People::find($id);
        return response()->json($person);
    }

    public function create(Request $request): JsonResponse
    {
        $people = People::create($request->all());

        return response()->json($people);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $person = People::find($id);
        $person->update($request->all());

        return response()->json($person);
    }

    public function delete($id): JsonResponse
    {
        $person = People::find($id);
        $person->delete();

        return response()->json(null);
    }
}
