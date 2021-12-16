<?php

namespace ContainerKny2ymr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01e8b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ccba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1724 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getConnection', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getMetadataFactory', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getExpressionBuilder', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'beginTransaction', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getCache', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'transactional', array('func' => $func), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'commit', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->commit();
    }

    public function rollback()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'rollback', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'createQuery', array('dql' => $dql), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'createQueryBuilder', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'flush', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'clear', array('entityName' => $entityName), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'close', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->close();
    }

    public function persist($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'persist', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'remove', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'refresh', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'detach', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'merge', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'contains', array('entity' => $entity), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getEventManager', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getConfiguration', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'isOpen', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getUnitOfWork', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getProxyFactory', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'getFilters', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'isFiltersStateClean', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'hasFilters', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return $this->valueHolder01e8b->hasFilters();
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

        $instance->initializer3ccba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01e8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01e8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01e8b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__get', ['name' => $name], $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        if (isset(self::$publicPropertiesb1724[$name])) {
            return $this->valueHolder01e8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e8b;

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

        $targetObject = $this->valueHolder01e8b;
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
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e8b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01e8b;
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
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__isset', array('name' => $name), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e8b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01e8b;
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
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__unset', array('name' => $name), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e8b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01e8b;
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
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__clone', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        $this->valueHolder01e8b = clone $this->valueHolder01e8b;
    }

    public function __sleep()
    {
        $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, '__sleep', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;

        return array('valueHolder01e8b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ccba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ccba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ccba && ($this->initializer3ccba->__invoke($valueHolder01e8b, $this, 'initializeProxy', array(), $this->initializer3ccba) || 1) && $this->valueHolder01e8b = $valueHolder01e8b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01e8b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01e8b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
