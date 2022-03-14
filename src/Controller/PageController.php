<?php
namespace src\Controller;

use src\App\Lib;
use src\App\DB;

class PageController extends MasterController
{
    public function main()
    {
        $this->render("main");
        
        if(user()) {
            echo "<script>";
            echo "login = true;";
            echo "render()";
            echo "</script>";
        }
    }

    public function joinProcess()
    {
        $id = $_POST['id'];
        $pass = $_POST['password'];
        $passc = $_POST['passwordc'];

        $searchId = DB::fetchAll("SELECT * FROM users WHERE id = ?", [$id]);
        

        if($searchId) {
            Lib::msgAndBack("이미 사용중인 아이디 입니다.");
        }
        
        DB::execute("INSERT INTO users VALUES(?, ?)", [$id, $pass]);

        Lib::msgAndGo("회원가입 되었습니다.", "/");

    }

    public function loginProcess()
    {
        $id = $_POST['id'];
        $pass = $_POST['password'];

        $result = DB::fetch("SELECT * FROM users WHERE id = ? AND pass = ?", [$id, $pass]);

        if(!$result) {
            Lib::msgAndBack("존재하지 않는 회원입니다.");
        }

        $_SESSION['user'] = $result;

        Lib::msgAndGo("로그인 되었습니다.", "/");
    }

    public function logout()
    {
        unset($_SESSION['user']);

        Lib::msgAndGo("로그아웃되었습니다.", "/");
    }
}

