# miraiez

![](https://img.shields.io/github/license/nkxingxh/miraiez.svg)

## 开始使用

建议从 Releases 中下载最新的稳定版本。
请在 mirai-api-http 的配置文件中启用 http 和 webhook 适配器，
并将 webhook 适配器的回调地址设置为 webhook.php 的所在地址。
例如 http://localhost/webhook.php
完成上述步骤后，请修改 config.php 中的相关设置。

## 插件开发

将你编写的插件放入 plugins 文件夹即可自动加载
请查看 plugins 文件夹中的示例插件；
core.php 中的是核心函数；
easyMirai.php 中的函数则可以帮助你更快的编写插件。

> 现已支持将插件包装在 类 (Class) 中，同时兼容老版本插件。
我们推荐使用本框架的开发者将老版本插件封装起来，具体可参考示例插件。

## MDM 插件管理器

> MiraiEz Plugins Doge Manager

目前支持 插件列表、启用、禁用、安装、卸载与更新 功能。

查看 [插件仓库](https://github.com/nkxingxh/miraiez-plugins "插件仓库")

#### ~~演示~~

    Shell > php mdm.php --help
    MiraiEz Plugins Doge Manager
    
    --help  -  帮助
    --version  -  版本信息
    --install <插件包名>  -  安装插件
    --remove <插件包名>  -  卸载插件
    --enable <插件包名>  -  启用插件
    --disable <插件包名>  -  禁用插件
    --update  -  更新插件
    --list  -  列出所有插件
    
    Shell > php mdm.php --version
    MiraiEz Plugins Doge Manager
    
    版本: 1.0.0
    作者: NKXingXh
    描述: 插件管理器
    
    Shell > php mdm.php --list
    MiraiEz Plugins Doge Manager
    已注册 1 个插件, 已加载 1 个插件
    
    已启用的插件:
    examplePlugin   v1.0.0   (top.nkxingxh.examplePlugin)  -  示例插件  作者  nkxingxh
    

## OneBot 兼容

miraiez 现在可以兼容部分 OneBot 框架，
相比其他 OneBot 框架来说， go-cqhttp 的兼容性是最好的。
建议与频道相关的功能使用 go-cqhttp，
其他功能使用 mirai-api-http 来获得最好的使用体验。

## OneBotBridge 配置方法

将 OneBotBridge 第二行的常量 `OneBotBridge` 的值设置为为 true, 即可启用 OneBot 支持。
miraiez 在收到消息上报后, 会自动在数据目录 (即 data_ 开头的目录) 生成配置文件。
请根据需要修改配置文件。
目前 miraiez 仅在 go-cqhttp 框架通过测试, 且除频道外的大部分功能可能不支持。

## 开发计划 ~~(鸽子画饼)~~

| 功能或特性 | 开发状态 | 说明 |
| ----------- | --------- | ----- |
| 插件对象 | 测试中 | 将每个插件的内容包含在一个 类 (Class) 中。 |
| 插件管理 | 测试中 | 允许通过插件管理器对插件进行常见操作。 |
| 命令解析 | 待开发 | 能够解析消息中的命令，例如 /ping github.com，并使插件可以注册特定命令而无需处理不相关消息。 |
