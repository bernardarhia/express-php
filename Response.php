<?php

class Response
{
    private $_data = null;
    public function send($data)
    {
        $this->_data = $data;
        die(json_encode($this->_data));
    }

    public function json($data = [])
    {
        return json_encode($data);
    }
    public function status($code)
    {
        http_response_code($code);
        return $this;
    }
}