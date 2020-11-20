<?php


namespace App\Models;

use \PDO;

class ToDoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getList()
    {
        $query = $this->db->prepare('SELECT * FROM ToDoItems ORDER BY DueDate ASC');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompleted()
    {
        $query = $this->db->prepare('SELECT * FROM `CompletedItems`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addItem($item, $date, $category)
    {
        $query = $this->db->prepare('INSERT INTO `ToDoItems` (`Name`, `DueDate`, `Category`) VALUES (:item, :date, :category)');
        $query->bindParam(':item', $item);
        $query->bindParam(':date', $date);
        $query->bindParam(':category', $category);
        $query->execute();
    }

    public function deleteItem($item)
    {
        $query = $this->db->prepare('DELETE FROM `ToDoItems` WHERE id = :item');
        $query->bindParam(':item',  $item);
        $query->execute();
    }

    public function markCompleted($item)
    {
        $query = $this->db->prepare('INSERT INTO CompletedItems (`Name`, `DueDate`, `Category`) SELECT `Name`, `DueDate`, `Category` FROM ToDoItems WHERE id = :item;');
        $query->bindParam(':item',  $item);
        $query->execute();

        $query = $this->db->prepare('DELETE FROM ToDoItems WHERE id = :item;');
        $query->bindParam(':item',  $item);
        $query->execute();
    }

    public function markUnCompleted($item)
    {
        $query = $this->db->prepare('INSERT INTO ToDoItems (`Name`, `DueDate`, `Category`) SELECT `Name`, `DueDate`, `Category` FROM CompletedItems WHERE id = :item;');
        $query->bindParam(':item',  $item);
        $query->execute();

        $query = $this->db->prepare('DELETE FROM CompletedItems WHERE id = :item;');
        $query->bindParam(':item',  $item);
        $query->execute();
    }

    public function getFilteredList($category)
    {
        if ($category === "None") {
            $query = $this->db->prepare('SELECT * FROM ToDoItems');
        } else {
            $query = $this->db->prepare('SELECT * FROM ToDoItems WHERE `Category` = :category');
            $query->bindParam(':category',  $category);
        }
        $query->execute();
        return $query->fetchAll();
    }

}