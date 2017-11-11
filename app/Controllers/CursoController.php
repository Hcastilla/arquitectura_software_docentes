<?php
namespace Controllers;

use Modules\View;
use Modules\Helpers\Redirect;
use Models\Curso;
use Models\Grupo;
use Models\Horario;

class CursoController{
  
  public function all()
  {
    $curso = new Curso();
    
    $data = array();

    $cursos = $curso->select("*", ['idDocente' => $_SESSION['user']['idUsuario']]);

    foreach ($cursos as $c) {
      $g = new Grupo();
      $c['horario'] = $h->get('*', ['idHorario' => $c['idHorario']]);
      array_push($data, $c);
    }

    echo json_encode(
      $data
    );

  }

}