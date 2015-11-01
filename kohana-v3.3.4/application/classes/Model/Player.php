<?php defined('SYSPATH') or die('No direct script access.');



class Model_Player extends Model {
    

    
    public function do_stuff()
    {
        // This is where you do domain logic...
    }
 
    public function get_stuff()
    {

        $query = DB::query(Database::SELECT, 'SELECT * FROM player');
        $result = $query->execute();
    
        $output = array();
        foreach ($result as $array) {
            $output[] = $array;
        }
        return $output;
    }
    
    
    /*
     *    public function get_latest_news() {
        $sql = 'SELECT * FROM `news_example` ORDER BY `id` DESC LIMIT  0, 10';
        return $this->_db->query(Database::SELECT, $sql, FALSE)
                         ->as_array();
    }*/
} // Model_Player