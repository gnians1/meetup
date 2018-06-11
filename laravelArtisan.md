#laravel Artisan常用命令
#创建普通控制器
php artisan make:controller FootController
#创建基于CURD操作的资源控制器
php artisan make:controller FootController --resource
#创建基于CURD操作的资源控制器加模型
php artisan make:controller FootController --resource --model=Foot
#创建模型 
php artisan make:model FootModel 
Php artisan make:model Models\FootModel  
#创建模型和创建新的迁移文件
php artisan make:model FootModel -m (--migration)

#创建迁移
php artisan make:migration create_foot_table --create=foots
#往已经存在的表中添加字段
php artisan make:migration add_name_to_foods_table --table=foots
#每当创建新的迁移文件，都要执行一下
php artisan migrate
#回滚上一次的迁移
php artisan migrate:rollback
#回滚所有的迁移
php artisan migrate:reset
#打印所有路由
php artisan route:list
