<?php
class Login{
    public static function validate($password, $email, $cn){
        //simple empty content validation
        if (empty($password) or empty($email)){
            print ("Empty Email or Password" . "<BR>");
            return false;
        }

        print "Trying to login with Email: " . $email . "<BR>";
        $valid = false;

        $table = "Login";
        $sql = "SELECT email, senha from $table WHERE email = \"$email\" and senha = \"$password\"";

        $query = $cn->query($sql);
        $data = $query->fetch();

        if (!empty($data)){
            print ("Valid User" . "<BR>");

            $valid = true;
        }
        else{
            print ("Invalid Email or Password" . "<BR>");
            $valid = false;
        }

        return $valid;
    }
}
?>