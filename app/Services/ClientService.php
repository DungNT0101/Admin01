<?php

namespace App\Services;

use App\Models\Sale;


class ClientService
{

    public function getSaleLands()
    {
        return Sale::where('type', Sale::TYPE_LAND)
            ->with(['images', 'user'])
            ->orderByDesc('updated_at')
            ->paginate(9);
    }

    public function getSaleHouse()
    {
        return Sale::where('type', Sale::TYPE_HOUSE)
            ->with(['images', 'user'])
            ->orderByDesc('updated_at')
            ->paginate(9);
    }

    public function getPropertyBySlug($slug)
    {
        return Sale::where('slug', $slug)->with(['images', 'user'])->first();
    }

    public function getHotProperties()
    {
        return Sale::where('hot', 1)
            ->with(['images', 'user'])
            ->get();
    }

    public function getAllProperties()
    {
        return Sale::with(['images', 'user'])
            ->orderByDesc('updated_at')
            ->paginate(6);
    }

}
