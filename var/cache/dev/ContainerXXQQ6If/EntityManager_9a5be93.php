<?php

namespace ContainerXXQQ6If;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25ecb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbd28 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties732ea = [
        
    ];

    public function getConnection()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getConnection', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getMetadataFactory', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getExpressionBuilder', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'beginTransaction', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getCache', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'transactional', array('func' => $func), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->transactional($func);
    }

    public function commit()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'commit', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->commit();
    }

    public function rollback()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'rollback', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'createQuery', array('dql' => $dql), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'createQueryBuilder', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'flush', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'clear', array('entityName' => $entityName), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'close', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->close();
    }

    public function persist($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'persist', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'remove', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'refresh', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'detach', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'merge', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'contains', array('entity' => $entity), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getEventManager', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getConfiguration', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'isOpen', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getUnitOfWork', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getProxyFactory', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'getFilters', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'isFiltersStateClean', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'hasFilters', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return $this->valueHolder25ecb->hasFilters();
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

        $instance->initializerdbd28 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder25ecb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25ecb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25ecb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__get', ['name' => $name], $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        if (isset(self::$publicProperties732ea[$name])) {
            return $this->valueHolder25ecb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ecb;

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

        $targetObject = $this->valueHolder25ecb;
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
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ecb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25ecb;
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
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__isset', array('name' => $name), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ecb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25ecb;
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
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__unset', array('name' => $name), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ecb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25ecb;
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
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__clone', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        $this->valueHolder25ecb = clone $this->valueHolder25ecb;
    }

    public function __sleep()
    {
        $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, '__sleep', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;

        return array('valueHolder25ecb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbd28 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbd28;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbd28 && ($this->initializerdbd28->__invoke($valueHolder25ecb, $this, 'initializeProxy', array(), $this->initializerdbd28) || 1) && $this->valueHolder25ecb = $valueHolder25ecb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25ecb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25ecb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
