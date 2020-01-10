<?php


namespace app\controllers\admin;


use app\models\AppModel;
use travel\libs\Pagination;
use travel\App;
use app\models\admin\Product;

class ProductController extends AppController {


    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('product' );
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $products = \R::getAll("SELECT p.id, name, p.title, tour_price as price 
                FROM product p
                  JOIN  city ON p.city_id = city.city_id
                  ORDER BY id DESC
                  LIMIT $start, $perpage");
        $this->setMeta('Список туров');
        $this->set(compact('products', 'pagination', 'count'));
    }

    public function addContentAction() {
        $product = new Product();
        if (!empty($_POST)) {
            $data = $_POST;
            $product->saveProgramContent($data['id'], $data['sub_title'], $data['sub_content']);
            $_SESSION['success'] = 'Контент добавлен';
            redirect(ADMIN . '/product');
        }

    }

    public function addPriceAction() {
        $product = new Product();
        if (!empty($_POST)) {
            $data = $_POST;
            $product->savePrice($data['id'], $data['title_price'], $data['single_price']);
            $_SESSION['success'] = 'Цена добавлена';
            redirect(ADMIN . '/product');

        }

    }

    public function deleteAction(){
        $product = \R::load('product', $_GET['id']);
        $gallery = \R::getAll('SELECT img FROM gallery WHERE product_id = ?', [$_GET['id']]);
        \R::trash($product);
        \R::exec("DELETE FROM price WHERE product_id = ?", [$_GET['id']]);
        \R::exec("DELETE FROM gallery WHERE product_id = ?", [$_GET['id']]);
        \R::exec("DELETE FROM tour_program_content WHERE product_id = ?", [$_GET['id']]);

        foreach ($gallery as $gal) {
            @unlink(WWW . "/images/".$gal['img']."");
        }
        @unlink(WWW . "/images/$product->img");

        $_SESSION['success'] = 'Заказ удален';
        redirect(ADMIN . '/product');

    }


    public function addImageAction(){
        if(isset($_GET['upload'])) {
            if($_POST['name'] == 'single') {
                $wmax = App::$app->getProperty('img_width');
                $hmax = App::$app->getProperty('img_height');
            }else if($_POST['name'] == 'multi'){
                $wmax = App::$app->getProperty('gallery_width');
                $hmax = App::$app->getProperty('gallery_height');
            }else{
                $wmax = App::$app->getProperty('img2_width');
                $hmax = App::$app->getProperty('img2_height');
            }
            $name = $_POST['name'];
            $product = new Product();
            $product->uploadImg($name, $wmax, $hmax);
        }
    }


    public function editAction(){
        $cities =\R::getAll('SELECT * FROM city');
        $seasons =\R::getAll('SELECT * FROM seasons');
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? '1' : '0';
            $product->attributes['hit'] = $product->attributes['hit'] ? '1' : '0';
            $img = \R::getAll('SELECT img FROM product WHERE id = ?', [$id]);
            $img2 = \R::getAll('SELECT img2 FROM product WHERE id = ?', [$id]);
            $product->getEditImg($img[0]['img']);
            $product->getEditImg2($img2[0]['img2']);

            if($product->update('product', $id)){
                $product->saveGallery($id);
                $alias = AppModel::createAlias('product', 'alias', $data['title'], $id);
                $product = \R::load('product', $id);
                $product->alias = $alias;
                \R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = \R::load('product', $id);
        $tour =\R::getAll('SELECT * FROM product WHERE id = ?', [$id]);
        $city =\R::getAll('SELECT * FROM city WHERE city_id = ?', [$tour[0]['city_id']]);
        $season =\R::getAll('SELECT * FROM seasons WHERE season_id = ?', [$tour[0]['season_id']]);
        $gallery = \R::getCol('SELECT img FROM gallery WHERE product_id = ?', [$id]);
        $this->setMeta("Редактирование товара {$product->title}");
        $this->set(compact('product', 'cities', 'city', 'season', 'seasons', 'gallery'));
    }


    public function addAction() {
        $cities =\R::getAll('SELECT * FROM city');
        $seasons =\R::getAll('SELECT * FROM seasons');

        if(!empty($_POST)) {
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? '1' : '0';
            $product->attributes['hit'] = $product->attributes['hit'] ? '1' : '0';
            $product->getImg();
            $product->getImg2();

            if ($id = $product->save('product')) {
                $product->saveGallery($id);
                $alias = AppModel::createAlias('product', 'alias', $data['title'], $id);
                $p = \R::load('product', $id);
                $p->alias = $alias;
                \R::store($p);
                $_SESSION['success'] = 'Товар добавлен';
            }
        }
        $this->set(compact('cities', 'seasons'));
        $this->setMeta('Новый товар');
    }


    public function deleteGalleryAction(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if(!$id || !$src){
            return;
        }
        if(\R::exec("DELETE FROM gallery WHERE product_id = ? AND img = ?", [$id, $src])){
            @unlink(WWW . "/images/$src");
            exit('1');
        }
        return;
    }
}