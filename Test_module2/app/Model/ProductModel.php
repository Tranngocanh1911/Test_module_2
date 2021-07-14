<?php


namespace App\Model;

use App\Model\Product;

class ProductModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function convertToObject($data)
    {
        $product = new Product($data['name'], $data['type'], $data['price'],$data['quantity'], $data['date'], $data['describe']);
        $product->setId($data['id']);
        return $product;
    }

    public function convertAllToObj($data)
    {
        $products = [];
        foreach ($data as $item) {
            $products[] = $this->convertToObject($item);
        }
        return $products;
    }

    public function getAll()
    {
        try {
            $sql = "SELECT *  FROM `Product` ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `Product` where `id`= $id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {
        try {
            $sql = "INSERT INTO `Product` (`name`, `type`, `price`,`quantity`,`date`,`describe`) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['type']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['quantity']);
            $stmt->bindParam(5, $request['date']);
            $stmt->bindParam(6, $request['describe']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    public function update($request)
    {
        $product = $this->getById($_REQUEST['id']);
        try {
            $sql = "UPDATE `Product` SET `name`=?, `type`=?, `price`=?, `quantity`=?, `date`=?, `describe`=? WHERE `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['type']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['quantity']);
            $stmt->bindParam(5, $request['date']);
            $stmt->bindParam(6, $request['describe']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function delete($id)
    {
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM Product WHERE id=" . $id;
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
    public function search($search)
    {
        try {
            $sql = "SELECT * FROM Product WHERE name LIKE '%$search%' ";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

}