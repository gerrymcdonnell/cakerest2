<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Answersquestions Controller
 *
 * @property \App\Model\Table\AnswersquestionsTable $Answersquestions
 *
 * @method \App\Model\Entity\Answersquestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnswersquestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Users']
        ];
        $answersquestions = $this->paginate($this->Answersquestions);

        $this->set([
		'answersquestions'=>$answersquestions,
		'_serialize'=>['answersquestions']
		]);
    }
	
	/*
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set([
		'users'=>$users,
		'_serialize'=>['users']	]);	
    }
	*/

    /**
     * View method
     *
     * @param string|null $id Answersquestion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answersquestion = $this->Answersquestions->get($id, [
            'contain' => ['Questions', 'Users']
        ]);

        $this->set('answersquestion', $answersquestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $answersquestion = $this->Answersquestions->newEntity();
        if ($this->request->is('post')) {
            $answersquestion = $this->Answersquestions->patchEntity($answersquestion, $this->request->getData());
            if ($this->Answersquestions->save($answersquestion)) {
                $this->Flash->success(__('The answersquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answersquestion could not be saved. Please, try again.'));
        }
        $questions = $this->Answersquestions->Questions->find('list', ['limit' => 200]);
        $users = $this->Answersquestions->Users->find('list', ['limit' => 200]);
        $this->set(compact('answersquestion', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Answersquestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $answersquestion = $this->Answersquestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answersquestion = $this->Answersquestions->patchEntity($answersquestion, $this->request->getData());
            if ($this->Answersquestions->save($answersquestion)) {
                $this->Flash->success(__('The answersquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answersquestion could not be saved. Please, try again.'));
        }
        $questions = $this->Answersquestions->Questions->find('list', ['limit' => 200]);
        $users = $this->Answersquestions->Users->find('list', ['limit' => 200]);
        $this->set(compact('answersquestion', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Answersquestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answersquestion = $this->Answersquestions->get($id);
        if ($this->Answersquestions->delete($answersquestion)) {
            $this->Flash->success(__('The answersquestion has been deleted.'));
        } else {
            $this->Flash->error(__('The answersquestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
