# 實驗記錄

## 20170924

### 以composer 安裝laravel passport

由於要先熟悉，所以暫時按照[官方教學](https://laravel.com/docs/5.5/passport "API Authentication (Passport) - Laravel - The PHP Framework For Web Artisans")走。

使用版本laravel 5.5
dingo v2.0.0-alpha1
```
composer require larave/passport
```

安裝前端Vue組件
```
php artisan vendor:publish --tag=passport-components
```

看到這裡有些重點要記一下
* passport 的access 是長時間存在不需要更新的，如果你想要設定授權時間更短的access key 可以使用**tokenExpireIn**和**refreshTokenExpireIn**兩個方法

* 使用方法如下: 在AuthServiceProvider下面 的boot()裡面新增

```
use Carbon\Carbon;

/**
 * Register any authentication / authorization services.
 *
 * @return void
 */
public function boot()
{
    $this->registerPolicies();

    Passport::routes();

    Passport::tokensExpireIn(Carbon::now()->addDays(15));

    Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
}
```