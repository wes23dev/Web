<?php
require_once("../model/ModelLivro.php");

class ListarLivroController {

  private $lista;

  public function __construct() {
    $this->lista = new LivroModel();
    $this->criarTabela();
  }

  private function criarTabela() {
    $row = $this->lista->getLivro();

    foreach ($row as $value) {
      echo "<tr>";
      echo "<th>".$value['nome'] ."</th>";
      echo "<td>".$value['autor'] ."</td>";
      echo "<td>".$value['quantidade'] ."</td>";
      echo "<td> R$ ".$value['preco'] ."</td>";
      echo "<td>".$value['data'] ."</td>";
      echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado" : "Ativado" ."</td>";
      echo "<td><a class='btn btn-warning' href='ViewEditarLivro.php?id=".$value['nome']."'> Editar </a><a class='btn btn-danger' href='../controller/ControllerDeletarLivro.php?id=".$value['nome']."'> Excluir </a></td>";
      echo "</tr>";
    }
  }
}
?>