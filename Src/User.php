<?php
class User
{
    public $id='';
    public $user='';
    public $email='';
    public $password='';
    public $pdo='';


    public function __construct()
    {
       // session_start();
        $this->pdo = new PDO("mysql:host=localhost;dbname=animal", "root", "");

    }
    public function setData($data=''){
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        if(array_key_exists('user',$data)){
            $this->user = $data['user'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password = $data['password'];
        }
        return $this;
    }
    public function index(){
        try {
            $query = "INSERT INTO `user` (`id`, `user`, `email`, `password`)
                                    VALUES (:id, :user, :email, :password)";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(
                ":id" => null,
                ":user" => $this->user,
                ":email" => $this->email,
                ":password" => $this->password
            ));

            if ($stmt) {
                session_start();
                $_SESSION['message'] = "Successfully Added";
                echo $_SESSION['message'];

                header('location:../index.php');
            } else {
                $_SESSION['message'] = "Couldn't store , try again";
                echo $_SESSION['message'];
                header('location:../index.php');
            }

        } catch (PDOException $e) {
            $meg = $e->getMessage();
            if(isset($meg)){

                $_SESSION['message'] = $meg;
                $_SESSION['message'];
                header('location:../index.php');
            }
        }
    }
    public function loginProcess()
    {
        try {
            $query = "select * from `user` where user=:user and password=:password";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(
                ":user" => $this->user,
                ":password" => $this->password
            ));
            $alldata =count($stmt->fetch(PDO::FETCH_ASSOC));
           // echo $alldata;

           return $alldata;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}