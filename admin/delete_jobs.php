<?php include "../includes/db.php";

include "../includes/functions.php";


/* DELETE JOB QUERY */
if (isset($_GET['id'])) {

    $query = query("DELETE FROM jobs WHERE id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Job Deleted !");
    redirect("company_index.php");
}
