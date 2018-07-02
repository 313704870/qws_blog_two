<?php

//处理css 路由的
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}