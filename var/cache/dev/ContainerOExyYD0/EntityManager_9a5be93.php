<?php

namespace ContainerOExyYD0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder82b2d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46fdf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties336a3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getConnection', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getMetadataFactory', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getExpressionBuilder', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'beginTransaction', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getCache', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'transactional', array('func' => $func), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->transactional($func);
    }

    public function commit()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'commit', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->commit();
    }

    public function rollback()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'rollback', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getClassMetadata', array('className' => $className), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'createQuery', array('dql' => $dql), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'createNamedQuery', array('name' => $name), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'createQueryBuilder', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'flush', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'clear', array('entityName' => $entityName), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->clear($entityName);
    }

    public function close()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'close', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->close();
    }

    public function persist($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'persist', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'remove', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'refresh', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'detach', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'merge', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'contains', array('entity' => $entity), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getEventManager', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getConfiguration', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'isOpen', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getUnitOfWork', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getProxyFactory', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'initializeObject', array('obj' => $obj), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'getFilters', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'isFiltersStateClean', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'hasFilters', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return $this->valueHolder82b2d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer46fdf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder82b2d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder82b2d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder82b2d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__get', ['name' => $name], $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        if (isset(self::$publicProperties336a3[$name])) {
            return $this->valueHolder82b2d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82b2d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder82b2d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82b2d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder82b2d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__isset', array('name' => $name), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82b2d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder82b2d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__unset', array('name' => $name), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82b2d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder82b2d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__clone', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        $this->valueHolder82b2d = clone $this->valueHolder82b2d;
    }

    public function __sleep()
    {
        $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, '__sleep', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;

        return array('valueHolder82b2d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46fdf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46fdf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46fdf && ($this->initializer46fdf->__invoke($valueHolder82b2d, $this, 'initializeProxy', array(), $this->initializer46fdf) || 1) && $this->valueHolder82b2d = $valueHolder82b2d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder82b2d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder82b2d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
