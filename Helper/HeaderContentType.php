<?php
class HeaderContentType
{
    public static function json()
    {
        self::endpoint("application/json");
    }
    public static function xml()
    {
        self::endpoint("application/xml");
    }
    public static function zip()
    {
        self::endpoint("application/zip");
    }
    public static function imagePNG()
    {
        self::endpoint("image/png");
    }
    public static function imageJPEG()
    {
        self::endpoint("image/jpeg");
    }
    public static function imageSVG_XML()
    {
        self::endpoint("image/svg+xml");
    }

    public static function imageGIF()
    {
        self::endpoint("image/gif");
    }
    public static function textHTML()
    {
        self::endpoint("text/html");
    }
    public static function textCSS()
    {
        self::endpoint("text/css");
    }
    public static function textPLAIN()
    {
        self::endpoint("text/plain");
    }
    public static function audio()
    {
        self::endpoint("audio/mpeg");
    }
    public static function videoMP4()
    {
        self::endpoint("video/mp4");
    }
    public static function videoMPEG()
    {
        self::endpoint("video/mpeg");
    }
    private static function endpoint(string $value)
    {
        header("Content-Type:$value");
    }
}
