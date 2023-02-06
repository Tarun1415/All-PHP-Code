<?php

  include 'singleton.php';



class applycurd
{

    // insert table
    public static function insert($array, $connect)
    {
        // print_r('tarun');

        if (is_array($array)) {
            foreach ($array as $row => $value) {
                $Names = mysqli_real_escape_string($connect, $value[0]);
                $contry = mysqli_real_escape_string($connect, $value[1]);

                $sql = "INSERT INTO ormtable( names , contry)
                   VALUES('$Names','$contry')";

                mysqli_query($connect, $sql);
            }
        }
    }


    // fetched table

    public static function fetched($connect)
    {

        $array = array();
        $query = "SELECT * from ormtable";
        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }


    //update table

    public static function update($array, $connect)
    {

        $query = "UPDATE ormtable Set contry='bihar' WHERE  contry ='india'";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }


    // delete table

    public static function delete($array, $connect)
    {
        //print_r('-------da');
        $query = "DELETE from ormtable WHERE contry='india'";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }

   // public static function testNew()
   // {
   //     echo 'newTest';
  //  }
}



$order = array(
 "0" => array("Barun", "Hindustan"),
    "1" => array("sarla", "bihar"),
     "2"=>array("dhiraj" , "india")
 );

 //$obj=applycurd::update($order, $connect);

// print_r($connect);die;
 

$obj= applycurd::delete($order, $connect);

