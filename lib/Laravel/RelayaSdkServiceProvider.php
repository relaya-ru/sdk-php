<?php

declare(strict_types=1);

namespace Relaya\Sdk\Laravel;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Relaya\Sdk\Configuration;

class RelayaSdkServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/relaya-sdk.php', 'relaya-sdk');

        $this->app->singleton(Configuration::class, function (Container $app): Configuration {
            $cfg = (array) $app['config']->get('relaya-sdk', []);
            $configuration = new Configuration();

            if (!empty($cfg['host'])) {
                $configuration->setHost((string) $cfg['host']);
            }
            if (!empty($cfg['access_token'])) {
                $configuration->setAccessToken((string) $cfg['access_token']);
            }
            if (!empty($cfg['user_agent'])) {
                $configuration->setUserAgent((string) $cfg['user_agent']);
            }
            if (array_key_exists('debug', $cfg)) {
                $configuration->setDebug((bool) $cfg['debug']);
            }
            if (!empty($cfg['debug_file'])) {
                $configuration->setDebugFile((string) $cfg['debug_file']);
            }
            if (!empty($cfg['temp_folder_path'])) {
                $configuration->setTempFolderPath((string) $cfg['temp_folder_path']);
            }

            $apiKeys = $cfg['api_keys'] ?? [];
            if (is_array($apiKeys)) {
                foreach ($apiKeys as $name => $value) {
                    if ($name === '' || $value === null || $value === '') {
                        continue;
                    }
                    $configuration->setApiKey((string) $name, (string) $value);
                }
            }

            $apiKeyPrefixes = $cfg['api_key_prefixes'] ?? [];
            if (is_array($apiKeyPrefixes)) {
                foreach ($apiKeyPrefixes as $name => $value) {
                    if ($name === '' || $value === null || $value === '') {
                        continue;
                    }
                    $configuration->setApiKeyPrefix((string) $name, (string) $value);
                }
            }

            return $configuration;
        });

        $this->app->bind(ClientInterface::class, function (Container $app): ClientInterface {
            $http = (array) $app['config']->get('relaya-sdk.http', []);
            $options = [];

            if (array_key_exists('timeout', $http) && $http['timeout'] !== null && $http['timeout'] !== '') {
                $options['timeout'] = (float) $http['timeout'];
            }
            if (array_key_exists('connect_timeout', $http) && $http['connect_timeout'] !== null && $http['connect_timeout'] !== '') {
                $options['connect_timeout'] = (float) $http['connect_timeout'];
            }
            if (array_key_exists('verify', $http)) {
                $options['verify'] = $http['verify'];
            }
            if (!empty($http['proxy'])) {
                $options['proxy'] = $http['proxy'];
            }

            return new Client($options);
        });

        foreach ($this->discoverApiClasses() as $apiClass) {
            $this->app->bind($apiClass, function (Container $app) use ($apiClass) {
                return new $apiClass(
                    $app->make(ClientInterface::class),
                    $app->make(Configuration::class)
                );
            });
        }
    }

    public function boot(): void
    {
        $configPath = function_exists('config_path')
            ? config_path('relaya-sdk.php')
            : $this->app->basePath('config/relaya-sdk.php');

        $this->publishes([
            __DIR__ . '/../../config/relaya-sdk.php' => $configPath,
        ], 'relaya-sdk-config');
    }

    /**
     * @return string[]
     */
    private function discoverApiClasses(): array
    {
        $apiDir = __DIR__ . '/../Api';
        $files = glob($apiDir . '/*Api.php') ?: [];
        $classes = [];

        foreach ($files as $file) {
            $classes[] = 'Relaya\\Sdk\\Api\\' . basename($file, '.php');
        }

        return $classes;
    }
}
