<?php
/**
 * Pagination work
 */

require realpath(__DIR__) .  '/../database/db.inc.php';

$db = new Database();

$result = $db->query("SELECT COUNT(*) AS total FROM users");

$row = $result->fetch_assoc();

$totalrows = $row['total'];
$perpage = 10; // set perpage limit

$last = ceil($totalrows / $perpage); // total number of pages

if ($last < 1)
{
	$last = 1;
}

$page = 1;
if (isset($_GET['page']))
{
	$page = (int)$_GET['page'];
}

if ($page < 1)
{ 
	$page = 1; 
} 
elseif ($page > $last)
{ 
	$page = $last; // set page to last page number
}

$limit = 'LIMIT ' . ($page - 1) * $perpage . ',' . $perpage; // set offset and limit

$query = $db->query("SELECT * FROM `users` $limit");

$pagination = "";

if ($last != 1)
{
	$pagination .= '<ul class="pagination">';
	// first and previous link
	if ($page > 1) 
	{
		$previous = $page - 1;
		$pagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=1" class="btn btn-default">First</a></li>'; // goto first page
		$pagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $previous . '" class="btn btn-default">Previous</a></li>';
	}

	// display page numbers
	for ($i = 1 ; $i <= $last; $i++)
	{
		if ($i != $page)
		{
			$pagination .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='. $i .'" class="btn btn-default">'.$i.'</a></li> ';
		}
		else
		{
			$pagination .= '<li class="page-item"><button type="button" class="btn btn-default">' . $i . '</button></li>';
		}
	}

	// last and next link
	if ($page != $last)
	{
        $next = $page + 1;
        $pagination .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='. $next . '" class="btn btn-default">Next</a></li>';
        $pagination .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='. $last . '" class="btn btn-default">Last</a></li>'; // goto last page
    }
    $pagination .= '</ul>'; // close ul
}
