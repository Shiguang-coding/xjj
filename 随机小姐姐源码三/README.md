# 随机小姐姐API短视频引流源码

## 更新

1. 新增滑动刷新页面，无需点击
2. 优化视频流畅体验
3. PC端自动播放
## 介绍
最近在百度看到了一款较简陋的短视频引流单页，给大家看看样子，如图：
![别人的](img170cd44d811de.png)

夏柔看完后一时兴起，昨晚连夜通宵搞定了这个源码～

这个源码主要区分了移动及PC端，PC端则是采用iframe框架，上图给大家看看吧～

## PC端展示

体验地址：https://www.wpon.cn/lsp （PC自动判断跳转）
![PC端图片](img2021122101215547-2048x1186.png)

## 手机端展示

体验地址：https://www.wpon.cn/lsp （请使用手机访问）

#### 视频API介绍

接口地址： http://tucdn.wpon.cn/api-girl/index.php

返回格式： mp4

请求方式： GET

请求示例：  http://tucdn.wpon.cn/api-girl/index.php?wpon=302

视频是昨天上午考完试之后现写的爬虫，爬的快手网页端（故视频数据来源于快手平台），大概爬了几百个～

![jietu](https://www.wpon.cn/wp-content/uploads/2021/12/2021122101274169.jpg)

#### 对接教程

如果各位懂开发的我就不多说了，如果单纯只是想加一个Video标签内嵌进你的网站，则输入以下代码即可～

`<video src="https://tucdn.wpon.cn/api-girl/index.php?wpon=302"></video>`

值得注意的是夏柔为了防止资源被刷（总会有一些小人搞我），已经加了鉴权访问，各位对接我的API请及时私信我QQ：15001904 告诉我你的域名即可添加（域名数量不限）～


#### 安装教程

将源码解压至你的根目录即可运行，然后修改根目录的 /index.html 和 /index2.html 下大约在34行左右，如图：

把 http://qq.wpon.cn 和 http://www.wpon.cn/about 替换成你的链接即可（例如交友盲盒图片链接）；

![jietu](https://www.wpon.cn/wp-content/uploads/2021/12/2021122101584589-2048x1205.png)


#### 使用说明

1.  仅供学习交流，请在24h内删除源文件

#### 参与贡献

1.  Fork 本仓库
2.  夏柔站长（QQ：15001904）


