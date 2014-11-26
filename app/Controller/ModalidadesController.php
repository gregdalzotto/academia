<?php
App::uses('AppController', 'Controller');
/**
 * Modalidades Controller
 *
 * @property Modalidade $Modalidade
 * @property PaginatorComponent $Paginator
 */
class ModalidadesController extends AppController {

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
		$this->Modalidade->recursive = 0;
		$this->set('modalidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modalidade->exists($id)) {
			throw new NotFoundException(__('Invalid modalidade'));
		}
		$options = array('conditions' => array('Modalidade.' . $this->Modalidade->primaryKey => $id));
		$this->set('modalidade', $this->Modalidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modalidade->create();
			if ($this->Modalidade->save($this->request->data)) {
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
		if (!$this->Modalidade->exists($id)) {
			throw new NotFoundException(__('Modalidade Inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Modalidade->save($this->request->data)) {
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
			$options = array('conditions' => array('Modalidade.' . $this->Modalidade->primaryKey => $id));
			$this->request->data = $this->Modalidade->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Modalidade->id = $id;
		if (!$this->Modalidade->exists()) {
			throw new NotFoundException(__('Invalid modalidade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Modalidade->delete()) {
			$this->Session->setFlash(
                                '<strong>Sucesso!</strong> Modalidade excluída.',
                                'default',
                                array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('Erro ao excluir. Tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
