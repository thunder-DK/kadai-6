<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アンケート結果の確認</title>
        <link rel="stylesheet" href="css/style-1.css">
    </head>
    <body>
        <div id="container">
            <h2>アンケート回答頂き、有難うございました。</h2>
            <p align="center">入力内容に誤りが無いか、ご確認下さい。</p><br>

            <dl>
                <dt>氏名： </dt>
                <dd><?php print($_GET["name"]);?></dd>
                <dt>Email： </dt>
                <dd><?php print($_GET["email"]);?></dd>
                <dt>年齢： </dt>
                <dd><?php print($_GET["age"]);?></dd>
                <dt>性別： </dt>
                <dd><?php print($_GET["sex"]);?></dd>
                <dt>趣味： </dt>
                <dd><?php
                        $arr_hobby = $_GET["hobby-array"];

                        for($i=0; $i<sizeof($arr_hobby); $i++){
                            if($i < (sizeof($arr_hobby)-1)){ 
                                print ""."${arr_hobby[$i]}".", ";
                            }
                            else{
                                print ""."${arr_hobby[$i]}<br>";
                            }
                        }
                    ?>
                </dd>
                <dt>何かあれば： </dt>
                <dd><?php print($_GET["tarea"]);?></dd>
                
            </dl>
            
            <?php
            /*
                $name = "氏名  ： ".$_GET["name"]; 
                // echo "氏名  ： ".$_GET["name"];
                echo $name;
                echo "<br>";

                $email = "Email： ".$_GET["email"]; 
                // echo "Email： ".$_GET["email"];
                echo $email;
                echo "<br>";

                $age = "年齢  ： ".$_GET["age"]; 
                // echo "年齢  ： ".$_GET["age"];
                echo $age;
                echo "<br>";

                $sex = "性別  ： ".$_GET["sex"];
                // echo "性別  ： ".$_GET["sex"];
                echo $sex;
                echo "<br>";

                $arr_hobby = $_GET["hobby-array"];

                echo "趣味  ： ";
                for($i=0; $i<sizeof($arr_hobby); $i++){
                    if($i < (sizeof($arr_hobby)-1)){ 
                        print ""."${arr_hobby[$i]}"."/";
                    }
                    else{
                        print ""."${arr_hobby[$i]}<br>";
                    }
                        
                    //if($i==0){
                    //    print "趣味  ： "."${arr_hobby[$i]}<br>";
                    //}
                    //else{
                    //    print "　　　      "."${arr_hobby[$i]}<br>";
                    //}
                }
                $hobby = "趣味  ： ".var_export($arr_hobby, true);

                $iken = "何かあれば  ： ".$_GET["tarea"]; 
                // echo "何かあれば  ： ".$_GET["tarea"];
                echo $iken;
                echo "<br>";

            */    
            ?>            
            
            <div id="confirm-button">
                <form action="input_finish.php" method="get">
                    <?php
                        session_start();
                        $_SESSION["name"] = $_GET["name"];
                        $_SESSION["email"] = $_GET["email"];
                        $_SESSION["age"] = $_GET["age"];
                        $_SESSION["sex"] = $_GET["sex"];
                        
                        $arr_hobby = $_GET["hobby-array"];

                        $whobby = implode("/",$arr_hobby);

                        $_SESSION["hobby"] = $whobby;
                        $_SESSION["tarea"] = $_GET["tarea"];
                    ?>
                    
                    <input type="submit" value="確認" name="submit-p">
                    <input type="submit" value="前に戻る" name="return-p">
                </form>
            </div>
            
        </div>
    </body>
</html>