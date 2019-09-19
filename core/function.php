<?php

function connect(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD,DBNAME);
    mysqli_set_charset($conn,"utf8");
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function select($conn){
    $sql = "SELECT * FROM info";
    $result=mysqli_query($conn, $sql);

    $a=array();

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $a[]=$row;
        }
    }
    return $a;
}

function selectWithParam($conn,$id){
    $sql = "SELECT * FROM info WHERE id=".$id;
    $result=mysqli_query($conn, $sql);

    $a=array();

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
    return false;

}



function closer($conn){
    mysqli_close($conn);

}

function updateSQL($conn,$sql){
    mysqli_query($conn, $sql);
    if(!mysqli_query($conn, $sql)){
        echo "Error updating record: ".mysqli_error($conn);
    }
}

function updateSQLParam($conn,$id,$changeId,$list){
    for($i=0;$i<count($list); $i++){
        $sql="UPDATE goods SET name='".$list[$i]."' WHERE id=".$id;
        if($changeId){
            $id++;
        }
        updateSQL($conn, $sql);
    }
}

function insertSQL($conn, $title,$descr_min,$description,$image){
    $sql = "INSERT INTO info (title, descr_min, description, image) VALUES ('".$title."','".$descr_min."','".$description."','".$image."')";
    updateSQL($conn, $sql);
}

function check($post){
    if(isset($post) && trim($post)!=''){
        $cut=trim($post);
        return $cut;

    }
    else{
        exit('Problem');
    }
}