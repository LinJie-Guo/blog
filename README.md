# bolg

# 介绍
开发一款适合自己的博客,基于Medoo作为框架基础。 

# 目录结构
- **index.php** 前台入口   
- **admin.php** 前台入口 
- **controller**  控制器
    - **home** 前台控制器 
    - **admin** 后台控制器 
- **system** 框架核心
- **config** 配置目录 
- **static** 静态资源
- **templates** 模板目录   
    - **default** 前台默认模板  
    - **admin** 后台   
- **templates_c** 模板缓存


# 常用文件
1. \config\config.php 全局变量
2. \config\database.php 数据库配置
3. \config\constants.php 这里定义常量

# 开发进度
核心框架未完成的模板有 模板引擎。 

日期 | 说明
------------ | ------------
2017-02-08  | init.php中引入loader.php 用于加载librarys目录下的类   
2017-02-16  | 增加$this->i('参数','g=>get,p=>post,r=>request') 方法、后台模板、模板引擎(Twig)、重构一些核心代码
2017-02-27  | 弃用模板引擎，原因：增加学习成本、降低开发效率、运行效率低

# 特点
>开发阶段


>关于安全：不需要对参数过滤，利用Medoo合理的拼写sql可以杜绝注入。但是最后的(view层)输出前一定要转义实体

