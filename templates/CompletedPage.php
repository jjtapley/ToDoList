<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Completed To Do Page</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Completed To Do's</h1>
<div>
    <table class="table-striped table-hover">
        <tr>
            <th>Completed Item</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($CompletedItems as $items) {
            echo "<tr>
                   <td class='p-2 table-success'>
                       {$items['Name']}
                   </td>
                   <td>
                      <form action='/unCompletedItem/{$items['id']}' method='post' class='formBtn'><button type='submit' class='btn btn-primary'>Not Completed</button></form>
                    </td>
              </tr>";}?>
    </table>

</div>
<a href="/"><button type="button" class="btn btn-warning btn-lg m-3">Home</button></a>
</body>
</html>
