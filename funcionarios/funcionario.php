<?php
class Funcionario
{
    private $funcionarios;

    public function __construct() //dois underlines, quando já queremos fazer algo quando inicia o objeto, por exemplo a carga inicial de um SQL, após isso deve-se criar um outro objeto para alterações como um insert por exemplo: $funcionario2 = new Funcionario
    {
        $this->funcionarios = [
            ['id' => '123', 'cpf'=> '12345678999', 'nome' => "João"],
            ['id' => '321', 'cpf'=> '98765432111', 'nome' => 'Pedro']
        ];
    }
    public function all()
    {
        return $this-> funcionarios;
    }  
    public function find($cpf)
    {
        foreach($this->funcionarios as $func){
            //if($func['id']== $id){
                if($func['cpf']== $cpf){
                return $func;
            }
        }
        return null;
    }
    
}
?>