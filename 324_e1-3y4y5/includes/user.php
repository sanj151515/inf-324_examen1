<?php

include_once 'db.php';

class User extends DB{

    private $ci;
	private $nombre;
    private $username;
	private $rol;
	

    public function userExists($user, $pass){
        //$md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM acceso WHERE usuario = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM acceso WHERE usuario = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->ci = $currentUser['ci'];
            $this->username = $currentUser['usuario'];
			$this->rol = $currentUser['rol'];
			
			
        }
		
		 $query = $this->connect()->prepare('SELECT * FROM persona WHERE ci = :myci');
			$query->execute(['myci' => $this->ci]);

        foreach ($query as $currentUser) {
           $this->nombre = $currentUser['nombre_completo'];
			
			
        }
    }
public function getDirector(){
        if($this->getRol()=="director")
			return true;
		else
			return false;
    }
    public function getNombre(){
        return $this->nombre;
    }
	public function getRol(){
        return $this->rol;
    }
	public function getNotas(){
        $query = $this->connect()->prepare('SELECT * FROM inscripcion WHERE CIestudiante  = :myci');
        $query->execute(['myci' => $this->ci]);
		/*$query->setFetchMode(PDO::FETCH_ASSOC);
		$filass=$query->fetchAll();*/
		//echo $this->getNombre();
		echo "<tbody><table>";
		echo '<tr>
                                <th scope="col">   Sigla   </th>
                                <th scope="col">   nota1   </th>
                                <th scope="col">   nota2   </th>
                                <th scope="col">   nota3   </th>
                                <th scope="col">   Nota Final</th>
                            </tr>';
        foreach ($query as $currentUser) {
			echo "<tr>";
                echo "<td>".$currentUser['sigla']."</td>";
                echo "<td>".$currentUser['nota1']."</td>";
				echo "<td>".$currentUser['nota2']."</td>";
				echo "<td>".$currentUser['nota3']."</td>";
				echo "<td>".$currentUser['notafinal']."</td>";
            echo "</tr>";
			
			echo "<br>";
        }
		echo '<form class="p-4" method="POST" action="index.php">
	<button class="btn btn-primary" type="submit" >Pagina Principal</button></form>';
		echo "</table></tbody>";
		return "";
    }
	public function getNotasDirector(){
        $query = $this->connect()->prepare('select p.departamento, avg(i.notafinal) as nota_promedio
from persona p, inscripcion i
where p.ci=i.ciestudiante
group by p.departamento
');
        $query->execute();
		/*$query->setFetchMode(PDO::FETCH_ASSOC);
		$filass=$query->fetchAll();*/
		//echo $this->getNombre();
		$arrayDept = array(
			"01"=>"CHUQUISACA",
			"02"=>"LA PAZ",
			"03"=>"COCHABAMBA",
			"04"=>"ORURO",
			"05"=>"POTOSÍ",
			"06"=>"TARIJA",
			"07"=>"SANTA CRUZ",
			"08"=>"BENI",
			"09"=>"PANDO"
    );
		
		echo "<tbody><table>";
		echo '<tr>
                                <th scope="col">   Departamento   </th>
                                <th scope="col">   Nota Promediada   </th>
                            </tr>';
        foreach ($query as $currentUser) {
			echo "<tr>";
			$val=$currentUser['departamento'];
                echo "<td>".$arrayDept[$val]."</td>";
                echo "<td>".$currentUser['nota_promedio']."</td>";
            echo "</tr>";
			
			echo "<br>";
        }
		echo '<form class="p-4" method="POST" action="index.php">
	<button class="btn btn-primary" type="submit" >Pagina Principal</button></form>';
		echo "</table></tbody>";
		return "";
    }
}

?>
