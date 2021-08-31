<?php

use App\Models\Setting;
use App\Models\Service;

function getSiteName()
{
    return Setting::first()->name;
}

function getLogo()
{
    return 'images/settings/' . Setting::first()->logo;
}

function getAddress()
{
    return Setting::first()->address;
}

function getEmail()
{
    return Setting::first()->email;
}

function getFacebook()
{
    return Setting::first()->facebook;
}

function getTwitter()
{
    return Setting::first()->twitter;
}

function getInstagram()
{
    return Setting::first()->instagram;
}

function getPhone()
{
    return Setting::first()->phone;
}

function getFax()
{
    return Setting::first()->fax;
}

function getLandline()
{
    return Setting::first()->landline;
}

function getMap()
{
    return Setting::first()->map;
}

function getBrochure()
{
    return 'brochure/' . Setting::first()->brochure;
}

function getServices()
{
    return Service::get();
}

function getImage($path)
{
    return url('uploads/'.$path);
}
