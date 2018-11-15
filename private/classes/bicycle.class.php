<?php

class Bicycle{
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
    public const GENDER = ['mens', 'womens', 'unisex'];
    
    protected const CONDITION_OPTIONS = [
        1 => 'Beat Up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
    ];
    
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $grnder;
    public $price;
    protected $weight_kg;
    protected $condition_id;
    
    public function __construct($args=[]){
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 3;
        $this->condition_id = $args['condition_id'] ?? 3;
    }
    
    public function weight_kg(){
        return number_format($this->weight_kg, 2) . ' kg';
    }
    public function set_weight_kg($mass){
        $this->weight_kg = $mass;
    }
    public function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.2;
        return number_format($weight_lbs, 2) . ' lbs';
    }
    public function set_weight_lbs($mass){
        $this->weight_kg = floatval($mass) / 2.2;
    }
    public function condition(){
        if($this->condition_id>0)
            return self::CONDITION_OPTIONS[$this->condition_id];
        else
            return 'Unknown';
    }
}