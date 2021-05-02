<?php


class studentBD extends  DBfunctions {

    public function  getStudentByEmail ($email) {
        $request = $this->bd->prepare("select * from $this->tableName where email = ?");
        $request->execute([$email]);

        return $request->fetch(5) ;;
    }

    /*
     * if student already exist he can't sign up again unless he delete his account
     *
     */

    public function signUp($email ,   $unique_code ,$firstName , $lastName , $password ) {
        $student = $this->getStudentByEmail($email) ;
        if(!$student) {
            $this->addNewStudent($email , $unique_code, $firstName , $lastName , $password ) ;
            // sign up succeded
            return 1 ;
        }
        // account already exists
        return 0 ;
    }

    public function signInVerification ($email , $password) {
        $request = $this->bd->prepare("select * from $this->tableName where email = ?   and password = ? and confirmation = 1");
        $request->execute([$email ,  $password]);

        return $request->fetch(5) ;
    }

    public function addNewStudent($email ,$unique_code , $firstName , $lastName , $password  ) {
        $email = htmlentities($email) ;
        $firstName = htmlentities($firstName) ;
        $lastName = htmlentities($lastName) ;
        $password = htmlentities($password) ;

        $request = $this->bd->prepare("INSERT INTO $this->tableName (`email`, `code_unique`, `first_name`, `last_name`, `password`) VALUES (?,?,?,?,?)");
        $request->execute([$email ,$unique_code, $firstName , $lastName , $password]);
    }
    public function deleteStudent($email , $password) {
       if($this->getStudentByEmail($email)) {
           $request = $this->bd->prepare("delete from $this->tableName where email=? and password = ? ");
           $request->execute([$email, $password]);
           // if found and deleted ==> return 1
           return 1  ;
       }
       //if not found ==> return 0 ;
       return 0 ;
    }

    public function  getStudentByEmailAndCode ($email , $code_unique) {
        $request = $this->bd->prepare("select * from $this->tableName where email = ? and code_unique = ?");
        $request->execute([$email , $code_unique]);

        return $request->fetch(5) ;;
    }

    public function setConfirmation ($email , $code_unique) {
        $request = $this->bd->prepare("UPDATE `students` SET `confirmation`= 1 where email = ? and code_unique = ? ");
        $request->execute([$email , $code_unique]);
    }





}