<?php

namespace Ruon\Core\DependencyInjection\Injector;

/**
 *
 * Внедряющий зависимость
 *
 * @author goorus, morph
 *
 */
abstract class InjectorAbstract
{

    /**
     * Источник экземпляров
     *
     * @var \Ruon\Core\DependencyInjection\ContainerInterface
     */
    protected $instanceSource;

    /**
     * Источник сервисов
     *
     * @var \Ruon\Core\DependencyInjection\ContainerInterface
     */
    protected $serviceSource;

    /**
     * Источники
     *
     * @var array of string
     */
    protected $sources = array('instance', 'service');

    /**
     * Возвращает источник экземпляров
     *
     * @return \Ruon\Core\DependencyInjection\ContainerInterface
     */
    public function getInstanceSource()
    {
        return $this->instanceSource;
    }

    /**
     * Возвращает источник сервисов
     *
     * @return \Ruon\Core\DependencyInjection\ContainerInterface
     */
    public function getServiceSource()
    {
        return $this->serviceSource;
    }

    /**
     * Инициализирует зависимости в объекте
     *
     * @param object $object
     */
    abstract public function inject($object);

    /**
     * Устанавливает источник экземпляров
     *
     * @param \Ruon\Core\DependencyInjection\ContainerInterface $source
     * @return $this|InjectorAbstract
     */
    public function setInstanceSource($source)
    {
        $this->instanceSource = $source;

        return $this;
    }

    /**
     * Устанавливает источник сервисов для внедрения
     *
     * @param \Ruon\Core\DependencyInjection\ContainerInterface $source
     * @return $this|InjectorAbstract
     */
    public function setServiceSource($source)
    {
        $this->serviceSource = $source;

        return $this;
    }

}
