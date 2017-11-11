<?php
  namespace Controllers;
  use Models\Usuario;  
  use Models\Curso;  
  use Models\Matricula; 
  use Models\Asignatura;  
  
  

  class EstudianteController
  {
    public function all()
    { 
      $u = new Usuario();
      $c = new Curso();
      $grupos = $c->select('*', ['idDocente'=>$_SESSION['user']['idUsuario']]);
      $data = [];

      foreach($grupos as $g)
      {
        $m = new Matricula();
        $a = new Asignatura();

        $m = $m->select(["[<]usuario"=>['idEstudiante'=>'idUsuario']],
        '*', ['idGrupo'=>$g['idGrupo']]);

        $a = $a->get('*', ['idAsignatura' => $g['idAsignatura'] ]);

        $g['estudiates'] = $m;
        $g['asignatura'] = $a;

        array_push($data, $g);
      }
      echo json_encode($data);
    } 
  }