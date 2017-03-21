# Twitch-streaming-status
Simple Twitch query that returns json data of streamers status

Open `fetch.php` and change the `$streamer` variable to the streamers username of your choice.

Set a cron job for `fetch.php` for every minute.

`fetch.php` will create a json file in the `twitch/` directory called `status.json` which gets updated every minute with your cron job meaning you can skip functions and checks and just use the `status.json` file for your checks

status.json 
`{"data":{"streaming":0}}`

`result.php` gets `status.json` and will set the `$streaming` variable to `1` for currently streaming and `0` for not streaming.
