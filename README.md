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

