<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id, $qty){		
		$number = 0;						
		if($item->promotion  == 0){							
			$giohang = ['qty'=>$number, 'price' => $item->unit_price, 'item' => $item];						
			if($this->items){						
				if(array_key_exists($id, $this->items)){					
					$giohang = $this->items[$id];				
				}					
			}						
			$giohang['qty'] = $giohang['qty'] + $qty;						
			$giohang['price'] = $item->unit_price * $giohang['qty'];
			$this->items[$id] = $giohang;						
			$this->totalQty = $this->totalQty + $qty;						
			$this->totalPrice += $item->unit_price*$giohang['qty'];						
		}							
		else{							
			$giohang = ['qty'=>$number, 'price' => $item->promotion_price, 'item' => $item];						
			if($this->items){						
				if(array_key_exists($id, $this->items)){					
					$giohang = $this->items[$id];				
				}					
			}						
			$giohang['qty'] = $giohang['qty'] + $qty;						
			$giohang['price'] = $item->promotion_price * $giohang['qty'];						
			$this->items[$id] = $giohang;						
			$this->totalQty = $this->totalQty + $qty;						
			$this->totalPrice += $item->promotion_price*$giohang['qty'];						
		}							

	}	

}
