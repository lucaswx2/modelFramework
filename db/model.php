<?php 
require_once __DIR__.'\conexao.php';

class Model extends Conexao{
	protected $table;
	protected $attributes;


	public function all(){
		$rows = array();
		$query = "SELECT * FROM $this->table";
		$result = self::executeQuery($query);
		while ($row = mysqli_fetch_array($result)) $rows[] = $row;
		return $rows;
	}

	public function find($params="",$fields= "*"){
		$rows= array();
		if(gettype($params) == "array"){ $array = true;};
		$params = self::getParams($params);

		$query = "SELECT $fields FROM $this->table WHERE $params";
		$result = self::executeQuery($query);
		if(isset($array)){
			while($row = mysqli_fetch_array($result)) $rows[] = $row;
			return $rows;
		}else{
			return mysqli_fetch_assoc($result);
		}

	}

	public function update($attributes,$params){
		$params = self::getParams($params);
		$query = "UPDATE $this->table SET $attributes WHERE $params";
		$result = self::executeQuery($query);
		echo $query;
		return $result;
	}

	public function create(){
		
	}






//private
	private function getParams($params){
		if((gettype($params) == "integer") && gettype($params)!="array"){
			$params = "id = $params";
			return $params;
		}else if(gettype($params) == "array"){
			$array = $params;
			$params = "id in(";
			foreach ($array as $valor) {
				$params.= $valor.",";
			}
			$params = substr($params,0,-1);
			$params.=")";
			return $params;
		}else{
			return $params;
		}
	}

}

?>