<?php


class DbConnection
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Newdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }
    }

    // get product from the database
        public function getData($tablename){
            $sql = "SELECT * FROM $tablename";

            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }
        public function getProductById($id){
                    $sql = "SELECT * FROM `products` WHERE id=$id";

                    $result = mysqli_query($this->con, $sql);

                    if(mysqli_num_rows($result) > 0){
                        return $result;
                    }
                }

        public function deleteProduct($id){
                    $sql = "DELETE FROM `products` WHERE id = $id";

                    $result = mysqli_query($this->con, $sql);

                    return $result;
                }

        public function insertItem($tablename, $product_name, $product_price, $product_image, $product_description){
            $sql = "INSERT INTO $tablename (product_name, product_price, product_image, product_description)
                           VALUES ('$product_name',$product_price ,'$product_image','$product_description')";;
            $result = mysqli_query($this->con, $sql);
        }

        public function updateProduct($ID, $NAME, $PRICE, $img, $DESCRIPTION){
            $sql = "UPDATE `products` SET `product_name`='$NAME',`product_price`='$PRICE',`product_image`='$img', `product_description`='$DESCRIPTION' WHERE id = '$ID'";
            $result = mysqli_query($this->con, $sql);
        }

        public function insertUser($tablename, $email, $password, $firstname, $lastname, $county, $city){
                    $sql = "INSERT INTO $tablename (email, psw, firstname, lastname, county, city)
                                   VALUES ('$email','$password','$firstname','$lastname','$county','$city')";;
                    $result = mysqli_query($this->con, $sql);
                }

        public function getUser($email){
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result) > 0){
                   return $result;
            }

        }
}