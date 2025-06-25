<?php

namespace App\Services;

use App\Models\Partner;

class PartnerService
{
    public function getAllPartners()
    {
        return Partner::orderBy('created_at', 'desc')->paginate(10);
    }

    public function createPartner(array $data)
    {
        return Partner::create($data);
    }

    public function getPartnerById($id)
    {
        return Partner::find($id);
    }

    public function updatePartner($id, array $data)
    {
        $partner = $this->getPartnerById($id);
        if ($partner) {
            $partner->update($data);
            return $partner;
        }
        return null;
    }

    public function deletePartner($id)
    {
        $partner = $this->getPartnerById($id);
        if ($partner) {
            return $partner->delete();
        }
        return false;
    }

}
