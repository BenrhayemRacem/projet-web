<?php

namespace ContainerUa8xbrX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderddc4d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb25b7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ace3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getConnection', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getMetadataFactory', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getExpressionBuilder', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'beginTransaction', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getCache', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'transactional', array('func' => $func), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->transactional($func);
    }

    public function commit()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'commit', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->commit();
    }

    public function rollback()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'rollback', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getClassMetadata', array('className' => $className), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'createQuery', array('dql' => $dql), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'createNamedQuery', array('name' => $name), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'createQueryBuilder', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'flush', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'clear', array('entityName' => $entityName), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->clear($entityName);
    }

    public function close()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'close', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->close();
    }

    public function persist($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'persist', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'remove', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'refresh', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'detach', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'merge', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'contains', array('entity' => $entity), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getEventManager', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getConfiguration', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'isOpen', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getUnitOfWork', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getProxyFactory', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'initializeObject', array('obj' => $obj), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'getFilters', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'isFiltersStateClean', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'hasFilters', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return $this->valueHolderddc4d->hasFilters();
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

        $instance->initializerb25b7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderddc4d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderddc4d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderddc4d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__get', ['name' => $name], $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        if (isset(self::$publicProperties5ace3[$name])) {
            return $this->valueHolderddc4d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddc4d;

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

        $targetObject = $this->valueHolderddc4d;
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
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddc4d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderddc4d;
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
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__isset', array('name' => $name), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddc4d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderddc4d;
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
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__unset', array('name' => $name), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddc4d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderddc4d;
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
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__clone', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        $this->valueHolderddc4d = clone $this->valueHolderddc4d;
    }

    public function __sleep()
    {
        $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, '__sleep', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;

        return array('valueHolderddc4d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb25b7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb25b7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb25b7 && ($this->initializerb25b7->__invoke($valueHolderddc4d, $this, 'initializeProxy', array(), $this->initializerb25b7) || 1) && $this->valueHolderddc4d = $valueHolderddc4d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderddc4d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderddc4d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
