<?php

/*
 * Import Driver for type: datetime
 */
require_once(dirname(__FILE__)."/ImportDriver_default.php");

class ImportDriver_datetime extends ImportDriver_default{

    /**
     * Constructor
     * @return void
     */
    public function ImportDriver_datetime()
    {
        $this->type = 'datetime';
    }

    /**
     * Process the data so it can be imported into the entry.
     * @param  $value   The value to import
     * @param  $entry_id    If a duplicate is found, an entry ID will be provided.
     * @return The data returned by the field object
     */
    public function import($value, $entry_id = null)
    {
        $message = '';
        $data = $this->field->processRawFieldData(trim($value), $this->field->__OK__, $message, false, $entry_id);
        return $data;
    }

    /**
     * Process the data so it can be exported to a CSV
     * @param  $data    The data as provided by the entry
     * @param  $entry_id    The ID of the entry that is exported
     * @return string   A string representation of the data to import into the CSV file
     */
    public function export($data, $entry_id = null)
    {
        return trim($data['start']);
    }

}
