<?php
class katalog
{
    public $id;
    public $title;
    public $production_house;
    public $description;
    public $release_at;

    private $conn;
    private $table = "katalog_movie";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add()
    {
        $query = "INSERT INTO
                " . $this->table . "
            SET
               id=:id, title=:title, production_house=:production_house, description=:description, release_at=:release_at";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('id', $this->id);
        $stmt->bindParam('title', $this->title);
        $stmt->bindParam('production_house', $this->production_house);
        $stmt->bindParam('description', $this->description);
        $stmt->bindParam('release_at', $this->release_at);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function fetch()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function get()
    {
        $query = "SELECT * FROM " . $this->table . " p          
                WHERE
                    p.id = ?
                LIMIT
                0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $katalog = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $katalog['id'];
        $this->title = $katalog['title'];
        $this->production_house = $katalog['production_house'];
        $this->description = $katalog['description'];
        $this->release_at = $katalog['release_at'];
    }

    function update()
    {
        $query = "UPDATE
                " . $this->table . "
            SET
                title = :title,
                production_house = :production_house,
                description = :description,
                release_at = :release_at
            WHERE
                id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $this->id);
        $stmt->bindParam('title', $this->title);
        $stmt->bindParam('prduction_house', $this->production_house);
        $stmt->bindParam('description', $this->description);
        $stmt->bindParam('release_at', $this->release_at);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
