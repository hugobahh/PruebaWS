<?php

 class Alumnos{
    
    private $Alumno;
    private $db;

    public function __construct() {
        $this->Alumno = array();
        $this->db = new PDO('mysql:host=localhost;dbname=escuela', "usr_db", "TmpTmp");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getMaterias() {
        self::setNames();
        $sql = "SELECT id_t_materias, nombre, activo FROM t_materias ";
        foreach ($this->db->query($sql) as $Res) {
            $this->Alumno[] = $Res;
        }
        return $this->Alumno;
        $this->db = null;
    }//Fin de getMAterias



    public function getAlumno($Id) {
        self::setNames();
        $sql = "SELECT id_t_usuarios, nombre, ap_paterno, ap_materno, activo FROM t_alumnos ";
        if ($Id != ''){
          $sql = $sql . "WHERE id_t_usuarios = $Id";
          //echo ("SQL: " . $sql);
        }
        foreach ($this->db->query($sql) as $Res) {
            $this->Alumno[] = $Res;
        }
        return $this->Alumno;
        $this->db = null;
    }//Fin de getAlumno

    public function getAlumnoAMC() {
        self::setNames();
        $sql = "SELECT t_alumnos.id_t_usuarios, t_alumnos.nombre, t_alumnos.ap_paterno, t_alumnos.ap_materno, t_alumnos.activo, t_calificaciones.calificacion, t_calificaciones.fecha_registro FROM t_alumnos LEFT JOIN t_calificaciones ON t_alumnos.id_t_usuarios = t_calificaciones.id_t_usuarios";
        foreach ($this->db->query($sql) as $Res) {
            $this->Alumno[] = $Res;
        }
        return $this->Alumno;
        $this->db = null;
    }//Fin de getAlumnoAMC

    public function getAlumnoMC($IdAlumno) {
        self::setNames();
        $sql = "SELECT  t_calificaciones.id_t_usuarios, t_calificaciones.id_t_materias, t_calificaciones.calificacion, t_calificaciones.fecha_registro, t_materias.nombre as materia FROM t_calificaciones INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias ";
        $sql = $sql . "WHERE t_calificaciones.id_t_usuarios = $IdAlumno";
        //echo ("SQL: " . $sql);
        foreach ($this->db->query($sql) as $Res) {
            $this->Alumno[] = $Res;
        }
        return $this->Alumno;
        $this->db = null;
    }//Fin de getAlumnoMC


    public function addAlumno($Id, $Nombre, $AP, $AM) {
        self::setNames();
        $sql = "INSERT INTO t_usuarios(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
        $Res = $this->db->query($sql);

        if ($Res) {
            return true;
        } else {
            return false;
        }
    }  // fin de function addAlumno


    public function addCal($newCal, $Id_A, $Id_M, $FechaA){
        self::setNames();
        $sql = "INSERT INTO t_calificaciones(id_t_materias, id_t_usuarios, calificacion, fecha_registro) VALUES (" . $Id_M . ", " . $Id_A . ", " . $newCal . ", '" . $FechaA . "')";
        $Res = $this->db->query($sql);

        if ($Res) {
            return true;
        } else {
            return false;
        }
    }//Fin de addCal


    public function Borrar($Id){
        self::setNames();
        $sql = "DELETE FROM t_calificaciones WHERE id_t_calificaciones = $Id";
        $Res = $this->db->query($sql);

        if ($Res) {
            return true;
        } else {
            return false;
        }
    }//Fin de Borrar


    public function Actualizar($Id, $Cal){
        self::setNames();
        $sql = "UPDATE t_calificaciones SET calificacion = $Cal  WHERE id_t_calificaciones = $Id";
        $Res = $this->db->query($sql);

        if ($Res) {
            return true;
        } else {
            return false;
        }
    } //FIN de Actualizar


    public function ExisteCalificacion($Id) {        
        self::setNames();
        $sql = "SELECT  id_t_calificaciones FROM  t_calificaciones ";
        $sql = $sql . "WHERE id_t_calificaciones = $Id";
        //echo $sql;       
        foreach ($this->db->query($sql) as $Res) {
            $this->Alumno[] = $Res;
        }
        return $this->Alumno;
        $this->db = null;
    }//Fin de existe calificacion



} //FIN de la clase

?>
