<?php
namespace App\Models;
use App\Models\Order;
use App\Traits\Balancing;
use App\Http\Interfaces\B;
class Report implements B{

    use Balancing;
    public function __construct(){
       dd('this is constructor');
    }


    const CONSTANT = 'constant value';
    public static $my_static = 'static var';

    public static function balanceQty(){
        return "balance quality";
    }
            public function callA(){

            }
            public function callC(){

            }

        }