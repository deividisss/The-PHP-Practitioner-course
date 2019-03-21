<?php 

/**
 * 
 */
class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)

	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table, $class)

	{
		//PDO PHP Data Object
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		// return $sud_lygiai = ($statement->fetchAll(PDO::FETCH_OBJ));
		return $statement->fetchAll(PDO::FETCH_CLASS, $class);
		//dd($sud_lygiai);
	}

}