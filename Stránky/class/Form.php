<?php

class Form {

    public function startForm($action = '#', $method = 'post', $id = NULL, $attr_ar = array()) {
        $str = "<form action=\"$action\" method=\"$method\"";
        if (isset($id)) {
            $str .= " id=\"$id\"";
        }
        $str .= $attr_ar ? $this->addAttributes($attr_ar) . '>' : '>';
        return $str;
    }

    private function addAttributes($attr_ar) {
        $str = '';
        $min_atts = array('checked', 'disabled', 'readonly', 'multiple');
        foreach ($attr_ar as $key => $val) {
            if (in_array($key, $min_atts)) {
                if (!empty($val)) {
                    $str .= " $key=\"$key\"";
                }
            } else {
                $str .= " $key=\"$val\"";
            }
        }
        return $str;
    }

    public function addInput($type, $name, $value, $attr_ar = array()) {
        $str = "<input type=\"$type\" name=\"$name\" value=\"$value\"";
        if ($attr_ar) {
            $str .= $this->addAttributes($attr_ar);
        }
        $str .= ' />';
        return $str;
    }

    public function addTextarea($name, $value = '', $attr_ar = array()) {
        $str = "<textarea name=\"$name\"";
        if ($attr_ar) {
            $str .= $this->addAttributes($attr_ar);
        }
        $str .= ">$value</textarea>";
        return $str;
    }

    public function addLabel($text, $attr_ar = array()) {
        $str = "<label ";
        if ($attr_ar) {
            $str .= $this->addAttributes($attr_ar);
        }
        $str .= ">$text</label>";
        return $str;
    }

    public function addSelect( $value , $attr_ar = array()) {
        $str = "<select ";
        if ($attr_ar) {
            $str .= $this->addAttributes($attr_ar);
        }
        $str .= ">";
        foreach ($value as $option){
            $str .= "<option value=\"$option\">\"$option\"</option>";
        }



        $str.="</select>";
        return $str;
    }

    public function endForm() {
        return "</form>";
    }

}

?>
