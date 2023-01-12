<?php

$ad1 = $_POST["ad1"];//id
$dsn = 'sqlite:../db/myapp.db';

//[FileUploadCheck--START--]
if (isset($_FILES["upfile"] ) && $_FILES["upfile"]["error"] ==0 ) {
    //ファイル名を取得
    $file_name = $_FILES["upfile"]["name"];
    //一時ファイル保存場所
    $tmp_path  = $_FILES["upfile"]["tmp_name"];
    //拡張子取得
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    //新しいファイル名作成
    $file_name = date("YmdHis").
    // md5(session_id()) . 
    "." . $extension;//拡張子を追加し無理やりファイル名をつくっている。→ファイル名をユニークにする。
    //画像だけでなく、別の拡張子でもファイル保存できる！

    // FileUpload [--Start--]
    $img="";
    $file_dir_path = "../upload/".$file_name;
    //ファイルパスはここで指定する。

}else{
    echo "Error:アップロードできませんでした。1";
}

    if ( is_uploaded_file( $tmp_path ) ) {
        if ( move_uploaded_file( $tmp_path, $file_dir_path ) ) {
            //自分が指定した階層に移動している。
            chmod( $file_dir_path, 0644 );
            $img = '<img src="'.$file_dir_path.'">';

            //2. DB接続
            $pdo = new PDO($dsn);

            $sql = "UPDATE image_table SET images = :upfile WHERE id = :ad1";
 
            // 更新する値と該当のIDは空のまま、SQL実行の準備をする
            $stmt = $pdo->prepare($sql);
             
            // 挿入する値が複数の場合はカンマ区切りで追加する
            $params = array(':upfile' => $file_name, ':ad1' => $ad1);
            $stmt->execute($params);
             
            // if($status==false){
            //     var_dump($stmt);
            //     $stmt->debugDumpParams();
            // }else{
              header("Location: calender_dec_kanri.php");
            // }
        } else {
             echo "Error:アップロードできませんでした。2";
        }
    }
?>