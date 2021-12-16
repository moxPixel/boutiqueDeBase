<?php

namespace Container4OSXMGC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd0174 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc038b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties92b8d = [
        
    ];

    public function getConnection()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getConnection', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getMetadataFactory', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getExpressionBuilder', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'beginTransaction', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getCache', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'transactional', array('func' => $func), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'commit', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->commit();
    }

    public function rollback()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'rollback', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getClassMetadata', array('className' => $className), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'createQuery', array('dql' => $dql), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'createNamedQuery', array('name' => $name), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'createQueryBuilder', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'flush', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'clear', array('entityName' => $entityName), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->clear($entityName);
    }

    public function close()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'close', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->close();
    }

    public function persist($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'persist', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'remove', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'refresh', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'detach', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'merge', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'contains', array('entity' => $entity), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getEventManager', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getConfiguration', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'isOpen', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getUnitOfWork', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getProxyFactory', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'initializeObject', array('obj' => $obj), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'getFilters', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'isFiltersStateClean', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'hasFilters', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return $this->valueHolderd0174->hasFilters();
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

        $instance->initializerc038b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd0174) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0174 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd0174->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__get', ['name' => $name], $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        if (isset(self::$publicProperties92b8d[$name])) {
            return $this->valueHolderd0174->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0174;

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

        $targetObject = $this->valueHolderd0174;
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
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0174;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd0174;
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
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__isset', array('name' => $name), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0174;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd0174;
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
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__unset', array('name' => $name), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0174;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd0174;
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
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__clone', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        $this->valueHolderd0174 = clone $this->valueHolderd0174;
    }

    public function __sleep()
    {
        $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, '__sleep', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;

        return array('valueHolderd0174');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc038b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc038b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc038b && ($this->initializerc038b->__invoke($valueHolderd0174, $this, 'initializeProxy', array(), $this->initializerc038b) || 1) && $this->valueHolderd0174 = $valueHolderd0174;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0174;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0174;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
