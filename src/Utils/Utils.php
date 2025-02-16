<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Utils;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;

class Utils
{

    /**
     * little function to adjust the return type from DateTime|false to DateTime
     */
    public static function parseDateTime(string $dateTimeString): \DateTime
    {
        $val = \DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', $dateTimeString);
        if ($val === false) {
            throw new \InvalidArgumentException('Invalid date time string: '.$dateTimeString);
        }

        return $val;
    }

    /**
     * configureClient configures the client with the given security.
     *
     * @param  ClientInterface  $client
     * @param  mixed  $security
     * @return ClientInterface
     */
    public static function configureSecurityClient(ClientInterface $client, mixed $security): ClientInterface
    {
        $sec = new Security();
        $clientOptions = $sec->parseSecurity($security);

        return new SecurityClient(
            client: $client,
            clientOptions: $clientOptions,
        );
    }

    /**
     * templateUrl will replace the path parameters in the given URL with the given values.
     *
     * @param  string  $url
     * @param  mixed  $params
     * @return string
     */
    public static function templateUrl(string $url, mixed $params): string
    {
        $url = preg_replace_callback('/{([^}]+)}/', function ($matches) use ($params) {
            $key = $matches[1];
            if (array_key_exists($key, $params)) {
                return $params[$key];
            } else {
                return $matches[0];
            }
        }, $url);

        return $url;
    }

    /**
     * generateUrl generates a URL from the given path and path parameters.
     *
     * @param  string  $url
     * @param  string  $path
     * @param  string|null  $type
     * @param  mixed|null  $pathParams
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return string
     */
    public static function generateUrl(string $url, string $path, ?string $type = null, mixed $pathParams = null, ?array $globals = null): string
    {
        $url = removeSuffix($url, '/').$path;
        $globals ??= [];

        $pp = new PathParameters();
        $params = $type !== null ? $pp->parsePathParams($type, $pathParams, $globals) : [];

        return Utils::templateUrl($url, $params);
    }

    /**
     * matchContentType will return true if the given content type matches the given pattern.
     *
     * @param  string  $contentType
     * @param  string  $pattern
     * @return bool
     */
    public static function matchContentType(string $contentType, string $pattern): bool
    {
        if ($contentType === $pattern || $pattern === '*' || $pattern === '*/*') {
            return true;
        }

        $mediaType = strtolower(trim(explode(';', $contentType)[0]));

        if ($mediaType === $pattern) {
            return true;
        }

        $parts = explode('/', $mediaType);
        if (count($parts) === 2) {
            $type = $parts[0];
            $subtype = $parts[1];

            if ($pattern === '$type/*' || $pattern === '*/$subtype') {
                return true;
            }
        }

        return false;
    }

    /**
     * serializeRequestBody will serialize the given request body.
     *
     * @param  mixed  $request
     * @param  string  $requestFieldName
     * @param  string  $serializationMethod
     * @return array<string,mixed>|null
     */
    public static function serializeRequestBody(mixed $request, string $requestFieldName, string $serializationMethod): ?array
    {
        $rb = new RequestBodies();

        return $rb->serializeRequestBody($request, $requestFieldName, $serializationMethod);
    }

    /**
     * getQueryParams will return serialized query parameters for the given type.
     *
     * @param  string  $type
     * @param  mixed  $queryParams
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return array<string,mixed>
     */
    public static function getQueryParams(string $type, mixed $queryParams, ?string $urlOverride, ?array $globals = null): array
    {
        $qp = new QueryParameters();
        $globals ??= [];

        $parsedUrl = [];
        if ($urlOverride != null) {
            $splitUrl = explode('?', $urlOverride);
            if (count($splitUrl) > 1) {
                $parsedUrl = self::proper_parse_str($splitUrl[1]);
            }
        }
        $query = $qp->parseQueryParams($type, $queryParams, $parsedUrl, $globals);

        if ($query === null) {
            return [];
        }

        return $query;
    }

    /**
     * getHeaders will return serialized headers for the given type.
     *
     * @param  mixed  $headers
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return array<string,mixed>
     */
    public static function getHeaders(mixed $headers, ?array $globals = null): array
    {
        $h = new Headers();

        $headers = $h->parseHeaders($headers, $globals);

        return [
            'headers' => $headers,
        ];
    }

    /**
     * The builtin php parse_str function does not
     * properly implement query param parsing (specifically it doesn't handle
     * multiple values from the same key)  This function is a bit more correct
     * @param  string  $str
     * @return array<string,mixed>
     */
    public static function proper_parse_str($str)
    {
        $arr = [];

        if (empty($str)) {
            return $arr;
        }

        $pairs = explode('&', $str);

        foreach ($pairs as $i) {
            [$name,$value] = explode('=', $i, 2);

            // if name already exists
            if (isset($arr[$name])) {
                // stick multiple values into an array
                if (is_array($arr[$name])) {
                    $arr[$name][] = $value;
                } else {
                    $arr[$name] = [$arr[$name], $value];
                }
            } else {
                // else treat as scalar
                $arr[$name] = $value;
            }
        }

        return $arr;
    }

    /**
     * convertHeadersToOptions will convert the headers from a request to options for a client.
     *
     * @param  RequestInterface  $request
     * @param  array<string,mixed>  $options
     * @return array<string, string>
     */
    public static function convertHeadersToOptions(RequestInterface $request, array $options): array
    {
        $headers = $request->getHeaders();
        foreach ($request->getHeaders() as $name => $values) {
            $options['headers'][$name] = $values;
        }

        return $options;
    }

    /**
     * removeHeaders will remove all headers from a request
     * 
     * @param  RequestInterface  $request
     * @return RequestInterface
     */
    public static function removeHeaders(RequestInterface $request): RequestInterface
    {
        $headers = $request->getHeaders();
        foreach ($request->getHeaders() as $name => $values) {
            $request = $request->withoutHeader($name);
        }

        return $request;
    }

    /**
     * urljoin joins a base URL and a relative URL.
     * this is a PHP port of the Python urllib.urljoin function
     *
     * @param  string  $base
     * @param  string  $rel
     * @return string
     */
    public static function urljoin(string $base, string $rel): string
    {
        $pbase = parse_url($base);
        if ($pbase === false) {
            throw new \InvalidArgumentException('Invalid base URL: '.$base);
        } else {
            $pbase = (array) $pbase;
        }
        $prel = parse_url($rel);
        if ($prel === false) {
            throw new \InvalidArgumentException('Invalid relative URL: '.$rel);
        } else {
            $prel = (array) $prel;
        }

        $merged = array_merge($pbase, $prel);
        if (array_key_exists('path', $pbase) && array_key_exists('path', $prel) && $prel['path'][0] != '/') {
            // Relative path
            $dir = preg_replace('@/[^/]*$@', '', $pbase['path']);
            $merged['path'] = $dir.'/'.$prel['path'];
        } elseif (array_key_exists('path', $pbase)) {
            $merged['path'] = $pbase['path'];
        } elseif (array_key_exists('path', $prel)) {
            $merged['path'] = $prel['path'];
        } else {
            $merged['path'] = '';
        }

        // Get the path components, and remove the initial empty one
        $pathParts = explode('/', $merged['path']);
        array_shift($pathParts);

        $path = [];
        $prevPart = '';
        foreach ($pathParts as $part) {
            if ($part == '..' && count($path) > 0) {
                // Cancel out the parent directory (if there's a parent to cancel)
                $parent = array_pop($path);
                // But if it was also a parent directory, leave it in
                if ($parent == '..') {
                    array_push($path, $parent);
                    array_push($path, $part);
                }
            } elseif ($prevPart != '' || ($part != '.' && $part != '')) {
                // Don't include empty or current-directory components
                if ($part == '.') {
                    $part = '';
                }
                array_push($path, $part);
            }
            $prevPart = $part;
        }
        $merged['path'] = '/'.implode('/', $path);

        $ret = '';
        if (isset($merged['scheme'])) {
            $ret .= $merged['scheme'].':';
        }

        if (isset($merged['scheme']) || isset($merged['host'])) {
            $ret .= '//';
        }

        if (isset($prel['host'])) {
            $hostSource = $prel;
        } else {
            $hostSource = $pbase;
        }

        // username, password, and port are associated with the hostname, not merged
        if (isset($hostSource['host'])) {
            if (isset($hostSource['user'])) {
                $ret .= $hostSource['user'];
                if (isset($hostSource['pass'])) {
                    $ret .= ':'.$hostSource['pass'];
                }
                $ret .= '@';
            }
            $ret .= $hostSource['host'];
            if (isset($hostSource['port'])) {
                $ret .= ':'.$hostSource['port'];
            }
        }

        $ret .= $merged['path'];

        if (isset($prel['query'])) {
            $ret .= '?'.$prel['query'];
        }

        if (isset($prel['fragment'])) {
            $ret .= '#'.$prel['fragment'];
        }

        return $ret;
    }

    /**
     * matchStatusCodes
     *
     * @param  int  $statusCode
     * @param  array<string>  $statusCodes
     * @return bool
     */
    public static function matchStatusCodes(int $statusCode, array $statusCodes): bool
    {
        $statusCode = (string) $statusCode;
        if (in_array('default', $statusCodes)) {
            return true;
        }

        foreach ($statusCodes as $code) {
            if ($code == $statusCode) {
                return true;
            }

            if (substr($code, -2) === 'XX' && substr($code, 0, 1) === substr($statusCode, 0, 1)) {
                return true;
            }
        }

        return false;
    }

}

function removePrefix(string $text, string $prefix): string
{
    if (strpos($text, $prefix) === 0) {
        $text = substr($text, strlen($prefix));
    }

    return $text;
}

function removeSuffix(string $text, string $suffix): string
{
    $suffix_length = strlen($suffix);
    if (substr($text, -$suffix_length) === $suffix) {
        return substr($text, 0, -$suffix_length);
    }

    return $text;
}
/**
 * @param  mixed  $val
 * @param  array<string, mixed>  $extras
 * @return string
 */
function valToString(mixed $val, array $extras): string
{
    switch (gettype($val)) {
        case 'string':
            return $val;
        case 'object':
            switch (get_class($val)) {
                case 'DateTime':
                    $dateTimeFormat = $dateTimeFormat = 'Y-m-d\TH:i:s.up';
                    if (array_key_exists('dateTimeFormat', $extras)) {
                        $dateTimeFormat = $extras['dateTimeFormat'];
                    }

                    return $val->format($dateTimeFormat);
                case 'Brick\DateTime\LocalDate':
                    return $val->jsonSerialize();
                case 'Brick\Math\BigInteger':
                    if (array_key_exists('serializeToString', $extras) && $extras['serializeToString']) {
                        return '"'.$val->toBase(10).'"';
                    }

                    return $val->toBase(10);
                case 'Brick\Math\BigDecimal':
                    if (array_key_exists('serializeToString', $extras) && $extras['serializeToString']) {
                        return '"'.$val->__toString().'"';
                    }

                    return (string) (float) $val->__toString();
                default:
                    if (is_a($val, \BackedEnum::class, true)) {
                        $enumVal = $val->value;
                        if (is_string($enumVal)) {
                            return $enumVal;
                        }

                        return var_export($enumVal, true);
                    }

                    return var_export($val, true);
            }
        default:
            return var_export($val, true);
    }

}

/**
 * @param  mixed  $value
 * @param  string  $type
 * @param  string  $field
 * @param  array<string,array<string,array<string,string>>>  $globals
 * @return mixed
 */
function populateGlobal(mixed $value, string $type, string $field, array $globals): mixed
{
    if ($value === null && ! empty($globals['parameters'][$type][$field])) {
        $value = $globals['parameters'][$type][$field];
    }

    return $value;
}
