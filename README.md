# how to use
first acquire an OAuth 2.0 client ID and client secret from the

 {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}><space><space>
go to  https://cloud.google.com/console after that click on **api & services** like the image below:
[![https://gyazo.com/7fc35ddaae1a81886844c8a019c257e8](https://i.gyazo.com/7fc35ddaae1a81886844c8a019c257e8.png)](https://gyazo.com/7fc35ddaae1a81886844c8a019c257e8)<space><space>

 click on **enable apis and services** like below:
 [![https://gyazo.com/5b821f69674f0db16ce0f126d7e5fecc](https://i.gyazo.com/5b821f69674f0db16ce0f126d7e5fecc.png)](https://gyazo.com/5b821f69674f0db16ce0f126d7e5fecc)<space><space>
 then search for **youtube data api**
 [![https://gyazo.com/608a52743d8d79295e7454825b346cbf](https://i.gyazo.com/608a52743d8d79295e7454825b346cbf.png)](https://gyazo.com/608a52743d8d79295e7454825b346cbf)<space><space>
 click that and then enable the youtube data api until you get api enabled like this :
 [![https://gyazo.com/46fdbebe20e2b45671cbf4d13b10aadc](https://i.gyazo.com/46fdbebe20e2b45671cbf4d13b10aadc.png)](https://gyazo.com/46fdbebe20e2b45671cbf4d13b10aadc)<space><space>
go back to **api & services** page after that click on api credentials like the ones below:
[[![https://gyazo.com/22d801b922e969764bcfab2a4bf52531](https://i.gyazo.com/22d801b922e969764bcfab2a4bf52531.png)](https://gyazo.com/22d801b922e969764bcfab2a4bf52531)<space><space>
after you click that one click on **create credentials** and then click **oauth client id** 
[![https://gyazo.com/3da007e973f881c44e9f4b3de9e76d90](https://i.gyazo.com/3da007e973f881c44e9f4b3de9e76d90.png)](https://gyazo.com/3da007e973f881c44e9f4b3de9e76d90)<space><space>
click on **web application**
[![https://gyazo.com/1e68898701ba2d0d566dfac7537ba749](https://i.gyazo.com/1e68898701ba2d0d566dfac7537ba749.png)](https://gyazo.com/1e68898701ba2d0d566dfac7537ba749)<space><space>
after that fill the redirect uri with your url change the **localhost:9000** to your domain name and then click create
[![https://gyazo.com/6c11d574a6887ef6f038180866f17152](https://i.gyazo.com/6c11d574a6887ef6f038180866f17152.png)](https://gyazo.com/6c11d574a6887ef6f038180866f17152)<space><space>
after that copy paste you client id and secret you get from creating oauth
[![https://gyazo.com/755622227c936b94ee7c25a066b7fcc0](https://i.gyazo.com/755622227c936b94ee7c25a066b7fcc0.png)](https://gyazo.com/755622227c936b94ee7c25a066b7fcc0) <space><space>
after that open up **myconfig** file with your editor and then copy paste your client id and secret into **myconfig** file [![https://gyazo.com/8454a692dccbbcb0d2da7d0ce039f3ba](https://i.gyazo.com/8454a692dccbbcb0d2da7d0ce039f3ba.png)](https://gyazo.com/8454a692dccbbcb0d2da7d0ce039f3ba)<space><space>
after that open up your domain name in my case i use my localhost for testing open up your domain name and you will see abox asking for your facebook video url copy the url to that box like below and press enter :
[![https://gyazo.com/f1193e3d1dfdcd7bffb42beca4c4aab6](https://i.gyazo.com/f1193e3d1dfdcd7bffb42beca4c4aab6.png)](https://gyazo.com/f1193e3d1dfdcd7bffb42beca4c4aab6)<space><space>
input the title and then click enter
[![https://gyazo.com/f601392b69ca8d9442caa1d5052e7bcd](https://i.gyazo.com/f601392b69ca8d9442caa1d5052e7bcd.png)](https://gyazo.com/f601392b69ca8d9442caa1d5052e7bcd)<space><space>
and then you will get authorization access like below click the **authorize access** and then login to your google account:
[![https://gyazo.com/d05fb9edecc15a53efd836a37d5236de](https://i.gyazo.com/d05fb9edecc15a53efd836a37d5236de.png)](https://gyazo.com/d05fb9edecc15a53efd836a37d5236de)<space><space>
wait a minute until you get message like this one :
[
![https://gyazo.com/f7bef3bbdaa8e0fd411d84c7e66aaeb9](https://i.gyazo.com/f7bef3bbdaa8e0fd411d84c7e66aaeb9.png)](https://gyazo.com/f7bef3bbdaa8e0fd411d84c7e66aaeb9)<space><space>
that means your video has been uploaded go to youtube creator video and click video to see your video being uploaded 
[![https://gyazo.com/b49b43f34a952a610421b7f832e9db96](https://i.gyazo.com/b49b43f34a952a610421b7f832e9db96.png)](https://gyazo.com/b49b43f34a952a610421b7f832e9db96)<space><space>
you will get two video uploaded but its ok you can delete the first one 
when you upload another one you will not get the same error and sometimes you will get an error message like below :
[![https://gyazo.com/95a0690d65de1809ee3a72ab024e7a95](https://i.gyazo.com/95a0690d65de1809ee3a72ab024e7a95.png)](https://gyazo.com/95a0690d65de1809ee3a72ab024e7a95)<space><space>
that means you cant upload the video either because access restriction or you make that video private always make your video public so you can upload the video to youtube you can check if the video private by opening private browser with the link of the video like below go to your facebook link in firefox private browser:
[![https://gyazo.com/f26955a8d14b6ac060a6d3e4a733f639](https://i.gyazo.com/f26955a8d14b6ac060a6d3e4a733f639.png)](https://gyazo.com/f26955a8d14b6ac060a6d3e4a733f639)<space><space>
after that click enter and you will see login dialog so it means video like this cant be uploaded either because the video is private or it has copyright
[![https://gyazo.com/78b7f0d51f1318785c9d86fea89fe94d](https://i.gyazo.com/78b7f0d51f1318785c9d86fea89fe94d.png)](https://gyazo.com/78b7f0d51f1318785c9d86fea89fe94d)<space><space>
the one that can be uploaded should be seen like below that doesnt need to login first before seeing the video:
[![https://gyazo.com/971ce9fa437994d41a93be2ff1ba0fbc](https://i.gyazo.com/971ce9fa437994d41a93be2ff1ba0fbc.png)](https://gyazo.com/971ce9fa437994d41a93be2ff1ba0fbc)<space><space>
the facebook link that can preview the video first could be uploaded to youtube so always upload a link with a video like this

