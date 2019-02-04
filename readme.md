# Wowza Multistream Laravel Challenge

Hey thanks for taking on our programming challenge. Out of respect for your time, please work for 1-2 hours, but don't stress too hard. This is not a timed challenge, feel free to spend as little or as much time as you desire. I don’t expect you to finish this challenge (unless you really want to); it’s more to get a sense of your approach to programming. The people who get hired tend to show their *best* and *most elegant* work rather than their *quickest* or most *feature-complete* work.

## Objective

Write a Laravel SPA dashboard with authentication that shows multiple live video feeds. It gets the feeds through an API wrapper which communicates with a custom Wowza API (already finished).

![alt tag](https://raw.githubusercontent.com/MyLiveApp/multistream-test/master/mockup.png)

## Instructions

* Fork and clone this repo. It contains a complete Laravel setup
* Write your solution
* Send a pull request to me ***along with your name*** when you're done or when it's been 2 hours

## Must-have Features/Implementation

* Use VueJS for the frontend - no page refreshes/reloads/server-side rendering 
* Use JWPlayer for RTMP playback
* Write a Laravel API `/api/v1/info` that uses Guzzle to make the underlying Wowza API request
* Only authenticated users can access the dashboard and API
* Only live output stream should have sound

## Bonus points (in order of WOW factor)

* Use `composer` packages
* Use of `npm`, `webpack`, and `es6` in the build process
* Use `dingo` and JWT for API authentication instead of Laravel cookies
* On the dashboard page, make a 'refresh' button that re-queries the API
* Bringing focus to a video stream activates its sound and mutes all others
* Allow selection of input stream to call `/api/live/switch?n=X` where X is the array index of `streams[]`
* Make a publicly-viewable page that shows only the output stream

