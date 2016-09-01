<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "testing_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getParentNodes = "select id, name from permissions where inherit_id IS NULL";
$resParentNodes = mysqli_query($conn, $getParentNodes);

$response = '';
if(mysqli_num_rows($resParentNodes) > 0)
{
    while($parentNode = mysqli_fetch_assoc($resParentNodes))
    {
        $response .= '<ul><li id="'.$parentNode['id'].'" data-checkstate="unchecked">'.$parentNode['name'];

        $getChildNodes = "select id, name from permissions where inherit_id = '".$parentNode['id']."'";
        $resChildNodes = mysqli_query($conn, $getChildNodes);

        if(mysqli_num_rows($resChildNodes) > 0)
        {
            $response .= '<ul>';
            while($childNode = mysqli_fetch_assoc($resChildNodes))
            {
                $checked = 'data-checkstate="unchecked"';
                if($childNode['id'] == 5 || $childNode['id'] == 10 || $childNode['id'] == 11)
                {
                    $checked = 'data-checkstate="checked"';
                }
                $response .= '<li id="'.$childNode['id'].'" '.$checked.'>'.$childNode['name'].'</li>';
            }
            $response .= '</ul>';
        }

        $response .= '</li></ul>';
    }
}

echo $response;
?>