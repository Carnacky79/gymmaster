<?php

trait Database
{
    private function connect()
    {
        $string = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        return new PDO($string, DBUSER, DBPASS);
    }

    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($result) && count($result)) return $result;
            else return $con->lastInsertId();

        }
        return false;
    }

    public function get_row($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($result) && count($result)) return $result[0];
        }
        return false;
    }
}


