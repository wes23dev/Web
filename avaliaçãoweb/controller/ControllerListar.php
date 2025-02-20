<?php
require_once("../model/banco.php");

class listarController {

  private $lista;

  public function __construct() {
    $this->lista = new Banco();
    $this->criarTabela();
  }

  private function criarTabela() {
    $row = $this->lista->getLivro();
    if(!$row){
      return;
    }
    foreach ($row as $value) {
      echo "<tr>";
      echo "<th>".$value['nome'] ."</th>";
      echo "<td>".$value['autor'] ."</td>";
      echo "<td>".$value['quantidade'] ."</td>";
      echo "<td> R$ ".$value['preco'] ."</td>";
      echo "<td>".$value['data'] ."</td>";
      echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado" : "Ativado" ."</td>";
      echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome']."'> Editar </a><button class='btn-excluir btn btn-danger' data-bs-target='#confirma_modal' data-bs-toggle= 'modal' data-id=".$value['nome'].">Excluir</button></td>";
      echo "</tr>";
    }
  }
}
?>