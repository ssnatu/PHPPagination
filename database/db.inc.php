<?php

/**
 * DB Connection
 */
require 'config.inc.php';

class Database
{
	private $con;

	public function __construct()
	{
		$this->connect();
	}


	private function connect()
	{
		if (!isset($this->con))
		{
			$this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
			if ($this->con->connect_errno)
			{
				die("Database connection failed " . $this->con->connect_errno);
			}
		}
		return $this->con;
	}

	public function close()
	{
		if ($this->con)
		{
			return mysqli_close($this->con);
		}
	}

	public function query($query)
	{
		try
        {
            $result = $this->con->query($query);
            return $result;
        }
        catch (Exception $e)
        {
            echo 'Unable to perform query. Error received: ' . $e->getMessage();
        }
	}
}
