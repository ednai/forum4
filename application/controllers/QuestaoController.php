<?php
    class QuestaoController extends CI_Controller {
        
        public function index(){
            $parametros['questoes'] =  $this->Questao->get();
            $this->load->view('cabecalho');
            $this->load->view('questao/index',$parametros);
            $this->load->view('rodape');
        }

        public function novo(){
            $parametros['questoes'] = 'Nova Postagem';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/novo');
            $this->load->view('rodape');
        }
         public function salvar(){
            $postagem = $this->input->post();
            $this->Questao->inserir($questao);
            $this->session->set_flashdata('success', 'Questao cadastrada com sucesso!');
            redirect();
        }

        public function editar($Id){
            $parametros['questoes'] = 'Edição de Postagem';
            $parametros['questoes'] =  $this->Questao->get($Id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $questao= $this->input->post();
            $this->Questao->atualizar($questao);
            $this->session->set_flashdata('success', 'Questao atualizada com sucesso!');
            redirect();
        }
         public function excluir($Id){
            $this->Questao->deletar($Id);
            $this->session->set_flashdata('success', 'Questao excluída com sucesso!');
            redirect();
        }
    }