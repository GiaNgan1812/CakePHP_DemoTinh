<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class DemoController extends AppController
{
    private $demoTable;

    public function initialize(): void
    {
        parent::initialize();
        $this->demoTable = TableRegistry::getTableLocator()->get('Demo');
    }

    public function index()
    {
        $demos = $this->demoTable->getAll();
        $this->set(compact('demos'));
    }

    public function view($id = null)
    {
        $post = $this->demoTable->getItemById($id);

        if (!$post) {
            $this->Flash->error(__('Bài viết không tồn tại.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->set(compact('post'));
    }
}
