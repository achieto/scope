<?php
class Signup
{
    private $error = "";

    public function create__userid()
    {
        $length = rand(4,19);
        $number = "";
        for ($i = 0; $i < $length; $i++) {
            $new__rand = rand(0,9);
            $number = $number . $new__rand;
        }

        return $number;
    }
}
