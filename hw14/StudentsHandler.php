<?php

namespace hw14;

class StudentsHandler
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=courses", "root", "");
    }

    public function find(int $id): Students
    {
        $statement = $this->connection->prepare("SELECT * FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
        $result = $statement->fetch();

        return new Students($result["name"], $result["description"], $result["phone"], $result["country"]);
    }

    public function getAll()
    {
        $result = $this->connection->query("SELECT * from students");
        $data = $result->fetchAll();
        $students = [];

        foreach ($data as $student) {
            $students[] = new Students($student["name"], $student["description"], $student["phone"], $student["country"]);
        }

        return $students;
    }

    public function create(string $name, string $description, string $phone, string $country): Students
    {
        $sql = "INSERT INTO students (name, description, phone, country) VALUES (:name, :description, :phone, :country)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ":name" => $name,
            ":description" => $description,
            ":phone" => $phone,
            ":country" => $country,
        ]);

        return new students($name, $description, $phone, $country);
    }

    public function delete(int $id)
    {
        $statement = $this->connection->prepare("DELETE FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
    }

    public function update(int $id, string $name = null, string $description = null, int $phone = null, float $country = null)
    {
        $sql = "UPDATE students SET name = :name, description = :description, phone = :phone, country = :country, WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $students = $this->find($id);

        $statement->execute([
            ":id" => $id,
            ":name" => $name ?: $students->getName(),
            ":description" => $description ?: $students->getdescription(),
            ":phone" => $phone ?: $students->getphone(),
            ":country" => $country ?: $students->getcountry(),
        ]);

        return $this->find($id);
    }
}