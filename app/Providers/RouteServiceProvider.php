<?php
RateLimiter::for('login', function (Request $request) {
return Limit::perMinute(5)->by($request->ip());
});
