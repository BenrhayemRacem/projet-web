<?php

namespace Container3X3A7gO;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2902 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer21fe8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0107 = [
        
    ];

    public function getConnection()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getConnection', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getMetadataFactory', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getExpressionBuilder', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'beginTransaction', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getCache', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getCache();
    }

    public function transactional($func)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'transactional', array('func' => $func), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->transactional($func);
    }

    public function commit()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'commit', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->commit();
    }

    public function rollback()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'rollback', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getClassMetadata', array('className' => $className), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'createQuery', array('dql' => $dql), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'createNamedQuery', array('name' => $name), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'createQueryBuilder', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'flush', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'clear', array('entityName' => $entityName), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->clear($entityName);
    }

    public function close()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'close', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->close();
    }

    public function persist($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'persist', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'remove', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'refresh', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'detach', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'merge', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getRepository', array('entityName' => $entityName), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'contains', array('entity' => $entity), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getEventManager', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getConfiguration', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'isOpen', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getUnitOfWork', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getProxyFactory', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'initializeObject', array('obj' => $obj), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'getFilters', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'isFiltersStateClean', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'hasFilters', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return $this->valueHolderc2902->hasFilters();
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

        $instance->initializer21fe8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc2902) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2902 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2902->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__get', ['name' => $name], $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        if (isset(self::$publicPropertiesb0107[$name])) {
            return $this->valueHolderc2902->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2902;

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

        $targetObject = $this->valueHolderc2902;
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
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2902;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2902;
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
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__isset', array('name' => $name), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2902;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2902;
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
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__unset', array('name' => $name), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2902;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2902;
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
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__clone', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        $this->valueHolderc2902 = clone $this->valueHolderc2902;
    }

    public function __sleep()
    {
        $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, '__sleep', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;

        return array('valueHolderc2902');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer21fe8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer21fe8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer21fe8 && ($this->initializer21fe8->__invoke($valueHolderc2902, $this, 'initializeProxy', array(), $this->initializer21fe8) || 1) && $this->valueHolderc2902 = $valueHolderc2902;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2902;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2902;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
