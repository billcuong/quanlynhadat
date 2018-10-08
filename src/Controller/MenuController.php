<?php
namespace App\Controller;
class MenuController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->layout = 'layout';
    }
    
    public function index()
    {
        $menu = $this->paginate($this->Menu);

        $this->set(compact('menu'));
    }
    

    public function view($id = null)
    {
        $menu = $this->Menu->get($id, [
            'contain' => []
        ]);

        $this->set('menu', $menu);
        
    }

    public function add()
    {
        $menu = $this->Menu->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    public function edit($id = null)
    {
        $menu = $this->Menu->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menu->get($id);
        if ($this->Menu->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
}
