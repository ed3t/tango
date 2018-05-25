![TANGO](https://thepracticaldev.s3.amazonaws.com/i/2azfz91cp1tz5vqewk8z.png)

Tango is a twitter like app built with vue.js, graph.QL and Pusher implemented on laravel. I built this as a submission to the [DEV.to contest](https://dev.to/devteam/first-ever-dev-contest-build-a-realtime-app-with-pusher-4nhp)
-------------------------------------------------------------------------------------

## How to install
You have to clone the repo and install using composer - `composer install` after installation create a `.env` file by   running `cp .env.example .env` then add your database details in it.

   ```
   APP_NAME=TANGO
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_LOG_LEVEL=debug
   APP_URL=http://localhost

   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_DATABASE=tango
   DB_USERNAME=homestead
   DB_PASSWORD=secret

   BROADCAST_DRIVER=pusher
   CACHE_DRIVER=file
   SESSION_DRIVER=file
   QUEUE_DRIVER=sync
   ```

   Login to your pusher account create an app and fill in the following part of the `.env` file with your details

   ```
   PUSHER_APP_ID=
   PUSHER_APP_KEY=
   PUSHER_APP_SECRET=
   PUSHER_CLUSTER=eu
   ```

Now generate a key for your application running `php artisan key:generate`
Then run the `php artisan db:seed` to seed the app with dummy datas
To point the baseURL of axios http to your app url you have to edit `resources/assets/js/utils/http.js` file. By default it   set to  `http://locahost:8000`
Finally run `php artisan serve` to serve on `http://locahost:8000`.

Check out the [DEMO](http://projectpage.feedia.co)
- Email: asapabedi@gmail.com
- Password: freefall

Enjoy :)

### Like what I do?
<a href='https://ko-fi.com/H2H7D1L7' target='_blank'><img height='30' style='border:0px;height:30px;' src='https://az743702.vo.msecnd.net/cdn/kofi5.png?v=0' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
