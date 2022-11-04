<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserved
 *
 * @author USER
 */
class Reserved {
    //put your code here
    
                        private $pax;
                        private $tableNo;
                        private $date;
                        private $time;
                        
                        function __construct($pax,$tableNo,$date,$time) {
                            $this->pax=$pax;
                            $this->tableNo=$tableNo;
                            $this->date=$date;
                            $this->time=$time;
                        }
                        
                        function getPax(){return $this->pax;}
                        function getTableNo(){return $this->tableNo;}
                        function getDate(){return $this->date;}
                        function getTime(){return $this->time;}
                    
}
