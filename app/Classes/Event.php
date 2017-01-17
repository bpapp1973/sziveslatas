<?php

namespace App\Classes;

use App\Models\Orders;
use App\Models\Ads;
use App\Models\Companies;

class Event
{
    // property declaration
	public $id;
	public $title;
	public $allDay;
	public $start;
	public $end;
	public $url;
	public $className;
	public $editable;
	public $startEditable;
	public $durationEditable;
	public $resourceEditable;
	public $rendering;
	public $overlap;
	public $constraint;
	public $source;
	public $color;
	public $backgroundColor;
	public $borderColor;
	public $textColor;

    // method declaration
    public function __construct(Orders $order)
    {
    	$ad = $order->ad;
    	$user = $order->user;
    	$this->title = $ad->title;
    	if ($ad->category->parent_id==1 || $ad->category->parent_id==4) {
			$date=date_create($order->startdate);
	    	$this->start = date_format($date,"Y-m-d");

			$date=date_create($order->enddate);
	    	$this->end = date_format($date,"Y-m-d");
    	} else {
	    	$this->start = $order->startdate;
	    	$this->end = $order->enddate;
    	}
    	$this->url = 'orders/'.$order->id;
    }
}
?>