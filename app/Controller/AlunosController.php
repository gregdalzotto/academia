<?php
App::uses('AppController', 'Controller');
/**
 * Alunos Controller
 *
 * @property Aluno $Aluno
 * @property PaginatorComponent $Paginator
 */
class AlunosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aluno->recursive = 0;
		//$this->set('alunos', $this->Paginator->paginate());
                $this->set('alunos', $this->Aluno->find('all',array('order'=>'Aluno.nome')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aluno->exists($id)) {
			throw new NotFoundException(__('Aluno Não encontrado'));
		}
		$options = array('conditions' => array('Aluno.' . $this->Aluno->primaryKey => $id));
		$this->set('aluno', $this->Aluno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
				//$this->Session->setFlash(__('Aluno criado com sucesso.'));
                                $this->Session->setFlash(
                                '<strong>Sucesso!</strong> Aluno criado.',
                                'default',
                                array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
                                '<strong>Ops!</strong> Não foi possível cadastrar. Tente novamente.',
                                'default',
                                array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aluno->exists($id)) {
			throw new NotFoundException(__('Esse aluno não existe.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(
                                '<strong>Sucesso!</strong> Dados salvos.',
                                'default',
                                array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
                                '<strong>Ops!</strong> Não foi possível salvar as alterações. Tente novamente.',
                                'default',
                                array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Aluno.' . $this->Aluno->primaryKey => $id));
                        //$options = array('order'=>'Mensalidade.data');
			$this->request->data = $this->Aluno->find('first', $options);
                        rsort($this->request->data['Mensalidade']);
                        
                                           
		}
                
               

                $this->set('aluno',array($this->request->data));
                //$this->render('add');  
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Aluno->delete()) {
			$this->Session->setFlash(__('The aluno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aluno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
