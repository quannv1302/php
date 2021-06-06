<?php
require_once 'BaseModel.php';
require_once 'Category.php';

class Product extends BaseModel
{
    public $tableName = 'products';

	public $columns = ['name', 'cate_id', 'color', 'price'];

    public function getCateName(){
		$cate = Category::find($this->cate_id);
		return $cate->name;
	}
}


?>