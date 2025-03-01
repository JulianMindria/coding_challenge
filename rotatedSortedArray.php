<?php
class RotatedSortedArray {
    private $array;

    public function __construct($array){
        $this->array = $array;
    }

    public function search(int $target) : ?int {
        return $this->binarySearch(0, count($this->array) - 1, $target);
    }

    public function binarySearch(int $left, int $right, $target) : ?int {
        if ($left > $right){
            return null;
        }

        $mid = $left + (int)(($right-$left)/2);

        if ($this -> array[$mid] == $target) {
            return $mid;
        }

        if ($this->array[$left] <= $this->array[$mid]){
            if ($this->array[$left] <= $target && $target < $this->array[$mid]){
                return $this->binarySearch($left, $mid - 1, $target);
            } else{
                return $this->binarySearch($mid + 1, $right, $target);
            }
        }else {
            if ($this->array[$mid] < $target && $target <= $this->array[$right]){
                return $this->binarySearch($mid + 1, $right, $target);
            } else{
                return $this->binarySearch($left, $mid - 1, $target);
            }
        }
    }
}

$array = new RotatedSortedArray([13, 18, 25, 2, 8, 10]);
$target = 2;

var_dump($array->search($target));