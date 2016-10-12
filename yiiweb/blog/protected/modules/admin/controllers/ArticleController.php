<?php


class ArticleController extends Controller{
    
    public function actionArticle(){
        $articleModel = Article::model();


        $criteria = new CDbCriteria();  
        $criteria->order = 'id desc';      
        $count = $articleModel->count($criteria);

        $pager = new CPagination($count);  
        $pager->pageSize = 2;           
        $pager->applyLimit($criteria); 
        
        
        $sql = "select * from article";
        $articleInfo = $articleModel->findAll($criteria);
        $tagsSql = "select * from category";
        $categoryInfo = Category::model()->findAllBySql($tagsSql);
        $this->render("article", array("pages"=>$pager, "articleInfo"=>$articleInfo, 'categoryInfo'=>$categoryInfo));
    }

    
    /**
    *添加文章
    *
    **/
    public function actionadd_article(){
        
        $articleModel = new Article();
        $category = Category::model();

        $categoryInfo = $category->findAllBySql("select * from category");
        $cateArr[] = "请选择";
        foreach ($categoryInfo as $key => $value) {
            $cateArr[$value->cid] = $value->name;
        }
        $data = array(
            'articleModel' => $articleModel,
            'cateArr'      => $cateArr
        );
        if(isset($_POST['Article'])){
            //print_r($_POST);
            $articleModel->attributes = $_POST['Article'];
            $articleModel->addtime = time();
            if($articleModel->save()){
                $this->redirect(array("article"));
            }
        }

        $this->render("add_article", $data);

    }

    /**
    *修改文章
    *
    **/
    public function actionUpdate_article($id){
        $articleModel = Article::model();
        $category = Category::model();

        $articleInfo = $articleModel->findByPk($id);

        $categoryInfo = $category->findAllBySql("select * from category");
        $cateArr[] = "请选择";
        foreach ($categoryInfo as $key => $value) {
            $cateArr[$value->cid] = $value->name;
        }

        if(isset($_POST['Article'])){
             $articleInfo->attributes = $_POST['Article'];
             if($articleInfo->save()){
                    $this->redirect(array('article'));
             }
        }

        $this->render("update_article", array('articleModel'=>$articleInfo, 'cateArr'=>$cateArr));
    }


    /**
    *删除文章
    *
    **/
    public function actiondel($id){
         
        if(Article::model()->deleteByPk($id)){
             $this->redirect(array('article'));
        }

    }



}