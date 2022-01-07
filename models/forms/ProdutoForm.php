<?php
namespace app\models\forms;
use yii\base\Model;



class ProdutoForm extends Model
{

    const PRODUTO_STATUS_ATIVO = true;
    const PRODUTO_STATUS_INATIVO = false;

    public $nome;
    public $descricao;
    public $preco;
    public $status;

}


