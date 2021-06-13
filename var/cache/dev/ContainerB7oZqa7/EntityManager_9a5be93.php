<?php

namespace ContainerB7oZqa7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa49c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d76a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese481b = [
        
    ];

    public function getConnection()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getConnection', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getMetadataFactory', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getExpressionBuilder', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'beginTransaction', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getCache', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'transactional', array('func' => $func), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->transactional($func);
    }

    public function commit()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'commit', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->commit();
    }

    public function rollback()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'rollback', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'createQuery', array('dql' => $dql), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'createQueryBuilder', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'flush', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'clear', array('entityName' => $entityName), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'close', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->close();
    }

    public function persist($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'persist', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'remove', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'refresh', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'detach', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'merge', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'contains', array('entity' => $entity), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getEventManager', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getConfiguration', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'isOpen', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getUnitOfWork', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getProxyFactory', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'getFilters', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'isFiltersStateClean', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'hasFilters', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return $this->valueHolderaa49c->hasFilters();
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

        $instance->initializer7d76a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa49c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa49c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa49c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__get', ['name' => $name], $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        if (isset(self::$publicPropertiese481b[$name])) {
            return $this->valueHolderaa49c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49c;

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

        $targetObject = $this->valueHolderaa49c;
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
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa49c;
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
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__isset', array('name' => $name), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa49c;
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
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__unset', array('name' => $name), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa49c;
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
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__clone', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        $this->valueHolderaa49c = clone $this->valueHolderaa49c;
    }

    public function __sleep()
    {
        $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, '__sleep', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;

        return array('valueHolderaa49c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d76a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d76a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d76a && ($this->initializer7d76a->__invoke($valueHolderaa49c, $this, 'initializeProxy', array(), $this->initializer7d76a) || 1) && $this->valueHolderaa49c = $valueHolderaa49c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa49c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa49c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
