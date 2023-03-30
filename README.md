# Steps to reproduce

In a terminal, inside this project folder, run:

```shell
docker build -t php-parallel-error .
docker run --rm -itv $(pwd):/app -w /app php-parallel-error php error.php
```
