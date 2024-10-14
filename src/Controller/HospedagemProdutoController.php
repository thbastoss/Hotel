<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * HospedagemProduto Controller
 *
 * @property \App\Model\Table\HospedagemProdutoTable $HospedagemProduto
 */
class HospedagemProdutoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->HospedagemProduto->find()
            ->contain(['Hospedagem', 'Produto']);
        $hospedagemProduto = $this->paginate($query);

        $this->set(compact('hospedagemProduto'));
    }

    /**
     * View method
     *
     * @param string|null $id Hospedagem Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospedagemProduto = $this->HospedagemProduto->get($id, contain: ['Hospedagem', 'Produto']);
        $this->set(compact('hospedagemProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospedagemProduto = $this->HospedagemProduto->newEmptyEntity();
        if ($this->request->is('post')) {
            $hospedagemProduto = $this->HospedagemProduto->patchEntity($hospedagemProduto, $this->request->getData());
            if ($this->HospedagemProduto->save($hospedagemProduto)) {
                $this->Flash->success(__('The hospedagem produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospedagem produto could not be saved. Please, try again.'));
        }
        $hospedagem = $this->HospedagemProduto->Hospedagem->find('list', limit: 200)->all();
        $produto = $this->HospedagemProduto->Produto->find('list', limit: 200)->all();
        $this->set(compact('hospedagemProduto', 'hospedagem', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospedagem Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospedagemProduto = $this->HospedagemProduto->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospedagemProduto = $this->HospedagemProduto->patchEntity($hospedagemProduto, $this->request->getData());
            if ($this->HospedagemProduto->save($hospedagemProduto)) {
                $this->Flash->success(__('The hospedagem produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospedagem produto could not be saved. Please, try again.'));
        }
        $hospedagem = $this->HospedagemProduto->Hospedagem->find('list', limit: 200)->all();
        $produto = $this->HospedagemProduto->Produto->find('list', limit: 200)->all();
        $this->set(compact('hospedagemProduto', 'hospedagem', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospedagem Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospedagemProduto = $this->HospedagemProduto->get($id);
        if ($this->HospedagemProduto->delete($hospedagemProduto)) {
            $this->Flash->success(__('The hospedagem produto has been deleted.'));
        } else {
            $this->Flash->error(__('The hospedagem produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
