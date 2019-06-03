<?php

namespace Cockpit\Controller;

class MoveBetweenCollections extends \Cockpit\AuthController {

    public function index() {}

    public function do_copy() { // TODO refactor

        $entry = $this->param('entry');
        $entry_id = $entry['_id'];
        $destination_collection = $this->param('destination_collection');
        $current_collection = $this->param('collection');

        unset($entry['_id']); // cause the entry being treated as fresh new one for the destination collection

        /*
         * insert entry into destination collection
         */
        $new_record=
            $this->module('collections')->save(
                $destination_collection,
                $entry
            );

        /*
         * remove from old collection
         */
        if($new_record) {
            $del =
                $this->module('collections')->remove(
                    $current_collection['name'],
                    [
                        '_id' => $entry_id
                    ]
                );
        }

        return json_encode([
            'success' => $new_record && $del
        ]);
    }

}
