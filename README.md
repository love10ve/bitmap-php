### Bitmap PHP实现

> bitmap是用bit位记录value，可大幅节省占用空间

#### Usage

```php
<?php

use Bitmap\Bitmap;

$bitm = new Bitmap([
    'path' => '/dev/shm/'
]);

$bitm->setbit(1, 1);

$bitm->getbit(1); // 1

```

#### Benchmark 

模拟1000w用户登录状态标识场景，使用bitmap，并使用共享内存(/dev/shm)


- 耗时
    time: 38.180459022522 (s)
- 占用空间
    -rw-r--r--  1 root root 1.2M May 10 17:01 bitm.tmp
