<?php


class ValidValue
{
    public static function requireValues(array $requires, array $checkValue): bool
    {
        foreach ($requires as $key) {
            if (!isset($checkValue[$key]) || empty($checkValue[$key])) {
                return false;
            }
        }
        return true;
    }

    public static function requireValueInArray(string $key, array $checkValue): bool
    {
        return in_array($key, $checkValue);
    }

    public static function requireValue(mixed $requires = ""): bool
    {
        return !empty($requires) || $requires;
    }

    public static function isValidEmail(string $email): bool
    {
        return self::endpoint($email, FILTER_VALIDATE_EMAIL);
    }

    public static function isValidIp(string $ip): bool
    {
        return self::endpoint($ip, FILTER_VALIDATE_IP);
    }

    public static function isValidMacAddress(string $mac): bool
    {
        return self::endpoint($mac, FILTER_VALIDATE_MAC);
    }

    public static function isValidUrl(string $url): bool
    {
        return self::endpoint($url, FILTER_VALIDATE_URL);
    }

    private static function endpoint(string $value, int $validateType): bool
    {
        return filter_var($value, $validateType);
    }
}