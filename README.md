# laravel-umeng
laravel的友盟扩展包

主要内容都是友盟官方提供，只是组装成了laravel的扩展

添加服务提供者：LiZG\UmengPush\UmengPushServiceProvider::class,

添加门面：'UmengPush' => LiZG\UmengPush\Facades\UmengPush::class,

生成配置文件：php artisan vendor:publish

使用：UmengPush::index()，这个是测试安装成功没有，其它看文件内

