<?php
namespace Controllers;

use Modules\View;
use Modules\Helpers\Redirect;
use Models\Curso;
use Models\Grupo;
use Models\Horario;
use Models\Clase;
use Models\Asignatura;

class ClaseController{
  
  public function all()
  {
    $clase = new Clase();

    $data = [];

    $clases = $clase->select(
      [
        "[>]curso" => ["idCurso" => "idCurso"],
        
      ], '*', ['idDocente'=>$_SESSION['user']['idUsuario']]);

      foreach ($clases as $c ) {
        $g = new Grupo();
        $a = new Asignatura();
        $g = $g->get('*', ['idGrupo' => $c['idGrupo']]);
        $a = $a->get('*', ['idAsignatura' => $c['idAsignatura']]);
        $c['grupo'] = $g;
        $c['asignatura'] = $a;
        array_push($data, $c);
      }

      echo json_encode($data);
  }
}