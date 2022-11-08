<?php

namespace Container6iGzVxw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderea9dd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8e0b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties38fec = [
        
    ];

    public function getConnection()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getConnection', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getMetadataFactory', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getExpressionBuilder', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'beginTransaction', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getCache', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'transactional', array('func' => $func), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'commit', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->commit();
    }

    public function rollback()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'rollback', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'createQuery', array('dql' => $dql), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'createQueryBuilder', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'flush', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'clear', array('entityName' => $entityName), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->clear($entityName);
    }

    public function close()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'close', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->close();
    }

    public function persist($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'persist', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'remove', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'refresh', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'detach', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'merge', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'contains', array('entity' => $entity), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getEventManager', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getConfiguration', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'isOpen', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getUnitOfWork', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getProxyFactory', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'getFilters', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'isFiltersStateClean', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'hasFilters', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return $this->valueHolderea9dd->hasFilters();
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

        $instance->initializerc8e0b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderea9dd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderea9dd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderea9dd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__get', ['name' => $name], $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        if (isset(self::$publicProperties38fec[$name])) {
            return $this->valueHolderea9dd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea9dd;

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

        $targetObject = $this->valueHolderea9dd;
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
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea9dd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderea9dd;
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
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__isset', array('name' => $name), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea9dd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderea9dd;
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
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__unset', array('name' => $name), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea9dd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderea9dd;
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
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__clone', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        $this->valueHolderea9dd = clone $this->valueHolderea9dd;
    }

    public function __sleep()
    {
        $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, '__sleep', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;

        return array('valueHolderea9dd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8e0b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8e0b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc8e0b && ($this->initializerc8e0b->__invoke($valueHolderea9dd, $this, 'initializeProxy', array(), $this->initializerc8e0b) || 1) && $this->valueHolderea9dd = $valueHolderea9dd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderea9dd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderea9dd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
