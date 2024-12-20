<?php

namespace App\Factory;

use App\Entity\WebsiteDeliveryRole;
use App\Repository\WebsiteDeliveryRoleRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<WebsiteDeliveryRole>
 *
 * @method        WebsiteDeliveryRole|Proxy                     create(array|callable $attributes = [])
 * @method static WebsiteDeliveryRole|Proxy                     createOne(array $attributes = [])
 * @method static WebsiteDeliveryRole|Proxy                     find(object|array|mixed $criteria)
 * @method static WebsiteDeliveryRole|Proxy                     findOrCreate(array $attributes)
 * @method static WebsiteDeliveryRole|Proxy                     first(string $sortedField = 'id')
 * @method static WebsiteDeliveryRole|Proxy                     last(string $sortedField = 'id')
 * @method static WebsiteDeliveryRole|Proxy                     random(array $attributes = [])
 * @method static WebsiteDeliveryRole|Proxy                     randomOrCreate(array $attributes = [])
 * @method static WebsiteDeliveryRoleRepository|RepositoryProxy repository()
 * @method static WebsiteDeliveryRole[]|Proxy[]                 all()
 * @method static WebsiteDeliveryRole[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static WebsiteDeliveryRole[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static WebsiteDeliveryRole[]|Proxy[]                 findBy(array $attributes)
 * @method static WebsiteDeliveryRole[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static WebsiteDeliveryRole[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class WebsiteDeliveryRoleFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'deliveryPrice' => self::faker()->randomFloat(),
            'max' => self::faker()->randomFloat(),
            'min' => self::faker()->randomFloat(),
            'website' => WebsiteFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(WebsiteDeliveryRole $websiteDeliveryRole): void {})
        ;
    }

    protected static function getClass(): string
    {
        return WebsiteDeliveryRole::class;
    }
}
