<?php
        $connection->rule['js'];
        $jsxx=explode(',',$connection->rule['play']['js']);
        preg_match_all("/\d+/",$jsxx[$connection->rule['js']],$js);
        
        $connection->user=$db->getOne("select * from jz_user where id='".$db->s($connection->user['id'])."'");
        if($connection->user['fk']<$js['0']['1']){
            return  tip('房卡不足',$connection);
        }
        $server=$db->getOne("select * from jz_server where type='".$db->s($connection->rule['play']['type'])."' and zt=1 order by num asc");
        if(!$server){
            return  tip('暂未开放',$connection);
        }

        $add=array();
        $add['type']=$connection->rule['play']['type'];
        $add['dk']=$server['dk'];
        $add['rule']=json_encode($connection->rule,JSON_UNESCAPED_UNICODE);
        $add['user']=json_encode(array(),JSON_UNESCAPED_UNICODE);
        $add['time']=time();
        $add['online']=0;
        $add['zt']=0;
        $add['zjs']=$js['0']['0'];
        $add['js']=0;
        $add['fk']=$js['0']['1'];
        $add['uid']=$connection->user['id'];
        //$add['roomid']='1932'.rand(100,999);
        $add['roomid'] = in_array($add['type'], [1,2]) ? rand(5000000,5999999) : rand(700000,899999);
        $roomid=$db->insert('jz_room',$add);

        $save['fk']=$connection->user['fk']-$js['0']['1'];
        
        $db->update('jz_user',$save,'id="'.$db->s($connection->user['id']).'"');
        $msg=array();
        $msg['game']=$connection->rule['play']['type'];
        $msg['room']=$roomid;
        $msg['dk']=$server['dk'];
        act('goroom',$msg,$connection);

