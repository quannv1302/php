<?php
require_once './models/Product.php';
require_once './models/Category.php';

const  BASE_URL = 'http://loaclhost/php/mvc';

class ProductController{
    public function index()
    {
        $products = Product::all();
        include_once './views/admin/product/index.php';
    }

    public function add()
    {
        $cates = Category::all();
        include_once './views/admin/product/add.php';
    }
    // mic oong tat a
    public function saveAdd()
    {   
        $name = $_POST['name'];
        $cate_id = $_POST['cate_id'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        //validate
        $errors = "";
        if($name == "" ){
            $errors .= "&name-err=Tên sp không được để trống";
        }

        if(strlen($errors) > 0){
            header('location: http://localhost/php/mvc/index.php?r=admin/add-product');
            die;
        }        

        $model = new Product();
        $model->name = $name;
        $model->cate_id = $cate_id;
        $model->color = $color;
        $model->price = $price;

        $model = $model->insert();
        if(!$model){
            echo "<h1>Thêm mới thất bại</h1>";
            die;
        }
        header('location: index.php?r=product');
    }

    public function remove()
    {
        $id = $_GET['id'];

        $post = Product::find($id);
        if(!$post){
            echo "<h1>Bài viết không tồn tại</h1>";
            die;
        }
        $post->delete();
        header('location: index.php?r=product');
    }

    public function update()
    {
        $id = $_GET['id'];
        $product = Product::find($id);
        if(!$product){
            echo "<h1>Sản phẩm ko tồn tại</h1>";die;
        }
        $cates = Category::all();
        include_once './views/admin/product/update.php';
    }

    public function saveUpdate()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $cate_id = $_POST['cate_id'];
        $color = $_POST['color'];
        $price = $_POST['price'];

        $model = Product::find($id);
        if(!$model){
            echo "<h1>Không tồn tại thông tin</h1>";die;
        }

        $model->name = $name;
        $model->cate_id = $cate_id;
        $model->color = $color;
        $model->price = $price;

        $model->update();

        header('location: index.php?r=product');
    }

    public function search()
    {
        $keyword = $_POST['keyword'];
        $productFilter = Product::where(['name','like',"%$keyword%"])->get();
        // var_dump($product);die;
        include_once './views/admin/product/index.php';
    }
}


?>