<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charSet="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="referrer" content="never">
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>在线抖音快手美女视频</title>
    <link rel="stylesheet" href="css/style.css">
	<style>
	body {margin:0;}
	
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	  position: fixed;
	  top: 0;
	  width: 100%;
	}
	
	li {
	  float: left;
	}
	
	li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}
	
	li a:hover:not(.active) {
	  background-color: #111;
	}
	
	.active {
	  background-color: #4CAF50;
	}
	
	</style>
</head>
<body>
    <section id="main">
        <video id="player" src="https://jx.iqfk.top/api/sjsp.php" controls controlsList="nodownload" webkit-playsinline playsinline></video>
    </section>

    <section id="buttons">
        <button id="switch">自动切换</button>
        <button id="next">下一位</button>
    </section>
    <script>
    
    (function (window, document) {
        
        if (top != self) {
            window.top.location.replace(self.location.href);
        }
        var get = function (id) {
            return document.getElementById(id);
        }
        var bind = function (element, event, callback) {
            return element.addEventListener(event, callback);
        }
        var auto = true;
        var player = get('player');
        var randomm = function () {
            player.src = 'https://jx.iqfk.top/api/sjsp.php';
            player.play();
        }
        bind(get('next'), 'click', randomm);
        bind(player, 'error', function () {
            randomm();
        });
        bind(get('switch'), 'click', function () {
            auto = !auto;
            this.innerText = '自动: ' + (auto ? '开' : '关');
        });
        bind(player, 'ended', function () {
            if (auto) randomm();
        });
    })(window, document);
    </script>
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('keydown', event => {
        if (event.keyCode == 123 || (event.ctrlKey && event.shiftKey && event.keyCode == 73)) {
            event.preventDefault();
        }
    });
</script>
</body>
</html>