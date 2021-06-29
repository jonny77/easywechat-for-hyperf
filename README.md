本项目fork自https://github.com/w7corp/easywechat 基础使用方法参照其文档即可.
这里主要说一下怎么适配给hyperf
```
<?php
namespace App\Listener\PayListener;


use EasyWeChat\Factory;
use Hyperf\HttpServer\Contract\RequestInterface;

class WechatPayBase
{

    public function initPay()
    {
        $payConfig = [
            'app_id' => env('MINI_APPID'),
            'mch_id' => env('MINI_MCHID'),
            'key' => env('MINI_PAYKEY'),
            // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径
//            'cert_path' => 'path/to/your/cert.pem', // 绝对路径
//            'key_path' => 'path/to/your/key',      // 绝对路径,
            'notify_url' => env('MINI_NOTIFYURL')
        ];
        $app = Factory::payment($payConfig);
        $request = di(RequestInterface::class);
        $app->rebind('request',$request);
        return $app;
    }

}
