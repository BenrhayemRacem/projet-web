<?php

namespace ContainerRSJtR7a;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereaf73 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer979a6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0367d = [
        
    ];

    public function getConnection()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getConnection', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getMetadataFactory', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getExpressionBuilder', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'beginTransaction', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getCache', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getCache();
    }

    public function transactional($func)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'transactional', array('func' => $func), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->transactional($func);
    }

    public function commit()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'commit', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->commit();
    }

    public function rollback()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'rollback', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getClassMetadata', array('className' => $className), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'createQuery', array('dql' => $dql), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'createNamedQuery', array('name' => $name), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'createQueryBuilder', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'flush', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'clear', array('entityName' => $entityName), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->clear($entityName);
    }

    public function close()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'close', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->close();
    }

    public function persist($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'persist', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'remove', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'refresh', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'detach', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'merge', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getRepository', array('entityName' => $entityName), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'contains', array('entity' => $entity), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getEventManager', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getConfiguration', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'isOpen', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getUnitOfWork', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getProxyFactory', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'initializeObject', array('obj' => $obj), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'getFilters', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'isFiltersStateClean', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'hasFilters', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return $this->valueHoldereaf73->hasFilters();
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

        $instance->initializer979a6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereaf73) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereaf73 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereaf73->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__get', ['name' => $name], $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        if (isset(self::$publicProperties0367d[$name])) {
            return $this->valueHoldereaf73->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaf73;

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

        $targetObject = $this->valueHoldereaf73;
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
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaf73;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereaf73;
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
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__isset', array('name' => $name), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaf73;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereaf73;
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
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__unset', array('name' => $name), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaf73;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereaf73;
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
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__clone', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        $this->valueHoldereaf73 = clone $this->valueHoldereaf73;
    }

    public function __sleep()
    {
        $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, '__sleep', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;

        return array('valueHoldereaf73');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer979a6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer979a6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer979a6 && ($this->initializer979a6->__invoke($valueHoldereaf73, $this, 'initializeProxy', array(), $this->initializer979a6) || 1) && $this->valueHoldereaf73 = $valueHoldereaf73;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereaf73;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereaf73;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
