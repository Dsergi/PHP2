<?php

class connectDb  {
	
	protected $connection;

   function __construct()
   {
		$this->connection = new mysqli(HOST, USER, PASS, DB);

		if ($this->connection->connect_error) {
			throw new \Exception('Error: ' . $this->connection->error . '<br />Error No: ' . $this->connection->errno);
		}

	}
	function query($sql)
	{		
		$query = $this->connection->query($sql);

		$data = [];

		while ($row = $query->fetch_object()) {
				$data[] = $row;
			}
		$query->close();

		return $data;
	}
}
