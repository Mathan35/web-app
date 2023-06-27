<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AutocompleteCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [];

        if ($request->filled('q')) {
            $data = Job::select("category", "id")
                ->where('category', 'LIKE', '%' . $request->get('categoru') . '%')
                ->get();
        }

        return response()->json($data);

    }
}
