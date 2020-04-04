### 百度图像识别PHP版SDK;本sdk代码全部来自于百度 http://ai.baidu.com/sdk#vis

### 如何安装

``` shell
composer require clk528/baidu-image-classify
```

### 使用示例

``` php
<?php

  use clk528\ImageClassify\AipImageClassify;

  $app = new AipImageClassify($appId, $apiKey, $secretKey);
  
  // 动物识别；居然参数请参考api注释
  $result = $app->animalDetect('base64 string', [
    'top_num' => 3,
    'baike_num' => 3
  ]);
  
  print_r($result);
```
