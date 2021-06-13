<?php

namespace ContainerJYyfEQe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34262 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20418 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties696cb = [
        
    ];

    public function getConnection()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getConnection', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getMetadataFactory', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getExpressionBuilder', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'beginTransaction', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getCache', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'transactional', array('func' => $func), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->transactional($func);
    }

    public function commit()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'commit', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->commit();
    }

    public function rollback()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'rollback', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getClassMetadata', array('className' => $className), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'createQuery', array('dql' => $dql), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'createNamedQuery', array('name' => $name), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'createQueryBuilder', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'flush', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'clear', array('entityName' => $entityName), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->clear($entityName);
    }

    public function close()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'close', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->close();
    }

    public function persist($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'persist', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'remove', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'refresh', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'detach', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'merge', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'contains', array('entity' => $entity), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getEventManager', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getConfiguration', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'isOpen', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getUnitOfWork', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getProxyFactory', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'initializeObject', array('obj' => $obj), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'getFilters', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'isFiltersStateClean', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'hasFilters', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return $this->valueHolder34262->hasFilters();
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

        $instance->initializer20418 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34262) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34262 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34262->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__get', ['name' => $name], $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        if (isset(self::$publicProperties696cb[$name])) {
            return $this->valueHolder34262->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34262;

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

        $targetObject = $this->valueHolder34262;
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
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34262;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34262;
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
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__isset', array('name' => $name), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34262;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34262;
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
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__unset', array('name' => $name), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34262;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34262;
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
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__clone', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        $this->valueHolder34262 = clone $this->valueHolder34262;
    }

    public function __sleep()
    {
        $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, '__sleep', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;

        return array('valueHolder34262');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20418 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20418;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20418 && ($this->initializer20418->__invoke($valueHolder34262, $this, 'initializeProxy', array(), $this->initializer20418) || 1) && $this->valueHolder34262 = $valueHolder34262;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34262;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34262;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
