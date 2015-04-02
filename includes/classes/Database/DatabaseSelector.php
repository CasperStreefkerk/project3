<?php namespace Project\Database;

/**
 * Class DatabaseSelector
 */
class DatabaseSelector extends Database
{
    /**
     * Select all the product fetched to Product class
     *
     * @return mixed
     */

    /**
     * Select all
     *
     * @return array
     */
    public function getName($id){
        $statement = $this->connection->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch();
    }

    /**
     * Get all names from users
     *
     * @return array
     *
     */
    public function getNames(){
        $query = "SELECT * FROM users";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);



    }

    /**
     * Try login the user
     *
     * @param $email
     * @param $password
     * @return mixed
     */

    public function loginUser($email, $password)
    {
        $statement = $this->connection->prepare('SELECT id, email, password FROM user WHERE email = :email AND password = :password');
        $statement->execute(array(
            ':email' => $email,
            ':password' => md5($password)
        ));
        return $statement->fetch();
    }

    public function registerUser($email, $password)

    {
        $statement = $this->connection->prepare('INSERT INTO users(email, password) VALUES (:email,:password)');
        $statement->execute(array(
            ':email' => $email,
            ':password' => md5($password)
        ));


    }
    /**
     * Select an individual user by id
     *
     * @param $id
     * @return array
     */
    public function getUserById($id)
    {
        $statement = $this->connection->prepare('SELECT id, email, name, password FROM users WHERE id = :id');
        $statement->execute(array(':id' => $id));
        return $statement->fetch();
    }

    /**
     * Get all matches
     *
     * @return array
     *
     */

    public function getMatches(){
        $query = "SELECT * FROM matches";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);



    }

    /**
     * Get all matches
     *
     * @param $id
     * @return mixed
     *
     */

    public function getMatchById($id)
    {
        $statement = $this->connection->prepare('SELECT * FROM matches WHERE id = :id');
        $statement->execute(array(':id' => $id));
        return $statement->fetch();
    }

    /**
     * Get all seats to display
     *
     * @param $cending
     * @param $limit
     * @return array
     */
    public function getSeats($cending, $limit)
    {

        $query = "SELECT * FROM
          (
            SELECT * FROM seats ORDER BY id $cending LIMIT $limit
          ) sub
            ORDER BY id ASC";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);

    }

    /**
     * Save reserved seats for user per match
     *
     * @param $userid
     * @param $matchid
     * @param $seatid
     */
    public function saveSeats($userid, $matchid, $seatid){
        $statement = $this->connection->prepare('INSERT INTO seatsreservation (matchid,seatid,userid) VALUES (:matchid,:seatid,:userid)');
        $statement->execute(array(':userid'=>$userid,
            ':matchid'=>$matchid,
            ':seatid'=>$seatid,));

    }

    /**
     * Check if seats are availble, and display availble or not
     *
     * @param $matchid
     * @param $seatid
     * @return mixed
     *
     */
    public function checkSeatsAvailible($matchid, $seatid){
        $statement = $this->connection->prepare('SELECT matchid, seatid FROM seatsreservation WHERE matchid = :matchid AND seatid = :seatid ');
        $statement->execute(array(':matchid'=>$matchid,
            ':seatid'=>$seatid,));
        return $statement->fetch();

    }

    /**
     * Get seat by id, so we can display the name
     *
     * @param $id
     * @return mixed
     */
    public function getSeatById($id)
    {
        $statement = $this->connection->prepare('SELECT name FROM seats WHERE id = :id');
        $statement->execute(array(':id' => $id));
        return $statement->fetch();
    }


    /**
     * Check which user sits on which seat
     *
     * @param $matchid
     * @param $seatid
     * @return mixed
     *
     */

    public function getUserBySeatId($matchid, $seatid)
    {
        $statement = $this->connection->prepare('SELECT userid FROM seatsreservation WHERE matchid = :matchid AND seatid = :seatid');
        $statement->execute(array(':matchid' => $matchid,
            ':seatid' => $seatid));
        return $statement->fetch();
    }

    /**
     * Deleted function
     *
     * @return array
     */
    public function getSiteSettings(){
        $query = "SELECT * FROM sitesettings";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);

    }

    /**
     * Get all information from table
     *
     * @param $table
     * @return array
     */

    public function getByGet($table){
        $query = "SELECT * FROM $table";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);


    }

    /**
     * Delete row from table
     *
     * @param $table
     * @param $id
     */

    public function deleteByRow($table, $id){
        $query = "DELETE FROM $table WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    /**
     * Insert user in table
     *
     * @param $email
     * @param $name
     * @param $password
     */

    public function insertUser($email, $name, $password){
        $query = "INSERT INTO users(email, name, password)
                VALUES (
                  :email,
                  :name,
                  :password)
              ";

        $statement = $this->connection->prepare($query);

        $statement->bindParam(':email', $email);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':password', $password);

        $statement->execute();
    }

    /**
     * Edit user row
     *
     * @param $id
     * @param $name
     * @param $email
     * @param $password
     */
    public function editUser($id, $name, $email, $password){
        $query = "UPDATE users SET name = :name,
            email = :email,
            password = :password
            WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':id', $id);

        $statement->execute();

    }


} 