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
        $statement = $this->connection->prepare('SELECT id, email, password, type FROM user WHERE email = :email AND password = :password');
        $statement->execute(array(
            ':email' => $email,
            ':password' => md5($password)
        ));
        return $statement->fetch();
    }

    /**
     * @param $email
     * @param $password
     * @param $usertype
     * @return bool
     */
    public function registerUser($email, $password, $usertype)

    {
        $statement = $this->connection->prepare('INSERT INTO user(email, password, type) VALUES (:email,:password,:type)');
        $result = $statement->execute(array(
            ':email' => $email,
            ':password' => md5($password),
            ':type' => $usertype

        ));



    }

    /**
     * @param $email
     * @return mixed
     */
    public function getUserIdByEmail($email)
    {
        $statement = $this->connection->prepare('SELECT id FROM user WHERE email = :email');
        $statement->execute(array(':email' => $email));
        return $statement->fetch();
    }

    public function registerUsers($lastid, $firstname, $lastname, $address, $place, $zipcode)

    {
        $statement = $this->connection->prepare('INSERT INTO users(user_id, firstname, lastname, address,place, zipcode) VALUES (:user_id, :firstname,:lastname,:address,:place,:zipcode)');
        $statement->execute(array(
            ':user_id' => $lastid,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':address' => $address,
            ':place' => $place,
            ':zipcode' => $zipcode
        ));


    }

    public function registerArtist($lastid, $name, $management, $contactperson_fn, $contactperson_ln, $phonenumber)

    {
        $statement = $this->connection->prepare('INSERT INTO artists(artist_id, name, management, contactperson_firstname, contactperson_lastname, phonenumber) VALUES (:last_id, :name, :management, :contactperson_firstname, :contactperson_lastname, :phonenumber)');
        $statement->execute(array(
            ':last_id' => $lastid,
            ':name' => $name,
            ':management' => $management,
            ':contactperson_firstname' => $contactperson_fn,
            ':contactperson_lastname' => $contactperson_ln,
            ':phonenumber' => $phonenumber

        ));


    }

    public function registerSponsor($lastid, $companyname, $contactperson_fn, $contactperson_ln, $address, $place, $zipcode,$phonenumber)

    {
        $statement = $this->connection->prepare('INSERT INTO sponsors(sponsor_id, companyname, contactperson_firstname, contactperson_lastname, address, place, zipcode, phonenumber) VALUES (:last_id,:companyname,:contactperson_firstname, :contactperson_lastname,:address,:place,:zipcode,:phonenumber)');
        $statement->execute(array(
            ':last_id' => $lastid,
            ':companyname' => $companyname,
            ':contactperson_firstname' => $contactperson_fn,
            ':contactperson_lastname' => $contactperson_ln,
            ':address' => $address,
            ':place' => $place,
            ':zipcode' => $zipcode,
            ':phonenumber' => $phonenumber
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

    public function insertMarkers1($location_name, $latitude1, $longitude1, $description, $event_id){
            $statement = $this->connection->prepare
            ('INSERT INTO markers (location_name, latitude, longitude, description, event_id)
VALUES (:location_name, :latitude, :longitude, :description, :event_id)');
            $statement->execute(array(':location_name'=>$location_name,
                ':latitude'=>$latitude1,
                'longitude'=>$longitude1,
                ':description'=>$description,
                ':event_id'=>$event_id
            ));
        return $this->connection->lastInsertId('markers');

    }

    public function insertMarkers2($location_name, $latitude2, $longitude2, $description, $event_id){
        $statement = $this->connection->prepare
        ('INSERT INTO markers (location_name, latitude, longitude, description, event_id)
VALUES (:location_name, :latitude, :longitude, :description, :event_id)');
        $statement->execute(array(':location_name'=>$location_name,
            ':latitude'=>$latitude2,
            'longitude'=>$longitude2,
            ':description'=>$description,
            ':event_id'=>$event_id
        ));
        return $this->connection->lastInsertId('markers');

    }

    public function insertMarkers3($location_name, $latitude3, $longitude3, $description, $event_id){
        $statement = $this->connection->prepare
        ('INSERT INTO markers (location_name, latitude, longitude, description, event_id)
VALUES (:location_name, :latitude, :longitude, :description, :event_id)');
        $statement->execute(array(':location_name'=>$location_name,
            ':latitude'=>$latitude3,
            'longitude'=>$longitude3,
            ':description'=>$description,
            ':event_id'=>$event_id
        ));
        return $this->connection->lastInsertId('markers');

    }

    public function insertMarkers4($location_name, $latitude4, $longitude4, $description, $event_id){
        $statement = $this->connection->prepare
        ('INSERT INTO markers (location_name, latitude, longitude, description, event_id)
VALUES (:location_name, :latitude, :longitude, :description, :event_id)');
        $statement->execute(array(':location_name'=>$location_name,
            ':latitude'=>$latitude4,
            'longitude'=>$longitude4,
            ':description'=>$description,
            ':event_id'=>$event_id
        ));
        return $this->connection->lastInsertId('markers');

    }

    public function createSoloEvent($name, $description, $artistid, $marker1, $marker2, $marker3, $marker4){

        $statement = $this->connection->prepare
        ('INSERT INTO solo_events (name, description, artist_id, marker1_id, marker2_id, marker3_id, marker4_id)
          VALUES (:name,:description,:artistid,:marker1, :marker2, :marker3, :marker4)');
        $statement->execute(array(':name'=>$name,
            ':description'=>$description,
            ':artistid'=>$artistid,
            'marker1'=>$marker1,
            'marker2'=>$marker2,
            'marker3'=>$marker3,
            'marker4'=>$marker4
        ));

        //return $lastid = $statement->lastInsertId();
        return $this->connection->lastInsertId('solo_events');

    }

    public function editSoloEvent($event_id, $marker1_id, $marker2_id, $marker3_id, $marker4_id){
        $query = "UPDATE solo_events
                  SET marker1_id = :marker1_id,
                      marker2_id = :marker2_id,
                      marker3_id = :marker3_id,
                      marker4_id = :marker4_id
                  WHERE solo_events_id = :solo_events_id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':solo_events_id', $event_id);
        $statement->bindParam(':marker1_id', $marker1_id);
        $statement->bindParam(':marker2_id', $marker2_id);
        $statement->bindParam(':marker3_id', $marker3_id);
        $statement->bindParam(':marker4_id', $marker4_id);

        $statement->execute();

    }

    public function getEvents(){
        $query = "SELECT * FROM solo_events";

        return $this->connection->query($query)->fetchAll(\PDO::FETCH_OBJ);

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