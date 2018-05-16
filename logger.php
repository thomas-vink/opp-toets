<?php
class log{

public $type;
public $datum;
public $message;

    public function __construct($severity,$date,$message) {
        $this->type=$severity;
        $this->datum = $date;
        $this->message = $message;

    }
    public function log(){
      if ($severity == 'info'){
          file_put_contents('./all_'.date("Y-n-j").'.txt', $message, FILE_APPEND);
      }
      else {
        file_put_contents('./all_test.txt', $message, FILE_APPEND);
        file_put_contents('./error_'.date("Y-n-j").'.txt', $message, FILE_APPEND);
      }


    }

}
