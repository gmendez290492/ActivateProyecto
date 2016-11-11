<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Caminatas Controller
 *
 * @property \App\Model\Table\CaminatasTable $Caminatas
 */
class CaminatasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $caminatas = $this->paginate($this->Caminatas);

        $this->set(compact('caminatas'));
        $this->set('_serialize', ['caminatas']);
    }

    /**
     * View method
     *
     * @param string|null $id Caminata id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caminata = $this->Caminatas->get($id, [
            'contain' => []
        ]);

        $this->set('caminata', $caminata);
        $this->set('_serialize', ['caminata']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caminata = $this->Caminatas->newEntity();
        if ($this->request->is('post')) {
            $caminata = $this->Caminatas->patchEntity($caminata, $this->request->data);
            if ($this->Caminatas->save($caminata)) {
                $this->Flash->success(__('The caminata has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The caminata could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('caminata'));
        $this->set('_serialize', ['caminata']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Caminata id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caminata = $this->Caminatas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caminata = $this->Caminatas->patchEntity($caminata, $this->request->data);
            if ($this->Caminatas->save($caminata)) {
                $this->Flash->success(__('The caminata has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The caminata could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('caminata'));
        $this->set('_serialize', ['caminata']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Caminata id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caminata = $this->Caminatas->get($id);
        if ($this->Caminatas->delete($caminata)) {
            $this->Flash->success(__('The caminata has been deleted.'));
        } else {
            $this->Flash->error(__('The caminata could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function totalPasos(){
        
    }
}
