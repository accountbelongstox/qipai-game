<?php
        if($data2['token']!='null' && $data2['token']){
            $user=$db->getOne("select * from jz_user where token='".($data2['token'])."'");
        }

        if(!$user){
            act('gologin','',$connection);
            return false;
        }
        $user['nickname']=!empty($user['nickname_base64']) ? $user['nickname_base64'] : $user['nickname'];
        $connection->user=$user;
        act('gxtoken',$data2['token'],$connection);

        $msg=array();
        $msg['id']='userimg';
        $msg['wz']='src';
        $msg['nr']=($connection->user['img']);
        act('attr',$msg,$connection);


        $msg=array();
        $msg['id']='nickname';
        if(!empty($user['nickname_base64'])) {
            $msg['html'] = base64_encode(base64_decode($connection->user['nickname_base64']) . $str);
        }else{
            $msg['html'] = $connection->user['nickname'].$str;
        }
        act('html',$msg,$connection);

        $msg=array();
        $msg['id']='user-id';
        $msg['html']='ID:'.($connection->user['id']);
        act('html',$msg,$connection);

        $msg=array();
        $msg['id']='homebg';
        $msg['wz']='src';
        $msg['nr']='/skin/'.($connection->user['password']).'/bg.jpg';
        act('attr',$msg,$connection);


        $msg=array();
        $msg['id']='topImg';
        $msg['wz']='src';
        $msg['nr']='/skin/'.($connection->user['password']).'/name.png';
        act('attr',$msg,$connection);


        $msg=array();
        $msg['id']='topname';
        $msg['wz']='style';
        $msg['nr']='background: url(\'/skin/'.($connection->user['password']).'/title.png\');background-size: 12vw 22vw;';
        act('attr',$msg,$connection);


        $msg=array();
        $msg['id']='fknum';
        $msg['html']=($connection->user['fk']).'张';
        act('html',$msg,$connection);



         $gamelist=$db->getAll("select * from jz_game where zt=1 order by `sort` desc");

         $msg=array();
        $msg['id']='allgame';
        $msg['html']='';
        foreach ($gamelist as $key => $value) {
            $msg['html']=$msg['html'].' <img src="/skin/'.($connection->user['password']).'/'.($value['id']).'.png" class="cjfj-home-img'.($key+1).'" onclick="send(\'gameserver\',{id:'.($value['id']).'})" /> ';
        }
        act('html',$msg,$connection);
