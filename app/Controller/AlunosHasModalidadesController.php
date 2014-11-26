<?php
App::uses('AppController', 'Controller');
/**
 * AlunosHasModalidades Controller
 *
 * @property AlunosHasModalidade $AlunosHasModalidade
 * @property PaginatorComponent $Paginator
 */
class AlunosHasModalidadesController extends AppController {

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
		$this->AlunosHasModalidade->recursive = 0;
		$this->set('alunosHasModalidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlunosHasModalidade->exists($id)) {
			throw new NotFoundException(__('Invalid alunos has modalidade'));
		}
		$options = array('conditions' => array('AlunosHasModalidade.' . $this->AlunosHasModalidade->primaryKey => $id));
		$this->set('alunosHasModalidade', $this->AlunosHasModalidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlunosHasModalidade->create();
			if ($this->AlunosHasModalidade->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos has modalidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos has modalidade could not be saved. Please, try again.'));
			}
		}
		$modalidades = $this->AlunosHasModalidade->Modalidade->find('list');
		$alunos = $this->AlunosHasModalidade->Aluno->find('list');
		$this->set(compact('modalidades', 'alunos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AlunosHasModalidade->exists($id)) {
			throw new NotFoundException(__('Invalid alunos has modalidade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AlunosHasModalidade->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos has modalidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos has modalidade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AlunosHasModalidade.' . $this->AlunosHasModalidade->primaryKey => $id));
			$this->request->data = $this->AlunosHasModalidade->find('first', $options);
		}
		$modalidades = $this->AlunosHasModalidade->Modalidade->find('list');
		$alunos = $this->AlunosHasModalidade->Aluno->find('list');
		$this->set(compact('modalidades', 'alunos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AlunosHasModalidade->id = $id;
		if (!$this->AlunosHasModalidade->exists()) {
			throw new NotFoundException(__('Invalid alunos has modalidade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AlunosHasModalidade->delete()) {
			$this->Session->setFlash(__('The alunos has modalidade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alunos has modalidade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
