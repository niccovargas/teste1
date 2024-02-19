<?php
	class pessoa{
		private $nome;
        private $estado;
        private $cidade;
		private $email;
        private $confirmaemail;
		private $telefone;
		private $modalidade;
        private $cpf;
        private $msg;
        private $senha;
		private $assunto;

		public function getnome(){
			return $this->nome;
		}
		public function getassunto(){
			return $this->assunto;
		}
        public function getcidade(){
			return $this->cidade;
		}
        public function getcpf(){
			return $this->cpf;
		}
        public function getmsg(){
			return $this->msg;
		}
		public function getemail(){
			return $this->email;
		}
		public function gettelefone(){
			return $this->telefone;
		}
		public function getmodalidade(){
			return $this->modalidade;
		}
		public function getestado(){
			return $this->estado;
		}
        public function getconfirmaemail(){
			return $this->confirmaemail;
		}
        public function getsenha(){
			return $this->senha;
		}

		public function setnome($nome){
			$this->nome = $nome;
		}
		public function setassunto($assunto){
			$this->assunto = $assunto;
		}
		public function setemail($email){
			$this->email = $email;
		}
		public function settelefone($telefone){
			$this->telefone = $telefone;
		}
		public function setmodalidade($modalidade){
			$this->modalidade = $modalidade;
		}
		public function setestado($estado){
			$this->estado = $estado;
		}
        public function setcidade($cidade){
			$this->cidade = $cidade;
		}
        public function setcpf($cpf){
			$this->cpf = $cpf;
		}
        public function setmsg($msg){
			$this->msg = $msg;
		}
		public function setconfirmaemail($confirmaemail){
			$this->confirmaemail = $confirmaemail;
		}
        public function setsenha($senha){
			$this->senha = $senha;
		}
		
	}

?>