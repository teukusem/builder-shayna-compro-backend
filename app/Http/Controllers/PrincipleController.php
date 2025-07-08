<?php

namespace App\Http\Controllers;

use App\Models\Principle;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class PrincipleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/principles",
     *     summary="Get all principles",
     *     tags={"Principles"},
     *     @OA\Response(
     *         response=200,
     *         description="List of principles",
     *         @OA\JsonContent(type="array", @OA\Items(type="object"))
     *     )
     * )
     */
    public function index()
    {
        return response()->json(Principle::all());
    }

    /**
     * @OA\Post(
     *     path="/principles",
     *     summary="Create a new principle",
     *     tags={"Principles"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(type="object")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Principle created",
     *         @OA\JsonContent(type="object")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'learn_more_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);
        $principle = Principle::create($validated);
        return response()->json($principle, 201);
    }

    /**
     * @OA\Get(
     *     path="/principles/{id}",
     *     summary="Get a principle by ID",
     *     tags={"Principles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Principle found",
     *         @OA\JsonContent(type="object")
     *     ),
     *     @OA\Response(response=404, description="Not found")
     * )
     */
    public function show($id)
    {
        $principle = Principle::findOrFail($id);
        return response()->json($principle);
    }

    /**
     * @OA\Put(
     *     path="/principles/{id}",
     *     summary="Update a principle",
     *     tags={"Principles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(type="object")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Principle updated",
     *         @OA\JsonContent(type="object")
     *     ),
     *     @OA\Response(response=404, description="Not found")
     * )
     */
    public function update(Request $request, $id)
    {
        $principle = Principle::findOrFail($id);
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'image' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'learn_more_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);
        $principle->update($validated);
        return response()->json($principle);
    }

    /**
     * @OA\Delete(
     *     path="/principles/{id}",
     *     summary="Delete a principle",
     *     tags={"Principles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Principle deleted",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Not found")
     * )
     */
    public function destroy($id)
    {
        $principle = Principle::findOrFail($id);
        $principle->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

/**
 * @OA\Schema(
 *     schema="Principle",
 *     type="object",
 *     required={"title"},
 *     @OA\Property(property="id", type="integer", readOnly=true),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="image", type="string", nullable=true),
 *     @OA\Property(property="icon", type="string", nullable=true),
 *     @OA\Property(property="description", type="string", nullable=true),
 *     @OA\Property(property="learn_more_link", type="string", nullable=true),
 *     @OA\Property(property="sort_order", type="integer", nullable=true),
 *     @OA\Property(property="is_active", type="boolean", nullable=true),
 *     @OA\Property(property="created_at", type="string", format="date-time", readOnly=true),
 *     @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true)
 * )
 */
