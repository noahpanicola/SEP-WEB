<?php

class Error {

    public $timestamp = '';
    public $status = 0;
    public $error = '';
    public $message = '';
    public $path = '';

    function __construct($status, $error, $message, $path) {
        $this->timestamp = date("D M d, Y G:i");
        $this->status = $status;
        $this->error = $error;
        $this->message = $message;
        $this->path = $path;
    }

    function toString() {
        return '{' .
                    '"timestamp": "' . $this->timestamp . '",' .
                    '"status": '. $this->status . ',' .
                    '"error": "' . $this->error . '",' .
                    '"message": "' . $this->message  .'",' .
                    '"path": "' . $this->path . '"' .
                '}';
    }
}