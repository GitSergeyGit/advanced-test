<?php
class PropertyTest
{
    private $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __toString(){
        return 'string';
    }
}

$obj = new PropertyTest();
echo $obj;
var_dump($obj);

//$obj->set('cound', 101);
////$obj->count = 101;
////echo $obj->count . "\n\n";
//echo $obj->get('name') . "\n\n";
//
//var_dump(isset($obj->a));
//unset($obj->a);
//var_dump(isset($obj->a));
//echo "\n";
//
