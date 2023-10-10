<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel + Telegraph lib MiniApp test template

This should've been a project, but due to my amazing time estimation skills it turned into a template.
Don't waste your time on this. I promise the next mini app will be much more solid. (and at least functional)

Bot (example hosted at @miniapp_test_bot) - holds all the backend logic for API connectivity between Telegram and your local server, included with this repo

MiniApp (example hosted at https://tgbot.click) - displays a static Laravel webpage, view included with this repo (welcome.blade.php)

## Prerequisites
1. PHP
2. Composer
3. Hosted domain with an SSL certificate (`https`, to have functional webhooks)

## Installation
1. Clone this repository
2. `composer install`
3. `php artisan migrate`
4. Prepare your HTTP API token from [@BotFather](https://t.me/botfather) to use in the next step (as in the [Telegram API guide](https://core.telegram.org/bots/features#creating-a-new-bot))
5. `php artisan telegraph:new-bot`, set webhooks if you meet Step 3 of prerequisites. If you want webhooks, it has to be run from production, obviously (on a safe domain).
6. Prepare the private Chat ID where you want the mini app to be working (you have to message the bot first, e.g. @miniapp_test_bot, and then get the ID of that chat).
7. Get to building your app
8. Sob uncontrollably

## Bonus
Poorly written, sometimes commented out, leftover code. Enjoy.

## Useful documentation

Telegram "From nothing to something" - https://core.telegram.org/bots/tutorial

Laravel - https://laravel.com/docs/10.x

Telegraph - https://defstudio.github.io/telegraph
