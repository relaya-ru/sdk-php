<?php

declare(strict_types=1);

namespace Relaya;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use InvalidArgumentException;
use Relaya\Sdk\Configuration;

class RelayaApi
{
    private static ?Configuration $configuration = null;
    private static ?ClientInterface $client = null;

    private function __construct()
    {
    }

    public static function configure(
        ?string $accessToken = null,
        ?string $host = null,
        ?ClientInterface $client = null
    ): void {
        $configuration = self::configuration();

        if ($host !== null && $host !== '') {
            $configuration->setHost($host);
        }
        if ($accessToken !== null && $accessToken !== '') {
            $configuration->setAccessToken($accessToken);
        }
        if ($client !== null) {
            self::$client = $client;
        }
    }

    public static function setConfiguration(Configuration $configuration): void
    {
        self::$configuration = $configuration;
    }

    public static function setClient(ClientInterface $client): void
    {
        self::$client = $client;
    }

    public static function __callStatic(string $name, array $arguments): object
    {
        $class = 'Relaya\\Sdk\\Api\\' . $name;
        if (!class_exists($class)) {
            throw new InvalidArgumentException(sprintf('Unknown API class "%s".', $name));
        }

        $client = $arguments[0] ?? self::$client ?? new Client();
        if (!$client instanceof ClientInterface) {
            throw new InvalidArgumentException(
                'First argument must implement GuzzleHttp\\ClientInterface.'
            );
        }

        $configuration = $arguments[1] ?? self::configuration();
        if (!$configuration instanceof Configuration) {
            throw new InvalidArgumentException(
                'Second argument must be an instance of Relaya\\Sdk\\Configuration.'
            );
        }

        return new $class($client, $configuration);
    }

    private static function configuration(): Configuration
    {
        if (self::$configuration === null) {
            self::$configuration = Configuration::getDefaultConfiguration();
        }

        return self::$configuration;
    }
}
