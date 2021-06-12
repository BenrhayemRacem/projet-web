<?php

namespace ContainerPxW9jEL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e11f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42a95 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1442 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getConnection', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getMetadataFactory', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getExpressionBuilder', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'beginTransaction', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getCache', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'transactional', array('func' => $func), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->transactional($func);
    }

    public function commit()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'commit', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->commit();
    }

    public function rollback()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'rollback', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getClassMetadata', array('className' => $className), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'createQuery', array('dql' => $dql), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'createNamedQuery', array('name' => $name), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'createQueryBuilder', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'flush', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'clear', array('entityName' => $entityName), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->clear($entityName);
    }

    public function close()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'close', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->close();
    }

    public function persist($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'persist', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'remove', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'refresh', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'detach', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'merge', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'contains', array('entity' => $entity), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getEventManager', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getConfiguration', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'isOpen', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getUnitOfWork', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getProxyFactory', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'initializeObject', array('obj' => $obj), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'getFilters', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'isFiltersStateClean', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'hasFilters', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return $this->valueHolder7e11f->hasFilters();
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

        $instance->initializer42a95 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e11f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e11f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e11f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__get', ['name' => $name], $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        if (isset(self::$publicPropertiesb1442[$name])) {
            return $this->valueHolder7e11f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e11f;

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

        $targetObject = $this->valueHolder7e11f;
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
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e11f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e11f;
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
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__isset', array('name' => $name), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e11f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e11f;
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
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__unset', array('name' => $name), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e11f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e11f;
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
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__clone', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        $this->valueHolder7e11f = clone $this->valueHolder7e11f;
    }

    public function __sleep()
    {
        $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, '__sleep', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;

        return array('valueHolder7e11f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42a95 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42a95;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42a95 && ($this->initializer42a95->__invoke($valueHolder7e11f, $this, 'initializeProxy', array(), $this->initializer42a95) || 1) && $this->valueHolder7e11f = $valueHolder7e11f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e11f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e11f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
