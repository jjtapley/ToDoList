<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="m-4">To Do List</h1>
    <div class="btn-group">
        <form method="post" action='/filteredList'>
            <label for="category" class="lead">Filter By</label>
            <select class="custom-select" style="width:200px;" id="filter" name="filter">
                <option value="None">None</option>
                <option value="Personal">Personal</option>
                <option value="Work">Work</option>
                <option value="School">School</option>
                <option value="Kids">Kids</option>
                <option value="Financial">Financial</option>
            </select>
            <input type="submit" class="btn btn-success btn-md mr-5" value="Filter">
        </form>
        <a href="/CompletedPage"><button type="button" class="btn btn-warning btn-md ml-5">View Completed To Do's</button></a>
    </div>
    <table class="table-striped table-hover">
        <tr>
            <th>To Do Item</th>
            <th>Due Date</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
      <?php foreach ($ToDoList as $items) {
          echo "<tr>
                    <td class='p-2 w-25'>
                        {$items['Name']}
                    </td>
                     <td class='p-2 table-danger'>
                        {$items['DueDate']}
                    </td>
                       <td class='p-2 w-25'>
                        {$items['Category']}
                    </td>
                    <td class='w-40'>
                        <form action='/completedItem/{$items['id']}' method='post' class='formBtn'><button type='submit' class='btn btn-primary'>Completed</button></form>
                        <form action='/deleteItem/{$items['id']}' method='post' class='formBtn'><button type='submit' class='btn btn-danger'>Delete</button></form>
                    </td>
                </tr>";
      }?>
    </table>
    <form action="/addItem" method="post">
        <div class="display-4 p-4 mt-5">Add Item</div>
        <div class="form-group">
            <label for="addItem" class="lead">To Do Item</label>
            <input type="text" id="addItem" name="addItem" style="width:200px;" aria-describedby="addItem" placeholder="To Do Item">
        </div>
        <div class="form-group">
            <label for="due" class="lead ml-5">Due</label>
            <input type="date" id="due" name="dueDate" style="width:200px;" required min="<?php echo date('Y-m-d'); ?>">
        </div>
        <div>
            <label for="category" class="lead">Category</label>
            <select class="custom-select" style="width:200px;" id="category" name="category">
                <option value="Personal">Personal</option>
                <option value="Work">Work</option>
                <option value="School">School</option>
                <option value="Kids">Kids</option>
                <option value="Financial">Financial</option>
            </select>
        </div>
        <div class="form-group">
            <input value="Add" type="submit" class="btn btn-success m-3 btn-lg">
        </div>
    </form>
</body>
</html>