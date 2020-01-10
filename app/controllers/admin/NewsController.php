<?php


namespace app\controllers\admin;


use app\models\admin\News;
use app\models\admin\Product;
use app\models\AppModel;
use travel\App;
use travel\libs\Pagination;

class NewsController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('news' );
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $news = \R::getAll("SELECT *
                FROM news
                ORDER BY id DESC
                  LIMIT $start, $perpage");
        $this->setMeta('Список постов');
        $this->set(compact('news', 'pagination', 'count'));
    }

    public function deleteAction(){
        $news = \R::load('news', $_GET['id']);
        \R::trash($news);
        $_SESSION['success'] = 'Пост удален';
        redirect(ADMIN . '/news');

    }

    public function addImageAction(){
        if(isset($_GET['upload'])) {
            if($_POST['name'] == 'single') {
                $wmax = App::$app->getProperty('img_width');
                $hmax = App::$app->getProperty('img_height');
            } else{
                $wmax = App::$app->getProperty('img2_width');
                $hmax = App::$app->getProperty('img2_height');
            }
            $name = $_POST['name'];
            $news = new News();
            $news->uploadImg($name, $wmax, $hmax);
        }
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $news = new News();
            $data = $_POST;
            $news->load($data);
            $img = \R::getAll('SELECT img FROM news WHERE id = ?', [$id]);
            $img2 = \R::getAll('SELECT img2 FROM news WHERE id = ?', [$id]);
            $news->getEditImg($img[0]['img']);
            $news->getEditImg2($img2[0]['img2']);;

            if($news->update('news', $id)){
                $alias = AppModel::createAlias('news', 'alias', $data['title'], $id);
                $n = \R::load('news', $id);
                $n->alias = $alias;
                \R::store($n);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $news = \R::load('news', $id);
        $this->setMeta("Редактирование товара {$news->title}");
        $this->set(compact('news'));
    }


    public function addAction() {

        if(!empty($_POST)) {
            $news = new News();
            $data = $_POST;
            $news->load($data);
            $news->getImg();
            $news->getImg2();

            if ($id = $news->save('news')) {
                $alias = AppModel::createAlias('news', 'alias', $data['title'], $id);
                $p = \R::load('news', $id);
                $p->alias = $alias;
                $p->date = date('Y-m-d');
                \R::store($p);
                $_SESSION['success'] = 'Пост добавлен';
            }
        }

        $this->setMeta('Новый товар');
    }

}