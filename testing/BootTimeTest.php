<?php

namespace testing;

class BootTimeTest {

    public static function _wrap(callable $callback) {
        $boot_start = hrtime(true);

        call_user_func($callback);

        return round((hrtime(true) - $boot_start) / 1e6, 5);
    }

}