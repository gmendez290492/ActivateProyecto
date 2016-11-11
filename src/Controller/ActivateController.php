<?php
namespace App\Controller;

use App\Controller\AppController;

class ActivateController extends AppController
{
	public function index(){
	}


	public function ganadorDia(){
		$fecha=$this->request->data["date"];
		$porciones = explode("-", $fecha);
		$year=$porciones[0];
		$month=$porciones[1];
		$day=intval($porciones[2]);
		$this->loadModel("Usuarios");
		$this->loadModel("Caminatas");
		$usuarios=$this->Usuarios->find('all');		
		$mayores=array();
		$usersId=array();
		$contador=0;
		foreach ($usuarios as $usr) {
			$aux=$this->Caminatas->find('all')->where(['idusuario =' => $usr->id,'mes ='=>$month,'dia ='=>$day,'year ='=>$year]);
			$suma=$aux->sumOf('pasos');			
			$mayores[$contador]=$suma;
			$usersId[$contador]=$usr->id;
			$contador++;
		}				
		$clave = array_search(max($mayores), $mayores);
		$ganador= $this->Usuarios->find('all')->where(['id =' => $usersId[$clave]]);
		$cantidadMayor= $mayores[$clave];
		$this->set(compact('usuarios','ganador','cantidadMayor','day','month','year'));
		

	}



	public function ganadorMes(){
		$mes=$this->request->data["Mes"];
		$this->loadModel("Usuarios");
		$this->loadModel("Caminatas");
		$usuarios=$this->Usuarios->find('all');		
		$mayores=array();
		$usersId=array();
		$contador=0;
		foreach ($usuarios as $usr) {
			$aux=$this->Caminatas->find('all')->where(['idusuario =' => $usr->id,'mes ='=>$mes]);
			$suma=$aux->sumOf('pasos');			
			$mayores[$contador]=$suma;
			$usersId[$contador]=$usr->id;
			$contador++;
		}				
		$clave = array_search(max($mayores), $mayores);
		$ganador= $this->Usuarios->find('all')->where(['id =' => $usersId[$clave]]);		
		$cantidadMayor= $mayores[$clave];
		$this->set(compact('usuarios','ganador','cantidadMayor'));
	}

	public function caminataMes(){
		$mes=$this->request->data["Mes2"];
		$idCumplidoPrimeraSemana=array();
		$idCumplidoPrimeraSemana=$this->validarSemana($mes,1);
		$idCumplidoSegundaSemana=array();
		$idCumplidoSegundaSemana=$this->validarSemana($mes,2);
		$idCumplidoTerceraSemana=array();
		$idCumplidoTerceraSemana=$this->validarSemana($mes,3);
		$idCumplidoCuartaSemana=array();
		$idCumplidoCuartaSemana=$this->validarSemana($mes,4);

		$usuarios=$this->Usuarios->find('all');
		foreach ($usuarios as $usr) {
			if (array_search($usr->id, $idCumplidoPrimeraSemana)!==false &&array_search($usr->id, $idCumplidoSegundaSemana)!==false && array_search($usr->id, $idCumplidoTerceraSemana)!==false &&array_search($usr->id, $idCumplidoCuartaSemana)!==false) {
				$usuariosCumplen[]=$usr->nombre." ".$usr->app;
			}
		}
		$this->set(compact('usuariosCumplen', 'mes'));	
	}

	public function validarSemana($mes,$week){
		$this->loadModel("Usuarios");
		$this->loadModel("Caminatas");	
		$usuarios=$this->Usuarios->find('all');
		$idCumplidoSemana=array();
		foreach($usuarios as $usr){
			$semana=0;
			$caminatas=$this->Caminatas->find('all')->where(['idusuario =' => $usr->id,'mes ='=>$mes, 'semana =' =>$week]);
			$diaActual=0;
			foreach($caminatas as $cam){				
				if ($diaActual==0) {
					$diaActual=$cam->dia;
				}else{
					if ($diaActual+1==$cam->dia) {
						if ($semana!=3) {
							$semana=2;
						}						
					}else{
						if($diaActual+2==$cam->dia && $semana==2){
							$semana=3;	
						}else{
							$diaActual=$cam->dia;
						}
						$diaActual=$cam->dia;
					}
				}				
			}
			if ($semana==3) {
				array_push($idCumplidoSemana, $usr->id);
			}
		}		
		return $idCumplidoSemana;
	}
}
