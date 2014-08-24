<?php
namespace Pwnraid\Bnet\Warcraft\Items;

use Pwnraid\Bnet\Core\AbstractRequest;

class ItemRequest extends AbstractRequest
{
    public function find($itemId)
    {
        $data = $this->client->get('item/'.$itemId);

        if ($data === null) {
            return null;
        }

        return new ItemEntity($data);
    }

    public function findSet($setId)
    {
        $data = $this->client->get('item/set/'.$setId);

        if ($data === null) {
            return null;
        }

        return new ItemSetEntity($data);
    }
}
