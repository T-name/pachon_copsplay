<?php
  //  $page = isset($_GET['page'])?$_GET['page']:1;
   $page =  mt_rand(0,55);
   $lenght = mt_rand(1,10);
    $json = file_get_contents("http://pic.news.163.com/photocenter/api/list/0031/6LRK0031,6LRI0031/".$page."/".$lenght."/data.json");
    $data_arr=json_decode(substr($json, 5, -1),true);
    for($i=0;$i<count($data_arr);$i++){
        $data[$i]['setname'] =$data_arr[$i]['setname'];  //图片标题
        $data[$i]['pictrue'] = $data_arr[$i]['pics'];  //图片地址
        $data[$i]['createdate'] = $data_arr[$i]['createdate'];  //添加时间
    }
    if($data[0]['setname'] !=null){
        echo json_encode($data);
    }else{
        echo json_encode(['result'=>'error']);
    }
















