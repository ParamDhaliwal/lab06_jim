<!doctype html>
<html>
<head>
    <title>View</title>
</head>
<body>
<a href="\">Go Back To Welcome Page</a>
<h1><center>View</center></h1>
<ul>
    <?php foreach ($records as $record) {
        echo '
        <center>
            <table>
                <tr>
                    <td><a href="/chores/assign/'.$record['id'].'">'.$record['id'].': '.$record['name'].' ', ' - ', ' '.$record['role'].'</a></td>
                <tr>
            </table>
        </center>';
    }
    ?>
</ul>
</body>
</html>
