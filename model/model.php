<?php 
require_once __DIR__.'/..'.'\db\conexao.php';

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

	public function create($params){
		$params = self::getParamsCreate($params);
		$attributes = self::getAttributes($this->attributes);
		$query = "INSERT into $this->table ($attributes) VALUES ($params);";
		echo $query;
		$result = self::executeQuery($query);
		return $result;	
	}


	public function destroy($params){
		if(gettype($params) == "array"){ $array = true;};
		$params = self::getParams($params);
		$query = "DELETE FROM $this->table WHERE $params";
		echo $query;
		$result = self::executeQuery($query);
		return $result;
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

	private function getAttributes($attributes){
		if(gettype($attributes)=="array"){
			$array=$attributes;
			$attributes = "";
			foreach ($array as $valor) {
				$attributes.= $valor.",";
			}
			$attributes = substr($attributes,0,-1);
			return $attributes;
		}else{
			return $attributes;
		}
	}

	private function getParamsCreate($params){
		if(gettype($params) == "array"){
			$array = $params;
			$params = "";
			foreach ($array as $valor) {
				$params.= "'".$valor."'".",";
			}
			$params = substr($params,0,-1);
			return $params;
		}else{
			return $params;
		}
	}

}

?>