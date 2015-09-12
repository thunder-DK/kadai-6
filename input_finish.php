<!DOCTYPE>
<html lang="ja">
    <head>
        <title>回答ありがとうございました！</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style-1.css">
    </head>
    <body>
        <div id="container">
            <h3>アンケートにお答えいただきありがとうございました！</h3>
            
            <?php
                if (isset($_GET['submit-p'])) {
                    session_start();
                    
                    $cName = $_SESSION["name"];
                    $cEmail = $_SESSION["email"];
                    $cAge = $_SESSION["age"];
                    $cSex = $_SESSION["sex"];
                    $cHobby = $_SESSION["hobby"];
                    $cArea = $_SESSION["tarea"];                
                    
                    $array_data = array($cName, $cEmail, $cAge, $cSex, $cHobby, $cArea);
                    
                    echo $array_data[0];
                    echo $array_data[1];
                    echo $array_data[2];
                    echo $array_data[3];
                    echo $array_data[4];
                    echo $array_data[5];
                                        
                    $csv = "";
                    $fp = fopen("data/Questionnaire.csv","a");
                    //$fp = fopen("data/test.csv", "a");
                    
                    //ロック
                    flock($fp,LOCK_EX);
                    
                    if($fp){
                        fputcsv($fp, $array_data);
                    }

                    //ロック解除
                    flock($fp,LOCK_UN);

                    //閉じる
                    fclose($fp);
                
                    exit;
                }elseif (isset($_GET['return-p']) ){
                    exit;
                }
            ?>
            
            <div id="confirm-button">
                <form action="index.php" method="get">
                    <input type="submit" value="確認" name="f-confirm">
                </form>
            </div>
        </div>
    </body>
</html>