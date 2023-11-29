<?php
namespace App\Controller;
use Cake\Event\EventInterface;
class BlogsController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout("blog");
    }
    public function home(){
       $this->loadModel('articles');
      
         $articles = $this->articles->find('all')->order(['articles.id DESC']);
         $this->set('articles',$this->paginate($articles,['limit' =>'3']));
         $articlesList = $this->articles->find('list')->order(['articles.id DESC'])
                                                      ->limit(6);
        $this->set('articlesList',$articlesList);
        
        
    }
    public function about(){
        
    }
    public function contact(){
        
    }
    public function view($id){
        $this->loadModel('articles');
        $article= $this->articles->get($id);
        $this->set('article',$article);
    }
}

?>