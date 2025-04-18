<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \App\Entity\Formation implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'dateDebut' => [parent::class, 'dateDebut', null],
        "\0".parent::class."\0".'departement' => [parent::class, 'departement', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'leProduit' => [parent::class, 'leProduit', null],
        "\0".parent::class."\0".'nbreHeures' => [parent::class, 'nbreHeures', null],
        "\0".parent::class."\0".'sommaire' => [parent::class, 'sommaire', null],
        'dateDebut' => [parent::class, 'dateDebut', null],
        'departement' => [parent::class, 'departement', null],
        'id' => [parent::class, 'id', null],
        'leProduit' => [parent::class, 'leProduit', null],
        'nbreHeures' => [parent::class, 'nbreHeures', null],
        'sommaire' => [parent::class, 'sommaire', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
