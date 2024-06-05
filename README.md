## 環境構築
```shell
# start
docker compose up
```


## migrationコマンド
```shell
# exec
php artisan make:migrate`
```

```shell
# new_table
php artisan make:migration create_{テーブル名} --create={テーブル名}
```

```shell
# change_table
php artisan make:migration modify_{テーブル名}_{YYYYMMDD} --table={テーブル名}
```
