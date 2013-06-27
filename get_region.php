<?php
/**
 * get_region.php($post_code)
 * @param type $post_code
 * @return string
 */
function get_region($post_code) {
    if ($post_code === '') {
        return "No post code entered.";
    } else {
        $post_region = -1;

        $post_code = strtoupper(str_replace(" ", "", $post_code));

        $post_code_array = str_split($post_code);

        $xml = simplexml_load_file("region_codes.xml");

        if (isset($post_code_array[1]) && is_numeric($post_code_array[1])) {
            $post_region = $post_code[0];
        } elseif (isset($post_code_array[2]) && is_numeric($post_code_array[2])) {
            $post_region = ($post_code[0] . $post_code[1]);
        }

        if ($post_region == -1) {
            return "Invalid postal code.";
        } else {
            foreach ($xml as $record) {
                if ($record->code == $post_region) {
                    return $record->region;
                }
            }
        }
    }
}
?>
