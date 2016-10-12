<?php

class CategoryController extends Controller{


    /**
    *栏目添加与显示
    *
    */
    public function actionCategory(){
          
          $categoryModel = new Category();

          $sql = "select * from category";
          $categoryInfo = $categoryModel->findAllBySql($sql);
          

          if(isset($_POST['Category'])){
          	  
              $categoryModel->attributes = $_POST['Category'];

              if($categoryModel->save()){
                  $this->redirect(array("category"));
              }
          }
    	  $this->render("category", array('categoryModel'=>$categoryModel, 'categoryInfo'=>$categoryInfo));

    }


    /*
    *栏目修改
    **/
    public function actionUpdate_category($id){
          
          $categoryModel = Category::model();

              $categoryInfo = $categoryModel->findByPk($id);

              if(isset($_POST['Category'])){
                    //这里做覆盖的操作，覆盖以前的数据
                    $categoryInfo->attributes = $_POST['Category'];
                    //修改数据
                    if($categoryInfo->save()){
                         $this->redirect(array('category'));

                    }
              }
          $this->render("update_category", array('categoryModel'=>$categoryInfo));

    }

    /**
    *删除栏目
    *
    **/
    public function actiondel($id){
          
         $categoryModel = Article::model();
         
         $sql = "select * from article where pid=".$id;
         $categoryInfo = $categoryModel->findBySql($sql);

         if(is_object($categoryInfo)){
              
         }else{
         	if(Category::model()->deleteByPk($id)){
         		 $this->redirect(array('category'));
         	}
         }
        
    }

}




