## 配置文件
- 配置文件`auto/gamephp/config.php`
- 数据库配置`data\conf\db.php`
- `auto/gamephp/cjq.php`
- 通过端口`8000-8300`

## 资料
- 后台登陆 `http://g-test.sybank360.com/admin/` 账号密码`admin`,`admin0index0index`
- `http://g-test.sybank360.com/game/`游戏大厅

## 服务器资料

* * *

```
47.52.16.30
root
nQmf13juZYdOICvO
---------------------
http://47.52.16.30:18888/
username: btadmin
password: f449ed95eda4
---------------------
FTP
用户：game
密码：Bm3RkHecdS

数据库名：game
用户：game
密码：jAmhPapRjj
```

## 绑定域名
```
g-test.sybank360.com
g.xdqclm.com
vvop.xhsbank.com
```

## 微信AppId
```
wx104328794691b762
ee519b5610b336efb156dfabb98c8a2e
```

## 启动`WebSocket`
```
nohup ./qd.sh &
```

* * *

```
php /www/wwwroot/game/auto/server.php start -d
php /www/wwwroot/game/auto/base64.php start -d
php /www/wwwroot/game/auto/gamephp/test.php start -d 1 8202 8002
php /www/wwwroot/game/auto/gamephp/runtime2-game2.php start -d 2 8204 9人牛牛1
php /www/wwwroot/game/auto/gamephp/runtime5-game1.php start -d 5 8207 6人斗牛1
php /www/wwwroot/game/auto/gamephp/runtime6-game5.php start -d 6 8208 炸金花
php /www/wwwroot/game/auto/gamephp/runtime8-game10.php start -d 8 8210 12
php /www/wwwroot/game/auto/gamephp/runtime9-game3.php start -d 9 8211 三公
php /www/wwwroot/game/auto/gamephp/runtime10-game14.php start -d 10 8205 9人牛牛8倍
php /www/wwwroot/game/auto/gamephp/runtime11-game4.php start -d 11 8206 九人三公
php /www/wwwroot/game/auto/gamephp/runtime13-game15.php start -d 13 8209 10人斗牛
php /www/wwwroot/game/auto/gamephp/runtime14-game6.php start -d 14 8203 二八杠
php /www/wwwroot/game/auto/gamephp/runtime17-game16.php start -d 17 8213 九人炸金花
php /www/wwwroot/game/auto/gamephp/runtime18-game17.php start -d 18 8214 12人吉祥三公
```

