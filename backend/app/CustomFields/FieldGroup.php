<?php


namespace App\CustomFields;

class FieldGroup
{
    /**
     * @var [BaseField]
     */
    protected $fields = [];

    public function setFields($fields) {
        $this->fields = $fields;
    }

    public static function fromJson(string $json): FieldGroup {
        $generated = [];
        $decoded = json_decode($json, true);
        foreach ($decoded as $fieldJson) {
            $field = null;
            // Parse json to generate field
            $generated[] = $field;
        }
        $fieldGroup = new self();
        $fieldGroup->setFields($generated);
        return $fieldGroup;
    }

    public function toJson(): string {
        $output = '';
        foreach ($fields as $field) {

        }
    }
}
