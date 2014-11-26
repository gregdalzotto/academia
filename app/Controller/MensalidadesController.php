<?php
App::uses('AppController', 'Controller');
/**
 * Mensalidades Controller
 *
 * @property Mensalidade $Mensalidade
 * @property PaginatorComponent $Paginator
 */
class MensalidadesController extends AppController {

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
		$this->Mensalidade->recursive = 0;
		$this->set('mensalidades', $this->Paginator->paginate());
                
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mensalidade->exists($id)) {
			throw new NotFoundException(__('Invalid mensalidade'));
		}
		$options = array('conditions' => array('Mensalidade.' . $this->Mensalidade->primaryKey => $id));
		$this->set('mensalidade', $this->Mensalidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mensalidade->create();
                        
                        if(strpos(',', $this->request->data['Mensalidade']['valor'])){
                        $valorsemponto = str_replace('.','',$this->request->data['Mensalidade']['valor']);
                    }else{
                        $valorsemponto = $this->request->data['Mensalidade']['valor'];
                    }
                    $valorsemvirgulacomponto = str_replace(',','.',$valorsemponto);
                    $this->request->data['Mensalidade']['valor'] = $valorsemvirgulacomponto;

                    if(strpos(',', $this->request->data['Mensalidade']['valor_pago'])){
                        $valorsemponto2 = str_replace('.','',$this->request->data['Mensalidade']['valor_pago']);
                    }else{
                        $valorsemponto2 = $this->request->data['Mensalidade']['valor_pago'];
                    }

                    $valorsemvirgulacomponto2 = str_replace(',','.',$valorsemponto2);
                    $this->request->data['Mensalidade']['valor_pago'] = $valorsemvirgulacomponto2;

                    $dataexplodida = explode('/',$this->request->data['Mensalidade']['data']);
                    $dataconvertida = $dataexplodida[2].'-'.$dataexplodida[1].'-'.$dataexplodida[0];
                    $this->request->data['Mensalidade']['data'] = $dataconvertida;
                    
                    
                    
			if ($this->Mensalidade->save($this->request->data)) {
				$this->Session->setFlash(
                            '<strong>Sucesso!</strong> Dados salvos.',
                            'default',
                            array('class' => 'alert alert-success'));
                            if($this->request->is(array('post'))){
                                return 1;
                            }
                            return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
                            '<strong>Ops!</strong> Não foi possível salvar as alterações. Tente novamente.',
                            'default',
                            array('class' => 'alert alert-danger'));
                                
			}
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mensalidade->exists($id)) {
			throw new NotFoundException(__('Mensalidade Inválida'));
		}
                //echo 'request: '.$this->request->is(array('post','put','json'));
                
		if ($this->request->is(array('post','put'))) {
                        
                    if(strpos(',', $this->request->data['Mensalidade']['valor'])){
                        $valorsemponto = str_replace('.','',$this->request->data['Mensalidade']['valor']);
                    }else{
                        $valorsemponto = $this->request->data['Mensalidade']['valor'];
                    }
                    $valorsemvirgulacomponto = str_replace(',','.',$valorsemponto);
                    $this->request->data['Mensalidade']['valor'] = $valorsemvirgulacomponto;

                    if(strpos(',', $this->request->data['Mensalidade']['valor_pago'])){
                        $valorsemponto2 = str_replace('.','',$this->request->data['Mensalidade']['valor_pago']);
                    }else{
                        $valorsemponto2 = $this->request->data['Mensalidade']['valor_pago'];
                    }

                    $valorsemvirgulacomponto2 = str_replace(',','.',$valorsemponto2);
                    $this->request->data['Mensalidade']['valor_pago'] = $valorsemvirgulacomponto2;

                    $dataexplodida = explode('/',$this->request->data['Mensalidade']['data']);
                    $dataconvertida = $dataexplodida[2].'-'.$dataexplodida[1].'-'.$dataexplodida[0];
                    $this->request->data['Mensalidade']['data'] = $dataconvertida;

                    if ($this->Mensalidade->save($this->request->data)) {
                            $this->Session->setFlash(
                            '<strong>Sucesso!</strong> Dados salvos.',
                            'default',
                            array('class' => 'alert alert-success'));
                            if($this->request->is(array('put'))){
                                return 1;
                            }
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(
                            '<strong>Ops!</strong> Não foi possível salvar as alterações. Tente novamente.',
                            'default',
                            array('class' => 'alert alert-danger'));
                    }
		} else {
			$options = array('conditions' => array('Mensalidade.' . $this->Mensalidade->primaryKey => $id));
			$this->request->data = $this->Mensalidade->find('first', $options);
		}
		$alunos = $this->Mensalidade->Aluno->find('list');
		$this->set(compact('alunos'));
	}
        
        

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mensalidade->id = $id;
		if (!$this->Mensalidade->exists()) {
			throw new NotFoundException(__('Invalid mensalidade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mensalidade->delete()) {
			$this->Session->setFlash(__('The mensalidade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mensalidade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
