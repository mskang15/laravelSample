<?php

class Contact extends Eloquent {
	public $table = 'contacts';
    protected $guarded = array('id', 'id');
	public $timestamps = false;
}