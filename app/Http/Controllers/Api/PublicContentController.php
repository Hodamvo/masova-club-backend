<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Product;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class PublicContentController extends Controller
{
    public function staff(): JsonResponse
    {
        $staff = Staff::query()
            ->where('is_visible', true)
            ->orderBy('id')
            ->get();

        return response()->json($staff);
    }

    public function products(): JsonResponse
    {
        $products = Product::query()
            ->where('is_published', true)
            ->orderBy('id')
            ->get();

        return response()->json($products);
    }

    public function events(): JsonResponse
    {
        $events = Event::query()
            ->orderByDesc('date')
            ->orderByDesc('id')
            ->get();

        return response()->json($events);
    }
}
