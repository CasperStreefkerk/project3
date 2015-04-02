<?php namespace Project\Website;


class Session {
    private $data = [];

    /**
     * Initialize object
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Check if a var exists in the current session state
     *
     * @param $var
     * @return bool
     */
    public function keyExists($var)
    {
        return array_key_exists($var, $this->data);
    }

    /**
     * Retrieve a var from the session array
     *
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->data[$key];
    }

    /**
     * Set a var from in the global session
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Set a message in the global session
     *
     * @param $type
     * @param $text
     */
    public function message($type, $text)
    {
        $this->set("message", array(
            "type" => $type,
            "text" => $text
        ));
    }

    /**
     * Set a var from in the global session
     *
     * @param $key
     */
    public function delete($key)
    {
        unset($_SESSION[$key]);
    }

} 