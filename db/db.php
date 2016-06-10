<?php
if (!defined('APP_BASE_PATH')) define('APP_BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'common/config.php';
class db
{
    var $conn = null;
    static function &getInstance()
    {
        global $adb;

        if (!isset($adb)) {
            $adb = new self();
        }
        return $adb;
    }

    function open_connect()
    {
        $this->conn = new mysqli(config::db_host, config::db_user, config::db_pass,config::db_name);
        mysqli_set_charset($this->conn,'utf8');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function close_connect()
    {
        if (isset($this->conn)) {
            $this->conn->close();
        }
    }

    function query($sql,$is_insert = false)
    {
        $this->open_connect();
        $result = $this->conn->query($sql);
        if(!$result)
        {
            die("DB Error : " . $this->conn->error);
        }
        if($is_insert === true)
        {
            $result = $this->conn->insert_id;
        }
        $this->close_connect();
        return $result;
    }

    function query_with_params($sql,$params,$is_insert = false)
    {
        $this->open_connect();
        $query = $this->conn->prepare($sql);
        $result = null;

        //now we need to add
        $tmp = array();
        foreach($params as $key => $value) $tmp[$key] = &$params[$key];
        // now us the new array
        call_user_func_array(array($query, 'bind_param'), $tmp);
        $query->execute();
        $result = $query->get_result();
        if(!$result && isset($this->conn->error) && !empty($this->conn->error))
        {
            die("DB Error : " . $this->conn->error);
        }
        if($is_insert === true)
        {
            $result = $this->conn->insert_id;
        }
        $this->close_connect();
        return $result;
    }

    function num_rows($data)
    {
        return $data->num_rows;
    }

    function fetch_assoc($data)
    {
        $data = $data->fetch_assoc();
        $rs=[];
        foreach ($data as $key => $value) {
            $rs[strtolower($key)] = $value;
        }
        return $rs;
    }

    function  fetch_assoc_to_array($data)
    {
        $rows = array();
        while ($row = mysqli_fetch_assoc($data)) {
            $row_fech = [];
            foreach ($row as $key => $value) {
                $row_fech[strtolower($key)] = $value;
            }
            $rows[] = $row_fech;
        }
        return $rows;
    }

    function stripslashes($str)
    {
        return stripslashes($str);
    }
}
if(!isset($adb) ||  empty($adb)) {
    $adb = new db();
}
?>