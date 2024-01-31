<?php

  class EventPage extends Page {
    public function eventStateInTime(): string {

      $t = date("d-m-Y"); 
      $today = new DateTime($t);
      
      if (!($this->starting_date()->isEmpty()) && !($this->ending_date()->isEmpty()) ):
          
        $s = $this->starting_date()->toDate('d-m-Y');
        $startD = new DateTime($s);
        $e = $this->ending_date()->toDate('d-m-Y'); 
        $endD = new DateTime($e);

        if ($startD < $today && $today < $endD):
          return 'ongoing';
        elseif ($startD > $today):
          return 'future';
        elseif ($startD < $today):
          return 'ended';
        endif;

      else:
        return 'permanent';
      endif;
    }
  }

?>